@extends('layouts.app')

@section('content')
                <!-- Page Inner -->
                <div class="page-inner">
                    <div class="page-title">
                        <h3 class="breadcrumb-header">Cloud Pricing</h3>
                    </div>
                <div id="main-wrapper">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="panel panel-darkblue">
                                <div class="panel-body">
  <div class="row white">
				<div class="block">

					<div class="col-xs-12 col-sm-6 col-md-3">
							<ul class="pricing">
								<li><h2>Pay Via Mantis Network<img src="../../assets/images/icon-logo.png" alt="" class="img-circle" style="max-width: 20%"></h2></li>
								<li>100MB Storage</li>
								<li>$0.1 /// 20% Discount with Mantis Network</li>
								<li>{{$coin_price}} in $ price</li>
								<li>
									<h3 class="pricing-tables-price">1GB/$0.99</h3>
								</li>
								<li>
                                    <div class="panel-body">
                                        <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#exampleModal" data-whatever="@getbootstrap">Deposit Mantis Network</button>

                                        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                        <h4 class="modal-title" id="exampleModalLabel">Please Make Your Deposit To Generated Wallet Address</h4>
                                                    </div>
                                                    <div class="modal-body">
                                                        <form>
                                                            <div class="form-group">
                                                                <label for="recipient-name" class="control-label">Deposit Address:</label>
                                                                <input type="text" class="form-control" id="recipient-name" value="{{$wallet}}">
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="message-text" class="control-label">Your Credit Will Be Added Your Account After Block Confirmations</label>
                                                            </div>
                                                        </form>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-info" data-dismiss="modal">Close</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>								</li>
							</ul>
					</div>

					<div class="col-xs-12 col-sm-6 col-md-3">
							<ul class="pricing">
								<li><h2>Pay Via Bitcoin(BTC)<img src="../../assets/images/avatars/bitcoin.png" alt="" class="img-circle"></h2></li>
                                <li>100MB Storage</li>
                                <li>$0.12</li>
                                <li>{{$btc_price}} in $ price</li>
                                <li>
                                    <h3 class="pricing-tables-price">1GB/$1.2</h3>
                                </li>
								<li>
                                    <div class="panel-body">
                                        <button type="button" class="btn btn-warning btn-disabled" disabled data-toggle="modal" data-target="#exampleModal2" data-whatever="@getbootstrap">Not available yet</button>

                                        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                        <h4 class="modal-title" id="exampleModalLabel">Please Make Your Deposit To Generated Wallet Address</h4>
                                                    </div>
                                                    <div class="modal-body">
                                                        <form>
                                                            <div class="form-group">
                                                                <label for="recipient-name" class="control-label">Deposit Address:</label>
                                                                <input type="text" class="form-control" id="recipient-name" value="{{$wallet}}">
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="message-text" class="control-label">Your Credit Will Be Added Your Account After Block Confirmations</label>
                                                            </div>
                                                        </form>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-info" data-dismiss="modal">Close</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>															</li>
							</ul>
					</div>

                    <div class="col-xs-12 col-sm-6 col-md-3">
                        <ul class="pricing">
                            <li><h2>Pay Via Mantis Network<img src="../../assets/images/icon-logo.png" alt="" class="img-circle" style="max-width: 20%"></h2></li>
                            <li>1GB Storage</li>
                            <li>$1 /// 20% Discount with Mantis Network</li>
                            <li>{{$coin_price}} in $ price</li>
                            <li>
                                <h3 class="pricing-tables-price">10GB/$8.99</h3>
                            </li>
                            <li>
                                <div class="panel-body">
                                    <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#exampleModal" data-whatever="@getbootstrap">Deposit Mantis Network</button>

                                    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                    <h4 class="modal-title" id="exampleModalLabel">Please Make Your Deposit To Generated Wallet Address</h4>
                                                </div>
                                                <div class="modal-body">
                                                    <form>
                                                        <div class="form-group">
                                                            <label for="recipient-name" class="control-label">Deposit Address:</label>
                                                            <input type="text" class="form-control" id="recipient-name" value="{{$wallet}}">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="message-text" class="control-label">Your Credit Will Be Added Your Account After Block Confirmations</label>
                                                        </div>
                                                    </form>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-info" data-dismiss="modal">Close</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>							                            </li>
                        </ul>
                    </div>

                    <div class="col-xs-12 col-sm-6 col-md-3">
                        <ul class="pricing">
                            <li><h2>Pay Via Bitcoin (BTC)<img src="../../assets/images/avatars/bitcoin.png" alt="" class="img-circle"></h2></li>
                            <li>1GB Storage</li>
                            <li>$1.2</li>
                            <li>{{$btc_price}} in $ price</li>
                            <li>
                                <h3 class="pricing-tables-price">10GB/$10</h3>
                            </li>
                            <li>
                                <div class="panel-body">
                                    <button type="button" class="btn btn-warning btn-disabled" disabled data-toggle="modal" data-target="#exampleModal2" data-whatever="@getbootstrap">Not available yet</button>

                                    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                    <h4 class="modal-title" id="exampleModalLabel">Please Make Your Deposit To Generated Wallet Address</h4>
                                                </div>
                                                <div class="modal-body">
                                                    <form>
                                                        <div class="form-group">
                                                            <label for="recipient-name" class="control-label">Deposit Address:</label>
                                                            <input type="text" class="form-control" id="recipient-name" value="{{$wallet}}">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="message-text" class="control-label">Your Credit Will Be Added Your Account After Block Confirmations</label>
                                                        </div>
                                                    </form>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-info" data-dismiss="modal">Close</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>							                            </li>
                        </ul>
                    </div>


				</div><!-- /block -->

			</div><!-- /row -->
                                </div>

                            </div>
                            <div class="panel panel-darkblue">
                                <div class="panel-heading clearfix">
                                    <h4 class="panel-title">Activate 50% Discount With Masternode</h4>
                                </div>
                                <div class="panel-body">
                                    <blockquote>
                                        <p>With your personal Mantis Network Masternode you can activate 50% Discount.</p>
                                    </blockquote>
                                    <blockquote>
                                        <p>Open your desktop wallet console. Put "Masternode Genkey". Use your generated Masternode Genkey to activate your discount.</p>
                                        <footer>your masternode <cite title="Source Title">{{ $hasMasterNode ? 'activated':'inactivated'}}</cite></footer>
                                    </blockquote>
                                    @if(!$hasMasterNode)
                                    <blockquote class="blockquote-reverse">
                                        <form method="POST" action="{{route('activate')}}">
                                            <div class="form-group">
                                                <label for="recipient-name" class="control-label">Enter Your Masternode Genkey:</label>
                                                {{csrf_field()}}
                                                <input type="text" class="form-control" name="pubkey" id="recipient-name">
                                            </div>
                                            <button type="submit" class="btn btn-info" ><footer> <cite title="Source Title">Submit Genkey</cite></footer></button>
                                        </form>
                                    </blockquote>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div><!-- Row -->
                </div><!-- Main Wrapper -->
                <div class="page-footer">
                </div>
                </div><!-- /Page Inner -->
@endsection
