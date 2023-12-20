<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Bleeding Rhymes Creactives</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Bleeding Rhymes Creactives Website" name="keywords">
    <meta content="Bleeding Rhymes Creactives Website" name="description">

    <!-- Favicons -->
    <link href="{{ asset('assets/images-now/logo-01.jpg') }}" rel="icon">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Raleway:300,400,500,700,800"
        rel="stylesheet">

    <!-- Bootstrap CSS File -->
    <link href="{{ asset('assets/lib/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- assets/libraries CSS Files -->
    <link href="{{ asset('assets/lib/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/lib/animate/animate.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/lib/venobox/venobox.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">

    <!-- Main Stylesheet File -->
    <link href="{{ asset('assets/css/style.css ') }}" rel="stylesheet">
    <style>
        .carousel-indicators-bottom {
            position: relative;
            top: 15px;
            /* Adjust according to your needs */
            margin-left: -15px;
            /* Adjust according to your needs */
            left: 50%;
            transform: translateX(-50%);
        }
    </style>
</head>

<body>

    <!--==========================
          Header
        ============================-->
    <header id="header">
        <div class="container">

            <div id="logo" class="pull-left">
                <!-- Uncomment below if you prefer to use a text logo -->
                <!-- <h1><a href="#main">C<span>o</span>nf</a></h1>-->
                <a href="/" class="scrollto"><img src="assets/images-now/logo-01.jpg" alt=""
                        title=""> Bleeding Rhymes Creactives</a>
            </div>

            <nav id="nav-menu-container">
                <ul class="nav-menu">
                    <li class="menu-active"><a href="/">Home</a></li>
                    <li><a href="/about">About</a></li>
                    <li><a href="/services">Services</a></li>
                    <li><a href="/events">Events</a></li>
                    <li><a href="/sign-in">Sign In</a></li>
                    <li><a href="/sign-up">Sign Up</a></li>
                    <li><a href="/contact">Contact Us</a></li>
                    <li><a href="/FAQs">FAQs</a></li>
                    <li class="buy-tickets"><a href="/buy-tickets">Buy Tickets</a></li>
                    <li>
                        <a href="/cart">
                            <span class="d-inline-block me-2">
                                <i class="fa fa-shopping-cart fa-2x"></i>
                            </span>
                            <span class="badge bg-danger rounded-pill text-white me-2 fa-2x">1</span>
                        </a>
                    </li>


                </ul>
            </nav><!-- #nav-menu-container -->
        </div>
    </header><!-- #header -->


    <!--==========================
     Main
    ============================-->

    <main id="main">

        {{-- Render  All Views content  and slots --}}
        @yield('content')


    </main>


    <!--==========================
           End Main Section
          ============================-->


    <!--==========================
    Footer
  ============================-->
    <footer id="footer">
        <div class="footer-top">
            <div class="container">
                <div class="row">

                    <div class="col-lg-3 col-md-6 footer-info">
                        <img src="assets/images-now/logo-01.jpg" alt="Bleeding Rhymes Creactives">
                        <p>In alias aperiam. Placeat tempore facere. Officiis voluptate ipsam vel eveniet est dolor et
                            totam
                            porro. Perspiciatis ad omnis fugit molestiae recusandae possimus. Aut consectetur id quis.
                            In
                            inventore consequatur ad voluptate cupiditate debitis accusamus repellat cumque.</p>
                    </div>

                    <div class="col-lg-3 col-md-6 footer-links">
                        <h4>Useful Links</h4>
                        <ul>
                            <li><i class="fa fa-angle-right"></i> <a href="/">Home</a></li>
                            <li><i class="fa fa-angle-right"></i> <a href="/about">About us</a></li>
                            <li><i class="fa fa-angle-right"></i> <a href=".services">Services</a></li>
                            <li><i class="fa fa-angle-right"></i> <a href="/contact">Contact Us</a></li>
                            <li><i class="fa fa-angle-right"></i> <a href="/sign-in">Sign In</a></li>
                            <li><i class="fa fa-angle-right"></i> <a href="/sign-up">Sign Up</a></li>
                        </ul>
                    </div>

                    <div class="col-lg-3 col-md-6 footer-links">
                        <h4>Useful Links</h4>
                        <ul>
                            <li><i class="fa fa-angle-right"></i> <a href="/about">Client Reviews</a></li>
                            <li><i class="fa fa-angle-right"></i> <a href="/contact">Customer Support</a></li>
                            <li><i class="fa fa-angle-right"></i> <a href="/FAQs">Help & FAQs</a></li>
                            <li><i class="fa fa-angle-right"></i> <a href="/Terms">Terms of service</a></li>
                            <li><i class="fa fa-angle-right"></i> <a href="/privacy">Privacy Policy</a></li>
                            <li><i class="fa fa-angle-right"></i> <a href="/cookies">Cookies</a></li>
                            <li><i class="fa fa-angle-right"></i> <a href="/blogs">Our Blog & Articles</a></li>
                        </ul>
                    </div>

                    <div class="col-lg-3 col-md-6 footer-contact">
                        <h4>Contact Us</h4>
                        <p>
                            P.O. BOX 2486-30200, <br>
                            Kitale,<br>
                            Kenya<br>
                            <strong>Phone:</strong> +254 768587711<br>
                            <strong>Email:</strong> ogotimoses9@gmail.com<br>
                        </p>

                        <div class="social-links">
                            <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
                            <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
                            <a href="#" class="instagram"><i class="fa fa-instagram"></i></a>
                            <a href="#" class="google-plus"><i class="fa fa-google-plus"></i></a>
                            <a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a>
                        </div>

                    </div>

                </div>
            </div>
        </div>

        <div class="container">
            <div class="copyright">
                &copy; Copyright <strong>2023 <a href="">Bleeding Rhymes Creactives</a>,</strong>. All Rights
                Reserved
            </div>
            <div class="credits">
                Need a website like this? Talk to <a href="#"> Pledgee Ltd</a>
            </div>
        </div>
    </footer><!-- #footer -->

    <!--==========================
    End Footer Section
  ============================-->
    <a href="#" class="back-to-top"><i class="fa fa-angle-up"></i></a>

    <!-- JavaScript assets/libraries -->
    <script src="{{ asset('assets/lib/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/lib/jquery/jquery-migrate.min.js ') }}"></script>
    <script src="{{ asset('assets/lib/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/lib/easing/easing.min.js') }}"></script>
    <script src="{{ asset('assets/lib/superfish/hoverIntent.js ') }}"></script>
    <script src="{{ asset('assets/lib/superfish/superfish.min.js') }}"></script>
    <script src="{{ asset('assets/lib/wow/wow.min.js') }}"></script>
    <script src="{{ asset('assets/lib/venobox/venobox.min.js') }}"></script>
    <script src="{{ asset('assets/lib/owlcarousel/owl.carousel.min.js') }}"></script>

    <!-- Contact Form JavaScript File -->
    <script src="{{ asset('assets/contactform/contactform.js') }}"></script>

    <!--  Main Javascript File -->
    <script src="{{ asset('assets/js/main.js') }}"></script>
    <!-- JavaScript Code for Carousel to Play,Pause and slide across videos-->
    <script src="{{ asset('assets/js/carousel.js') }}"></script>
    <!-- JavaScript Code for Testimoniol Carousel-->
    <script src="{{ asset('assets/js/testimonial-carousel.js') }}"></script>
</body>

</html>
