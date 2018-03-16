@extends('masterlayout')
@section('content')

    @include('partials.navbar')

 <div class='s_userrequest'>
   <ul class="order-menu">
   @if(Auth::user()->role_id == 1)
     <li class="active">User Requests</li>
   @elseif(Auth::user()->role_id == 2)
     <li class="active">My Requests</li>
   @endif


   </ul>
   <form class="simple_form form-inline  s_form" action="{{route('sel_reqs_filter')}}" accept-charset="UTF-8" method="post">
      <input name="utf8" type="hidden" value="&#x2713;" />
      <div class="form-group select required">
         <select class="required form-control form-control"  name="brand_id" id="generation_car_make_id">
                  <option value="">Select Brand</option>
              @foreach($brands as $brand)
                <option value="{{$brand->id}}">{{$brand->brand_name}}</option>
              @endforeach()
         </select>
      </div>

      <div class="form-group grouped_select required">
         <select class="required  form-control form-control"  name="model_id" id="generation_car_model_id">
                  <option value="">Select Model</option>
               <p id="modelDropdown">

                 </p>
         </select>
      </div>

      <div class="form-group grouped_select required">
         <select class="required  form-control form-control" name="year" id="generation_car_model_id">
                  <option value="">Select Year</option>
                  <option value="1995">1995</option>
                  <option value="1999">1999</option>
                  <option value="2000">2000</option>
                  <option value="2001">2001</option>
                  <option value="2002">2002</option>
                  <option value="2003">2003</option>
                  <option value="2004">2004</option>
                  <option value="2005">2005</option>
                  <option value="2006">2006</option>
                  <option value="2007">2007</option>
                  <option value="2008">2008</option>
                  <option value="2009">2009</option>
                  <option value="2010">2010</option>
                  <option value="2011">2011</option>
                  <option value="2012">2012</option>
                  <option value="2013">2013</option>
                  <option value="2014">2014</option>
                  <option value="2015">2015</option>
                  <option value="2016">2016</option>
                  <option value="2017">2017</option>
                  <option value="2018">2018</option>
         </select>
      </div>

      <input type="hidden" name="_token" value="{{Session::token()}}">
      <button name="button" type="submit" class="btn btn-default btn btn-info">Find Requests</button>
   </form>
</div>

<section id="content">
   <div class="container container-center">
      <!--div class="alert alert-dismissable alert-info">
         <button class="close" type="button" aria-hidden="true" data-dismiss="alert">×</button>
         Signed in successfully.
      </div> -->
      <div class="row row-eq-height">
         <div class="container orders-list">
            @if(count($user_requests) > 0)
                  @foreach($user_requests as $request)
                     <div class="col-sm-4">
                     @if(Auth::user()->role_id == 1)
                        <a class="thumbnail" href="{{route('deal_model_seller', ['id' => $request->requests_id])}}">
                     @else(Auth::user()->role_id == 2)
                        <a class="thumbnail" href="{{route('deal_model_user', ['id' => $request->requests_id])}}">
                     @endif
                           <div class="badge-wrapper"></div>
                              @if(isset($request->car_image))
                                 <img class="img-responsive" src="{{asset('/public/dashboard/img/car_assets/'.$request->car_image)}}" alt="Covered">
                              @endif
                           <div class="caption">
                              <div class="clearfix">
                                 <h2 class="pull-left">
                                    {{$request->brand_name}}
                                    <strong>
                                      {{$request->model_name}}
                                    </strong>
                                     @if((Auth::user()->role_id == 1) && (App\Seller_response::isOffered($request->requests_id)))
                                       <span class="label label-success">Already Offered</span>
                                     @endif
                                 </h2>
                                 <div class="generation pull-right">
                                    {{$request->req_year}}
                                 </div>
                              </div>
                              <div class="trim-name">{{$request->req_style}} </div>
                               By {{$request->user_name}}
                           </div>
                        </a>
                     </div>
                  @endforeach
               @else
                  <h1 class="text-center">No Requests Found</h1>
               @endif
            <!--
            <div class="col-sm-4">
               <a class="thumbnail plus" href="/">
                  <div class="plus-wrapper">
                     <span class="plus-sign">+</span>
                  </div>
                  <div class="caption">
                     <h1>Add another car</h1>
                  </div>
               </a>
            </div> -->
         </div>
      </div>
   </div>
</section>

@endsection
