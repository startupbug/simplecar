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

    	$modelz = Modelz::join('brands', 'brands.id', '=', 'models.brand_id')
    					   ->select('models.id as model_id', 'brands.id as brandz_id', 'models.*', 'brands.*')	
    					   ->where('brand_id', $request->input('brand_id'))    					  
    					   ->where('models.id', $request->input('model_id'))
    					   ->first();
        //dd($modelz);
                          
    	return view('home.sendrequest')->with('car', $modelz);
    }

    public function submit_req(Request $request){
        //dd($request->input());

        /* Validation */

       try{ 
            $requestz = new Requestz();
            $requestz->brand_id = $request->input('brand_id');
            $requestz->user_id = Auth::user()->id;
            $requestz->req_year = $request->input('req_year');
            //$requestz->req_style = $request->input('req_year');
            $requestz->req_ext_color = implode(',',$request->input('req_ext_color'));
            $requestz->req_int_color = implode(',',$request->input('req_int_color'));        
            $requestz->req_comment = $request->input('req_comment');
            $requestz->model_id = $request->input('model_id');
            $requestz->status = 1; //status 1 - requested

            if($requestz->save()){
               $this->set_session('Request Successfully Submitted.', true);
            }else{
               $this->set_session('Request Couldnot be Submitted.', false);
            }

            return redirect()->route('home');

        }catch(\Exception $e){
            $this->set_session('Request Couldnot be Submitted.'.$e->getMessage(), false);
            return redirect()->route('home');           
        }               
       // dd($request->input());
    }

    //Seller Requests Browse Page
    public function sel_reqs(){

        //Getting all Requests
        $data['user_requests'] = Requestz::join('brands', 'requests.brand_id', '=', 'brands.id')
                                ->join('models', 'requests.model_id', '=', 'models.id')
                                ->select('models.car_image', 'brands.brand_name', 'models.model_name', 'requests.req_year', 'requests.req_style', 'requests.id as requests_id')
                                ->get();
        //dd($user_requests);

        return view('home.seller_reqs')->with($data);
    }

    public function deal_model($id){
        //dd($id);
        $data['car'] = Requestz::join('brands', 'requests.brand_id', '=', 'brands.id')
                                ->join('models', 'requests.model_id', '=', 'models.id')
                                ->select('models.car_image', 'brands.brand_name', 'models.model_name', 'requests.req_year', 'requests.req_style', 'requests.id as requests_id', 'requests.req_ext_color', 'requests.req_int_color')
                                ->where('requests.id', $id)
                                ->first();
        //dd($data);
        return view('home.sendrequest_seller')->with($data);
    }

    public function submit_sell_res(Request $request){
        
        /* Validation */

        try{
            //Inserting Seller Response for this Model by User
            $sel_res = Seller_response::create($request->input());

            //Getting This request's User:
            $req_user = Requestz::where('id', $request->input('req_id'))->first(['user_id']);

            $temp = User::where('id', $req_user->user_id)->first(['email']);

            $user_email = $temp->email;        

            $result = Mail::queue('emails.seller_response', ['seller_name' => $sel_res->sell_name
                ,'sell_email'=>$sel_res->sell_email,'sell_contact'=>$sel_res->sell_contact,'sel_comment'=>$sel_res->sel_comment], function ($m) use ($user_email) {
               $m->from('farhanuddin.aimviz@gmail.com', 'SimpleCar');
               $m->to('farhanuddin.aimviz@gmail.com')->subject('Simple Car Request Response');
            });

            //updating request status
            $req_user_int = Requestz::where('id', $request->input('req_id'))->increment('status');

            if(!$result){
               $this->set_session('Offer Successfully Sent.', true);
            }else{
               $this->set_session('Offer couldnot be Sent.', false);
            }

            return redirect()->route('deal_model', ["id" => $sel_res->req_id]);            

        }catch(\Exception $e){
            $this->set_session('Request Couldnot be Submitted.'.$e->getMessage(), false);
            return redirect()->route('deal_model', ["id" => $sel_res->req_id]);              
        }

    }
}