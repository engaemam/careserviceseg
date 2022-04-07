<!DOCTYPE html>
<html len="en" dir="rtl">
  <head><!DOCTYPE html>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Care Services </title>
    <link href="https://fonts.googleapis.com/css?family=Tajawal&amp;display=swap" rel="stylesheet">
    <!-- Favicon -->
    <link rel="shortcut icon" type="img/png" href="img/fivicon.png">
    <!--Css File  -->
    <link rel="stylesheet" href="{{asset('css/them-rtl.css')}}">
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

<!--Start Navbar-->
<div class="navbar" id="navbar">
  <div class="container">
    <div class="navbar_content"><a class="navbar_brand " href="/hompage-ar"><img src="{{asset('img/logo.svg')}}"/></a>
      <!--Start Navbar Menu-->
      <div class="navbar_overlay"></div>
      <div class="navbar_menu">
        <ul class="navbar_menu-lest">
          <li><a href="{{url('/homepage-ar')}}" title="Home">الرئيسية          </a></li>
          <li><a href="{{url('/about_us-ar')}}" title="About us"> من نحن</a></li>
          <li class="dropdown_link"><a> <i class="fas fa-sort-down" title="Our Servisec"></i><span> خدماتنا</span></a>
            <ul class="navbar_dropdown-menu">
              <li><a href="{{url('/electronic-ar')}}" title="Electronic Security"><i class="icon-services-ele"></i><span>الخدمات الأمنية الذكية</span></a></li>
              <li> <a href="{{url('/security-ar')}}" title="Security Services"><i class="icon-services-sec"></i><span>خدمـات التأمـين والــحراسـة </span></a></li>
              <li><a href="{{url('/environmental-ar')}}" title="Environmental Affairs"> <i class="icon-services-env"></i><span>خـدمـــات شئــون البــيئة</span></a></li>
              <li> <a href="{{url('/integrated-ar')}}" title="Integrated Services"><i class="icon-services-int"></i><span>إدارة الخدمات المتكاملة  </span></a></li>
            </ul>
          </li>
          <li><a href="{{url('/industry-ar')}}"> القطاعات المستهدفة </a></li>
          <li><a href="{{url('/subs-ar')}}">الشركات التابعة</a></li>
          <li class="dropdown_link"><a> <i class="fas fa-sort-down"></i><span>المدونة </span></a>
            <ul class="navbar_dropdown-menu">
              <li><a href="{{url('/gallery-ar')}}"> <span>ألبوم</span></a></li>
              <li> <a href="{{url('/news-ar')}}"><span>الأخبار</span></a></li>
            </ul>
          </li>
          <li><a href="{{url('/contact-us-ar')}}"> تواصل معنا</a></li>
          <!-- Start Languge-->
          <li><a class="languge" href="{{url('/')}}">EN</a></li>
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
<!--End Navbar-->
    <!--End Navbar-->
    <!-- Start News-->
    <section class="news_home single_articls">
      <div class="container">
        <h2 class="home_page-title down_dash">news</h2>
        <div class="news_page news_content">
          <div class="row">
            <div class="col-sm-12 col-lg-8">
              <div class="news_block-big news_details">
                <!-- Start News Details-->
                @foreach($news as $new)
                <h3 class="title">{{$new->title}}</h3>
                <!-- End News Details-->
                <aside class="news_image"><img src="{{asset('img/news/')}}/{{$new->img}}" alt=""></aside>
                <p class="generar_paragraph">
                  {{$new->body}}
                </p>
                @endforeach
              </div>
            </div>
            <div class="col-sm-12 col-lg-4">
              <h3 class="title">المزيد</h3>
              @foreach($allnews as $allnew)
              <div class="news_block-small">
                <div class="row">
                  <!-- Start News image-->
                  <div class="col-sm-12">
                    <aside class="news_image"><img src="{{asset('img/news/')}}/{{$allnew->img}}" alt=""></aside>
                  <br>
                  </div>
                  <!-- End News image-->
                  <!-- Start News Details-->
                  <div class="col-sm-12">
                    <div class="news_details">
                      <h3 class="title">{{$allnew->title}}} </h3>
                      <p class="generar_paragraph">
                      {{$allnew->body}} 
                      </p><a class="button_link" href="{{url('/readmore-ar/id=')}}{{$allnew->id}}">Read More</a>
                    </div>
                  </div>
                  <!-- End News Details-->
                </div>
              </div>
              @endforeach
              <br>
              {{$allnews->links()}}
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- End News-->
    <!-- Start Our Company-->
    <section class="our_company"> 
      <div class="container">
        <div class="our_company-content "> 
          <!-- Start Title-->
          <h3 class="title">معتمد من : </h3>
          <!-- End Title-->
          <!-- Start Block-->
          <div class="our_company-block"><img src="{{asset('img/iso-1.png')}}" alt="iso"></div>
          <!-- End Block-->
          <!-- Start Block-->
          <div class="our_company-block"><img src="{{asset('img/iso-2.png')}}" alt="iso"></div>
          <!-- End Block-->
          <!-- Start Block-->
          <div class="our_company-block"><img src="{{asset('img/ASIS.png')}}" alt="ASIS"></div>
          <!-- End Block-->
          <!-- End Block-->
          <div class="our_company-block"><img src="{{asset('img/BICSc.png')}}" alt="BICSc"></div>
          <!-- End Block-->
        </div>
      </div>
    </section>
    <!-- End Our Company-->
    <!-- Start Footer-->
   
