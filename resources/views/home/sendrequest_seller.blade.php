@extends('masterlayout')
@section('content')

    @include('partials.navbar')

  <ul class='order-menu'>
     <li class='active'>
        <span class="translation_missing" title="translation missing: en.application.layout.options, model: Order form, models: Order form, Model: Order Form, Models: Order Form">SEND Offer</span>
     </li>
  </ul>

  <!-- <form class="simple_form new_order_form" id="new_order_form" action="{{route('submit_req')}}" accept-charset="UTF-8" method="post"> -->
    <section id='content1' class="">
       <div class='container container-center'>
          <div class='row row-eq-height' >
             <div class='col-md-6'>
                @include('partials.error_section')
                <div class='config-wrapper'>
                   <div class='galleries'>
                      <div class='carousel slide' data-ride='carousel' id='carousel-cars-79103'>
                         <ol class='carousel-indicators'>
                            <li class='active' data-slide-to='0' data-target='#carousel-cars-79103'></li>
                         </ol>
                         <div class='carousel-inner' role='listbox'>
                            <div class='active item'>

                              @if(isset($car->car_image))
                                 <img src="{{asset('/public/dashboard/img/car_assets/'.$car->car_image)}}" alt="" />
                              @endif

                            </div>
                         </div>
                         <a class='left carousel-control' data-slide='prev' href='#carousel-cars-79103' role='button'>
                         <span aria-hidden='true' class='glyphicon glyphicon-chevron-left'></span>
                         <span class='sr-only'>Previous</span>
                         </a>
                         <a class='right carousel-control' data-slide='next' href='#carousel-cars-79103' role='button'>
                         <span aria-hidden='true' class='glyphicon glyphicon-chevron-right'></span>
                         <span class='sr-only'>Next</span>
                         </a>
                      </div>
                      <div class='carousel hidden slide' data-ride='carousel' id='carousel-cars-79104'>
                         <ol class='carousel-indicators'>
                            <li class='active' data-slide-to='0' data-target='#carousel-cars-79104'></li>
                         </ol>
                         <div class='carousel-inner' role='listbox'>
                            <div class='active item'>
                               <img src="{{ asset('public/assets/images/uploads/41g-C7vJZNL.jpg') }}" alt="41g c7vjznl" />
                            </div>
                         </div>
                         <a class='left carousel-control' data-slide='prev' href='#carousel-cars-79104' role='button'>
                         <span aria-hidden='true' class='glyphicon glyphicon-chevron-left'></span>
                         <span class='sr-only'>Previous</span>
                         </a>
                         <a class='right carousel-control' data-slide='next' href='#carousel-cars-79104' role='button'>
                         <span aria-hidden='true' class='glyphicon glyphicon-chevron-right'></span>
                         <span class='sr-only'>Next</span>
                         </a>
                      </div>
                      <div class='carousel hidden slide' data-ride='carousel' id='carousel-cars-79105'>
                         <ol class='carousel-indicators'>
                            <li class='active' data-slide-to='0' data-target='#carousel-cars-79105'></li>
                         </ol>
                         <div class='carousel-inner' role='listbox'>
                            <div class='active item'>
                               <img src="{{ asset('public/assets/images/uploads/41qhQ5PtpsL.jpg') }}" alt="41qhq5ptpsl" />
                            </div>
                         </div>
                         <a class='left carousel-control' data-slide='prev' href='#carousel-cars-79105' role='button'>
                         <span aria-hidden='true' class='glyphicon glyphicon-chevron-left'></span>
                         <span class='sr-only'>Previous</span>
                         </a>
                         <a class='right carousel-control' data-slide='next' href='#carousel-cars-79105' role='button'>
                         <span aria-hidden='true' class='glyphicon glyphicon-chevron-right'></span>
                         <span class='sr-only'>Next</span>
                         </a>
                      </div>
                      <div class='carousel hidden slide' data-ride='carousel' id='carousel-cars-79106'>
                         <ol class='carousel-indicators'>
                            <li class='active' data-slide-to='0' data-target='#carousel-cars-79106'></li>
                         </ol>
                         <div class='carousel-inner' role='listbox'>
                            <div class='active item'>
                               <img src="{{ asset('public/assets/images/uploads/41VXq_2BeeG7L.jpg') }}" alt="41vxq 2beeg7l" />
                            </div>
                         </div>
                         <a class='left carousel-control' data-slide='prev' href='#carousel-cars-79106' role='button'>
                         <span aria-hidden='true' class='glyphicon glyphicon-chevron-left'></span>
                         <span class='sr-only'>Previous</span>
                         </a>
                         <a class='right carousel-control' data-slide='next' href='#carousel-cars-79106' role='button'>
                         <span aria-hidden='true' class='glyphicon glyphicon-chevron-right'></span>
                         <span class='sr-only'>Next</span>
                         </a>
                      </div>
                      <div class='carousel hidden slide' data-ride='carousel' id='carousel-cars-79107'>
                         <ol class='carousel-indicators'>
                            <li class='active' data-slide-to='0' data-target='#carousel-cars-79107'></li>
                         </ol>
                         <div class='carousel-inner' role='listbox'>
                            <div class='active item'>
                               <img src="{{ asset('public/assets/images/uploads/41yrXJ2xlNL.jpg') }}" alt="41yrxj2xlnl" />
                            </div>
                         </div>
                         <a class='left carousel-control' data-slide='prev' href='#carousel-cars-79107' role='button'>
                         <span aria-hidden='true' class='glyphicon glyphicon-chevron-left'></span>
                         <span class='sr-only'>Previous</span>
                         </a>
                         <a class='right carousel-control' data-slide='next' href='#carousel-cars-79107' role='button'>
                         <span aria-hidden='true' class='glyphicon glyphicon-chevron-right'></span>
                         <span class='sr-only'>Next</span>
                         </a>
                      </div>
                      <div class='carousel hidden slide' data-ride='carousel' id='carousel-cars-79108'>
                         <ol class='carousel-indicators'>
                            <li class='active' data-slide-to='0' data-target='#carousel-cars-79108'></li>
                         </ol>
                         <div class='carousel-inner' role='listbox'>
                            <div class='active item'>
                               <img src="{{ asset('public/assets/images/uploads/41aLYs-CXcL.jpg') }}" alt="41alys cxcl" />
                            </div>
                         </div>
                         <a class='left carousel-control' data-slide='prev' href='#carousel-cars-79108' role='button'>
                         <span aria-hidden='true' class='glyphicon glyphicon-chevron-left'></span>
                         <span class='sr-only'>Previous</span>
                         </a>
                         <a class='right carousel-control' data-slide='next' href='#carousel-cars-79108' role='button'>
                         <span aria-hidden='true' class='glyphicon glyphicon-chevron-right'></span>
                         <span class='sr-only'>Next</span>
                         </a>
                      </div>
                   </div>
                   <!--<div class='specification'>
                      <div class='top'>
                         <h5>2017</h5>
                          @if(isset($car->brand_name) && isset($car->model_name))
                            <h3>{{$car->brand_name}}<strong>  {{$car->model_name}}</strong></h3>
                          @endif

                         <h4>75th Anniversary 4dr SUV<small>2.4L 4cyl 9A</small></h4>
                      </div>
                      <div class='details'>
                         <div class='row'>
                            <div class='col-sm-7'>
                               <div class='specific-detail'>
                                  <div class='detail-name'>
                                     Exterior
                                  </div>
                                  <div class='detail-value exterior-colors'>
                                     Whatever is cheaper
                                  </div>
                               </div>
                               <div class='specific-detail'>
                                  <div class='detail-name'>
                                     Interior
                                  </div>
                                  <div class='detail-value interior-colors'>
                                     Whatever is cheaper
                                  </div>
                               </div>
                               <div class='specific-detail'>
                                  <div class='detail-name'>
                                     Packages
                                  </div>
                                  <div class='detail-value packages'>
                                     None
                                  </div>
                               </div>
                            </div>
                         </div>
                      </div>
                   </div> -->
                </div>
             </div>
             <div class='col-md-4 options-form'>
                @if(isset($car->brand_name) && isset($car->model_name))
                 <h1>{{$car->brand_name}} {{$car->model_name}}</h1>
                @endif
                <br>

                @foreach(explode(',', $car->req_year) as $key => $req_year)
                    <div class="years">
                      <!-- <input type="radio" name="req_year" value="{{$req_year}}" @if($key=="0")checked="checked"@endif id="y-{{$req_year}}"> -->
                      <label class="container_radio" for="y-{{$req_year}}">{{$req_year}}
                        <span class="checkmark"></span>
                      </label>
                    </div>
                @endforeach

                <div class='label-lg'>

                   <strong>Style</strong>
                </div>
                <ul class='trims'>
                <!--<li>
                    <a class="not-sure" href="#">
                       <div class='name'>Not sure</div>
                       <div class='description'>
                          Send me the best offers for this model
                       </div>
                    </a>
                 </li> -->

                    @foreach(explode(',', $car->req_style) as $key => $style)

                         <li class='active'>
                            <a href="#">
                               <div class='name'>
                                  {{$style}}
                               </div>
                              <!--  <div class='description'>
                                  2.4L 4cyl 9A
                               </div> -->
                            </a>
                         </li>

                    @endforeach

                </ul>
                 <!--<button class='see-more-trims'>See more</button> -->
                 <input name="utf8" type="hidden" value="&#x2713;" />
                 <input type="hidden" name="authenticity_token" value="YWtZ/jFXcw8K0DfBttZXH1P+73nstvON3GcH1PLt9b2Ihg2ElkO3BdpJdYfDWl8JP6siKQ96LrX2NExlMUJVAg==" />
                 <div class="form-group hidden order_form_trim_id">
                   <input value="2919" class="hidden form-control" type="hidden" name="order_form[trim_id]" id="order_form_trim_id" />
                 </div>
                 <div class="form-group hidden order_form_generation_id">
                   <input value="400" class="hidden form-control" type="hidden" name="order_form[generation_id]" id="order_form_generation_id" />
                 </div>
                 <div class="form-group hidden order_form_bodies">
                   <input value="79098" class="hidden" type="hidden" name="order_form[bodies]" id="order_form_bodies" />
                 </div>
                 <div class="form-group hidden order_form_engines">
                   <input value="79101" class="hidden" type="hidden" name="order_form[engines]" id="order_form_engines" />
                 </div>
                 <div class="form-group hidden order_form_transmissions">
                   <input value="79102" class="hidden" type="hidden" name="order_form[transmissions]" id="order_form_transmissions" />
                 </div>
                 <label class='label-lg'>Colors</label>
                 <div class='label-wrapper'>
                    <label class="check_boxes" for="order_form_exterior_colors">Exterior</label>
                    <div class='whatever'>
                       <input name="order_form[exterior_color_whatever]" type="hidden" value="0" />
                       <!--<input class="boolean optional" type="checkbox" value="1" checked="checked" name="order_form[exterior_color_whatever]" id="order_form_exterior_color_whatever" />
                       <label for="order_form_exterior_color_whatever">Whatever is the best deal</label> -->
                    </div>
                 </div>
                 <div class="form-group check_boxes optional order_form_exterior_colors">
                   <input type="hidden" name="order_form[exterior_colors][]" value="" />

                   @foreach(explode(',', $car->req_ext_color) as $key => $value)
                     <span class="checkbox">
                       <input class="check_boxes optional form-control" data-color="{{$value}}" type="checkbox" value="{{$value}}" name="req_ext_color[]" id="order_form_exterior_colors_{{$value}}" />
                       <label class="collection_check_boxes" for="order_form_exterior_colors_{{$value}}"></label>
                     </span>
                   @endforeach

                   <!--<span class="checkbox">
                     <input class="check_boxes optional form-control" data-color="#5C6467" type="checkbox" value="79103" name="order_form[exterior_colors][]" id="order_form_exterior_colors_79103" />
                     <label class="collection_check_boxes" for="order_form_exterior_colors_79103">Billet Metallic Clear Coat</label>
                   </span>

                   <span class="checkbox">
                     <input class="check_boxes optional form-control" data-color="#484848" type="checkbox" value="79104" name="order_form[exterior_colors][]" id="order_form_exterior_colors_79104" />
                     <label class="collection_check_boxes" for="order_form_exterior_colors_79104">Granite Metallic Clear Coat</label>
                   </span>
                   <span class="checkbox">
                     <input class="check_boxes optional form-control" data-color="#2A3A1F" type="checkbox" value="79108" name="order_form[exterior_colors][]" id="order_form_exterior_colors_79108" />
                     <label class="collection_check_boxes" for="order_form_exterior_colors_79108">Recon Green Clear Coat</label>
                   </span>
                   <span class="checkbox">
                     <input class="check_boxes optional form-control" data-color="#636569" type="checkbox" value="79107" name="order_form[exterior_colors][]" id="order_form_exterior_colors_79107" />
                     <label class="collection_check_boxes" for="order_form_exterior_colors_79107">Bruiser Grey Clear Coat</label>
                   </span>
                   <span class="checkbox">
                     <input class="check_boxes optional form-control" data-color="#FFFFFF" type="checkbox" value="79106" name="order_form[exterior_colors][]" id="order_form_exterior_colors_79106" />
                     <label class="collection_check_boxes" for="order_form_exterior_colors_79106">White Knuckle Clear Coat</label>
                   </span>
                   <span class="checkbox">
                     <input class="check_boxes optional form-control" data-color="#000000" type="checkbox" value="79105" name="order_form[exterior_colors][]" id="order_form_exterior_colors_79105" />
                     <label class="collection_check_boxes" for="order_form_exterior_colors_79105">DB Black Pearl Coat</label>
                   </span> -->

                 </div>
                 <div class='label-wrapper'>
                    <label class="check_boxes" for="order_form_interior_colors">Interior</label>
                    <div class='whatever'>
                       <input name="order_form[interior_color_whatever]" type="hidden" value="0" />
                       <!--<input class="boolean optional" type="checkbox" value="1" checked="checked" name="order_form[interior_color_whatever]" id="order_form_interior_color_whatever" />
                       <label for="order_form_interior_color_whatever">Whatever is the best deal</label> -->
                    </div>
                 </div>
                 <div class="form-group check_boxes optional order_form_interior_colors">
                   <input type="hidden" name="order_form[interior_colors][]" value="" />

                   @foreach(explode(',', $car->req_int_color) as $key => $value)
                     <span class="checkbox">
                       <input class="check_boxes optional form-control" data-color="{{$value}}" type="checkbox" value="{{$value}}" name="req_int_color[]" id="order_form_interior_colors_{{$value}}" />
                       <label class="collection_check_boxes" for="order_form_interior_colors_{{$value}}"></label>
                     </span>
                   @endforeach

                   <!--<span class="checkbox">
                     <input class="check_boxes optional form-control" data-color="#887F70" type="checkbox" value="79110" name="order_form[interior_colors][]" id="order_form_interior_colors_79110" />
                     <label class="collection_check_boxes" for="order_form_interior_colors_79110">Black/Light Frost Beige</label>
                   </span>
                   <span class="checkbox">
                     <input class="check_boxes optional form-control" data-color="#2E2E2E" type="checkbox" value="79109" name="order_form[interior_colors][]" id="order_form_interior_colors_79109" />
                     <label class="collection_check_boxes" for="order_form_interior_colors_79109">Black</label>
                   </span> -->
                 </div>

                <form class="simple_form new_order_form" id="new_order_form" action="{{route('submit_sell_res')}}" accept-charset="UTF-8" method="post">

                 <div class="form-group text optional order_form_comment">
                   <label class="text optional control-label text-left" for="order_form_comment"><b>Offer: </b></label>
                   <input type="number" class="form-control" name="offer" required>
                 </div>

                 <div class="form-group text optional order_form_comment">
                   <label class="text optional control-label" for="order_form_comment">
                     <b>Any additional comments or special requests?</b>
                   </label>
                   <textarea rows="3" placeholder="Navigation is a must, trade-in, etc..." class="text optional form-control" name="sel_comment" id="order_form_comment"></textarea>
                 </div>
                 <input type="hidden" name="_token" value="{{Session::token()}}">
                 <input type="hidden" name="req_id" value="{{$car->requests_id}}">

              @if($profile_updated)
                 @if(Auth::check())
                  <input type="submit" name="submit" value="Send Offer to User" class="btn s_button"/>
                 @else
                   <input type="submit" name="submit" value="Please Login to Send Offer" class="btn s_button"/>
                 @endif
              @else
                <input type="submit" name="submit" value="Send Offer to User" class="btn s_button" disabled>
              @endif                               
                </form>

             </div>
          </div>
       </div>
    </section>
    <section id="content2" class="hidden">
       <div class="container container-center">
          <div class="row row-eq-height" style="padding-bottom: 25px;">
             <div class="col-md-6">
                <div class="gallery">

                  @if(isset($car->car_image))
                     <img class="img-responsive" src="{{asset('/public/dashboard/img/car_assets/'.$car->car_image)}}"  alt="Covered"/>
                  @endif
                </div>
                <!--<div class="specification">
                   <div class="top">
                      <h5>
                         2017
                      </h5>
                      <h3>
                         Jeep
                         <strong>
                         Cherokee
                         </strong>
                      </h3>
                      <h4>
                         75th Anniversary 4dr SUV
                         <small>
                         2.4L 4cyl 9A
                         </small>
                      </h4>
                   </div>
                   <div class="details">
                      <div class="row">
                         <div class="col-sm-7">
                            <div class="specific-detail">
                               <div class="detail-name">
                                  Exterior
                               </div>
                               <div class="detail-value exterior-colors">
                                  Whatever is cheaper
                               </div>
                            </div>
                            <div class="specific-detail">
                               <div class="detail-name">
                                  Interior
                               </div>
                               <div class="detail-value interior-colors">
                                  Whatever is cheaper
                               </div>
                            </div>
                            <div class="specific-detail">
                               <div class="detail-name">
                                  Packages
                               </div>
                               <div class="detail-value packages">
                                  None
                               </div>
                            </div>
                            <div class="specific-detail">
                               <div class="detail-name">
                                  Comment
                               </div>
                               <div class="detail-value comment">
                               </div>
                            </div>
                         </div>
                      </div>
                   </div>
                   <div class="bottom">
                      <div class="row">
                         <div class="col-sm-6">
                            <div class="specific-detail">
                               <div class="detail-name">
                                  Payment Method
                               </div>
                               <div class="detail-value payment-methods">
                                  <div>
                                     Whatever is the best deal
                                  </div>
                               </div>
                            </div>
                         </div>
                         <div class="col-sm-6">
                            <div class="specific-detail">
                               <div class="detail-name">
                                  ZIP Code
                               </div>
                               <div class="detail-value zip-code">
                                  99999
                               </div>
                            </div>
                         </div>
                      </div>
                   </div>
                </div> -->
             </div>
             <div class="col-md-5 offers-form">
                <h2>
                   Great choice, ready to get an amazing offer?
                </h2>
                <h6>
                   Our team will negotiate with all dealers and you will see the best deals in your showroom.
                </h6>
                <div class="row">
                   <div class="col-md-10 col-md-offset-1">
                      <!--<form class="simple_form new_user_identity" id="new_user_identity" action="#" accept-charset="UTF-8" method="post"> -->
                         <input name="utf8" type="hidden" value="✓"><input type="hidden" name="authenticity_token" value="F31CyTMrl97xhWkgFF8zLe2u4Fvyez+D66R3VzqpUdPmdODF5BA2jKMS2jH8BBJNhtckLCCPL9QiwsGglju1kA==">
                         <div class="form-group email required user_identity_email">
                            <input class="string email required form-control form-control form-control" required="required" aria-required="true" placeholder="Email" type="email" name="user_identity[email]"
                            value="@if(Auth::check()){{Auth::user()->email}}@endif"
                            id="user_identity_email">
                            <p class="help-block">(Confirm your Email Address)</p>
                         </div>
                         <input type="hidden" name="brand_id" value="{{$car->brandz_id}}" />
                         <input type="hidden" name="model_id" value="{{$car->model_id}}" />
                         <input type="hidden" name="_token" value="{{Session::token()}}" />
                         <input type="submit" name="commit" value="Get best offers" class="btn btn-lg btn-block" data-disable-with="Get best offers">
                      </form>
                   </div>
                </div>
             </div>
          </div>
       </div>
    </section>
  <!--</form>-->

@endsection
