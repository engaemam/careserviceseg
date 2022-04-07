@include('layouts.navbar')
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
<div class="services_page services_ele">
  <!-- Start Head page-->
  <div class="head_single-page" data-src="img/services/electronic.jpg">
    <div class="container">
      <div class="head_content"><i class="icon-services-ele service_icon"></i>
        <h1 class="services_title">ELECTRONIC SECURITY</h1>
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
              <h2 class="description_title"> Electronic Security</h2>
              <p class="generar_paragraph">
                Complete wide range state-of-the-art solutions that cover end-to-end surveillance, monitoring, and fire-fighting challenges of our clients. No matter what type of your business or concern is, our team of consultants will guide you through our perfect solutions to pick the most that can address smartly and efficiently those rapid-changing challenges. 
                    <br>
                Care Integrated Security Services is the only capable-to-respond service in the country which comes as a result to our 40 fully-equipped sites and  squads spread over the map of Egypt. If you are connected to Care 24/7 Monitoring Room, then Care Squad Teams will be able to respond accordingly and in a timely manner. 
              </p>
            </div>
          </div>
          <!-- End Description-->
          <!-- Start image-->
          <div class="col-sm-12 col-md-5">
            <div class="services_img" data-src="img/services/electronic-1.jpg"></div>
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
          <h3 class="title">Discover Other Services</h3>
        </div>
        <!-- End Block-->
        <!-- Start Block-->
        <div class="col-sm-12 col-md-6 col-lg-3"><a class="our_Services-block" href="secu-rity">
            <div class="icon"><i class="icon-services-sec">  </i></div>
            <h3 class="title"> SECURITY  & GUARDING </h3></a></div>
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
</div>
<script src="js/main.js"> </script>
</body>
</html>
@include('layouts.footer')