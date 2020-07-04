
                    <!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="author" content="phantom-themes">

        <title>MANTIS NETWORK - Crypto Cloud Storage Platform</title>

        <link href="https://fonts.googleapis.com/css?family=Gudea:400,700" rel="stylesheet">
        <link href="/assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link href="/assets/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet">
        <link href="/assets/plugins/icomoon/style.css" rel="stylesheet">
        <link href="/assets/plugins/dropzone/dropzone.min.css" rel="stylesheet">
        <link href="/assets/plugins/plupload/js/jquery.plupload.queue/css/jquery.plupload.queue.css" rel="stylesheet" type="text/css"/>
        <link href="/assets/plugins/waves/waves.min.css" rel="stylesheet">
        <link href="/assets/plugins/uniform/css/default.css" rel="stylesheet">
        <link href="/assets/plugins/switchery/switchery.min.css" rel="stylesheet"/>
        <link href="/assets/plugins/nvd3/nv.d3.min.css" rel="stylesheet">
        <link href="/assets/css/flatifytheme.min.css" rel="stylesheet">
        <link href="/assets/css/custom.css" rel="stylesheet">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body>
        
        <!-- Page Container -->
        <div class="page-container login-page">
            <!-- Page Content -->
            <div class="page-content">
                <!-- Page Inner -->
                <div class="page-inner">
                <div id="main-wrapper"><div class="row">
                        <div class="col-md-3 col-login-box-alt">
                            <div class="panel panel-darkblue login-box">
                                <div class="panel-body">
                                    <a href='' class="logo-name">Mantis Network</a>
                                    <p class="m-t-md">{{ __('Please confirm your password before continuing.') }}</p>

                                    <form method="POST" action="{{ route('password.confirm') }}">
                                        @csrf

                                        <div class="form-group row">
                                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" placeholder="{{ __('Password') }}" name="password" required autocomplete="current-password">

                                            @error('password')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>

                                        <div class="form-group row mb-0">
                                            <button type="submit" class="btn btn-primary">
                                                {{ __('Confirm Password') }}
                                            </button>

                                            @if (Route::has('password.request'))
                                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                                    {{ __('Forgot Your Password?') }}
                                                </a>
                                            @endif
                                        </div>
                                    </form>
                                    <p class="text-center m-t-xs text-sm login-footer">2020 &copy; Mantis Network</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!-- Main Wrapper -->
                </div><!-- /Page Inner -->
            </div><!-- /Page Content -->
        </div><!-- /Page Container -->
        
        <!-- Javascripts -->
        <script src="/assets/plugins/jquery/jquery-3.1.0.min.js"></script>
        <script src="/assets/plugins/bootstrap/js/bootstrap.min.js"></script>
        <script src="/assets/plugins/jquery-slimscroll/jquery.slimscroll.min.js"></script>
        <script src="/assets/plugins/waves/waves.min.js"></script>
        <script src="/assets/plugins/uniform/js/jquery.uniform.standalone.js"></script>
        <script src="/assets/plugins/pace/pace.min.js"></script>
        <script src="/assets/js/flatifytheme.min.js"></script>
    </body>
</html>