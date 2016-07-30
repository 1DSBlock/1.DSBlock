<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
<!--   <title>Dashboard</title> -->
  <title>
        <?= $this->fetch('title') ?>
    </title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <?= $this->Html->meta('icon') ?>
  <?= $this->fetch('meta') ?>
  <!-- Bootstrap 3.3.6 -->
  <?php echo $this->Html->css('../system/bootstrap/css/bootstrap.min'); ?>
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <?php echo $this->Html->css('../system/dist/css/AdminLTE.min'); ?>
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <?php echo $this->Html->css('../system/dist/css/skins/_all-skins.min'); ?>
  <!-- iCheck -->
  <?php echo $this->Html->css('../system/plugins/iCheck/flat/blue'); ?>
  <!-- Morris chart -->
  <?php echo $this->Html->css('../system/plugins/morris/morris'); ?>
  <!-- jvectormap -->
  <?php echo $this->Html->css('../system/plugins/jvectormap/jquery-jvectormap-1.2.2'); ?>
  <!-- Date Picker -->
  <?php echo $this->Html->css('../system/plugins/datepicker/datepicker3'); ?>
  <!-- Daterange picker -->
  <?php echo $this->Html->css('../system/plugins/daterangepicker/daterangepicker'); ?>
  <!-- bootstrap wysihtml5 - text editor -->
  <?php echo $this->Html->css('../system/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min'); ?>

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
  
  
    
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <?php echo $this->element('header'); ?>
  <?php echo $this->element('sidebar'); ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
  	<?= $this->Flash->render() ?>
    <?= $this->fetch('content') ?>
  </div>
  <!-- /.content-wrapper -->
  <?php echo $this->element('footer'); ?>
  <?php echo $this->element('control-sidebar'); ?>
</div>
<!-- ./wrapper -->
<?php echo $this->element('scripts'); ?>
</body>
</html>
