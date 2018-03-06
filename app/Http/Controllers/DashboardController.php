<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Brand;

use App\Modelz;

use Illuminate\Support\Facades\Input;

use App\Requestz;

use App\User;

use Datatables;

class DashboardController extends Controller
{
    //Dashboard Index Page
    public function index(){
      $data['total_requests'] = Requestz::count();
      $data['total_users'] = User::count();
      $data['total_modelz'] = Modelz::count();

    	return view('dashboard.dashboard-index')->with($data);
    }

    //Dashboard Add Brand And Model
    public function add_brand_type(){    	
      $brands = Brand::all();
    	return view('dashboard.add-model-type')->with('brands', $brands);
    }

    //Inserting Brand
    public function add_brand(Request $request){
    	 
         /* Validation */

         /*Uniquq brand validation*/
        try{

            $brand = new Brand();
            $brand->brand_name = $request->input('brand_name');

            if($brand->save()){
                 $this->set_session('Brand Successfully Inserted.', true);
            }else{
                 $this->set_session('Brand Couldnot be Inserted.', false);
            }
            
            return redirect()->route('add_brand_type');

        }catch(\Exception $e){
            $this->set_session('Brand Couldnot be Registered.'.$e->getMessage(), false);
            return redirect()->route('add_brand_typ');                
        }    	
    }

    //Inserting Model
    public function model_submit(Request $request){
    	
    	 /* Validation */
      
     //  dd($request->input());

         /* Unique model with brand validation */
        try{    	

	        $model = new Modelz();
	        
	        foreach($request->input() as $key => $value) {
	            if($key != '_token' && $key != 'ext_color_prev' && $key != 'int_color_prev'){
	                $model->$key = $value;
	            }
	        }

           if(Input::hasFile('car_image')){
                $file = Input::file('car_image');
                $tmpFilePath = '/dashboard/img/car_assets';
                $tmpFileName = time() . '-' . $file->getClientOriginalName();
                $file = $file->move(public_path() . $tmpFilePath, $tmpFileName);
                $path = $tmpFileName;

                $model->car_image = $path;
            }


            if($model->save()){
                 $this->set_session('Model Successfully Added.', true);
            }else{
                 $this->set_session('Model Couldnot be Added.', false);
            }
            
            return redirect()->route('add_brand_type');


        }catch(\Exception $e){
            $this->set_session('Model Couldnot be Added.'.$e->getMessage(), false);
            return redirect()->route('add_brand_type');                
        }        
    }

    //Browse All Requests Page
    public function requests(){
        return view('dashboard.requests');
    }

    //Requests Datatable data
    public function add_reqs_dt(){

           $requests = Requestz::join('brands','requests.brand_id', '=', 'brands.id')
                  ->join('models','requests.model_id', '=', 'models.id')
                  ->select('models.car_image as image', 'brands.brand_name', 'requests.req_year', 'requests.req_style', 
                    'requests.req_ext_color', 'requests.req_int_color', 'requests.req_comment', 'requests.status')->get();

           return Datatables::of($requests)->editColumn('image',
            function($requests){
              $images = explode(',', $requests->image);
             return '<img src='.asset('/public/dashboard/img/car_assets/'.$images[0]).' height="50" width="50" alt />';
           })->editColumn('status',
            function($requests){
              
              if($requests->status>0){
                return '<span class="badge badge-success">'.$requests->status.' User Responded</span>';
              }else{
                return '<span class="badge badge-danger">Requested</span>';
              }
             

           })->make(true);

/*->addColumn('action',
            function($requests){
              return '<a href="#" data-toggle="modal" data-target="#transactions_view"><span> Edit </span></a>';
           }*/

        return view('dashboard.requests');
    }

