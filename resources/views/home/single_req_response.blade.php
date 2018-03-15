
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

                            <div class='col-sm-12  center-div'>
                                  @include('partials.error_section')                             
                            
                             Seller Name: {{$single_sel_responses->name}}
                             <br>
                             Seller Email: {{$single_sel_responses->email}}
                             <br>
                             Seller Contact: {{$single_sel_responses->contact}}
                             <br>
                             Seller Address: {{$single_sel_responses->address}}
                             <br>
                             City: {{$single_sel_responses->city}}
                             <br>
                             Comment: {{$single_sel_responses->sel_comment}}
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
