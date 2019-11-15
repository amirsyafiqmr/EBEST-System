@extends('staff.layouts')

@section('content')

    @auth

    <section id="main-content">
        <section class="wrapper">
            <!--div class="center">
              <!--div class="col-lg-9 main-chart">
                <!--CUSTOM CHART START -->
            <div class="border-head">
                <center><h1><b>WELCOME TO E-BEST SYSTEM MADETILL EVENT MANAGEMENT SDN. BHD.</b></h1></center>
            </div>
            <br>
            <div class="header-ebest">
                <p class="centered"><a href="http://www.madetillevent.com.my/index.html"><img src="temp1/img/madetill2.jpg" class="img-rectangle" height= "350" width="1000"></a></p>

            </div>
            <br>
            <br>
            <br>
            <div class="border-head">
            </div>

            <!--div class="row mt">
        <!-- RECENT BOOKING START HERE -->
            <h3><i class="fa fa-angle-right"></i> List Of Customer</h3>
            <!--div class="row mb">
              <!-- page start-->
            <div class="content-panel">
                <div class="adv-table">
                    <table cellpadding="0" cellspacing="0" border="0" class="display table table-bordered" id="hidden-table-info">
                        <thead>
                        <tr>
                            <th class="hidden-phone">Customer Name</th>
                            <th class="hidden-phone">Customer Address</th>
                            <th class="hidden-phone">Customer Phone Number</th>
                            <th class="hidden-phone">Customer Email</th>
                            <th class="hidden-phone">Company Name</th>
                            <th class="hidden-phone">Company Phone Number</th>
                            <th class="hidden-phone">Company Email</th>

                        </tr>
                        </thead>
                        <tbody>
                        @foreach($staffs as $staff)
                        <tr class="gradeX">
                            <td class="hidden-phone">{{ $staff->name }}</td>
                            <td class="hidden-phone">{{ $staff->address }}</td>
                            <td class="hidden-phone">{{ $staff->phoneNo }}</td>
                            <td class="hidden-phone">{{ $staff->email }}</td>
                            <td class="hidden-phone">{{ $staff->companyName }}</td>
                            <td class="hidden-phone">{{ $staff->companyPhoneNo }}</td>
                            <td class="hidden-phone">{{ $staff->companyEmail }}</td>

                        </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
                <!-- /row -->
            </div>
            <!-- /col-lg-9 END SECTION MIDDLE -->
            <!--
            </col-lg-3 -->
            </div>
            </row>
        </section>
    </section>
    <!--main content end-->
    <!--footer start-->
@else
    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
        @csrf
    </form>
    @endauth

    <br><br><br><br><br><br><br><br><br><br><br><br><br><br>
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
            <a href="/staffMain" class="go-top">
                <i class="fa fa-angle-up"></i>
            </a>
        </div>
    </footer>
    <!--footer end-->

@endsection

