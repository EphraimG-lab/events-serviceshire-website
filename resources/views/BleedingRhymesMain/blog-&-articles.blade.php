@extends('layouts.app')
@section('content')
    <!--==========================
                  About Introduction Section
                ============================-->
    <section id="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center mt-5">
                    <h2>About Us</h2>
                    <p>
                        Sed nam ut dolor qui repellendus iusto odit. Possimus inventore
                        eveniet accusamus error amet eius aut accusantium et. Non odit
                        consequatur repudiandae sequi ea odio molestiae. Enim possimus
                        sunt inventore in est ut optio sequi unde.
                    </p>
                </div>
                <div class="col-lg-8 text-center">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="/">Home</a></li>
                            <li class="breadcrumb-item"><a href="/about">About Us</a></li>
                            <li class="breadcrumb-item">
                                <a href="#vision">Our Vision</a>
                            </li>
                            <li class="breadcrumb-item">
                                <a href="#mission">Our Mission</a>
                            </li>
                            <li class="breadcrumb-item">
                                <a href="#testimonial">Testimonies</a>
                            </li>
                            <li class="breadcrumb-item active">
                                <a href="#gallery">Gallery</a>
                            </li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </section>

    <!--==========================
                 End  About Introduction Section
                ============================-->


    <!--==========================
                  About Bleeding ryhmes Section
                ============================-->
    <section id="#" class="wow fadeInUp mt-5">
        <div class="container">
            <div class="section-header">
                <h2>Bleeding Rhymes Creatives</h2>
                <p>Why Choose us ?</p>
            </div>
            <div class="row">
                <div class="col-lg-5 col-md-6">
                    <div class="about-img">
                        <img style="height: 500px; width: 450px" src="{{ asset('assets/images-now/head.jpg') }}"
                            alt="Image" />
                    </div>
                </div>
                <div class="col-lg-7 col-md-6">
                    <div class="about-text">
                        <p>
                            Welcome to Bleeding Rhymes Creatives, a leading event
                            organizing and marketing agency based in Nairobi, Kenya, With
                            a passion for spoken word poetry performance, we specialize in
                            creating unforgettable experiences that captivate audiences
                            and leave a Lasting impression. Our team of talented
                            professionals also offers exceptional services as corporate
                            MCs and voice over artists, At Bleeding Rhymes Production, we
                            are committed to delivering excellence in every project we
                            undertake, ensuring seamless, execution and maximum impact.
                        </p>
                        <p>
                            Bleeding Rhymes Production is a dynamic event organizing &
                            Entertainment company based in Nairobi, Kenya. We have
                            expertise in spoken word poetry performances, corporate MC
                            services, marketing, and voice overs, we offer professionalism
                            to every project. Our team is dedicated to delivering
                            exceptional experiences and ensure a success. Whether you need
                            assistance in organizing a conference, planning a poetry
                            event, or creating impactful marketing campaigns, we have the
                            knowledge and passion to make it happen, Trust Bleeding Rhymes
                            Production for your next event or marketing
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!--==========================
                  End About Bleeding ryhmes Section
                ============================-->


    <!--==========================
                  Testimonial Section
                ============================-->
    <section id="speakers" class="section-with-bg wow fadeInUp">
        <div class="container">
            <div class="section-header">
                <h2>Testimonials</h2>
                <p>What our Customers say's about us</p>
            </div>
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2></h2>
                </div>
                <div class="col-lg-8 mx-auto">
                    <div class="carousel slide" id="testimonials-carousel" data-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="hotel">
                                            <div class="hotel-img">
                                                <img src="{{ asset('assets/images-now/about.jpg') }}" alt="Review 1"
                                                    class="img-fluid">
                                            </div>
                                            <h3 class="mt-3"><a href="#">Customer Y</a></h3>
                                            <div class="stars">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                            </div>
                                            <p> "The conference was truly inspiring! I learned so much about marketing
                                                and networking with like-minded professionals."
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
                                    <div class=" col-md-6">
                                        <div class="hotel">
                                            <div class="hotel-img">
                                                <img src="{{ asset('assets/images-now/about.jpg') }}" alt="Review 2"
                                                    class="img-fluid">
                                            </div>
                                            <h3 class="mt-3"><a href="#">Customer N</a></h3>
                                            <div class="stars">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                            </div>
                                            <p> "The conference was truly inspiring! I learned so much about marketing and
                                                networking with like-minded professionals."
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
                            <div class="carousel-item">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="hotel">
                                            <div class="hotel-img">
                                                <img src="{{ asset('assets/img/gallery/1.jpg') }}" alt="Review 3"
                                                    class="img-fluid">
                                            </div>
                                            <h3 class="mt-3"><a href="#">Customer M</a></h3>
                                            <div class="stars">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                            </div>
                                            <p> "The conference was truly inspiring! I learned so much about marketing and
                                                networking with like-minded professionals."
                                            </p>
                                            <div class="social-links">
                                                <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
                                                <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
                                                <a href="#" class="instagram"><i class="fa fa-instagram"></i></a>
                                                <a href="#" class="google-plus"><i
                                                        class="fa fa-google-plus"></i></a>
                                                <a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="hotel">
                                            <div class="hotel-img">
                                                <img src="{{ asset('assets/img/gallery/2.jpg ') }}" alt="Review 4"
                                                    class="img-fluid">
                                            </div>
                                            <h3 class="mt-3"><a href="#">Customer J</a></h3>
                                            <div class="stars">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                            </div>
                                            <p> "The conference was truly inspiring! I learned so much about marketing and
                                                networking
                                                with like-minded professionals."
                                            </p>
                                            <div class="social-links">
                                                <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
                                                <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
                                                <a href="#" class="instagram"><i class="fa fa-instagram"></i></a>
                                                <a href="#" class="google-plus"><i
                                                        class="fa fa-google-plus"></i></a>
                                                <a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Additional carousel items -->
                        </div>
                        <!-- Carousel controls -->
                        <a class="carousel-control-prev" href="#testimonials-carousel" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#testimonials-carousel" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--==========================
                 End  Testimonial Section
                ============================-->

    <!--==========================
                  Gallery Section
                ============================-->


    <section id="gallery" class="wow fadeInUp">
        <div class="container">
            <div class="section-header">
                <h2>Gallery</h2>
                <p>Check our gallery from the recent events</p>
            </div>
        </div>

        <div class="owl-carousel past-event-gallery-">
            <a href="{{ asset('assets/img/gallery/1.jpg ') }}" class="venobox" data-gall="past-event-gallery-1">

                <img src="{{ asset('assets/img/gallery/1.jpg ') }}" alt="Past Events  Gallery" />

            </a>
            <a href="{{ asset('assets/img/gallery/2.jpg') }}" class="venobox" data-gall="past-event-gallery-2">

                <img src="{{ asset('assets/img/gallery/2.jpg ') }}" alt="Past Events  Gallery" />

            </a>
            <a href="{{ asset('assets/img/gallery/3.jpg ') }}" class="venobox" data-gall="past-event-gallery-3">

                <img src="img/gallery/3.jpg   {{ asset('assets/img/gallery/3.jpg ') }}" alt="Past Events  Gallery" />

            </a>
            <a href="{{ asset('assets/img/gallery/4.jpg') }}" class="venobox" data-gall="past-event-gallery-4">

                <img src="{{ asset('assets/img/gallery/4.jpg ') }}" alt="Past Events  Gallery" />

            </a>
            <a href="{{ asset('assets/img/gallery/5.jpg ') }}" class="venobox" data-gall="past-event-gallery-5">

                <img src="{{ asset('assets/img/gallery/5.jpg ') }}" alt="Past Events  Gallery" />

            </a>
            <a href="{{ asset('assets/img/gallery/6.jpg ') }}" class="venobox" data-gall="past-event-gallery-6">

                <img src="{{ asset('assets/img/gallery/6.jpg ') }}" alt="Past Events  Gallery" />

            </a>
            <a href="{{ asset('assets/img/gallery/7.jpg ') }}" class="venobox" data-gall="past-event-gallery-7">

                <img src="{{ asset('assets/img/gallery/7.jpg ') }}" alt="Past Events  Gallery" />

            </a>
            <a href="{{ asset('assets/img/gallery/8.jpg') }}" class="venobox" data-gall="past-event-gallery-8">

                <img src="{{ asset('assetsimg/gallery/8.jpg ') }}" alt="Past Events  Gallery" />

            </a>
        </div>
    </section>

    <!--==========================
                 End  Gallery Section
                ============================-->
@endsection
