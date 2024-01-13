<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>GuffyLuffy</title>
  <meta content="" name="description">
  <meta content="" name="keywords">
  <!-- Favicons -->
  <link href="{{asset('front-assets/assets/img/favicon.png')}}" rel="icon">
  <link href="{{asset('front-assets/assets/img/apple-touch-icon.png')}}" rel="apple-touch-icon">

  <!-- Vendor CSS Files -->
  <link href="{{asset('front-assets/assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{asset('front-assets/assets/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
  <link href="{{asset('front-assets/assets/vendor/glightbox/css/glightbox.min.css')}}" rel="stylesheet">
  <link href="{{asset('front-assets/assets/vendor/swiper/swiper-bundle.min.css')}}" rel="stylesheet">

  <!-- Template Main CSS File -->
 <link rel="stylesheet" href="{{asset('front-assets/assets/style/style.css')}}">
 <style>
  .col {
  background-size: cover;
}

.col1 {
  background-image: url('{{ asset('front-assets/assets/img/op.jpg') }}') ;
  transition: background-image 0.5s ease-in-out;
  background-position: center;

}

.col1:hover {
  background-image: url('{{ asset('front-assets/assets/img/op.jpg') }}');
}

.col2 {
  background-image: url('{{ asset('front-assets/assets/img/tokyo.jpg') }}');
  background-position: center;
  transition: background-image 0.5s ease-in-out;

}

.col2:hover {
  background-image: url('{{ asset('front-assets/assets/img/tokyo.jpg') }}');

}

.col3 {
  background-image: url('{{ asset('front-assets/assets/img/aot.jpg') }}');
  transition: background-image 0.5s ease-in-out;
  background-position: center;
}

.col3:hover {
  background-image: url('{{ asset('front-assets/assets/img/aot.jpg') }}');
}
.col4 {
  background-image: url('{{ asset('front-assets/assets/img/haikyuu.jpg') }}');
  transition: background-image 0.5s ease-in-out;
  background-position: center;
}

.col4:hover {
  background-image: url('{{ asset('front-assets/assets/img/haikyuu.jpg') }}');

}
.col5 {
  background-image:  url('{{ asset('front-assets/assets/img/Spirited Away.jpg') }}');
  background-position: center;
  transition: background-image 0.5s ease-in-out;
}

.col5:hover {
  background-image: url('{{ asset('front-assets/assets/img/Spirited Away.jpg') }}');
}
.col6 {
  background-image: url('{{ asset('front-assets/assets/img/hxh.jpg') }}');
  transition: background-image 0.5s ease-in-out;
  background-position: center;
}

.col6:hover {
  background-image: url('{{ asset('front-assets/assets/img/hxh.jpg') }}');
}
.col7 {
  background-image: url('{{ asset('front-assets/assets/img/naruto.jpg') }}');
  transition: background-image 0.5s ease-in-out;
  background-position: center;
}

.col7:hover {
  background-image: url('{{ asset('front-assets/assets/img/naruto.jpg') }}');;
}
 </style>


</head>


<body>
<!-- <button onclick="playAudio()">Play Audio</button>
<audio id="myAudio">
    <source src="{{ asset('front-assets/assets/img/audio.mp3') }}" type="audio/mp3">
    Your browser does not support the audio element.
</audio>

<script>
    function playAudio() {
        var audio = document.getElementById("myAudio");
        audio.volume = 100;
        audio.play();
    }
</script> -->


  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center justify-content-between">
        <a href="{{ route('front.home') }}" class="logo"><img src="{{asset('front-assets/assets/img/logo.png')}}" alt="" class="img-fluid"></a>
          <h1 class="logo"><a href="{{ route('front.home') }}">GuffyLuffy</a></h1>

          <nav id="navbar" class="navbar">

        <ul>
          <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
          <li><a class="nav-link scrollto" href="{{ route('front.usershop') }}">⚡Shop⚡</a></li>
          <li class="dropdown"><a href="#"><span>Watch</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="#trending">Categories</a></li>
              <li><a href="#trending">Trending</a></li>
                  <li><a href="#most-viewed">Most Viewed</a></li>
                  <li><a href="#watch-more">Watch More</a></li>

            </ul>
          </li>

          <li><a class="nav-link scrollto" href="{{ route('front.contact') }}">Contact-us</a></li>
          <li><a class="nav-link scrollto " href="{{ route('front.aboutus') }}">About us</a></li>
          <li><a class="nav-link scrollto " href="{{ route('login') }}">Admin</a></li>
          <li><a class="nav-link scrollto " href="{{ route('signup') }}">User</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav>
    </div>
  </header>


    <div class="container1" id="hero">
      <div class="bg1">
        <img src="" alt="">
        <h1>GuffyLuffy <br> Discover, Stream, Enjoy</h1>
      </div>
      <div class="bg-reveal-1">
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>

      </div>
    </div>
      <!-- TRENDING -->
    <h1 class="heading" id="trending">TRENDING</h1>
