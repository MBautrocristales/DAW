<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>MBAutocristales</title>
        <!-- Tell the browser to be responsive to screen width -->
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        <!-- Bootstrap 3.3.5 -->
        <link rel="stylesheet" href="<?php echo base_url(); ?>css/bootstrap.min.css">
        <!-- Font Awesome -->
        <link rel="stylesheet" href="<?php echo base_url(); ?>css/font-awesome.min.css">
        <!-- Ionicons -->
        <link rel="stylesheet" href="<?php echo base_url(); ?>css/ionicons.min.css">
        <!-- Theme style -->
        <link rel="stylesheet" href="<?php echo base_url(); ?>css/AdminLTE.min.css">
        <!-- iCheck -->
        <link rel="stylesheet" href="<?php echo base_url(); ?>plugins/iCheck/square/blue.css">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
            <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body class="hold-transition login-page">
        <div class="login-box">

            <?php echo form_open('Usuario/login'); ?>
            <div class="login-box-body">
                <div class="panel-body">
                    <img class="img-responsive portfolio-item" src="<?php echo base_url();?>images/Administrador/01_login/login_02.jpg" alt="">
                </div>
                <p class="login-box-msg">Accede a tu sesion</p>

                <div class="form-group has-feedback">
                    <input type="text" class="form-control" name="nick" placeholder="username">
                    <span class="glyphicon glyphicon-user form-control-feedback"></span>
                </div>
                <div class="form-group has-feedback">
                    <input type="password" class="form-control" name="password" placeholder="Password">
                    <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                </div>
                <div class="row">

                    <div class="col-xs-4">
                        <button type="submit" name="btnEnviar" aria-hidden="true" class="btn btn-primary btn-block btn-flat">Acceder</button>
                    </div><!-- /.col -->
                    <?php echo form_close();?>
                </div>
            </div><!-- /.login-box-body -->
        </div><!-- /.login-box -->

        <!-- jQuery 2.1.4 -->
        <script src="<?php echo base_url(); ?>plugins/jQuery/jQuery-2.1.4.min.js"></script>
        <!-- Bootstrap 3.3.5 -->
        <script src="<?php echo base_url(); ?>bootstrap/js/bootstrap.min.js"></script>
        <!-- iCheck -->
        <script src="<?php echo base_url(); ?>plugins/iCheck/icheck.min.js"></script>
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