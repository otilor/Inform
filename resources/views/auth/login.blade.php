<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
        <title>{{ config('app.name','Laravel') }}</title>
        <meta content="Admin Dashboard" name="description" />
        <meta content="Mannatthemes" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />

        <link rel="shortcut icon" href="assets/images/favicon.ico">

        <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
        <link href="assets/css/icons.css" rel="stylesheet" type="text/css">
        <link href="assets/css/style.css" rel="stylesheet" type="text/css">

    </head>
    <body>


    <!-- Begin page -->
    <div class="accountbg"></div>
    <div class="wrapper-page">

        <div class="card">
            <div class="card-body">

                <div class="text-center">
                    <a href="/" class="logo logo-admin"><img src="assets/images/e-logo.png" height="20" alt="logo"></a>
                </div>

                <div class="px-3 pb-3">
                    @include('inc.messages')
                <form class="form-horizontal m-t-20" action="{{ route('login') }}" method="POST" name="login_form">
                        {{ csrf_field() }}
                        
                        <div class="form-group row">
                            <div class="col-12">
                                <input class="form-control" name = "email" type="email" required="" placeholder="Email" value="{{ old('email') }}">
                            </div>
                        </div>

                        

                        <div class="form-group row">
                            <div class="col-12">
                                <input class="form-control" name = "password" type="password" required="" placeholder="Password">
                            </div>
                        </div>

                        

                        <div class="form-group row">
                            <div class="col-12">
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="customCheck1">
                                    <label class="custom-control-label" for="customCheck1">{{ __('Remember Me') }}</label>
                                </div>
                            </div>
                        </div>
                        

                        <div class="form-group text-center row m-t-20">
                            <div class="col-12">
                                <button class="btn btn-danger btn-block waves-effect waves-light" type="submit">Log In</button>
                            </div>
                        </div>

                        <div class="form-group m-t-10 mb-0 row">

                            @if (Route::has('password.reset'))
                            <div class="col-sm-7 m-t-20">
                                <a href="/password/reset" class="text-muted"><i class="mdi mdi-lock"></i> <small>{{ __('Forgot your password ?') }}</small></a>
                            </div>

                            @endif
                            <!--
                            <div class="col-sm-5 m-t-20">
                                <a href="/register" class="text-muted"><i class="mdi mdi-account-circle"></i> <small>Create an account ?</small></a>
                            </div>
                        -->
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>



        <!-- jQuery  -->
        <script src="assets/js/jquery.min.js"></script>
        <script src="assets/js/popper.min.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
        <script src="assets/js/modernizr.min.js"></script>
        <script src="assets/js/detect.js"></script>
        <script src="assets/js/fastclick.js"></script>
        <script src="assets/js/jquery.blockUI.js"></script>
        <script src="assets/js/waves.js"></script>
        <script src="assets/js/jquery.nicescroll.js"></script>

        <!-- App js -->
        <script src="assets/js/app.js"></script>
        <script>
            document.login_form.email.focus();
        </script>

    </body>
</html>