<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Dashboard">
    <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
    <title>E-BEST MEM</title>

    <!-- Favicons -->
    <link href="../../../../../../temp1/img/favicon.png" rel="icon">
    <link href="../../../../../../temp1/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Bootstrap core CSS -->
    <link href="../../../../../../temp1/lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!--external css-->
    <link href="../../../../../../temp1/lib/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="../../../../../../temp1/css/zabuto_calendar.css">
    <link rel="stylesheet" type="text/css" href="../../../../../../temp1/lib/gritter/css/jquery.gritter.css" />
    <link href="../../../../../../temp1/lib/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link href="../../../../../../temp1/lib/advanced-datatable/css/demo_page.css" rel="stylesheet" />
    <link href="../../../../../../temp1/lib/advanced-datatable/css/demo_table.css" rel="stylesheet" />
    <link rel="stylesheet" href="../../../../../../temp1/lib/advanced-datatable/css/DT_bootstrap.css" />
    <link rel="stylesheet" type="text/css" href="../../../../../../temp1/lib/bootstrap-fileupload/bootstrap-fileupload.css" />
    <!-- Custom styles for this template -->
    <link href="../../../../../../temp1/css/style.css" rel="stylesheet">
    <link href="../../../../../../temp1/css/style-responsive.css" rel="stylesheet">
    <script src="../../../../../../temp1/lib/chart-master/Chart.js"></script>

    <!-- =======================================================
      Template Name: Dashio
      Template URL: https://templatemag.com/dashio-bootstrap-admin-template/
      Author: TemplateMag.com
      License: https://templatemag.com/license/
    ======================================================= -->
</head>

<body>
<section id="container">
    <!-- **********************************************************************************************************************************************************
        TOP BAR CONTENT & NOTIFICATIONS
*********************************************************************************************************************************************************** -->
    <!--header start-->
    <header class="header black-bg">
        <div class="sidebar-toggle-box">
            <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Toggle Navigation"></div>
        </div>
        <!--logo start-->
        <a href="/staffMain" class="logo"><b><span>E-BEST</span> SYSTEM</b></a>
        <!--logo end-->
        <div class="nav notify-row" id="top_menu">
            <!--  notification start -->
            <ul class="nav top-menu">
                <!-- inbox dropdown start-->
                <li id="header_inbox_bar" class="dropdown">
                    <a data-toggle="dropdown" class="dropdown-toggle" href="mailto:mem@madetillevent.com.my">
                        <i class="fa fa-envelope-o"></i>
                    </a>
                </li>
                <!-- inbox dropdown end -->
                <!-- notification dropdown start-->
                <li id="header_notification_bar" class="dropdown">
                    <a data-toggle="dropdown" class="dropdown-toggle" href="http://www.madetillevent.com.my/contactus.html">
                        <i class="fa fa-bell-o"></i>
                    </a>
                </li>
                <!-- notification dropdown end -->
            </ul>
            <!--  notification end -->
        </div>
        <div class="top-menu">
            <ul class="nav pull-right top-menu">
                <li><a class="logout" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a></li>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>

            </ul>
        </div>
    </header>
    <!--header end-->
    <!-- **********************************************************************************************************************************************************
        MAIN SIDEBAR MENU
