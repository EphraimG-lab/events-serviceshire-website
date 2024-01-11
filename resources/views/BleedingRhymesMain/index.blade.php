@extends('layouts.app')
@section('content')
    <!--==========================
    Intro For Homepage Section for carousel
  ============================-->
    <section id="#">
        <div id="intro-carousel" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators ">
                <li data-target="#intro-carousel" data-slide-to="0" class="active"></li>
                <li data-target="#intro-carousel" data-slide-to="1"></li>
                <li data-target="#intro-carousel" data-slide-to="2"></li>
                <!-- Add more indicators as needed -->
                <li data-target="#intro-carousel" data-slide-to="3"></li>
                <li data-target="#intro-carousel" data-slide-to="4"></li>
                <li data-target="#intro-carousell" data-slide-to="5"></li>
                <li data-target="#intro-carousel" data-slide-to="6"></li>
            </ol>

            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="{{ asset('assets/img/about-bg.jpg ') }}" class="d-block w-100" alt="Image 1">
                    <div class="carousel-caption">
                        <h3>The Annual Marketing Conference</h3>
                        <p>10-12 December, Downtown Conference Center, New York</p>
                    </div>
                </div>

                <div class="carousel-item">
                    <img src="{{ asset('assets/img/about-bg.jpg ') }}" class="d-block w-100" alt="Image 2">
                    <div class="carousel-caption">
                        <h3>Connect with Industry Leaders</h3>
                        <p>Learn from the best and network with like-minded professionals.</p>
                    </div>
                </div>

                <div class="carousel-item">
                    <img src="{{ asset('assets/img/about-bg.jpg ') }}" class="d-block w-100" alt="Image 3">
                    <div class="carousel-caption">
                        <h3>Discover Innovative Strategies</h3>
                        <p>Gain insights and inspiration to take your marketing to the next level.</p>
                    </div>
                </div>

                <div class="carousel-item">
                    <video controls autoplay id="player2" class="d-block w-100   myvid" allowfullscreen>
                        <source src="http://commondatastorage.googleapis.com/gtv-videos-bucket/sample/BigBuckBunny.mp4"
                            type="video/mp4" />
                    </video>
                    <div class="carousel-caption">
                        <h3>Watch the Conference Trailer</h3>
                        <p>Get a glimpse of what awaits you at the conference.</p>
                    </div>
                </div>

                <div class="carousel-item">
                    <video controls autoplay id="player2" class="d-block w-100   myvid" allowfullscreen>
                        <source
                            src="http://commondatastorage.googleapis.com/gtv-videos-bucket/sample/ElephantsDream.mp4"
                            type="video/mp4" />
                    </video>
                    <div class="carousel-caption">
                        <h3>See What You've Missed</h3>
                        <p>Catch up on highlights from past conferences.</p>
                    </div>
                </div>

                <div class="carousel-item">
                    <video controls autoplay id="player2" class="d-block w-100   myvid" allowfullscreen>
                        <source
                            src="http://commondatastorage.googleapis.com/gtv-videos-bucket/sample/ForBiggerBlazes.mp4"
                            type="video/mp4" />
                    </video>
                    <div class="carousel-caption">
                        <h3>Be Inspired by Success Stories</h3>
                        <p>Hear from marketing leaders who have achieved remarkable results.</p>
                    </div>
                </div>
            </div>

            <a class="carousel-control-prev" href="#intro-carousel" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#intro-carousel" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </section>
    <!--====================================
    end Intro For Homepage Section for carousel
   ===============================--->


    <!--==========================
       Snip Pic About Bleeding Rhymes creatives Section
    ============================-->
    <section class="wow fadeInUp mt-5">
        <div class="container">
            <div class="section-header">
                <h2>Bleeding Rhymes Creactives</h2>
                <p>Why Choose us ?</p>
            </div>
            <div class="row">
                <div class="col-lg-5 col-md-6">
                    <div class="about-img">
                        <img style="height: 500px; width: 450px" src="{{ asset('assets/images-now/about.jpg') }}" alt="Image" />
                    </div>
                </div>
                <div class="col-lg-7 col-md-6">
                    <div class="about-text">
                        <p>
                            Welcome to Bleeding Rhymes Creactives, a leading event
                            organizing and marketing agency based in Nairobi, Kenya, With
                            a passion for spoken word poetry performance, we specialize in
                            creating unforgettable experiences that captivate audiences
                            and leave a Lasting impression. Our team of talented
                            professionals also offers exceptional services as corporate
                            MCs and voice over artists, At Bleeding Rhymes Creactives, we
                            are committed to delivering excellence in every project we
                            undertake, ensuring seamless, execution and maximum impact.
                        </p>
                        <p>
                            Bleeding Rhymes Creactives is a dynamic event organizing &
                            Entertainment company based in Nairobi, Kenya. We have
                            expertise in spoken word poetry performances, corporate MC
                            services, marketing, and voice overs, we offer professionalism
                            to every project. Our team is dedicated to delivering
                            exceptional experiences and ensure a success. Whether you need
                            assistance in organizing a conference, planning a poetry
                            event, or creating impactful marketing campaigns, we have the
                            knowledge and passion to make it happen, Trust Bleeding Rhymes
                            Creactives for your next event or marketing
                        </p>
                    </div>
                </div>
            </div>
        </div>

    </section>
    <!--==========================
        EndSnip Pic About Bleeding Rhymes creatives Section
    ============================-->

    <!--==========================
      Our Services Section
    ============================-->
    <section id="hotels" class="section-with-bg wow fadeInUp">

        <div class="container">
            <div class="section-header">
                <h2>Our Services</h2>
                <p>Best In Town</p>
            </div>

            <div class="row">
                @foreach($services as $service)
                <div class="col-lg-4 col-md-6">
                    <div class="hotel">
                        <div class="hotel-img">
                            <img src="{{ asset('assets/images-now/' . $service->service_image) }}" alt="Service 1" class="img-fluid">
                        </div>
                        <h3><a href="#">{{$service->service_name}}</a></h3>
                        <div class="stars">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                        </div>
                        <p>{{$service->service_description}}</p>
                        <div class="m-3">
                            <a class="btn btn-primary" href="{{ route('book', $service->id) }}">Book Now</a>
                        </div>
                    </div>
                </div>

                @endforeach
            </div>
        </div>

    </section>

    <!--==========================
     End  Our Services Section
    ============================-->


    <!--==========================
     Blog & Articles Section
    ============================-->
    <section id="hotels" class="section-with-bg wow fadeInUp">

        <div class="container">
            <div class="section-header">
                <h2>BLOGS AND ARTICLES</h2>
                <p>Our Latest Blogs And Articles</p>
            </div>

            <div class="row">

                <div class="col-lg-4 col-md-6">
                    <div class="hotel">
                        <div class="hotel-img">
                            <img src="{{ asset('assets/images-now/service-1.jpg') }}" alt="Blog 1" class="img-fluid">
                        </div>
                        <h3><a href="#">Event Organizing</a></h3>
                        <div class="d-flex">
                            <i class=" ml-4 fa fa-list-alt"><a href=""> Event Organizing</a></i>
                            <span class="m-3"></span>
                            <i class="fa fa-calendar"><span><a href=""> 11-Jun-23</a></span></i>
                        </div>

                        <div class="stars">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                        </div>
                        <p>Leave the planning to us and enjoy a memorable and hassle- free event. From concept to
                            execution, we've got you covered.</p>
                        <div class="m-3">
                            <a class="btn" href="/Learn-more">Learn More</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="hotel">
                        <div class="hotel-img">
                            <img src="{{ asset('assets/images-now/service-3.jpg') }}" alt="Blog 2" class="img-fluid">
                        </div>
                        <h3><a href="#">Spoken Word Poetry</a></h3>
                        <div class="d-flex">
                            <i class=" ml-4 fa fa-list-alt"><a href=""> Spoken Word Poetry</a></i>
                            <span class="m-3"></span>
                            <i class="fa fa-calendar"><span><a href=""> 11-Jun-23</a></span></i>
                        </div>
                        <div class="stars">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star-half-full"></i>
                        </div>
                        <p>Experience the power of words through captivating performances that inspire, provoke thought,
                            and leave a lasting impact.</p>
                        <div class="m-3">
                            <a class="btn" href="/learn-more">Leanr More</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="hotel">
                        <div class="hotel-img">
                            <img src="{{ asset('assets/images-now/service-3.jpg') }}" alt="Blog 3" class="img-fluid">
                        </div>
                        <h3><a href="#">Corporate MC</a></h3>
                        <div class="d-flex">
                            <i class=" ml-4 fa fa-list-alt"><a href=""> Corporate MC</a></i>
                            <span class="m-3"></span>
                            <i class="fa fa-calendar"><span><a href=""> 11-Jun-23</a></span></i>
                        </div>
                        <div class="stars">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                        </div>
                        <p>Ensure a seamless event flow and engage your audience with our professional and experienced
                            Matter of Ceremonies</p>
                        <div class="m-3">
                            <a class="btn" href="/learn-more">Learn More</a>
                        </div>
                    </div>

                </div>


                <div class="col-lg-4 col-md-6">
                    <div class="hotel">
                        <div class="hotel-img">
                            <img src="{{ asset('assets/images-now/service-4.jpg ') }}" alt="Blog 4" class="img-fluid">
                        </div>
                        <h3><a href="#">Marketing</a></h3>
                        <div class="d-flex">
                            <i class=" ml-4 fa fa-list-alt"><a href=""> Marketing</a></i>
                            <span class="m-3"></span>
                            <i class="fa fa-calendar"><span><a href=""> 11-Jun-23</a></span></i>
                        </div>
                        <div class="stars">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                        </div>
                        <p>Boost your brand's visibility, reach your target audience, and achieve your business goals
                            with our tailored marketing strategies.</p>
                        <div class="m-3">
                            <a class="btn" href="/learn-more">Learn More</a>
                        </div>
                    </div>

                </div>


                <div class="col-lg-4 col-md-6">
                    <div class="hotel">
                        <div class="hotel-img">
                            <img src="{{ asset('assets/images-now/service-5.jpg ') }}" alt="Blog 5" class="img-fluid">
                        </div>
                        <h3><a href="#">Voice Overs</a></h3>
                        <div class="d-flex">
                            <i class=" ml-4 fa fa-list-alt"><a href=""> Voice Overs</a></i>
                            <span class="m-3"></span>
                            <i class="fa fa-calendar"><span><a href=""> 11-Jun-23</a></span></i>
                        </div>
                        <div class="stars">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                        </div>
                        <p>Make your project come alive with professional voice over services that captivate and engage
                            your audience.</p>
                        <div class="m-3">
                            <a class="btn" href="learn-more">Learn More</a>
                        </div>
                    </div>

                </div>
            </div>
        </div>

    </section>
    <!--==========================
    End  Blog & Articles Section
    ============================-->

    <!--==========================
      Our Client Section
    ============================-->
    <section id="sponsors" class="section-with-bg wow fadeInUp">

        <div class="container">
            <div class="section-header">
                <h2>Our Clients</h2>
            </div>

            <div class="row no-gutters sponsors-wrap clearfix">

                <div class="col-lg-3 col-md-4 col-xs-6">
                    <div class="sponsor-logo">
                        <img src="{{ asset('assets/img/sponsors/1.png') }}"  alt="Client 1" class="img-fluid" >
                    </div>
                </div>

                <div class="col-lg-3 col-md-4 col-xs-6">
                    <div class="sponsor-logo">
                        <img src="{{ asset('assets/img/sponsors/2.png') }}" alt="Cleint 2"class="img-fluid" >
                    </div>
                </div>

                <div class="col-lg-3 col-md-4 col-xs-6">
                    <div class="sponsor-logo"> 
                        <img src="{{ asset('assets/img/sponsors/3.png') }}"  alt="Client 3" class="img-fluid" >
                    </div>
                </div>

                <div class="col-lg-3 col-md-4 col-xs-6">
                    <div class="sponsor-logo">
                        <img src="{{ asset('assets/img/sponsors/4.png') }}" alt="Client 4" class="img-fluid" >
                    </div>
                </div>

                <div class="col-lg-3 col-md-4 col-xs-6">
                    <div class="sponsor-logo">
                        <img src="{{ asset('assets/img/sponsors/5.png') }}" alt="Client 5" class="img-fluid" >
                    </div>
                </div>

                <div class="col-lg-3 col-md-4 col-xs-6">
                    <div class="sponsor-logo">
                        <img src="{{ asset('assets/img/sponsors/6.png') }}" alt="Client 6" class="img-fluid" >
                    </div>
                </div>

                <div class="col-lg-3 col-md-4 col-xs-6">
                    <div class="sponsor-logo">
                        <img src="{{ asset('assets/img/sponsors/7.png') }}" alt="Client 7" class="img-fluid" >
                    </div>
                </div>

                <div class="col-lg-3 col-md-4 col-xs-6">
                    <div class="sponsor-logo">
                        <img src="{{ asset('assets/img/sponsors/8.png ') }}" alt="Client 8" class="img-fluid" >
                    </div>
                </div>

            </div>

        </div>

    </section>

    <!--==========================
      End Our Client Section
    ============================-->


    <!--==========================
      Subscribe Section
    ============================-->
    <section id="subscribe">
        <div class="container wow fadeInUp">
            <div class="section-header">
                <h2>Newsletter</h2>
                <p>Subscribe to our Newsletter to get latest news and Blog !</p>
            </div>

            <form method="POST" action="#">
                <div class="form-row justify-content-center">
                    <div class="col-auto">
                        <input type="text" class="form-control" placeholder="Enter your Email">
                    </div>
                    <div class="col-auto">
                        <button type="submit">Subscribe</button>
                    </div>
                </div>
            </form>

        </div>
    </section>
    <!--==========================
     End  Subscribe Section
    ============================-->
@endsection
