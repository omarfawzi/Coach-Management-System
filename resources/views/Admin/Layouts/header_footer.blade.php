<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->
<!-- BEGIN HEAD -->

<head>
    <meta charset="utf-8" />
    <title>Strength Space</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1" name="viewport" />
    <!-- BEGIN LAYOUT FIRST STYLES -->
    <link href="https://fonts.googleapis.com/css?family=Oswald:400,300,700" rel="stylesheet" type="text/css" />
    <!-- END LAYOUT FIRST STYLES -->
    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css" />
    <link href="{{asset('assets/global/plugins/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('assets/global/plugins/simple-line-icons/simple-line-icons.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('assets/global/plugins/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('assets/global/plugins/bootstrap-switch/css/bootstrap-switch.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('assets/global/plugins/select2/css/select2.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('assets/global/plugins/select2/css/select2-bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
    <!-- END GLOBAL MANDATORY STYLES -->

    <!-- BEGIN PAGE LEVEL PLUGINS -->
    <link href="{{asset('assets/global/plugins/bootstrap-fileinput/bootstrap-fileinput.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('assets/global/plugins/bootstrap-daterangepicker/daterangepicker.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('assets/global/plugins/morris/morris.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('assets/global/plugins/fullcalendar/fullcalendar.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('assets/global/plugins/jqvmap/jqvmap/jqvmap.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('assets/global/plugins/select2/css/select2.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('assets/global/plugins/select2/css/select2-bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('assets/global/plugins/bootstrap-daterangepicker/daterangepicker.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('assets/global/plugins/bootstrap-datepicker/css/bootstrap-datepicker3.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('assets/global/plugins/bootstrap-timepicker/css/bootstrap-timepicker.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('assets/global/plugins/bootstrap-datetimepicker/css/bootstrap-datetimepicker.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('assets/global/plugins/clockface/css/clockface.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('assets/pages/css/profile-2.min.css')}}" rel="stylesheet" type="text/css" />

    <!-- END PAGE LEVEL PLUGINS -->
    <!-- BEGIN THEME GLOBAL STYLES -->
    <link href="{{asset('assets/global/css/components.min.css')}}" rel="stylesheet" id="style_components" type="text/css" />
    <link href="{{asset('assets/global/css/plugins.min.css')}}" rel="stylesheet" type="text/css" />
    <!-- END THEME GLOBAL STYLES -->
    <!-- BEGIN THEME LAYOUT STYLES -->
    <link href="{{asset('assets/layouts/layout5/css/layout.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('assets/layouts/layout5/css/custom.min.css')}}" rel="stylesheet" type="text/css" />

{{--    <link href="{{asset('assets/global/css/fullcalendar.min.css')}}" rel="stylesheet" type="text/css" >--}}
{{--    <link href="{{asset('assets/global/css/fullcalendar.print.min.css')}}" rel="stylesheet" type="text/css" >--}}

    <!-- END THEME LAYOUT STYLES -->
    <script src="{{asset('assets/global/plugins/jquery.min.js')}}" type="text/javascript"></script>
    <link rel="shortcut icon" href="{{asset('assets/images/logos/StrengthsSpace__FC_web_03.png')}}" /> </head>
<!-- END HEAD -->

