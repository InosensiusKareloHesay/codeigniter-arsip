<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>E Arsip | UMSoft</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="<?php echo base_url('assets/bower_components/bootstrap/dist/css/bootstrap.min.css');?>">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url('assets/bower_components/font-awesome/css/font-awesome.min.css');?>">
  <!-- Ionicons -->
  <link rel="stylesheet" href="<?php echo base_url('assets/bower_components/Ionicons/css/ionicons.min.css');?>">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url('assets/dist/css/AdminLTE.min.css');?>">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="<?php echo base_url('assets/dist/css/skins/_all-skins.min.css');?>">
  <!-- Morris chart -->
  <link rel="stylesheet" href="<?php echo base_url('assets/bower_components/morris.js/morris.css');?>">
  <!-- jvectormap -->
  <link rel="stylesheet" href="<?php echo base_url('assets/bower_components/jvectormap/jquery-jvectormap.css');?>">
  <!-- Date Picker -->
  <link rel="stylesheet" href="<?php echo base_url('assets/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css');?>">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="<?php echo base_url('assets/bower_components/bootstrap-daterangepicker/daterangepicker.css');?>">
  <!-- bootstrap wysihtml5 - text editor -->
  <link rel="stylesheet" href="<?php echo base_url('assets/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css');?>">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Register
      </h1>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-md-8">
          <div class="box">


            <form class="form-horizontal" method="post" action="<?php echo base_url('input/input_register');?>" enctype="multipart/form-data">

                <div class="form-group">
                  <label  class="col-sm-3 control-label">NIP</label>
                  <div class="col-sm-8">                                                                
                    <input type="text" class="form-control" name="nip">
                  </div>
                </div>

                <div class="form-group">
                  <label  class="col-sm-3 control-label">Nama Peminjam</label>
                  <div class="col-sm-8">                                                                
                    <input type="text" class="form-control" name="nama">
                  </div>
                </div>

                <div class="form-group">
                  <label  class="col-sm-3 control-label">Username</label>
                  <div class="col-sm-8">                                                                
                    <input type="text" class="form-control" name="username">
                  </div>
                </div>

                <div class="form-group">
                  <label  class="col-sm-3 control-label">Password</label>
                  <div class="col-sm-8">                                                                
                    <input type="password" class="form-control" name="password">
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-3 control-label">Foto Profile</label>
                  <div class="col-sm-8">
                    <input type="file" class="form-control" name="file">
                  </div>
                </div>

                 <input type="hidden" class="form-control" name="level" value="0">
              </div>
              <!-- /.box-body -->
              <div class="box-footer">
                <button type="submit" class="btn btn-info pull-right">Register</button>
              <!-- /.box-footer -->
            </form>
            <form action="<?php echo base_url(); ?>" method="post">
            <button class="btn btn-default">Batal</button>
            </form>
    </div>
  </div>  
  </section>
