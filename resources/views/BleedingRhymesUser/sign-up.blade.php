@extends('layouts.app')
@section('content')
    <!--==========================
                  About Section
                ============================-->
    <section id="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center mt-5">
                    <h2>Sign Up</h2>
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
                            <li class="breadcrumb-item"><a href="#">Sign Up</a></li>
                            </li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </section>

    <!--==========================
                  Sign In Section
                ============================-->
    <section id="contact" class="section-bg wow fadeInUp">
        <div class="container">
            <div class="section-header">
                <h2>Sign Up</h2>
                <p>Sign Up to create you account.</p>
            </div>
            <div class="col-lg-8 mt-5 text-center">
                <div class="form ">
                    <div id="sendmessage">Sign Up</div>
                    <div id="errormessage"></div>
                    <form action="/store" method="POST" role="form">


                        @csrf

                        <div class="form-row">
                            <div class="form-group col-md-8">
                                <input type="text" name="name" class="form-control" id="name"
                                    placeholder="Your Full Name"   value="{{old('name')}}">

                                    @error('name')
                                    <div class="text-danger"> {{ $message }} </div>
                                @enderror


                            </div>
                            <div class="form-group col-md-8">
                                <input type="text" name="username" class="form-control" id="username"
                                    placeholder="Your Username"   value="{{old('username')}}" >
                                @error('username')
                                    <div class="text-danger"> {{ $message }} </div>
                                @enderror
                            </div>
                            <div class="form-group col-md-8">
                                <input type="email" name="email" class="form-control" id="email"
                                    placeholder="Your Email Address"   value="{{old('email')}}" >
                                @error('email')
                                    <div class="text-danger"> {{ $message }} </div>
                                @enderror
                            </div>
                            <div class="form-group col-md-8">
                                <input type="number" name="phone" class="form-control" id="phone"
                                    placeholder="Your Phone Contact"   value="{{old('phone')}}">
                                @error('phone')
                                    <div class="text-danger"> {{ $message }} </div>
                                @enderror
                            </div>
                            <div class="form-group col-md-8">
                                <input type="password" name="password" class="form-control" id="password"
                                    placeholder="Password"   value="{{old('password')}}">

                                @error('password')
                                    <div class="text-danger"> {{ $message }} </div>
                                @enderror
                            </div>
                            <div class="form-group col-md-8">
                                <input type="password" name="password_confirmation" class="form-control"
                                    id="confirmPassword" placeholder="Confirm Password"   value="{{old('password_confirmation')}}">
                                    @error('password_confirmation')
                                    <div class="text-danger"> {{ $message }} </div>
                                @enderror
                            </div>
                            <div class="form-group col-md-8">
                                <input type="text" name="company" class="form-control" id="company"
                                    placeholder="Company Name [optional]"   value="{{old('company')}}">
                                @error('company')
                                    <div class="text-danger"> {{ $message }} </div>
                                @enderror
                            </div>
                            <div class="form-group col-md-8">
                                <input type="text" name="city" class="form-control" id="city"
                                    placeholder="Your Town/City Location"   value="{{old('city')}}">
                                @error('city')
                                    <div class="text-danger"> {{ $message }} </div>
                                @enderror
                            </div>
                        </div>
                        <div class="text-center">
                            <button type="submit" name="register">Sign Up</button>
                        </div>
                        <div class="text-center">
                            <p>
                                Already have an account ? <a href="/sign-in">Sign In</a>
                            </p>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- #Sign In -->
@endsection
