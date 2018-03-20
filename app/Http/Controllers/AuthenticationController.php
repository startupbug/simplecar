<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\User;

use App\Role;

use Auth;

use App\Profile;

use Hash;

use App\Password_reset;

use Mail;

class AuthenticationController extends Controller
{
    public function register_index(){
        return view('authentication.signup');
    }

    //Posting Register Form
    public function register_post(Request $request){
        
        /* Validating User */
       // dd($request->input());
        
        $this->validate($request, [
            'name' => 'required|alpha|max:15|min:5',
            'email' => 'required|email|unique:users,email',
            'role_id' => 'required',
            'password' => 'required|confirmed|min:6|max:18', 
        ]);

        //inserting user
        try{
            $user = new User();
            $user->password = bcrypt($request->password);

            foreach($request->input() as $key => $value) {
                if($key != '_token' && $key != 'password_confirmation' && $key != 'password'){
                    $user->$key = $value;
                }
            }         

            if($user->save()){

	            /*Attaching User Role to the New User */ 
	            // - 1- Seller
	            // - 2- Normal user
	             $user_role = Role::find($request->input('role_id'));
	             $user->attachRole($user_role);

                 /* Creating User Profile */
                 $profile = Profile::create(['user_id'=>$user->id]);

                 $this->set_session('User Successfully Registered.', true);
            }else{
                 $this->set_session('User Couldnot be Registered.', false);
            }
            
            return redirect()->route('register_index');

        }catch(\Exception $e){
            $this->set_session('User Couldnot be Registered.'.$e->getMessage(), false);
            return redirect()->route('register_index');                
        }
    }

    public function login_index(){
        return view('authentication.login');
    }

    //Loggin In
    public function login_post(Request $request){
       
       /* Validation */

        $data['ret_suc'] = "";
        $data['ret_msg'] = "";
        $data['ret_statu'] = "";


      try{
            if(Auth::attempt(['email' => $request->email, 'password' => $request->password ] )) {

                $data['ret_suc'] = true;
                $data['ret_msg'] = "Successfully LoggedIn";
                $data['ret_statu'] = 200;

            }else{

                $data['ret_suc'] = false;
                $data['ret_msg'] = "Invalid Username and Password";
                $data['ret_statu'] = 200;
          
            }

            if($request->ajax()){
               return \Response::json(array('success' => $data['ret_suc'], 'msg' => $data['ret_msg']), $data['ret_statu']); 
            }else{
               $this->set_session($data['ret_msg'], $data['ret_suc']);
               return redirect()->route('login_view');  
            }

      }catch(\Exception $e){

            if($request->ajax()){
               return \Response::json(array('success' => $data['ret_suc'], 'msg' => $data['ret_msg']), $data['ret_statu']); 
            }else{
               $this->set_session($data['ret_msg'], false);
               return redirect()->route('login_view');  
            }                      
      }         
    }

    //Logging out user
    public function logout_user(){
        Auth::logout();
        return redirect()->route('home');          
    }

    //Change Password Form.
    public function pass_post(Request $request){
        /* Validation */
      try{

            if (Hash::check($request->input('oldpassword'), Auth::user()->password)) {
                // The passwords match...
                
                //Updating Password
                $newpassword1 = bcrypt($request->input('newpassword1'));
                $user = User::find(Auth::user()->id);
                $user->password = $newpassword1;
                $password_updated = $user->save();

                if($password_updated){
                   $this->set_session('Password Updated', true);
                }else{
                   $this->set_session('Password couldnot be Updated. Please try again.', false);            
                }
            
            }else{
                //old password doesn't match
                $this->set_session('Please enter Correct Previous Password to change your Password.', false);           
            }
        
            return redirect()->route('profile');

      }catch(\Exception $e){
            $this->set_session('Password couldnot be Updated. '.$e->getMessage(), false);
            return redirect()->route('profile');                
      }
    }

    /*Forget Password Email Module */      
    public function pass_reset_view($token=null){
   
        if(is_null($token)){      
            $data['page_forget_flag'] = 'email';
            return view('authentication.forgetpass')->with($data);  
        }else{
            $data['page_forget_flag'] = 'newpass';
            $data['token'] = $token;
            $password_reset_exists = Password_reset::where('token', $token)->exists();

            if($password_reset_exists){
                return view('authentication.forgetpass')->with($data);   
            }else{
                $this->set_session('Invalid Request. Are you Lost?', false);
                return redirect()->route('login_view');                
            }
        }
    }

    //Reset Password Post
    public function reset_pass_post(Request $request){

      if($request->input('reqPassFlag')=="email"){

            $user = User::where('email', '=', $request->input('passemail'))->first();

            if (is_null($user)) {
                $this->set_session('Email not Found.', false);
                return redirect()->route('pass_reset_view');
            }else{
                        //Emailing user Password Reset Link

                        //Updating Password reset table
                $token = str_random(30);

                $password_reset = new Password_reset();
                $password_reset->email = $request->input('passemail');
                $password_reset->token = $token;

                if($password_reset->save()){

                         //Mail user Password verification Link
                    $mail = Mail::send('emails.forgotpass_email', ['token' => $token, 'user'=>$user ], function ($m) use ($user, $request) {
                        $m->from(config('app.MAIL_USERNAME'), 'Simple Car');
                        $m->to($request->input('passemail'))->subject('SimepleCar Forgot Password Alert');
                    });

                    $this->set_session('Password Renew Link Mailed to you.', true);
                    return redirect()->route('pass_reset_view');

                }else{
                    $this->set_session('Something went wrong. Please Try again.', false);
                    return redirect()->route('pass_reset_view');
               }

           }
            //-----------------------------------------------------------------    
      }else if($request->input('reqPassFlag')=="newpass"){ //email end 

            /* Password Change Submission */
                //Password Form Validation

                $this->validate($request, [
                    'password' => 'required|confirmed|min:6|max:18', 
                ]);
                //Delete Password Reset row from table 'password_resets'
            $password_reset = Password_reset::where('token', $request->input('pass_token'))->first();
            
            if(!is_null($password_reset)){

                $user = User::where('email', $password_reset->email )->first();
                
                $user_update = User::find($user->id);

                $user_update->password = bcrypt($request->input('password'));

                if($user_update->save()){

                    $pass_deleted = Password_reset::where('token', $request->input('pass_token'))->delete();

                    //Deleting Password row from Password reset table.
                    $this->set_session('Password Successfully Updated.', true);
                    return redirect()->route('login_view');
                }else{
                    $this->set_session('Password couldnot be Updated.', false);
                    return redirect()->route('login_view');        
                }

            }else{
                    $this->set_session('Password couldnot be Updated.Token mismatch', false);
                    return redirect()->route('login_view');  
            }
        }

    }

}
