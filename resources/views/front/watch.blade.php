<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{asset('front-assets/assets/style/watchstyle.css')}}">

  <link href="{{asset('front-assets/assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{asset('front-assets/assets/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
  <link href="{{asset('front-assets/assets/vendor/glightbox/css/glightbox.min.css')}}" rel="stylesheet">
  <link href="{{asset('front-assets/assets/vendor/swiper/swiper-bundle.min.css')}}" rel="stylesheet">

  <!-- Template Main CSS File -->
 <link rel="stylesheet" href="{{asset('front-assets/assets/style/style.css')}}">
    <title>GuffyLuffy-Watch</title>
</head>
<body>
<script src="{{asset('front-assets/script/script.js')}}"></script>
<header id="header" class="fixed-top">
    <div class="container d-flex align-items-center justify-content-between">
        <a href="{{ route('front.home') }}" class="logo"><img src="{{asset('front-assets/assets/img/logo.png')}}" alt="" class="img-fluid"></a>
          <h1 class="logo"><a href="{{ route('front.home') }}">GuffyLuffy</a></h1>

          <nav id="navbar" class="navbar">

        <ul>
          <li><a class="nav-link scrollto active" href="{{ route('front.home') }}">Home</a></li>
          <li><a class="nav-link scrollto" href="{{ route('front.usershop') }}">⚡Shop⚡</a></li>
          <li class="dropdown"><a href="#"><span>Watch</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="{{ route('front.home') }}#trending">Categories</a></li>
              <li><a href="{{ route('front.home') }}#trending">Trending</a></li>
                  <li><a href="{{ route('front.home') }}#most-viewed">Most Viewed</a></li>
                  <li><a href="{{ route('front.home') }}#watch-more">Watch More</a></li>

            </ul>
          </li>

          <li><a class="nav-link scrollto" href="{{ route('front.home') }}#contact-us">Contact-us</a></li>
          <li><a class="nav-link scrollto " href="{{ route('front.aboutus') }}">About us</a></li>
          <li><a class="nav-link scrollto " href="{{ route('login') }}">Admin</a></li>
          <li><a class="nav-link scrollto " href="{{ route('signup') }}">User</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav>
    </div>
  </header>

    <section>
        <h2 class="title"></h2>
        <div class="container">
            <div id="video_player">
                <video controls id="main-Video" src=""></video>
            </div>
            <div class="playlistBx">
                <div class="header">
                    <div class="row">
                    </div>
                </div>
                <ul class="playlist" id="playlist">
                </ul>
            </div>
        </div>
    </section>
    <script src="{{asset('front-assets/script/videoscript.js')}}"></script>
    <script src="{{asset('front-assets/script/video-list.js')}}"></script>
</body>
</html>
