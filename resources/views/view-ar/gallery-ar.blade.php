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
    <link rel="stylesheet" href="css/them-rtl.css">
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
    @include('layouts-ar.navbar-ar')
    <!--End Navbar-->
    <!-- Start Media Gallary-->
    <section class="media_gallary">
      <!-- Start Media Section-->
      <div class="media_section">
        <div class="container">
          <aside class="head"><i><img src="img/camera_icon.jpg" alt=""></i>
            <h2 class="home_page-title down_dash">ميديا </h2>
          </aside>
          <!-- Start Tabs link-->
          <ul class="tabs_link">
            <li class="list" data-class="security"><i class="icon-services-sec"></i><span>خدمـات التأمـين والــحراسـة</span></li>
            <li class="list" data-class="electronic"><i class="icon-services-ele"></i><span>الخدمات الأمنية الذكية</span></li>
            <li class="list" data-class="environmental"><i class="icon-services-env"></i><span>خـدمـــات شئــون البــيئة</span></li>
            <li class="list" data-class="integrated"><i class="icon-services-int"></i><span>إدارة الخدمات المتكاملة</span></li>
          </ul>
          <!-- End Tabs Link-->
        </div>
        <!-- Start All Tabs-->
      </div>
      <div class="all_tabs ">
        <div class="security tab_content">
          <div class="container">
            <div class="row">
            @foreach ($security as $sec)
          <div class="col-sm-12 col-md-6 col-lg-3"><a class="img_content" href="img/services/security/{{ ($sec->image) }}" data-fancybox="gallery"><img  src="/img/services/security/{{  ($sec->image) }}" alt=""/></a></div>
          @endforeach 
              <!-- End  Pagination-->
            </div>

            <div class="row">  {{$security->links()}}</div>
            <br>
          </div>
        </div>
        <div class="electronic tab_content">
          <div class="container">
            <div class="row">
            @foreach ($electronics as $elec)
          <div class="col-sm-12 col-md-6 col-lg-3"><a class="img_content" href="img/services/electronics/{{ ($elec->image) }}" data-fancybox="gallery"><img  src="/img/services/electronics/{{  ($elec->image) }}" alt=""/></a></div> <br>
          @endforeach 
          
          <!-- End  Pagination-->
        </div>
        <div class="row">  {{$electronics->links()}}</div>
          </div>
        </div>
        <div class="environmental tab_content">
          <div class="container">
            <div class="row">
            @foreach ($environmental as $env)
          <div class="col-sm-12 col-md-6 col-lg-3"><a class="img_content" href="img/services/environmental/{{ ($env->image) }}" data-fancybox="gallery"><img  src="/img/services/environmental/{{  ($env->image) }}" alt=""/></a></div>
          @endforeach
          <!-- Start Pagination-->
        
          <!-- End  Pagination-->
        </div>
        <div class="row">  {{$environmental->links()}}</div>
          </div>
        </div>
        <div class="integrated tab_content">
          <div class="container">
            <div class="row">
            @foreach ($integrated as $int)
          <div class="col-sm-12 col-md-6 col-lg-3"><a class="img_content" href="img/services/integrated/{{ ($int->image) }}" data-fancybox="gallery"><img src="/img/services/integrated/{{  ($int->image) }}" alt=""/></a></div> <br>

        @endforeach
    
          <!-- End  Pagination-->
        </div>
        
         <!-- Start Pagination-->
         <div class="row">  {{$integrated->links()}}</div>
          </div>
        </div>
      </div>
      <!-- End All Tabs-->
      <!-- End Media Section-->
    </section>
    <!-- End Media Gallary-->
    <!-- Start Our Company-->
  
    <!-- End Our Company-->
    <!-- Start Footer-->
    @include('layouts-ar.footer-ar')
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
    <script src="js/main-rtl.js"> </script>
  </body>
</html>