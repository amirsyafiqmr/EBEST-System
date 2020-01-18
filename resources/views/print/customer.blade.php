<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Dashboard">
    <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
    <title>E-BEST MEM</title>

    <!-- Favicons -->
    <link href="../../temp1/img/favicon.png" rel="icon">
    <link href="../../temp1/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Bootstrap core CSS -->
    <link href="../../temp1/lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!--external css-->
    <link href="../../temp1/lib/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="../../temp1/css/zabuto_calendar.css">
    <link rel="stylesheet" type="text/css" href="../../temp1/lib/gritter/css/jquery.gritter.css" />
    <link href="../../temp1/lib/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link href="../../temp1/lib/advanced-datatable/css/demo_page.css" rel="stylesheet" />
    <link href="../../temp1/lib/advanced-datatable/css/demo_table.css" rel="stylesheet" />
    <link rel="stylesheet" href="../../temp1/lib/advanced-datatable/css/DT_bootstrap.css" />

    <link href="../temp1/lib/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="../temp1/lib/bootstrap-fileupload/bootstrap-fileupload.css" />
    <link rel="stylesheet" type="text/css" href="../temp1/lib/bootstrap-datepicker/css/datepicker.css" />
    <link rel="stylesheet" type="text/css" href="../temp1/lib/bootstrap-daterangepicker/daterangepicker.css" />
    <link rel="stylesheet" type="text/css" href="../temp1/lib/bootstrap-timepicker/compiled/timepicker.css" />
    <link rel="stylesheet" type="text/css" href="../temp1/lib/bootstrap-datetimepicker/datertimepicker.css" />


    <!-- Custom styles for this template -->
    <link href="../../temp1/css/style.css" rel="stylesheet">
    <link href="../../temp1/css/style-responsive.css" rel="stylesheet">
    <script src="../../temp1/lib/chart-master/Chart.js"></script>
    <link rel="shortcut icon" href="{{ asset('logo-amir.ico') }}" />
</head>

<body>
<section id="container">
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
                                <table cellpadding="0" cellspacing="0" border="0" class="display table " id="hidden-table-info">
                                    <thead>
                                    <tr>
                                        <th><h1>MADETILL EVENT MANAGEMENT SDN. BHD.</h1>
                                            <address>
                                                <strong></strong><br>
                                                No. 2, Jalan Taming 2A, Kaw.Perindustrian Taming Jaya,
                                                43300 Balakong, Selangor.<br>
                                                <abbr title="Phone">P:</abbr> +(60)3-8961 5751/5752/9076
                                            </address>
                                        </th>
                                        <th> </th>
                                        <th> </th>
                                        <th><h2>booking detail</h2></th>
                                    </tr>
                                    </thead>
                                </table>
                            </div>
                            <div class="adv-table">
                                <table cellpadding="0" cellspacing="0" border="0" class="display table " id="hidden-table-info">
                                    <thead>
                                        <tr>
                                            <th>
                                                <div class="row">
                                                    <div class="col-md-9">
                                                        <h4>{{$booking->customer->companyName}}<br>
                                                            {{$booking->customer->companyAddress}}<br>
                                                            <abbr title="Phone">P:</abbr>{{$booking->customer->companyPhoneNo}}<br>
                                                        </h4>
                                                        <address>

                                                            ATTN: Tuan/Puan {{$booking->customer->name}}<br>
                                                            TEL: {{$booking->customer->phoneNo}}<br>
                                                            ACC NO: {{$booking->customer->cust_id}}

                                                        </address>
                                                        <br>
                                                    </div>
                                                    <!-- /col-md-9 -->
                                                    <div class="col-md-3">
                                                        <br>
                                                        <div>
                                                            <div class="pull-left"> INVOICE NO : {{ $booking->book_id }} </div>
                                                        </div>
                                                        <div>
                                                            <!-- /col-md-3 -->
                                                            <div class="pull-left"> INVOICE DATE : {{ $booking->created_at }}  </div>
                                                        </div>
                                                        <div>
                                                            <div class="pull-left"> DO NO : <b>{{ $booking->book_id }} </b></div>
                                                        </div>
                                                        <div>
                                                            <div>
                                                                <!-- /col-md-3 -->
                                                                <div class="pull-left"> TERMS : COD</div>
                                                            </div>
                                                            <div>
                                                                <!-- /col-md-3 -->
                                                                <div class="pull-left"> DEPOSIT : <strong>{{$booking->paymentStatus}}</strong></div>
                                                            </div>
                                                            <!-- /row -->
                                                            <br>

                                                        </div>
                                                        <!-- /invoice-body -->
                                                    </div>
                                                </div>
                                            </th>
                                            <th> </th>
                                            <th> </th>
                                            <th> </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td> </td>
                                            <td> </td>
                                            <td> </td>
                                            <td><div class="well well-small green">
                                                    <div class="pull-left"> <h4>TOTAL PRICE : RM {{ $booking->totalPrice }}</h4></div>
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <br>
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
                                                <td class="hidden-phone">{{ 'RM '. $detail->equipment->equipPrice }}</td>
                                                <td class="hidden-phone">{{'RM'. $detail->quantity * $detail->equipment->equipPrice}}</td>
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
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </section>
</section>
<br><br>
<!--main content end-->
<!--footer start-->


