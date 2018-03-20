@extends('masterlayout')
@section('content')

           @include('partials.navbar')
<section id="content">
   <div class="container container-center">
      <div class="row row-eq-height">
         <div class="sign-in col-md-4 col-md-offset-4 col-sm-8 col-sm-offset-2 col-xs-10 col-xs-offset-1">
            <h2>Sign in</h2>
                @include('partials.error_section')            
                  <form class="simple_form user_identity" accept-charset="UTF-8" method="post" action="{{ route('login_post') }}" id="login_form">

                     <div class='form-inputs'>
                        <div class="form-group email required user_identity_email"><label class="email required control-label" for="_user_identity_email"><abbr title="required">*</abbr> Email</label><input class="string email required form-control form-control form-control" autofocus="autofocus" required="required" aria-required="true" type="email" name="email" id="_user_identity_email" /></div>
                        <div class="form-group password required user_identity_password"><label class="password required control-label" for="_user_identity_password"><abbr title="required">*</abbr> Password</label><input class="password required form-control form-control" required="required" aria-required="true" type="password" name="password" id="_user_identity_password" /></div>
                      <div class='pull-right'>
                           <a href='{{route("pass_reset_view")}}' id='forgotPasswordz'>Forgot your password?</a>
                        </div>                        
                        <div class="form-group boolean optional user_identity_remember_me"><input name="user_identity[remember_me]" type="hidden" value="0" /><input class="boolean optional" type="checkbox" value="1" name="user_identity[remember_me]" id="_user_identity_remember_me" /><label class="boolean optional" for="_user_identity_remember_me">Remember me</label></div>
                        
                     </div>
                     <div class='form-actions'>
                        <input type="hidden" value="{{Session::token()}}" name="_token">
                        <input type="submit" value="Sign in" class="btn btn-default" />
                     </div>
                  </form>
                  <div class='want-to-sign-up'>
                     <a href="{{route('register_index')}}">Want to sign up? Start configuring your car</a>
                  </div>
         </div>
      </div>
   </div>
</section>

@endsection
