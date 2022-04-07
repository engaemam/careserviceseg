<!DOCTYPE html>
<html len="en">
  <head><!DOCTYPE html>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <title>Care Services </title>
    <link href="https://fonts.googleapis.com/css?family=Exo&amp;display=swap" rel="stylesheet">
    <!-- Favicon -->
    <link rel="shortcut icon" type="img/png" href="img/fivicon.png">
    <!--Css File   -->
    <link rel="stylesheet" href="css/them.css">
    <!-- -
    [if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    [endif]
    -->
  </head>
  <body>
    <!-- Start Navigation-->
    <div class="navigation ">
      <div class="container">
        <div class="navigation_content">
          <!-- Start Social Media-->
          <ul class="social_media">
            <li><a class="fab fa-facebook-f" href=" https://www.facebook.com/careserviceseg/" alt="Facebook" target="_blank"></a></li>
            <li><a class="fab fa-linkedin-in" href="https://www.linkedin.com/company/care-services" alt="linkedin" target="_blank"></a></li>
          </ul>
          <!-- End Social Media-->
          <!-- Start call-->
          <ul class="list_inline call_info-list">
            <!-- Start list-->
            <li><a href="tel:16735"><i class="fas fa-phone-volume"></i>
                <bdi>16735 </bdi></a></li>
            <!-- End List-->
            <!-- Start list-->
            <li><a href="mailto:info@careserviceseg.com"><i class="far fa-envelope"></i>
                <bdi>info@careserviceseg.com</bdi></a></li>
            <!-- End List-->
          </ul>
          <!-- End Call-->
        </div>
      </div>
    </div>
    <!-- End Navigation-->
    <!--Start Navbar-->
  @include('layouts.navbar')
    <!--End Navbar-->
    <!-- Start Home Page slider-->
    <div class="header_slider-js">
      <!-- Header Slider-->
      <div class="header">
        <div class="header_imag" data-src="img/slider-1.jpg"></div>
        <div class="container">
          <div class="header_content">
            <div class="header_content-description"><i class="icon-services-sec"></i>
              <h1>  SECURITY & GUARDING </h1>
              <p>
                 To meet the escalating needs of raw materials, equipment, means of cw materials, equipment </p>
              <div class="slider_button"><a class="button" href="secu-rity">SHOW MORE</a></div>
            </div>
          </div>
        </div>
      </div>
      <!-- End Header list -->
      <!-- Header Slider-->
      <div class="header">
        <div class="header_imag" data-src="img/slider-2.jpg"></div>
        <div class="container">
          <div class="header_content">
            <div class="header_content-description"><i class="icon-services-int"></i>
              <h1>  Integrated Services</h1>
              <p>
                 To meet the escalating needs of raw materials, equipment, means of cw materials, equipment </p>
              <div class="slider_button"><a class="button" href="inte-grated">SHOW MORE</a></div>
            </div>
          </div>
        </div>
      </div>
      <!-- End Header list -->
    </div>
    <!-- End Home Page slider-->
    <!-- Satrt Our Services Section-->
    <div class="our_Services ">
      <aside class="camera"><img src="img/camera.png" alt=""></aside>
      <div class="container">
        <h2 class="home_page-title down_dash">SERVICES</h2>
        <div class="row">
          <!-- Start Block-->
          <div class="col-sm-12 col-md-6 col-lg-3"><a class="our_Services-block" href="secu-rity">
              <div class="icon"><i class="icon-services-sec">  </i></div>
              <h3 class="title"> SECURITY  & GUARDING</h3></a></div>
          <!-- End Block-->
          <!-- Start Block-->
          <div class="col-sm-12 col-md-6 col-lg-3"><a class="our_Services-block" href="elec-tronic">
              <div class="icon"><i class="icon-services-ele"></i></div>
              <h3 class="title">ELECTRONIC SECURITY</h3></a></div>
          <!-- End Block-->
          <!-- Start Block-->
          <div class="col-sm-12 col-md-6 col-lg-3"><a class="our_Services-block" href="envir-onmental">
              <div class="icon"><i class="icon-services-env"></i></div>
              <h3 class="title">ENVIRONMENTAL AFFAIRS</h3></a></div>
          <!-- End Block-->
          <!-- Start Block-->
          <div class="col-sm-12 col-md-6 col-lg-3"><a class="our_Services-block" href="inte-grated">
              <div class="icon"><i class="icon-services-int"></i></div>
              <h3 class="title">INTEGRATED SERVICES</h3></a></div>
          <!-- End Block-->
        </div>
      </div>
    </div>
    <!-- End Our Services Section-->
    <!-- Start About and Media -->
    <section class="about_media ">
      <div class="container">
        <!-- Start About-->
        <div class="about">
          <h2 class="home_page-title down_dash">About us</h2>
          <p class="generar_paragraph">What can be presented in the field of services is boundless in order to gratify the needs of service markets in Egypt. With the spiralling demand on environ Company was founded in 1990 Ever since this date, the Company expanded its activities and considered Sharm El Sheikh touristic city.</p>
        </div>
        <!-- End About-->
        <!-- Start Media Section-->
        <div class="media_section">
          <h2 class="home_page-title down_dash">media</h2>
          <!-- Start Tabs link-->
          <ul class="tabs_link">
            <li class="list" data-class="security">Security & Guarding</li>
            <li class="list" data-class="electronic">Electronic Security</li>
            <li class="list" data-class="environmental">Environmental Affairs</li>
            <li class="list" data-class="integrated">Integrated Services</li>
          </ul>
          <!-- End Tabs Link-->
          <!-- Start All Tabs-->
      <!-- Start All Tabs-->
      <div class="all_tabs ">
        <!-- Start Tab Content-->
        <div class="security tab_content">
          <div class="row">
       
          @foreach ($security as $sec)
          <div class="col-sm-12 col-md-6 col-lg-3"><a class="img_content" href="img/services/security/{{ ($sec->image) }}" data-fancybox="gallery"><img  src="/img/services/security/{{  ($sec->image) }}" alt=""/></a></div>
          @endforeach
          
          </div>
        </div>
        <!-- End Tab Content-->
        <!-- Start Tab Content-->
        <div class="electronic tab_content">
          <div class="row">
          @foreach ($electronics as $elec)
          <div class="col-sm-12 col-md-6 col-lg-3"><a class="img_content" href="img/services/Electronics/{{ ($elec->image) }}" data-fancybox="gallery"><img  src="/img/services/Electronics/{{  ($elec->image) }}" alt=""/></a></div>
          @endforeach
          </div>
        </div>
        <!-- End Tab Content-->
        <!-- Start Tab Content-->
        <div class="environmental tab_content">
          <div class="row">
          @foreach ($environmental as $env)
          <div class="col-sm-12 col-md-6 col-lg-3"><a class="img_content" href="img/services/environmental/{{ ($env->image) }}" data-fancybox="gallery"><img  src="/img/services/environmental/{{  ($env->image) }}" alt=""/></a></div>
          @endforeach
        </div>
        </div>
        <!-- End Tab Content-->
        <!-- Start Tab Content-->
        <div class="integrated tab_content">
          <div class="row">
          @foreach ($integrated as $int)
          <div class="col-sm-12 col-md-6 col-lg-3"><a class="img_content" href="img/services/integrated/{{ ($int->image) }}" data-fancybox="gallery"><img  src="/img/services/integrated/{{  ($int->image) }}" alt=""/></a></div>
          @endforeach  
        </div>
        </div>
        <!-- End Tab Content-->
      </div><a class="button" href="gallery"> Show More   </a>
      <!-- End All Tabs-->
    </div>
   
        <!-- End Media Section-->
      </div>
    </section>
    <!-- End About and Media-->
    <!-- Start Counter Section-->

    <section class="counter ">
      <div class="container">
        <div class="row">
          <!-- Start Counter Block-->
          <div class="col-sm-12 col-md-6 col-lg-3">
            <div class="counter_block">
              <h3 class="counter_title">YEARS </h3>
              <div class="counter_number" data-count=" +40"> </div>
            </div>
          </div>
          <!-- End Counter Block-->
          <!-- Start Counter Block-->
          <div class="col-sm-12 col-md-6 col-lg-3">
            <div class="counter_block">
              <h3 class="counter_title">BRANCHES  </h3>
              <div class="counter_number" data-count="24"> </div>
            </div>
          </div>
          <!-- End Counter Block-->
          <!-- Start Counter Block-->
          <div class="col-sm-12 col-md-6 col-lg-3">
            <div class="counter_block">
              <h3 class="counter_title">EMPLOYEES</h3>
              <div class="counter_number" data-count="2400"> </div>
            </div>
          </div>
          <!-- End Counter Block-->
          <!-- Start Counter Block-->
          <div class="col-sm-12 col-md-6 col-lg-3">
            <div class="counter_block">
              <h3 class="counter_title">SUBSDIAIRES </h3>
              <div class="counter_number" data-count="6"> </div>
            </div>
          </div>
          <!-- End Counter Block-->
        </div>
      </div>
    </section>
    <!-- End Counter Section-->
    <!-- Start Subsideares-->
    <section class="subsideareas ">
      <div class="container">
        <h2 class="home_page-title down_dash">SUBSIDARES</h2>
        <div class="row">
          <!-- Start Column-->
          <div class="col-sm-12 col-md-6 col-lg-4">
            <!-- Start Block-->
            <div class="block">
              <aside class="icon"><img src="img/aman.png" alt="AMANCO"></aside>
              <aside class="title_content">   
                <h3 class="title">AMANCO </h3><span>1987</span>
              </aside>
            </div>
            <!-- End Block-->
          </div>
          <!-- End Column  -->
          <!-- Start Column-->
          <div class="col-sm-12 col-md-6 col-lg-4">
            <!-- Start Block-->
            <div class="block">
              <aside class="icon"><img src="img/uniform.png" alt="UNIFORM"></aside>
              <aside class="title_content">   
                <h3 class="title">UNIFORM</h3><span>1988</span>
              </aside>
            </div>
            <!-- End Block-->
          </div>
          <!-- End Column -->
          <!-- Start Column-->
          <div class="col-sm-12 col-md-6 col-lg-4">
            <!-- Start Block-->
            <div class="block">
              <aside class="icon"><img src="img/care_impex.png" alt="CARE IMPEX"></aside>
              <aside class="title_content">   
                <h3 class="title">CARE IMPEX</h3><span>1985</span>
              </aside>
            </div>
            <!-- End Block-->
          </div>
          <!-- End Column -->
          <!-- Start Column-->
          <div class="col-sm-12 col-md-6 col-lg-4">
            <!-- Start Block-->
            <div class="block">
              <aside class="icon"><img src="img/care_chemical.png" alt="CARE CHEMICAL"></aside>
              <aside class="title_content">   
                <h3 class="title">CARE CHEMICAL</h3><span>1990</span>
              </aside>
            </div>
            <!-- End Block-->
          </div>
          <!-- End Column -->
          <!-- Start Column-->
          <div class="col-sm-12 col-md-6 col-lg-4">
            <!-- Start Block-->
            <div class="block">
              <aside class="icon"><img src="img/constraction.png" alt="CARE FOR CONSTRUCTION AND MAINTENANCE"></aside>
              <aside class="title_content">   
                <h3 class="title">CARE FOR CONSTRUCTION AND MAINTENANCE</h3><span>1987</span>
              </aside>
            </div>
            <!-- End Block-->
          </div>
          <!-- End Column  -->
          <!-- Start Column-->
          <div class="col-sm-12 col-md-6 col-lg-4">
            <!-- Start Block-->
            <div class="block">
              <aside class="icon"><img src="img/investmint.png" alt="SINAI FOR INVESTMENTS"></aside>
              <aside class="title_content">   
                <h3 class="title">SINAI FOR INVESTMENTS</h3><span>1994</span>
              </aside>
            </div>
            <!-- End Block-->
          </div>
          <!-- End Column  -->
        </div>
      </div>
    </section>
    <!-- End Subsideares-->
    <!-- Start News-->
    <section class="news_home">
      <div class="container">
        <h2 class="home_page-title down_dash">news</h2>
        <div class="news_content">
          <div class="row">
            <!-- Start News image-->
            @foreach($news as $new)
            <div class="col-sm-12 col-md-4">
              <aside class="news_image"><img src="img/news/{{$new->img}}" alt=""></aside>
              <br>
            </div>
        
            <!-- End News image-->
            <!-- Start News Details-->
     
            <div class="col-sm-12 col-md-8">
              <div class="news_details">
             
                <h3 class="title">{{$new->title}}</h3>
         
                <p class="generar_paragraph">
                {{$new->body}}
                </p><a class="button" href="{{url('/readmore/id=')}}{{$new->id}}">Read more</a>
              </div>
            </div>
            <br>
            @endforeach
            <!-- End News Details-->
          </div>
        </div>
        
      </div>
    </section>
    <!-- End News-->
    <!-- Start Home Map-->
    <section class="home_map" data-src="img/Locations.jpg">
      <h2 class="home_page-title down_dash">LOCATIONS</h2>
      <div class="container">
        <div class="locations_content"> 
          <p>
             services Available<br><b>16 points in Egypt.</b></p><a href="contact-us.html"> 
            <aside class="button">view Locations </aside>
            <div class="map_spote"></div></a>
        </div>
      </div>
    </section>
    <!-- End Nome Map-->
    <!-- Start Our Company-->
    <section class="our_company"> 
      <div class="container">
        <div class="our_company-content "> 
          <!-- Start Title-->
          <h3 class="title">Certified from: </h3>
          <!-- End Title-->
          <!-- Start Block-->
          <div class="our_company-block"><img src="img/iso-1.png" alt="iso"></div>
          <!-- End Block-->
          <!-- Start Block-->
          <div class="our_company-block"><img src="img/iso-2.png" alt="iso"></div>
          <!-- End Block-->
          <!-- Start Block-->
          <div class="our_company-block"><img src="img/ASIS.png" alt="ASIS"></div>
          <!-- End Block-->
          <!-- End Block-->
          <div class="our_company-block"><img src="img/BICSc.png" alt="BICSc"></div>
          <!-- End Block-->
        </div>
      </div>
    </section>
    <!-- End Our Company-->
    <!-- Start Footer-->
    <!-- End Footer-->
    <!-- Start Go up Button--><span class="go_up go_up-js fas fa-angle-up"> </span>
    <!-- End Go up Button -->
    <!-- Start copyright-->
 
<!-- Start Our Company-->

<!-- End Our Company-->
<!-- Start Footer-->
<footer>
  <div class="container">
    <div class="foooter_head"><a class="footer_logo" href="/"><img alt="WhitLogo" src="img/logo-white.png"/></a></div>
    <div class="row"> 
      <!-- Start Column 1-->
      <div class="col-sm-12 col-md-6 col-lg-2">
        <ul class="info_list">
          <li><a href="/">Home</a></li>
          <li><a href="about_us">ABOUT US</a></li>
          <li><a href="industry">INDUSTRIES</a></li>
          <li><a href="subs">SUBSIDIARIES</a></li>
          <li><a href="gallery">Gallery </a></li>
          <li><a href="contact_us">CONTACT US</a></li>
        </ul>
      </div>
      <!-- End Column 1-->
      <!-- Start Column 2-->
      <div class="col-sm-12 col-md-6 col-lg-3">
        <ul class="info_list">
          <li><a href="elec-tronic">SECURITY & GUARDING</a></li>
          <li><a href="secu-rity">ELECTRONIC SECURITY</a></li>
          <li><a href="envir-onmental">ENVIRONMENTAL AFFAIRS</a></li>
          <li><a href="inte-grated">INTEGRATED SERVICES</a></li>
        </ul>
      </div>
      <!-- End Column 2-->
      <!-- Start Column 3-->
      <div class="col-sm-12 col-md-6 col-lg-3">
        <ul class="info_list">
          <li><i class="fas fa-phone"></i><a href="tel:16735"> 
              <bdi>16735</bdi></a></li>
          <li><i class="fas fa-envelope"></i><a href="mailto:info@careserviceseg.com">info@careserviceseg.com</a></li>
        </ul>
        <!-- Start Social Media-->
        <ul class="social_media">
          <li><a class="fab fa-facebook-f" href=" https://www.facebook.com/careserviceseg/" target="_blank" alt="Facebook"></a></li>
          <li><a class="fab fa-linkedin-in" href="https://www.linkedin.com/company/care-services" target="_blank" alt="linkedin"></a></li>
          <!-- End Social Media-->
        </ul>
      </div>
      <!-- End Column 3 -->
      <!-- Start Column 4  -->
      <div class="col-sm-12 col-md-6 col-lg-4">
        <aside class="newsletter">
          <h3 class="title">- GET LATEST NEWSLETTER</h3>
          <form  action="{{route('contact.subscribe')}}" method="POST" class="form_body" >
          {{csrf_field()}}
            @if(session()->has('message'))
            <div class="alert alert-success">{{session()->get('message')}}</div>
            @endif
            <input type="text" placeholder="email" name="email" id="email"/>
            <button type="submit">Send</button>
          </form>
        </aside>
      </div>
      <!-- End Column 4  -->
    </div>
  </div>
</footer>
<!-- End Footer-->
<!-- Start Go up Button--><span class="go_up go_up-js fas fa-angle-up"> </span>
<!-- End Go up Button -->
<!-- Start copyright-->
<div class="copyright">
  <div class="container">
    <div class="copyright_content">
      <p class="poewred_by">Powered By : <a href="http://fisheyesolutions.com" target="_blank">  FISHEYE SOLUTIONS</a></p>
      <p class="all_copyright">
        All Rights Reserved - Care Services 2019 
        
      </p>
    </div>
  </div>
</div>
<!-- End copyright-->
    <!-- End copyright-->
    <!-- include Js File-->
    <script src="js/main.js"> </script>
  </body>
</html>