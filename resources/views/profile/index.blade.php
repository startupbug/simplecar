
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
                            Profile
                          </li>
                          <li class='dash'></li>
                         </ul>
                      </div>
                      <div class='details'>
                         <div class='row'>

                            <div class='col-sm-12  center-div'>
                                  @include('partials.error_section')                             
                              <form class="simple_form user_identity" action="{{route('profile_edit_submit')}}" accept-charset="UTF-8" method="post">
                                 <div class='form-inputs'>
                                   <div class="form-group email required user_identity_name col-sm-5 col-sm-offset-1">
                                     <label class="name required control-label" for="_user_identity_name">
                                       <abbr title="required">*</abbr> Name
                                     </label>
                                     <input class="string name required form-control form-control form-control" autofocus="autofocus" required="required" aria-required="true" type="text" value="{{isset($profile->name) ? $profile->name:''}}" name="name" id="_user_identity_name" />
                                   </div>
                                   <div class="form-group email required user_identity_email col-sm-5">
                                      <label class="email required control-label" for="_user_identity_email">
                                        <abbr title="required">*</abbr> Email
                                      </label>
                                      <input class="string email required form-control form-control form-control" autofocus="autofocus" required="required" aria-required="true" type="email" value="{{isset($profile->email) ? $profile->email:''}}" name="email" id="_user_identity_email" disabled/>
                                   </div>
                                   <div class="form-group required col-sm-5 col-sm-offset-1">
                                      <label class="required control-label" for="_user_identity_address">
                                        <abbr title="required">*</abbr> Address
                                      </label>
                                      <input class="string required form-control form-control form-control" autofocus="autofocus"  aria-required="true" type="text" value="{{isset($profile->address) ? $profile->address:''}}" name="address" id="_user_identity_address" />
                                   </div>
                                   <div class="form-group required  col-sm-5">
                                       <label class="required control-label" for="_user_identity_contact">
                                         <abbr title="required">*</abbr> Contact
                                       </label>
                                       <input class="string required form-control form-control form-control" autofocus="autofocus" aria-required="true" type="text" name="contact" value="{{isset($profile->contact) ? $profile->contact:''}}"  id="_user_identity_contact" />
                                   </div>
                                   <div class="form-group required col-sm-5 col-sm-offset-1">
                                      <label class="required control-label" for="_user_identity_city">
                                        <abbr title="required">*</abbr> City
                                      </label>
                                      <input class="string required form-control form-control form-control" autofocus="autofocus"  aria-required="true" type="text" value="{{isset($profile->city) ? $profile->city:''}}" name="city" id="_user_identity_city" />
                                   </div>
                                   <div class="form-group required  col-sm-5">
                                       <label class="required control-label" for="_user_identity_area">
                                         <abbr title="required">*</abbr> Phone
                                       </label>
                                       <input class="string required form-control form-control form-control" autofocus="autofocus"  aria-required="true" type="text" name="contact" id="_user_identity_area" />
                                   </div>
                                 </div>
                                 <div class='col-sm-10 col-sm-offset-1' align="right">
                                     <input type="hidden" name="_token" value="{{Session::token()}}">
                                     <input type="hidden" name="user_id" value="{{$profile->user_id}}">
                                    <input type="submit" name="commit" value="Edit" class="btn btn-default" data-disable-with="Sign up" />
                                 </div>
                              </form>
                            </div>
                         </div>
                      </div>

                      <hr>

                      <div class='top' align="center">
                        <ul class='order-menu'>
                          <li class='dash'></li>
                          <li class='active'>
                            Change Password
                          </li>
                          <li class='dash'></li>
                         </ul>
                      </div>
                      <div class='details'>
                         <div class='row'>
                            <div class='col-sm-12  center-div'>
                              <form class="simple_form user_identity" action="#" accept-charset="UTF-8" method="post">
                                 <div class='form-inputs'>
                                   <div class="form-group password required user_identity_password col-sm-5 col-sm-offset-1">
                                      <label class="password required control-label" for="_user_identity_password">
                                        <abbr title="required">*</abbr> Old Password
                                      </label>
                                      <input class="password required form-control form-control" required="required" aria-required="true" type="password" name="password" id="_user_identity_password" />
                                   </div>
                                   <div class="form-group password required user_identity_password col-sm-5">
                                      <label class="password required control-label" for="_user_identity_conf_password">
                                        <abbr title="required">*</abbr> New Password
                                      </label>
                                      <input class="password required form-control form-control" required="required" aria-required="true" type="password" name="conf_password" id="_user_identity_conf_password" />
                                   </div>
                                 </div>
                                 <div class='col-sm-10 col-sm-offset-1' align="right">
                                    <input type="submit" name="commit" value="Update" class="btn btn-default" data-disable-with="Sign up" />
                                 </div>
                              </form>
                            </div>
                         </div>
                      </div>


                   </div>

                </div>
             </div>
          </div>
       </div>
    </section>


@endsection
