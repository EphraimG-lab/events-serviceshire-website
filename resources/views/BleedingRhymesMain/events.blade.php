@extends('layouts.app')
@section('content')
    <!--==========================
        Introduction about the event Section
      ============================-->
    <section id="intro">
        <div class="intro-container wow fadeIn">
            <h1 class="mb-4 pb-0">The Annual<br><span>Marketing</span> Conference</h1>
            <p class="mb-4 pb-0">10-12 December, Downtown Conference Center, New York</p>
            <a href="https://www.youtube.com/watch?v=jDDaplaOz7Q" class="venobox play-btn mb-4" data-vbtype="video"
                data-autoplay="true"></a>
            <a href="#about" class="about-btn scrollto">About The Event</a>
        </div>
    </section>

     <!--==========================
        End Introduction about the event Section
      ============================-->


    <!--==========================
          About and Location KEY Notes Section
        ============================-->
    <section id="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <h2>About The Event</h2>
                    <p>Sed nam ut dolor qui repellendus iusto odit. Possimus inventore eveniet accusamus error amet eius aut
                        accusantium et. Non odit consequatur repudiandae sequi ea odio molestiae. Enim possimus sunt
                        inventore in
                        est ut optio sequi unde.</p>
                </div>
                <div class="col-lg-3">
                    <h3>Where</h3>
                    <p>Downtown Conference Center, New York</p>
                </div>
                <div class="col-lg-3">
                    <h3>When</h3>
                    <p>Monday to Wednesday<br>10-12 December</p>
                </div>
            </div>
        </div>
    </section>

      <!--==========================
         End  About and Location KEY Notes Section
        ============================-->

    <!--==========================
          Speakers  of eventsSection
        ============================-->
    <section id="speakers" class="wow fadeInUp">
        <div class="container">
            <div class="section-header">
                <h2>Event Speakers</h2>
                <p>Here are some of our speakers</p>
            </div>

            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="speaker">
                        <img src="{{ asset('assets/img/speakers/1.jpg ') }}" alt="Speaker 1" class="img-fluid">
                        <div class="details">
                            <h3><a href="speaker-details.html">Brenden Legros</a></h3>
                            <p>Quas alias incidunt</p>
                            <div class="social">
                                <a href=""><i class="fa fa-twitter"></i></a>
                                <a href=""><i class="fa fa-facebook"></i></a>
                                <a href=""><i class="fa fa-google-plus"></i></a>
                                <a href=""><i class="fa fa-linkedin"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="speaker">
                        <img src="{{ asset('assets/img/speakers/2.jpg  ') }}" alt="Speaker 2" class="img-fluid">
                        <div class="details">
                            <h3><a href="speaker-details.html">Hubert Hirthe</a></h3>
                            <p>Consequuntur odio aut</p>
                            <div class="social">
                                <a href=""><i class="fa fa-twitter"></i></a>
                                <a href=""><i class="fa fa-facebook"></i></a>
                                <a href=""><i class="fa fa-google-plus"></i></a>
                                <a href=""><i class="fa fa-linkedin"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="speaker">
                        <img src="{{ asset('assets/img/speakers/3.jpg ') }}" alt="Speaker 3" class="img-fluid">
                        <div class="details">
                            <h3><a href="speaker-details.html">Cole Emmerich</a></h3>
                            <p>Fugiat laborum et</p>
                            <div class="social">
                                <a href=""><i class="fa fa-twitter"></i></a>
                                <a href=""><i class="fa fa-facebook"></i></a>
                                <a href=""><i class="fa fa-google-plus"></i></a>
                                <a href=""><i class="fa fa-linkedin"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="speaker">
                        <img src="{{ asset('assets/img/speakers/4.jpg') }}" alt="Speaker 4" class="img-fluid">
                        <div class="details">
                            <h3><a href="speaker-details.html">Jack Christiansen</a></h3>
                            <p>Debitis iure vero</p>
                            <div class="social">
                                <a href=""><i class="fa fa-twitter"></i></a>
                                <a href=""><i class="fa fa-facebook"></i></a>
                                <a href=""><i class="fa fa-google-plus"></i></a>
                                <a href=""><i class="fa fa-linkedin"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="speaker">
                        <img src="{{ asset('assets/img/speakers/5.jpg') }}" alt="Speaker 5" class="img-fluid">
                        <div class="details">
                            <h3><a href="speaker-details.html">Alejandrin Littel</a></h3>
                            <p>Qui molestiae natus</p>
                            <div class="social">
                                <a href=""><i class="fa fa-twitter"></i></a>
                                <a href=""><i class="fa fa-facebook"></i></a>
                                <a href=""><i class="fa fa-google-plus"></i></a>
                                <a href=""><i class="fa fa-linkedin"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="speaker">
                        <img src="{{ asset('assets/img/speakers/6.jpg  ') }}" alt="Speaker 6" class="img-fluid">
                        <div class="details">
                            <h3><a href="speaker-details.html">Willow Trantow</a></h3>
                            <p>Non autem dicta</p>
                            <div class="social">
                                <a href=""><i class="fa fa-twitter"></i></a>
                                <a href=""><i class="fa fa-facebook"></i></a>
                                <a href=""><i class="fa fa-google-plus"></i></a>
                                <a href=""><i class="fa fa-linkedin"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>

      <!--==========================
          End Speakers  of eventsSection
        ============================-->

    <!--==========================
         Event Schedule Section
        ============================-->
    <section id="schedule" class="section-with-bg">
        <div class="container wow fadeInUp">
            <div class="section-header">
                <h2>Event Schedule</h2>
                <p>Here is our event schedule</p>
            </div>

            <ul class="nav nav-tabs" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" href="#day-1" role="tab" data-toggle="tab">Day 1</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#day-2" role="tab" data-toggle="tab">Day 2</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#day-3" role="tab" data-toggle="tab">Day 3</a>
                </li>
            </ul>

            <h3 class="sub-heading">Voluptatem nulla veniam soluta et corrupti consequatur neque eveniet officia. Eius
                necessitatibus voluptatem quis labore perspiciatis quia.</h3>

            <div class="tab-content row justify-content-center">

                <!-- Schdule Day 1 -->
                <div role="tabpanel" class="col-lg-9 tab-pane fade show active" id="day-1">

                    <div class="row schedule-item">
                        <div class="col-md-2"><time>09:30 AM</time></div>
                        <div class="col-md-10">
                            <h4>Registration</h4>
                            <p>Fugit voluptas iusto maiores temporibus autem numquam magnam.</p>
                        </div>
                    </div>

                    <div class="row schedule-item">
                        <div class="col-md-2"><time>10:00 AM</time></div>
                        <div class="col-md-10">
                            <div class="speaker">
                                <img src="{{ asset('assets/img/speakers/1.jpg ') }}" alt="Brenden Legros">
                            </div>
                            <h4>Keynote <span>Brenden Legros</span></h4>
                            <p>Facere provident incidunt quos voluptas.</p>
                        </div>
                    </div>

                    <div class="row schedule-item">
                        <div class="col-md-2"><time>11:00 AM</time></div>
                        <div class="col-md-10">
                            <div class="speaker">
                                <img src="{{ asset('assets/img/speakers/2.jpg ') }}" alt="Hubert Hirthe">
                            </div>
                            <h4>Et voluptatem iusto dicta nobis. <span>Hubert Hirthe</span></h4>
                            <p>Maiores dignissimos neque qui cum accusantium ut sit sint inventore.</p>
                        </div>
                    </div>

                    <div class="row schedule-item">
                        <div class="col-md-2"><time>12:00 AM</time></div>
                        <div class="col-md-10">
                            <div class="speaker">
                                <img src="{{ asset('assets/img/speakers/3.jpg ') }}" alt="Cole Emmerich">
                            </div>
                            <h4>Explicabo et rerum quis et ut ea. <span>Cole Emmerich</span></h4>
                            <p>Veniam accusantium laborum nihil eos eaque accusantium aspernatur.</p>
                        </div>
                    </div>

                    <div class="row schedule-item">
                        <div class="col-md-2"><time>02:00 PM</time></div>
                        <div class="col-md-10">
                            <div class="speaker">
                                <img src="{{ asset('assets/img/speakers/4.jpg ') }}" alt="Jack Christiansen">
                            </div>
                            <h4>Qui non qui vel amet culpa sequi. <span>Jack Christiansen</span></h4>
                            <p>Nam ex distinctio voluptatem doloremque suscipit iusto.</p>
                        </div>
                    </div>

                    <div class="row schedule-item">
                        <div class="col-md-2"><time>03:00 PM</time></div>
                        <div class="col-md-10">
                            <div class="speaker">
                                <img src="{{ asset('assets/img/speakers/5.jpg ') }}" alt="Alejandrin Littel">
                            </div>
                            <h4>Quos ratione neque expedita asperiores. <span>Alejandrin Littel</span></h4>
                            <p>Eligendi quo eveniet est nobis et ad temporibus odio quo.</p>
                        </div>
                    </div>

                    <div class="row schedule-item">
                        <div class="col-md-2"><time>04:00 PM</time></div>
                        <div class="col-md-10">
                            <div class="speaker">
                                <img src="{{ asset('assets/img//speakers/6.jpg') }}" alt="Willow Trantow">
                            </div>
                            <h4>Quo qui praesentium nesciunt <span>Willow Trantow</span></h4>
                            <p>Voluptatem et alias dolorum est aut sit enim neque veritatis.</p>
                        </div>
                    </div>

                </div>
                <!-- End Schdule Day 1 -->

                <!-- Schdule Day 2 -->
                <div role="tabpanel" class="col-lg-9  tab-pane fade" id="day-2">

                    <div class="row schedule-item">
                        <div class="col-md-2"><time>10:00 AM</time></div>
                        <div class="col-md-10">
                            <div class="speaker">
                                <img src="{{ asset('assets/img/speakers/1.jpg ') }}" alt="Brenden Legros">
                            </div>
                            <h4>Libero corrupti explicabo itaque. <span>Brenden Legros</span></h4>
                            <p>Facere provident incidunt quos voluptas.</p>
                        </div>
                    </div>

                    <div class="row schedule-item">
                        <div class="col-md-2"><time>11:00 AM</time></div>
                        <div class="col-md-10">
                            <div class="speaker">
                                <img src="{{ asset('assets/img/speakers/2.jpg ') }}" alt="Hubert Hirthe">
                            </div>
                            <h4>Et voluptatem iusto dicta nobis. <span>Hubert Hirthe</span></h4>
                            <p>Maiores dignissimos neque qui cum accusantium ut sit sint inventore.</p>
                        </div>
                    </div>

                    <div class="row schedule-item">
                        <div class="col-md-2"><time>12:00 AM</time></div>
                        <div class="col-md-10">
                            <div class="speaker">
                                <img src="{{ asset('assets/img/speakers/3.jpg ') }}" alt="Cole Emmerich">
                            </div>
                            <h4>Explicabo et rerum quis et ut ea. <span>Cole Emmerich</span></h4>
                            <p>Veniam accusantium laborum nihil eos eaque accusantium aspernatur.</p>
                        </div>
                    </div>

                    <div class="row schedule-item">
                        <div class="col-md-2"><time>02:00 PM</time></div>
                        <div class="col-md-10">
                            <div class="speaker">
                                <img src="{{ asset('assets/img/speakers/4.jpg ') }}" alt="Jack Christiansen">
                            </div>
                            <h4>Qui non qui vel amet culpa sequi. <span>Jack Christiansen</span></h4>
                            <p>Nam ex distinctio voluptatem doloremque suscipit iusto.</p>
                        </div>
                    </div>

                    <div class="row schedule-item">
                        <div class="col-md-2"><time>03:00 PM</time></div>
                        <div class="col-md-10">
                            <div class="speaker">
                                <img src="{{ asset('assets/img/speakers/5.jpg ') }}" alt="Alejandrin Littel">
                            </div>
                            <h4>Quos ratione neque expedita asperiores. <span>Alejandrin Littel</span></h4>
                            <p>Eligendi quo eveniet est nobis et ad temporibus odio quo.</p>
                        </div>
                    </div>

                    <div class="row schedule-item">
                        <div class="col-md-2"><time>04:00 PM</time></div>
                        <div class="col-md-10">
                            <div class="speaker">
                                <img src="{{ asset('assets/img//speakers/6.jpg') }}" alt="Willow Trantow">
                            </div>
                            <h4>Quo qui praesentium nesciunt <span>Willow Trantow</span></h4>
                            <p>Voluptatem et alias dolorum est aut sit enim neque veritatis.</p>
                        </div>
                    </div>

                </div>
                <!-- End Schdule Day 2 -->

                <!-- Schdule Day 3 -->
                <div role="tabpanel" class="col-lg-9  tab-pane fade" id="day-3">

                    <div class="row schedule-item">
                        <div class="col-md-2"><time>10:00 AM</time></div>
                        <div class="col-md-10">
                            <div class="speaker">
                                <img src="{{ asset('assets/img/speakers/2.jpg') }}" alt="Hubert Hirthe">
                            </div>
                            <h4>Et voluptatem iusto dicta nobis. <span>Hubert Hirthe</span></h4>
                            <p>Maiores dignissimos neque qui cum accusantium ut sit sint inventore.</p>
                        </div>
                    </div>

                    <div class="row schedule-item">
                        <div class="col-md-2"><time>11:00 AM</time></div>
                        <div class="col-md-10">
                            <div class="speaker">
                                <img src="{{ asset('assets/img/speakers/3.jpg') }}" alt="Cole Emmerich">
                            </div>
                            <h4>Explicabo et rerum quis et ut ea. <span>Cole Emmerich</span></h4>
                            <p>Veniam accusantium laborum nihil eos eaque accusantium aspernatur.</p>
                        </div>
                    </div>

                    <div class="row schedule-item">
                        <div class="col-md-2"><time>12:00 AM</time></div>
                        <div class="col-md-10">
                            <div class="speaker">
                                <img src="{{ asset('assets/img/speakers/1.jpg') }}" alt="Brenden Legros">
                            </div>
                            <h4>Libero corrupti explicabo itaque. <span>Brenden Legros</span></h4>
                            <p>Facere provident incidunt quos voluptas.</p>
                        </div>
                    </div>

                    <div class="row schedule-item">
                        <div class="col-md-2"><time>02:00 PM</time></div>
                        <div class="col-md-10">
                            <div class="speaker">
                                <img src="{{ asset('assets/img/speakers/4.jpg') }}" alt="Jack Christiansen">
                            </div>
                            <h4>Qui non qui vel amet culpa sequi. <span>Jack Christiansen</span></h4>
                            <p>Nam ex distinctio voluptatem doloremque suscipit iusto.</p>
                        </div>
                    </div>

                    <div class="row schedule-item">
                        <div class="col-md-2"><time>03:00 PM</time></div>
                        <div class="col-md-10">
                            <div class="speaker">
                                <img src="{{ asset('assets/img/speakers/5.jpg') }}" alt="Alejandrin Littel">
                            </div>
                            <h4>Quos ratione neque expedita asperiores. <span>Alejandrin Littel</span></h4>
                            <p>Eligendi quo eveniet est nobis et ad temporibus odio quo.</p>
                        </div>
                    </div>

                    <div class="row schedule-item">
                        <div class="col-md-2"><time>04:00 PM</time></div>
                        <div class="col-md-10">
                            <div class="speaker">
                                <img src="{{ asset('assets/img//speakers/4.jpg') }}" alt="Willow Trantow">
                            </div>
                            <h4>Quo qui praesentium nesciunt <span>Willow Trantow</span></h4>
                            <p>Voluptatem et alias dolorum est aut sit enim neque veritatis.</p>
                        </div>
                    </div>

                </div>
                <!-- End Schdule Day 2 -->

            </div>

        </div>

    </section>

    <!--==========================
        End  Event Schedule Section
        ============================-->

    <!--==========================
          Venue   Section
        ============================-->
    <section id="venue" class="wow fadeInUp">

        <div class="container-fluid">

            <div class="section-header">
                <h2>Event Venue</h2>
                <p>Event venue location info and gallery</p>
            </div>

            <div class="row no-gutters">
                <div class="col-lg-6 venue-map">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12097.433213460943!2d-74.0062269!3d40.7101282!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb89d1fe6bc499443!2sDowntown+Conference+Center!5e0!3m2!1smk!2sbg!4v1539943755621"
                        frameborder="0" style="border:0" allowfullscreen></iframe>
                </div>

                <div class="col-lg-6 venue-info">
                    <div class="row justify-content-center">
                        <div class="col-11 col-lg-8">
                            <h3>Downtown Conference Center, New York</h3>
                            <p>Iste nobis eum sapiente sunt enim dolores labore accusantium autem. Cumque beatae ipsam. Est
                                quae sit qui voluptatem corporis velit. Qui maxime accusamus possimus. Consequatur sequi et
                                ea suscipit enim nesciunt quia velit.</p>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <div class="container-fluid venue-gallery-container">
            <div class="row no-gutters">

                <div class="col-lg-3 col-md-4">
                    <div class="venue-gallery">
                        <a href="{{ asset('assets/img/venue-gallery/1.jpg') }}" class="venobox" data-gall="venue-gallery">
                            <img src="{{ asset('assets/img/venue-gallery/1.jpg') }}" alt="" class="img-fluid">
                        </a>
                    </div>
                </div>

                <div class="col-lg-3 col-md-4">
                    <div class="venue-gallery">
                        <a href="{{ asset('assets/img/venue-gallery/2.jpg') }}" class="venobox" data-gall="venue-gallery">
                            <img src="{{ asset('assets/img/venue-gallery/2.jpg') }}" alt="" class="img-fluid">
                        </a>
                    </div>
                </div>

                <div class="col-lg-3 col-md-4">
                    <div class="venue-gallery">
                        <a href="{{ asset('assets/img/venue-gallery/3.jpg') }}" class="venobox" data-gall="venue-gallery">
                            <img src="{{ asset('assets/img/venue-gallery/3.jpg') }}" alt="" class="img-fluid">
                        </a>
                    </div>
                </div>

                <div class="col-lg-3 col-md-4">
                    <div class="venue-gallery">
                        <a href="{{ asset('assets/img/venue-gallery/4.jpg') }}" class="venobox" data-gall="venue-gallery">
                            <img src="{{ asset('assets/img/venue-gallery/4.jpg') }}" alt="" class="img-fluid">
                        </a>
                    </div>
                </div>

                <div class="col-lg-3 col-md-4">
                    <div class="venue-gallery">
                        <a href="{{ asset('assets/img/venue-gallery/5.jpg') }}" class="venobox" data-gall="venue-gallery">
                            <img src="{{ asset('assets/img/venue-gallery/5.jpg') }}" alt="" class="img-fluid">
                        </a>
                    </div>
                </div>

                <div class="col-lg-3 col-md-4">
                    <div class="venue-gallery">
                        <a href="{{ asset('assets/img/venue-gallery/6.jpg') }}" class="venobox" data-gall="venue-gallery">
                            <img src="{{ asset('assets/img/venue-gallery/6.jpg') }}" alt="" class="img-fluid">
                        </a>
                    </div>
                </div>

                <div class="col-lg-3 col-md-4">
                    <div class="venue-gallery">
                        <a href="{{ asset('assets/img/venue-gallery/7.jpg') }}" class="venobox" data-gall="venue-gallery">
                            <img src="{{ asset('assets/img/venue-gallery/7.jpg') }}" alt="" class="img-fluid">
                        </a>
                    </div>
                </div>

                <div class="col-lg-3 col-md-4">
                    <div class="venue-gallery">
                        <a href="{{ asset('assets/img/venue-gallery/8.jpg') }}" class="venobox" data-gall="venue-gallery">
                            <img src="{{ asset('assets/img/venue-gallery/8.jpg') }}" alt="" class="img-fluid">
                        </a>
                    </div>
                </div>

            </div>
        </div>

    </section>

    <!--==========================
         End  Venue   Section
        ============================-->

    <!--==========================
          Sponsors Section
        ============================-->
    <section id="sponsors" class="section-with-bg wow fadeInUp">

        <div class="container">
            <div class="section-header">
                <h2>Sponsors</h2>
            </div>

            <div class="row no-gutters sponsors-wrap clearfix">

                <div class="col-lg-3 col-md-4 col-xs-6">
                    <div class="sponsor-logo">
                        <img src="{{ asset('assets/img/sponsors/1.png') }}" class="img-fluid" alt="">
                    </div>
                </div>

                <div class="col-lg-3 col-md-4 col-xs-6">
                    <div class="sponsor-logo">
                        <img src="{{ asset('assets/img/sponsors/2.png') }}" class="img-fluid" alt="">
                    </div>
                </div>

                <div class="col-lg-3 col-md-4 col-xs-6">
                    <div class="sponsor-logo">
                        <img src="{{ asset('assets/img/sponsors/3.png') }}" class="img-fluid" alt="">
                    </div>
                </div>

                <div class="col-lg-3 col-md-4 col-xs-6">
                    <div class="sponsor-logo">
                        <img src="{{ asset('assets/img/sponsors/4.png') }}" class="img-fluid" alt="">
                    </div>
                </div>

                <div class="col-lg-3 col-md-4 col-xs-6">
                    <div class="sponsor-logo">
                        <img src="{{ asset('assets/img/sponsors/5.png') }}" class="img-fluid" alt="">
                    </div>
                </div>

                <div class="col-lg-3 col-md-4 col-xs-6">
                    <div class="sponsor-logo">
                        <img src="{{ asset('assets/img/sponsors/6.png') }}" class="img-fluid" alt="">
                    </div>
                </div>

                <div class="col-lg-3 col-md-4 col-xs-6">
                    <div class="sponsor-logo">
                        <img src="{{ asset('assets/img/sponsors/7.png') }}" class="img-fluid" alt="">
                    </div>
                </div>

                <div class="col-lg-3 col-md-4 col-xs-6">
                    <div class="sponsor-logo">
                        <img src="{{ asset('assets/img/sponsors/8.png') }}" class="img-fluid" alt="">
                    </div>
                </div>

            </div>

        </div>

    </section>
    <!--==========================
        End   Sponsors Section
        ============================-->



@endsection
