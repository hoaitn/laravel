<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <title>Log in</title>
        <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
        <!-- Bootstrap 3.3.4 -->
        <link href="{{asset('backend/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
        <!-- FontAwesome 4.3.0 -->
        <link href="{{asset('backend/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css" />
        <!-- Theme style -->
        <link href="{{asset('backend/dist/css/AdminLTE.min.css')}}" rel="stylesheet" type="text/css" />
        <!-- iCheck -->
        <link href="{{asset('backend/plugins/iCheck/square/blue.css')}}" rel="stylesheet" type="text/css" />

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
            <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>

    <body class="login-page">
        <div class="login-box">
            <div class="login-logo">
                <a href="#"><b>Login</b></a>
            </div><!-- /.login-logo -->
            <div class="login-box-body">
                <p class="login-box-msg">Please fill in your account</p>
                <form action="{{ url('/auth/login') }}" method="post">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <div class="form-group has-feedback">
                        <input type="text" class="form-control" placeholder="Email" name="email" />
                        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                    </div>
                    <div class="form-group has-feedback">
                        <input type="password" class="form-control" placeholder="Password" name="password" />
                        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                    </div>
                    <div class="row">
                        <div class="col-xs-8">
                            <div class="checkbox icheck" style="margin-left: 20px;">
                                <label>
                                    <input type="checkbox" name="remember"> {{ Lang::get('backend/ui.auth_form_login_remember')  }}
                                </label>
                            </div>
                        </div><!-- /.col -->
                        <div class="col-xs-4">
                            <button type="submit" class="btn btn-primary btn-block btn-flat">Sign In</button>
                        </div><!-- /.col -->
                    </div>
                </form>

                <div class="social-auth-links text-center">
                    <p>- Login Via Social Account -</p>
                    <a href="#" class="btn btn-block btn-social btn-facebook btn-flat"><i class="fa fa-facebook"></i> Sign in using Facebook</a>
                    <a href="#" class="btn btn-block btn-social btn-google-plus btn-flat"><i class="fa fa-google-plus"></i> Sign in using Google+</a>
                </div><!-- /.social-auth-links -->

                <a href="#">I forgot my password</a><br>
                <a href="{{ url('auth/register') }}" class="text-center">Register a new membership</a>

            </div><!-- /.login-box-body -->
        </div><!-- /.login-box -->

        <!-- jQuery 2.1.4 -->
        <script src="{{asset('backend/plugins/jQuery/jQuery-2.1.4.min.js')}}"></script>
        <!-- Bootstrap 3.3.2 JS -->
        <script src="{{asset('backend/bootstrap/js/bootstrap.min.js')}}" type="text/javascript"></script>
        <!-- iCheck -->
        <script src="{{asset('backend/plugins/iCheck/icheck.min.js')}}" type="text/javascript"></script>
        <script>
        $(function () {
            $('input').iCheck({
                checkboxClass: 'icheckbox_square-blue',
                radioClass: 'iradio_square-blue',
                increaseArea: '20%' // optional
            });
        });
        </script>
    </body>
</html>
