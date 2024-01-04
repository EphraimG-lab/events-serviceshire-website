@extends('layouts.app')
@section('content')

    <!--==========================
      About Section
    ============================-->
    <section id="about">
        <div class="container">
          <div class="row">
            <div class="col-lg-12 text-center mt-5">
              <h2>Buy Tickets to Book a slot</h2>
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
      <div class="container">
        <table id="example" class="table table-bordered">
          <thead>
              <tr>
                  <th>Product</th>
                  <th>Price</th>
                  <th>Total</th>
                  <th></th>
              </tr>
          </thead>
          <tbody>
              @php $total = 0 @endphp
              @if(session('cart'))
                  @foreach(session('cart') as $id => $details)
                       
                      <tr rowId="{{ $id }}">
                          <td data-th="Product">
                              <div class="row">
                                  <div class="col-sm-3 hidden-xs"><img src="{{ $details['image'] }}" class="card-img-top"/></div>
                                  <div class="col-sm-9">
                                      <h4 class="nomargin">{{ $details['name'] }}</h4>
                                  </div>
                              </div>
                          </td>
                          <td data-th="Price">Kes{{ $details['price'] }}</td>
                          
                          <td data-th="Subtotal" class="text-center"></td>
                          <td class="actions">
                              <a class="btn btn-outline-danger btn-sm delete-product"><i class="fa fa-trash-o"></i></a>
                          </td>
                      </tr>
                  @endforeach
              @endif
          </tbody>
          <tfoot>
              <tr>
                  <td colspan="5" class="text-right">
                      <a href="{{ url('/buy-tickets') }}" class="btn btn-primary"><i class="fa fa-angle-left"></i> Continue Shopping</a>
                      <button class="btn btn-danger">Checkout</button>
                  </td>
              </tr>
          </tfoot>
      </table>
      @endsection
         
      @section('scripts')
      <script type="text/javascript">
         
          // $(".edit-cart-info").change(function (e) {
          //     e.preventDefault();
          //     var ele = $(this);
          //     $.ajax({
          //         url: '{{ route('/buy-tickets') }}',
          //         method: "patch",
          //         data: {
          //             _token: '{{ csrf_token() }}', 
          //             id: ele.parents("tr").attr("rowId"), 
          //         },
          //         success: function (response) {
          //            window.location.reload();
          //         }
          //     });
          // });
         
          // $(".delete-product").click(function (e) {
          //     e.preventDefault();
         
          //     var ele = $(this);
         
          //     if(confirm("Do you really want to delete?")) {
          //         $.ajax({
          //             url: '{{ route('/buy-tickets') }}',
          //             method: "DELETE",
          //             data: {
          //                 _token: '{{ csrf_token() }}', 
          //                 id: ele.parents("tr").attr("rowId")
          //             },
          //             success: function (response) {
          //                 window.location.reload();
          //             }
          //         });
          //     }
          // });
         
      </script>
      </div>
      
    </section>
@endsection