<!-- js placed at the end of the document so the pages load faster -->
<script src="../../temp1/lib/jquery/jquery.min.js"></script>
<script type="text/javascript" language="javascript" src="../../temp1/lib/advanced-datatable/js/jquery.js"></script>
<script src="../../temp1/lib/bootstrap/js/bootstrap.min.js"></script>
<script class="include" type="text/javascript" src="../../temp1/lib/jquery.dcjqaccordion.2.7.js"></script>
<script src="../../temp1/lib/jquery.scrollTo.min.js"></script>
<script src="../../temp1/lib/jquery.nicescroll.js" type="text/javascript"></script>
<script src="../../temp1/lib/jquery.sparkline.js"></script>
<script type="text/javascript" language="javascript" src="../../temp1/lib/advanced-datatable/js/jquery.dataTables.js"></script>
<script type="text/javascript" src="../../temp1/lib/advanced-datatable/js/DT_bootstrap.js"></script>
<!--common script for all pages-->
<script src="../../temp1/lib/common-scripts.js"></script>
<script src="../../temp1/lib/jquery-ui-1.9.2.custom.min.js"></script>

<!--script for this page-->
<script src="../../temp1/lib/sparkline-chart.js"></script>
<script src="../../temp1/lib/zabuto_calendar.js"></script>
<script type="../../temp1/text/javascript">
<script src="../../temp1/lib/advanced-form-components.js"></script>

<!--script for this page-->
<script src="../temp1/lib/jquery-ui-1.9.2.custom.min.js"></script>
<script type="text/javascript" src="../temp1/lib/bootstrap-fileupload/bootstrap-fileupload.js"></script>
<script type="text/javascript" src="../temp1/lib/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
<script type="text/javascript" src="../temp1/lib/bootstrap-daterangepicker/date.js"></script>
<script type="text/javascript" src="../temp1/lib/bootstrap-daterangepicker/daterangepicker.js"></script>
<script type="text/javascript" src="../temp1/lib/bootstrap-datetimepicker/js/bootstrap-datetimepicker.js"></script>
<script type="text/javascript" src="../temp1/lib/bootstrap-daterangepicker/moment.min.js"></script>
<script type="text/javascript" src="../temp1/lib/bootstrap-timepicker/js/bootstrap-timepicker.js"></script>
<script src="../temp1/lib/advanced-form-components.js"></script>
<script type="application/javascript">
    $(document).ready(function() {
        $("#date-popover").popover({
            html: true,
            trigger: "manual"
        });
        $("#date-popover").hide();
        $("#date-popover").click(function(e) {
            $(this).hide();
        });

        $("#my-calendar").zabuto_calendar({
            action: function() {
                return myDateFunction(this.id, false);
            },
            action_nav: function() {
                return myNavFunction(this.id);
            },
            ajax: {
                url: "show_data.php?action=1",
                modal: true
            },
            legend: [{
                type: "text",
                label: "Special event",
                badge: "00"
            },
                {
                    type: "block",
                    label: "Regular event",
                }
            ]
        });
    });

    function myNavFunction(id) {
        $("#date-popover").hide();
        var nav = $("#" + id).data("navigation");
        var to = $("#" + id).data("to");
        console.log('nav ' + nav + ' to: ' + to.month + '/' + to.year);
    }
</script>
<script type="text/javascript">
    /* Formating function for row details */
    function fnFormatDetails(oTable, nTr) {
        var aData = oTable.fnGetData(nTr);
        var sOut = '<table cellpadding="5" cellspacing="0" border="0" style="padding-left:50px;">';
        sOut += '<tr><td>Rendering engine:</td><td>' + aData[1] + ' ' + aData[4] + '</td></tr>';
        sOut += '<tr><td>Link to source:</td><td>Could provide a link here</td></tr>';
        sOut += '<tr><td>Extra info:</td><td>And any further details here (images etc)</td></tr>';
        sOut += '</table>';

        return sOut;
    }

    $(document).ready(function() {
        /*
         * Insert a 'details' column to the table
         */
        var nCloneTh = document.createElement('th');
        var nCloneTd = document.createElement('td');
        nCloneTd.innerHTML = '<img src="../../lib/advanced-datatable/images/details_open.png">';
        nCloneTd.className = "center";

        $('#hidden-table-info thead tr').each(function() {
            this.insertBefore(nCloneTh, this.childNodes[0]);
        });

        $('#hidden-table-info tbody tr').each(function() {
            this.insertBefore(nCloneTd.cloneNode(true), this.childNodes[0]);
        });

        /*
         * Initialse DataTables, with no sorting on the 'details' column
         */
        var oTable = $('#hidden-table-info').dataTable({
            "aoColumnDefs": [{
                "bSortable": false,
                "aTargets": [0]
            }],
            "aaSorting": [
                [1, 'asc']
            ]
        });

        /* Add event listener for opening and closing details
         * Note that the indicator for showing which row is open is not controlled by DataTables,
         * rather it is done here
         */
        $('#hidden-table-info tbody td img').live('click', function() {
            var nTr = $(this).parents('tr')[0];
            if (oTable.fnIsOpen(nTr)) {
                /* This row is already open - close it */
                this.src = "lib/advanced-datatable/media/images/details_open.png";
                oTable.fnClose(nTr);
            } else {
                /* Open this row */
                this.src = "lib/advanced-datatable/images/details_close.png";
                oTable.fnOpen(nTr, fnFormatDetails(oTable, nTr), 'details');
            }
        });
    });
</script>
</body>


