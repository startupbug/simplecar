<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Modelz;

use Datatables;

use App\Requestz;

use Auth;

use Mail;

use App\Seller_response;

use App\User;

use App\Brand;

use App\Profile;

class CarController extends Controller
{
    public function modelcar_dropdown(Request $request){
    	//return $request->input();

    	$brand_id = $request->input('brand_id');

    	$modelz = Modelz::where('brand_id', $brand_id)->get();

    	$html = "";

    	if(count($modelz)>0){

	    	foreach($modelz as $model) {
	    		$html .= '<option value="'.$model->id.'">'.$model->model_name.'</option>';
	    	}

    	}else{
    		$html = '<option value="">No Models Found for this Car </option>';
    	}

		return \Response::json(array('success' => true, 'html' => $html), 200);
    }

    public function send_model_request(Request $request){

        if(!Auth::check()){
            //Not Logged In
           $this->set_session('Please Login to Send Request and Find Deal.', false);
           return redirect()->route('home');               
        }

           if(Auth::user()->role_id == 3 || Auth::user()->role_id == 1){
               $this->set_session('Admins and Sellers cannot submit Request.', false);
               return redirect()->route('home');               
           }

    	$modelz = Modelz::join('brands', 'brands.id', '=', 'models.brand_id')
    					   ->select('models.id as model_id', 'brands.id as brandz_id', 'models.*', 'brands.*')
    					   ->where('brand_id', $request->input('brand_id'))
    					   ->where('models.id', $request->input('model_id'))
    					   ->first();

    	return view('home.sendrequest')->with('car', $modelz);
    }

    public function submit_req(Request $request){
        //dd($request->input());
       //dd(123);
        /* Validation */

       try{

            $requestz = new Requestz();
            $requestz->brand_id = $request->input('brand_id');
            $requestz->user_id = Auth::user()->id;
            $requestz->req_year = $request->input('req_year');
            $requestz->req_style = $request->input('req_style');
            $requestz->req_ext_color = implode(',',$request->input('req_ext_color'));
            $requestz->req_int_color = implode(',',$request->input('req_int_color'));
            $requestz->req_comment = $request->input('req_comment');
            $requestz->model_id = $request->input('model_id');
            $requestz->status = 0; //status 0 - requested

            $req_id = "";

            if($requestz->save()){
                $req_id = $requestz->id;
               $this->set_session('Request Successfully Submitted.', true);
            }else{
               $this->set_session('Request Couldnot be Submitted.', false);
            }

            return redirect()->route('deal_model_user', ['id' => $req_id]);

        }catch(\Exception $e){
            $this->set_session('Request Couldnot be Submitted. Please Try Again with your'.$e->getMessage(), false);
            return redirect()->route('home');
        }
       // dd($request->input());
    }

    //Seller and Users Requests Browse Page
    public function sel_reqs(){

        //Getting all Requests
        $data['user_requests'] = Requestz::join('brands', 'requests.brand_id', '=', 'brands.id')
                                ->join('models', 'requests.model_id', '=', 'models.id')
                                ->join('users', 'users.id', '=', 'requests.user_id')
                                ->select('models.car_image', 'brands.brand_name', 'models.model_name', 'requests.req_year', 'requests.req_style', 'requests.id as requests_id', 'users.name as user_name');
        
        $data['brands'] = Brand::all();

        if(Auth::check() && Auth::user()->role_id == 2){
            //A user
            $data['user_requests']->where('users.id', Auth::user()->id);
        }

        $data['user_requests'] = $data['user_requests']->get();
       // dd($data['user_requests']);
        return view('home.seller_reqs')->with($data);
    }

    public function deal_model_seller($id){

        $data['car'] = Requestz::join('brands', 'requests.brand_id', '=', 'brands.id')
                                ->join('models', 'requests.model_id', '=', 'models.id')
                                ->select('models.car_image', 'brands.brand_name', 'models.model_name', 'requests.req_year', 'requests.req_style', 'requests.id as requests_id', 'requests.req_ext_color', 'requests.req_int_color')
                                ->where('requests.id', $id)
                                ->first();
        
        $data['profile_update'] = Profile::where('user_id', Auth::user()->id)->first();

        if(is_null($data['profile_update']->contact) || is_null($data['profile_update']->address) || is_null($data['profile_update']->city)){
            $data['profile_updated'] = false;
            $this->set_session('Please Update your Profile to Send Offer.', false);            
        }else{
            $data['profile_updated'] = true;
        }

        return view('home.sendrequest_seller')->with($data);
    }

