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
                        <form action="/login" method="POST">
                            <div class="form-group">
                                <input type="email" class="form-control" name="email" placeholder="Your Email Address" required="required" value={{old('email')}}>
                                @error('email')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control" name="password" placeholder="Your Password" required="required" value={{old('password')}}>
                                @error('password')
                                    <div class="text-danger">{{ $message}}</div>
                                @enderror
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