<div id="grid">
          <div id="imageContainer1" class="col col1"></div>
          <div id="imageContainer2" class="col col2"></div>
          <div id="imageContainer3" class="col col3"></div>
          <div id="imageContainer4" class="col col4"></div>
          <div id="imageContainer5" class="col col5"></div>
          <div id="imageContainer6" class="col col6"></div>

</div>


<h1 class="heading" id="most-viewed">MOST VIEWED</h1>
<div id="grid2">
          <div id="imageContainer7" class="col col3"></div>
          <div id="imageContainer8" class="col col7"></div>
          <div id="imageContainer9" class="col col1"></div>
          <div id="imageContainer10" class="col col5"></div>
          <div id="imageContainer11" class="col col4"></div>
          <div id="imageContainer12" class="col col2"></div>

</div>

<div class="container-fluid pb-video-container">
  <div class="col-md-12 col-md-offset-1">
    <h1 class="heading" id="watch-more">WATCH MORE</h1>
      <div class="row pb-row">
          <div id="0" class="col-md-2 pb-video">
              <a href="{{asset('front-assets/pages/watchindex.html?webseries=1')}}">
                <img class="pb-video-thumbnail" src="{{asset('front-assets/assets/img/aotcover.jpg')}}" alt="Thumbnail 1">
              </a>
              <a class="pb-text" href="">
                <label class="pb-text">Attack on Titan</label>
              </a>

          </div>
          <div id="1" class="col-md-2 pb-video">
              <a href="{{asset('front-assets/pages/watchindex.html?webseries=0')}}">
                <img class="pb-video-thumbnail" src="{{asset('front-assets/assets/img/opcover.jpg')}}" alt="Thumbnail 2">
              </a>
              <a class="pb-text" href="pages/aot.html">
                <label class="pb-text">One Piece</label>
              </a>

          </div>
          <div class="col-md-2 pb-video">
              <a href="{{asset('front-assets/pages/watchindex.html?webseries=0')}}">
                <img class="pb-video-thumbnail" src="{{asset('front-assets/assets/img/hxhcover.jpg')}}" alt="Thumbnail 3">
              </a>
              <a class="pb-text" href="pages/aot.html">
                <label class="pb-text">Hunter X Hunter</label>
              </a>

          </div>
          <div class="col-md-2 pb-video">
              <a href="{{asset('front-assets/pages/watchindex.html?webseries=5')}}">
                <img class="pb-video-thumbnail" src="{{asset('front-assets/assets/img/haikyuucover.jpg')}}" alt="Thumbnail 4">
              </a>
              <a class="pb-text" href="{{asset('front-assets/pages/watchindex.html?webseries=5')}}">
                <label class="pb-text">Haikyuu</label>
              </a>

          </div>
          <div class="col-md-2 pb-video">
            <a href="{{asset('front-assets/pages/watchindex.html?webseries=3')}}">
              <img class="pb-video-thumbnail" src="{{asset('front-assets/assets/img/SpiritedAwaycover.jpg')}}" alt="Thumbnail 8">
            </a>
            <a class="pb-text" href="{{asset('front-assets/pages/watchindex.html?webseries=3')}}">
              <label class="pb-text">Spirited Away</label>
            </a>

        </div>
        <div class="col-md-2 pb-video">
          <a href="{{asset('front-assets/pages/watchindex.html?webseries=3')}}">
            <img class="pb-video-thumbnail" src="{{asset('front-assets/assets/img/jjkcover.jpg')}}" alt="Thumbnail 8">
          </a>
          <a class="pb-text" href="{{asset('front-assets/pages/watchindex.html?webseries=3')}}">
            <label class="pb-text">Jujutsu Kaisen</label>
          </a>
          </div>


      </div>
      <div class="row pb-row">
        <div class="col-md-2 pb-video">
            <a href="{{asset('front-assets/pages/watchindex.html?webseries=5')}}">
              <img class="pb-video-thumbnail" src="{{asset('front-assets/assets/img/bleachcover.jpg')}}" alt="Thumbnail 1">
            </a>
            <a class="pb-text" href="{{asset('front-assets/pages/watchindex.html?webseries=5')}}">
              <label class="pb-text">Bleach</label>
            </a>

        </div>
        <div class="col-md-2 pb-video">
            <a href="{{asset('front-assets/pages/watchindex.html?webseries=1')}}">
              <img class="pb-video-thumbnail" src="{{asset('front-assets/assets/img/tokyoghoulcover.jpg')}}" alt="Thumbnail 2">
            </a>
            <a class="pb-text" href="{{asset('front-assets/pages/watchindex.html?webseries=1')}}">
              <label class="pb-text">Tokyo Ghoul</label>
            </a>

        </div>
        <div class="col-md-2 pb-video">
            <a href="{{asset('front-assets/pages/watchindex.html?webseries=2')}}">
              <img class="pb-video-thumbnail" src="{{asset('front-assets/assets/img/narutocover.jpg')}}" alt="Thumbnail 3">
            </a>
            <a class="pb-text" href="{{asset('front-assets/pages/watchindex.html?webseries=2')}}">
              <label class="pb-text">Naruto</label>
            </a>

        </div>
        <div class="col-md-2 pb-video">
            <a href="{{asset('front-assets/pages/watchindex.html?webseries=4')}}">
              <img class="pb-video-thumbnail" src="{{asset('front-assets/assets/img/bluelockcover.jpg')}}" alt="Thumbnail 4">
            </a>
            <a class="pb-text" href="{{asset('front-assets/pages/watchindex.html?webseries=4')}}">
              <label class="pb-text">Blue Lock</label>
            </a>

        </div>
        <div class="col-md-2 pb-video">
          <a href="{{asset('front-assets/pages/watchindex.html?webseries=3')}}">
            <img class="pb-video-thumbnail" src="{{asset('front-assets/assets/img/AoAshicover.jpg')}}" alt="Thumbnail 8">
          </a>
          <a class="pb-text" href="{{asset('front-assets/pages/watchindex.html?webseries=3')}}">
            <label class="pb-text">Ao Ashi</label>
          </a>

      </div>
      <div class="col-md-2 pb-video">
        <a href="{{asset('front-assets/pages/watchindex.html?webseries=4')}}">
          <img class="pb-video-thumbnail" src="{{asset('front-assets/assets/img/vinlandsagacover.jpg')}}" alt="Thumbnail 8">
        </a>
        <a class="pb-text" href="{{asset('front-assets/pages/watchindex.html?webseries=4')}}">
          <label class="pb-text">Vinland Saga</label>
        </a>
        </div>


    </div>
    <div class="row pb-row">
        <div class="col-md-2 pb-video">
            <a href="{{asset('front-assets/pages/watchindex.html?webseries=0')}}">
              <img class="pb-video-thumbnail" src="{{asset('front-assets/assets/img/mhacover.jpg')}}" alt="Thumbnail 1">
            </a>
            <a class="pb-text" href="{{asset('front-assets/pages/watchindex.html?webseries=0')}}">
              <label class="pb-text">My Hero Academia</label>
            </a>

        </div>
        <div class="col-md-2 pb-video">
            <a href="{{asset('front-assets/pages/watchindex.html?webseries=1')}}">
              <img class="pb-video-thumbnail" src="{{asset('front-assets/assets/img/monstercover.jpg')}}" alt="Thumbnail 2">
            </a>
            <a class="pb-text" href="{{asset('front-assets/pages/watchindex.html?webseries=1')}}">
              <label class="pb-text">Monster</label>
            </a>

        </div>
        <div class="col-md-2 pb-video">
            <a href="{{asset('front-assets/pages/watchindex.html?webseries=2')}}">
              <img class="pb-video-thumbnail" src="{{asset('front-assets/assets/img/yourlieinaprilcover.jpg')}}" alt="Thumbnail 3">
            </a>
            <a class="pb-text" href="{{asset('front-assets/pages/watchindex.html?webseries=2')}}">
              <label class="pb-text">Your Lie in April</label>
            </a>

        </div>
        <div class="col-md-2 pb-video">
            <a href="https://www.example.com/link44">
              <img class="pb-video-thumbnail" src="{{asset('front-assets/assets/img/asilentvoice.jpg')}}" alt="Thumbnail 4">
            </a>
            <a class="pb-text" href="pages/aot.html">
              <label class="pb-text">A silent voice</label>
            </a>

        </div>
        <div class="col-md-2 pb-video">
          <a href="{{asset('front-assets/pages/watchindex.html?webseries=3')}}">
            <img class="pb-video-thumbnail" src="{{asset('front-assets/assets/img/hellsparadisecover.jpg')}}" alt="Thumbnail 8">
          </a>
          <a class="pb-text" href="{{asset('front-assets/pages/watchindex.html?webseries=3')}}">
            <label class="pb-text">Hells Paradise</label>
          </a>

      </div>
      <div class="col-md-2 pb-video">
        <a href="{{asset('front-assets/pages/watchindex.html?webseries=4')}}">
          <img class="pb-video-thumbnail" src="{{asset('front-assets/assets/img/cyberpunkcover.jpg')}}" alt="Thumbnail 8">
        </a>
        <a class="pb-text" href="{{asset('front-assets/pages/watchindex.html?webseries=4')}}">
          <label class="pb-text">CyberPunk Edgerunners</label>
        </a>
        </div>


    </div>
  </div>