*********************************************************************************************************************************************************** -->
    <!--sidebar start-->
    <aside>
        <div id="sidebar" class="nav-collapse ">
            <!-- sidebar menu start-->
            <ul class="sidebar-menu" id="nav-accordion">
                <p class="centered"><a href="profile.html"><img src="../../../../../temp1/img/madetill.png" class="img-circle" width="80"></a></p>
                <h5 class="centered">Welcome To EBEST System</h5>
                <li class="mt">
                    <a class="active" href="/staffMain">
                        <i class="fa fa-home"></i>
                        <span>Home</span>
                    </a>
                </li>

                <li class="sub-menu">
                    <a href="equipment.php">
                        <i class="fa fa-list-ol"></i>
                        <span>Equipment</span>
                    </a>
                    <ul class="sub">
                        <li><a href="{{route('createEquipment') }}" class="nav-link {{ (request()->is('create/equipment/*')) ? 'active show-sub' : '' }}">Create Equipment</a></li>
                        <li><a href="{{route('equipView') }}" class="nav-link {{ (request()->is('view/equipment')) ? 'active show-sub' : '' }}">Manage Equipment</a></li>
                    </ul>
                </li>

                <li class="sub-menu">
                    <a href="/staffView/booking">
                        <i class="fa fa-shopping-cart"></i>
                        <span>Booking</span>
                    </a>
                </li>

                <li class="sub-menu">
                    <a href="/staffView/tracking">
                        <i class="fa fa-truck"></i>
                        <span>Tracking</span>
                    </a>
{{--                    <ul class="sub">--}}
{{--                        <li><a href="/trackForm">Create Tracking</a></li>--}}
{{--                        <li><a href="/trackUpdate">Update Tracking</a></li>--}}
{{--                    </ul>--}}
                </li>
                <li class="sub-menu">
                    <a href="{{ route('staffRegister') }}">
                        <i class="fa fa-user"></i>
                        <span>Staff</span>
                    </a>
                </li>
                <li class="sub-menu">
                    <a href="{{ route('staffView', Auth::guard('staff')->user()->staff_id) }}" class="nav-link {{ (request()->is('staffViewAcc/*')) ? 'active show-sub' : '' }}">
                        <i class="fa fa-cogs"></i>
                        <span>Manage Account</span>
                    </a>
                </li>
            </ul>
            <!-- sidebar menu end-->
        </div>
    </aside>
    <!--sidebar end-->
    <!-- **********************************************************************************************************************************************************
        MAIN CONTENT
*********************************************************************************************************************************************************** -->
    <!--main content start-->
@yield('content')

</section>
<!-- js placed at the end of the document so the pages load faster -->
<script src="../../../../../../temp1/lib/jquery/jquery.min.js"></script>
<script type="text/javascript" language="javascript" src="../../../../../../temp1/lib/advanced-datatable/js/jquery.js"></script>
<script src="../../../../../../temp1/lib/bootstrap/js/bootstrap.min.js"></script>
<script class="include" type="text/javascript" src="../../../../../../temp1/lib/jquery.dcjqaccordion.2.7.js"></script>
<script src="../../../../../../temp1/lib/jquery.scrollTo.min.js"></script>
<script src="../../../../../../temp1/lib/jquery.nicescroll.js" type="text/javascript"></script>
<script src="../../../../../../temp1/lib/jquery.sparkline.js"></script>
<script type="text/javascript" language="javascript" src="../../../../../../temp1/lib/advanced-datatable/js/jquery.dataTables.js"></script>
<script type="text/javascript" src="../../../../../../temp1/lib/advanced-datatable/js/DT_bootstrap.js"></script>
<!--common script for all pages-->
<script src="../../../../../../temp1/lib/common-scripts.js"></script>
<script type="text/javascript" src="../../../../../../temp1/lib/gritter/js/jquery.gritter.js"></script>
<script type="text/javascript" src="../../../../../../temp1/lib/gritter-conf.js"></script>
<!--script for this page-->
<script src="../../../../../../temp1/lib/sparkline-chart.js"></script>
<script src="../../../../../../temp1/lib/zabuto_calendar.js"></script>
<script type="../../../../../../temp1/text/javascript">
<script src="../../../../../../temp1/lib/advanced-form-components.js"></script>
<script type="text/javascript" src="../../../../../../temp1/lib/bootstrap-fileupload/bootstrap-fileupload.js"></script>

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
        nCloneTd.innerHTML = '<img src="../../../../../../temp1/lib/advanced-datatable/images/details_open.png">';
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
                this.src = "../../../../../../temp1/lib/advanced-datatable/media/images/details_open.png";
                oTable.fnClose(nTr);
            } else {
                /* Open this row */
                this.src = "../../../../../../temp1/lib/advanced-datatable/images/details_close.png";
                oTable.fnOpen(nTr, fnFormatDetails(oTable, nTr), 'details');
            }
        });
    });
</script>
</body>

</html>
