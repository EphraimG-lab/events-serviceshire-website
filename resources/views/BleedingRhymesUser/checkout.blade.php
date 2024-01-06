@extends('layouts.app')
@section('content')

    <!--==========================
                  About Section
                ============================-->
    <section id="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center mt-5">
                    <h2>Ticket Shopping Cart</h2>
                    <p>
                        Sed nam ut dolor qui repellendus iusto odit. Possimus inventore
                        eveniet accusamus error amet eius aut accusantium et. Non odit
                        consequatur repudiandae sequi ea odio molestiae. Enim possimus
                        sunt inventore in est ut optio sequi unde.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!--==========================
                  Buy Ticket Section
                ============================-->

    <section id="buy-tickets" class="section-with-bg wow fadeInUp">
        <div class="col-lg-12 col-md-12 d-flex text-center">          
            <div class="col-md-6">
                {{-- Checkout goes Here --}}
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Ticket's /Service's</th>
                            <th>Price</th>
                        </tr>
                    </thead>
                    <tbody>
                                <tr>
                                    <td data-th="Product">
                                    </td>
                                </tr>
                                <tr>
                                    
                                </tr>
                    </tbody>
                    <tfoot>
                        <tr>
                            <td colspan="1" class="#">
                                <strong><i>Sub-Total</i></strong>
                            </td>
                            <td colspan="2">
                                <strong><i>Kes</i></strong> {{ $total }}
                            </td>
                        </tr>
                        <tr>
                            <td colspan="5" class="text-right">
                                <a href="{{ url('/payment') }}" class="btn btn-danger">
                                    Confirm Order</a>
                            </td>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>

    </section>
@endsection
