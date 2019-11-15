@extends('staff.layouts')

@section('content')

    <!-- **********************************************************************************************************************************************************
        MAIN CONTENT
*********************************************************************************************************************************************************** -->
    <!--main content start-->
    <section id="main-content">
        <section class="wrapper">
            @if($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <div class="border-head">
                <center><h1><b>CREATE EQUIPMENT FORM</b></h1></center>
            </div>
            <!-- BASIC FORM ELELEMNTS -->

            <div class="col-lg-12">
                <div class="form-panel">
                    <h4 class="mb"><i class="fa fa-angle-right"></i> Enter details here to create the equipment</h4>
                    <form method="post" action="{{ route('createOnequipment') }}" class="form-horizontal style-form"
                          enctype="multipart/form-data">

                        @csrf


                        <div class="form-group">
                            <label class="col-sm-2 col-sm-2 control-label">Equipment Name</label>
                            <div class="col-sm-10">
                                <input type="text" name="equipName" class="form-control @error('equipName') is-invalid @enderror">
                                @error('equipName')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-2 col-sm-2 control-label">Equipment Type</label>
                            <div class="col-sm-10">
                                <input type="text" name="equipType" class="form-control @error('equipType') is-invalid @enderror">
                                @error('equipType')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-2 col-sm-2 control-label">Equipment Unit Price: RM</label>
                            <div class="col-sm-10">
                                <input type="text" name="equipPrice" class="form-control @error('equipPrice') is-invalid @enderror">
                                @error('equipPrice')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-2 col-sm-2 control-label">Equipment Quantity</label>
                            <div class="col-sm-10">
                                <input type="text" name="equipQuantity"  class="form-control @error('equipQuantity') is-invalid @enderror">
                                @error('equipQuantity')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col col-md-3">Select Equipment Image</label>
                            <div class="col-12 col-md-9">
                                <input type="file" name="image" class="form-control @error('image') is-invalid @enderror" value="{{ old('image') }}">
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
    <!--main content end-->
    <br><br><br><br><br><br><br><br><br><br><br>
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
            <a href="/create/equipment" class="go-top">
                <i class="fa fa-angle-up"></i>
            </a>
        </div>
    </footer>
    <!--footer end-->

@endsection
