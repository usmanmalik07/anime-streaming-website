<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>GuffyLuffy - Contact Us</title>
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

    .social-handles {
      margin-top: 20px;
    }

    .social-handles a {
      display: inline-block;
      margin-right: 15px;
      color: #fff;
      font-size: 1.5rem;
    }

    .contact-form {
      margin-top: 50px;
    }

    .form-group {
      margin-bottom: 20px;
    }

    .form-group label {
      display: block;
      font-size: 1.2rem;
      font-weight: bold;
    }

    .form-group input,
    .form-group textarea {
      width: 100%;
      padding: 10px;
      border: 1px solid #fff;
      border-radius: 5px;
      background-color: #111;
      color: #fff;
    }

    .form-group textarea {
      resize: vertical;
    }

    .form-group button {
      padding: 10px 20px;
      background-color: #fff;
      color: #000;
      border: none;
      border-radius: 5px;
      cursor: pointer;
      font-size: 1.2rem;
      font-weight: bold;
    }
  </style>
</head>
<body>
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

  <div class="header1" style="background-color: black">
    <h1>GuffyLuffy</h1>
    <p>Your Ultimate Source for Anime Entertainment</p>
  </div>

  <div class="container content">
    <!-- Your about us content here -->

    <div class="mission-section">
      <!-- Content of the mission section -->
    </div>

    <div class="row">
      <div class="col-md-6 team-member">
        <img src="{{asset('front-assets/assets/img/usman.jpeg')}}" alt="Team Member 1" class="img-fluid">
        <h4>Usman Malik</h4>
        <p>Founder</p>

        <div class="social-handles">
          <!-- Social handles for Hozefa Rauf -->
          <a href="https://www.gmail.com" target="_blank"><i class="bi bi-envelope"></i></a>
          <a href="https://www.facebook.com" target="_blank"><i class="bi bi-facebook"></i></a>
          <a href="https://www.twitter.com" target="_blank"><i class="bi bi-twitter"></i></a>
          <a href="https://www.instagram.com" target="_blank"><i class="bi bi-instagram"></i></a>
        </div>
      </div>

      <div class="col-md-6 team-member">
        <img src="{{asset('front-assets/assets/img/hozefa.jpeg')}}" alt="Team Member 2" class="img-fluid">
        <h4>Hozefa Rauf</h4>
        <p>Founder</p>

        <div class="social-handles">
          <!-- Social handles for Hozefa Rauf -->
          <a href="https://www.gmail.com" target="_blank"><i class="bi bi-envelope"></i></a>
          <a href="https://www.facebook.com" target="_blank"><i class="bi bi-facebook"></i></a>
          <a href="https://www.twitter.com" target="_blank"><i class="bi bi-twitter"></i></a>
          <a href="https://www.instagram.com" target="_blank"><i class="bi bi-instagram"></i></a>
        </div>
      </div>
    </div>

    <div class="contact-form">
      <h2>Contact Us</h2>
      <form>
        <div class="form-group">
          <label for="name">Your Name</label>
          <input type="text" id="name" name="name" required>
        </div>

        <div class="form-group">
          <label for="email">Your Email</label>
          <input type="email" id="email" name="email" required>
        </div>

        <div class="form-group">
          <label for="message">Your Message</label>
          <textarea id="message" name="message" rows="4" required></textarea>
        </div>

        <div class="form-group">
          <button type="submit">Submit</button>
        </div>
      </form>
    </div>
  </div>


  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>
