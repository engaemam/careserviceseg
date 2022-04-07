
<!-- Start Our Company-->
<section class="our_company"> 
  <div class="container">
    <div class="our_company-content "> 
      <!-- Start Title-->
      <h3 class="title">Certified from: </h3>
      <!-- End Title-->
      <!-- Start Block-->
      <div class="our_company-block"><img src="img/iso-1.png" alt="iso"/></div>
      <!-- End Block-->
      <!-- Start Block-->
      <div class="our_company-block"><img src="img/iso-2.png" alt="iso"/></div>
      <!-- End Block-->
      <!-- Start Block-->
      <div class="our_company-block"><img src="img/ASIS.png" alt="ASIS"/></div>
      <!-- End Block-->
      <!-- End Block-->
      <div class="our_company-block"><img src="img/BICSc.png" alt="BICSc"/></div>
      <!-- End Block-->
    </div>
  </div>
</section>
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