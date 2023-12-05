@extends('layouts.layout')
@section('content')
    <!-- Contact Start -->
    <div class="contact">
        <div class="container">
            <div class="section-header">
                <h6 class="danger">SIGN IN TO BOOK A TICKET</h6>
                <h2></h2>
            </div>
            <div class="row">
                <div class="col-md-8 text-center ml-4 mr-4">
                    <div class="contact-form">
                        <form class="form" action="#" method="post">
                            <div class="form-group">
                                <input type="email" class="form-control" name="email" placeholder="Your Email Address" required="required" />
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control" name="password" placeholder="Your Password" required="required" />
                            </div>
                            <div>
                                <button class="btn " type="submit" name="sign-in">Sign In</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact End -->
@endsection
