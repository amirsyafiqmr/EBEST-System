@extends('layouts.layout')

@section('content')
    <!-- **********************************************************************************************************************************************************
        MAIN CONTENT
        *********************************************************************************************************************************************************** -->
    <!--main content start-->
    <section id="main-content">
        <section class="wrapper">
            <div class="border-head">
                <center><h1><b>BOOKING TRACKING</b></h1><center>
            </div>
            <br>
            <!-- BASIC FORM ELELEMNTS -->
            <div class="row mt">
                <div class="col-lg-12">
                    <div class="form-panel">
                        <h4 class="mb"><i class="fa fa-angle-right"></i> Enter your invoice number to track your booking. Please enter invoice number without (-). </h4>
                        <form class="form-horizontal style-form" method="get">
                            <table width="1304">
                                <th width="216"></th>
                                <th width="1013">  <div class="form-group">
                                        <center><input type="text" class="form-control">
                                            <span class="help-block" align="left">Enter your invoice number here!</span>
                                            <br>
                                            <a href="/custTracking" class="btn btn-round btn-success"> Track! </a></center>
                                    </div></th>
                                <th width="59"></th></table>
                        </form>
                    </div>
                </div>
            </div>
            <!-- /row -->
        </section>
        <!-- /wrapper -->
    </section>
    <!-- /MAIN CONTENT -->
    <!--main content end-->
    <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
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
