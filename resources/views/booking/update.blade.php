@extends('layout')

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
                <center><h1><b>UPDATE BOOKING FORM</b></h1></center>
            </div>


            <!-- BASIC FORM ELELEMNTS -->
            <div class="col-lg-12">
                @include('messages')
                <div class="form-panel">
                    <h4 class="mb"><i class="fa fa-angle-right"></i> Enter details here! for update your booking</h4>
                    <form method="post" action="{{ route('bookUpdate', $bookings->book_id) }}" class="form-horizontal style-form"
                          enctype="multipart/form-data">

                        @csrf
                        @method('PATCH')


                        <div class="form-group">
                            <label class="col-sm-2 col-sm-2 control-label">Venue</label>
                            <div class="col-sm-10">
                                <input type="text" name="venue" class="form-control @error('venue') is-invalid @enderror" value="{{ $bookings->venue }}">
                                @error('venue')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

{{--                        <div class="form-group">--}}
{{--                            <label class="control-label col-md-3">Event Date</label>--}}
{{--                            <div class="col-md-4">--}}
{{--                                <div class="input-group date form_datetime-component">--}}
{{--                                    <input type="text" name="eventDate" class="form-control" readonly="" size="16" value="{{ $bookings->eventDate}}">--}}
{{--                                    <span class="input-group-btn">--}}
{{--                                            <button type="button" class="btn btn-theme date-set"><i class="fa fa-calendar"></i></button>--}}
{{--                                        </span>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}

                        <div class="form-group">
                            <label class="col-sm-2 col-sm-2 control-label">Event Date</label>
                            <div class="col-sm-10">
                                <input id="input" width="312" name="eventDate" value="{{ $bookings->eventDate }}" />
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
                            <label class="col-sm-2 col-sm-2 control-label">Organizer Phone Number</label>
                            <div class="col-sm-10">
                               <input type="text"  name="organizerPno" class="form-control @error('organizerPno') is-invalid @enderror" value="{{ $bookings->organizerPno}}">
                                @error('organizerPno')
                                <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                @enderror
                            </div>
                        </div>

{{--                        <div class="form-group">--}}
{{--                            <label class="col-sm-2 col-sm-2 control-label">Equipment Type</label>--}}
{{--                            <div class="col-sm-10">--}}
{{--                                <input type="text" name="equipType" class="form-control @error('equipType') is-invalid @enderror" value="{{ $equipment->equipType }}">--}}
{{--                                @error('equipType')--}}
{{--                                <span class="invalid-feedback" role="alert">--}}
{{--                                        <strong>{{ $message }}</strong>--}}
{{--                                    </span>--}}
{{--                                @enderror--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                        <div class="form-group">--}}
{{--                            <label class="col-sm-2 col-sm-2 control-label">Equipment Price Per Unit: RM </label>--}}
{{--                            <div class="col-sm-10">--}}
{{--                                <input type="text" name="equipPrice" class="form-control @error('equipPrice') is-invalid @enderror" value="{{ $equipment->equipPrice }}">--}}
{{--                                @error('equipPrice')--}}
{{--                                <span class="invalid-feedback" role="alert">--}}
{{--                                        <strong>{{ $message }}</strong>--}}
{{--                                    </span>--}}
{{--                                @enderror--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                        <div class="form-group">--}}
{{--                            <label class="col-sm-2 col-sm-2 control-label">Equipment Quantity</label>--}}
{{--                            <div class="col-sm-10">--}}
{{--                                <input type="text" name="equipQuantity" class="form-control @error('equipQuantity') is-invalid @enderror" value="{{ $equipment->equipQuantity }}">--}}
{{--                                @error('equipQuantity')--}}
{{--                                <span class="invalid-feedback" role="alert">--}}
{{--                                        <strong>{{ $message }}</strong>--}}
{{--                                    </span>--}}
{{--                                @enderror--}}
{{--                            </div>--}}
{{--                        </div>--}}

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
    <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
    <!--main content end-->
    <!--footer start-->
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
    <!--footer end-->

@endsection






