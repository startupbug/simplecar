@extends('dashboard.dashboardlayout')
@section('content')

 @include('dashboard.partials.nav')

  <div class="content-wrapper">
    <div class="container-fluid">
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="#">Dashboard</a>
        </li>
        <li class="breadcrumb-item active">All Requests</li>
      </ol>

       @include('partials.error_section')
      <div class="row">

        <div class="col-md-12 col-sm-12 col-xs-12">
          <h4>Model Detail</h4>
          <hr>
        </div>
        <div class="col-md-4 col-sm-12 col-xs-12">
          @if(isset($modelz->image))
             <img src="{{asset('/public/dashboard/img/car_assets/'.$modelz->image)}}" class="img-responsive s_imge_car" />
          @endif
        </div>
        <div class="col-md-3 col-sm-12 col-xs-12">
          <div class="s_padding">
            <h3>@if(isset($modelz->model_name)){{$modelz->model_name}}@endif</h3>
            <p>
              <i class="fa fa-calendar"></i>
              @if(isset($modelz->year)){{$modelz->year}}@endif
            </p>
            <p>
              <b>Brand : </b>
              @if(isset($modelz->brand_name)){{$modelz->brand_name}}@endif
            </p>
             <p>
              <b>Style : </b>
              @if(isset($modelz->style)){{$modelz->style}}@endif
             </p>
             <p>
               <b>Exterior Color : </b>
               <input type="color" name="ext_color" class="s_color_input" value="@if(isset($modelz->ext_color)){{$modelz->ext_color}}@endif" id="" placeholder="">
             </p>
             <p>
               <b>Interior Color : </b>
               <input type="color" name="int_color" value="@if(isset($modelz->int_color)){{$modelz->int_color}}@endif" id="" placeholder="">
             </p>
          </div>
        </div>
        <div class="col-md-5 col-sm-12 col-xs-12">
          <b>Additional Comment:</b>
          <p>@if(isset($modelz->comment)){{$modelz->comment}}@endif</p>
        </div>
    </div>
    <!-- /.container-fluid-->
    <!-- /.content-wrapper-->
@endsection
