@extends('layout')

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
                                <h2>invoice</h2>
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
                                            <div class="pull-right"> {{ $booking->paymentStatus }} </div>
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
                                                <td class="hidden-phone"><center><strong>EVENT : {{ $booking->eventDate }}<br><br>
                                                            VENUE : {{ $booking->venue }}</strong></center></td>
                                                <td class="hidden-phone"> </td>
                                                <td class="hidden-phone"> </td>
                                                <td class="hidden-phone"> </td>
                                            </tr>
                                            @foreach($equipment_customers as $detail)
                                                <tr>
                                                    <td class="hidden-phone"> </td>
                                                    <td class="hidden-phone">{{$detail->equipment->equipName}}</td>
                                                    <td class="hidden-phone">{{ $detail->quantity }}</td>
                                                    <td class="hidden-phone">{{ 'RM '. $detail->equipment->equipPrice }}</td>
                                                    <td class="hidden-phone">{{'RM '. $detail->quantity * $detail->equipment->equipPrice}}</td>
                                                </tr>
                                            @endforeach
                                            <tr>
                                                <td class="hidden-phone"> </td>
                                                <td class="hidden-phone"><center><h4>Terms and Conditions</h4>
                                                        <p>Thank you for your business. We do expect payment within 14 days, so please process this invoice within that time. </p></center></td>
                                                <td class="hidden-phone"> </td>
                                                <td class="hidden-phone"></td>
                                                <td class="hidden-phone"></td>
                                            </tr>
                                            <tr>
                                                <td class="hidden-phone"> </td>
                                                <td class="hidden-phone"> </td>
                                                <td class="hidden-phone"> </td>
                                                <td class="hidden-phone"> <div class="well well-small green"><strong>Total</strong></div></td>
                                                <td class="hidden-phone">RM {{ $booking->totalPrice }}</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <br>
                                <br>
                                <center><!--button type="button" class="btn btn-round btn-danger">Reset</button-->
                                    <!--button type="button" class="btn btn-round btn-success">Confirm</button-->
                                    <a href="/custMain" class="btn btn-round btn-danger">
                                        Cancel
                                    </a>
                                    <a href="{{route('cart.checkout')}}" class="btn btn-round btn-warning">
                                        Back
                                    </a>
                                    <a href="#" onclick="event.preventDefault();
                                        document.getElementById('newbill-form').submit();"
                                        class="btn btn-round btn-success">
                                        Pay
                                    </a>
                                    <form id="newbill-form" action="{{ route('book.payment', $booking->book_id) }}" method="POST" style="display: none;">
                                        @csrf
                                        <input type="hidden" name="book_id" value="{{ $booking->book_id }}">
                                    </form>

                                </center>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </section>
@endsection
