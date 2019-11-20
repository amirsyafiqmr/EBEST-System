@extends('layout')

@section('content')


    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="https://unpkg.com/gijgo@1.9.13/js/gijgo.min.js" type="text/javascript"></script>
    <link href="https://unpkg.com/gijgo@1.9.13/css/gijgo.min.css" rel="stylesheet" type="text/css" />

    <section id="main-content">
        <section class="wrapper">
            <div class="col-lg-12">
                <div class="form-panel">
                    @include('messages')
                <div class="row top-15">
                    <div class="col-md-4 order-md-2 mb-4">
                        <h4 class="d-flex justify-content-between align-items-center mb-3">
                            <span class="text-muted">Your List</span>
                            <span class="badge badge-secondary badge-pill">{{Cart::getContent()->count()}}</span>
                        </h4>
                        <ul class="list-group mb-3">
                            @foreach(Cart::getContent() as $product)
                                <li class="list-group-item d-flex justify-content-between lh-condensed">
                                    <div>
                                        <h6 class="my-0">{{$product->name}}</h6>
                                        <small class="text-muted">{{$product->quantity . ' x RM' .  $product->price}}</small>
                                    </div>
                                    <span class="text-muted">{{'RM' . $product->price * $product->quantity}}</span>
                                </li>
                            @endforeach
                            <li class="list-group-item d-flex justify-content-between">
                                <span>Total (RM)</span>
                                <strong>{{Cart::getSubTotal()}}</strong>
                            </li>
                            <li><form action="{{route('cart.clear')}}" method="POST" class="card p-2">
                                    @csrf
                                    <br><center><button type="submit" class="btn btn-danger" >Clear List</button></center>
                                </form>
                            </li>
                        </ul>
                    </div>

                    <div class="col-md-8 order-md-1">
                        <h4 class="mb-3">Booking Details</h4>
                        <form class="needs-validation" method="post" action="{{ route('test.checkout') }}" novalidate>
                            @csrf


                            <hr class="mb-4">
                            <div class="mb-3">
                                <label for="">Venue Event</label>
                                <textarea name="venue" class="form-control @error('venue') is-invalid @enderror" id="venue" rows="5" > </textarea>
                                @error('venue')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                <div class="validate"></div>
                            </div>

                            <hr class="mb-4">
                            <div class="form-group">
                                <label class="control-label col-md-3">Event Date</label>
                                <div class="col-md-4">
                                    <input id="input" width="312" name="eventDate"  />
                                    <script>
                                        $('#input').datetimepicker({ footer: true, modal: true });
                                    </script>
                                </div>
                            </div><br><br>

                            <hr class="mb-4">
                            <div class="mb-3">
                                <label for="">Organizer Phone Number</label>
                                <input type="text"  name="organizerPno" class="form-control @error('organizerPno') is-invalid @enderror">
                                @error('organizerPno')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <hr class="mb-4">
                            <button class="btn btn-primary btn-lg btn-block" type="submit">Continue to book</button>
                        </form>
                    </div>
                </div>
                </div>
            </div>

        </section>
    </section>

    <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>

    <!--main content end-->
    <!--footer start-->
    <footer class="site-footer">
        <div class="text-center">
            <p>
                &copy; Copyrights <strong>Madetill Event Management Sdn. Bhd.</strong>. All Rights Reserved
            </p>
            <div class="credits">
                mem@madetillevent.com.my</div>
            <a href="" class="go-top">
                <i class="fa fa-angle-up"></i>
            </a>
        </div>
    </footer>
    <!--footer end-->
@endsection
