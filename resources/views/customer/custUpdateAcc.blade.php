@extends('layout')

@section('content')

    <!-- **********************************************************************************************************************************************************
        MAIN CONTENT
*********************************************************************************************************************************************************** -->
    <!--main content start-->
    <section id="main-content">
        <section class="wrapper">
            <div class="border-head">
                <center><h1><b>MANAGE ACCOUNT FORM</b></h1></center>
            </div>
            <!-- BASIC FORM ELELEMNTS -->
                <div class="col-lg-12">
                    <div class="form-panel">
                        <h4 class="mb"><i class="fa fa-angle-right"></i> Enter details here! for update your account</h4>
                        <form method="post" action="{{ route('custUpdate', $customer->cust_id) }}" class="form-horizontal style-form"
                              enctype="multipart/form-data">

                            @csrf
                            @method('PATCH')


                            <div class="form-group">
                                <label class="col-sm-2 col-sm-2 control-label">Name</label>
                                <div class="col-sm-10">
                                    <input type="text" name="name" class="form-control" disabled value="{{ $customer->name }}">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-2 col-sm-2 control-label">Address</label>
                                <div class="col-sm-10">
                                    <textarea name="address" class="form-control @error('address') is-invalid @enderror" id="address" rows="5" data-rule="required" data-msg="{{ $customer->address }}">{{ $customer->address }}</textarea>
                                    @error('address')
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
                                    <input type="text" name="phoneNo" class="form-control @error('phoneNo') is-invalid @enderror" value="{{ $customer->phoneNo }}">
                                    @error('phoneNo')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 col-sm-2 control-label">Email</label>
                                <div class="col-sm-10">
                                    <input type="text" name="email"  class="form-control" disabled value="{{ $customer->email }}">
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
                                <label class="col-sm-2 col-sm-2 control-label">Company Name</label>
                                <div class="col-sm-10">
                                    <input type="text" name="companyName" class="form-control @error('companyName') is-invalid @enderror" value="{{ $customer->companyName }}">
                                    @error('companyName')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 col-sm-2 control-label">Company Address</label>
                                <div class="col-sm-10">
                                    <textarea name="companyAddress" class="form-control @error('companyAddress') is-invalid @enderror" id="contact-message" rows="5" data-rule="required" data-msg="{{ $customer->companyAddress }}">{{ $customer->companyAddress }}</textarea>
                                    @error('companyAddress')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                    <div class="validate"></div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 col-sm-2 control-label">Company Phone Number</label>
                                <div class="col-sm-10">
                                    <input type="text" name="companyPhoneNo" class="form-control @error('companyPhoneNo') is-invalid @enderror" value="{{ $customer->companyPhoneNo }}">
                                    @error('companyPhoneNo')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 col-sm-2 control-label">Company Email</label>
                                <div class="col-sm-10">
                                    <input type="text" name="companyEmail" class="form-control @error('companyEmail') is-invalid @enderror" value="{{ $customer->companyEmail }}">
                                    @error('companyEmail')
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
    <br><br><br><br><br>
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