<!-- Start Our Company-->

<!-- End Our Company-->
<!-- Start Footer-->
<footer>
  <div class="container">
    <div class="foooter_head"><a class="footer_logo" href="homepage-ar"><img alt="WhitLogo" src="{{asset('img/logo-white.png')}}"/></a></div>
    <div class="row"> 
      <!-- Start Column 1-->
      <div class="col-sm-12 col-md-6 col-lg-2">
        <ul class="info_list">
          <li><a href="/homepage-ar">الرئيسية</a></li>
          <li><a href="about_us-ar">من نحن</a></li>
          <li><a href="industry-ar">القطاعات المستهدفة </a></li>
          <li><a href="subs-ar">الشركات التابعة</a></li>
          <li><a href="galler-ar">المدونة</a></li>
          <li><a href="contact-us-ar">تواصل معنا</a></li>
        </ul>
      </div>
      <!-- End Column 1-->
      <!-- Start Column 2-->
      <div class="col-sm-12 col-md-6 col-lg-3">
        <ul class="info_list">
          <li><a href="electronic-ar">الخدمات الأمنية الذكية</a></li>
          <li><a href="security-ar">خدمـات التأمـين والــحراسـة </a></li>
          <li><a href="environmental-ar">خـدمـــات شئــون البــيئة</a></li>
          <li><a href="integrated-ar">إدارة الخدمات المتكاملة </a></li>
        </ul>
      </div>
      <!-- End Column 2-->
      <!-- Start Column 3-->
      <div class="col-sm-12 col-md-6 col-lg-3">
        <ul class="info_list">
          <li><i class="fas fa-phone-volume"></i><a href="tel:16735"> 
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
          <h3 class="title">- اشترك ليصلك كل جديد</h3>
          <form  action="{{route('contact.subscribe')}}" method="POST" class="form_body">
          {{csrf_field()}}
            <input type="text" name="email" id="email" placeholder=" البريد الإلكنرونى"/>
            <button type="submit">ارسال</button>
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

<!-- End copyright-->
    <!-- End Footer-->
    <!-- Start Go up Button--><span class="go_up go_up-js fas fa-angle-up"> </span>
    <!-- End Go up Button -->
    <!-- Start copyright-->
    <div class="copyright">
      <div class="container">
        <div class="copyright_content">
          <p class="poewred_by">تصميم وتطوير : <a href="http://fisheyesolutions.com" target="_blank">  FISHEYE SOLUTIONS</a></p>
          <p class="all_copyright">جميع الحقوق محفوظة لدى - كيرسرفيس</p>
        </div>
      </div>
    </div>
    <!-- End copyright-->
    <!-- include Js File-->
    <script src="{{asset('js/main-rtl.js')}}"> </script>
  </body>
</html>