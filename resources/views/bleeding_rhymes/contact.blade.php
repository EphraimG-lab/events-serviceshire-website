@extends('layouts.layout')
@section('content')
    <!-- Contact Start -->
    <div class="contact">
        <div class="container">
            <div class="section-header">
                <h6 class="danger">YOU CAN GET INTOUCH WITH US THROUGH OUR SOCIAL MEDIA HANDLES OR SEND A SHORT
                    MESSAGE THROUGH THE FOLLLOWING</h6>
                <h2></h2>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="contact-form">
                        <form>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <input type="text" class="form-control" placeholder="Your Name" required="required" />
                                </div>
                                <div class="form-group col-md-6">
                                    <input type="email" class="form-control" placeholder="Your Email"
                                        required="required" />
                                </div>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Subject" required="required" />
                            </div>
                            <div class="form-group">
                                <textarea class="form-control" rows="6" placeholder="Message" required="required"></textarea>
                            </div>
                            <div><button class="btn" type="submit">Send Message</button></div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact End -->
@endsection
