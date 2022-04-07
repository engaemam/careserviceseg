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
    <div class="services_page services_ele">
      <!-- Start Head page-->
      <div class="head_single-page" data-src="img/services/security.png">
        <div class="container">
          <div class="head_content"><i class="icon-services-ele service_icon"></i>
            <h1 class="services_title">الخدمات الأمنية الذكية</h1>
          </div>
        </div>
      </div>
      <!-- End Head page-->
      <!-- Start Service page Content-->
      <section class="services_page-content">
        <div class="container">
          <div class="services_page-block">   
            <div class="row">
              <!-- Start Description-->
              <div class="col-sm-12 col-md-7">
                <div class="description">
                  <h2 class="description_title"> الخدمات الأمنية الذكية </h2>
                  <p class="generar_paragraph">تقدم  شركة كير سرفيس منظومةخدمات متكاملة وحلول متطورة لحالات الطوارىء القصوى لمكافحة الحرائق و أنظمة الإنذار ضد الحريق و السرقة ، و شبكات وغرف مراقبة تعمل على مدار الساعة يتبعها أربعون موقعا مجهزين بتجهيزات متكاملة ، وفرق عمل مدربة على أعلى مستوى من الكفاءة تصمم نظم إنذار و مراقبة بما يتناسب مع طبيعه و حجم المكان ونوع النشاط  للعميل لتحقيق أعلى معدلات الأمان .</p>
                </div>
              </div>
              <!-- End Description-->
              <!-- Start image-->
              <div class="col-sm-12 col-md-5">
                <div class="services_img" data-src="img/services/ele-1.png"></div>
              </div>
              <!-- End Image-->
            </div>
          </div>
        </div>
      </section>
      <!-- End Service page Content-->
      <!-- Satrt Our Services Section-->
      <div class="our_Services ">
        <div class="container">
          <div class="row">
            <!-- Start Block-->
            <div class="col-sm-12 col-md-6 col-lg-3">
              <h3 class="title">اكتشف الخدمات الأخرى</h3>
            </div>
            <!-- End Block-->
            <!-- Start Block-->
            <div class="col-sm-12 col-md-6 col-lg-2"><a class="our_Services-block" href="security-ar">
                <div class="icon"><i class="icon-services-sec">  </i></div>
                <h3 class="title"> خدمـات التأمـين والــحراسـة </h3></a></div>
            <!-- End Block-->
            <!-- Start Block-->
            <div class="col-sm-12 col-md-6 col-lg-2"><a class="our_Services-block" href="environmental-ar">
                <div class="icon"><i class="icon-services-env"></i></div>
                <h3 class="title">خـدمات شئـون البـيئة</h3></a></div>
            <!-- End Block-->
            <!-- Start Block-->
            <div class="col-sm-12 col-md-6 col-lg-2"><a class="our_Services-block" href="integrated-ar">
                <div class="icon"><i class="icon-services-int"></i></div>
                <h3 class="title">إدارة الخدمات المتكاملة</h3></a></div>
            <!-- End Block-->
          </div>
        </div>
      </div>
      <!-- End Our Services Section-->
    </div>
    <!-- Start Our Company-->
    <section class="our_company"> 
      <div class="container">
        <div class="our_company-content "> 
          <!-- Start Title-->
          <h3 class="title">معتمد من : </h3>
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