@extends('layouts.app')

@section('content')
                <!-- Page Inner -->
                <div class="page-inner no-page-title">
                <div id="main-wrapper">
                    <div class="row">
                        <div class="col-md-3">
                                    <button class="email-compose-button btn btn-info btn-block btn-rounded" data-toggle="modal" data-target="#compose">Add New Masternode</button>
                                            <div class="modal fade email-modal" id="compose" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                            <h4 class="modal-title" id="myModalLabel">New Masternode</h4>
                                                        </div>
                                                        <form method="POST" action="{{route('addmasternode')}}">
                                                            <div class="modal-body">
                                                                <div class="form-group">
                                                                    {{csrf_field()}}
                                                                    <label class="email-compose-label1" for="composeEmail">Masternode Address</label>
                                                                    <input type="text" class="form-control" name="address" id="composeEmail" placeholder="Please Provide Your Masternode Address">
                                                                    <label class="email-compose-label2" for="composeSubject">Name Of Your Node</label>
                                                                    <input type="text" class="form-control" name="name" id="composeSubject" placeholder="You can use random name">
                                                                </div>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
                                                                <button type="submit" class="btn btn-success btn-addon"><i class="fa fa-save"></i> Save</button>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                    </div>
                                    <ul class="list-unstyled mailbox-nav">
                                <li class="active"><a href="inbox.html"><i class="fa fa-inbox"></i>Running Masternodes <span class="badge badge-default pull-right">{{$count}}</span></a></li>
                                <li><a href="#"><i class="fa fa-star"></i>Total Masternodes <span class="badge badge-danger pull-right">{{$allCount}}</span></a></li>
                                <li><a href="#"><i class="fa fa-pencil"></i>Masternode Collectral <span class="badge badge-success pull-right">{{$getinfo['relayfee']}}</span></a></li>

                            </ul>
                                    <hr>
                            <img src="/assets/images/avatars/bitcoin.png" alt="" class="img-circle">                                </div>
                        <div class="col-md-9">
                            <div class="panel panel-darkblue">
                                <div class="panel-body">
                                    <table class="table mailbox-content">
                                <thead>
                                    <tr>
                                        <th class="text-right" colspan="5">
                                            <span class="text-muted m-r-sm">{{request('page',0)*10}} of {{$count}} </span>
                                            <a class="btn btn-default m-r-sm" data-toggle="tooltip" data-placement="top" title="Refresh"  href="{{route('masternodes')}}"><i class="fa fa-refresh"></i></a>
                                            <div class="btn-group">
                                                <a class="btn btn-default" href="{{route('masternodes',['page'=>request('page',0)-1])}}"><i class="fa fa-angle-left"></i></a>
                                                <a class="btn btn-default" href="{{route('masternodes',['page'=>request('page',0)+1])}}"><i class="fa fa-angle-right"></i></a>
                                            </div>
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($masternodes as $masternode)
                                    <tr class="unread" data-toggle="modal" data-target="">
                                        <td class="hidden-xs">
                                            <b>{{$masternode['name']}}</b>
                                        </td>
                                        <td>
                                            <b>{{$masternode['wallet']}}</b>
                                        </td>
                                        <td>
                                            {{ Str::limit($masternode['txhash'],20)}}
                                        </td>                                        
                                        <td>
                                            {{$masternode['status']}}
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>

                                </div>
                            </div>
                        </div>
                    </div><!-- Row -->
                </div><!-- Main Wrapper -->

                </div><!-- /Page Inner -->
@endsection
