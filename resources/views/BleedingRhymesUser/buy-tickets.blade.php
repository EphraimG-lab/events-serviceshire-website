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

        <div class="section-header">
          <h2>Buy Tickets</h2>
          <p>Velit consequatur consequatur inventore iste fugit unde omnis eum aut.</p>
        </div>

        <div class="row">
          

          @foreach($tickets as $ticket)

          <div class="col-lg-4">
            <div class="card mb-5 mb-lg-0">
              <div class="card-body">
                <h5 class="card-title text-muted text-uppercase text-center">{{ $ticket->ticket_name }}</h5>
                <h6 class="card-price text-center">Kes {{ $ticket->price }}</h6>
                <hr>
                <ul class="fa-ul">
                  <li><span class="fa-li"><i class="fa fa-check"></i></span>{{ $ticket->offering_1}}</li>
                  <li><span class="fa-li"><i class="fa fa-check"></i></span>{{ $ticket->offering_2}}</li>
                  <li><span class="fa-li"><i class="fa fa-check"></i></span>{{ $ticket->offering_3}}</li>
                  <li class="text-muted"><span class="fa-li"><i class="fa fa-times"></i></span>{{ $ticket->offering_4}}</li>
                  <li class="text-muted"><span class="fa-li"><i class="fa fa-times"></i></span>{{ $ticket->offering_5}}</li>
                  <li class="text-muted"><span class="fa-li"><i class="fa fa-times"></i></span>{{ $ticket->offering_6}}</li>
                </ul>
                <hr>
                <div class="text-center">
                  <p class="btn-holder"><a href="{{ route('buy.ticket', $ticket->id) }}" class="btn btn-outline-danger">Buy Now</a> </p>
                </div>
              </div>
            </div>
          </div>
          
          @endforeach
        </div>
      </div>
    </section>
@endsection