@extends('Admin.Layouts.header_footer')

@section('content')
    <div class="container-fluid">
        <div class="page-content">
            <div class="breadcrumbs">
                <h1>Companies</h1>
                <hr style="display: inline">
                <!-- Sidebar Toggle Button -->
                <!-- Sidebar Toggle Button -->
            </div>
            <!-- END BREADCRUMBS -->
            <!-- BEGIN SIDEBAR CONTENT LAYOUT -->
            <div class="page-content-container">
                <div class="page-content-row">
                    <!-- BEGIN PAGE SIDEBAR -->
                    <!-- END PAGE SIDEBAR -->
                    <div class="page-content-col">
                        <!-- BEGIN PAGE BASE CONTENT -->
                        <div class="row">
                            <div class="col-md-12">
                                <div class="portlet light portlet-fit bordered">
                                    <div class="portlet-title">
                                        <div class="caption">
                                            <i class=" icon-layers font-green"></i>
                                            <span class="caption-subject font-green bold uppercase">Companies</span>
                                        </div>
                                    </div>
                                    <div class="portlet-body">
                                        <div class="mt-element-card mt-element-overlay">
                                            <div class="row">
                                                @foreach($companies as $company)
                                                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                                        <div class="mt-card-item">
                                                            <div class="mt-card-avatar mt-overlay-1 mt-scroll-left">
                                                                <img src="{{($company->picture)?asset('assets/images/companies/'.$company->picture):'http://www.placehold.it/200x150/EFEFEF/AAAAAA&amp;text=no+image'}}"/>
                                                                <div class="mt-overlay">
                                                                    <ul class="mt-info">
                                                                        <li>

                                                                            {{--<a class="btn default btn-outline" href="{{route('editCompany')}}">--}}
                                                                                {{--<i class="fa fa-eye"></i>--}}
                                                                            {{--</a>--}}
                                                                            <form style="display: inline" method="get" action="{{route('editCompany')}}">
                                                                                <input type = "hidden" value="{{$company->id}}" name="companyID">
                                                                                <button style="display: inline" type="submit" class="btn default btn-outline">
                                                                                    <i class="fa fa-eye"></i>
                                                                                </button>
                                                                            </form>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                            <div class="mt-card-content">
                                                                <h3 class="mt-card-name" style="color: deepskyblue">{{$company->name}}</h3>

                                                                <p class="mt-card-desc font-grey-mint">{{$company->manufacture}}</p>

                                                            </div>
                                                        </div>
                                                    </div>
                                                @endforeach
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection