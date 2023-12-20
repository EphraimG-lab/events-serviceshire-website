@extends('layouts.app')
@section('content')
    
    <section id="about">
        <div class="container">
          <div class="row">
            <div class="col-lg-12 text-center mt-5">
              <h2>Our Services</h2>
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
                  <li class="breadcrumb-item"><a href="#">Our Services</a></li>                 
                </ol>
              </nav>
            </div>
          </div>
        </div>
      </section>
    <!--==========================
      Services Section
    ============================-->
    <section id="hotels" class="section-with-bg wow fadeInUp">

      <div class="container">
        <div class="section-header">
          <h2>Our Services</h2>
          <p>Best In Town</p>
        </div>

        <div class="row">

          <div class="col-lg-4 col-md-6">
            <div class="hotel">
              <div class="hotel-img">
                <img src="{{ asset('assets/images-now/service-5.jpg ') }}" alt="Service 1" class="img-fluid">
              </div>
              <h3><a href="#">Event Organizing</a></h3>
              <div class="stars">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
              </div>
              <p>Leave the planning to us and enjoy a memorable and hassle- free event. From concept to execution, we've got you covered.</p>
           <div class="m-3">
            <a class="btn btn-primary" href="/book-now">Book Now</a>
           </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6">
            <div class="hotel">
              <div class="hotel-img">
                <img src="{{ asset('assets/images-now/service-4.jpg ') }}" alt="Service 2" class="img-fluid">
              </div>
              <h3><a href="#">Spoken Word Poetry</a></h3>
              <div class="stars">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star-half-full"></i>
              </div>
              <p>Experience the power of words through captivating performances that inspire, provoke thought, and leave a lasting impact.</p>
              <div class="m-3">
                <a class="btn btn-primary" href="/book-now">Book Now</a>
               </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6">
            <div class="hotel">
              <div class="hotel-img">
                <img src="{{ asset('assets/images-now/service-3.jpg ') }}" alt="Service 3" class="img-fluid">
              </div>
              <h3><a href="#">Corporate MC</a></h3>
              <div class="stars">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
              </div>
              <p>Ensure a seamless event flow and engage your audience with our professional and experienced Matter of Ceremonies</p>
              <div class="m-3">
                <a class="btn btn-primary" href="/book-now">Book Now</a>
               </div></div>
           
          </div>


          <div class="col-lg-4 col-md-6">
            <div class="hotel">
              <div class="hotel-img">
                <img src="{{ asset('assets/images-now/service-2.jpg ') }}" alt="Service 3" class="img-fluid">
              </div>
              <h3><a href="#">Marketing</a></h3>
              <div class="stars">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
              </div>
              <p>Boost your brand's visibility, reach your target audience, and achieve your business goals with our tailored marketing strategies.</p>
              <div class="m-3">
                <a class="btn btn-primary" href="/book-now">Book Now</a>
               </div></div>
           
          </div>


          <div class="col-lg-4 col-md-6">
            <div class="hotel">
              <div class="hotel-img">
                <img src="{{ asset('assets/images-now/service-1.jpg ') }}" alt="Service 3" class="img-fluid">
              </div>
              <h3><a href="#">Voice Overs</a></h3>
              <div class="stars">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
              </div>
              <p>Make your project come alive with professional voice over services that captivate and engage your audience.</p>
              <div class="m-3">
                <a class="btn btn-primary" href="/book-now">Book Now</a>
               </div></div>
           
          </div>
        </div>
      </div>

    </section>
    <!--==========================
      Services Section
    ============================-->

 @endsection
