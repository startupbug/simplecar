<?php require_once './master/header.php'; ?>
<?php require_once './master/navbar.php'; ?>
  <section id='content'>
     <div class='container container-center'>
        <div class='row row-eq-height'>
           <div class='col-md-9  center-div'>
              <div class='config-wrapper'>
                 <div class='specification'>
                    <div class='top' align="center">
                      <ul class='order-menu'>
                        <li class='dash'></li>
                        <li class='active'>
                          Signup
                        </li>
                        <li class='dash'></li>
                       </ul>
                    </div>
                    <div class='details'>
                       <div class='row'>
                          <div class='col-sm-9  center-div'>
                            <form class="simple_form user_identity" action="#" accept-charset="UTF-8" method="post">
                               <div class='form-inputs'>
                                 <div class="form-group email required user_identity_name">
                                   <label class="name required control-label" for="_user_identity_name">
                                     <abbr title="required">*</abbr> Name
                                   </label>
                                   <input class="string name required form-control form-control form-control" autofocus="autofocus" required="required" aria-required="true" type="text" name="name" id="_user_identity_name" />
                                 </div>
                                 <div class="form-group email required user_identity_email">
                                    <label class="email required control-label" for="_user_identity_email">
                                      <abbr title="required">*</abbr> Email
                                    </label>
                                    <input class="string email required form-control form-control form-control" autofocus="autofocus" required="required" aria-required="true" type="email" name="email" id="_user_identity_email" />
                                  </div>
                                  <div class="form-group password required user_identity_password">
                                    <label class="password required control-label" for="_user_identity_password">
                                      <abbr title="required">*</abbr> Password
                                    </label>
                                    <input class="password required form-control form-control" required="required" aria-required="true" type="password" name="password" id="_user_identity_password" />
                                  </div>
                                  <div class="form-group password required user_identity_password">
                                    <label class="password required control-label" for="_user_identity_conf_password">
                                      <abbr title="required">*</abbr> Confirm Password
                                    </label>
                                    <input class="password required form-control form-control" required="required" aria-required="true" type="password" name="conf_password" id="_user_identity_conf_password" />
                                  </div>
                               </div>
                               <div class='form-actions'>
                                  <input type="submit" name="commit" value="Create my account" class="btn btn-default" data-disable-with="Sign up" />
                               </div>
                            </form>
                            <div class='want-to-sign-up' align="center">
                              <p>By signing up you agree to Simplecar</p>
                              <a href="index.html">Terms of Service & Policy</a>
                            </div>
                          </div>
                       </div>
                    </div>
                 </div>
              </div>
           </div>
        </div>
     </div>
  </section>

<?php require_once './master/footer.php'; ?>
