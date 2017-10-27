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
                                        <span class="caption-subject font-red sbold uppercase">Add Company</span>
                                    </div>
                                </div>
                                <div class="portlet-body form">
                                    <!-- BEGIN FORM-->
                                    <form action="{{route('addCompanyDB')}}" class="form-horizontal form-bordered" method="post" enctype="multipart/form-data">
                                        {{csrf_field()}}
                                        <div class="form-body">
                                            <div class="form-group">
                                                <label class="control-label col-md-3">Name </label>
                                                <div class="col-md-3">
                                                    <input type="text" class="form-control" name="name" required/>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label col-md-3">Manufacture </label>
                                                <div class="col-md-3">
                                                <select name="manufacture" class="form-control select2" aria-describedby="industryChooser-editLocationForm-error">
                                                    <option>Choose industry...</option>
                                                    <option>Accounting</option>
                                                    <option>Airlines/Aviation</option>
                                                    <option>Alternative Dispute Resolution</option>
                                                    <option>Alternative Medicine</option>
                                                    <option>Animation</option>
                                                    <option>Apparel &amp; Fashion</option>
                                                    <option>Architecture &amp; Planning</option>
                                                    <option>Arts and Crafts</option>
                                                    <option>Automotive</option>
                                                    <option>Aviation &amp; Aerospace</option>
                                                    <option>Banking</option>
                                                    <option>Biotechnology</option>
                                                    <option>Broadcast Media</option>
                                                    <option>Building Materials</option>
                                                    <option>Business Supplies and Equipment</option>
                                                    <option>Capital Markets</option>
                                                    <option>Chemicals</option>
                                                    <option>Civic &amp; Social Organization</option>
                                                    <option>Civil Engineering</option>
                                                    <option>Commercial Real Estate</option>
                                                    <option>Computer &amp; Network Security</option>
                                                    <option>Computer Games</option>
                                                    <option>Computer Hardware</option>
                                                    <option>Computer Networking</option>
                                                    <option>Computer Software</option>
                                                    <option>Construction</option>
                                                    <option>Consumer Electronics</option>
                                                    <option>Consumer Goods</option>
                                                    <option>Consumer Services</option>
                                                    <option>Cosmetics</option>
                                                    <option>Dairy</option>
                                                    <option>Defense &amp; Space</option>
                                                    <option>Design</option>
                                                    <option>Education Management</option>
                                                    <option>E-Learning</option>
                                                    <option>Electrical/Electronic Manufacturing</option>
                                                    <option>Entertainment</option>
                                                    <option>Environmental Services</option>
                                                    <option>Events Services</option>
                                                    <option>Executive Office</option>
                                                    <option>Facilities Services</option>
                                                    <option>Farming</option>
                                                    <option>Financial Services</option>
                                                    <option>Fine Art</option>
                                                    <option>Government Administration</option>
                                                    <option>Government Relations</option>
                                                    <option>Graphic Design</option>
                                                    <option>Health, Wellness and Fitness</option>
                                                    <option>Higher Education</option>
                                                    <option>Hospital &amp; Health Care</option>
                                                    <option>Hospitality</option>
                                                    <option>Human Resources</option>
                                                    <option>Import and Export</option>
                                                    <option>Individual &amp; Family Services</option>
                                                    <option>Industrial Automation</option>
                                                    <option>Information Services</option>
                                                    <option>Information Technology and Services</option>
                                                    <option>Insurance</option>
                                                    <option> International Affairs</option>
                                                    <option>International Trade and Development</option>
                                                </select>
                                                </div>
                                            </div>
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
                                            <center>
                                                <div class="form-actions">
                                                    <button type="submit" class="btn green button-submit"> Submit
                                                        <i class="fa fa-check"></i>
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