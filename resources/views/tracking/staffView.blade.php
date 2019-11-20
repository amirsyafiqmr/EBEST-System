@extends('staff.layouts')

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
            <br>
            <br>
            <br>
            <div class="border-head">
            </div>

            <!--div class="row mt">
        <!-- RECENT BOOKING START HERE -->
            <h3><i class="fa fa-angle-right"></i> List Of Customer Booking</h3>
            <!--div class="row mb">
              <!-- page start-->
            @include('messages')
            <div class="content-panel">
                <div class="adv-table">
                    <table cellpadding="0" cellspacing="0" border="0" class="display table table-bordered" id="hidden-table-info">
                        <thead>
                        <tr>
                            <th class="hidden-phone">Booking Number</th>
                            <th class="hidden-phone">Customer Name</th>
                            <th class="hidden-phone">Event Date</th>
                            <th class="hidden-phone">Event Venue</th>
                            <th class="hidden-phone"> </th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($details as $detail)
                            <tr class="gradeC">
                                <td class="hidden-phone">{{ $detail->book_id }}</td>
                                <td class="hidden-phone">{{ $detail->customer->name }}</td>
                                <td class="hidden-phone">{{ $detail->eventDate }}</td>
                                <td class="hidden-phone">{{ $detail->venue }}</td>
                                <td class="hidden-phone">
                                    <a class="btn btn-primary" href="{{ route('createTracking', $detail->book_id) }}" class="nav-link {{ (request()->is('/create/tracking/*')) ? 'active show-sub' : '' }}">Create Tracking</a>
                                    <a class="btn btn-success" href="{{ route('trackViewUpdate', $detail->book_id) }}" class="nav-link {{ (request()->is('/update/tracking/*')) ? 'active show-sub' : '' }}">Update Tracking</a>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                    {{$details->links()}}
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
    <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
    <!--footer start-->
    <footer class="site-footer">
        <div class="text-center">
            <p>
                &copy; Copyrights <strong>Madetill Event Management Sdn. Bhd.</strong>. All Rights Reserved
            </p>
            <div class="credits">
                <!--
      You are NOT allowed to delete the credit link to TemplateMag with free version.
      You can delete the credit link only if you bought the pro version.
      Buy the pro version with working PHP/AJAX contact form: https://templatemag.com/dashio-bootstrap-admin-template/
                  Licensing information: https://templatemag.com/license/
                -->
                mem@madetillevent.com.my</div>
            <a href="#" class="go-top">
                <i class="fa fa-angle-up"></i>
            </a>
        </div>
    </footer>
    <!--footer end-->
@endsection

