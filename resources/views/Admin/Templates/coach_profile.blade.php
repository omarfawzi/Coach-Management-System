@extends('Admin.Layouts.header_footer')
<link href="{{asset('assets/pages/css/profile.min.css')}}" rel="stylesheet" type="text/css" />

@section('content')
    <div class="container-fluid">
        <div class="page-content">
            <div class="page-content-container">
                <div class="page-content-row">
                    <div class="page-content-col">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="portlet light portlet-fit bordered">
                                    <div class="portlet-title">
                                        <div class="caption">
                                            <i class=" icon-layers font-green"></i>
                                            <span class="caption-subject font-green bold uppercase">My Profile</span>
                                        </div>
                                    </div>
                                    <div class="portlet-body">

                                    <!-- BEGIN PROFILE SIDEBAR -->
                                <div class="profile-sidebar">
                                    <!-- PORTLET MAIN -->
                                    <div class="portlet light profile-sidebar-portlet bordered">
                                        <!-- SIDEBAR USERPIC -->
                                        <div class="profile-userpic">
                                            <img src="{{asset('assets/images/users/coaches/'.auth()->user()->picture)}}" class="img-responsive" alt=""> </div>
                                        <!-- END SIDEBAR USERPIC -->
                                        <!-- SIDEBAR USER TITLE -->
                                        <div class="profile-usertitle">
                                            <div class="profile-usertitle-name"> {{ucfirst(auth()->user()->name)}} </div>
                                            <div class="profile-usertitle-job"> Coach </div>
                                        </div>
                                        <!-- END SIDEBAR USER TITLE -->
                                        <!-- SIDEBAR BUTTONS -->
                                        <!-- END SIDEBAR BUTTONS -->
                                        <!-- SIDEBAR MENU -->

                                        <!-- END MENU -->
                                    </div>
                                    <!-- END PORTLET MAIN -->
                                    <!-- PORTLET MAIN -->

                                    <!-- END PORTLET MAIN -->
                                </div>
                                <!-- END BEGIN PROFILE SIDEBAR -->
                                <!-- BEGIN PROFILE CONTENT -->
                                <div class="profile-content">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="portlet light bordered">
                                                <div class="portlet-title tabbable-line">
                                                    <div class="caption caption-md">
                                                        <i class="icon-globe theme-font hide"></i>
                                                        <span class="caption-subject font-blue-madison bold uppercase">Profile Account</span>
                                                    </div>
                                                    <ul class="nav nav-tabs">
                                                        <li class="active">
                                                            <a href="#tab_1_1" data-toggle="tab">Personal Info</a>
                                                        </li>
                                                        <li>
                                                            <a href="#tab_1_2" data-toggle="tab">Change Picture</a>
                                                        </li>
                                                        <li>
                                                            <a href="#tab_1_3" data-toggle="tab">Change Password</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="portlet-body">
                                                    <div class="tab-content">
                                                        <!-- PERSONAL INFO TAB -->
                                                        <div class="tab-pane active" id="tab_1_1">
                                                            <form role="form" action="{{route('updateData')}}" method="post">
                                                                {{csrf_field()}}
                                                                <div class="form-group">
                                                                    <label class="control-label">Name</label>
                                                                    <input type="text" placeholder="John" name="name" value="{{ucfirst(auth()->user()->name)}}" class="form-control" required/> </div>
                                                                <div class="form-group">
                                                                    <label class="control-label">Occupation</label>
                                                                    <input type="text" value="Coach" class="form-control" disabled/> </div>
                                                                <div class="form-group">
                                                                    <label class="control-label">Email</label>
                                                                    <input type="text" value="{{auth()->user()->email}}" class="form-control"  disabled/>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label class="control-label">About</label>
                                                                    <textarea class="form-control" rows="5" name="about" placeholder="">{{auth()->user()->about}}</textarea>
                                                                </div>
                                                                <div class="margiv-top-10">
                                                                    <button type="submit" class="btn green"> Save Changes </button>
                                                                </div>
                                                            </form>
                                                        </div>
                                                        <!-- END PERSONAL INFO TAB -->
                                                        <!-- CHANGE AVATAR TAB -->
                                                        <div class="tab-pane" id="tab_1_2">
                                                             <form action="{{route('changePicture')}}" method="post" role="form" enctype="multipart/form-data">
                                                                 {{csrf_field()}}
                                                                <div class="form-group">
                                                                    <div class="fileinput fileinput-new" data-provides="fileinput">
                                                                        <div class="fileinput-new thumbnail" style="width: 200px; height: 150px;">
                                                                            <img src="{{(auth()->user()->picture)?asset('assets/images/users/coaches/'.auth()->user()->picture):'http://www.placehold.it/200x150/EFEFEF/AAAAAA&amp;text=no+image'}}" alt="" /> </div>
                                                                        <div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 200px; max-height: 150px;"> </div>
                                                                        <div>
                                                                                    <span class="btn default btn-file">
                                                                                        <span class="fileinput-new"> Select image </span>
                                                                                        <span class="fileinput-exists"> Change </span>
                                                                                        <input type="file" name="picture" required> </span>
                                                                            <a href="javascript:;" class="btn default fileinput-exists" data-dismiss="fileinput"> Remove </a>
                                                                        </div>
                                                                    </div>

                                                                </div>
                                                                <div class="margin-top-10">
                                                                    <button type="submit" class="btn green"> Submit </button>
                                                                </div>
                                                            </form>
                                                        </div>
                                                        <!-- END CHANGE AVATAR TAB -->
                                                        <!-- CHANGE PASSWORD TAB -->
                                                        <div class="tab-pane" id="tab_1_3">
                                                            <form action="{{route('changePassword')}}" method="post">
                                                                {{csrf_field()}}
                                                                <div class="form-group">
                                                                    <label class="control-label" id="">New Password</label>
                                                                    <input type="password" id="new_password" class="form-control" required/> </div>
                                                                <div class="form-group">
                                                                    <label class="control-label">Re-type New Password</label>
                                                                    <input type="password" id="confirm_password" class="form-control" required/>
                                                                    <span class="help-block" style="display: none;color: darkred">
                                                                        Password doesn't match
                                                                    </span>
                                                                </div>
                                                                <div class="margin-top-10">
                                                                    <button type="submit" class="btn green"> Change Password </button>
                                                                </div>
                                                            </form>
                                                        </div>
                                                        <script>
                                                            $('#confirm_password').keyup(function () {
                                                                var errorBox = $(this).parent().children('span');
                                                                var new_password = $('#new_password').val();
                                                                if (!$(this).val()){
                                                                    errorBox.hide();
                                                                }
                                                                else if (new_password != $(this).val()){
                                                                    errorBox.show();
                                                                }
                                                                else{
                                                                    errorBox.hide();
                                                                }
                                                            });
                                                        </script>
                                                        <!-- END CHANGE PASSWORD TAB -->
                                                        <!-- PRIVACY SETTINGS TAB -->

                                                        <!-- END PRIVACY SETTINGS TAB -->
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- END PROFILE CONTENT -->
                            </div>
                        </div>

                    </div>
                </div>
                <!--end col-md-9-->
            </div>
        </div>
    </div>
        </div>
    </div>

@endsection