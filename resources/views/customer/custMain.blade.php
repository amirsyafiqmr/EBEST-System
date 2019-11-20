@extends('layout')

  @section('content')


    <!-- **********************************************************************************************************************************************************
        MAIN CONTENT
*********************************************************************************************************************************************************** -->
    <!--main content start-->
    <section id="main-content">
      <section class="wrapper">
        <!--div class="center">
          <!--div class="col-lg-9 main-chart">
            <!--CUSTOM CHART START -->
            <div class="border-head">
              <center><h1><b>WELCOME TO E-BEST SYSTEM MADETILL EVENT MANAGEMENT SDN. BHD.</b></h1></center>
            </div>
            <br><br><br>
            <div class="header-ebest">
               <p class="centered"><a href="http://www.madetillevent.com.my/index.html"><img src="med/images/M12.jpg" class="img-rectangle" height= "350" width="1000"></a></p>
            </div>
            <br>
            <br>
            <br><br><br><br><br>
            <div class="border-head">
              <center><h4><b>Welcome to the Madetill Event Management online booking system. You can making booking here to rental our equipment. Customer satisfied is our goal. Click book now to making a booking...</b></h4></center>
                <center><h4><b>For any inquries please call 011-10142018 (ARIF) and 017-3639073 (HAYATI)</b></h4></center>
                    <center><h4><b>mem@madetillevent.com.my</b></h4></center>
                <center><h4><b>Visit our Facebook, Twitter and Instagram to knew our latest news!</b></h4></center>
                <br>
                <center><a href="/view/booking" class="btn btn-primary btn-lg">Book Now!</a></center>
            </div>

{{--            <!--div class="row mt">--}}
{{--        <!-- RECENT BOOKING START HERE -->--}}
{{--        <h3><i class="fa fa-angle-right"></i> Recent Booking</h3>--}}
{{--        <!--div class="row mb">--}}
{{--          <!-- page start-->--}}
{{--          <div class="content-panel">--}}
{{--            <div class="adv-table">--}}
{{--              <table cellpadding="0" cellspacing="0" border="0" class="display table table-bordered" id="hidden-table-info">--}}
{{--                <thead>--}}
{{--                  <tr>--}}
{{--                    <th class="hidden-phone">Booking No.</th>--}}
{{--                    <th class="hidden-phone">Date</th>--}}
{{--                    <th class="hidden-phone">Customer Name</th>--}}
{{--                    <th class="hidden-phone">Company</th>--}}
{{--                    <th class="hidden-phone">Status Payment</th>--}}
{{--                    <th class="hidden-phone"> </th>--}}
{{--                  </tr>--}}
{{--                </thead>--}}
{{--                <tbody>--}}
{{--                @foreach($customers as $customer)--}}
{{--                  <tr class="gradeX">--}}
{{--                    <td class="hidden-phone">0111</td>--}}
{{--                    <td class="hidden-phone">11/9/2019</td>--}}
{{--                    <td class="hidden-phone"> {{ $customer->name }}</td>--}}
{{--                    <td class="hidden-phone">{{ $customer->companyName }}</td>--}}
{{--                    <td class="hidden-phone">Paid</td>--}}
{{--                    <td class="hidden-phone"><a class="btn btn-primary" href="/custBookingInfo">View</a></td>--}}
{{--                  </tr>--}}
{{--                  @endforeach--}}
{{--                </tbody>--}}
{{--              </table>--}}
{{--            </div>--}}
{{--            <!-- /row -->--}}
{{--          </div>--}}
{{--          <!-- /col-lg-9 END SECTION MIDDLE -->--}}
          <!--
          </col-lg-3 -->
        </div>
        </row>
      </section>
    </section>

    <br><br><br><br><br><br>
    <!--main content end-->
    <!--footer start-->
    <footer class="site-footer">
        <div class="text-center"><center>
            <p>
                &copy; Copyrights <strong>Madetill Event Management Sdn. Bhd.</strong>. All Rights Reserved
            </p>
            <div class="credits">
                mem@madetillevent.com.my</div>
            <a href=" " class="go-top">
                <i class="fa fa-angle-up"></i>
            </a>
            </center></div>
    </footer>
    <!--footer end-->
@endsection

