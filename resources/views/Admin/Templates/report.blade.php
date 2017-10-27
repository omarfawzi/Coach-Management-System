@extends('Admin.Layouts.header_footer')

@section('content')
    <div class="container-fluid">
        <div class="page-content">
            <div class="page-content-row">
                <!-- BEGIN PAGE SIDEBAR -->
                <!-- END PAGE SIDEBAR -->
                <div class="page-content-col">
                    <div class="row">
                        <div class="col-md-12">
                            <!-- BEGIN PORTLET-->
                            <div class="portlet light form-fit bordered">
                                <div class="portlet-title">
                                    <div class="caption">
                                        <i class="icon-pin font-red"></i>
                                        <span class="caption-subject font-red sbold uppercase">Financials Report</span>
                                    </div>
                                </div>
                                <div class="portlet-body form">
                                    <!-- BEGIN FORM-->
                                    <form action="{{route('financialReport')}}"
                                          class="form-horizontal form-bordered" method="post">
                                        {{csrf_field()}}
                                        <div class="form-body">

                                            {{--<div class="form-group">--}}
                                            {{--<label class="control-label col-md-3">Sessions From</label>--}}
                                            {{--<div class="col-md-3">--}}
                                            {{--<div class="input-group input-medium date date-picker" data-date-format="dd-mm-yyyy">--}}
                                            {{--<input type="text" class="form-control" name="from" readonly>--}}
                                            {{--<span class="input-group-btn">--}}
                                            {{--<button class="btn default" type="button">--}}
                                            {{--<i class="fa fa-calendar"></i>--}}
                                            {{--</button>--}}
                                            {{--</span>--}}
                                            {{--</div>--}}
                                            {{--</div>--}}
                                            {{--</div>--}}
                                            {{--<div class="form-group">--}}
                                            {{--<label class="control-label col-md-3">Sessions To</label>--}}
                                            {{--<div class="col-md-3">--}}
                                            {{--<div class="input-group input-medium date date-picker" data-date-format="dd-mm-yyyy">--}}
                                            {{--<input type="text" class="form-control" name="to" readonly>--}}
                                            {{--<span class="input-group-btn">--}}
                                            {{--<button class="btn default" type="button">--}}
                                            {{--<i class="fa fa-calendar"></i>--}}
                                            {{--</button>--}}
                                            {{--</span>--}}
                                            {{--</div>--}}
                                            {{--</div>--}}
                                            {{--</div>--}}
                                            <div class="form-group">
                                                <label for="multiple"
                                                       class="control-label col-md-3">Specify
                                                    Clients</label>
                                                <div class="col-md-3">
                                                    <select name="clients[]" id="multiple"
                                                            class="form-control select2-multiple"
                                                            multiple>
                                                        {{--<option>Default All</option>--}}
                                                        @foreach($clients as $client)
                                                            <option value="{{$client->id}}">{{$client->username}}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                            <center>
                                                <div class="form-actions">
                                                    <button type="submit"
                                                            class="btn green button-submit">
                                                        Generate
                                                        <i class="fa fa-download"></i>
                                                    </button>
                                                </div>
                                            </center>
                                        </div>
                                    </form>

                                    <!-- END PORTLET-->
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <!-- BEGIN PORTLET-->
                            <div class="portlet light form-fit bordered">
                                <div class="portlet-title">
                                    <div class="caption">
                                        <i class="icon-pin font-red"></i>
                                        <span class="caption-subject font-red sbold uppercase">Clients Report</span>
                                    </div>
                                </div>
                                <div class="portlet-body form">
                                    <!-- BEGIN FORM-->
                                    <form action="{{route('clientsReport')}}"
                                          class="form-horizontal form-bordered" method="post">
                                        {{csrf_field()}}
                                        <div class="form-body">

                                            <div class="form-group">
                                                <label class="control-label col-md-3">Registered From</label>
                                                <div class="col-md-3">
                                                    <div class="input-group input-medium date date-picker"
                                                         data-date-format="dd-mm-yyyy">
                                                        <input type="text" class="form-control"
                                                               name="from" readonly>
                                                        <span class="input-group-btn">
                                                                <button class="btn default" type="button">
                                                                <i class="fa fa-calendar"></i>
                                                                </button>
                                                                </span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label col-md-3">To</label>
                                                <div class="col-md-3">
                                                    <div class="input-group input-medium date date-picker"
                                                         data-date-format="dd-mm-yyyy">
                                                        <input type="text" class="form-control"
                                                               name="to" readonly>
                                                        <span class="input-group-btn">
                                                                <button class="btn default" type="button">
                                                                <i class="fa fa-calendar"></i>
                                                                </button>
                                                                </span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="multiple"
                                                       class="control-label col-md-3">Specify
                                                    Clients</label>
                                                <div class="col-md-3">
                                                    <select name="clients[]" id="multiple"
                                                            class="form-control select2-multiple"
                                                            multiple>
                                                        {{--<option>Default All</option>--}}
                                                        @foreach($clients as $client)
                                                            <option value="{{$client->id}}">{{$client->username}}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="single"
                                                       class="control-label col-md-3">Gender</label>
                                                <div class="col-md-3">
                                                    <select id="single" class="form-control select2" name="gender">
                                                        <option></option>
                                                        <option value="male">male</option>
                                                        <option value="female">female</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label col-md-3">Service </label>
                                                <div class="col-md-4">
                                                    <select class="form-control select2" name="service">
                                                        <option></option>
                                                        <option value="consultation">consultation</option>
                                                        <option value="training">training</option>
                                                        <option value="individual coaching">individual coaching</option>
                                                        <option value="group coaching">group coaching</option>
                                                        <option value="assessment">assessment</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <center>
                                                <div class="form-actions">
                                                    <button type="submit"
                                                            class="btn green button-submit">
                                                        Generate
                                                        <i class="fa fa-download"></i>
                                                    </button>
                                                </div>
                                            </center>
                                        </div>
                                    </form>

                                    <!-- END PORTLET-->
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <!-- BEGIN PORTLET-->
                            <div class="portlet light form-fit bordered">
                                <div class="portlet-title">
                                    <div class="caption">
                                        <i class="icon-pin font-red"></i>
                                        <span class="caption-subject font-red sbold uppercase">Sessions Report</span>
                                    </div>
                                </div>
                                <div class="portlet-body form">
                                    <!-- BEGIN FORM-->
                                    <form action="{{route('sessionReport')}}"
                                          class="form-horizontal form-bordered" method="post">
                                        {{csrf_field()}}
                                        <div class="form-body">

                                            <div class="form-group">
                                                <label class="control-label col-md-3">Sessions From</label>
                                                <div class="col-md-3">
                                                    <div class="input-group input-medium date date-picker"
                                                         data-date-format="dd-mm-yyyy">
                                                        <input type="text" class="form-control" name="from" readonly>
                                                        <span class="input-group-btn">
                                            <button class="btn default" type="button">
                                            <i class="fa fa-calendar"></i>
                                            </button>
                                            </span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label col-md-3">Sessions To</label>
                                                <div class="col-md-3">
                                                    <div class="input-group input-medium date date-picker"
                                                         data-date-format="dd-mm-yyyy">
                                                        <input type="text" class="form-control" name="to" readonly>
                                                        <span class="input-group-btn">
                                            <button class="btn default" type="button">
                                            <i class="fa fa-calendar"></i>
                                            </button>
                                            </span>
                                                    </div>
                                                </div>
                                            </div>
                                                <div class="form-group">
                                                    <label for="multiple"
                                                           class="control-label col-md-3">Specify
                                                        Clients</label>
                                                    <div class="col-md-3">
                                                        <select name="clients[]" id="multiple"
                                                                class="form-control select2-multiple"
                                                                multiple>
                                                            {{--<option>Default All</option>--}}
                                                            @foreach($clients as $client)
                                                                <option value="{{$client->id}}">{{$client->username}}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                </div>
                                                <center>
                                                    <div class="form-actions">
                                                        <button type="submit"
                                                                class="btn green button-submit">
                                                            Generate
                                                            <i class="fa fa-download"></i>
                                                        </button>
                                                    </div>
                                                </center>
                                            </div>
                                    </form>

                                    <!-- END PORTLET-->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection
