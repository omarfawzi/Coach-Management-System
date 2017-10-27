@extends('Admin.Layouts.header_footer')
@section('content')
    <div class="container-fluid">
        <div class="page-content">
            <div class="page-content-row">
                <!-- BEGIN PAGE SIDEBAR -->
                <!-- END PAGE SIDEBAR -->
                <div class="page-content-col">
                    <!-- BEGIN PAGE BASE CONTENT -->
                    <div class="profile">
                        <div class="tabbable-line tabbable-full-width">
                            <ul class="nav nav-tabs">
                                <li class="active">
                                    <a href="#tab_1_1" data-toggle="tab"> Overview </a>
                                </li>
                                <li>
                                    <a href="#tab_1_3" data-toggle="tab"> Account </a>
                                </li>

                                <li>
                                    <a href="#tab_1_4" data-toggle="tab"> Financials </a>
                                </li>

                                <li>
                                    <a href="#tab_1_5" data-toggle="tab"> Strength Points </a>
                                </li>

                            </ul>
                            <div class="tab-content">
                                <div class="tab-pane active" id="tab_1_1">
                                    <div class="row">
                                        <div class="col-md-3">
                                            <ul class="list-unstyled profile-nav">
                                                <li>
                                                    <img src="{{($client->picture)?asset('assets/images/users/clients/'.$client->picture):'http://www.placehold.it/200x150/EFEFEF/AAAAAA&amp;text=no+image'}}"
                                                         class="img-responsive pic-bordered" alt=""/>
                                                    {{--<a href="javascript:;" class="profile-edit"> edit </a>--}}
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="col-md-9">
                                            <div class="row">
                                                <div class="col-md-8 profile-info">
                                                    <h1 class="font-green sbold uppercase">{{$client->firstName.' '.$client->lastName}}</h1>
                                                    <h4>{{$client->jobTitle}}</h4>

                                                </div>

                                                <!--end col-md-8-->
                                                <div class="col-md-4">
                                                    <div class="portlet sale-summary">
                                                        <div class="portlet-title">
                                                            <div class="caption font-red sbold"> Financials</div>
                                                        </div>
                                                        <div class="portlet-body">
                                                            <ul class="list-unstyled">
                                                                <li>
                                                                    <span class="sale-info"> Total
                                                                        <i class="fa fa-img-up"></i>
                                                                    </span>
                                                                    <span class="sale-num"> {{$financials->cost . ' ' . $financials->currency }} </span>
                                                                </li>
                                                                <li>
                                                                    <span class="sale-info"> Paid
                                                                        <i class="fa fa-img-down"></i>
                                                                    </span>
                                                                    <span class="sale-num"> {{$financials->paid . ' ' . $financials->currency}} </span>
                                                                </li>
                                                                <li>
                                                                    <span class="sale-info"> Remaining
                                                                        <i class="fa fa-img-down"></i>
                                                                    </span>
                                                                    <span class="sale-num"> {{$financials->cost-$financials->paid . ' ' .$financials->currency}} </span>
                                                                </li>

                                                                <li>
                                                                    <span class="sale-info"> Payment Method </span>
                                                                    <span class="sale-num"> {{$financials->pricing}} </span>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--end col-md-4-->
                                            </div>
                                            <!--end row-->
                                            <div class="tabbable-line tabbable-custom-profile">
                                                <ul class="nav nav-tabs">

                                                    <li class="active">
                                                        <a href="#tab_1_22" data-toggle="tab"> Sessions </a>
                                                    </li>
                                                </ul>
                                                <div class="tab-content">
                                                    <!--tab-pane-->
                                                    <div class="tab-pane active" id="tab_1_22">
                                                        <div class="tab-pane active" id="tab_1_1_1">
                                                            <div class="scroller" data-height="290px"
                                                                 data-always-visible="1" data-rail-visible1="1">
                                                                <ul class="feeds">
                                                                    @foreach($client->sessions as $key => $session)
                                                                        <li>
                                                                            <a href="{{route('updateSession',['sessionID'=>$session->id])}}">

                                                                                <div class="col1">
                                                                                    <div class="cont">
                                                                                        <div class="cont-col1">
                                                                                            <div class="label label-success">
                                                                                                <i class="fa fa-calendar"></i>
                                                                                            </div>
                                                                                        </div>

                                                                                        <div class="cont-col2">
                                                                                            <div class="desc">
                                                                                                Session {{$key+1}}
                                                                                                &nbsp;&nbsp;&nbsp;&nbsp;
                                                                                                <span class="label label-{{(strtotime(date('Y-m-d H:i:s')) < strtotime($session->startDate))?'danger':'success'}} label-sm"> {{(strtotime(date('Y-m-d H:i:s')) < strtotime($session->startDate))?'Upcoming':'Done'}}
                                                                                        </span>
                                                                                            </div>
                                                                                        </div>

                                                                                    </div>
                                                                                    <div class="date pull-right">{{date('g:i a', strtotime($session->startDate)).' to ' .date('g:i a', strtotime($session->endDate)) . ' ' .date('j F, Y',strtotime($session->startDate))}}</div>

                                                                                </div>
                                                                            </a>

                                                                        </li>
                                                                    @endforeach

                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!--tab-pane-->
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--tab_1_2-->
                                <div class="tab-pane" id="tab_1_3">
                                    <div class="row profile-account">
                                        <div class="col-md-12">
                                            <div class="tab-content">
                                                <div id="tab_1-1" class="tab-pane active">
                                                    <form role="form" action="{{route('updateProfile')}}" method="post" enctype="multipart/form-data">
                                                        {{csrf_field()}}
                                                        <input type="hidden" name="clientID" value="{{$client->id}}">
                                                        <div class="row">
                                                            <div class="col-md-8">
                                                                <div class="form-group">
                                                                    <label class="control-label">First Name</label>
                                                                    <input type="text" placeholder="John"
                                                                           value="{{$client->firstName}}"
                                                                           name="firstName" class="form-control"/>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label class="control-label">Last Name</label>
                                                                    <input type="text" value="{{$client->lastName}}"
                                                                           placeholder="Doe" name="lastName"
                                                                           class="form-control"/>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label class="control-label">Email</label>
                                                                    <input type="email" value="{{$client->email}}"
                                                                           name="email" class="form-control"/></div>
                                                                <div class="form-group">
                                                                    <label class="control-label">Username</label>
                                                                    <input type="text" name="username"
                                                                           value="{{$client->username}}"
                                                                           class="form-control" readonly/></div>
                                                                <div class="form-group">
                                                                    <label class="control-label">Password</label>
                                                                    <input type="text" name="password"
                                                                           value="{{$client->password}}"
                                                                           class="form-control"/></div>
                                                                <div class="form-group">
                                                                    <label class="control-label">Service </label>
                                                                        <select class="form-control select2" name="service" value="{{$client->service}}">
                                                                                <option value="consultation" {{($financials->pricing == 'consultation')?'selected':''}}>consultation</option>
                                                                                <option value="training" {{($financials->pricing == 'training')?'selected':''}}>training</option>
                                                                                <option value="individual coaching" {{($financials->pricing == 'individual coaching')?'selected':''}}>individual coaching</option>
                                                                                <option value="group coaching" {{($financials->pricing == 'group coaching')?'selected':''}}>group coaching</option>
                                                                                <option value="assessment" {{($financials->pricing == 'assessment')?'selected':''}}>assessment</option>
                                                                        </select>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label class="control-label">Job Title</label>
                                                                    <input type="text" name="jobTitle"
                                                                           value="{{$client->jobTitle}}"
                                                                           class="form-control"/></div>
                                                                <div class="form-group">
                                                                    <label class="control-label">Gender</label>
                                                                        <select class="form-control select2" name="gender">
                                                                            <option value="male" {{($client->gender == 'male')?'selected':''}}>male</option>
                                                                            <option value="female" {{($client->gender == 'female')?'selected':''}}>female</option>
                                                                        </select>
                                                                    </div>
                                                                <div class="form-group">
                                                                    <label class="control-label">Phone</label>
                                                                    <input type="text" name="phone"
                                                                           value="{{$client->phone}}"
                                                                           class="form-control"/></div>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <div class="form-group">
                                                                    <div class="fileinput fileinput-new"
                                                                         data-provides="fileinput">
                                                                        <div class="fileinput-new thumbnail"
                                                                             style="width: 200px; height: 150px;">
                                                                            <img src="{{($client->picture)?asset('assets/images/users/clients/'.$client->picture):'http://www.placehold.it/200x150/EFEFEF/AAAAAA&amp;text=no+image'}}"
                                                                                 alt=""/></div>
                                                                        <div class="fileinput-preview fileinput-exists thumbnail"
                                                                             style="max-width: 200px; max-height: 150px;"></div>
                                                                        <div>
                                                                                <span class="btn default btn-file">
                                                                                    <span class="fileinput-new"> Select image </span>
                                                                                    <span class="fileinput-exists"> Change </span>
                                                                                    <input type="file" name="picture"> </span>
                                                                            <a href="javascript:;"
                                                                               class="btn default fileinput-exists"
                                                                               data-dismiss="fileinput"> Remove </a>
                                                                        </div>
                                                                    </div>

                                                                </div>
                                                            </div>

                                                        </div>
                                                        <center>
                                                            <button type="submit" class="btn green"> Save Changes </button>
                                                        </center>
                                                    </form>
                                                </div>

                                            </div>
                                        </div>
                                        <!--end col-md-9-->
                                    </div>
                                </div>
                                <div class="tab-pane" id="tab_1_4">
                                    <div class="tab-content">

                                        <div class="portlet light form-fit bordered">
                                            <div class="portlet-title">
                                                <div class="caption">
                                                    <i class="icon-pin font-red"></i>
                                                    <span class="caption-subject font-red sbold uppercase">Update Financials</span>
                                                </div>
                                            </div>
                                            <div class="portlet-body form">
                                                <!-- BEGIN FORM-->
                                                <form action="{{route('updateFinancialDB')}}"
                                                      class="form-horizontal form-bordered" method="post">
                                                    {{csrf_field()}}
                                                    <div class="form-body">

                                                        <div class="form-group">
                                                            <label class="control-label col-md-3">Cost</label>
                                                            <div class="col-md-3">
                                                                <div class="input-group">
                                                                    <input type="text" class="form-control" name="cost"
                                                                           value="{{$financials->cost}}">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="control-label col-md-3">Paid</label>
                                                            <div class="col-md-3">
                                                                <div class="input-group">
                                                                    <input type="text" class="form-control" name="paid"
                                                                           value="{{$financials->paid}}">
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="form-group">
                                                            <label class="control-label col-md-3">Currency</label>
                                                            <div class="col-md-3">
                                                                <div class="input-group">
                                                                    <select class="form-control select2" name="currency" value="{{$financials->currency}}">
                                                                        <option value="USD">America (United States) Dollars – USD</option>
                                                                        {{--<option value="AFN">Afghanistan Afghanis – AFN</option>--}}
                                                                        {{--<option value="ALL">Albania Leke – ALL</option>--}}
                                                                        {{--<option value="DZD">Algeria Dinars – DZD</option>--}}
                                                                        {{--<option value="ARS">Argentina Pesos – ARS</option>--}}
                                                                        {{--<option value="AUD">Australia Dollars – AUD</option>--}}
                                                                        {{--<option value="ATS">Austria Schillings – ATS</OPTION>--}}
                                                                        {{--<option value="BSD">Bahamas Dollars – BSD</option>--}}
                                                                        {{--<option value="BHD">Bahrain Dinars – BHD</option>--}}
                                                                        {{--<option value="BDT">Bangladesh Taka – BDT</option>--}}
                                                                        {{--<option value="BBD">Barbados Dollars – BBD</option>--}}
                                                                        {{--<option value="BEF">Belgium Francs – BEF</OPTION>--}}
                                                                        {{--<option value="BMD">Bermuda Dollars – BMD</option>--}}
                                                                        {{--<option value="BRL">Brazil Reais – BRL</option>--}}
                                                                        {{--<option value="BGN">Bulgaria Leva – BGN</option>--}}
                                                                        {{--<option value="CAD">Canada Dollars – CAD</option>--}}
                                                                        {{--<option value="XOF">CFA BCEAO Francs – XOF</option>--}}
                                                                        {{--<option value="XAF">CFA BEAC Francs – XAF</option>--}}
                                                                        {{--<option value="CLP">Chile Pesos – CLP</option>--}}
                                                                        {{--<option value="CNY">China Yuan Renminbi – CNY</option>--}}
                                                                        {{--<option value="CNY">RMB (China Yuan Renminbi) – CNY</option>--}}
                                                                        {{--<option value="COP">Colombia Pesos – COP</option>--}}
                                                                        {{--<option value="XPF">CFP Francs – XPF</option>--}}
                                                                        {{--<option value="CRC">Costa Rica Colones – CRC</option>--}}
                                                                        {{--<option value="HRK">Croatia Kuna – HRK</option>--}}
                                                                        {{--<option value="CYP">Cyprus Pounds – CYP</option>--}}
                                                                        {{--<option value="CZK">Czech Republic Koruny – CZK</option>--}}
                                                                        {{--<option value="DKK">Denmark Kroner – DKK</option>--}}
                                                                        {{--<option value="DEM">Deutsche (Germany) Marks – DEM</OPTION>--}}
                                                                        {{--<option value="DOP">Dominican Republic Pesos – DOP</option>--}}
                                                                        {{--<option value="NLG">Dutch (Netherlands) Guilders – NLG</OPTION>--}}
                                                                        {{--<option value="XCD">Eastern Caribbean Dollars – XCD</option>--}}
                                                                        <option value="EGP">Egypt Pounds – EGP</option>
                                                                        {{--<option value="EEK">Estonia Krooni – EEK</option>--}}
                                                                        <option value="EUR">Euro – EUR</option>
                                                                        {{--<option value="FJD">Fiji Dollars – FJD</option>--}}
                                                                        {{--<option value="FIM">Finland Markkaa – FIM</OPTION>--}}
                                                                        {{--<option value="FRF*">France Francs – FRF*</OPTION>--}}
                                                                        {{--<option value="DEM">Germany Deutsche Marks – DEM</OPTION>--}}
                                                                        {{--<option value="XAU">Gold Ounces – XAU</option>--}}
                                                                        {{--<option value="GRD">Greece Drachmae – GRD</OPTION>--}}
                                                                        {{--<option value="GTQ">Guatemalan Quetzal – GTQ</OPTION>--}}
                                                                        {{--<option value="NLG">Holland (Netherlands) Guilders – NLG</OPTION>--}}
                                                                        {{--<option value="HKD">Hong Kong Dollars – HKD</option>--}}
                                                                        {{--<option value="HUF">Hungary Forint – HUF</option>--}}
                                                                        {{--<option value="ISK">Iceland Kronur – ISK</option>--}}
                                                                        {{--<option value="XDR">IMF Special Drawing Right – XDR</option>--}}
                                                                        {{--<option value="INR">India Rupees – INR</option>--}}
                                                                        {{--<option value="IDR">Indonesia Rupiahs – IDR</option>--}}
                                                                        {{--<option value="IRR">Iran Rials – IRR</option>--}}
                                                                        {{--<option value="IQD">Iraq Dinars – IQD</option>--}}
                                                                        {{--<option value="IEP*">Ireland Pounds – IEP*</OPTION>--}}
                                                                        {{--<option value="ITL*">Italy Lire – ITL*</OPTION>--}}
                                                                        {{--<option value="JMD">Jamaica Dollars – JMD</option>--}}
                                                                        {{--<option value="JPY">Japan Yen – JPY</option>--}}
                                                                        {{--<option value="JOD">Jordan Dinars – JOD</option>--}}
                                                                        {{--<option value="KES">Kenya Shillings – KES</option>--}}
                                                                        {{--<option value="KRW">Korea (South) Won – KRW</option>--}}
                                                                        <option value="KWD">Kuwait Dinars – KWD</option>
                                                                        {{--<option value="LBP">Lebanon Pounds – LBP</option>--}}
                                                                        {{--<option value="LUF">Luxembourg Francs – LUF</OPTION>--}}
                                                                        {{--<option value="MYR">Malaysia Ringgits – MYR</option>--}}
                                                                        {{--<option value="MTL">Malta Liri – MTL</option>--}}
                                                                        {{--<option value="MUR">Mauritius Rupees – MUR</option>--}}
                                                                        {{--<option value="MXN">Mexico Pesos – MXN</option>--}}
                                                                        {{--<option value="MAD">Morocco Dirhams – MAD</option>--}}
                                                                        {{--<option value="NLG">Netherlands Guilders – NLG</OPTION>--}}
                                                                        {{--<option value="NZD">New Zealand Dollars – NZD</option>--}}
                                                                        {{--<option value="NOK">Norway Kroner – NOK</option>--}}
                                                                        {{--<option value="OMR">Oman Rials – OMR</option>--}}
                                                                        {{--<option value="PKR">Pakistan Rupees – PKR</option>--}}
                                                                        {{--<option value="XPD">Palladium Ounces – XPD</option>--}}
                                                                        {{--<option value="PEN">Peru Nuevos Soles – PEN</option>--}}
                                                                        {{--<option value="PHP">Philippines Pesos – PHP</option>--}}
                                                                        {{--<option value="XPT">Platinum Ounces – XPT</option>--}}
                                                                        {{--<option value="PLN">Poland Zlotych – PLN</option>--}}
                                                                        {{--<option value="PTE">Portugal Escudos – PTE</OPTION>--}}
                                                                        <option value="QAR">Qatar Riyals – QAR</option>
                                                                        {{--<option value="RON">Romania New Lei – RON</option>--}}
                                                                        {{--<option value="ROL">Romania Lei – ROL</option>--}}
                                                                        {{--<option value="RUB">Russia Rubles – RUB</option>--}}
                                                                        <option value="SAR">Saudi Arabia Riyals – SAR</option>
                                                                        {{--<option value="XAG">Silver Ounces – XAG</option>--}}
                                                                        {{--<option value="SGD">Singapore Dollars – SGD</option>--}}
                                                                        {{--<option value="SKK">Slovakia Koruny – SKK</option>--}}
                                                                        {{--<option value="SIT">Slovenia Tolars – SIT</option>--}}
                                                                        {{--<option value="ZAR">South Africa Rand – ZAR</option>--}}
                                                                        {{--<option value="KRW">South Korea Won – KRW</option>--}}
                                                                        {{--<option value="ESP">Spain Pesetas – ESP</OPTION>--}}
                                                                        {{--<option value="XDR">Special Drawing Rights (IMF) – XDR</option>--}}
                                                                        {{--<option value="LKR">Sri Lanka Rupees – LKR</option>--}}
                                                                        {{--<option value="SDD">Sudan Dinars – SDD</option>--}}
                                                                        {{--<option value="SEK">Sweden Kronor – SEK</option>--}}
                                                                        {{--<option value="CHF">Switzerland Francs – CHF</option>--}}
                                                                        {{--<option value="TWD">Taiwan New Dollars – TWD</option>--}}
                                                                        {{--<option value="THB">Thailand Baht – THB</option>--}}
                                                                        {{--<option value="TTD">Trinidad and Tobago Dollars – TTD</option>--}}
                                                                        {{--<option value="TND">Tunisia Dinars – TND</option>--}}
                                                                        {{--<option value="TRY">Turkey New Lira – TRY</option>--}}
                                                                        <option value="AED">United Arab Emirates Dirhams – AED</option>
                                                                        {{--<option value="GBP">United Kingdom Pounds – GBP</option>--}}
                                                                        {{--<option value="USD">United States Dollars – USD</option>--}}
                                                                        {{--<option value="VEB">Venezuela Bolivares – VEB</option>--}}

                                                                        {{--<option value="VND">Vietnam Dong – VND</option>--}}
                                                                        {{--<option value="ZMK">Zambia Kwacha – ZMK</option>--}}
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="form-group">
                                                            <label class="control-label col-md-3">Payment Method</label>
                                                            <div class="col-md-3">
                                                                <div class="input-group">
                                                                    <select class="form-control" name="pricing" value="{{$financials->pricing}}">
                                                                       <option value="installment" {{($financials->pricing == 'installment')?'selected':''}}>installment</option>
                                                                        <option value="cash" {{($financials->pricing == 'cash')?'selected':''}}>cash</option>

                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <input type="hidden" value="{{$client->id}}" name="clientID">
                                                        <center>
                                                            <div class="form-actions">
                                                                <button type="submit" class="btn green button-submit">
                                                                    Submit
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
                                    <!--end tab-pane-->
                                    <!--end tab-pane-->
                                </div>
                                <div class="tab-pane" id="tab_1_5">
                                    <div class="tab-content">
                                        <form id="strength_form" method="post" action="{{route('updateStrengthPoints')}}">
                                            {{csrf_field()}}
                                            <input type="hidden" name="clientID" value="{{$client->id}}">
                                        <div class="form-group">
                                            <div class="row">
                                                <br>
                                                <br>
                                                <div class="col-md-3"  >
                                                    <center><h4>Client Strength Points</h4></center>
                                                    <hr>
                                                    <ul id="strength" class="list-group list-group-sortable-connected" style="min-height: 500px; border: 1px solid darkgrey;max-height: 350px;overflow-y: scroll;">
                                                        @foreach($client->strengthpoints as $strengthpoint)
                                                            <li class="list-group-item" style="color: white;background-color: {{$colors[$strengthpoint->name]['color']}}">{{$strengthpoint->name}}</li>
                                                        @endforeach
                                                    </ul>
                                                    <script>
                                                        $(document).ready(function (){
                                                            $('#strength').each(function() {
                                                                $(this).children('li').each(function(i) {
                                                                    $(this).prepend('<span>' + (i+1) + ' - </span>');
                                                                });
                                                            });
                                                        });
                                                    </script>
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
                                            <center>
                                                    <a id="submit_button" class="btn green button-submit">
                                                        Submit
                                                        <i class="fa fa-check"></i>
                                                    </a>
                                            </center>
                                        </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <script>
                        $('#submit_button').click(function(){
                            $('#strength').find('li').each(function(){
                                // cache jquery object
                                $(this).children('span').remove();

                                var current = $(this);
                                console.log(current);
                                $('#strength_form').append("<input name='strengths[]' type='hidden' value='"+current.text()+"'/>");
                            });
                           $('#strength_form').submit();
                        });
                    </script>
                    <!-- END PAGE BASE CONTENT -->
                </div>
            </div>
        </div>
        <!-- END SIDEBAR CONTENT LAYOUT -->
    </div>
@endsection