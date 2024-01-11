@extends('layouts.app')

@section('content')

<!-- About Section -->
<section id="about">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center mt-5">
                <h2>Book a Service</h2>
                <p>Sed nam ut dolor qui repellendus iusto odit. Possimus inventore eveniet accusamus error amet eius aut accusantium et.</p>
            </div>
        </div>
    </div>
</section>

<!-- Book Service Section -->
<section id="buy-tickets" class="section-with-bg wow fadeInUp">
    <div class="container">

        <div class="section-header">
            <h2>Book Service</h2>
            <p>Velit consequatur consequatur inventore iste fugit unde omnis eum aut.</p>
        </div>

        <div class="col-lg-12 col-md-12 d-flex">
            <div class="col-md-8">
                <div class="container">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>Service</th>
                                <th>Price</th>
                                <th>Delete</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php $total = 0 @endphp

                            @if (session('book'))
                                @foreach (session('book') as $id => $details)
                                    <tr>
                                        <td>{{ $details['service_name'] }}</td>
                                        <td>
                                            <i>Kes</i>
                                            {{ $details['service_charges'] }}
                                        </td>
                                        <td class="actions">
                                            <a class="btn btn-outline-danger btn-sm delete-product"><i class="fa fa-trash-o"></i></a>
                                        </td>
                                    </tr>
                                    @php $total += $details['service_charges'] * $details['quantity'] @endphp
                                @endforeach
                            @endif
                        </tbody>
                        <tfoot>
                            <tr>
                                <td colspan="2" class="#">
                                    <strong><i>Total</i></strong>
                                </td>
                                <td colspan="2">
                                    <i>Kes</i> {{ $total }}
                                </td>
                            </tr>
                            <tr>
                                <td colspan="3" class="text-right">
                                    <a href="{{ url('/book-now') }}" class="btn btn-danger">Book Now</a>
                                </td>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>

    </div>
</section>

@endsection
