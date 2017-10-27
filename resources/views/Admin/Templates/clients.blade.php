@extends('Admin.Layouts.header_footer')

@section('content')
    <div class="container-fluid">
        <div class="page-content">
            <div class="breadcrumbs">
                <h1>Clients</h1>
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
                                            <span class="caption-subject font-green bold uppercase">Clients</span>
                                        </div>
                                    </div>
                                    <div class="portlet-body">
                                        <div class="mt-element-card mt-element-overlay">
                                            <div class="row">
                                                @foreach($clients as $client)
                                                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                                    <div class="mt-card-item">
                                                        <div class="mt-card-avatar mt-overlay-1 mt-scroll-left">
                                                            <img src="{{($client->picture)?asset('assets/images/users/clients/'.$client->picture):'http://www.placehold.it/200x150/EFEFEF/AAAAAA&amp;text=no+image'}}"/>
                                                            <div class="mt-overlay">
                                                                <ul class="mt-info">
                                                                    <li>
                                                                        <a class="btn default btn-outline" href="{{route('clientProfile',['username'=>$client->username])}}">
                                                                            <i class="fa fa-eye"></i>
                                                                        </a>
                                                                        <form style="display: inline" method="post" action="{{route('removeClient')}}">
                                                                            {{csrf_field()}}
                                                                            <input type = "hidden" value="{{$client->id}}" name="clientID">
                                                                        <button style="display: inline" data-toggle="confirmation" data-singleton="true" type="submit" class="btn default btn-outline">
                                                                            <i class="fa fa-remove"></i>
                                                                        </button>
                                                                        </form>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div class="mt-card-content">
                                                            <h3 class="mt-card-name" style="color: deepskyblue">{{$client->firstName . ' ' . $client->lastName}}</h3>
                                                            <p class="mt-card-desc font-grey-mint">{{date('j F, Y', strtotime($client->registered))}}</p>
                                                            <p class="mt-card-desc font-grey-mint">{{$client->jobTitle}}</p>
                                                            <p class="mt-card-desc font-grey-mint">{{$client->email}}</p>
                                                            <p class="mt-card-desc font-grey-mint">{{$client->phone}}</p>

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