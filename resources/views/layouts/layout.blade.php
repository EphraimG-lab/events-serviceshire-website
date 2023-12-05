<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>BLEEDING RHYMES PRODUCTION</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />

    <meta content="Bleeding Rhymes Productions Website" name="keywords">
    <meta content="Bleeding Rhymes Productions Website" name="description">
    <!-- Favicon -->
    <link href="{{ asset('assets/img/favicon.ico') }}" rel="icon" />

    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;300;400&display=swap" rel="stylesheet" />

    <!-- CSS Libraries -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet" />

    <link href="{{ asset('assetslib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/lib/lightbox/css/lightbox.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/carousel.css') }}" rel="stylesheet">

</head>

<body>
    <div class="wrapper">
        <!-- Header Start -->
        <div class="header home">
            <div class="container-fluid">
                <div class="header-top row align-items-center">
                    <div class="col-lg-3">
                        <div class="brand">
                            <a href="/">
                                <img style="border-radius: 100%" src="{{ asset('assets/img/logo.jpg') }} "
                                    alt="Logo" />
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-9">
                        <div class="topbar">
                            <div class="topbar-col">
                                <a href="tel:+012 345 67890"><i class="fa fa-phone-alt"></i>+254768587711</a>
                            </div>
                            <div class="topbar-col">
                                <a href="mailto:ogotimoses9@gmail.com"><i
                                        class="fa fa-envelope"></i>ogotimoses9@gmail.com</a>
                            </div>
                            <div class="topbar-col">
                                <div class="topbar-social">
                                    <a href=""><i class="fab fa-twitter"></i></a>
                                    <a href=""><i class="fab fa-facebook-f"></i></a>
                                    <a href=""><i class="fab fa-youtube"></i></a>
                                    <a href=""><i class="fab fa-instagram"></i></a>
                                    <a href=""><i class="fab fa-linkedin-in"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="navbar navbar-expand-lg bg-light navbar-light">
                            <a href="#" class="navbar-brand">MENU</a>
                            <button type="button" class="navbar-toggler" data-toggle="collapse"
                                data-target="#navbarCollapse">
                                <span class="navbar-toggler-icon"></span>
                            </button>

                            <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                                <div class="navbar-nav ml-auto">
                                    <a href="/" class="nav-item nav-link active">Home</a>
                                    <a href="/about" class="nav-item nav-link">About</a>
                                    <a href="/service" class="nav-item nav-link">Services</a>
                                    <a href="/events" class="nav-item nav-link">Events</a>
                                    <a href="/contact" class="nav-item nav-link">Contact</a>
                                    <a href="/sign-in" class="nav-item nav-link">Sign In</a>
                                    <a href="/sign-up" class="nav-item nav-link">Sign Up</a>
                                    <a href="/cart" class="nav-item nav-link">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-cart" viewBox="0 0 16 16">
                                            <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5M3.102 4l1.313 7h8.17l1.313-7H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4m7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4m-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2m7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2"/>
                                            <span class="badge badge-pill badge-danger"width="10" height="10">10</span>
                                        </svg>
                                        
                                    </a>
                                    

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{-- Render My View --}}
        @yield('content')
        <!-- Footer Start -->
        <div class="footer">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-lg-3">
                        <div class="footer-contact">
                            <h2>Get In Touch</h2>
                            <p><i class="fa fa-map-marker-alt"></i>P.O. BOX 2486-30200, Kitale, Kenya</p>
                            <p><i class="fa fa-phone-alt"></i>0768587711</p>
                            <p><i class="fa fa-envelope"></i>ogotimoses9@gmail.com</p>
                            <div class="footer-social">
                                <a href=""><i class="fab fa-twitter"></i></a>
                                <a href=""><i class="fab fa-facebook-f"></i></a>
                                <a href=""><i class="fab fa-youtube"></i></a>
                                <a href=""><i class="fab fa-instagram"></i></a>
                                <a href=""><i class="fab fa-linkedin-in"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <div class="footer-link">
                            <h2>Useful Link</h2>
                            <a href="/about">About </a>
                            <a href="/service">Services</a>
                            <a href="/contact">Contact</a>
                            <a href="/events">Events</a>
                            <a href="/sign-in">Sign In</a>
                            <a href="/sign-up">Sign Up</a>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <div class="footer-link">
                            <h2>Customer Side</h2>
                            <a href="/testimonials">Clients Review</a>
                            <a href="/customer-support">Customer Support</a>
                            <a href="/fAQS">FAQs</a>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <div class="footer-form">
                            <h2>Stay Updated</h2>
                            <p>
                                Subscribe to ours latest Newsletter
                            </p>
                            <input class="form-control" placeholder="Enter your Email Address..."><br><br>
                            <button class="btn">Subcribe</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container footer-menu">
                <div class="f-menu">
                    <a href="">Terms of use</a>
                    <a href="">Privacy policy</a>
                    <a href="">Cookies</a>
                    <a href="">Help & FQAs</a>
                    <a href="">Contact</a>
                </div>
            </div>
            <div class="container copyright">
                <div class="row">
                    <div class="col-md-6">
                        <p>&copy; 2023 <a href="">Bleeding Rhymes Productions</a>, All Right Reserved. </p>
                    </div>
                    <div class="col-md-6">
                        <p>Need a website like this? Talk to <a href="">Pledgee Corporates</a></p>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer End -->

        <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
    </div>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>

    <script src="{{ asset('assets/lib/easing/easing.min.js') }}"></script>
    <script src="{{ asset('assets/lib/owlcarousel/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('assets/lib/isotope/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('assets/lib/lightbox/js/lightbox.min.js') }}"></script>

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous">
    </script>
    <script src="{{ asset('assets/js/main.js') }}"></script>
    <script>
        let allVids = $("#myCarousel").find(".carousel-item");

        allVids.each(function(index, el) {
            if (index !== 0) {
                $(this).find("video")[0].pause();
            }
        });

        $("#myCarousel").on("slide.bs.carousel", function(ev) {
            let slides = $(this).find(".carousel-item");
            let pvid = slides[ev.from].querySelectorAll("video")[0];
            let vid = slides[ev.to].querySelectorAll("video")[0];
            let isPlaying = vid.currentTime > 0 && vid.readyState > 2;

            vid.play();

            if (isPlaying) {
                pvid.pause();
            }
        });
    </script>
</body>

</html>