    //All Models Datatable
    public function models_dt(){

           $modelz = Modelz::join('brands', 'brands.id', '=', 'models.brand_id')
              ->select('models.id as model_id', 'models.car_image as image', 'brands.brand_name', 'models.model_name', 'models.year', 
                'models.style', 'models.ext_color', 'models.int_color', 'models.comment')
              ->get();

           return Datatables::of($modelz)->editColumn('image',
              function($modelz){
                $images = explode(',', $modelz->image);
                  return '<img src='.asset('/public/dashboard/img/car_assets/'.$images[0]).' height="50" width="50" alt />';
           })->addColumn('action',
              function($modelz){
                  return '<a href="'.route('edit_model_view', ['id'=> $modelz->model_id]).'"><button type="button" class="btn btn-success">Edit</button></a><a class="delModal" data-id="'.$modelz->model_id.'"><button type="button" class="btn btn-danger">Delete</button></a><a class="delModal" data-id="'.$modelz->model_id.'"><button type="button" class="btn btn-danger">Delete</button></a>';
           })->make(true);
    }

    //Edit Model
    public function edit_model_view($modelid){
      
      /* Validation */

      $data['brands'] = Brand::all();

      $data['modelz'] = Modelz::join('brands', 'brands.id', '=', 'models.brand_id')
                              ->select('models.id as model_id', 'models.brand_id as brand_id', 'models.car_image as image', 'brands.brand_name', 'models.model_name', 'models.year', 'models.style', 'models.ext_color', 'models.int_color', 'models.comment')
                              ->where('models.id', $modelid)
                              ->first();
                        
      return view('dashboard.edit-model')->with($data);
    }

    //Submitting Edit Model
    public function edit_model_submit(Request $request){
        //dd($request->input());
        try{

            /* Validation */
            $modelz_edit = Modelz::find($request->input('model_id'));
           // dd($request->input());
            //Editing Model
              foreach($request->input() as $key => $value) {
                  if($key != '_token'){
                     if($key != 'model_id'){
                          $modelz_edit->$key = $value;
                     }
                  }
              }

             if(Input::hasFile('car_image')){
                  $file = Input::file('car_image');
                  $tmpFilePath = '/dashboard/img/car_assets';
                  $tmpFileName = time() . '-' . $file->getClientOriginalName();
                  $file = $file->move(public_path() . $tmpFilePath, $tmpFileName);
                  $path = $tmpFileName;

                  $modelz_edit->car_image = $path;
              }

              if($modelz_edit->save()){
                   $this->set_session('Model Successfully Edited.', true);
              }else{
                   $this->set_session('Model Couldnot be Edited.', false);
              }
              
              return redirect()->route('edit_model_view', ['id' => $request->input('model_id')]);

        }catch(\Exception $e){
            $this->set_session('Model Couldnot be Edited.'.$e->getMessage(), false);
            return redirect()->route('edit_model_view', ['id'=> $request->input('model_id')]);           
        }                   

    }

    public function del_model(Request $request){

        /* Validation */
        
        if($request->has('id')){
            $modal_id = $request->input('id');
            $modelz_del = Modelz::find($modal_id);            
            
            if($modelz_del->delete()){
                return \Response::json(array('success' => true, 'msg' => 'Successfully Deleted'), 200);
            }else{
                return \Response::json(array('success' => false, 'msg' => 'Couldnot be Deleted'), 200);
            }

        }else{
                return \Response::json(array('success' => false, 'msg' => 'Couldnot be Deleted'), 200);
        }
    }

    /* User Management Index */
    public function user_mgnt_index(){
      return view('dashboard.user-mngmt');
    }

    /* User Datatable */
    public function users_dt(){

       $users = User::join('roles', 'roles.id', '=', 'users.role_id')
                      ->select('users.name as user_name', 'users.email', 'roles.name as role_name', 'users.created_at as registered_at')
                      ->get();

       return Datatables::of($users)->make(true);      
    }

    /* Dashboard Request Responses */
    public function request_responses($requestid){
        dd($requestid);
    }
}
