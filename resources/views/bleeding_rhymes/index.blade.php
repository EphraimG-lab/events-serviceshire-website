
@extends('layouts/layout')
@section('content')
<div class="hero row align-items-center">
    <!-- <div class="col-md-7">
            <h2>BLEEDING <span class="danger">RHYMES</span> PRODUCTION</h2>
            <p>Experience the power of spoken word poetry, captivating marketing strategies, and professional voice overs.</p>
            <a class="btn" href="">learn more </a>
        </div>
        <div class="col-md-5">
            <div>
                <img style="height: 415px;width: 400px;border-radius: 20px/30px;" src="img/header-1.jpg" alt="Image">
            </div>
        </div> -->

    <div id="myCarousel" class="carousel slide" data-interval="false">
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
            <!-- Add more indicators as needed -->
            <li data-target="#myCarousel" data-slide-to="3"></li>
            <li data-target="#myCarousel" data-slide-to="4"></li>
            <li data-target="#myCarousel" data-slide-to="5"></li>
            <li data-target="#myCarousel" data-slide-to="6"></li>
        </ol>

        <div class="carousel-inner">
            <div class="carousel-item active">
                <video controls autoplay loop muted class="myvid" id="player">
                    <source
                        src="http://commondatastorage.googleapis.com/gtv-videos-bucket/sample/BigBuckBunny.mp4"
                        type="video/mp4" />
                </video>
            </div>

            <div class="carousel-item ">
                <video controls autoplay class="myvid" id="player2">
                    <source
                        src="http://commondatastorage.googleapis.com/gtv-videos-bucket/sample/ElephantsDream.mp4"
                        type="video/mp4" />
                </video>
            </div>

            <div class="carousel-item  ">
                <video controls autoplay class="myvid" id="player2">
                    <source
                        src="http://commondatastorage.googleapis.com/gtv-videos-bucket/sample/ForBiggerBlazes.mp4"
                        type="video/mp4" />
                </video>
            </div>
            <div class="carousel-item">
                <video controls autoplay class="myvid" id="player2">
                    <source
                        src="http://commondatastorage.googleapis.com/gtv-videos-bucket/sample/ElephantsDream.mp4"
                        type="video/mp4" />
                </video>
            </div>

            <div class="carousel-item ">
                <video controls autoplay class="myvid" id="player2">
                    <source
                        src="http://commondatastorage.googleapis.com/gtv-videos-bucket/sample/ForBiggerBlazes.mp4"
                        type="video/mp4" />
                </video>
            </div>
            <div class="carousel-item ">
                <video controls autoplay class="myvid" id="player2">
                    <source
                        src="http://commondatastorage.googleapis.com/gtv-videos-bucket/sample/ElephantsDream.mp4"
                        type="video/mp4" />
                </video>
            </div>

            <div class="carousel-item ">
                <video controls autoplay class="myvid" id="player2">
                    <source
                        src="http://commondatastorage.googleapis.com/gtv-videos-bucket/sample/ForBiggerBlazes.mp4"
                        type="video/mp4" />
                </video>
            </div>
        </div>

        <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Vorige</span>
        </a>
        <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Volgende</span>
        </a>
    </div>
</div>
</div>
</div>
<!-- Header End -->

<!-- About Start -->
<div class="about">
<div class="container">
<div class="row">
    <div class="col-lg-5 col-md-6">
        <div class="about-img">
            <img style="height: 500px; width: 400px" src="{{ asset('assets/img/about.jpg') }}"
                alt="Image" />
        </div>
    </div>
    <div class="col-lg-7 col-md-6">
        <div class="about-text">
            <p>
                Welcome to Bleeding Rhymes Production, a leading event
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
</div>
<!-- About End -->

<!-- Service Start -->
<div class="service">
<div class="container">
<div class="section-header">
    <h2>Our Services</h2>
