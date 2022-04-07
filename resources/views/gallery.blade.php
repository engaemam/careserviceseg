
<!-- Start Media Gallary-->
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
<section class="media_gallary">
  <!-- Start Media Section-->
  <div class="media_section">
    <div class="container">
      <aside class="head"><i><img src="img/camera_icon.jpg" alt=""/></i>
        <h2 class="home_page-title down_dash">media</h2>
      </aside>
      <!-- Start Tabs link-->
      <ul class="tabs_link">
        <li class="list" data-class="security"><i class="icon-services-sec"></i><span>Security & Guarding</span></li>
        <li class="list" data-class="electronic"><i class="icon-services-ele"></i><span>Electronic Security</span></li>
        <li class="list" data-class="environmental"><i class="icon-services-env"></i><span>Environmental Affairs</span></li>
        <li class="list" data-class="integrated"><i class="icon-services-int"></i><span>Integrated Services</span></li>
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
        <!-- Start Pagination-->
      
          <!-- End  Pagination-->
       
        </div>
        <div class="row">  {{$security->links()}}</div>
      
      </div>
  
    </div>
    <div class="electronic  tab_content">
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
    <div class="integrated  tab_content">
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
<script src="js/main.js"> </script>
</body>
</html>
@include('layouts.footer')