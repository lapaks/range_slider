<?php include_once('inc/header.php'); ?>

  <div class="aaw-services-list pt-5em pb-3em">
    <div class="container clearfix">
      <div class="col-md-4 home_services_left">
        <header>our services</header>
        <p>At AAW we understand that moving goods it just one step in the process, a key element is the visibility we provide to customers across the whole logistical solution. So you can track, trace, monitor and plan the entire logistic chain with absolute transparency and visibility.</p>
      </div>
      <div class="col-md-8 home_services_right">
        <ul class="home-services-lists">
          <li><a href="#">Freight Forwarding</a></li>
          <li><a href="#">Supply Chain Management</a></li>
          <li><a href="#">Breakbulk</a></li>
          <li><a href="#">Customers Brokerage</a></li>
          <li><a href="#">Domestic transport</a></li>
          <li><a href="#">Shipping Documentation</a></li>
          <li><a href="#">Bulk Liquid Logistics </a></li>
          <li><a href="#">Warehousing & Fulfilment</a></li>
        </ul>
      </div>
    </div>
  </div>

  <div class="years-in-logistic ptb-5em">
    <div class="container clearfix">
      <div class="col-md-6 left_year">
        <header class="mini_bold_header">OUR PEOPLE - OUR COMMITMENT</header>
        <h2 class="h2">Our ultimate objective is to provide dynamic tailor-made logistic solutions across...</h2>
        <ul class="ptb-2em objective_list">
          <li>Sea & Air Freight Forwarding</li>
          <li>Project  Logistics</li>
          <li>Consolidation Services</li>
          <li>Boat & Yacht Logistics</li>
        </ul>
        <p>Through the commitement of our people we strive to be
innovative, progressive and market driven in all facets of
global multi-model logistics. Our emphasis is on thoroughly
satisfying our customers’ expectations of quality,
performance and efficiency.</p>
      </div>
      <div class="col-md-6 right_year">
        <div class="year_count relative">
          <img src="img/truck-years-pic.jpg" alt="Truck Years">
          <div class="CountYears">
            <div class="count_number"><?php $current_year = date('Y'); ?> <?php $output = ($current_year-1983); echo $output; ?></div>
            <div class="year_txt">Years in<br />the Logistics<br />Industry</div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="visibility_section pt-2em pb-5em">
    <div class="container clearfix">
      <div class="col-md-6 globe_vector">
        <div class="rotating_globe relative">
          <img class="fixed_globe" src="img/visible-globe.svg" alt="fixed globe">
          <img class="rotating_vector" src="img/visible-icons.svg" alt="globe icons">
        </div>
      </div>
      <div class="col-md-6 visibility_info">
        <header class="mini_bold_header">VISIBILITY - INFORMATION DELIVERED TO YOU</header>
        <h2 class="h2">Copy to go here for visibility explaining what it is and what value the customer gains.</h2>
        <header class="blue_bold">Our service offerings include total access to all the information you require across the complete logistic chain.</header>
        <ul class="pb-1em">
          <li>Customised Reporting</li>
          <li>Web Tracker</li>
          <li>Order Management</li>
          <li>Integration</li>
        </ul>
        <a href="" class="button outline">FIND OUT MORE</a>
      </div>
    </div>
  </div>


  <div class="slider-range relative">
    <div class="container">
      <form>
        <input id="range" type="range" name="rangeInput" min="0" step="1" max="4" value="0" class="white" onchange="updateTextInput(this.value);" onchange="updateTextInput(this.value);" oninput="amount.value=rangeInput.value">
      </form>
    </div>
  </div>

  <p class="text-center" id="value2">Value 0</p>

<?php include 'inc/img_slider.php';?>

  <div class="market_coverage ptb-6em">
    <div class="clearfix">
      <div class="col-md-6 left_img_col">
        <div class="plane_bg"></div>
      </div>
      <div class="col-md-6">
        <div class="coverage_content">
          <header class="mini_bold_header">OUR CAPABILITIES EXCEED EXPECTATIONS</header>
          <h2 class="h2">Our market coverage and capabilities enable us to provide a total global multi-model service.</h2>
          <header class="blue_bold">We don’t just offer standard service packages, we develop and customize solutions for different markets.</header>
          <p>Our range of global services and expertise is what makes us stand out from the rest. We provide services tailored to individual customers, such as transport and distribution, warehousing and storage, pre- retailing services, dedicated transport, project management and consultancy.</p>
        </div>
      </div>
    </div>
  </div>

  <div class="aaw-offices ptb-3em">
    <div class="container">
      <div class="col-sm-3 col-md-2 show_office_city">
        <div class="officesname">
          <header>our offices</header>
          <div class="officelist">
            <ul>
              <li><a href="#melbourne" class="show_office_pin">Melbourne</a><span><a href="" class="office_dtls">View Office Details</a></span></li>
              <li><a href="#sydney" class="show_office_pin">Sydney</a><span><a href="" class="office_dtls">View Office Details</a></span></li>
              <li><a href="#brisbane" class="show_office_pin">brisbane</a><span><a href="" class="office_dtls">View Office Details</a></span></li>
              <li><a href="#adelaide" class="show_office_pin">adelaide</a><span><a href="" class="office_dtls">View Office Details</a></span></li>
              <li><a href="#fremantle" class="show_office_pin">fremantle</a><span><a href="" class="office_dtls">View Office Details</a></span></li>
              <li><a href="#townsville" class="show_office_pin">townsville</a><span><a href="" class="office_dtls">View Office Details</a></span></li>
              <li><a href="#darwin" class="show_office_pin">darwin</a><span><a href="" class="office_dtls">View Office Details</a></span></li>
              <li><a href="#mildura" class="show_office_pin">mildura</a><span><a href="" class="office_dtls">View Office Details</a></span></li>
              <li><a href="#launceston" class="show_office_pin">launceston</a><span><a href="" class="office_dtls">View Office Details</a></span></li>
              <li><a href="#" class="show_office_pin">View All</a></li>
            </ul>
          </div>
        </div>
      </div>
      <div class="col-sm-9 col-md-10 show_city_pin">
        <div class="state_map relative">
          <div class="map-pins active" id="melbourne"><span>VIC<em>Melbourne</em></span></div>
          <div class="map-pins" id="sydney"><span>NSW <em>SYDNEY</em></span></div>
          <div class="map-pins" id="brisbane"><span>qld <em>brisbane</em></span></div>
          <div class="map-pins" id="adelaide"><span>sa <em>adelaide</em></span></div>
          <div class="map-pins" id="fremantle"><span>wa <em>fremantle</em></span></div>
          <div class="map-pins" id="townsville"><span>qld <em>townsville</em></span></div>
          <div class="map-pins" id="darwin"><span>nt <em>darwin</em></span></div>
          <div class="map-pins" id="mildura"><span>vic <em>mildura</em></span></div>
          <div class="map-pins" id="launceston"><span>tas <em>launceston</em></span></div>
        </div>
      </div>
    </div>
  </div>

  <div class="request-quote-block">
    <div class="container clearfix">
      <div class="col-md-9"><h2>Contact us to request a quote for all your logistic needs.</h2></div>
      <div class="col-md-3"><a href="" class="button white">REQUEST A QUOTE</a></div>
    </div>
  </div>

<?php include_once('inc/footer.php'); ?>

