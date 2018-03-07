<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Profile;

use App\User;

use Auth;

class ProfileController extends Controller
{
    public function index(){

      $data['profile'] = User::join('profiles', 'profiles.user_id', '=', 'users.id')
      						 ->select('users.id as user_id', 'profiles.id as profile_id', 'users.name', 'users.email', 
      						 	'profiles.contact', 'profiles.address', 'profiles.city')
      						 ->where('profiles.user_id', Auth::user()->id)
      					     ->first();

      return view('profile.index')->with($data);
    }

    public function profile_edit_submit(Request $request){
    	//dd($request->input());

    	try{
	    	/* Validation */
	      
        $user_id = $request->input('user_id');
	    	
	    	//Updating User Name if Updation
	    	$user = User::find($user_id);
	    	$user->name = $request->input('name');

	    	//Updating Profile data if Updation
	    	$profile_update = Profile::where('user_id',$user_id)->update([
		    	"address" => $request->input('address'),
		    	"contact" => $request->input('contact'),
		    	"city" => $request->input('city'),
	    	]);

	    	if($user->save() && $profile_update){
            	$this->set_session('Profile updated Successfully.', true);
	    	}else{
            	$this->set_session('Profile updated Successfully.', true);
	    	}
	    	
	    	return redirect()->route('profile');  

        }catch(\Exception $e){
            $this->set_session('Profile Couldnot be updated.'.$e->getMessage(), false);
            return redirect()->route('profile');                
        }
    }
}
