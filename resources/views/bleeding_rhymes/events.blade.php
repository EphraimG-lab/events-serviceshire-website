@extends('layouts.layout')
@section('content')
    <!-- Header End -->
    <!-- Service Start -->
    <x-service>
        <x-container-div>
            <div class="section-header">
                <h2>Events</h2>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="service-item">
                        <img src="{{ asset('assets/img/service-1.jpg') }}" alt="Service">
                        <h3>Event Organizing </h3>
                        <p>
                            Leave the planning to us and enjoy a memorable and hassle- free event. From concept to
                            execution, we've got you covered.
                        </p>
                        <a class="btn" href="">Learn More</a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="service-item">
                        <img src="{{ asset('assets/img/service-2.jpg') }}" alt="Service">
                        <h3>Spoken Word Poetry Performance</h3>
                        <p>
                            Experience the power of words through captivating performances that inspire, provoke
                            thought, and leave a lasting impact.
                        </p>
                        <a class="btn" href="">Learn More</a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="service-item">
                        <img src="{{ asset('assets/img/service-3.jpg') }}" alt="Service">
                        <h3>Corporate MC</h3>
                        <p>
                            Ensure a seamless event flow and engage your audience with our professional and
                            experienced Matter of Ceremonies
                        </p>
                        <a class="btn" href="">Learn More</a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="service-item">
                        <img src="{{ asset('assets/img/service-4.jpg') }}" alt="Service">
                        <h3>Marketing</h3>
                        <p>
                            Boost your brand's visibility, reach your target audience, and achieve your business
                            goals with our tailored marketing strategies.
                        </p>
                        <a class="btn" href="">Learn More</a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="service-item">
                        <img src="{{ asset('assets/img/service-5.jpg') }}" alt="Service">
                        <h3>Voice Overs</h3>
                        <p>
                            Make your project come alive with professional voice over services that captivate and
                            engage your audience.
                        </p>
                        <a class="btn" href="">Learn More</a>
                    </div>
                </div>
            </div>
        </x-container-div>
    </x-service>
    <!-- Service End -->
@endsection
