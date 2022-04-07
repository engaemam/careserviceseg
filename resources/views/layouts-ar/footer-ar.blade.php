
<!-- Start Our Company-->

<!-- End Our Company-->
<!-- Start Footer-->
<footer>
  <div class="container">
    <div class="foooter_head"><a class="footer_logo" href="index-ar.html"><img alt="WhitLogo" src="img/logo-white.png"/></a></div>
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
            <input type="email"  name="email" id="email" placeholder=" البريد الإلكنرونى"/>
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
<div class="copyright">
  <div class="container">
    <div class="copyright_content">
      <p class="poewred_by">تصميم وتطوير : <a href="http://fisheyesolutions.com" target="_blank">  FISHEYE SOLUTIONS</a></p>
      <p class="all_copyright">جميع الحقوق محفوظة لدى - كيرسرفيس</p>
    </div>
  </div>
</div>
<!-- End copyright-->