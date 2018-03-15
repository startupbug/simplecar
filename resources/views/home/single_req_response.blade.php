
@extends('masterlayout')
@section('content')
  <div>
    @include('partials.navbar')

    <section id=''>
       <div class='container container-center'>
          <div class='row row-eq-height'>
             <div class='col-md-12  center-div'>
                <div class='config-wrapper'>
                   <div class='specification'>
                      <div class='top' align="center">
                        <ul class='order-menu'>
                          <li class='dash'></li>
                          <li class='active'>
                            Response Detail
                          </li>
                          <li class='dash'></li>
                         </ul>
                      </div>
                      <div class='details'>
                         <div class='row'>

                            <div class='col-sm-10 s-text-size'>
                                  @include('partials.error_section') 

                              <div class="row">
                                <label class="col-md-3">Seller Name : </label> {{$single_sel_responses->name}}
                              </div>                            
                            
                              <div class="row">
                                <label class="col-md-3">Seller Email : </label> {{$single_sel_responses->email}}
                              </div>
                           
                              <div class="row">
                                <label class="col-md-3">Seller Contact : </label> {{$single_sel_responses->contact}}
                              </div>

                              <div class="row">
                                <label class="col-md-3">Seller Address : </label> {{$single_sel_responses->address}}
                              </div>
                            
                              <div class="row">
                                <label class="col-md-3">City : </label> {{$single_sel_responses->city}}
                              </div>
                             
                              <div class="row">
                                <label class="col-md-3">Comment : </label> {{$single_sel_responses->sel_comment}}
                              </div>

                            </div>
                         </div>
                      </div>

                      <hr>


                   </div>

                </div>
             </div>
          </div>
       </div>
    </section>


@endsection