</div>
  </div>
</div>


<div class="container1" id="hero">
  <div class="bg2">
    <img src="" alt="">
  </div>
  <div class="bg-reveal-2">
    <div></div>
    <div></div>
    <div></div>
    <div></div>
    <div></div>
    <div></div>
    <div></div>

  </div>
</div>


<!-- CONTACT US -->
<!--
      </div>
  </div>
</div>
<div id="contact-us"class="container-1">
  <div class="form-wrapper-1">
    <h2 class="form-heading-1">Let's Talk</h2>
    <form class="contact-form-1">
      <input
        type="text"
        autocomplete="off"
        placeholder="Name"
        class="contact-form-input-1"
      />
      <input
        type="email"
        autocomplete="off"
        placeholder="Email"
        class="contact-form-input-1"
      />
      <input
        type="text"
        autocomplete="off"
        placeholder="Subject"
        class="contact-form-input-1"
      />
      <textarea
        class="contact-form-inpu-1 contact-form-textarea-1"
        placeholder="Message"
      ></textarea>
      <input type="submit" class="form-submit-btn-1" value="Send Request" />
    </form>
  </div>
</div> -->




 <!-- FOOTER -->
      <script src="{{asset('front-assets/script/script.js')}}"></script>
      <!-- <script type="module" src="./video-list.js"></script>
        <script type="module" src="./script.js"></script>  -->
        <script src="{{asset('front-assets/script/videoscript.js')}}"></script>
        <script src="{{asset('front-assets/script/video-list.js')}}"></script>

        <script>
        document.getElementById('imageContainer1').addEventListener('click', function() {
        // Change the URL to the desired website
        window.location.href = "{{asset('front-assets/pages/watchindex.html?webseries=0')}}";
        });
        document.getElementById('imageContainer2').addEventListener('click', function() {
        // Change the URL to the desired website
        window.location.href = "{{asset('front-assets/pages/watchindex.html?webseries=1')}}";
        });
        document.getElementById('imageContainer3').addEventListener('click', function() {
        // Change the URL to the desired website
        window.location.href = "{{asset('front-assets/pages/watchindex.html?webseries=1')}}";
        });
        document.getElementById('imageContainer4').addEventListener('click', function() {
        // Change the URL to the desired website
        window.location.href = "{{asset('front-assets/pages/watchindex.html?webseries=5')}}";
        });
        document.getElementById('imageContainer5').addEventListener('click', function() {
        // Change the URL to the desired website
        window.location.href = "{{asset('front-assets/pages/watchindex.html?webseries=4')}}";
        });
        document.getElementById('imageContainer6').addEventListener('click', function() {
        // Change the URL to the desired website
        window.location.href = "{{asset('front-assets/pages/watchindex.html?webseries=5')}}";
        });
        document.getElementById('imageContainer7').addEventListener('click', function() {
        // Change the URL to the desired website
        window.location.href = "{{asset('front-assets/pages/watchindex.html?webseries=1')}}";
        });
        document.getElementById('imageContainer8').addEventListener('click', function() {
        // Change the URL to the desired website
        window.location.href = "{{asset('front-assets/pages/watchindex.html?webseries=1')}}";
        });
        document.getElementById('imageContainer9').addEventListener('click', function() {
        // Change the URL to the desired website
        window.location.href = "{{asset('front-assets/pages/watchindex.html?webseries=0')}}";
        });
        document.getElementById('imageContainer10').addEventListener('click', function() {
        // Change the URL to the desired website
        window.location.href = "{{asset('front-assets/pages/watchindex.html?webseries=3')}}";
        });
        document.getElementById('imageContainer11').addEventListener('click', function() {
        // Change the URL to the desired website
        window.location.href = "{{asset('front-assets/pages/watchindex.html?webseries=5')}}";
        });
        document.getElementById('imageContainer12').addEventListener('click', function() {
        // Change the URL to the desired website
        window.location.href = "{{asset('front-assets/pages/watchindex.html?webseries=2')}}";
        });
        </script>





</body>

</html>
