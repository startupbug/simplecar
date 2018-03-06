<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\User;

use App\Role;

use Auth;

class AuthenticationController extends Controller
{
    public function register_index(){
        return view('authentication.signup');
    }

    //Posting Register Form
    public function register_post(Request $request){
        /* Validating User */
        
        //inserting user
        try{
            $user = new User();
            $user->password = bcrypt($request->password);

            foreach($request->input() as $key => $value) {
                if($key != '_token' && $key != 'password2' && $key != 'password'){
                    $user->$key = $value;
                }
            }         

            if($user->save()){

	            /*Attaching User Role to the New User */ 
	            // - 1- Seller
	            // - 2- Normal user 
	             $user_role = Role::find($request->input('role_id'));
	             $user->attachRole($user_role);

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

    //Loggin In
    public function login_post(Request $request){
        //return $request->input();

        //dd($request->input());
       /* Validation */
      try{
            if(Auth::attempt(['email' => $request->email, 'password' => $request->password ] )) {                
                return \Response::json(array('success' => true, 'msg' => 'Successfully LoggedIn'), 200);
            }else{
                return \Response::json(array('success' => false, 'msg' => 'Invalid Username and Password'), 200);           
            }

      }catch(\Exception $e){
                return \Response::json(array('success' => false, 'msg' => 'Invalid Username and Password'), 422);
                //return redirect()->route('login_view');                       
      }         
    }

    //Logging out user
    public function logout_user(){
        Auth::logout();
        return redirect()->route('home');          
    }
           
}
