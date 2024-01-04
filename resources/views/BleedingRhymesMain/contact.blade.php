@extends('layouts.app')
@section('content')
    <!--==========================
         Contact Us Section
        ============================-->
    <section id="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center mt-5">
                    <h2>Contact Us</h2>
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
                            <li class="breadcrumb-item"><a href="#contact">Contact Us</a></li>
                            <li class="breadcrumb-item">
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </section>
    <!--==========================
         End Contact Us Section
        ============================-->


    <!--==========================
          Contact Form Section
        ============================-->
    <section id="contact" class="section-bg wow fadeInUp">
        <div class="container">
            <div class="section-header">
                <h2>Contact Us</h2>
                <p>Nihil officia ut sint molestiae tenetur.</p>
            </div>

            <div class="row contact-info">
                <div class="col-md-4">
                    <div class="contact-address">
                        <i class="ion-ios-location-outline"></i>
                        <h3>Address</h3>
                        <address>P.O. BOX 2486-30200,
                            Kitale,
                            Kenya</address>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="contact-phone">
                        <i class="ion-ios-telephone-outline"></i>
                        <h3>Phone Number</h3>
                        <p><a href="tel: +254 768587711"> +254 768587711</a></p>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="contact-email">
                        <i class="ion-ios-email-outline"></i>
                        <h3>Email</h3>
                        <p><a href="mailto:ogotimoses9@gmail.com">ogotimoses9@gmail.com</a></p>
                    </div>
                </div>
            </div>

            <div class="form">
                <div id="sendmessage">Your message has been sent. Thank you!</div>
                <div id="errormessage"></div>
                <form action="" method="post" role="form" class="contactForm">
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <input type="text" name="name" class="form-control" id="name" placeholder="Your Name"
                                data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                            <div class="validation"></div>
                        </div>
                        <div class="form-group col-md-6">
                            <input type="email" class="form-control" name="email" id="email"
                                placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                            <div class="validation"></div>
                        </div>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject"
                            data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                        <div class="validation"></div>
                    </div>
                    <div class="form-group">
                        <textarea class="form-control" name="message" rows="5" data-rule="required"
                            data-msg="Please write something for us" placeholder="Message"></textarea>
                        <div class="validation"></div>
                    </div>
                    <div class="text-center">
                        <button type="submit">Send Message</button>
                    </div>
                </form>
            </div>
        </div>
    </section>
    <!-- #contact -->

    <!--==========================
          End Contact Form Section
        ============================-->


    <!--==========================
          Google Map Section
        ============================-->
    <section id="contact" class="section-bg wow fadeInUp mb-1">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="container vh-100">
                        <div class="row">
                            <div class="map" style="position: relative; height: 100vh; width: 100%;">
                                <iframe
                                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14244.79544520131!2d36.83189336547214!3d-1.294261508177392!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x18299378897966e8%3A0x18299378897966e8!2sKilimani%2C%20Nairobi%20County%2C%20Kenya!5e0!3m2!1sen!2sen!4v1650281657126!5m2!1sen!2sen"
                                    frameborder="0"
                                    style="border: 0; position: absolute; top: 0; left: 0; width: 100%; height: 100%;"
                                    allowfullscreen="" loading="lazy"></iframe>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--==========================
            End Google Map Section
        ============================-->
@endsection