    public function deal_model_user($id){

        $data['car'] = Requestz::join('brands', 'requests.brand_id', '=', 'brands.id')
                                ->join('models', 'requests.model_id', '=', 'models.id')
                                ->select('models.car_image', 'brands.brand_name', 'models.model_name', 'requests.req_year', 'requests.req_style', 'requests.id as requests_id', 'requests.req_ext_color', 'requests.req_int_color')
                                ->where('requests.id', $id)
                                ->first();
         /* Request Responses */
        $data['sel_responses'] = Seller_response::join('users', 'seller_responses.user_id', '=', 'users.id')
                                       ->join('profiles', 'seller_responses.user_id', '=', 'profiles.user_id')
                                        ->where('seller_responses.req_id', $id)
                                        ->get();
         //dd($data['sel_responses']);               
        return view('home.sendrequest_user')->with($data);
    }

    public function single_response_user($id, $user_id){

        $data['single_sel_responses'] = Seller_response::join('users', 'seller_responses.user_id', '=', 'users.id')
                                       ->join('profiles', 'seller_responses.user_id', '=', 'profiles.user_id')
                                        ->where('seller_responses.req_id', $id)
                                        ->where('seller_responses.user_id', $user_id)
                                        ->first();

        return view('home.single_req_response')->with($data);                                                      
    }

    //Seller-user request filter
    public function sel_reqs_filter(Request $request){
         //dd($request->input());
        //Getting all Requests
        $data['user_requests'] = Requestz::join('brands', 'requests.brand_id', '=', 'brands.id')
                                ->join('models', 'requests.model_id', '=', 'models.id')
                                ->join('users', 'users.id', '=', 'requests.user_id')
                                ->select('models.car_image', 'brands.brand_name', 'models.model_name', 'requests.req_year', 'requests.req_style', 'requests.id as requests_id', 'users.name as user_name');
        
        $data['brands'] = Brand::all();

        /* Filters */
        if($request->has('brand_id')){

            $data['user_requests']->where('requests.brand_id', $request->input('brand_id'));
        }

        if($request->has('model_id')){

            $data['user_requests']->where('requests.model_id', $request->input('model_id'));
        }

        if($request->has('year')){

            $data['user_requests']->where('requests.req_year', $request->input('year'));
        }

        if(Auth::user()->role_id == 2){
            $data['user_requests']->where('requests.user_id', Auth::user()->id);
        }

        $data['user_requests'] = $data['user_requests']->get(); 
        
        return view('home.seller_reqs')->with($data);         
    }

    public function submit_sell_res(Request $request){

        /* Validation */

        try{

            //Inserting Seller Response for this Model by User
            $sel_res = Seller_response::create(array_merge($request->input(), ['user_id' => Auth::user()->id]));

            /* Getting Sellers Details to be sent in Email */
            $email_content = User::join('profiles', 'profiles.user_id', '=', 'users.id')
                             ->select('users.id as user_id', 'profiles.id as profile_id', 'users.name', 'users.email',
                                'profiles.contact', 'profiles.address', 'profiles.city')
                             ->where('profiles.user_id', $sel_res->user_id)
                             ->first();
            //dd($sel_res->user_id);

            //Getting This request's User Email:
            $req_user = Requestz::where('id', $request->input('req_id'))->first(['user_id']);

            $temp = User::where('id', $req_user->user_id)->first(['email']);

            $user_email = $temp->email;

            /* END */

            $result = Mail::queue('emails.seller_response', ['seller_name' => $email_content->name
                ,'sell_email'=>$email_content->email,'sell_contact'=>$sel_res->contact,'sel_comment'=>$sel_res->sel_comment], function ($m) use ($user_email) {
               $m->from('farhanuddin.aimviz@gmail.com', 'SimpleCar');
               $m->to($user_email)->subject('Simple Car Request Response');
            });

            //updating request status
            $req_user_int = Requestz::where('id', $request->input('req_id'))->increment('status');

            if(!$result){
               $this->set_session('Offer Successfully Sent.', true);
            }else{
               $this->set_session('Offer couldnot be Sent.', false);
            }

            return redirect()->route('deal_model_seller', ["id" => $sel_res->req_id]);

        }catch(\Exception $e){
            $this->set_session('Request Couldnot be Submitted.'.$e->getMessage(), false);
            return redirect()->route('deal_model_seller', ["id" => $sel_res->req_id]);
        }

    }
}
