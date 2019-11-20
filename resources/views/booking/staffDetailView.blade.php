@extends('staff.layouts')

@section('content')
    <!-- **********************************************************************************************************************************************************
        MAIN CONTENT
        *********************************************************************************************************************************************************** -->
    <!--main content start-->
    <section id="main-content">
        <section class="wrapper">
            <div class="col-lg-12 mt">
                <div class="row content-panel">
                    <div class="col-lg-10 col-lg-offset-1">
                        <div class="invoice-body">
                            <div class="pull-left">
                                <h1>MADETILL EVENT MANAGEMENT SDN. BHD.</h1>
                                <address>
                                    <strong></strong><br>
                                    No. 2, Jalan Taming 2A, Kaw.Perindustrian Taming Jaya,
                                    43300 Balakong, Selangor.<br>
                                    <abbr title="Phone">P:</abbr> +(60)3-8961 5751/5752/9076
                                </address>
                            </div>
                            <!-- /pull-left -->
                            <div class="pull-right">
                                <h2>delivery order</h2>
                            </div>
                            <!-- /pull-right -->
                            <div class="clearfix"></div>
                            <br>
                            <br>
                            <br>
                            <div class="row">
                                <div class="col-md-9">
                                    <h4>{{$booking->customer->companyName}}</h4>
                                    <address>
                                        {{$booking->customer->companyAddress}}<br>
                                        <abbr title="Phone">P:</abbr>{{$booking->customer->companyPhoneNo}}<br><br>

                                        ATTN: Tuan/Puan {{$booking->customer->name}}<br>
                                        TEL: {{$booking->customer->phoneNo}}<br>
                                        ACC NO: {{$booking->customer->cust_id}}

                                    </address>
                                </div>
                                <!-- /col-md-9 -->
                                <div class="col-md-3">
                                    <br>
                                    <div>
                                        <div class="pull-left"> INVOICE NO : </div>
                                        <div class="pull-right"> {{ $booking->book_id }} </div>
                                        <div class="clearfix"></div>
                                    </div>
                                    <div>
                                        <!-- /col-md-3 -->
                                        <div class="pull-left"> INVOICE DATE : </div>
                                        <div class="pull-right"> {{ $booking->created_at }} </div>
                                        <div class="clearfix"></div>
                                    </div>
                                    <div>
                                        <div class="pull-left"> DO NO : </div>
                                        <div class="pull-right"> {{ $booking->book_id }}  </div>
                                        <div class="clearfix"></div>
                                    </div>
                                    <div>
                                        <div>
                                            <!-- /col-md-3 -->
                                            <div class="pull-left"> TERMS : </div>
                                            <div class="pull-right"> COD </div>
                                            <div class="clearfix"></div>
                                        </div>
                                        <br>

                                        <div>
                                            <!-- /col-md-3 -->
                                            <div class="pull-left"> DEPOSIT : </div>
                                            <div class="pull-right"> <strong>{{$booking->status}}</strong></div>
                                            <div class="clearfix"></div>
                                        </div>
                                        <!-- /row -->
                                        <br>
                                        <div class="well well-small green">
                                            <div class="pull-left"> Total Price : </div>
                                            <div class="pull-right">RM {{ $booking->totalPrice }}</div>
                                            <div class="clearfix"></div>
                                        </div>
                                    </div>
                                    <!-- /invoice-body -->
                                </div>
                                <div class="adv-table">
                                    <table cellpadding="0" cellspacing="0" border="0" class="display table " id="hidden-table-info">
                                        <thead>
                                        <tr>
                                            <th class="hidden-phone"> </th>
                                            <th class="hidden-phone">DESCRIPTION</th>
                                            <th class="hidden-phone">QUANTITY</th>
                                            <th class="hidden-phone">UNIT PRICE</th>
                                            <th class="hidden-phone">TOTAL PRICE</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td class="hidden-phone"> </td>
                                            <td class="hidden-phone"><center><strong>DELIVERY: {{ $booking->deliveryDate }} <br><br> EVENT : {{ $booking->eventDate }}<br>
                                                        VENUE : {{ $booking->venue }} <br><br> COLLECTION: {{ $booking->collectDate }}</strong></center></td>
                                            <td class="hidden-phone"> </td>
                                            <td class="hidden-phone"> </td>
                                            <td class="hidden-phone"> </td>
                                        </tr>
                                        @foreach($equipment_customers as $detail)
                                            <tr>
                                                <td class="hidden-phone"> </td>
                                                <td class="hidden-phone">{{$detail->equipment->equipName}}</td>
                                                <td class="hidden-phone">{{ $detail->quantity }}</td>
                                                <td class="hidden-phone">{{ $detail->quantity }}</td>
                                                <td class="hidden-phone">{{'RM'. $detail->quantity * $detail->equipment->equipPrice}}</td>
                                            </tr>
                                        @endforeach
                                        <tr>
                                            <td class="hidden-phone"> </td>
                                            <td class="hidden-phone"><center><h4>Terms and Conditions</h4>
                                                    <p>Thank you for your business. We do expect payment within 14 days, so please process this invoice within that time. </p></center></td>
                                            <td class="hidden-phone"> </td>
                                            <td class="hidden-phone"><strong> </strong></td>
                                            <td class="hidden-phone"> </td>
                                        </tr>
                                        <tr>
                                            <td class="hidden-phone"> </td>
                                            <td class="hidden-phone"> </td>
                                            <td class="hidden-phone"> </td>
                                            <td class="hidden-phone"> <div class="well well-small green"><strong>Total</strong></div></td>
                                            <td class="hidden-phone"><strong>RM {{ $booking->totalPrice }}</strong></td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <br>
                                <br>
                                <center><!--button type="button" class="btn btn-round btn-danger">Reset</button-->
                                    <!--button type="button" class="btn btn-round btn-success">Confirm</button-->
                                    <a href="/staffView/booking" class="btn btn-round btn-danger">
                                        Back
                                    </a>
                                    <a class="btn btn-round btn-success" href="{{route('dateViewUpdate', $booking->book_id) }}" class="nav-link {{ (request()->is('update/date/*')) ? 'active show-sub' : '' }}" class="btn btn-round btn-success">
                                        Update
                                    </a>
                                    <a href=" " class="btn btn-round btn-primary">
                                        Print
                                    </a>
                                    </center>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </section>

    <br><br>
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

