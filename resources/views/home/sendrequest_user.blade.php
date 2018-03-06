@extends('masterlayout')
@section('content')

  @include('partials.navbar')
  <ul class='order-menu'>
     <li id="deal_offer" class='active'>
        <span class="translation_missing" title="translation missing: en.application.layout.options, model: Order form, models: Order form, Model: Order Form, Models: Order Form">Offer</span>
     </li>
     <li class='dash'></li>
     <li id="deal_offer_responses" >
        <span class="translation_missing" title="translation missing: en.application.layout.options, model: Order form, models: Order form, Model: Order Form, Models: Order Form">Offer Resposnses</span>
     </li>
  </ul>

  <section id="deal_offer_responses_detail" class="hidden">
    <div class="table_offer_responses">
      <table id="stableexample" class="table table-striped table-bordered" cellspacing="0" width="100%">
        <thead>
            <tr>
                <th>Name</th>
                <th>Position</th>
                <th>Office</th>
                <th>Age</th>
                <th>Start date</th>
                <th>Salary</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Tiger Nixon</td>
                <td>System Architect</td>
                <td>Edinburgh</td>
                <td>61</td>
                <td>2011/04/25</td>
                <td>$320,800</td>
            </tr>
            <tr>
                <td>Garrett Winters</td>
                <td>Accountant</td>
                <td>Tokyo</td>
                <td>63</td>
                <td>2011/07/25</td>
                <td>$170,750</td>
            </tr>
            <tr>
                <td>Ashton Cox</td>
                <td>Junior Technical Author</td>
                <td>San Francisco</td>
                <td>66</td>
                <td>2009/01/12</td>
                <td>$86,000</td>
            </tr>
            <tr>
                <td>Cedric Kelly</td>
                <td>Senior Javascript Developer</td>
                <td>Edinburgh</td>
                <td>22</td>
                <td>2012/03/29</td>
                <td>$433,060</td>
            </tr>
            <tr>
                <td>Airi Satou</td>
                <td>Accountant</td>
                <td>Tokyo</td>
                <td>33</td>
                <td>2008/11/28</td>
                <td>$162,700</td>
            </tr>
            <tr>
                <td>Brielle Williamson</td>
                <td>Integration Specialist</td>
                <td>New York</td>
                <td>61</td>
                <td>2012/12/02</td>
                <td>$372,000</td>
            </tr>
            <tr>
                <td>Herrod Chandler</td>
                <td>Sales Assistant</td>
                <td>San Francisco</td>
                <td>59</td>
                <td>2012/08/06</td>
                <td>$137,500</td>
            </tr>
            <tr>
                <td>Rhona Davidson</td>
                <td>Integration Specialist</td>
                <td>Tokyo</td>
                <td>55</td>
                <td>2010/10/14</td>
                <td>$327,900</td>
            </tr>
            <tr>
                <td>Colleen Hurst</td>
                <td>Javascript Developer</td>
                <td>San Francisco</td>
                <td>39</td>
                <td>2009/09/15</td>
                <td>$205,500</td>
            </tr>
            <tr>
                <td>Sonya Frost</td>
                <td>Software Engineer</td>
                <td>Edinburgh</td>
                <td>23</td>
                <td>2008/12/13</td>
                <td>$103,600</td>
            </tr>
            <tr>
                <td>Jena Gaines</td>
                <td>Office Manager</td>
                <td>London</td>
                <td>30</td>
                <td>2008/12/19</td>
                <td>$90,560</td>
            </tr>
            <tr>
                <td>Quinn Flynn</td>
                <td>Support Lead</td>
                <td>Edinburgh</td>
                <td>22</td>
                <td>2013/03/03</td>
                <td>$342,000</td>
            </tr>
            <tr>
                <td>Charde Marshall</td>
                <td>Regional Director</td>
                <td>San Francisco</td>
                <td>36</td>
                <td>2008/10/16</td>
                <td>$470,600</td>
            </tr>
            <tr>
                <td>Haley Kennedy</td>
                <td>Senior Marketing Designer</td>
                <td>London</td>
                <td>43</td>
                <td>2012/12/18</td>
                <td>$313,500</td>
            </tr>
            <tr>
                <td>Tatyana Fitzpatrick</td>
                <td>Regional Director</td>
                <td>London</td>
                <td>19</td>
                <td>2010/03/17</td>
                <td>$385,750</td>
            </tr>
            <tr>
                <td>Michael Silva</td>
                <td>Marketing Designer</td>
                <td>London</td>
                <td>66</td>
                <td>2012/11/27</td>
                <td>$198,500</td>
            </tr>
            <tr>
                <td>Paul Byrd</td>
                <td>Chief Financial Officer (CFO)</td>
                <td>New York</td>
                <td>64</td>
                <td>2010/06/09</td>
                <td>$725,000</td>
            </tr>
            <tr>
                <td>Gloria Little</td>
                <td>Systems Administrator</td>
                <td>New York</td>
                <td>59</td>
                <td>2009/04/10</td>
                <td>$237,500</td>
            </tr>
            <tr>
                <td>Bradley Greer</td>
                <td>Software Engineer</td>
                <td>London</td>
                <td>41</td>
                <td>2012/10/13</td>
                <td>$132,000</td>
            </tr>
            <tr>
                <td>Dai Rios</td>
                <td>Personnel Lead</td>
                <td>Edinburgh</td>
                <td>35</td>
                <td>2012/09/26</td>
                <td>$217,500</td>
            </tr>
            <tr>
                <td>Jenette Caldwell</td>
                <td>Development Lead</td>
                <td>New York</td>
                <td>30</td>
                <td>2011/09/03</td>
                <td>$345,000</td>
            </tr>
            <tr>
                <td>Yuri Berry</td>
                <td>Chief Marketing Officer (CMO)</td>
                <td>New York</td>
                <td>40</td>
                <td>2009/06/25</td>
                <td>$675,000</td>
            </tr>
            <tr>
                <td>Caesar Vance</td>
                <td>Pre-Sales Support</td>
                <td>New York</td>
                <td>21</td>
                <td>2011/12/12</td>
                <td>$106,450</td>
            </tr>
            <tr>
                <td>Doris Wilder</td>
                <td>Sales Assistant</td>
                <td>Sidney</td>
                <td>23</td>
                <td>2010/09/20</td>
                <td>$85,600</td>
            </tr>
            <tr>
                <td>Angelica Ramos</td>
                <td>Chief Executive Officer (CEO)</td>
                <td>London</td>
                <td>47</td>
                <td>2009/10/09</td>
                <td>$1,200,000</td>
            </tr>
            <tr>
                <td>Gavin Joyce</td>
                <td>Developer</td>
                <td>Edinburgh</td>
                <td>42</td>
                <td>2010/12/22</td>
                <td>$92,575</td>
            </tr>
            <tr>
                <td>Jennifer Chang</td>
                <td>Regional Director</td>
                <td>Singapore</td>
                <td>28</td>
                <td>2010/11/14</td>
                <td>$357,650</td>
            </tr>
            <tr>
                <td>Brenden Wagner</td>
                <td>Software Engineer</td>
                <td>San Francisco</td>
                <td>28</td>
                <td>2011/06/07</td>
                <td>$206,850</td>
            </tr>
            <tr>
                <td>Fiona Green</td>
                <td>Chief Operating Officer (COO)</td>
                <td>San Francisco</td>
                <td>48</td>
                <td>2010/03/11</td>
                <td>$850,000</td>
            </tr>
            <tr>
                <td>Shou Itou</td>
                <td>Regional Marketing</td>
                <td>Tokyo</td>
                <td>20</td>
                <td>2011/08/14</td>
                <td>$163,000</td>
            </tr>
            <tr>
                <td>Michelle House</td>
                <td>Integration Specialist</td>
                <td>Sidney</td>
                <td>37</td>
                <td>2011/06/02</td>
                <td>$95,400</td>
            </tr>
            <tr>
                <td>Suki Burks</td>
                <td>Developer</td>
                <td>London</td>
                <td>53</td>
                <td>2009/10/22</td>
                <td>$114,500</td>
            </tr>
            <tr>
                <td>Prescott Bartlett</td>
                <td>Technical Author</td>
                <td>London</td>
                <td>27</td>
                <td>2011/05/07</td>
                <td>$145,000</td>
            </tr>
            <tr>
                <td>Gavin Cortez</td>
                <td>Team Leader</td>
                <td>San Francisco</td>
                <td>22</td>
                <td>2008/10/26</td>
                <td>$235,500</td>
            </tr>
            <tr>
                <td>Martena Mccray</td>
                <td>Post-Sales support</td>
                <td>Edinburgh</td>
                <td>46</td>
                <td>2011/03/09</td>
                <td>$324,050</td>
            </tr>
            <tr>
                <td>Unity Butler</td>
                <td>Marketing Designer</td>
                <td>San Francisco</td>
                <td>47</td>
                <td>2009/12/09</td>
                <td>$85,675</td>
            </tr>
            <tr>
                <td>Howard Hatfield</td>
                <td>Office Manager</td>
                <td>San Francisco</td>
                <td>51</td>
                <td>2008/12/16</td>
                <td>$164,500</td>
            </tr>
            <tr>
                <td>Hope Fuentes</td>
                <td>Secretary</td>
                <td>San Francisco</td>
                <td>41</td>
                <td>2010/02/12</td>
                <td>$109,850</td>
            </tr>
            <tr>
                <td>Vivian Harrell</td>
                <td>Financial Controller</td>
                <td>San Francisco</td>
                <td>62</td>
                <td>2009/02/14</td>
                <td>$452,500</td>
            </tr>
            <tr>
                <td>Timothy Mooney</td>
                <td>Office Manager</td>
                <td>London</td>
                <td>37</td>
                <td>2008/12/11</td>
                <td>$136,200</td>
            </tr>
            <tr>
                <td>Jackson Bradshaw</td>
                <td>Director</td>
                <td>New York</td>
                <td>65</td>
                <td>2008/09/26</td>
                <td>$645,750</td>
            </tr>
            <tr>
                <td>Olivia Liang</td>
                <td>Support Engineer</td>
                <td>Singapore</td>
                <td>64</td>
                <td>2011/02/03</td>
                <td>$234,500</td>
            </tr>
            <tr>
                <td>Bruno Nash</td>
                <td>Software Engineer</td>
                <td>London</td>
                <td>38</td>
                <td>2011/05/03</td>
                <td>$163,500</td>
            </tr>
            <tr>
                <td>Sakura Yamamoto</td>
                <td>Support Engineer</td>
                <td>Tokyo</td>
                <td>37</td>
                <td>2009/08/19</td>
                <td>$139,575</td>
            </tr>
            <tr>
                <td>Thor Walton</td>
                <td>Developer</td>
                <td>New York</td>
                <td>61</td>
                <td>2013/08/11</td>
                <td>$98,540</td>
            </tr>
            <tr>
                <td>Finn Camacho</td>
                <td>Support Engineer</td>
                <td>San Francisco</td>
                <td>47</td>
                <td>2009/07/07</td>
                <td>$87,500</td>
            </tr>
            <tr>
                <td>Serge Baldwin</td>
                <td>Data Coordinator</td>
                <td>Singapore</td>
                <td>64</td>
                <td>2012/04/09</td>
                <td>$138,575</td>
            </tr>
            <tr>
                <td>Zenaida Frank</td>
                <td>Software Engineer</td>
                <td>New York</td>
                <td>63</td>
                <td>2010/01/04</td>
                <td>$125,250</td>
            </tr>
            <tr>
                <td>Zorita Serrano</td>
                <td>Software Engineer</td>
                <td>San Francisco</td>
                <td>56</td>
                <td>2012/06/01</td>
                <td>$115,000</td>
            </tr>
            <tr>
                <td>Jennifer Acosta</td>
                <td>Junior Javascript Developer</td>
                <td>Edinburgh</td>
                <td>43</td>
                <td>2013/02/01</td>
                <td>$75,650</td>
            </tr>
            <tr>
                <td>Cara Stevens</td>
                <td>Sales Assistant</td>
                <td>New York</td>
                <td>46</td>
                <td>2011/12/06</td>
                <td>$145,600</td>
            </tr>
            <tr>
                <td>Hermione Butler</td>
                <td>Regional Director</td>
                <td>London</td>
                <td>47</td>
                <td>2011/03/21</td>
                <td>$356,250</td>
            </tr>
            <tr>
                <td>Lael Greer</td>
                <td>Systems Administrator</td>
                <td>London</td>
                <td>21</td>
                <td>2009/02/27</td>
                <td>$103,500</td>
            </tr>
            <tr>
                <td>Jonas Alexander</td>
                <td>Developer</td>
                <td>San Francisco</td>
                <td>30</td>
                <td>2010/07/14</td>
                <td>$86,500</td>
            </tr>
            <tr>
                <td>Shad Decker</td>
                <td>Regional Director</td>
                <td>Edinburgh</td>
                <td>51</td>
                <td>2008/11/13</td>
                <td>$183,000</td>
            </tr>
            <tr>
                <td>Michael Bruce</td>
                <td>Javascript Developer</td>
                <td>Singapore</td>
                <td>29</td>
                <td>2011/06/27</td>
                <td>$183,000</td>
            </tr>
            <tr>
                <td>Donna Snider</td>
                <td>Customer Support</td>
                <td>New York</td>
                <td>27</td>
                <td>2011/01/25</td>
                <td>$112,000</td>
            </tr>
        </tbody>
      </table>
    </div>
  </section>
  <!-- <form class="simple_form new_order_form" id="new_order_form" action="{{route('submit_req')}}" accept-charset="UTF-8" method="post"> -->
  <section id='deal_offer_detail' class="">
     <div class='container container-center'>
        <div class='row row-eq-height'>
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
                 <li>
                    <a class="not-sure" href="#">
                       <div class='name'>Not sure</div>
                       <div class='description'>
                          Send me the best offers for this model
                       </div>
                    </a>
                 </li>
                 <li class='active'>
                    <a href="#">
                       <div class='name'>
                          75th Anniversary 4dr SUV
                       </div>
                       <div class='description'>
                          2.4L 4cyl 9A
                       </div>
                    </a>
                 </li>
                 <li class=''>
                    <a href="#">
                       <div class='name'>
                          75th Anniversary 4dr SUV 4WD
                       </div>
                       <div class='description'>
                          2.4L 4cyl 9A
                       </div>
                    </a>
                 </li>
                 <li class=''>
                    <a href="#">
                       <div class='name'>
                          Altitude 4dr SUV
                       </div>
                       <div class='description'>
                          2.4L 4cyl 9A
                       </div>
                    </a>
                 </li>
                 <li class=''>
                    <a href="#">
                       <div class='name'>
                          Altitude 4dr SUV 4WD
                       </div>
                       <div class='description'>
                          2.4L 4cyl 9A
                       </div>
                    </a>
                 </li>
                 <li class=''>
                    <a href="#">
                       <div class='name'>
                          High Altitude 4dr SUV
                       </div>
                       <div class='description'>
                          2.4L 4cyl 9A
                       </div>
                    </a>
                 </li>
                 <li class='hidden'>
                    <a href="#">
                       <div class='name'>
                          High Altitude 4dr SUV 4WD
                       </div>
                       <div class='description'>
                          2.4L 4cyl 9A
                       </div>
                    </a>
                 </li>
                 <li class='hidden'>
                    <a href="#">
                       <div class='name'>
                          Latitude 4dr SUV
                       </div>
                       <div class='description'>
                          2.4L 4cyl 9A
                       </div>
                    </a>
                 </li>
                 <li class='hidden'>
                    <a href="#">
                       <div class='name'>
                          Latitude 4dr SUV 4WD
                       </div>
                       <div class='description'>
                          2.4L 4cyl 9A
                       </div>
                    </a>
                 </li>
                 <li class='hidden'>
                    <a href="#">
                       <div class='name'>
                          Limited 4dr SUV
                       </div>
                       <div class='description'>
                          2.4L 4cyl 9A
                       </div>
                    </a>
                 </li>
                 <li class='hidden'>
                    <a href="#">
                       <div class='name'>
                          Limited 4dr SUV 4WD
                       </div>
                       <div class='description'>
                          2.4L 4cyl 9A
                       </div>
                    </a>
                 </li>
                 <li class='hidden'>
                    <a href="#">
                       <div class='name'>
                          L Plus 4dr SUV 4WD
                       </div>
                       <div class='description'>
                          2.4L 4cyl 9A
                       </div>
                    </a>
                 </li>
                 <li class='hidden'>
                    <a href="#">
                       <div class='name'>
                          Overland 4dr SUV
                       </div>
                       <div class='description'>
                          2.4L 4cyl 9A
                       </div>
                    </a>
                 </li>
                 <li class='hidden'>
                    <a href="#">
                       <div class='name'>
                          Overland 4dr SUV 4WD
                       </div>
                       <div class='description'>
                          3.2L 6cyl 9A
                       </div>
                    </a>
                 </li>
                 <li class='hidden'>
                    <a href="#">
                       <div class='name'>
                          Sport 4dr SUV
                       </div>
                       <div class='description'>
                          2.4L 4cyl 9A
                       </div>
                    </a>
                 </li>
                 <li class='hidden'>
                    <a href="#">
                       <div class='name'>
                          Sport 4dr SUV 4WD
                       </div>
                       <div class='description'>
                          2.4L 4cyl 9A
                       </div>
                    </a>
                 </li>
                 <li class='hidden'>
                    <a href="#">
                       <div class='name'>
                          Trailhawk 4dr SUV 4WD
                       </div>
                       <div class='description'>
                          2.4L 4cyl 9A
                       </div>
                    </a>
                 </li>
              </ul>
               <button class='see-more-trims'>See more</button>
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

                 <div class="form-group text optional order_form_comment"><label class="text optional control-label" for="order_form_comment">Offer: </label>
                   <input type="text" name="offer">
                 </div>

                 <div class="form-group text optional order_form_comment"><label class="text optional control-label" for="order_form_comment">Any additional comments or special requests?</label>

                     <textarea rows="3" placeholder="Navigation is a must, trade-in, etc..." class="text optional form-control form-control" name="sel_comment" id="order_form_comment"></textarea>

                 </div>
                 <input type="hidden" name="_token" value="{{Session::token()}}">
                 <input type="hidden" name="req_id" value="{{$car->requests_id}}">
                 <input type="submit" name="submit" value="Send Offer to User" class="btn s_button"/>
    </form>
             </div>
          </div>
       </div>
    </section>
    <section id="content2" class="hidden">
       <div class="container container-center">
          <div class="row row-eq-height">
             <div class="col-md-6">
                <div class="gallery">
                   <img class="img-responsive" src="{{ asset('public/assets/images/uploads/41gO474olhL.jpg') }}" alt="Covered">
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
