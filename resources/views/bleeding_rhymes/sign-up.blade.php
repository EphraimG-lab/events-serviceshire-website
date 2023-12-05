@extends('layouts.layout')
@section('content')
    <!-- Contact Start -->
    <div class="contact">
        <div class="container">
            <div class="section-header">
                <h6 class="danger">SIGN UP TO  CREATE AN ACCOUNT</h6>
                <h2></h2>
            </div>
            <div class="row">
                <div class="col-md-8 text-center ml-4 mr-4">
                    <div class="contact-form">
                        <form class="form" action="#" method="post">
                           <div class="form-group">
                                <input type="text" class="form-control" name="firstname" placeholder="Your First name" required="required">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" name="lastname" placeholder="Your Last name" required="required">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" name="username" placeholder="Username" required="required">
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control" name="email" placeholder="Your Email Address" required="required">
                            </div>

                            <div class="form-group">
                                <input type="text" class="form-control" name="contact" placeholder="contact e.g. +254 723 4678 99" required="required">
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control" name="password" placeholder="Your Password" required="required">
                            </div>
                            <div class="form-group">
                                <input type="confirm_password" class="form-control" name="confirm_password" placeholder="Confirm Password" required="required">
                            </div>
                            <div>
                                <button class="btn " type="submit" name="sign-up">Sign Up</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact End -->
@endsection
