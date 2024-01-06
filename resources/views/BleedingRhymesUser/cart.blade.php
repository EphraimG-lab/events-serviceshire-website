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
        <div class="col-lg-12 col-md-12 d-flex">
            <div class="col-md-8">
                <div class="container">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>Ticket's /Service's</th>
                                <th>Offering</th>
                                <th>Price</th>
                                <th>Delete</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php $total = 0 @endphp

                            @if (session('cart'))
                                @foreach (session('cart') as $id => $details)
                                    <tr rowId="{{ $id }}">
                                        <td data-th="Product">
                                            {{ $details['ticket_name'] }}
                                        </td>
                                        <td data-th="Price">
                                            {{ $details['offering_1'] }},<br>
                                            {{ $details['offering_2'] }},<br>
                                            {{ $details['offering_3'] }},<br>
                                            {{ $details['offering_4'] }},<br>
                                            {{ $details['offering_5'] }},<br>
                                            {{ $details['offering_6'] }}
                                        </td>
                                        <td data-th="Price"><i>Kes</i> {{ $details['price'] }}</td>
                                        <td class="actions">
                                            <a class="btn btn-outline-danger btn-sm delete-product"><i
                                                    class="fa fa-trash-o"></i></a>
                                        </td>
                                    </tr>
                                @endforeach
                            @endif
                        </tbody>
                        @if (session('cart'))
                            @foreach (session('cart') as $details)
                                @php $total += $details['price'] * $details['quantity'] @endphp
                            @endforeach
                        @endif
                        <tfoot>
                            <tr>
                                <td colspan="2" class="#">
                                   <i>Sub-Total</i>
                                </td>
                                <td colspan="2">
                                    <i>Kes</i> {{ $total }}
                                </td>
                            </tr>
                            <tr>
                                <td colspan="5" class="text-right">
                                    <a href="{{ url('/buy-tickets') }}" class="btn btn-primary"><i
                                            class="fa fa-angle-left"></i>
                                        Continue Shopping</a>
                                </td>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
            <div class="col-md-4">
                 {{-- Checkout goes Here --}}
                 <table class="table table-bordered">
                  <thead>
                      <tr>
                          <th>Ticket's /Service's</th>
                          <th>Price</th>
                      </tr>
                  </thead>
                  <tbody>
                      @php $total = 0 @endphp

                      @if (session('cart'))
                          @foreach (session('cart') as $id => $details)
                              <tr rowId="{{ $id }}">
                                  <td data-th="Product">
                                      {{ $details['ticket_name'] }}
                                  </td>
                                  <td data-th="Price"><i>Kes</i> {{ $details['price'] }}</td>
                              </tr>
                          @endforeach
                      @endif
                  </tbody>
                  @if (session('cart'))
                      @foreach (session('cart') as $details)
                          @php $total += $details['price'] * $details['quantity'] @endphp
                      @endforeach
                  @endif
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
                              <a href="{{ url('/order') }}" class="btn btn-danger">
                                  Place Order</a>
                          </td>
                      </tr>
                  </tfoot>
              </table>
            </div>
        </div>

    </section>
@endsection

@section('scripts')
    <script>
        $(".edit-cart-info").change(function(e) {
            e.preventDefault();
            var ele = $(this);
            $.ajax({
                url: '{{ route('update.sopping.cart') }}',
                method: "patch",
                data: {
                    _token: '{{ csrf_token() }}',
                    id: ele.parents("tr").attr("rowId"),
                },
                success: function(response) {
                    window.location.reload();
                }
            });
        });

        $(".delete-product").click(function(e) {
            e.preventDefault();

            var ele = $(this);

            if (confirm("Do you really want to delete?")) {
                $.ajax({
                    url: '{{ route('delete.cart.product') }}',
                    method: "DELETE",
                    data: {
                        _token: '{{ csrf_token() }}',
                        id: ele.parents("tr").attr("rowId")
                    },
                    success: function(response) {
                        window.location.reload();
                    }
                });
            }
        });
    </script>
@endsection