<body class="page-header-fixed page-sidebar-closed-hide-logo">
<!-- BEGIN CONTAINER -->
<div class="wrapper">
    <!-- BEGIN HEADER -->
    <header class="page-header">
        <nav class="navbar mega-menu" role="navigation">
            <div class="container-fluid">
                <div class="clearfix navbar-fixed-top">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-responsive-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="toggle-icon">
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </span>
                    </button>
                    <!-- End Toggle Button -->
                    <!-- BEGIN LOGO -->
                    <a id="index" class="page-logo" href="{{route('adminHomePage')}}">
                        <img src="{{asset('assets/images/logos/StrengthsSpace__FC_web_03.png')}}" alt="Logo"> </a>
                    <!-- END LOGO -->
                    <!-- BEGIN SEARCH -->
                    {{--<form class="search" action="extra_search.html" method="GET">--}}
                        {{--<input type="name" class="form-control" name="query" placeholder="Search...">--}}
                        {{--<a href="javascript:;" class="btn submit md-skip">--}}
                            {{--<i class="fa fa-search"></i>--}}
                        {{--</a>--}}
                    {{--</form>--}}
                    <!-- END SEARCH -->
                    <!-- BEGIN TOPBAR ACTIONS -->
                    <div class="topbar-actions">
                        <!-- BEGIN GROUP NOTIFICATION -->
                        {{--<div class="btn-group-notification btn-group" id="header_notification_bar">--}}
                            {{--<button type="button" class="btn btn-sm md-skip dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">--}}
                                {{--<i class="icon-bell"></i>--}}
                                {{--<span class="badge">1</span>--}}
                            {{--</button>--}}
                            {{--<ul class="dropdown-menu-v2">--}}
                                {{--<li class="external">--}}
                                    {{--<h3>--}}
                                        {{--<span class="bold">1 pending</span> notifications</h3>--}}
                                    {{--<a href="#">view all</a>--}}
                                {{--</li>--}}
                                {{--<li>--}}
                                    {{--<ul class="dropdown-menu-list scroller" style="height: 250px; padding: 0;" data-handle-color="#637283">--}}
                                        {{--<li>--}}
                                            {{--<a href="javascript:;">--}}
                                                        {{--<span class="details">--}}
                                                            {{--<span class="label label-sm label-icon label-success md-skip">--}}
                                                                {{--<i class="fa fa-plus"></i>--}}
                                                            {{--</span> New user registered. </span>--}}
                                                {{--<span class="time">just now</span>--}}
                                            {{--</a>--}}
                                        {{--</li>--}}
                                    {{--</ul>--}}
                                {{--</li>--}}
                            {{--</ul>--}}
                        {{--</div>--}}
                        &nbsp;&nbsp;
                        <!-- END GROUP NOTIFICATION -->
                        <!-- BEGIN GROUP INFORMATION -->
                        {{--<div class="btn-group-red btn-group">--}}
                            {{--<button type="button" class="btn btn-sm md-skip dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">--}}
                                {{--<i class="fa fa-plus"></i>--}}
                            {{--</button>--}}
                            {{--<ul class="dropdown-menu-v2" role="menu">--}}
                                {{--<li class="active">--}}
                                    {{--<a href="#">New Post</a>--}}
                                {{--</li>--}}
                                {{--<li>--}}
                                    {{--<a href="#">New Comment</a>--}}
                                {{--</li>--}}
                                {{--<li>--}}
                                    {{--<a href="#">Share</a>--}}
                                {{--</li>--}}
                                {{--<li class="divider"></li>--}}
                                {{--<li>--}}
                                    {{--<a href="#">Comments--}}
                                        {{--<span class="badge badge-success">4</span>--}}
                                    {{--</a>--}}
                                {{--</li>--}}
                                {{--<li>--}}
                                    {{--<a href="#">Feedbacks--}}
                                        {{--<span class="badge badge-danger">2</span>--}}
                                    {{--</a>--}}
                                {{--</li>--}}
                            {{--</ul>--}}
                        {{--</div>--}}
                        <!-- END GROUP INFORMATION -->
                        <!-- BEGIN USER PROFILE -->
                        <div class="btn-group-img btn-group">
                            <button type="button" class="btn btn-sm md-skip dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                                <span style="color: beige">Hi, {{auth()->user()->name}}</span>
                                <img src="{{asset('assets/images/users/coaches/'.auth()->user()->picture)}}" alt=""> </button>
                            <ul class="dropdown-menu-v2" role="menu">
                                <li>
                                    <a href="{{route('coachProfile')}}">
                                        <i class="icon-user"></i> My Profile
                                    </a>
                                </li>
                                {{--<li>--}}
                                    {{--<a href="app_calendar.html">--}}
                                        {{--<i class="icon-calendar"></i> My Calendar </a>--}}
                                {{--</li>--}}
                                {{--<li>--}}
                                    {{--<a href="app_inbox.html">--}}
                                        {{--<i class="icon-envelope-open"></i> My Inbox--}}
                                        {{--<span class="badge badge-danger"> 3 </span>--}}
                                    {{--</a>--}}
                                {{--</li>--}}
                                {{--<li>--}}
                                    {{--<a href="app_todo_2.html">--}}
                                        {{--<i class="icon-rocket"></i> My Tasks--}}
                                        {{--<span class="badge badge-success"> 7 </span>--}}
                                    {{--</a>--}}
                                {{--</li>--}}
                                <li class="divider"> </li>
                                {{--<li>--}}
                                    {{--<a href="page_user_lock_1.html">--}}
                                        {{--<i class="icon-lock"></i> Lock Screen </a>--}}
                                {{--</li>--}}
                                <li>
                                    <a href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        <i class="icon-key"></i> Log Out </a>
                                </li>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    {{ csrf_field() }}
                                </form>
                            </ul>
                        </div>
                        <!-- END USER PROFILE -->
                        <!-- BEGIN QUICK SIDEBAR TOGGLER -->
                        {{--<button type="button" class="quick-sidebar-toggler md-skip" data-toggle="collapse">--}}
                            {{--<span class="sr-only">Toggle Quick Sidebar</span>--}}
                            {{--<i class="icon-logout"></i>--}}
                        {{--</button>--}}
                        <!-- END QUICK SIDEBAR TOGGLER -->
                    </div>
                    <!-- END TOPBAR ACTIONS -->
                </div>
                <!-- BEGIN HEADER MENU -->
                <div class="nav-collapse collapse navbar-collapse navbar-responsive-collapse">
                    <ul class="nav navbar-nav">
                        <li class="dropdown dropdown-fw dropdown-fw-disabled  {{(Route::getCurrentRoute()->getName() == 'adminHomePage'||Route::getCurrentRoute()->getName() == 'addClients'||Route::getCurrentRoute()->getName() == 'clientProfile')?'active open selected':''}}">
                            <a href="javascript:;" class="text-uppercase">
                                <i class="icon-users"></i> Clients </a>
                            <ul class="dropdown-menu dropdown-menu-fw">
                                <li class="{{(Route::getCurrentRoute()->getName() == 'adminHomePage')?'active':''}}">
                                    <a href="{{route('adminHomePage')}}">
                                        <i class="icon-users"></i> Clients </a>
                                </li>
                                <li class="{{(Route::getCurrentRoute()->getName() == 'addClients')?'active':''}}">
                                    <a href="{{route('addClients')}}">
                                        <i class="icon-plus"></i> Add Client </a>
                                </li>
                            </ul>
                        </li>
                        <li class="dropdown dropdown-fw dropdown-fw-disabled {{(Route::getCurrentRoute()->getName() == 'addSessions'||Route::getCurrentRoute()->getName() == 'sessions'||Route::getCurrentRoute()->getName() =='updateSession')?'active open selected':''}}">
                            <a href="javascript:;" class="text-uppercase">
                                <i class="icon-calendar"></i> Calendar </a>
                            <ul class="dropdown-menu dropdown-menu-fw">
                                <li class="{{(Route::getCurrentRoute()->getName() == 'sessions')?'active':''}}">
                                    <a href="{{route('sessions')}}">
                                        <i class="fa fa-calendar-check-o"></i> Sessions </a>
                                </li>
                                <li class="{{(Route::getCurrentRoute()->getName() == 'addSessions')?'active':''}}">
                                    <a href="{{route('addSessions')}}">
                                        <i class="fa fa-calendar-plus-o"></i> Schedule a Session </a>
                                </li>
                            </ul>
                        </li>
                        <li class="dropdown dropdown-fw dropdown-fw-disabled {{(Route::getCurrentRoute()->getName() == 'addCompany'||Route::getCurrentRoute()->getName() == 'companies'||Route::getCurrentRoute()->getName() == 'editCompany')?'active open selected':''}}">
                            <a href="javascript:;" class="text-uppercase">
                                <i class="icon-briefcase"></i> Companies </a>
                            <ul class="dropdown-menu dropdown-menu-fw">
                                <li class="{{(Route::getCurrentRoute()->getName() == 'companies')?'active':''}}">
                                    <a href="{{route('companies')}}">
                                        <i class="icon-briefcase"></i> Companies </a>
                                </li>
                                <li class="{{(Route::getCurrentRoute()->getName() == 'addCompany')?'active':''}}">
                                    <a href="{{route('addCompany')}}">
                                        <i class="icon-plus"></i> Add Company </a>
                                </li>
                            </ul>
                        </li>
                        <li class="dropdown dropdown-fw dropdown-fw-disabled {{(Route::getCurrentRoute()->getName() == 'report')?'active open selected':''}}">
                            <a href="{{(Route::getCurrentRoute()->getName() == 'report')?'javascript:;':route('report')}}" class="text-uppercase">
                                <i class="fa  fa-bar-chart"></i> Report </a>
                            {{--<ul class="dropdown-menu dropdown-menu-fw">--}}
                                {{--<li class="{{(Route::getCurrentRoute()->getName() == 'report')?'active':''}}">--}}
                                    {{--<a href="{{route('report')}}">--}}
                                        {{--<i class="fa fa-file"></i> Generate Report </a>--}}
                                {{--</li>--}}
                            {{--</ul>--}}
                        </li>
                    </ul>
                </div>
                <!-- END HEADER MENU -->
            </div>
            <!--/container-->
        </nav>
    </header>
    @yield('content')
