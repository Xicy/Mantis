@extends('layouts.app')

@section('content')
                <!-- Page Inner -->
                <div class="page-inner no-page-title">
                <div id="main-wrapper">
                    <div class="row">
                        <div class="col-md-3">

                                    <ul class="list-unstyled mailbox-nav">
                                <li class="active"><a href="inbox.html"><i class="fa fa-inbox"></i>Block Height <span class="badge badge-default pull-right">@LastBlockNumber</span></a></li>
                                <li><a href="#"><i class="fa fa-star"></i>Total Masternodes <span class="badge badge-danger pull-right">@AllMasternodeNumber</span></a></li>
                                <li><a href="#"><i class="fa fa-pencil"></i>Circulating Supply Mantis Network <span class="badge badge-primary pull-right">@CirculatingSupply</span></a></li>
                                        <li><a href="#"><i class="fa fa-pencil"></i>Masternode Collectral <span class="badge badge-success pull-right">@MNCollectral(stable)</span></a></li>
                                        <li><a href="#"><i class="fa fa-pencil"></i>Volume / 24h <span class="badge badge-success pull-right">@Volume(API)</span></a></li>
                                        <li><a href="#"><i class="fa fa-pencil"></i>Price <span class="badge badge-success pull-right">@Price(API)</span></a></li>

                            </ul>
                                    <hr>
                            <img src="../../assets/images/avatars/bitcoin.png" alt="" class="img-circle">                                </div>
                        <div class="col-md-9">
                            <div class="panel panel-darkblue">
                                <div class="panel-body">
                                    <table class="table mailbox-content">
                                <thead>
                                    <tr>
                                        <th class="text-right" colspan="5">
                                            <span class="text-muted m-r-sm">20 of 346 </span>
                                            <a class="btn btn-default m-r-sm" data-toggle="tooltip" data-placement="top" title="Refresh"><i class="fa fa-refresh"></i></a>
                                            <div class="btn-group">
                                                <a class="btn btn-default"><i class="fa fa-angle-left"></i></a>
                                                <a class="btn btn-default"><i class="fa fa-angle-right"></i></a>
                                            </div>
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="unread" data-toggle="modal" data-target="">


                                        <td>
                                            <b>Masternode Address</b>
                                        </td>
                                        <td>
                                            @RecievedCoin
                                        </td>
                                        <td>
                                            Masternode IP Address
                                        </td>
                                    </tr>
                                    <tr class="unread" data-toggle="modal" data-target="">


                                        <td>
                                            <b>Masternode Address</b>
                                        </td>
                                        <td>
                                            @RecievedCoin
                                        </td>
                                        <td>
                                            Masternode IP Address
                                        </td>
                                    </tr>
                                    <tr class="unread" data-toggle="modal" data-target="">


                                        <td>
                                            <b>Masternode Address</b>
                                        </td>
                                        <td>
                                            @RecievedCoin
                                        </td>
                                        <td>
                                            Masternode IP Address
                                        </td>
                                    </tr>
                                    <tr class="unread" data-toggle="modal" data-target="">


                                        <td>
                                            <b>Masternode Address</b>
                                        </td>
                                        <td>
                                            @RecievedCoin
                                        </td>
                                        <td>
                                            Masternode IP Address
                                        </td>
                                    </tr>
                                    <tr class="unread" data-toggle="modal" data-target="">


                                        <td>
                                            <b>Masternode Address</b>
                                        </td>
                                        <td>
                                            @RecievedCoin
                                        </td>
                                        <td>
                                            Masternode IP Address
                                        </td>
                                    </tr>
                                    <tr class="unread" data-toggle="modal" data-target="">


                                        <td>
                                            <b>Masternode Address</b>
                                        </td>
                                        <td>
                                            @RecievedCoin
                                        </td>
                                        <td>
                                            Masternode IP Address
                                        </td>
                                    </tr>
                                    <tr class="unread" data-toggle="modal" data-target="">


                                        <td>
                                            <b>Masternode Address</b>
                                        </td>
                                        <td>
                                            @RecievedCoin
                                        </td>
                                        <td>
                                            Masternode IP Address
                                        </td>
                                    </tr>
                                </tbody>
                            </table>

                                </div>
                            </div>
                        </div>
                    </div><!-- Row -->
                </div><!-- Main Wrapper -->

                </div><!-- /Page Inner -->
@endsection