@endsection
<!-- /row -->
{{--                                <!-- /col-lg-10 -->--}}
{{--                                <div class="col-lg-12">--}}
{{--                                <div class="content-panel">--}}
{{--                                <section id="unseen">--}}
{{--                                <table class="table table-bordered table-striped table-condensed">--}}
{{--                                    <thead>--}}
{{--                                    <tr>--}}

{{--                                        <th class="text-left">DESCRIPTION</th>--}}
{{--                                        <th style="width:140px" class="text-right">QUANTITY</th>--}}
{{--                                        <th style="width:140px" class="text-right">UNIT PRICE</th>--}}
{{--                                        <th style="width:90px" class="text-right">TOTAL PRICE</th>--}}
{{--                                    </tr>--}}
{{--                                    </thead>--}}
{{--                                    <tbody>--}}
{{--                                    <tr>--}}
{{--                                     @foreach($equipment_customers as $detail)--}}
{{--                                        <td>EquipName{{$detail->equipment->equipName}}</td>--}}
{{--                                        <td >Quantity{{ $detail->quantity }}</td>--}}
{{--                                        <td >{{$detail->equipment->equipPrice}}</td>--}}
{{--                                        <td >{{'RM'. $detail->quantity * $detail->equipment->equipPrice}}</td>--}}
{{--                                     @endforeach--}}
{{--                                    </tr>--}}
{{--                                    <tr>--}}
{{--                                        <td class="text-center"><strong>EVENT : {{ $booking->eventDate }}<br><br>--}}
{{--                                                VENUE : {{ $booking->venue }}</strong></td>--}}
{{--                                        <td class="text-center"></td>--}}
{{--                                        <td class="text-right"></td>--}}
{{--                                        <td class="text-right"></td>--}}
{{--                                    </tr>--}}
{{--                                    <tr>--}}
{{--                                        <td colspan="2" rowspan="4">--}}
{{--                                            <h4>Terms and Conditions</h4>--}}
{{--                                            <p>Thank you for your business. We do expect payment within 14 days, so please process this invoice within that time. There will be a 6% interest charge for every booking.</p>--}}
{{--                                        <td class="text-right"><strong>Subtotal</strong></td>--}}
{{--                                        <td class="text-right">RM {{ $booking->totalPrice }}</td>--}}
{{--                                    </tr>--}}
{{--                                    <tr>--}}
{{--                                        <td class="text-right no-border"><strong>SST Included in Total</strong></td>--}}
{{--                                        <td class="text-right">RM 0.06</td>--}}
{{--                                    </tr>--}}
{{--                                    <tr>--}}
{{--                                        <td class="text-right no-border">--}}
{{--                                            <div class="well well-small green"><strong>Total</strong></div>--}}
{{--                                        </td>--}}
{{--                                        <td class="text-right"><strong>RM 235560.00</strong></td>--}}
{{--                                    </tr>--}}
{{--                                    </tbody>--}}
{{--                                </table>--}}
{{--                                <br>--}}
{{--                                <br>--}}
{{--                                <center><!--button type="button" class="btn btn-round btn-danger">Reset</button-->--}}
{{--                                    <!--button type="button" class="btn btn-round btn-success">Confirm</button-->--}}
{{--                                    <a href="/custMain" class="btn btn-round btn-danger">--}}
{{--                                        Cancel--}}
{{--                                    </a>--}}
{{--                                    <a href="/custForm" class="btn btn-round btn-warning">--}}
{{--                                        Back--}}
{{--                                    </a>--}}
{{--                                    <a href="/custInvoice" class="btn btn-round btn-success">--}}
{{--                                        Pay--}}
{{--                                    </a></center>--}}
{{--                                </section>--}}
{{--                                </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
<!--/col-lg-12 mt -->
