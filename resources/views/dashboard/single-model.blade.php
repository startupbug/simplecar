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
        
           <h1>Model</h1>         
             <form id="model" action="{{route('edit_model_submit')}}" method="post" enctype="multipart/form-data">
                <div class="form-group">
                  <label for="exampleInputEmail1">Model Detail:</label>
                   <p>@if(isset($modelz->model_name)){{$modelz->model_name}}@endif</p>
                </div>

                <div class="form-group">
                  <label for="exampleInputEmail1">Year:</label> 
                     <p>@if(isset($modelz->year)){{$modelz->year}}@endif</p>
                </div>

                <div class="form-group">
                  <label for="exampleInputEmail1">Style:</label>
                   <p>@if(isset($modelz->style)){{$modelz->style}}@endif</p>
                </div>

                <div class="form-group">
                  <label for="exampleInputEmail1">Exterior Color:</label>
                  <input type="color" name="ext_color" value="@if(isset($modelz->ext_color)){{$modelz->ext_color}}@endif" id="" placeholder="">
                </div>

                <div class="form-group">
                  <label for="exampleInputEmail1">Interior Color:</label>
                  <input type="color" name="int_color" value="@if(isset($modelz->int_color)){{$modelz->int_color}}@endif" id="" placeholder="">
                </div>

                <div class="form-group">
                  <label for="exampleInputEmail1">Brand:</label>
                      <p>@if(isset($modelz->brand_name)){{$modelz->brand_name}}@endif</p>
                </div>          

                <div class="form-group">
                  @if(isset($modelz->image))
                     <img src="{{asset('/public/dashboard/img/car_assets/'.$modelz->image)}}" />
                  @endif
                </div>

                <div class="form-group">
                  <label for="exampleInputEmail1">Additional Comment:</label>
                   <p>@if(isset($modelz->comment)){{$modelz->comment}}@endif</p>
                </div>                            
             </form>
    </div>
    <!-- /.container-fluid-->
    <!-- /.content-wrapper-->
@endsection