</div>

</body>
<script src="{{asset('assets/global/plugins/bootstrap/js/bootstrap.min.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/global/plugins/js.cookie.min.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/global/plugins/jquery.blockui.min.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js')}}" type="text/javascript"></script>
<!-- END CORE PLUGINS -->
<!-- BEGIN PAGE LEVEL PLUGINS -->

<script src="{{asset('assets/global/plugins/moment.min.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/global/plugins/bootstrap-daterangepicker/daterangepicker.min.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/global/plugins/morris/morris.min.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/global/plugins/morris/raphael-min.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/global/plugins/counterup/jquery.waypoints.min.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/global/plugins/counterup/jquery.counterup.min.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/global/plugins/amcharts/amcharts/amcharts.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/global/plugins/amcharts/amcharts/serial.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/global/plugins/amcharts/amcharts/pie.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/global/plugins/amcharts/amcharts/radar.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/global/plugins/amcharts/amcharts/themes/light.js')}}" type="text/javascript"></script>
{{--<script src="{{asset('assets/global/plugins/amcharts/amcharts/themes/patterns.js"')}}" type="text/javascript"></script>--}}
<script src="{{asset('assets/global/plugins/amcharts/amcharts/themes/chalk.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/global/plugins/amcharts/ammap/ammap.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/global/plugins/amcharts/ammap/maps/js/worldLow.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/global/plugins/amcharts/amstockcharts/amstock.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/global/plugins/fullcalendar/fullcalendar.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/global/plugins/horizontal-timeline/horizontal-timeline.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/global/plugins/flot/jquery.flot.min.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/global/plugins/flot/jquery.flot.resize.min.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/global/plugins/flot/jquery.flot.categories.min.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/global/plugins/jquery-easypiechart/jquery.easypiechart.min.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/global/plugins/jquery.sparkline.min.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/global/plugins/jqvmap/jqvmap/jquery.vmap.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/global/plugins/jqvmap/jqvmap/maps/jquery.vmap.russia.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/global/plugins/jqvmap/jqvmap/maps/jquery.vmap.world.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/global/plugins/jqvmap/jqvmap/maps/jquery.vmap.europe.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/global/plugins/jqvmap/jqvmap/maps/jquery.vmap.germany.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/global/plugins/jqvmap/jqvmap/maps/jquery.vmap.usa.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/global/plugins/jqvmap/jqvmap/data/jquery.vmap.sampledata.js')}}" type="text/javascript"></script>
<!-- END PAGE LEVEL PLUGINS -->
<script src="{{asset('assets/global/scripts/app.min.js')}}" type="text/javascript"></script>

<script src="{{asset('assets/global/plugins/bootstrap-fileinput/bootstrap-fileinput.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/global/plugins/jquery.sparkline.min.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/global/plugins/select2/js/select2.full.min.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/global/plugins/jquery-validation/js/jquery.validate.min.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/global/plugins/jquery-validation/js/additional-methods.min.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/global/plugins/bootstrap-wizard/jquery.bootstrap.wizard.min.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/pages/scripts/form-wizard.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/global/plugins/moment.min.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/global/plugins/bootstrap-daterangepicker/daterangepicker.min.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/global/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/global/plugins/bootstrap-timepicker/js/bootstrap-timepicker.min.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/global/plugins/bootstrap-datetimepicker/js/bootstrap-datetimepicker.min.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/global/plugins/clockface/js/clockface.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/pages/scripts/components-date-time-pickers.min.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/global/plugins/select2/js/select2.full.min.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/pages/scripts/components-select2.min.js')}}" type="text/javascript"></script>

<!-- BEGIN THEME GLOBAL SCRIPTS -->
<!-- END THEME GLOBAL SCRIPTS -->
<script src="{{asset('assets/pages/scripts/profile.min.js')}}" type="text/javascript"></script>

<script src="{{asset('assets/global/plugins/bootstrap-confirmation/bootstrap-confirmation.min.js')}}" type="text/javascript"></script>

<script src="{{asset('assets/pages/scripts/ui-confirmations.min.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/pages/scripts/profile.min.js')}}" type="text/javascript"></script>

<!-- BEGIN PAGE LEVEL SCRIPTS -->
{{--<script src="{{asset('assets/pages/scripts/dashboard.min.js')}}" type="text/javascript"></script>--}}

<script src="{{asset('assets/apps/scripts/calendar.js')}}" type="text/javascript"></script>
<!-- END PAGE LEVEL SCRIPTS -->
<script src="{{asset('assets/global/scripts/jquery.sortable.js')}}" type="text/javascript"></script>

<!-- BEGIN THEME LAYOUT SCRIPTS -->
<script src="{{asset('assets/layouts/layout5/scripts/layout.min.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/layouts/global/scripts/quick-sidebar.min.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/layouts/global/scripts/quick-nav.min.js')}}" type="text/javascript"></script>
<!-- END THEME LAYOUT SCRIPTS -->
<script>
    $(document).ready(function()
    {
        $('#clickmewow').click(function()
        {
            $('#radio1003').attr('checked', 'checked');
        });
    })
</script>
<script>
    $(function() {
        $('.thumbnail-sortable').sortable({
            placeholderClass: 'col-sm-6 col-md-4'
        });
        $('.table-sortable tbody').sortable({
            handle: 'span'
        });
        $('.list-group-sortable').sortable({
            placeholderClass: 'list-group-item'
        });
        $('.list-group-sortable-exclude').sortable({
            placeholderClass: 'list-group-item',
            items: ':not(.disabled)'
        });
        $('.list-group-sortable-handles').sortable({
            placeholderClass: 'list-group-item',
            handle: 'span'
        });
        $('.list-group-sortable-connected').sortable({
            placeholderClass: 'list-group-item',
            connectWith: '.connected'
        });
    });
</script>
</html>