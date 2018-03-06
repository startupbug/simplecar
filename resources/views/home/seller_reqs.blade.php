@extends('masterlayout')
@section('content')

    @include('partials.navbar')

<ul class="order-menu">
  <li class="active">User Requests</li>
</ul>

<section id="content">
   <div class="container container-center">
      <!--div class="alert alert-dismissable alert-info">
         <button class="close" type="button" aria-hidden="true" data-dismiss="alert">×</button>
         Signed in successfully. 
      </div> -->
      <div class="row row-eq-height">
         <div class="container orders-list">
            
            @foreach($user_requests as $request)
               <div class="col-sm-4">
                  <a class="thumbnail" href="{{route('deal_model', ['id' => $request->requests_id])}}">
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
                           </h2>
                           <div class="generation pull-right">
                              {{$request->req_year}}
                           </div>
                        </div>
                        <div class="trim-name">{{$request->req_style}}</div>
                     </div>
                  </a>
               </div>
            @endforeach

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