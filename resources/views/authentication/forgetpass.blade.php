@extends('masterlayout')
@section('content')

           @include('partials.navbar')
<section id="content">
   <div class="container container-center">
      <div class="row row-eq-height">
         <div class="sign-in col-md-4 col-md-offset-4 col-sm-8 col-sm-offset-2 col-xs-10 col-xs-offset-1">
            <!-- <h2>Sign in</h2> -->
                @include('partials.error_section')

                @if (count($errors) > 0)
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                             
            <form class="simple_form user_identity" action="{{route('reset_pass_post')}}" accept-charset="UTF-8" method="post">
               <div class="form-inputs">
                    @if($page_forget_flag=="email")
                          <div class="form-group email required user_identity_email">
                            <label class="email required control-label" for="from_view_user_identity_email">
                              <abbr title="required">*</abbr> Email
                            </label>
                            <input class="string email required form-control form-control form-control" autofocus="autofocus" required="required" aria-required="true" type="email" name="passemail" id="from_view_user_identity_email">
                            <input type="hidden" class="form-control required" name="reqPassFlag" value="email" id="exampleInputPassword1">                            
                          </div>
                    @elseif($page_forget_flag=="newpass")
                            <div class="form-group password required user_identity_password">
                              <label class="password required control-label" for="from_view_user_identity_password">
                                <abbr title="required">*</abbr> Password
                              </label>
                              <input class="password required form-control form-control" required="required" aria-required="true" type="password" name="password" id="from_view_user_identity_password">
                            </div>

                            <div class="form-group password required user_identity_password">
                              <label class="password required control-label" for="from_view_user_identity_password">
                                <abbr title="required">*</abbr> Re-enter Password
                              </label>
                              <input class="password required form-control form-control" required="required" aria-required="true" type="password" name="password_confirmation" id="from_view_user_identity_password">
                            </div>
                            <input type="hidden" name="pass_token" value="{{$token}}">
                            <input type="hidden" class="form-control required" name="reqPassFlag" value="newpass" id="exampleInputPassword1">
                    @endif
               </div>
               <div class="form-actions">
                <input type="hidden" name="_token" value="{{Session::token()}}" class="btn btn-default">
                @if($page_forget_flag=="email")
                  <input type="submit" name="submit" value="Send Password Link" class="btn btn-default" data-disable-with="Send Password Link">
                @elseif($page_forget_flag=="newpass")
                  <input type="submit" name="submit" value="Change Password" class="btn btn-default" data-disable-with="Change Password">
                @endif                 
               </div>
            </form>
            <div class="want-to-sign-up">
               <a href="{{route('register_index')}}">Want to sign up?</a>
            </div>
         </div>
      </div>
   </div>
</section>

@endsection
