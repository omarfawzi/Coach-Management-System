@extends('Admin.Layouts.header_footer')
@section('content')

    <div class="container-fluid">
        <div class="page-content">
            <div class="page-content-container">
                <div class="page-content-row">
                    <div class="page-content-col">
                        <!-- BEGIN PAGE BASE CONTENT -->
                        <div class="row">
                            <div class="col-md-12">
                                <div class="portlet light portlet-fit bordered calendar">
                                    <div class="portlet-title">
                                        <div class="caption">
                                            <i class=" icon-layers font-green"></i>
                                            <span class="caption-subject font-green sbold uppercase">Calendar</span>
                                        </div>
                                    </div>
                                    <div class="portlet-body">
                                        <div class="row">
                                            <div class="col-md-9 col-sm-12">
                                                <div id="calendar" class="has-toolbar"> </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- END PAGE BASE CONTENT -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        jQuery(document).ready(function() {
            AppCalendar.init("{{json_encode($sessions)}}");
        });
    </script>
@endsection