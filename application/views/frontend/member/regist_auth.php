<!DOCTYPE html>
<html>

<head>
   <meta charset="utf-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <title>Login Umum | Aplikasi Peminjaman Alat</title>
   <link rel="shortcut icon" href="<?php echo base_url() ?>assets/backend_assets/img/tkj.png" />
   <!-- Tell the browser to be responsive to screen width -->
   <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
   <!-- Bootstrap 3.3.7 -->
   <link rel="stylesheet" href="<?= base_url() ?>assets/bower_components/bootstrap/dist/css/bootstrap.min.css">
   <!-- Font Awesome -->
   <link rel="stylesheet" href="<?= base_url() ?>assets/bower_components/font-awesome/css/font-awesome.min.css">
   <!-- Ionicons -->
   <link rel="stylesheet" href="<?= base_url() ?>assets/bower_components/Ionicons/css/ionicons.min.css">
   <!-- Theme style -->
   <link rel="stylesheet" href="<?= base_url() ?>assets/dist/css/AdminLTE.css">
   <!-- iCheck -->
   <link rel="stylesheet" href="<?= base_url() ?>assets/plugins/iCheck/square/blue.css">

   <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
   <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
   <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

   <!-- Google Font -->
   <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
   <!-- custom -->
   <link rel="stylesheet" href="<?php echo base_url() ?>assets/custom/style.css">
</head>

<body class="hold-transition login-page masthead-login">
   <div class="login-box">
      <div class="login-logo">
         <a class="text-header">Register <b>Peminjam</b></a>
      </div>
      <!-- /.login-logo -->
      <div class="login-box-body">
         <p class="login-box-msg">Register for create your account</p>

         <form method="post" role="" id="" action="<?= base_url('auth/register'); ?>">
            <?= $this->session->flashdata('message'); ?>

            <fieldset>
               <div class="form-group has-feedback">
                  <input type="text" id="name" name="name" class="form-control" placeholder="Full name" value="<?= set_value('name') ?>">
                  <?= form_error('name', '<small class="text-danger pl-3">', '</small>') ?>
                  <span class="form-control-feedback"></span>
               </div>
               <div class="form-group has-feedback">
                  <input type="text" id="kelas" name="kelas" class="form-control" placeholder="kelas" value="<?= set_value('kelas') ?>">
                  <?= form_error('kelas', '<small class="text-danger pl-3">', '</small>') ?>
                  <span class="form-control-feedback"></span>
               </div>
               <div class="form-group has-feedback">
                  <input type="text" id="email" name="email" class="form-control" placeholder="email address" value="<?= set_value('email') ?>">
                  <?= form_error('email', '<small class="text-danger pl-3">', '</small>') ?>
                  <span class="form-control-feedback"></span>
               </div>
               <div class="form-group has-feedback">
                  <input type="password" name="password" class="form-control" placeholder="Password">
                  <?= form_error('password', '<small class="text-danger pl-3">', '</small>') ?>
                  <span class="glyphicon glyphicon-lock form-control-feedback"></span>
               </div>
               <div class="row">
                  <div class="col-xs-4">
                     <a class="btn btn-secondary btn-block btn-flat" href="<?php echo base_url('member') ?>">Batal</a>
                  </div>
                  <!-- /.col -->
                  <div class="col-xs-4">
                     <button type="submit" class="btn btn-primary btn-block btn-flat">Create</button>
                  </div>
                  <!-- /.col -->
               </div>
            </fieldset>
         </form>

      </div>
      <!-- /.login-box-body -->
   </div>
   <!-- /.login-box -->

   <!-- jQuery -->
   <script src="<?php echo base_url() ?>assets/backend_assets/vendor/jquery/jquery.min.js"></script>
   <!-- Validation Plugin -->
   <script src="<?php echo base_url() ?>assets/backend_assets/vendor/jquery-validation/jquery.validate.js"></script>
   <!-- jQuery 3 -->
   <!-- <script src="<?= base_url() ?>assets/bower_components/jquery/dist/jquery.min.js"></script> -->
   <!-- Bootstrap 3.3.7 -->
   <script src="<?= base_url() ?>assets/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
   <!-- iCheck -->
   <script src="<?= base_url() ?>assets/plugins/iCheck/icheck.min.js"></script>


</body>


</html>