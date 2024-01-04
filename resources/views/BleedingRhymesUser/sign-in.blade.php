@extends('layouts.app')
@section('content')
    <!--==========================
              About Section
            ============================-->
    <section id="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center mt-5">
                    <h2>Sign In</h2>
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
                            <li class="breadcrumb-item"><a href="#">Sign In</a></li>
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
                <h2>Sign In</h2>
                <p>Sign In for more services.</p>
            </div>
            <div class="col-lg-8 mt-5 text-center">
                <div class="form ">
                    <div id="sendmessage">Sign In</div>
                    <div id="errormessage"></div>
                    <form action="/authenticate" method="post" role="form">

                        @csrf

                        <div class="form-row">
                            <div class="form-group col-md-8">
                                <input type="text" name="username" class="form-control" id="username"
                                    placeholder="Your Username">

                                @error('username')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror

                            </div>
                            <div class="form-group col-md-8">
                                <input type="password" class="form-control" name="password" id="password"
                                    placeholder="Your Password">

                                @error('password')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror

                            </div>
                        </div>
                        <div class="text-center">
                            <button type="submit">Sign In</button>
                        </div>
                        <div class="text-center">
                            Don't have an account?
                            <a href="/sign-up"> Sign Up</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- #Sign In -->
@endsection
