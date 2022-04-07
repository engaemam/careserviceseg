
<!-- Start Contact Us Page -->
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
<div class="contact_us">
  <div id="mapid"></div>
  <!--Start Contact Details-->
  <section class="contact_details">
    <div class="container">
      <div class="row">
        <div class="col-sm-12 col-md-6">
          <div class="contact_adreess">
            <div class="head">
              <h2>cairo</h2>
              <aside class="head_content"> 
                <p>  Misr Travel Tower, Abbasia Square, Cairo, Egypt</p>
                <p class="phone"><i class="fas fa-phone-volume"></i><span>   16735  </span></p>
              </aside>
            </div>
            <ul class="list_address"> 
              <li>
                <h3 class="cuntry">Cairo</h3><span class="address"> Lorem Ipsum is simply dummy text of the printing</span>
              </li>
              <li>
                <h3 class="cuntry">Port Said</h3><span class="address">Lorem Ipsum is simply dummy text of the printing</span>
              </li>
              <li>
                <h3 class="cuntry">Marsa Matruh</h3><span class="address"> Lorem Ipsum is simply dummy text of the printing</span>
              </li>
              <li>
                <h3 class="cuntry">Siwa Oasis</h3><span class="address"> Lorem Ipsum is simply dummy text of the printing</span>
              </li>
              <li>
                <h3 class="cuntry">Al-Minya</h3><span class="address"> Lorem Ipsum is simply dummy text of the printing</span>
              </li>
              <li>
                <h3 class="cuntry">Asyut</h3><span class="address"> Lorem Ipsum is simply dummy text of the printing</span>
              </li>
              <li>
                <h3 class="cuntry">Luxor</h3><span class="address"> Lorem Ipsum is simply dummy text of the printing</span>
              </li>
              <li>
                <h3 class="cuntry">El Daklha Oasis</h3><span class="address"> Lorem Ipsum is simply dummy text of the printing</span>
              </li>
            </ul>
          </div>
        </div>
        <div class="col-sm-12 col-md-6">
          <div class="contact_form">
            <h2 class="title">Contact Us</h2>
            <form  action="{{url('/contact/mail')}}" method="post" class="form_body">
            {{csrf_field()}}
            @if(session()->has('message'))
            <div class="alert alert-success">{{session()->get('message')}}</div>
            @endif
           

              <aside class="input_content">
              <input type="text" class="form-control" id="name" name="name" placeholder="name" required="true">
              </aside>
              <aside class="input_content">
              <input type="email" class="form-control" id="email"   placeholder="enter your email" name="email"  required="true">
              </aside>
              <aside class="input_content col-sm-12 ">
              <textarea class="form-control" rows="5" name="message" id="comment" placeholder="Write your message"  required="true"></textarea>
              </aside>
              <aside class="input_content col-sm-12 ">
                <button class="button" type="submit">SEND</button>
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
      <p class="text">Join our team </p>
      <button class="button" type="button" data-toggle="modal" data-target="#myModal">APPLY NOW</button>
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
            <h2 class="title">Contact Us</h2>
          </aside>
          <form  action="{{route('send.resume')}}" method="POST" class="form_body" enctype="multipart/form-data">
          {{csrf_field()}}
          
           
            <aside class="input_content">
              <input type="text" id="name" name="name" placeholder="name"/>
            </aside>
            <aside class="input_content">
              <input type="number" id="mobile" name="mobile" placeholder="mobile"/>
            </aside>
            <aside class="input_content">
              <input type="text" id="email" name="email" placeholder="email"/>
            </aside>
            <aside class="input_content">
              <textarea type="text" id="message" name="message" placeholder="message"></textarea>
            </aside>
            <aside class="input_content">
              <label for="">Your C.V</label>
              <input type="file" required name="resume" id="resume" placeholder="resume" />
            </aside>
            <aside class="input_content">
              <button class="button" type="submit">Send</button>
            </aside>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- End Contact Us Page -->
<script src="js/main.js"> </script>
</body>
</html>
@include('layouts.footer')