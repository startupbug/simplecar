<div aria-labelledby='#signInModalLabel' class='modal fade details' id='signInModal' role='dialog'>
   <div class='modal-dialog' role='document'>
      <div class='modal-content'>
         <div class='modal-body'>
            <button aria-label='Close' class='pull-right close' data-dismiss='modal' type='button'>
            <span aria-hidden='true'>×</span>
            </button>
            <div class='row'>
               <div class='col-md-8 col-md-offset-2'>
                  <h2>Sign in</h2>
                  <form class="simple_form user_identity" accept-charset="UTF-8" method="post" id="login_form">

                     <div class='form-inputs'>
                        <div class="form-group email required user_identity_email"><label class="email required control-label" for="_user_identity_email"><abbr title="required">*</abbr> Email</label><input class="string email required form-control form-control form-control" autofocus="autofocus" required="required" aria-required="true" type="email" name="email" id="_user_identity_email" /></div>
                        <div class="form-group password required user_identity_password"><label class="password required control-label" for="_user_identity_password"><abbr title="required">*</abbr> Password</label><input class="password required form-control form-control" required="required" aria-required="true" type="password" name="password" id="_user_identity_password" /></div>
                        <div class='pull-right'>
                           <a href='#' id='forgotPassword'>Forgot your password?</a>
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
      </div>
   </div>
</div>
<div aria-labelledby='#forgotPasswordLabel' class='modal fade details' id='forgotPasswordModal' role='dialog'>
   <div class='modal-dialog' role='document'>
      <div class='modal-content'>
         <div class='modal-body'>
            <button aria-label='Close' class='pull-right close' data-dismiss='modal' type='button'>
            <span aria-hidden='true'>×</span>
            </button>
            <div class='row'>
               <div class='col-md-8 col-md-offset-2'>
                  <h2>Forgot your password?</h2>
                  <form class="simple_form user_identity" action="#" accept-charset="UTF-8" method="post">
                     <input name="utf8" type="hidden" value="&#x2713;" /><input type="hidden" name="authenticity_token" value="MUgIlENi6L8SUVpoFbt1ZgwO9JOV0t3d7v4z2woByQHRahsbFvo0pZUeUC3hWguw9xfo/WVPXdiORYfrD/H8zw==" />
                     <div class='form-inputs'>
                        <div class="form-group email required user_identity_email"><label class="email required control-label" for="user_identity_email"><abbr title="required">*</abbr> Email</label><input class="string email required form-control form-control form-control" autofocus="autofocus" required="required" aria-required="true" type="email" name="user_identity[email]" id="user_identity_email" /></div>
                     </div>
                     <div class='form-actions'>
                        <input type="submit" name="commit" value="Send me instructions" class="btn btn-default" data-disable-with="Send me instructions" />
                     </div>
                  </form>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
<header class='navbar navbar-default navbar-static-top main-header' role='navigation'>
   <div class='container-fluid'>
      <button class='navbar-toggle' data-target='#main-menu' data-toggle='collapse' type='button'>
      <span class='sr-only'>Toggle navigation</span>
      <span class='icon-bar'></span>
      <span class='icon-bar'></span>
      <span class='icon-bar'></span>
      </button>
      <div class='navbar-header'>
         <a class="navbar-brand" href="{{route('home')}}"><span class='logo'></span>
         <span class='title'>
         SimpleCar
         </span>
         </a>
      </div>
      <div class='collapse navbar-collapse' id='main-menu'>
         <ul class='nav navbar-nav'>
            <li><a href="index.php#how_it_works">How it works</a></li>
            <li><a href="index.php#reviews">Reviews</a></li>
            <li><a href="http://info.simplecar.co/category/best-car-deals">Best deals</a></li>
            <li><a href="http://info.simplecar.co/category/tips-and-tricks-on-car-buying">Car buying tips</a></li>
            <!-- If seller show seller button -->
            @if(Auth::check() && (Auth::user()->role_id == 1 || Auth::user()->role_id == 2 ))
               <li><a href="{{route('sel_reqs')}}">Seller Requests</a></li>
            @elseif(Auth::check() && Auth::user()->role_id == 2)
              <!-- If user show button to see his requests -->

            @endif
         </ul>

         <ul class='nav navbar-nav navbar-right'>
           @if(!Auth::check())
            <li>
               <a class='btn-sign-up' data-target='#signInModal' data-toggle='modal' href='#'>
               Log in
               </a>
            </li>
           @else
            <li>

                @if(Auth::user()->role_id==3)
                  <a class='btn-sign-up' target="_blank"  href="{{route('dashboard')}}">
                  {{Auth::user()->name}}
                  </a>
                @endif


                @if(Auth::user()->role_id==2)
                  <a class='btn-sign-up'  href='#'>
                  {{Auth::user()->name}}
                  </a>
                @endif


                @if(Auth::user()->role_id==1)
                  <a class='btn-sign-up' href='#'>
                  {{Auth::user()->name}}
                  </a>
                @endif
                                                

            </li>           
           @endif


         </ul>
      </div>
   </div>
</header>
