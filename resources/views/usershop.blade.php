<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shop</title>
    <!-- Include Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Vendor CSS Files -->
    <link href="{{asset('front-assets/assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('front-assets/assets/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
    <link href="{{asset('front-assets/assets/vendor/glightbox/css/glightbox.min.css')}}" rel="stylesheet">
    <link href="{{asset('front-assets/assets/vendor/swiper/swiper-bundle.min.css')}}" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link rel="stylesheet" href="{{asset('front-assets/assets/style/style.css')}}">

</head>

<body>
    <script src="{{asset('front-assets/script/script.js')}}"></script>
    <header id="header" class="fixed-top">
        <div class="container d-flex align-items-center justify-content-between">
            <a href="{{ route('front.home') }}" class="logo"><img src="{{asset('front-assets/assets/img/logo.png')}}" alt=""
                    class="img-fluid"></a>
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
    <div class="container" style="padding-top: 59px;">
        <h1 class="mt-4 text-white">Shop</h1>

            <!-- Display Items -->
            <div class="container" style="padding-top: 109px;">
                <h1 class="mt-4 text-white">Items</h1>
                <div class="row row-cols-2" style="padding-top: 19px;">
                    @foreach($items as $item)
                        <div class="col mb-4">
                            <div class="card bg-primary text-white">
                                @if($item->image_path)
                                    <img src="{{ asset($item->image_path) }}" alt="Item Image"
                                        class="card-img-top image-style">
                                @endif
                                <div class="card-body">
                                    <h5 class="card-title">{{ $item->name }}</h5>
                                    <p class="card-text">
                                        Price: ${{ $item->price }} <br>
                                        Quantity: {{ $item->quantity }}
                                    </p>
                                </div>
                                <div class="card-footer d-flex justify-content-between align-items-center">
                                    <form action="#" method="post">
                                        @csrf
                                        <div class="input-group">
                                            <input type="number" name="quantity" class="form-control" placeholder="Quantity" min="1"
                                                value="1">
                                            <button type="submit" class="btn btn-success">Buy</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>




        <style>
            .image-style {
                border: 10px solid #ddd;
                /* Add a border for better visibility */
                border-radius: 5px;
                /* Optional: Add a border radius for a rounded appearance */
                margin-top: 10px;
                /* Add spacing above the image */
                width: 100%;
                /* Make the image take up the full width of its container */
                height: auto;
                /* Maintain the aspect ratio of the image */
            }
        </style>

        <style>
            @media (max-width: 576px) {
                /* Small devices (landscape phones) */
                .row-cols-2>div {
                    flex: 0 0 100%;
                    /* Make each column take 100% width */
                }
            }
        </style>

        <!-- Include Bootstrap JS and Popper.js -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
