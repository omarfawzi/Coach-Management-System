@extends('Admin.Layouts.header_footer')
@section('content')
    <div class="container-fluid">
        <div class="page-content">
            <div class="page-content-row">
                <!-- BEGIN PAGE SIDEBAR -->
                <!-- END PAGE SIDEBAR -->
                <div class="page-content-col">
                    <!-- BEGIN PAGE BASE CONTENT -->
                    <div class="row">
                        <div class="col-md-12">
                            <!-- BEGIN PORTLET-->
                            <div class="portlet light form-fit bordered">
                                <div class="portlet-title">
                                    <div class="caption">
                                        <i class="icon-pin font-red"></i>
                                        <span class="caption-subject font-red sbold uppercase">Update Session</span>
                                    </div>
                                </div>
                                <div class="portlet-body form">
                                    <!-- BEGIN FORM-->
                                    <form action="{{route('updateSessionDB')}}" class="form-horizontal form-bordered" method="post">
                                        {{csrf_field()}}
                                        <input type="hidden" name="sessionID" value="{{$object->sessionID}}">
                                        <div class="form-body">

                                            <div class="form-group">
                                                <label class="control-label col-md-3">Pick Date</label>
                                                <div class="col-md-3">
                                                    <div class="input-group input-medium date date-picker" data-date-format="dd-mm-yyyy">
                                                        <input type="text" class="form-control" name="date" value="{{$object->date}}" readonly>
                                                        <span class="input-group-btn">
                                                        <button class="btn default" type="button">
                                                            <i class="fa fa-calendar"></i>
                                                        </button>
                                                    </span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label col-md-3">Start At</label>
                                                <div class="col-md-3">
                                                    <div class="input-group">
                                                        <input type="text" class="form-control timepicker timepicker-no-seconds" value="{{$object->startTime}}" name="startTime" required="required" readonly>
                                                        <span class="input-group-btn">
                                                                        <button class="btn default" type="button">
                                                                            <i class="fa fa-clock-o"></i>
                                                                        </button>
                                                                    </span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label col-md-3">Ends At</label>
                                                <div class="col-md-3">
                                                    <div class="input-group">
                                                        <input type="text" class="form-control timepicker timepicker-no-seconds" value="{{$object->endTime}}" name="endTime" readonly>
                                                        <span class="input-group-btn">
                                                                        <button class="btn default" type="button">
                                                                            <i class="fa fa-clock-o"></i>
                                                                        </button>
                                                                    </span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="single" class="control-label col-md-3">Select A Client</label>
                                                <div class="col-md-3">

                                                    <select id="single" class="form-control select2" name="clientID">
                                                        <option></option>
                                                        @foreach($clients as $client)
                                                            <option value="{{$client->id}}" {{($client->id == $object->clientID)?'selected':''}}>{{$client->username}}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label col-md-3">Notes</label>
                                                <div class="col-md-3"  >
                                                    <textarea class="form-control" rows="5" name="description">{{$object->description}}</textarea>
                                                </div>
                                            </div>
                                            <center>
                                                <div class="form-actions">
                                                    <button type="submit" class="btn green button-submit"> Update
                                                        <i class="fa fa-check"></i>
                                                    </button>
                                                    <a data-toggle="confirmation" data-singleton="true" href="{{route('deleteSessionDB',['sessionID'=>$object->sessionID])}}" class="btn btn-danger"> Delete
                                                        <i class="fa fa-remove"></i>
                                                    </a>
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