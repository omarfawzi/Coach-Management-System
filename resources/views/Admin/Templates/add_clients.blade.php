@extends('Admin.Layouts.header_footer')

@section('content')
    <div class="container-fluid">
        <div class="page-content">
            <div class="page-content-row">
            <div class="page-content-col">
                <!-- BEGIN PAGE BASE CONTENT -->
                <div class="row">
                    <div class="col-md-12">
                        <div class="portlet light bordered" id="form_wizard_1">
                            <div class="portlet-title">
                                <div class="caption">
                                    <i class=" icon-layers font-red"></i>
                                    <span class="caption-subject font-red bold uppercase"> Add Client -
                                                        <span class="step-title"> Step 1 of 3 </span>
                                                    </span>
                                </div>

                            </div>
                            <div class="portlet-body form">
                                <form class="form-horizontal" action="{{route('addClientsDB')}}" id="submit_form" method="POST" enctype="multipart/form-data">
                                    {{csrf_field()}}
                                    <div class="form-wizard">
                                        <div class="form-body">
                                            <ul class="nav nav-pills nav-justified steps">
                                                <li>
                                                    <a href="#tab1" data-toggle="tab" class="step">
                                                        <span class="number"> 1 </span>
                                                        <span class="desc">
                                                                            <i class="fa fa-check"></i> Account Setup </span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#tab2" data-toggle="tab" class="step">
                                                        <span class="number"> 2 </span>
                                                        <span class="desc">
                                                                            <i class="fa fa-check"></i> Add Avatar </span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#tab3" data-toggle="tab" class="step active">
                                                        <span class="number"> 3 </span>
                                                        <span class="desc">
                                                                            <i class="fa fa-check"></i> Add Strength </span>
                                                    </a>
                                                </li>

                                            </ul>
                                            <div id="bar" class="progress progress-striped" role="progressbar">
                                                <div class="progress-bar progress-bar-success"> </div>
                                            </div>
                                            <div class="tab-content">
                                                <div class="alert alert-danger display-none">
                                                    <button class="close" data-dismiss="alert"></button> You have some form errors. Please check below. </div>
                                                <div class="alert alert-success display-none">
                                                    <button class="close" data-dismiss="alert"></button> Your form validation is successful! </div>
                                                <div class="tab-pane active" id="tab1">
                                                    <h3 class="block">Provide your account details</h3>
                                                    <div class="form-group">
                                                        <label class="control-label col-md-3">FirstName </label>
                                                        <div class="col-md-4">
                                                            <input type="text" class="form-control" name="firstName" />
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="control-label col-md-3">LastName </label>
                                                        <div class="col-md-4">
                                                            <input type="text" class="form-control" name="lastName" />
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="control-label col-md-3">Username
                                                            <span class="required"> * </span>
                                                        </label>
                                                        <div class="col-md-4">
                                                            <input type="text" class="form-control" name="username" />
                                                            <span class="help-block"> Provide Username </span>
                                                            @if ($errors->has('username'))
                                                                <span class="help-block" style="color: red"> Username Exists </span>
                                                            @endif
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="control-label col-md-3">Password
                                                            <span class="required"> * </span>
                                                        </label>
                                                        <div class="col-md-4">
                                                            <input type="password" class="form-control" name="password" id="submit_form_password" />
                                                            <span class="help-block"> Provide Password. </span>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="control-label col-md-3">Confirm Password
                                                            <span class="required"> * </span>
                                                        </label>
                                                        <div class="col-md-4">
                                                            <input type="password" class="form-control" name="rpassword" />
                                                            <span class="help-block"> Confirm Password </span>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="control-label col-md-3">Email
                                                        </label>
                                                        <div class="col-md-4">
                                                            <input type="text" class="form-control" name="email" />
                                                            @if ($errors->has('email'))
                                                                <span class="help-block" style="color: red"> Email Exists </span>
                                                                @else
                                                                <span class="help-block"> Provide Email Address </span>
                                                            @endif
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="control-label col-md-3">Gender</label>
                                                        <div class="col-md-4">
                                                            <select class="form-control select2" name="gender">
                                                                <option value="male">male</option>
                                                                <option value="female">female</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="control-label col-md-3">Phone </label>
                                                        <div class="col-md-4">
                                                            <input type="number" class="form-control" name="phoneNumber" />
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="control-label col-md-3">Job Title </label>
                                                        <div class="col-md-4">
                                                            <input type="text" class="form-control" name="jobTitle" />
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="control-label col-md-3">Service </label>
                                                        <div class="col-md-4">
                                                            <select class="form-control select2" name="service">
                                                                <option value="consultation">consultation</option>
                                                                <option value="training">training</option>
                                                                <option value="individual coaching">individual coaching</option>
                                                                <option value="group coaching">group coaching</option>
                                                                <option value="assessment">assessment</option>
                                                            </select>
                                                        </div>
                                                    </div>

                                                </div>
                                                <div class="tab-pane" id="tab2">
                                                    <h3 class="block">Add Client Avatar</h3>
                                                    <div class="form-group">
                                                        <label class="control-label col-md-3">
                                                        </label>
                                                            <div class="col-md-4">
                                                        <div class="fileinput fileinput-new" data-provides="fileinput">
                                                            <div class="fileinput-new thumbnail" style="width: 200px; height: 150px;">
                                                                <img src="http://www.placehold.it/200x150/EFEFEF/AAAAAA&amp;text=no+image" alt="" /> </div>
                                                            <div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 200px; max-height: 150px;"> </div>
                                                            <div>
                                                                <span class="btn default btn-file">
                                                                <span class="fileinput-new"> Select image </span>
                                                                <span class="fileinput-exists"> Change </span>
                                                                <input type="file" name="picture"> </span>
                                                                <a href="javascript:;" class="btn default fileinput-exists" data-dismiss="fileinput"> Remove </a>
                                                            </div>
                                                        </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="tab-pane" id="tab3">
                                                    <h3 class="block">Adding Strength Points</h3>
                                                     <br>
                                                    <div class="form-group">
                                                        <div class="row">

                                                            <div class="col-md-3" >
                                                                <center><h4>Client Strength Points</h4></center>
                                                                <hr>
                                                                <ul id="strength" class="list-group list-group-sortable-connected" style="min-height: 500px; border: 1px solid darkgrey">
                                                                </ul>
                                                            </div>
                                                            <div class="col-sm-9">
                                                                <center><h4>Available Strength Points</h4></center>
                                                                <hr>
                                                                <div class="col-sm-3">
                                                                    <strong>Executing</strong>
                                                                    <hr>
                                                                    <ul class="list-group list-group-sortable-connected">
                                                                    <li class="list-group-item" style="background-color: darkviolet;color: white;">Achiever</li>
                                                                    <li class="list-group-item" style="background-color: darkviolet;color: white;">Arranger</li>
                                                                    <li class="list-group-item" style="background-color: darkviolet;color: white;">Belief</li>
                                                                    <li class="list-group-item" style="background-color: darkviolet;color: white;">Consistency</li>
                                                                    <li class="list-group-item" style="background-color: darkviolet;color: white;">Deliberative</li>
                                                                    <li class="list-group-item" style="background-color: darkviolet;color: white;">Discipline</li>
                                                                    <li class="list-group-item" style="background-color: darkviolet;color: white;">Focus</li>
                                                                    <li class="list-group-item" style="background-color: darkviolet;color: white;">Responsibility</li>
                                                                    <li class="list-group-item" style="background-color: darkviolet;color: white;">Restorative</li>
                                                                    </ul>
                                                                </div>
                                                                <div class="col-sm-3">
                                                                    <strong>Influencing</strong>
                                                                    <hr>
                                                                    <ul class="list-group list-group-sortable-connected">

                                                                    <li class="list-group-item" style="background-color: orange;color: white;">Activator</li>
                                                                    <li class="list-group-item" style="background-color: orange;color: white;">Command</li>
                                                                    <li class="list-group-item" style="background-color: orange;color: white;">Communication</li>
                                                                    <li class="list-group-item" style="background-color: orange;color: white;">Competition</li>
                                                                    <li class="list-group-item" style="background-color: orange;color: white;">Maximizer</li>
                                                                    <li class="list-group-item" style="background-color: orange;color: white;">Self-Assurance</li>
                                                                    <li class="list-group-item" style="background-color: orange;color: white;">Significance</li>
                                                                    <li class="list-group-item" style="background-color: orange;color: white;">Woo</li>
                                                                    </ul>
                                                                </div>
                                                                <div class="col-sm-3">
                                                                    <strong>Relationship Building</strong>
                                                                    <hr>
                                                                    <ul class="list-group list-group-sortable-connected">
                                                                        <li class="list-group-item" style="background-color: #3F58FF;color: white;">Adaptability</li>
                                                                        <li class="list-group-item" style="background-color: #3F58FF;color: white;">Connectedness</li>
                                                                        <li class="list-group-item" style="background-color: #3F58FF;color: white;">Developer</li>
                                                                        <li class="list-group-item" style="background-color: #3F58FF;color: white;">Empathy</li>
                                                                        <li class="list-group-item" style="background-color: #3F58FF;color: white;">Harmony</li>
                                                                        <li class="list-group-item" style="background-color: #3F58FF;color: white;">Includer</li>
                                                                        <li class="list-group-item" style="background-color: #3F58FF;color: white;">Individualization</li>
                                                                        <li class="list-group-item" style="background-color: #3F58FF;color: white;">Positivity</li>
                                                                        <li class="list-group-item" style="background-color: #3F58FF;color: white;">Relator</li>
                                                                    </ul>
                                                                </div>
                                                                <div class="col-sm-3">
                                                                    <strong>Strategic Thinking</strong>
                                                                    <hr>
                                                                    <ul class="list-group list-group-sortable-connected">

                                                                    <li class="list-group-item" style="background-color: darkred;color:white;">Analytical</li>
                                                                    <li class="list-group-item" style="background-color: darkred;color:white;">Context</li>
                                                                    <li class="list-group-item" style="background-color: darkred;color:white;">Futuristic</li>
                                                                    <li class="list-group-item" style="background-color: darkred;color:white;">Ideation</li>
                                                                    <li class="list-group-item" style="background-color: darkred;color:white;">Input</li>
                                                                    <li class="list-group-item" style="background-color: darkred;color:white;">Intellection</li>
                                                                    <li class="list-group-item" style="background-color: darkred;color:white;">Learner	</li>
                                                                    <li class="list-group-item" style="background-color: darkred;color:white;">Strategic</li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-actions">
                                            <div class="row">
                                                <div class="col-md-offset-3 col-md-9">
                                                    <a href="javascript:;" class="btn default button-previous">
                                                        <i class="fa fa-angle-left"></i> Back </a>
                                                    <a href="javascript:;" class="btn btn-outline green button-next"> Continue
                                                        <i class="fa fa-angle-right"></i>
                                                    </a>
                                                    <a href="javascript:;" id="submit_button" class="btn green button-submit"> Submit
                                                        <i class="fa fa-check"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <script>
                                        $('#submit_button').click(function () {
                                            $('#strength').find('li').each(function(){
                                                // cache jquery object
                                                var current = $(this);
                                                $('#submit_form').append("<input name='strengths[]' type='hidden' value='"+current.text()+"'/>");
                                            });
                                            $('#submit_form').submit();
                                        });
                                    </script>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
                <!-- END PAGE BASE CONTENT -->
            </div>
        </div>
    </div>

@endsection