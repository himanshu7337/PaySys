<!DOCTYPE html>
<html>
<head>
	<title>home</title>

	 <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="Creative - Bootstrap 3 Responsive Admin Template">
        <meta name="author" content="GeeksLabs">
        <meta name="keyword" content="Creative, Dashboard, Admin, Template, Theme, Bootstrap, Responsive, Retina, Minimal">
        <link rel="shortcut icon" href="img/favicon.png">

        <title><?php echo $title; ?></title>

        <!-- Bootstrap CSS -->
        <link href="<?php echo base_url(); ?>css/bootstrap.min.css" rel="stylesheet">
        <!-- bootstrap theme -->
        <link href="<?php echo base_url(); ?>css/bootstrap-theme.css" rel="stylesheet">
        <!--external css-->
        <!-- font icon -->
        <link href="<?php echo base_url(); ?>css/elegant-icons-style.css" rel="stylesheet" />
        <link href="<?php echo base_url(); ?>css/font-awesome.min.css" rel="stylesheet" />
        <!-- full calendar css-->
        <link href="<?php echo base_url(); ?>assets/fullcalendar/fullcalendar/bootstrap-fullcalendar.css" rel="stylesheet" />
        <link href="<?php echo base_url(); ?>assets/fullcalendar/fullcalendar/fullcalendar.css" rel="stylesheet" />
        <!-- easy pie chart-->
        <link href="<?php echo base_url(); ?>assets/jquery-easy-pie-chart/jquery.easy-pie-chart.css" rel="stylesheet" type="text/css" media="screen"/>
        <!-- owl carousel -->
        <link href="<?php echo base_url(); ?>css/owl.carousel.css" rel="stylesheet" type="text/css">
        <link href="<?php echo base_url(); ?>css/jquery-jvectormap-1.2.2.css" rel="stylesheet">
        <!-- Custom styles -->
        <link href="<?php echo base_url(); ?>css/fullcalendar.css" rel="stylesheet">
        <link href="<?php echo base_url(); ?>css/widgets.css" rel="stylesheet">
        <link href="<?php echo base_url(); ?>css/style.css" rel="stylesheet">
        <link href="<?php echo base_url(); ?>css/style-responsive.css" rel="stylesheet" />
        <link href="<?php echo base_url(); ?>css/xcharts.min.css" rel=" stylesheet">
        <link href="<?php echo base_url(); ?>css/jquery-ui-1.10.4.min.css" rel="stylesheet">
       
</head>
<body>
    <?php if (isset($_SESSION['success'])) { ?>
      <div class="alert alert-success"><?php echo $_SESSION['success']; ?></div>
      <?php } ?>
    
      Hello <?php echo $_SESSION['username']; ?>
      <a href="<?php echo base_url();?>index.php/main/logout">Logout</a>
      <a href="<?php echo base_url();?>index.php/main/home">Home</a>
      <br><br>


<div class="row">
    <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
       <a href="<?php echo base_url();?>index.php/main/employee">Employee</a>
            <div class="info-box blue-bg">
                <div class="count">Employee</div>
                <div class="title">Manage employee</div>
            </div><!--/.info-box-->
        </a>
    </div>

    <div class="row">
    <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
       <a href="<?php echo base_url();?>index.php/main/department">Department</a>
            <div class="info-box blue-bg">
                <div class="count">Department</div>
                <div class="title">Manage Department</div>
            </div><!--/.info-box-->
        </a>
    </div>

    <div class="row">
    <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
       <a href="<?php echo base_url();?>index.php/main/salary">Salary</a>
            <div class="info-box blue-bg">
                <div class="count">Salary</div>
                <div class="title">Manage Salary</div>
            </div><!--/.info-box-->
        </a>
    </div>

<br>
<a href="<?php echo base_url();?>index.php/main/admin">Click here for admin registration</a>

</body>
</html>
