@extends('staff.layouts')

@section('content')
    <!-- **********************************************************************************************************************************************************
        MAIN CONTENT
*********************************************************************************************************************************************************** -->
    <!--main content start-->
    <section id="main-content">
        <section class="wrapper site-min-height">
            <div class="border-head">
                <center><h1><b>STAFF ACCOUNT</b></h1><div></div></center>
            </div>
            <div class="row">
                @include('messages')
                <div class="col-lg-12">
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">

                    </div>
                    <!-- end col-4 -->

                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                        <div class="custom-box">
                            <div class="servicetitle">
                                <h4>Your Details</h4>
                                <hr>
                            </div>
                            <br>
                            <ul class="pricing">
                                <li>Name: {{ $staffa->staffName }}</li>
                                <li>Address: {{ $staffa->staffAddress }}</li>
                                <li>Phone Number: {{ $staffa->staffPhoneNo }}</li>
                                <li>Designation: {{ $staffa->staffDesignation }}</li>
                            </ul>
                            <a class="btn btn-theme" href="{{ route('staffViewUpdate', Auth::guard()->user()->staff_id) }}" class="nav-link {{ (request()->is('staffUpdateAcc/*/update')) ? 'active show-sub' : '' }}">Update</a>
                        </div>
                        <!-- end custombox -->
                    </div>
                    <!-- end col-4 -->
                </div>
                <!--  /col-lg-12 -->
            </div>
            <!--  /row -->
        </section>
        <!-- /wrapper -->
    </section>
    <!-- /MAIN CONTENT -->
    <!--main content end-->
    <!--footer start-->

    <br>
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

