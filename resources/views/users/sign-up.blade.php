@extends('layouts.layout')
@section('content')
    <!-- Contact Start -->
    <div class="contact">
        <div class="container">
            <div class="section-header">
                <h6 class="danger">SIGN UP TO CREATE AN ACCOUNT</h6>
                <h2></h2>
            </div>
            <div class="row">
                <div class="col-md-8 text-center ml-4 mr-4">
                    <div class="contact-form">
                        <form class="form" action="/register" method="POST">

                            @csrf

                            <div class="form-group">

                                <input type="text" class="form-control" name="firstname" placeholder="Your First name"
                                    required="required" value="{{old('firstname')}}">

                                @error('firstname')
                                    <div class ="text-danger">{{ $message }}</p>
                                @enderror

                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" name="lastname" placeholder="Your Last name"
                                    required="required"  value="{{old('lastname')}}">


                                @error('lastname')
                                    <div class ="text-danger">{{ $message }}</p>
                                @enderror

                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" name="username" placeholder="Username"
                                    required="required"  value="{{old('username')}}">

                                @error('username')
                                    <div class ="text-danger">{{ $message }}</p>
                                @enderror

                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control" name="email" placeholder="Your Email Address"
                                    required="required"  value="{{old('email')}}">

                                @error('email')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <input type="text" class="form-control" name="contact"
                                    placeholder="contact e.g. +254 723 4678 99" required="required" value="{{old('contact')}}">

                                @error('contact')
                                    <div class ="text-danger">{{ $message }}</p>
                                @enderror

                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control" name="password" placeholder="Your Password"
                                    required="required"  value={{old('password')}}>

                                @error('password')
                                    <div class ="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control" name="password_confirmation"
                                    placeholder="Confirm Password" required="required" value="{{old('password_confirmation')}}">

                                @error('password_confirmation')
                                    <div class ="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                            <div>
                                <button class="btn " type="submit" name="sign-up">Sign Up</button>

                            </div>
                            <span>
                                <div class ="text-danger">
                                    Already have an account ? <a href="/sign-in">Sign In</a>
                                </p>
                            </span>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact End -->
@endsection
