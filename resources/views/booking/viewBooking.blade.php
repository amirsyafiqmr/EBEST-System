@extends('layout')

@section('content')

    {{--    @auth--}}

    <section id="main-content">
        <section class="wrapper">
            <!--div class="center">
              <!--div class="col-lg-9 main-chart">
                <!--CUSTOM CHART START -->
            <div class="border-head">
                <center><h1><b>MADETILL EVENT MANAGEMENT EQUIPMENT</b></h1></center>
            </div>
            <br>
            <div class="header-ebest">

            </div>

            <div class="border-head">
            </div>

            <!--div class="row mt">
        <!-- RECENT BOOKING START HERE -->
            <h3><i class="fa fa-angle-right"></i> Recent Booking</h3>
            <!--div class="row mb">
              <!-- page start-->
            <div class="content-panel">
                <div class="adv-table">
                    <table cellpadding="0" cellspacing="0" border="0" class="display table table-bordered" id="hidden-table-info">
                        <thead>
                        <tr>
                            <th class="centered" width="100">Booking Number & Tracking Number</th>
                            <th class="centered">Date Event</th>
                            <th class="centered">Event Venue</th>
                            <th class="centered" >Total Price</th>
                            <th class="centered" >Delivery Date</th>
                            <th class="centered" >Collection Date</th>
                            <th class="centered" width="100"> </th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($booking->reverse() as $book)
                            <tr class="gradeC">
                                <td class="center">{{ $book->book_id }}</td>
                                <td class="center">{{ $book->eventDate }}</td>
                                <td class="center">{{ $book->venue }}</td>
                                <td class="center">RM {{ $book->totalPrice }}</td>
                                <td class="center">{{ $book->deliveryDate }}</td>
                                <td class="center">{{ $book->collectDate }}</td>
                                <td class="hidden-phone">
                                    <a class="btn btn-primary" href="{{ route('book.detail', $book->book_id) }}" class="nav-link {{ (request()->is('/detail/booking/*')) ? 'active show-sub' : '' }}">View</a>
                                    <a class="btn btn-success" href="{{ route('updateBooking', $book->book_id) }}" class="nav-link {{ (request()->is('/update/booking/*')) ? 'active show-sub' : '' }}">Update</a>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>

                </div>
                <!-- /row -->
            </div>
            <!-- /col-lg-9 END SECTION MIDDLE -->
            <!--
            </col-lg-3 -->
        </section>
    </section>
    <!--main content end-->
    <!--footer start-->
    {{--    @else--}}
    {{--        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">--}}
    {{--            @csrf--}}
    {{--        </form>--}}
    {{--    @endauth--}}

@endsection

