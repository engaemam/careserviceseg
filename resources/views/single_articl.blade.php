
<!-- Start News-->
<div class="navbar" id="navbar">
  <div class="container">
    <div class="navbar_content"><a class="navbar_brand " href="index.html"><img src="{{asset('img/logo.svg')}}"/></a>
      <!--Start Navbar Menu-->
      <div class="navbar_overlay"></div>
      <div class="navbar_menu">
        <ul class="navbar_menu-lest">
          <li><a href="/" title="Home">Home          </a></li>
          <li><a href="/about_us" title="About us">About us</a></li>
          <li class="dropdown_link"><a> <i class="fas fa-sort-down" title="Our Servisec"></i><span>Our Services</span></a>
            <ul class="navbar_dropdown-menu">
              <li> <a href="/elec-tronic" title="Electronic Security"><i class="icon-services-ele"></i><span>Electronic Security   </span></a></li>
              <li><a href="/secu-rity" title="Security Services"><i class="icon-services-sec"></i><span>Security Services                </span></a></li>
              <li><a href="/envir-onmental" title="Environmental Affairs"> <i class="icon-services-env"></i><span>Environmental Affairs</span></a></li>
              <li> <a href="/inte-grated" title="Integrated Services"><i class="icon-services-int"></i><span>Integrated Services  </span></a></li>
            </ul>
          </li>
          <li><a href="industry"> INDUSTRIES</a></li>
          <li><a href="subs">Subsidiaries</a></li>
          <li class="dropdown_link"><a> <i class="fas fa-sort-down"></i><span>MEDIA</span></a>
            <ul class="navbar_dropdown-menu">
              <li><a href="/gallery"> <span>Gallery</span></a></li>
              <li> <a href="/news"><span>News</span></a></li>
            </ul>
          </li>
          <li><a href="/contact-us">Contact us</a></li>
          <!-- Start Languge-->
          <li><a class="languge" href="/homepage-ar">AR</a></li>
          <!-- End Languge  -->
        </ul>
      </div>
    </div>
    <!--Navbar Button-->
    <div class="navbar_button"><i class="fas fa-bars"></i>
      <!--End Navbar Menu -->
    </div>
  </div>
</div>
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
    <link rel="stylesheet" href="{{asset('css/them.css')}}">
    <!-- -
    [if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    [endif]
    -->
  </head>
<section class="news_home single_articls">
  <div class="container">
    <h2 class="home_page-title down_dash">news</h2>
    <div class="news_page news_content">
      <div class="row">
        <div class="col-sm-12 col-lg-9">
          @foreach($news as $new)
            <aside class="news_image"><img src="http://careservices.com/img/news/{{$new->img}}" alt=""/></aside>
           <br>
            <h3 class="title">{{$new->title}}</h3>
            <!-- End News Details-->
            <p class="generar_paragraph">
              {{$new->body}}
              </p>
              @endforeach
         
        </div>
        <div class="col-sm-12 col-lg-3">
          <h5 class="read_also">Read Also</h5>
          <div class="news_block-small">
            <div class="block_content">
              <!-- Start News image-->
              @foreach($allnews as $allnew)
              <aside class="news_image"><img src="http://careservices.com/img/news/{{$allnew->img}}" alt=""/></aside>
              <!-- End News image-->
              <!-- Start News Details-->
              <div class="news_details">
               
                <h3 class="title">{{$allnew->title}}</h3>
                <p class="generar_paragraph">
                  {{$allnew->body}}
                </p>
               <br>
                <a class="button_link" href="{{url('/readmore/id=')}}{{$allnew->id}}">Read More</a>
                <br>
              </div>
              <br>
              @endforeach
              {{$allnews->links()}}
              <!-- End News Details-->
            </div>
          </div>
          
          
        </div>
      </div>
    </div>
  </div>
</section>
<footer>
  <div class="container">
    <div class="foooter_head"><a class="footer_logo" href="index.html"><img alt="WhitLogo" src="{{asset('img/logo-white.png')}} "/></a></div>
    <div class="row"> 
      <!-- Start Column 1-->
      <div class="col-sm-12 col-md-6 col-lg-2">
        <ul class="info_list">
          <li><a href="/">Home</a></li>
          <li><a href="about_us">ABOUT US</a></li>
          <li><a href="industry">INDUSTRIES</a></li>
          <li><a href="subs">SUBSIDIARIES</a></li>
          <li><a href="gallery">Gallery </a></li>
          <li><a href="contact-us">CONTACT US</a></li>
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
<script src="{{asset('js/main.js')}}"> </script>
<!-- End copyright-->
</html>

<!-- End News-->