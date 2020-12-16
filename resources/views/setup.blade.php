@extends('layouts.app')

@section('content')
                <!-- Page Inner -->
                <div class="page-inner">
                    <div class="page-title">
                        <h3 class="breadcrumb-header">How I can upload files to Mantis Network ?</h3>
                    </div>
                <div id="main-wrapper">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="panel panel-darkblue">
                                <div class="panel-heading clearfix">
                                    <h4 class="panel-title">User Interface Main Hosted Platform</h4>
                                </div>
                                <div class="panel-body">
                                    <p>Mantis Network users can join platform, register and login within less than 2 minutes. Mantis Network provides Cloud Hosting services for their Users. </p>
                                    <button type="button" class="btn btn-danger m-t-sm" data-toggle="modal" data-target="#myModal">Main Hosted Platform Steps</button>
                                            <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                            <h4 class="modal-title" id="myModalLabel">You Can Follow Steps To Start</h4>
                                                        </div>
                                                        <div class="modal-body">
                                                            <h4>Register & Login Platform</h4>
                                                            Mantis Network keep your personal data in blockchain. Feel free to <a href="register.html" target="_blank" style="color: #0a6aa1"> Register</a> and <a href="login.html" target="_blank"style="color: #0a6aa1"> Login</a> Mantis Network <br><br><hr>
                                                            <h4>Deposit Mantis Network & Top Currencies</h4>
                                                            Mantis Network users can Deposit major currencies at the same time with Mantis Network. From  <a href="pricing.html" target="_blank" style="color: #0a6aa1"> Pricing</a> page you can find more information about Prices and Storage Costs. Either you can make your Deposits at the same page.<br><br><hr>
                                                        <h4>Creditantal System</h4>
                                                        Your Crypto Deposits will be calculated within $ Prices from 24/7 Live APIs which is connected with 20 different exchanges. From <a href="purchases.html" target="_blank"style="color: #0a6aa1"> My Purchases</a> page you can see your deposits and credits.<br><br><hr>
                                                        <h4>Upload & Download Files</h4>
                                                        If your credits launched onto your account, User can upload files from <a href="index.html" target="_blank"style="color: #0a6aa1"> Dashboard</a> . After your upload you can download file whenever you wish with your account login from another devices. Each download links encrypted with sha256 algorithm and stored in Mantis Network Blocks as metadata.<br><br><hr>   </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-info" data-dismiss="modal">Close</button>
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
                                    <h4 class="panel-title">Personal Masternode & Platform Setup</h4>
                                </div>
                                <div class="panel-body">
                                    <p>Mantis Network Masternode owners can run their own Mantis Network Platform. With your setupped VPS you can manage your own platform without any payment or deposit. <code>Your VPS will be hosted database</code> thanks to Script. </p>
                                    <button type="button" class="btn btn-info m-t-sm" data-toggle="modal" data-target=".bs-example-modal-lg">Personal Hosted & Free Platform</button>
                                            <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                                                <div class="modal-dialog modal-lg">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                            <h4 class="modal-title" id="myLargeModalLabel">Follow This Steps To Setup Personal Mantis Platform</h4>
                                                        </div>
                                                        <div class="modal-body">
                                                            <h4>Buy VPS From Any Provider</h4>
Users need to rent or buy VPS from any VPS Provider. Operating system must be Linux Ubuntu 16.04 LTS or 18.04 LTS. System Min preferances are 1gb RAM, 10gb free disk. Normally this vps cost is around $5-$9 per month. You can prefer Mantis Hosting for this step too.<br><br>

                                                            <h4>Run Mantis Script To Build Your Masternode</h4>
                                                            When you run script in your VPS, it is going to setup all necessary repositories. Will ask User "Do You Want To Setup Mantis Network Platform into Your VPS?". If User enter "No" script will automatically setup masternode and will stop. Else user enter "Yes" It will directly setup docker dockercomposer nginx proxy whole repositories for platform. <br><code>sudo chmod +x 777 -R</code><br> To run  Mantis Script <a href="https://github.com/mantisplataform/mantisplataform/blob/main/mantis.sh" target="_blank" style="color: #0a6aa1"> Visit Github.</a><br><br><hr>
                                                            <h4>Visit Your IP Adress From Your Browser</h4>
                                                            When script finished setup, you just need to open your browser and visit <code>https://"yourIP"</code>. Platform will be hosted in your VPS and you will have limitless credits to upload and download files.
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-success" data-dismiss="modal">Close</button>
                                                        </div>
                                                    </div>
                                                </div>
                                    </div>
                                </div>
                            </div>


                        </div>

                    </div><!-- Row -->
                </div><!-- Main Wrapper -->

                </div><!-- /Page Inner -->
@endsection
