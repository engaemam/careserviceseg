
<!-- Start Contact Us Page -->
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
    @include('layouts-ar.navbar-ar')
<div class="contact_us">
  <div id="mapid"></div>
  <!--Start Contact Details-->
  <section class="contact_details">
    <div class="container">
      <div class="row">
        <div class="col-sm-12 col-md-6">
          <div class="contact_adreess">
            <div class="head">
              <h2>المركز الرئيسى - القاهرة</h2>
              <aside class="head_content"> 
                <p>  عمارة برج مصر للسياحة-الدور  (15)- ميدان العباسية-القاهرة</p>
                <p class="phone"><span>   16735</span><i class="fas fa-phone-volume"> </i></p>
              </aside>
            </div>
            <ul class="list_address"> 
              <li>
                <h3 class="cuntry">كيرسرفيس الامن والحراسة  - القاهرة </h3><span class="address">22 عمارات حدائق العبور أمام بانوراما صلاح سالم - القاهرة</span>
              </li>
              <li>
                <h3 class="cuntry"> منطقة شرم الشيخ</h3><span class="address">مساكن الهضبة</span>
              </li>
              <li>
                <h3 class="cuntry">كيرسرفيس شئون البيئة - القاهرة</h3><span class="address">كيلو 26 طريق مصر الاسماعيلية الصحراوى سوق العبور  </span>
              </li>
              <li>
                <h3 class="cuntry">منطقة العريش</h3><span class="address">عمارة مسعد شارع المديرية متفرع من شارع 26 يوليو</span>
              </li>
              <li>
                <h3 class="cuntry"> كيرسرفيس لادارة الخدمات المتكاملة - القاهرة </h3><span class="address">عمارة برج مصر للسياحة - الدور (14)- ميدان العباسية</span>
              </li>
              <li>
                <h3 class="cuntry">كيرسرفيس الاسكندرية </h3><span class="address">أبراج التعمير عمارة  (و) أمام محطة المنتزة</span>
              </li>
              <li>
                <h3 class="cuntry">كير سرفس التشغيل والصيانة - القاهرة</h3><span class="address"> عمارة برج مصر للسياحة - الدور (16)- ميدان العباسية</span>
              </li>
              <li>
                <h3 class="cuntry">أسوان </h3><span class="address"> حى أطلس - أرض يعقوب</span>
              </li>
              <li>
                <h3 class="cuntry">الاقصر </h3><span class="address">1 ب حى الفيروز - العوامية الأقصر</span>
              </li>
            </ul>
          </div>
        </div>
        <div class="col-sm-12 col-md-6">
          <div class="contact_form">
            <h2 class="title">تواصل معنا</h2>
            <form  action="{{url('/contact/mail-ar')}}" method="post" class="form_body">
            {{csrf_field()}}
            @if(session()->has('message'))
            <div class="alert alert-success">{{session()->get('message')}}</div>
            @endif
           
              <aside class="input_content">
                <input type="text" id="name" name="name" placeholder=" الاسم"/>
              </aside>
              <aside class="input_content">
                <input type="text"  id="email" name="email" placeholder="البريد الإلكترونى"/>
              </aside>
              <aside class="input_content col-sm-12 ">
                <textarea type="text" name="message" id="comment" placeholder="رسالتك  "></textarea>
              </aside>
              <aside class="input_content col-sm-12 ">
                <button class="button" type="submit">ارسال</button>
              </aside>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--End Contact Details-->
  <!-- Start Join us Section-->
  <section class="join_us">
    <div class="join_us-content">
      <div class="logo"><img src="img/fivicon-white.png" alt=""/></div>
      <p class="text">انضم لفريقنا</p>
      <button class="button" type="button" data-toggle="modal" data-target="#myModal">قدم الآن</button>
    </div>
  </section>
  <!-- End Join us Section-->
  <!-- The Modal -->
  <div class="modal" id="myModal">
    <div class="modal-dialog">
      <div class="modal-content">
        <!-- Modal Header -->
        <!-- Modal body-->
        <div class="modal-body">
          <aside class="head"><img src="img/fivicon-white.png" alt=""/>
            <h2 class="title">تواصل معنا</h2>
          </aside>
          <form  action="{{route('send.resume.ar')}}" method="POST" class="form_body" enctype="multipart/form-data">
          {{csrf_field()}}
          
            <aside class="input_content">
              <input type="text" id="name" name="name" placeholder=" الاسم"/>
            </aside>
            <aside class="input_content">
              <input type="number" id="mobile" name="mobile" placeholder=" رقم الهاتف"/>
            </aside>
            <aside class="input_content">
              <input type="text" id="email" name="email" placeholder=" البريد الإلكترونى"/>
            </aside>
            <aside class="input_content">
              <textarea type="text" id="message" name="message" placeholder=" رسالتك"></textarea>
            </aside>
            <aside class="input_content">
              <label for="">Your C.V</label>
              <input type="file"  name="resume" id="resume"  placeholder="البريدالإلككترونى"/>
            </aside>
            <aside class="input_content">
              <button class="button" type="submit">ارسال</button>
            </aside>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
<script src="js/main-rtl.js"> </script>
  </body>
</html>
@include('layouts-ar.footer-ar')
<!-- End Contact Us Page -->