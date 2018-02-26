<?php require_once './master/header.php'; ?>
<?php require_once './master/navbar.php'; ?>

  <ul class='order-menu'>
     <li class=''>
        <span class="translation_missing" title="translation missing: en.application.layout.options, model: Order form, models: Order form, Model: Order Form, Models: Order Form">Options</span>
     </li>
     <li class='dash'></li>
     <li class=''>
        <span class="translation_missing" title="translation missing: en.application.layout.payment_method, model: Order form, models: Order form, Model: Order Form, Models: Order Form">Payment Method</span>
     </li>
     <li class='dash'></li>
     <li class='active'>
        <span class="translation_missing" title="translation missing: en.application.layout.offers, model: Order form, models: Order form, Model: Order Form, Models: Order Form">Offers</span>
     </li>
  </ul>
  <section id="content">
     <div class="container container-center">
        <div class="row row-eq-height">
           <div class="col-md-6">
              <div class="gallery">
                 <img class="img-responsive" src="assets/images/uploads/41gO474olhL.jpg" alt="Covered">
              </div>
              <div class="specification">
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
              </div>
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
                    <form class="simple_form new_user_identity" id="new_user_identity" action="#" accept-charset="UTF-8" method="post">
                       <input name="utf8" type="hidden" value="✓"><input type="hidden" name="authenticity_token" value="F31CyTMrl97xhWkgFF8zLe2u4Fvyez+D66R3VzqpUdPmdODF5BA2jKMS2jH8BBJNhtckLCCPL9QiwsGglju1kA==">
                       <div class="form-group email required user_identity_email">
                          <input class="string email required form-control form-control form-control" required="required" aria-required="true" placeholder="Email" type="email" name="user_identity[email]" id="user_identity_email">
                          <p class="help-block">(We never share your email with dealers)</p>
                       </div>
                       <input type="submit" name="commit" value="Get best offers" class="btn btn-lg btn-block" data-disable-with="Get best offers">
                    </form>
                 </div>
              </div>
           </div>
        </div>
     </div>
  </section>
<?php require_once './master/footer.php'; ?>