</div>
<div class="row">
    <div class="col-lg-3 col-md-6">
        <div class="service-item">
            <img src="{{ asset('assets/img/service-1.jpg') }}" alt="Service" />
            <h3>Event Organizing</h3>
            <p>
                Leave the planning to us and enjoy a memorable and hassle-
                free event. From concept to execution, we've got you covered.
            </p>
            <a class="btn" href="">Learn More</a>
        </div>
    </div>
    <div class="col-lg-3 col-md-6">
        <div class="service-item">
            <img src="{{ asset('assets/img/service-2.jpg') }}" alt="Service" />
            <h3>Spoken Word Poetry Performance</h3>
            <p>
                Experience the power of words through captivating performances
                that inspire, provoke thought, and leave a lasting impact.
            </p>
            <a class="btn" href="">Learn More</a>
        </div>
    </div>
    <div class="col-lg-3 col-md-6">
        <div class="service-item">
            <img src="{{ asset('assets/img/service-3.jpg') }}" alt="Service" />
            <h3>Corporate MC</h3>
            <p>
                Ensure a seamless event flow and engage your audience with our
                professional and experienced Matter of Ceremonies
            </p>
            <a class="btn" href="">Learn More</a>
        </div>
    </div>
    <div class="col-lg-3 col-md-6">
        <div class="service-item">
            <img src="{{ asset('assets/img/service-4.jpg') }}" alt="Service" />
            <h3>Marketing</h3>
            <p>
                Boost your brand's visibility, reach your target audience, and
                achieve your business goals with our tailored marketing
                strategies.
            </p>
            <a class="btn" href="">Learn More</a>
        </div>
    </div>
    <div class="col-lg-3 col-md-6">
        <div class="service-item">
            <img src="{{ asset('assets/img/service-5.jpg ') }}" alt="Service" />
            <h3>Voice Overs</h3>
            <p>
                Make your project come alive with professional voice over
                services that captivate and engage your audience.
            </p>
            <a class="btn" href="">Learn More</a>
        </div>
    </div>
</div>
</div>
</div>
<!-- Service End -->

<!-- Blog Start -->
<div class="blog">
<div class="container">
<div class="section-header">
    <h2>BLOGS AND ARTICLES</h2>
</div>
<div class="row">
    <div class="col-lg-4 col-md-6">
        <div class="blog-item">
            <img src="{{ asset('assets/img/service-1.jpg') }}" alt="Blog" />
            <h3>Lorem ipsum dolor</h3>
            <div class="meta">
                <i class="fa fa-list-alt"></i>
                <a href="">Voice Overs</a>
                <i class="fa fa-calendar-alt"></i>
                <p>11-Jun-23</p>
            </div>
            <p>
                Lorem ipsum dolor sit amet elit. Phasellus nec pretium mi.
                Curabitur facilisis ornare velit non vulputate. Aliquam metus
                tortor, auctor id gravida condimentum
            </p>
            <a class="btn" href="">Learn More</a>
        </div>
    </div>
    <div class="col-lg-4 col-md-6">
        <div class="blog-item">
            <img src="{{ asset('assets/img/service-2.jpg') }}" alt="Blog" />
            <h3>Lorem ipsum dolor</h3>
            <div class="meta">
                <i class="fa fa-list-alt"></i>
                <a href="">Spoken Word Poetry Performance</a>
                <i class="fa fa-calendar-alt"></i>
                <p>11-Jun-24</p>
            </div>
            <p>
                Lorem ipsum dolor sit amet elit. Phasellus nec pretium mi.
                Curabitur facilisis ornare velit non vulputate. Aliquam metus
                tortor, auctor id gravida condimentum
            </p>
            <a class="btn" href="">Learn More</a>
        </div>
    </div>
    <div class="col-lg-4 col-md-6">
        <div class="blog-item">
            <img src="{{ asset('assets/img/service-3.jpg') }}" alt="Blog" />
            <h3>Lorem ipsum dolor</h3>
            <div class="meta">
                <i class="fa fa-list-alt"></i>
                <a href="">Marketing</a>
                <i class="fa fa-calendar-alt"></i>
                <p>11-Jun-24</p>
            </div>
            <p>
                Lorem ipsum dolor sit amet elit. Phasellus nec pretium mi.
                Curabitur facilisis ornare velit non vulputate. Aliquam metus
                tortor, auctor id gravida condimentum
            </p>
            <a class="btn" href="">Learn More</a>
        </div>
    </div>
</div>
</div>
</div>
<!-- Blog End --> 
@endsection
             
