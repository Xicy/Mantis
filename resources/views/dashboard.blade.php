@extends('layouts.app')

@section('content')

                    <div id="main-wrapper">
                        <div class="row">

                            <div class="col-md-6">
                                <div class="panel panel-darkblue">
                                    <div class="panel-heading clearfix">
                                        <h4 class="panel-title">Live Stats<span class="panel-title-small">Live API</span></h4>
                                    </div>
                                    <div class="panel-body dashboard-panel">
                                        <div class="browser-stats">
                                            <ul class="list-unstyled">
                                                <li><i class="fa fa-money"></i>Balance<div class="text-success pull-right">{{$balance.' '.$currency}}<i class="fa fa-level-up"></i></div></li>
                                                <li><i class="fa fa-file-zip-o"></i>Uploads<div class="text-success pull-right">{{$file_count}}<i class="fa fa-level-up"></i></div></li>
                                                <li><i class="fa fa-btc"></i>Bitcoin Price<div class="text-success pull-right">{{$btc_price}} $<i class="fa fa-level-up"></i></div></li>
                                                <li><i class="fa fa-usd"></i>Mantis Price<div class="text-success pull-right">{{$coin_price}} $<i class="fa fa-level-up"></i></div></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="panel panel-darkblue">
                                    <div class="panel-heading clearfix">
                                        <h4 class="panel-title">Server Status</h4>
                                    </div>
                                    <div class="panel-body dashboard-panel">
                                        <div class="container-fluid">
                                            <div class="server-load row">
                                                <div class="server-stat col-sm-4">
                                                    <p id="usage"></p>
                                                    <span>Usage</span>
                                                </div>
                                                <div class="server-stat col-sm-4">
                                                    <p id="space"></p>
                                                    <span>Space</span>
                                                </div>
                                                <div class="server-stat col-sm-4">
                                                    <p id="cpu"></p>
                                                    <span>CPU</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div id="chart1"><svg></svg></div>
                                    </div>
                                </div>
                            </div>
                        </div><!-- Row -->
                        <div class="row">
                            <div class="col-md-6">
                                <div class="panel panel-darkblue">
                                    <div class="panel-heading clearfix">
                                        <h4 class="panel-title">Most Answered Questions From Community</h4>
                                    </div>
                                    <div class="panel-body">
                                        <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                                            <div class="panel panel-default">
                                                <div class="panel-heading" role="tab" id="headingOne">
                                                    <h4 class="panel-title">
                                                        <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                                            What is the connection between Mantis Network between Mantis Blockchain ?
                                                        </a>
                                                    </h4>
                                                </div>
                                                <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                                                    <div class="panel-body">
                                                        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="panel panel-default">
                                                <div class="panel-heading" role="tab" id="headingTwo">
                                                    <h4 class="panel-title">
                                                        <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                                            How Mantis Network will keep privacy and store my files ?
                                                        </a>
                                                    </h4>
                                                </div>
                                                <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                                                    <div class="panel-body">
                                                        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="panel panel-default">
                                                <div class="panel-heading" role="tab" id="headingThree">
                                                    <h4 class="panel-title">
                                                        <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                                            Other users will be able to see my files or download links ?
                                                        </a>
                                                    </h4>
                                                </div>
                                                <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                                                    <div class="panel-body">
                                                        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="panel panel-darkblue">
                                    <div class="panel-heading clearfix">
                                        <h4 class="panel-title">Plupload</h4>
                                    </div>
                                    <div class="panel-body">
                                        <div id="uploader">
                                            <p>Your browser doesn't have Flash, Silverlight or HTML5 support.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div><!-- Row -->
                        <div class="row">

                        </div><!-- Row -->
                    </div><!-- Main Wrapper -->



@endsection
