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
    <!-- Start News-->
    <section class="news_home ">
      <div class="container">
        <h2 class="home_page-title down_dash">الأخبار</h2>
        <div class="news_page news_content">
          <div class="row">
            <div class="col-sm-12 col-lg-5">
              <div class="news_block-big">
               
                <aside class="news_image">
                  @foreach($news as $new)
                  <img src="img/news/{{$new->img}}" alt=""/>
                  @endforeach
                </aside>
               
            
                <div class="news_details">
                @foreach($news as $new)
                  <h1 class="title">{{$new->title}}</h1>
                 @endforeach
                 @foreach($news as $new)
                  <p class="generar_paragraph">
                  {{$new->body}}
                  </p>
                  @endforeach
                  <a class="button" href="{{url('/readmore-ar/id=')}}{{$new->id}}">قراءة المزيد</a>
                </div>
                <!-- End News Details-->
              </div>
            </div>
            <div class="col-sm-12 col-lg-7">
              <div class="news_small-content">
                <div class="news_block-small">
                  <div class="row">
                    <!-- Start News image-->
                    @foreach($allnews as $allnew)
                    <div class="col-sm-12 col-md-5">
                      <aside class="news_image"><img src="img/news/{{$allnew->img}}" alt=""></aside>
                    <br>
                    </div>
                    <!-- End News image-->
                    <!-- Start News Details-->
                   
                    <div class="col-sm-12 col-md-6">
                      <div class="news_details">
                        <h3 class="title">{{$allnew->title}}</h3>
                        <p class="generar_paragraph">
                        {{$allnew->body}}   
                      </p>
                      <a class="button_link" href="{{url('/readmore-ar/id=')}}{{$allnew->id}}">قراءة المزيد</a>
                      </div>
                    </div>
                    @endforeach
                    <!-- End News Details-->
                  </div>
                </div>
              
                  
                </div>
              </div>
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