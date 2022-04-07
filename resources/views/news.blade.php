
<!-- Start News-->
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
<section class="news_home ">
  <div class="container">
    <h2 class="home_page-title down_dash">news</h2>
    <div class="news_page news_content">
      <div class="row">
        <div class="col-sm-12 col-lg-5">
          <div class="news_block-big">
          @foreach($news as $new)
            <aside class="news_image"><img src="img/news/{{$new->img}}" alt=""/></aside>
            <br>
            <!-- Start News Details-->
            @endforeach
            <div class="news_details">
            @foreach($news as $new)
            <h3 class="title">{{$new->title}}</h3>
            @endforeach
            @foreach($news as $new)
              <p class="generar_paragraph">
              {{$new->body}}
              </p>
              @endforeach
              <a class="button" href="{{url('/readmore/id=')}}{{$new->id}}">Read more</a>
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
                <div class="col-sm-12 col-md-4">
                  <aside class="news_image"><img src="img/news/{{$allnew->img}}" alt=""/></aside>
                <br>
                <br>
                </div>
              
                <!-- End News image-->
                <!-- Start News Details-->
                <div class="col-sm-12 col-md-6">
                  <div class="news_details">
                  <h3 name="id" id="id" hidden>{{$new->id}}</h3>
                    <h3 class="title">{{$allnew->title}}</h3>
                    <p class="generar_paragraph">
                    {{$allnew->body}}
                    </p>
                    <a class="button_link" href="{{url('/readmore/id=')}}{{$allnew->id}}">Read more</a>
                  </div>
                </div>
                <!-- End News Details-->
                
                @endforeach
              </div>
              <br>
              {{$allnews->links()}}
            </div>

          
          </div>
        </div>
      
      </div>
    </div>
  </div>
</section>
<!-- End News-->
<script src="js/main.js"> </script>
</body>
</html>
@include('layouts.footer')