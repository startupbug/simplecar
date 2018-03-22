
@extends('masterlayout')
@section('content')
  <div id='landing_header'>
           @include('partials.navbar')

    <h1>Getting a new car has never been that Simple</h1>
    <div class='container'>
       <form class="simple_form form-inline model-selection" action="{{route('send_model_request')}}" accept-charset="UTF-8" method="post">
          <input name="utf8" type="hidden" value="&#x2713;" />
          <div class="form-group select required generation_car_make_id">
             <select class="select required form-control form-control" required="required" aria-required="Brand" name="brand_id" id="generation_car_make_id"
             @if(!Auth::check() || Auth::user()->role_id==1 || Auth::user()->role_id==3)
                disabled title="Only Users Can Request deals"
             @endif
             >
              @foreach($brands as $brand)
                <option value="{{$brand->id}}">{{$brand->brand_name}}</option>
              @endforeach()
             </select>
          </div>

          <div class="form-group grouped_select required generation_car_model_id">
             <select class="grouped_select required  form-control form-control" required="required" aria-required="Model" name="model_id" id="generation_car_model_id" 

             @if(!Auth::check() || Auth::user()->role_id==1 || Auth::user()->role_id==3)
                disabled title="Only Users Can Request deals"
             @endif             
             >
                <p id="modelDropdown">
                   <option value="123">Modelx</option>
                 </p>
             </select>
          </div>
          <input type="hidden" name="_token" value="{{Session::token()}}">
          <button name="button" type="submit" class="btn btn-default btn btn-info dealButton" disabled>Find best deals</button>
       </form>
    </div>
 </div>
 <div id='how_it_works'>
      @include('partials.error_section')
    <h2>
       How SimpleCar works?
       <span>
       free
       </span>
    </h2>
    <div class='row'>
       <div class='col-sm-2 col-sm-offset-2'>
          <img alt="Choose your car icon" class="img-responsive center-block" src="{{ asset('public/assets/images/works/choose_car_icon.png') }}" />
          <p class='text-center'>
             Choose any car and receive best prices from all dealers, no need to haggle!
          </p>
       </div>
       <div class='col-sm-2 col-sm-offset-1'>
          <img alt="Pick the best price icon" class="img-responsive center-block" src="{{ asset('public/assets/images/works/pick_the_best_price_icon.png') }}" />
          <p class='text-center'>
             Pick the best price/location. No dealer can email or call you until you accept the best offer!
          </p>
       </div>
       <div class='col-sm-2 col-sm-offset-1'>
          <img alt="Car delivered to your door icon" class="img-responsive center-block" src="{{ asset('public/assets/images/works/car_delivered_icon.png') }}" />
          <p class='text-center'>
             Pick up your car at the dealership or have it delivered to your door!
          </p>
       </div>
    </div>
 </div>
 <div id='reviews'>
    <h2>Reviews</h2>
    <div class='row'>
       <div class='col-sm-4 col-sm-offset-2'>
          <img alt="" class="img-responsive userpic" src="{{ asset('public/assets/images/person/daniel.jpg') }}" />
          <p class='quote'>
             I used to spend many weeks trying to find the best price and had to deal with countless emails and calls from pushy sales people. With SimpleCar I just submitted my request and received an amazing offer, no more time wasted!
          </p>
          <p class='author'>
             Daniel S.
          </p>
          <p class='author-description'>
             Leased Cruze $84 per month
             <br>
             $500 drive off
          </p>
       </div>
       <div class='col-sm-4'>
          <img alt="" class="img-responsive userpic" src="{{ asset('public/assets/images/person/maria.jpg') }}" />
          <p class='quote'>
             Buying a car was always like a nightmare for me. I had to ask my boyfriend to do a lot of research to find the best offers and negotiate with all these dealers. I never expected that it would be so easy to get the best price with SimpleCar.
          </p>
          <p class='author'>
             Maria K.
          </p>
          <p class='author-description'>
             Leased Volt $150 per month
             <br>
             $0 drive off
          </p>
       </div>
    </div>
 </div>
 <div id='ready'>
 
   <!-- <h2>Ready to get started?</h2>
    <form class="simple_form form-inline model-selection" action="https://simplecar.co/generations" accept-charset="UTF-8" method="get">
       <input name="utf8" type="hidden" value="&#x2713;" />
      <!-- <div class="form-group select required generation_car_make_id">
         
       </div> 

       <button name="button" type="submit" class="btn btn-default">Find best deals
       <span>Save on average $5,100</span>
       </button>
    </form>
    <p>
       Still not sure which car you want? Click the chat icon or
       <a href='mailto:info@simplecar.co?&amp;subject=Help%20me%20find%20the%20best%20car&amp;body=Hi, please send me good deals for these: -enter type of car, price range or any other requests- '>email</a>
       us for help
    </p>  -->
 </div>

@endsection