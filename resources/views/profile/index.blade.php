
@extends('masterlayout')
@section('content')
  <div id='landing_header'>
           @include('partials.navbar')
           
    <h1>Getting a new car has never been that Simple</h1>
    <div class='container'>
       <form class="simple_form form-inline model-selection" action="{{route('send_model_request')}}" accept-charset="UTF-8" method="post">
          <input name="utf8" type="hidden" value="&#x2713;" />
          <div class="form-group select required generation_car_make_id">
             <select class="select required form-control form-control" required="required" aria-required="Brand" name="brand_id" id="generation_car_make_id">
          
             <option value="">Brand</option>
                <option value="1">Acura</option>
                <option value="4">Audi</option>
                <option value="5">BMW</option>
                <option value="7">Buick</option>
                   <!--<option value="8">Cadillac</option>
                <option value="9">Chevrolet</option>
                <option value="10">Chrysler</option>
                <option value="11">Dodge</option>
                <option value="12">FIAT</option>
                <option value="14">Ford</option>
                <option value="16">Genesis</option>
                <option value="15">GMC</option>
                <option value="17">Honda</option>
                <option value="18">Hyundai</option>
                <option value="19">Infiniti</option>
                <option value="20">Jaguar</option>
                <option value="21">Jeep</option>
                <option value="22">Kia</option>
                <option value="24">Land Rover</option>
                <option value="25">Lexus</option>
                <option value="26">Lincoln</option>
                <option value="29">Maserati</option>
                <option value="30">Mazda</option>
                <option value="32">Mercedes-Benz</option>
                <option value="28">MINI</option>
                <option value="33">Mitsubishi</option>
                <option value="34">Nissan</option>
                <option value="35">Porsche</option>
                <option value="36">Ram</option>
                <option value="44">smart</option>
                <option value="39">Subaru</option>
                <option value="41">Toyota</option>
                <option value="42">Volkswagen</option>
                <option value="43">Volvo</option> -->
             </select>
          </div>

          <div class="form-group grouped_select required generation_car_model_id">
             <select class="grouped_select required  form-control form-control" required="required" aria-required="Model" name="model_id" id="generation_car_model_id">
                <p id="modelDropdown">
                   <option value="123">Modelx</option>
                 </p>
                <!-- <optgroup label="Acura">
                   <option value="1">ILX</option>
                   <option value="2">MDX</option>
                   <option value="3">NSX</option>
                   <option value="4">RDX</option>
                   <option value="5">RLX</option>
                   <option value="6">TLX</option>
                </optgroup>
                <optgroup label="Audi">
                   <option value="14">A3</option>
                   <option value="15">A3 Sportback e-tron</option>
                   <option value="16">A4</option>
                   <option value="17">A4 allroad</option>
                   <option value="18">A5</option>
                   <option value="19">A6</option>
                   <option value="20">A7</option>
                   <option value="21">A8</option>
                   <option value="37">allroad</option>
                   <option value="22">Q3</option>
                   <option value="23">Q5</option>
                   <option value="24">Q7</option>
                   <option value="25">R8</option>
                   <option value="26">RS 5</option>
                   <option value="27">RS 7</option>
                   <option value="28">S3</option>
                   <option value="29">S4</option>
                   <option value="30">S5</option>
                   <option value="31">S6</option>
                   <option value="32">S7</option>
                   <option value="33">S8</option>
                   <option value="34">SQ5</option>
                   <option value="35">TT</option>
                   <option value="36">TTS</option>
                </optgroup>
                <optgroup label="BMW">
                   <option value="38">2 Series</option>
                   <option value="39">3 Series</option>
                   <option value="41">3 Series eDrive</option>
                   <option value="40">3 Series Gran Turismo</option>
                   <option value="42">4 Series</option>
                   <option value="43">4 Series Gran Coupe</option>
                   <option value="44">5 Series</option>
                   <option value="45">5 Series Gran Turismo</option>
                   <option value="46">6 Series</option>
                   <option value="47">6 Series Gran Coupe</option>
                   <option value="48">7 Series</option>
                   <option value="51">ActiveHybrid 5</option>
                   <option value="52">ActiveHybrid 7</option>
                   <option value="49">ALPINA B6 Gran Coupe</option>
                   <option value="50">ALPINA B7</option>
                   <option value="69">i3</option>
                   <option value="70">i8</option>
                   <option value="53">M2</option>
                   <option value="54">M3</option>
                   <option value="55">M4</option>
                   <option value="56">M4 GTS</option>
                   <option value="57">M5</option>
                   <option value="58">M6</option>
                   <option value="59">M6 Gran Coupe</option>
                   <option value="60">X1</option>
                   <option value="61">X3</option>
                   <option value="62">X4</option>
                   <option value="63">X5</option>
                   <option value="65">X5 eDrive</option>
                   <option value="64">X5 M</option>
                   <option value="66">X6</option>
                   <option value="67">X6 M</option>
                   <option value="68">Z4</option>
                </optgroup>
                <optgroup label="Buick">
                   <option value="76">Cascada</option>
                   <option value="77">Enclave</option>
                   <option value="78">Encore</option>
                   <option value="79">Envision</option>
                   <option value="80">LaCrosse</option>
                   <option value="81">Regal</option>
                   <option value="82">Verano</option>
                </optgroup>
                <optgroup label="Cadillac">
                   <option value="83">ATS</option>
                   <option value="84">ATS Coupe</option>
                   <option value="85">ATS-V</option>
                   <option value="86">CT6</option>
                   <option value="87">CTS</option>
                   <option value="88">CTS Coupe</option>
                   <option value="89">CTS-V</option>
                   <option value="90">CTS-V Coupe</option>
                   <option value="91">ELR</option>
                   <option value="92">Escalade</option>
                   <option value="93">Escalade ESV</option>
                   <option value="94">SRX</option>
                   <option value="95">XT5</option>
                   <option value="96">XTS</option>
                </optgroup>
                <optgroup label="Chevrolet">
                   <option value="450">Bolt</option>
                   <option value="97">Camaro</option>
                   <option value="98">City Express</option>
                   <option value="99">Colorado</option>
                   <option value="100">Corvette</option>
                   <option value="101">Corvette Stingray</option>
                   <option value="102">Cruze</option>
                   <option value="103">Cruze Limited</option>
                   <option value="104">Equinox</option>
                   <option value="105">Express</option>
                   <option value="106">Express Cargo</option>
                   <option value="107">Impala</option>
                   <option value="108">Malibu</option>
                   <option value="109">Malibu Limited</option>
                   <option value="111">Silverado 1500</option>
                   <option value="112">Silverado 2500HD</option>
                   <option value="113">Silverado 3500HD</option>
                   <option value="114">Sonic</option>
                   <option value="115">Spark</option>
                   <option value="116">Spark EV</option>
                   <option value="110">SS</option>
                   <option value="117">Suburban</option>
                   <option value="118">Tahoe</option>
                   <option value="119">Traverse</option>
                   <option value="120">Trax</option>
                   <option value="121">Volt</option>
                </optgroup>
                <optgroup label="Chrysler">
                   <option value="122">200</option>
                   <option value="123">300</option>
                   <option value="124">Pacifica</option>
                   <option value="125">Town and Country</option>
                </optgroup>
                <optgroup label="Dodge">
                   <option value="126">Challenger</option>
                   <option value="127">Charger</option>
                   <option value="128">Dart</option>
                   <option value="129">Durango</option>
                   <option value="130">Grand Caravan</option>
                   <option value="131">Journey</option>
                   <option value="132">SRT Viper</option>
                   <option value="133">Viper</option>
                </optgroup>
                <optgroup label="FIAT">
                   <option value="134">124 Spider</option>
                   <option value="135">500</option>
                   <option value="138">500e</option>
                   <option value="136">500L</option>
                   <option value="137">500X</option>
                </optgroup>
                <optgroup label="Ford">
                   <option value="143">C-Max Energi</option>
                   <option value="144">C-Max Hybrid</option>
                   <option value="145">Edge</option>
                   <option value="146">Escape</option>
                   <option value="147">Expedition</option>
                   <option value="148">Explorer</option>
                   <option value="149">F-150</option>
                   <option value="150">F-250 Super Duty</option>
                   <option value="151">F-350 Super Duty</option>
                   <option value="152">F-450 Super Duty</option>
                   <option value="153">Fiesta</option>
                   <option value="154">Flex</option>
                   <option value="155">Focus</option>
                   <option value="156">Focus RS</option>
                   <option value="157">Focus ST</option>
                   <option value="158">Fusion</option>
                   <option value="159">Fusion Energi</option>
                   <option value="160">Fusion Hybrid</option>
                   <option value="161">Mustang</option>
                   <option value="162">Shelby GT350</option>
                   <option value="163">Shelby GT500</option>
                   <option value="164">Taurus</option>
                   <option value="165">Transit Connect</option>
                   <option value="166">Transit Van</option>
                   <option value="167">Transit Wagon</option>
                </optgroup>
                <optgroup label="Genesis">
                   <option value="186">G80</option>
                </optgroup>
                <optgroup label="GMC">
                   <option value="175">Acadia</option>
                   <option value="176">Acadia Limited</option>
                   <option value="177">Canyon</option>
                   <option value="178">Savana</option>
                   <option value="179">Savana Cargo</option>
                   <option value="180">Sierra 1500</option>
                   <option value="181">Sierra 2500HD</option>
                   <option value="182">Sierra 3500HD</option>
                   <option value="183">Terrain</option>
                   <option value="184">Yukon</option>
                   <option value="185">Yukon XL</option>
                </optgroup>
                <optgroup label="Honda">
                   <option value="187">Accord</option>
                   <option value="188">Accord Hybrid</option>
                   <option value="191">Civic</option>
                   <option value="192">Crosstour</option>
                   <option value="189">CR-V</option>
                   <option value="190">CR-Z</option>
                   <option value="193">Fit</option>
                   <option value="194">HR-V</option>
                   <option value="195">Odyssey</option>
                   <option value="196">Pilot</option>
                   <option value="197">Ridgeline</option>
                </optgroup>
                <optgroup label="Hyundai">
                   <option value="209">Accent</option>
                   <option value="210">Azera</option>
                   <option value="211">Elantra</option>
                   <option value="212">Elantra GT</option>
                   <option value="213">Equus</option>
                   <option value="214">Genesis</option>
                   <option value="215">Genesis Coupe</option>
                   <option value="216">Santa Fe</option>
                   <option value="217">Santa Fe Sport</option>
                   <option value="218">Sonata</option>
                   <option value="219">Sonata Hybrid</option>
                   <option value="220">Sonata Plug-In Hybrid</option>
                   <option value="221">Tucson</option>
                   <option value="222">Veloster</option>
                </optgroup>
                <optgroup label="Infiniti">
                   <option value="200">Q40</option>
                   <option value="201">Q50</option>
                   <option value="202">Q60 Convertible</option>
                   <option value="203">Q60 Coupe</option>
                   <option value="204">Q70</option>
                   <option value="205">QX50</option>
                   <option value="206">QX60</option>
                   <option value="207">QX70</option>
                   <option value="208">QX80</option>
                </optgroup>
                <optgroup label="Jaguar">
                   <option value="223">F-PACE</option>
                   <option value="224">F-TYPE</option>
                   <option value="225">XE</option>
                   <option value="226">XF</option>
                   <option value="227">XJ</option>
                   <option value="228">XK</option>
                </optgroup>
                <optgroup label="Jeep">
                   <option value="168">Cherokee</option>
                   <option value="169">Compass</option>
                   <option value="170">Grand Cherokee</option>
                   <option value="171">Grand Cherokee SRT</option>
                   <option value="172">Patriot</option>
                   <option value="173">Renegade</option>
                   <option value="174">Wrangler</option>
                </optgroup>
                <optgroup label="Kia">
                   <option value="229">Cadenza</option>
                   <option value="230">Forte</option>
                   <option value="231">K900</option>
                   <option value="232">Optima</option>
                   <option value="233">Optima Hybrid</option>
                   <option value="234">Rio</option>
                   <option value="235">Sedona</option>
                   <option value="236">Sorento</option>
                   <option value="237">Soul</option>
                   <option value="238">Soul EV</option>
                   <option value="239">Sportage</option>
                </optgroup>
                <optgroup label="Land Rover">
                   <option value="240">Discovery Sport</option>
                   <option value="241">LR2</option>
                   <option value="242">LR4</option>
                   <option value="243">Range Rover</option>
                   <option value="244">Range Rover Evoque</option>
                   <option value="245">Range Rover Sport</option>
                </optgroup>
                <optgroup label="Lexus">
                   <option value="246">CT 200h</option>
                   <option value="247">ES 300h</option>
                   <option value="248">ES 350</option>
                   <option value="249">GS 200t</option>
                   <option value="250">GS 350</option>
                   <option value="251">GS 450h</option>
                   <option value="252">GS F</option>
                   <option value="253">GX 460</option>
                   <option value="254">IS 200t</option>
                   <option value="255">IS 250</option>
                   <option value="256">IS 250 C</option>
                   <option value="257">IS 300</option>
                   <option value="258">IS 350</option>
                   <option value="259">IS 350 C</option>
                   <option value="260">LS 460</option>
                   <option value="261">LS 600h L</option>
                   <option value="262">LX 570</option>
                   <option value="263">NX 200t</option>
                   <option value="264">NX 300h</option>
                   <option value="265">RC 200t</option>
                   <option value="266">RC 300</option>
                   <option value="267">RC 350</option>
                   <option value="268">RC F</option>
                   <option value="269">RX 350</option>
                   <option value="270">RX 450h</option>
                </optgroup>
                <optgroup label="Lincoln">
                   <option value="271">Continental</option>
                   <option value="272">MKC</option>
                   <option value="273">MKS</option>
                   <option value="274">MKT</option>
                   <option value="275">MKX</option>
                   <option value="276">MKZ</option>
                   <option value="277">Navigator</option>
                </optgroup>
                <optgroup label="Maserati">
                   <option value="289">Ghibli</option>
                   <option value="290">GranTurismo</option>
                   <option value="291">GranTurismo Convertible</option>
                   <option value="292">Levante</option>
                   <option value="293">Quattroporte</option>
                </optgroup>
                <optgroup label="Mazda">
                   <option value="294">3</option>
                   <option value="295">5</option>
                   <option value="296">6</option>
                   <option value="297">CX-3</option>
                   <option value="298">CX-5</option>
                   <option value="299">CX-9</option>
                   <option value="300">MX-5 Miata</option>
                </optgroup>
                <optgroup label="Mercedes-Benz">
                   <option value="346">AMG GT</option>
                   <option value="347">B-Class Electric Drive</option>
                   <option value="348">C-Class</option>
                   <option value="349">CLA-Class</option>
                   <option value="350">CLS-Class</option>
                   <option value="351">E-Class</option>
                   <option value="352">G-Class</option>
                   <option value="354">GLA-Class</option>
                   <option value="355">GLC-Class</option>
                   <option value="353">GL-Class</option>
                   <option value="356">GLE-Class</option>
                   <option value="357">GLE-Class Coupe</option>
                   <option value="358">GLK-Class</option>
                   <option value="359">GLS-Class</option>
                   <option value="361">Maybach</option>
                   <option value="360">M-Class</option>
                   <option value="362">Metris</option>
                   <option value="363">S-Class</option>
                   <option value="365">SLC-Class</option>
                   <option value="364">SL-Class</option>
                   <option value="366">SLK-Class</option>
                   <option value="367">SLS AMG GT Final Edition</option>
                   <option value="368">Sprinter</option>
                   <option value="369">Sprinter Worker</option>
                </optgroup>
                <optgroup label="MINI">
                   <option value="280">Clubman</option>
                   <option value="281">Convertible</option>
                   <option value="282">Cooper</option>
                   <option value="283">Cooper Clubman</option>
                   <option value="284">Cooper Countryman</option>
                   <option value="285">Cooper Coupe</option>
                   <option value="286">Cooper Paceman</option>
                   <option value="287">Cooper Roadster</option>
                   <option value="288">Hardtop</option>
                </optgroup>
                <optgroup label="Mitsubishi">
                   <option value="309">i-MiEV</option>
                   <option value="303">Lancer</option>
                   <option value="304">Lancer Evolution</option>
                   <option value="305">Mirage</option>
                   <option value="306">Mirage G4</option>
                   <option value="307">Outlander</option>
                   <option value="308">Outlander Sport</option>
                </optgroup>
                <optgroup label="Nissan">
                   <option value="310">370Z</option>
                   <option value="311">Altima</option>
                   <option value="312">Armada</option>
                   <option value="313">Frontier</option>
                   <option value="314">GT-R</option>
                   <option value="315">Juke</option>
                   <option value="316">Leaf</option>
                   <option value="317">Maxima</option>
                   <option value="318">Murano</option>
                   <option value="321">NV200</option>
                   <option value="319">NV Cargo</option>
                   <option value="320">NV Passenger</option>
                   <option value="322">Pathfinder</option>
                   <option value="323">Quest</option>
                   <option value="324">Rogue</option>
                   <option value="325">Rogue Select</option>
                   <option value="326">Sentra</option>
                   <option value="327">Titan</option>
                   <option value="328">Titan XD</option>
                   <option value="329">Versa</option>
                   <option value="330">Versa Note</option>
                   <option value="331">Xterra</option>
                </optgroup>
                <optgroup label="Porsche">
                   <option value="332">718 Boxster</option>
                   <option value="333">718 Cayman</option>
                   <option value="334">911</option>
                   <option value="335">918 Spyder</option>
                   <option value="336">Boxster</option>
                   <option value="337">Cayenne</option>
                   <option value="338">Cayman</option>
                   <option value="339">Macan</option>
                   <option value="340">Panamera</option>
                </optgroup>
                <optgroup label="Ram">
                   <option value="443">1500</option>
                   <option value="444">2500</option>
                   <option value="445">3500</option>
                   <option value="446">CV Tradesman</option>
                   <option value="447">Promaster Cargo Van</option>
                   <option value="448">Promaster City</option>
                   <option value="449">Promaster Window Van</option>
                </optgroup>
                <optgroup label="smart">
                   <option value="417">fortwo</option>
                </optgroup>
                <optgroup label="Subaru">
                   <option value="382">BRZ</option>
                   <option value="383">Crosstrek</option>
                   <option value="384">Forester</option>
                   <option value="385">Impreza</option>
                   <option value="386">Legacy</option>
                   <option value="387">Outback</option>
                   <option value="388">WRX</option>
                   <option value="389">XV Crosstrek</option>
                </optgroup>
                <optgroup label="Toyota">
                   <option value="392">4Runner</option>
                   <option value="393">86</option>
                   <option value="394">Avalon</option>
                   <option value="395">Avalon Hybrid</option>
                   <option value="396">Camry</option>
                   <option value="397">Camry Hybrid</option>
                   <option value="398">Corolla</option>
                   <option value="399">Corolla iM</option>
                   <option value="400">Highlander</option>
                   <option value="401">Highlander Hybrid</option>
                   <option value="402">Land Cruiser</option>
                   <option value="403">Mirai</option>
                   <option value="404">Prius</option>
                   <option value="406">Prius c</option>
                   <option value="405">Prius Plug-in</option>
                   <option value="407">Prius v</option>
                   <option value="408">RAV4</option>
                   <option value="409">RAV4 Hybrid</option>
                   <option value="410">Sequoia</option>
                   <option value="411">Sienna</option>
                   <option value="412">Tacoma</option>
                   <option value="413">Tundra</option>
                   <option value="414">Venza</option>
                   <option value="415">Yaris</option>
                   <option value="416">Yaris iA</option>
                </optgroup>
                <optgroup label="Volkswagen">
                   <option value="418">Beetle</option>
                   <option value="419">Beetle Convertible</option>
                   <option value="420">CC</option>
                   <option value="433">e-Golf</option>
                   <option value="421">Eos</option>
                   <option value="423">Golf</option>
                   <option value="424">Golf GTI</option>
                   <option value="425">Golf R</option>
                   <option value="426">Golf SportWagen</option>
                   <option value="422">GTI</option>
                   <option value="427">Jetta</option>
                   <option value="428">Jetta GLI</option>
                   <option value="429">Jetta SportWagen</option>
                   <option value="430">Passat</option>
                   <option value="431">Tiguan</option>
                   <option value="432">Touareg</option>
                </optgroup>
                <optgroup label="Volvo">
                   <option value="434">S60</option>
                   <option value="435">S60 Cross Country</option>
                   <option value="436">S80</option>
                   <option value="437">S90</option>
                   <option value="438">V60</option>
                   <option value="439">V60 Cross Country</option>
                   <option value="440">XC60</option>
                   <option value="441">XC70</option>
                   <option value="442">XC90</option>
                </optgroup> -->
             </select>
          </div>
          <input type="hidden" name="_token" value="{{Session::token()}}">
          <button name="button" type="submit" class="btn btn-default btn btn-info">Find best deals</button>
       </form>
    </div>
 </div>
 <div id='how_it_works'>
      @include('partials.error_section') 
    <h2>
       How SimpleCar works?
       <span>
       free
       </span>
    </h2>
    <div class='row'>
       <div class='col-sm-2 col-sm-offset-2'>
          <img alt="Choose your car icon" class="img-responsive center-block" src="{{ asset('public/assets/images/works/choose_car_icon.png') }}" />
          <p class='text-center'>
             Choose any car and receive best prices from all dealers, no need to haggle!
          </p>
       </div>
       <div class='col-sm-2 col-sm-offset-1'>
          <img alt="Pick the best price icon" class="img-responsive center-block" src="{{ asset('public/assets/images/works/pick_the_best_price_icon.png') }}" />
          <p class='text-center'>
             Pick the best price/location. No dealer can email or call you until you accept the best offer!
          </p>
       </div>
       <div class='col-sm-2 col-sm-offset-1'>
          <img alt="Car delivered to your door icon" class="img-responsive center-block" src="{{ asset('public/assets/images/works/car_delivered_icon.png') }}" />
          <p class='text-center'>
             Pick up your car at the dealership or have it delivered to your door!
          </p>
       </div>
    </div>
 </div>
 <div id='reviews'>
    <h2>Reviews</h2>
    <div class='row'>
       <div class='col-sm-4 col-sm-offset-2'>
          <img alt="" class="img-responsive userpic" src="{{ asset('public/assets/images/person/daniel.jpg') }}" />
          <p class='quote'>
             I used to spend many weeks trying to find the best price and had to deal with countless emails and calls from pushy sales people. With SimpleCar I just submitted my request and received an amazing offer, no more time wasted!
          </p>
          <p class='author'>
             Daniel S.
          </p>
          <p class='author-description'>
             Leased Cruze $84 per month
             <br>
             $500 drive off
          </p>
       </div>
       <div class='col-sm-4'>
          <img alt="" class="img-responsive userpic" src="{{ asset('public/assets/images/person/maria.jpg') }}" />
          <p class='quote'>
             Buying a car was always like a nightmare for me. I had to ask my boyfriend to do a lot of research to find the best offers and negotiate with all these dealers. I never expected that it would be so easy to get the best price with SimpleCar.
          </p>
          <p class='author'>
             Maria K.
          </p>
          <p class='author-description'>
             Leased Volt $150 per month
             <br>
             $0 drive off
          </p>
       </div>
    </div>
 </div>
 <div id='ready'>
    <h2>Ready to get started?</h2>
    <form class="simple_form form-inline model-selection" action="https://simplecar.co/generations" accept-charset="UTF-8" method="get">
       <input name="utf8" type="hidden" value="&#x2713;" />
      <!-- <div class="form-group select required generation_car_make_id">
          <select class="select required form-control form-control" required="required" aria-required="Brand" name="generation[car_make_id]" id="generation_car_make_id">
             <option value="">Brand</option>
             <option value="1">Acura</option>
             <option value="4">Audi</option>
             <option value="5">BMW</option>
             <option value="7">Buick</option>
             <option value="8">Cadillac</option>
             <option value="9">Chevrolet</option>
             <option value="10">Chrysler</option>
             <option value="11">Dodge</option>
             <option value="12">FIAT</option>
             <option value="14">Ford</option>
             <option value="16">Genesis</option>
             <option value="15">GMC</option>
             <option value="17">Honda</option>
             <option value="18">Hyundai</option>
             <option value="19">Infiniti</option>
             <option value="20">Jaguar</option>
             <option value="21">Jeep</option>
             <option value="22">Kia</option>
             <option value="24">Land Rover</option>
             <option value="25">Lexus</option>
             <option value="26">Lincoln</option>
             <option value="29">Maserati</option>
             <option value="30">Mazda</option>
             <option value="32">Mercedes-Benz</option>
             <option value="28">MINI</option>
             <option value="33">Mitsubishi</option>
             <option value="34">Nissan</option>
             <option value="35">Porsche</option>
             <option value="36">Ram</option>
             <option value="44">smart</option>
             <option value="39">Subaru</option>
             <option value="41">Toyota</option>
             <option value="42">Volkswagen</option>
             <option value="43">Volvo</option>
          </select>
       </div>
       <div class="form-group grouped_select required disabled generation_car_model_id">
          <select class="grouped_select required disabled form-control form-control" disabled="disabled" required="required" aria-required="Model" name="generation[car_model_id]" id="generation_car_model_id" disabled>
             <option value="">Model</option>
             <optgroup label="Acura">
                <option value="1">ILX</option>
                <option value="2">MDX</option>
                <option value="3">NSX</option>
                <option value="4">RDX</option>
                <option value="5">RLX</option>
                <option value="6">TLX</option>
             </optgroup>
             <optgroup label="Audi">
                <option value="14">A3</option>
                <option value="15">A3 Sportback e-tron</option>
                <option value="16">A4</option>
                <option value="17">A4 allroad</option>
                <option value="18">A5</option>
                <option value="19">A6</option>
                <option value="20">A7</option>
                <option value="21">A8</option>
                <option value="37">allroad</option>
                <option value="22">Q3</option>
                <option value="23">Q5</option>
                <option value="24">Q7</option>
                <option value="25">R8</option>
                <option value="26">RS 5</option>
                <option value="27">RS 7</option>
                <option value="28">S3</option>
                <option value="29">S4</option>
                <option value="30">S5</option>
                <option value="31">S6</option>
                <option value="32">S7</option>
                <option value="33">S8</option>
                <option value="34">SQ5</option>
                <option value="35">TT</option>
                <option value="36">TTS</option>
             </optgroup>
             <optgroup label="BMW">
                <option value="38">2 Series</option>
                <option value="39">3 Series</option>
                <option value="41">3 Series eDrive</option>
                <option value="40">3 Series Gran Turismo</option>
                <option value="42">4 Series</option>
                <option value="43">4 Series Gran Coupe</option>
                <option value="44">5 Series</option>
                <option value="45">5 Series Gran Turismo</option>
                <option value="46">6 Series</option>
                <option value="47">6 Series Gran Coupe</option>
                <option value="48">7 Series</option>
                <option value="51">ActiveHybrid 5</option>
                <option value="52">ActiveHybrid 7</option>
                <option value="49">ALPINA B6 Gran Coupe</option>
                <option value="50">ALPINA B7</option>
                <option value="69">i3</option>
                <option value="70">i8</option>
                <option value="53">M2</option>
                <option value="54">M3</option>
                <option value="55">M4</option>
                <option value="56">M4 GTS</option>
                <option value="57">M5</option>
                <option value="58">M6</option>
                <option value="59">M6 Gran Coupe</option>
                <option value="60">X1</option>
                <option value="61">X3</option>
                <option value="62">X4</option>
                <option value="63">X5</option>
                <option value="65">X5 eDrive</option>
                <option value="64">X5 M</option>
                <option value="66">X6</option>
                <option value="67">X6 M</option>
                <option value="68">Z4</option>
             </optgroup>
             <optgroup label="Buick">
                <option value="76">Cascada</option>
                <option value="77">Enclave</option>
                <option value="78">Encore</option>
                <option value="79">Envision</option>
                <option value="80">LaCrosse</option>
                <option value="81">Regal</option>
                <option value="82">Verano</option>
             </optgroup>
             <optgroup label="Cadillac">
                <option value="83">ATS</option>
                <option value="84">ATS Coupe</option>
                <option value="85">ATS-V</option>
                <option value="86">CT6</option>
                <option value="87">CTS</option>
                <option value="88">CTS Coupe</option>
                <option value="89">CTS-V</option>
                <option value="90">CTS-V Coupe</option>
                <option value="91">ELR</option>
                <option value="92">Escalade</option>
                <option value="93">Escalade ESV</option>
                <option value="94">SRX</option>
                <option value="95">XT5</option>
                <option value="96">XTS</option>
             </optgroup>
             <optgroup label="Chevrolet">
                <option value="450">Bolt</option>
                <option value="97">Camaro</option>
                <option value="98">City Express</option>
                <option value="99">Colorado</option>
                <option value="100">Corvette</option>
                <option value="101">Corvette Stingray</option>
                <option value="102">Cruze</option>
                <option value="103">Cruze Limited</option>
                <option value="104">Equinox</option>
                <option value="105">Express</option>
                <option value="106">Express Cargo</option>
                <option value="107">Impala</option>
                <option value="108">Malibu</option>
                <option value="109">Malibu Limited</option>
                <option value="111">Silverado 1500</option>
                <option value="112">Silverado 2500HD</option>
                <option value="113">Silverado 3500HD</option>
                <option value="114">Sonic</option>
                <option value="115">Spark</option>
                <option value="116">Spark EV</option>
                <option value="110">SS</option>
                <option value="117">Suburban</option>
                <option value="118">Tahoe</option>
                <option value="119">Traverse</option>
                <option value="120">Trax</option>
                <option value="121">Volt</option>
             </optgroup>
             <optgroup label="Chrysler">
                <option value="122">200</option>
                <option value="123">300</option>
                <option value="124">Pacifica</option>
                <option value="125">Town and Country</option>
             </optgroup>
             <optgroup label="Dodge">
                <option value="126">Challenger</option>
                <option value="127">Charger</option>
                <option value="128">Dart</option>
                <option value="129">Durango</option>
                <option value="130">Grand Caravan</option>
                <option value="131">Journey</option>
                <option value="132">SRT Viper</option>
                <option value="133">Viper</option>
             </optgroup>
             <optgroup label="FIAT">
                <option value="134">124 Spider</option>
                <option value="135">500</option>
                <option value="138">500e</option>
                <option value="136">500L</option>
                <option value="137">500X</option>
             </optgroup>
             <optgroup label="Ford">
                <option value="143">C-Max Energi</option>
                <option value="144">C-Max Hybrid</option>
                <option value="145">Edge</option>
                <option value="146">Escape</option>
                <option value="147">Expedition</option>
                <option value="148">Explorer</option>
                <option value="149">F-150</option>
                <option value="150">F-250 Super Duty</option>
                <option value="151">F-350 Super Duty</option>
                <option value="152">F-450 Super Duty</option>
                <option value="153">Fiesta</option>
                <option value="154">Flex</option>
                <option value="155">Focus</option>
                <option value="156">Focus RS</option>
                <option value="157">Focus ST</option>
                <option value="158">Fusion</option>
                <option value="159">Fusion Energi</option>
                <option value="160">Fusion Hybrid</option>
                <option value="161">Mustang</option>
                <option value="162">Shelby GT350</option>
                <option value="163">Shelby GT500</option>
                <option value="164">Taurus</option>
                <option value="165">Transit Connect</option>
                <option value="166">Transit Van</option>
                <option value="167">Transit Wagon</option>
             </optgroup>
             <optgroup label="Genesis">
                <option value="186">G80</option>
             </optgroup>
             <optgroup label="GMC">
                <option value="175">Acadia</option>
                <option value="176">Acadia Limited</option>
                <option value="177">Canyon</option>
                <option value="178">Savana</option>
                <option value="179">Savana Cargo</option>
                <option value="180">Sierra 1500</option>
                <option value="181">Sierra 2500HD</option>
                <option value="182">Sierra 3500HD</option>
                <option value="183">Terrain</option>
                <option value="184">Yukon</option>
                <option value="185">Yukon XL</option>
             </optgroup>
             <optgroup label="Honda">
                <option value="187">Accord</option>
                <option value="188">Accord Hybrid</option>
                <option value="191">Civic</option>
                <option value="192">Crosstour</option>
                <option value="189">CR-V</option>
                <option value="190">CR-Z</option>
                <option value="193">Fit</option>
                <option value="194">HR-V</option>
                <option value="195">Odyssey</option>
                <option value="196">Pilot</option>
                <option value="197">Ridgeline</option>
             </optgroup>
             <optgroup label="Hyundai">
                <option value="209">Accent</option>
                <option value="210">Azera</option>
                <option value="211">Elantra</option>
                <option value="212">Elantra GT</option>
                <option value="213">Equus</option>
                <option value="214">Genesis</option>
                <option value="215">Genesis Coupe</option>
                <option value="216">Santa Fe</option>
                <option value="217">Santa Fe Sport</option>
                <option value="218">Sonata</option>
                <option value="219">Sonata Hybrid</option>
                <option value="220">Sonata Plug-In Hybrid</option>
                <option value="221">Tucson</option>
                <option value="222">Veloster</option>
             </optgroup>
             <optgroup label="Infiniti">
                <option value="200">Q40</option>
                <option value="201">Q50</option>
                <option value="202">Q60 Convertible</option>
                <option value="203">Q60 Coupe</option>
                <option value="204">Q70</option>
                <option value="205">QX50</option>
                <option value="206">QX60</option>
                <option value="207">QX70</option>
                <option value="208">QX80</option>
             </optgroup>
             <optgroup label="Jaguar">
                <option value="223">F-PACE</option>
                <option value="224">F-TYPE</option>
                <option value="225">XE</option>
                <option value="226">XF</option>
                <option value="227">XJ</option>
                <option value="228">XK</option>
             </optgroup>
             <optgroup label="Jeep">
                <option value="168">Cherokee</option>
                <option value="169">Compass</option>
                <option value="170">Grand Cherokee</option>
                <option value="171">Grand Cherokee SRT</option>
                <option value="172">Patriot</option>
                <option value="173">Renegade</option>
                <option value="174">Wrangler</option>
             </optgroup>
             <optgroup label="Kia">
                <option value="229">Cadenza</option>
                <option value="230">Forte</option>
                <option value="231">K900</option>
                <option value="232">Optima</option>
                <option value="233">Optima Hybrid</option>
                <option value="234">Rio</option>
                <option value="235">Sedona</option>
                <option value="236">Sorento</option>
                <option value="237">Soul</option>
                <option value="238">Soul EV</option>
                <option value="239">Sportage</option>
             </optgroup>
             <optgroup label="Land Rover">
                <option value="240">Discovery Sport</option>
                <option value="241">LR2</option>
                <option value="242">LR4</option>
                <option value="243">Range Rover</option>
                <option value="244">Range Rover Evoque</option>
                <option value="245">Range Rover Sport</option>
             </optgroup>
             <optgroup label="Lexus">
                <option value="246">CT 200h</option>
                <option value="247">ES 300h</option>
                <option value="248">ES 350</option>
                <option value="249">GS 200t</option>
                <option value="250">GS 350</option>
                <option value="251">GS 450h</option>
                <option value="252">GS F</option>
                <option value="253">GX 460</option>
                <option value="254">IS 200t</option>
                <option value="255">IS 250</option>
                <option value="256">IS 250 C</option>
                <option value="257">IS 300</option>
                <option value="258">IS 350</option>
                <option value="259">IS 350 C</option>
                <option value="260">LS 460</option>
                <option value="261">LS 600h L</option>
                <option value="262">LX 570</option>
                <option value="263">NX 200t</option>
                <option value="264">NX 300h</option>
                <option value="265">RC 200t</option>
                <option value="266">RC 300</option>
                <option value="267">RC 350</option>
                <option value="268">RC F</option>
                <option value="269">RX 350</option>
                <option value="270">RX 450h</option>
             </optgroup>
             <optgroup label="Lincoln">
                <option value="271">Continental</option>
                <option value="272">MKC</option>
                <option value="273">MKS</option>
                <option value="274">MKT</option>
                <option value="275">MKX</option>
                <option value="276">MKZ</option>
                <option value="277">Navigator</option>
             </optgroup>
             <optgroup label="Maserati">
                <option value="289">Ghibli</option>
                <option value="290">GranTurismo</option>
                <option value="291">GranTurismo Convertible</option>
                <option value="292">Levante</option>
                <option value="293">Quattroporte</option>
             </optgroup>
             <optgroup label="Mazda">
                <option value="294">3</option>
                <option value="295">5</option>
                <option value="296">6</option>
                <option value="297">CX-3</option>
                <option value="298">CX-5</option>
                <option value="299">CX-9</option>
                <option value="300">MX-5 Miata</option>
             </optgroup>
             <optgroup label="Mercedes-Benz">
                <option value="346">AMG GT</option>
                <option value="347">B-Class Electric Drive</option>
                <option value="348">C-Class</option>
                <option value="349">CLA-Class</option>
                <option value="350">CLS-Class</option>
                <option value="351">E-Class</option>
                <option value="352">G-Class</option>
                <option value="354">GLA-Class</option>
                <option value="355">GLC-Class</option>
                <option value="353">GL-Class</option>
                <option value="356">GLE-Class</option>
                <option value="357">GLE-Class Coupe</option>
                <option value="358">GLK-Class</option>
                <option value="359">GLS-Class</option>
                <option value="361">Maybach</option>
                <option value="360">M-Class</option>
                <option value="362">Metris</option>
                <option value="363">S-Class</option>
                <option value="365">SLC-Class</option>
                <option value="364">SL-Class</option>
                <option value="366">SLK-Class</option>
                <option value="367">SLS AMG GT Final Edition</option>
                <option value="368">Sprinter</option>
                <option value="369">Sprinter Worker</option>
             </optgroup>
             <optgroup label="MINI">
                <option value="280">Clubman</option>
                <option value="281">Convertible</option>
                <option value="282">Cooper</option>
                <option value="283">Cooper Clubman</option>
                <option value="284">Cooper Countryman</option>
                <option value="285">Cooper Coupe</option>
                <option value="286">Cooper Paceman</option>
                <option value="287">Cooper Roadster</option>
                <option value="288">Hardtop</option>
             </optgroup>
             <optgroup label="Mitsubishi">
                <option value="309">i-MiEV</option>
                <option value="303">Lancer</option>
                <option value="304">Lancer Evolution</option>
                <option value="305">Mirage</option>
                <option value="306">Mirage G4</option>
                <option value="307">Outlander</option>
                <option value="308">Outlander Sport</option>
             </optgroup>
             <optgroup label="Nissan">
                <option value="310">370Z</option>
                <option value="311">Altima</option>
                <option value="312">Armada</option>
                <option value="313">Frontier</option>
                <option value="314">GT-R</option>
                <option value="315">Juke</option>
                <option value="316">Leaf</option>
                <option value="317">Maxima</option>
                <option value="318">Murano</option>
                <option value="321">NV200</option>
                <option value="319">NV Cargo</option>
                <option value="320">NV Passenger</option>
                <option value="322">Pathfinder</option>
                <option value="323">Quest</option>
                <option value="324">Rogue</option>
                <option value="325">Rogue Select</option>
                <option value="326">Sentra</option>
                <option value="327">Titan</option>
                <option value="328">Titan XD</option>
                <option value="329">Versa</option>
                <option value="330">Versa Note</option>
                <option value="331">Xterra</option>
             </optgroup>
             <optgroup label="Porsche">
                <option value="332">718 Boxster</option>
                <option value="333">718 Cayman</option>
                <option value="334">911</option>
                <option value="335">918 Spyder</option>
                <option value="336">Boxster</option>
                <option value="337">Cayenne</option>
                <option value="338">Cayman</option>
                <option value="339">Macan</option>
                <option value="340">Panamera</option>
             </optgroup>
             <optgroup label="Ram">
                <option value="443">1500</option>
                <option value="444">2500</option>
                <option value="445">3500</option>
                <option value="446">CV Tradesman</option>
                <option value="447">Promaster Cargo Van</option>
                <option value="448">Promaster City</option>
                <option value="449">Promaster Window Van</option>
             </optgroup>
             <optgroup label="smart">
                <option value="417">fortwo</option>
             </optgroup>
             <optgroup label="Subaru">
                <option value="382">BRZ</option>
                <option value="383">Crosstrek</option>
                <option value="384">Forester</option>
                <option value="385">Impreza</option>
                <option value="386">Legacy</option>
                <option value="387">Outback</option>
                <option value="388">WRX</option>
                <option value="389">XV Crosstrek</option>
             </optgroup>
             <optgroup label="Toyota">
                <option value="392">4Runner</option>
                <option value="393">86</option>
                <option value="394">Avalon</option>
                <option value="395">Avalon Hybrid</option>
                <option value="396">Camry</option>
                <option value="397">Camry Hybrid</option>
                <option value="398">Corolla</option>
                <option value="399">Corolla iM</option>
                <option value="400">Highlander</option>
                <option value="401">Highlander Hybrid</option>
                <option value="402">Land Cruiser</option>
                <option value="403">Mirai</option>
                <option value="404">Prius</option>
                <option value="406">Prius c</option>
                <option value="405">Prius Plug-in</option>
                <option value="407">Prius v</option>
                <option value="408">RAV4</option>
                <option value="409">RAV4 Hybrid</option>
                <option value="410">Sequoia</option>
                <option value="411">Sienna</option>
                <option value="412">Tacoma</option>
                <option value="413">Tundra</option>
                <option value="414">Venza</option>
                <option value="415">Yaris</option>
                <option value="416">Yaris iA</option>
             </optgroup>
             <optgroup label="Volkswagen">
                <option value="418">Beetle</option>
                <option value="419">Beetle Convertible</option>
                <option value="420">CC</option>
                <option value="433">e-Golf</option>
                <option value="421">Eos</option>
                <option value="423">Golf</option>
                <option value="424">Golf GTI</option>
                <option value="425">Golf R</option>
                <option value="426">Golf SportWagen</option>
                <option value="422">GTI</option>
                <option value="427">Jetta</option>
                <option value="428">Jetta GLI</option>
                <option value="429">Jetta SportWagen</option>
                <option value="430">Passat</option>
                <option value="431">Tiguan</option>
                <option value="432">Touareg</option>
             </optgroup>
             <optgroup label="Volvo">
                <option value="434">S60</option>
                <option value="435">S60 Cross Country</option>
                <option value="436">S80</option>
                <option value="437">S90</option>
                <option value="438">V60</option>
                <option value="439">V60 Cross Country</option>
                <option value="440">XC60</option>
                <option value="441">XC70</option>
                <option value="442">XC90</option>
             </optgroup>
          </select>
       </div> -->
       <button name="button" type="submit" class="btn btn-default">Find best deals
       <span>Save on average $5,100</span>
       </button>
    </form>
    <p>
       Still not sure which car you want? Click the chat icon or
       <a href='mailto:info@simplecar.co?&amp;subject=Help%20me%20find%20the%20best%20car&amp;body=Hi, please send me good deals for these: -enter type of car, price range or any other requests- '>email</a>
       us for help
    </p>
 </div>


@endsection