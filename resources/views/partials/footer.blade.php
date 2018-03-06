<?php $base_url = 'http://localhost/simplecar/frontend/simplecar/'; ?>

        <div id='landing_footer'>
           <div class='container-fluid'>
              <div class='col-md-10 col-md-offset-1'>
                 <div class='top'>
                    <div class='row'>
                       <div class='col-md-2'>
                          <a class="brand" href="index.html"><span class='logo'></span>
                          <span class='title'>
                          SimpleCar
                          </span>
                          </a>
                       </div>
                       <div class='col-md-8'>
                          <ul class='primary'>
                             <li><a href="index.php#how_it_works">How it works</a></li>
                             <li><a href="index.php#reviews">Reviews</a></li>
                             <li><a href="#">Best deals</a></li>
                             <li><a href="#">Car buying tips</a></li>
                          </ul>
                       </div>
                       <div class='col-md-2'>
                          <ul class='secondary'>
                             <li>
                                <a class='btn-sign-in' data-target='#signInModal' data-toggle='modal' href='#'>
                                Log in
                                </a>
                             </li>
                          </ul>
                       </div>
                    </div>
                 </div>
                 <div class='bottom'>
                    <div class='row'>
                       <div class='col-md-4 made-with-love'>
                          Made with &#10084; in sunny California
                       </div>
                       <div class='col-md-4 stay-updated'>
                          <p>Stay updated on the best deals</p>
                          <form action='http://simplecar.us14.list-manage.com/subscribe/post?u=38537dc33515b871a25c4f1a9&amp;id=34a04fcfda' method='post' name='mc-embedded-subscribe-form' target='_blank'>
                             <div class='input-group'>
                                <input class='form-control' name='EMAIL' placeholder='Enter email' required type='email'>
                                <div class='input-group-btn'>
                                   <button>
                                   Send
                                   </button>
                                </div>
                             </div>
                          </form>
                       </div>
                       <div class='col-md-4 social-links'>
                          <a class='social-link' href='#'>
                          <img alt="" src="{{ asset('public/assets/images/social/facebook.png') }}" />
                          </a>
                          <a class='social-link' href='#'>
                          <img alt="" src="{{ asset('public/assets/images/social/twitter.png') }}" />
                          </a>
                          <a class='social-link' href='#'>
                          <img alt="" src="{{ asset('public/assets/images/social/in.png') }}" />
                          </a>
                          <a class='social-link' href='#'>
                          <img alt="" src="{{ asset('public/assets/images/social/insta.png') }}" />
                          </a>
                       </div>
                    </div>
                 </div>
              </div>
           </div>
        </div>
      </div>
      <script id="IntercomSettingsScriptTag">
        window.intercomSettings = {"app_id":"twdf3efd"};(function(){var w=window;var ic=w.Intercom;if(typeof ic==="function"){ic('reattach_activator');ic('update',intercomSettings);}else{var d=document;var i=function(){i.c(arguments)};i.q=[];i.c=function(args){i.q.push(args)};w.Intercom=i;function l(){var s=d.createElement('script');s.type='text/javascript';s.async=true;s.src='https://widget.intercom.io/widget/twdf3efd';var x=d.getElementsByTagName('script')[0];x.parentNode.insertBefore(s,x);}if(w.attachEvent){w.attachEvent('onload',l);}else{w.addEventListener('load',l,false);}};})()
      </script>

      <!-- jQuery -->
      <script src="{{ asset('public/assets/js/jquery.min.js') }}"></script>

      <!-- Bootstrap Core JavaScript -->
      <script src="{{ asset('public/assets/js/bootstrap.min.js') }}"></script>

      <!-- Toaster Alert Files -->
      <script src="{{ asset('public/assets/js/toastr.min.js') }}"></script>

      <!-- Select2 JS -->
      <script src="{{ asset('public/assets/js/select2.min.js') }}"></script>

      <!-- Our Custom JS -->
      <script src="{{ asset('public/assets/js/customnew.js') }}"></script>

      <script src="{{ asset('public/assets/js/custom.js') }}" data-turbolinks-track="true"></script>

      <script type="text/javascript">

/* When the user clicks on the button,
toggle between hiding and showing the dropdown content */
function myFunction() {
  document.getElementById("myDropdown").classList.toggle("show");
}

// Close the dropdown if the user clicks outside of it
window.onclick = function(event) {
if (!event.target.matches('.dropbtn')) {

  var dropdowns = document.getElementsByClassName("dropdown-content");
  var i;
  for (i = 0; i < dropdowns.length; i++) {
    var openDropdown = dropdowns[i];
    if (openDropdown.classList.contains('show')) {
      openDropdown.classList.remove('show');
    }
  }
}
}
      </script>
   </body>
</html>
