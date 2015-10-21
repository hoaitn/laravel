<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <title>Sign up</title>
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

    <body class="register-page">
        <div class="register-box">
            <div class="register-logo">
                <a href="{{url('auth/register')}}"><b>Sign Up</b></a>
            </div>

            <div class="register-box-body">
                <p class="login-box-msg">Register a new account</p>
                <form action="{{url('auth/register')}}" method="post">
                    <div class="form-group has-feedback">
                        <input type="text" class="form-control" placeholder="Full name">
                        <span class="glyphicon glyphicon-user form-control-feedback"></span>
                    </div>
                    <div class="form-group has-feedback">
                        <input type="email" class="form-control" placeholder="Email">
                        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                    </div>
                    <div class="form-group has-feedback">
                        <input type="password" class="form-control" placeholder="Password">
                        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                    </div>
                    <div class="form-group has-feedback">
                        <input type="password" class="form-control" placeholder="Retype password">
                        <span class="glyphicon glyphicon-log-in form-control-feedback"></span>
                    </div>
                    <div class="row">
                        <div class="col-xs-8">    
                            <div class="checkbox icheck">
                                <label class="">
                                    <div class="icheckbox_square-blue" aria-checked="false" aria-disabled="false" style="position: relative;"><input type="checkbox" style="position: absolute; top: -20%; left: -20%; display: block; width: 140%; height: 140%; margin: 0px; padding: 0px; border: 0px; opacity: 0; background: rgb(255, 255, 255);"><ins class="iCheck-helper" style="position: absolute; top: -20%; left: -20%; display: block; width: 140%; height: 140%; margin: 0px; padding: 0px; border: 0px; opacity: 0; background: rgb(255, 255, 255);"></ins></div> I agree to the <a href="#">terms</a>
                                </label>
                            </div>                        
                        </div><!-- /.col -->
                        <div class="col-xs-4">
                            <button type="submit" class="btn btn-primary btn-block btn-flat">Register</button>
                        </div><!-- /.col -->
                    </div>
                </form>        

                <div class="social-auth-links text-center">
                    <p>- OR -</p>
                    <a href="#" class="btn btn-block btn-social btn-facebook btn-flat"><i class="fa fa-facebook"></i> Sign up using Facebook</a>
                    <a href="#" class="btn btn-block btn-social btn-google-plus btn-flat"><i class="fa fa-google-plus"></i> Sign up using Google+</a>
                </div>

                <a href="{{url('auth/login')}}" class="text-center">I already have an account</a>
            </div><!-- /.form-box -->
        </div>

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
