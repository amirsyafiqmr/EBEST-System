@extends('staff.layouts')

@section('content')

    {{--    @auth--}}

    <section id="main-content">
        <section class="wrapper">
            <!--div class="center">
              <!--div class="col-lg-9 main-chart">
                <!--CUSTOM CHART START -->
            <div class="border-head">
                <center><h1><b>MADETILL EVENT MANAGEMENT CUSTOMER BOOKING</b></h1></center>
            </div>
            <br>
            <div class="header-ebest">

            </div>
            <br>

            <div class="border-head">
            </div>

            <!--div class="row mt">
        <!-- LIST BOOKING START HERE -->
            <h3><i class="fa fa-angle-right"></i> List Of Customer Booking</h3>
            <!--div class="row mb">
              <!-- page start-->
            <div class="content-panel">
                <div class="adv-table">
                    <table cellpadding="0" cellspacing="0" border="0" class="display table table-bordered" id="hidden-table-info">
                        <thead>
                        <tr>
                            <th class="hidden-phone">Booking Number</th>
                            <th class="hidden-phone">Customer Name</th>
                            <th class="hidden-phone">Event Date</th>
                            <th class="hidden-phone">Event Venue</th>
                            <th class="hidden-phone">Delivery Date</th>
                            <th class="hidden-phone">Collection Date</th>
                            <th class="centered">Booking Status</th>
                            <th class="hidden-phone"> </th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($books->reverse() as $book)
                            <tr class="gradeC">
                                <td class="hidden-phone">{{ $book->book_id }}</td>
                                <td class="hidden-phone">{{ $book->customer->name }}</td>
                                <td class="hidden-phone">{{ $book->eventDate }}</td>
                                <td class="hidden-phone">{{ $book->venue }}</td>
                                <td class="hidden-phone">{{ $book->deliveryDate }}</td>
                                <td class="hidden-phone">{{ $book->collectDate }}</td>
                                <td class="centered">{{ $book->bookingStatus }}</td>
                                <td class="hidden-phone">
{{--                                    <a class="btn btn-primary" href="{{ route('createTracking', $detail->book_id) }}" class="nav-link {{ (request()->is('/create/tracking/*')) ? 'active show-sub' : '' }}">Create Tracking</a>--}}
                                    <a class="btn btn-success" href="{{ route('staffBookview', $book->book_id) }}" class="nav-link {{ (request()->is('/staffDetailView/booking/*')) ? 'active show-sub' : '' }}">View Details</a>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </section>
    </section>

    <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
    <!--footer start-->
    <footer class="site-footer">
        <div class="text-center">
            <p>
                &copy; Copyrights <strong>Madetill Event Management Sdn. Bhd.</strong>. All Rights Reserved
            </p>
            <div class="credits">mem@madetillevent.com.my</div>
            <a href="#" class="go-top">
                <i class="fa fa-angle-up"></i>
            </a>
        </div>
    </footer>
    <!--footer end-->
@endsection

