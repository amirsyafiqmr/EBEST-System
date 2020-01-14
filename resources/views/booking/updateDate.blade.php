@extends('staff.layouts')

@section('content')

    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="https://unpkg.com/gijgo@1.9.13/js/gijgo.min.js" type="text/javascript"></script>
    <link href="https://unpkg.com/gijgo@1.9.13/css/gijgo.min.css" rel="stylesheet" type="text/css" />

    <!-- Favicons -->
    <link href="../../../../temp1/img/favicon.png" rel="icon">
    <link href="../../../../temp1/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Bootstrap core CSS -->
    <link href="../../../../temp1/lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!--external css-->
    <link href="../../../../temp1/lib/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="../../../../temp1/lib/bootstrap-fileupload/bootstrap-fileupload.css" />
    <link rel="stylesheet" type="text/css" href="../../../../temp1/lib/bootstrap-datepicker/css/datepicker.css" />
    <link rel="stylesheet" type="text/css" href="../../../../temp1/lib/bootstrap-daterangepicker/daterangepicker.css" />
    <link rel="stylesheet" type="text/css" href="../../../../temp1/lib/bootstrap-timepicker/compiled/timepicker.css" />
    <link rel="stylesheet" type="text/css" href="../../../../temp1/lib/bootstrap-datetimepicker/datertimepicker.css" />
    <!-- Custom styles for this template -->
    <link href="../../../../temp1/css/style.css" rel="stylesheet">
    <link href="../../../../temp1/css/style-responsive.css" rel="stylesheet">

    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="https://unpkg.com/gijgo@1.9.13/js/gijgo.min.js" type="text/javascript"></script>
    <link href="https://unpkg.com/gijgo@1.9.13/css/gijgo.min.css" rel="stylesheet" type="text/css" />

    <!-- **********************************************************************************************************************************************************
        MAIN CONTENT
*********************************************************************************************************************************************************** -->
    <!--main content start-->
    <section id="main-content">
        <section class="wrapper">
            <div class="border-head">
                <center><h1><b>UPDATE CUSTOMER DELIVERY AND COLLECTION DATE OF BOOKING</b></h1></center>
            </div>


            <!-- BASIC FORM ELELEMNTS -->
            <div class="col-lg-12">
                <div class="form-panel">

                    <h4 class="mb"><i class="fa fa-angle-right"></i> Enter delivery date and collection date for customer booking</h4>
{{--                    <div class="header-ebest">--}}
{{--                        <p class="centered"><img src="../../../temp1/img/ship.png" class="img-rectangle" height= "160" width="300"></p>--}}
{{--                    </div>--}}
                    <form method="post" action="{{ route('dateUpdate', $bookings->book_id) }}" class="form-horizontal style-form"
                          enctype="multipart/form-data">

                        @csrf
                        @method('PATCH')


                        <div class="form-group">
                            <label class="col-sm-2 col-sm-2 control-label">Delivery Date and Time</label>
                            <div class="col-md-4">
{{--                                <input size="16" type="text" name="deliveryDate" value="{{ $bookings->deliveryDate }}" readonly class="form_datetime form-control">--}}
                                <input id="input" width="312" name="deliveryDate" value="{{ $bookings->deliveryDate }}" />
                                <script>
                                    $('#input').datetimepicker({ footer: true, modal: true,
                                        datepicker: {
                                            disableDates:  function (date) {
                                                const currentDate = new Date();
                                                return date > currentDate ? true : false;
                                            }
                                        }});
                                </script>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-2 col-sm-2 control-label">Collection Date and Time</label>
                                <div class="col-md-4">
{{--                                    <input size="16" type="text" name="collectDate" value="{{ $bookings->collectDate }}" readonly class="form_datetime form-control">--}}
                                    <input id="input1" width="312" name="collectDate" value="{{ $bookings->collectDate }}" />
                                    <script>
                                        $('#input1').datetimepicker({ footer: true, modal: true,
                                            datepicker: {
                                                disableDates:  function (date) {
                                                    const currentDate = new Date();
                                                    return date > currentDate ? true : false;
                                                }
                                            }});
                                    </script>
                                </div>
                        </div>
                        <button class="btn btn-round btn-success" type="submit">Confirm</button>
                    </form>
                </div>
            </div>
        </section>
    </section>
    <!--main content end-->

    <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
    <!--footer start-->
    <footer class="site-footer">
        <div class="text-center">
            <p>
                &copy; Copyrights <strong>Madetill Event Management Sdn. Bhd.</strong>. All Rights Reserved
            </p>
            <div class="credits">
               mem@madetillevent.com.my</div>
            <a href="#" class="go-top">
                <i class="fa fa-angle-up"></i>
            </a>
        </div>
    </footer>
    <!--footer end-->

    <!-- js placed at the end of the document so the pages load faster -->
    <script src="../../../../temp1/lib/jquery/jquery.min.js"></script>
    <script src="../../../../temp1/lib/bootstrap/js/bootstrap.min.js"></script>
    <script class="include" type="text/javascript" src="../../../../temp1/lib/jquery.dcjqaccordion.2.7.js"></script>
    <script src="../../../../temp1/lib/jquery.scrollTo.min.js"></script>
    <script src="../../../../temp1/lib/jquery.nicescroll.js" type="text/javascript"></script>
    <!--common script for all pages-->
    <script src="../../../../temp1/lib/common-scripts.js"></script>
    <!--script for this page-->
    <script src="../../../../temp1/lib/jquery-ui-1.9.2.custom.min.js"></script>
    <script type="text/javascript" src="../../../../temp1/lib/bootstrap-fileupload/bootstrap-fileupload.js"></script>
    <script type="text/javascript" src="../../../../temp1/lib/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
    <script type="text/javascript" src="../../../../temp1/lib/bootstrap-daterangepicker/date.js"></script>
    <script type="text/javascript" src="../../../../temp1/lib/bootstrap-daterangepicker/daterangepicker.js"></script>
    <script type="text/javascript" src="../../../../temp1/lib/bootstrap-datetimepicker/js/bootstrap-datetimepicker.js"></script>
    <script type="text/javascript" src="../../../../temp1/lib/bootstrap-daterangepicker/moment.min.js"></script>
    <script type="text/javascript" src="../../../../temp1/lib/bootstrap-timepicker/js/bootstrap-timepicker.js"></script>
    <script src="../../../../temp1/lib/advanced-form-components.js"></script>

@endsection
