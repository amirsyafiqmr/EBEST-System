@extends('staff.layouts')

@section('content')

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
                <center><h1><b>CREATE TRACKING FORM</b></h1></center>
            </div>


            <!-- BASIC FORM ELELEMNTS -->
            <div class="col-lg-12">
                <div class="form-panel">

                    <h4 class="mb"><i class="fa fa-angle-right"></i> Enter details here to create the tracking</h4>
                    <div class="header-ebest">
                        <p class="centered"><img src="../../../temp1/img/ship.png" class="img-rectangle" height= "160" width="300"></p>
                    </div>
                    <form method="post" action="{{ route('createOneTracking', $trackings->book_id) }}" class="form-horizontal style-form"
                          enctype="multipart/form-data">

                        @csrf


                        <div class="form-group">
                            <label class="col-sm-2 col-sm-2 control-label">Tracking Location</label>
                            <div class="col-sm-10">
                                <textarea name="trackLocation" class="form-control @error('trackLocation') is-invalid @enderror" id="trackLocation" rows="5" > </textarea>
                                @error('trackLocation')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                <div class="validate"></div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-2 col-sm-2 control-label">Tracking Date and Time</label>
                            <div class="col-sm-10">
                                <input id="input" width="312" name="dateTimeTrack"  />
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

                        <button class="btn btn-round btn-success" type="submit">Confirm</button>

                    </form>
                </div>
            </div>



            <!-- /row -->

        </section>
        <!-- /wrapper -->
    </section>
    <!-- /MAIN CONTENT -->
    <!--main content end-->

    <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
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
