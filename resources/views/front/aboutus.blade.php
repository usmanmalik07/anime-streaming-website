<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>GuffyLuffy - About Us</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <link href="{{asset('front-assets/assets/img/favicon.png')}}" rel="icon">
  <link href="{{asset('front-assets/assets/img/apple-touch-icon.png')}}" rel="apple-touch-icon">
  <link href="{{asset('front-assets/assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{asset('front-assets/assets/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
  <link href="{{asset('front-assets/assets/vendor/glightbox/css/glightbox.min.css')}}" rel="stylesheet">
  <link href="{{asset('front-assets/assets/vendor/swiper/swiper-bundle.min.css')}}" rel="stylesheet">
  <link rel="stylesheet" href="{{asset('front-assets/assets/style/style.css')}}">


 <style>
    body {
      background-color: #000;
      color: #fff;
      font-family: 'Arial', sans-serif;
    }

    .header1 {
      background-color: #343a40;
      color: #fff;
      padding: 80px 0;
      text-align: center;
      font-size: 2.5rem;
      font-weight: bold;
    }

    .content {
      padding: 40px;
    }

    .team-member {
      margin-bottom: 30px;
      text-align: center;
    }

    .team-member img {
      max-width: 200px;
      height: 250px;
      border-radius: 50%;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
      margin-bottom: 20px;
    }

    .team-member h4 {
      font-size: 1.5rem;
      margin-bottom: 10px;
      font-weight: bold;
    }

    .team-member p {
      font-size: 1rem;
    }

    .mission-section {
      margin-top: 50px;
      background-color: #111;
      padding: 30px;
      border-radius: 10px;
    }

    .mission-section h3 {
      font-size: 2rem;
      font-weight: bold;
      margin-bottom: 20px;
    }

    .mission-section p {
      font-size: 1.1rem;
    }
  </style>




  </style>
</head>
<body>
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

          <li><a class="nav-link scrollto" href="#contact-us">Contact-us</a></li>
          <li><a class="nav-link scrollto " href="{{ route('front.aboutus') }}">About us</a></li>
          <li><a class="nav-link scrollto " href="{{ route('login') }}">Admin</a></li>
          <li><a class="nav-link scrollto " href="{{ route('signup') }}">User</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav>
    </div>
  </header>



  <div class="header1" style="background-color: black">
    <h1>GuffyLuffy</h1>
    <p>Your Ultimate Source for Anime Entertainment</p>
  </div>

  <div class="container content">
    <h2>About Us</h2>
    <p>Welcome to GuffyLuffy, where your anime journey begins! We are passionate about bringing you the best anime content from around the world. At GuffyLuffy, we are committed to creating a unique space where you can not only watch your favorite anime but also immerse yourself in a community that shares your love for Japanese animation.</p>

    <div class="row">
      <div class="col-md-6 team-member">
        <img src="{{asset('front-assets/assets/img/usman.jpeg')}}" alt="Team Member 1" class="img-fluid">
        <h4>Usman Malik</h4>
        <p>Founder</p>
        <p>I am a firm believer in the power of continuous learning and staying up-to-date with emerging technologies. I regularly engage in self-study, exploring the latest trends and advancements in computer science through online courses, research papers, and industry publications. This curiosity-driven approach empowers me to stay ahead of the curve and adapt to the ever-changing landscape of technology.</p>
      </div>

      <div class="col-md-6 team-member">
        <img src="{{asset('front-assets/assets/img/hozefa.jpeg')}}" alt="Team Member 2" class="img-fluid">
        <h4>Hozefa Rauf</h4>
        <p>Founder</p>
        <p>Hello, I'm Hozefa Rauf, a passionate Computer Science student with a deep love for anime. As an avid enthusiast, I merge my technical skills with my fascination for Japanese animation. With a commitment to both my studies and the vibrant world of anime, I find joy in creating immersive experiences. Welcome to my world, where precision meets passion.</p>
      </div>
    </div>
      <!-- ... Your HTML and CSS ... -->

<div class="mission-section">
  <h3>Our Mission</h3>
  <p>⚡ At GuffyLuffy, our mission is to establish a pioneering presence in the world of anime streaming, transcending geographical boundaries to create a global community of passionate anime enthusiasts. We are dedicated to providing a seamless and immersive streaming experience, curating a diverse and high-quality collection of anime content that caters to the eclectic tastes of our users.</p>

  <p>⚡ Our commitment extends beyond mere entertainment; we aim to be a cultural hub, fostering a deep appreciation for the artistry and storytelling inherent in anime. By offering a rich and varied selection of anime genres, from classic masterpieces to the latest releases, we strive to be the go-to platform for every anime lover, providing an extensive library that encourages exploration and discovery.</p>

  <p>⚡ GuffyLuffy is not just a platform; it's a dynamic community where fans connect, share insights, and celebrate their love for anime. We understand that each viewer is unique, and so is their anime journey. Our mission is to enhance this journey by continuously evolving our platform, incorporating user feedback, and staying at the forefront of technological advancements to deliver an unparalleled streaming experience.</p>

  <p>⚡ Accessibility is a key pillar of our mission. We aim to make the fascinating world of anime easily accessible to users worldwide, transcending language barriers through subtitles and dubbing options. By embracing inclusivity, we hope to unite anime enthusiasts from diverse cultures, fostering a global appreciation for the art form.</p>

  <p>⚡ As stewards of the anime community, we also recognize our responsibility to support the industry. GuffyLuffy is committed to fair and ethical partnerships with content creators and studios. We believe in contributing positively to the anime ecosystem, ensuring that creators are rightfully acknowledged and rewarded for their artistic contributions.</p>

  <p>⚡ In summary, GuffyLuffy's mission is a multifaceted commitment to providing a technologically advanced, culturally enriching, and globally accessible anime streaming platform. We invite you to join us on this exciting journey, where the love for anime knows no bounds.</p>
</div>

<!-- ... The rest of your HTML and JavaScript ... -->

    </div>

  </div>

  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>
