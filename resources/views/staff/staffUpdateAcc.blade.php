@extends('staff.layouts')

@section('content')

    <!-- **********************************************************************************************************************************************************
        MAIN CONTENT
*********************************************************************************************************************************************************** -->
    <!--main content start-->
    <section id="main-content">
        <section class="wrapper">
            <div class="border-head">
                <center><h1><b>STAFF MANAGE ACCOUNT FORM</b></h1></center>
            </div>
            <!-- BASIC FORM ELELEMNTS -->
            <div class="col-lg-12">
                <div class="form-panel">
                    <h4 class="mb"><i class="fa fa-angle-right"></i> Enter details here! for update your account</h4>
                    <form method="post" action="{{ route('staffUpdate', $staff->staff_id) }}" class="form-horizontal style-form"
                          enctype="multipart/form-data">

                        @csrf
                        @method('PATCH')


                        <div class="form-group">
                            <label class="col-sm-2 col-sm-2 control-label">Name</label>
                            <div class="col-sm-10">
                                <input type="text" name="staffName" class="form-control @error('staffName') is-invalid @enderror" value="{{ $staff->staffName }}">
                                @error('staffName')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-2 col-sm-2 control-label">Address</label>
                            <div class="col-sm-10">
                                <textarea name="staffAddress" class="form-control @error('staffAddress') is-invalid @enderror" id="staffAddress" rows="5" data-rule="required" data-msg="{{ $staff->staffAddress }}">{{ $staff->staffAddress }}</textarea>
                                @error('staffAddress')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                <div class="validate"></div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 col-sm-2 control-label">Contact Number</label>
                            <div class="col-sm-10">
                                <input type="text" name="staffPhoneNo" class="form-control @error('staffPhoneNo') is-invalid @enderror" value="{{ $staff->staffPhoneNo }}">
                                @error('staffPhoneNo')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 col-sm-2 control-label">Email</label>
                            <div class="col-sm-10">
                                <input type="text" name="staffEmail"  class="form-control @error('staffEmail') is-invalid @enderror"  value="{{ $staff->staffEmail }}">
                                @error('staffEmail')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-2 col-sm-2 control-label">Update Password</label>
                            <div class="col-sm-10">
                                <input type="password" name="password" class="form-control @error('password') is-invalid @enderror">
                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-2 col-sm-2 control-label">Confirmation Update Password</label>
                            <div class="col-sm-10">
                                <input type="password" name="password_confirmation" class="form-control @error('password_confirmation') is-invalid @enderror">
                                @error('password_confirmation')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-2 col-sm-2 control-label">Designation</label>
                            <div class="col-sm-10">
                                <input type="text" name="staffDesignation" class="form-control @error('staffDesignation') is-invalid @enderror"  value="{{ $staff->staffDesignation }}">
                                @error('staffDesignation')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
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

    <br><br><br><br><br><br><br><br><br><br>
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
