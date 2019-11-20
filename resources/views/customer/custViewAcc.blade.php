@extends('layout')



@section('content')

    <!-- **********************************************************************************************************************************************************
        MAIN CONTENT
*********************************************************************************************************************************************************** -->
    <!--main content start-->
    <section id="main-content">
        <section class="wrapper site-min-height">



            <div class="border-head">
                <center><h1><b>CUSTOMER ACCOUNT</b></h1><div></div></center>
                    </div>

            @include('messages')
            <div class="row">
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
                                <li>Name: {{ $customera->name }}</li>
                                <li>Address: {{ $customera->address }}</li>
                                <li>Phone Number: {{ $customera->phoneNo }}</li>
                                <li>Gender: {{ $customera->gender }}</li>
                                <li>Company Name: {{ $customera->companyName }}</li>
                                <li>Company Address: {{ $customera->companyAddress }}</li>
                                <li>Company Phone Number: {{ $customera->companyPhoneNo }}</li>
                                <li>Company Email: {{ $customera->companyEmail }}</li>
                            </ul>
                            <a class="btn btn-theme" href="{{ route('custViewUpdate', Auth::guard()->user()->cust_id) }}" class="nav-link {{ (request()->is('custUpdateAcc/*/update')) ? 'active show-sub' : '' }}">Update</a>
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
    <footer class="site-footer">
        <div class="text-center">
            <p>
                &copy; Copyrights <strong>Madetill Event Management Sdn. Bhd.</strong>. All Rights Reserved
            </p>
            <div class="credits">
                mem@madetillevent.com.my</div>
            <a href="custMain.html" class="go-top">
                <i class="fa fa-angle-up"></i>
            </a>
        </div>
    </footer>
@endsection
