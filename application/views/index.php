<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>D-4Me</title>
    <link href="<?php echo base_url();?>assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url();?>assets/css/font-awesome.min.css" rel="stylesheet">
	<link href="<?php echo base_url();?>assets/css/main.css" rel="stylesheet">
	<link href="<?php echo base_url();?>assets/css/responsive.css" rel="stylesheet">
    <link href="<?php echo base_url();?>assets/css/avendor-dark.css" rel="stylesheet">
    <link href="<?php echo base_url();?>assets/css/color-default.css" rel="stylesheet" title="style1">

        <script src="<?php echo base_url();?>assets/js/modernizr.js"></script>

    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->       

</head><!--/head-->

<body>
   	<!--HEDER HERE-->
    <?php include 'inc/header.php';?>

     <!-- SLIDER HERE-->
     <?php include 'inc/slider.php';?>
    
    <section>
     <div class="container">
      <div class="row">

      <!--MAIN CONTENT HERE-->
       <?php include $content.'.php';?>    
      
      </div>
      </div>
    </section>
	

	<!--FOOTER HERE-->
	<?php include 'inc/footer.php';?>
	

  
    <script src="<?php echo base_url();?>assets/js/jquery-2.1.4.min.js"></script>
	<script src="<?php echo base_url();?>assets/js/bootstrap.min.js"></script>
	<script src="<?php echo base_url();?>assets/js/jquery.scrollUp.min.js"></script>
    <script src="<?php echo base_url();?>assets/js/jquery.prettyPhoto.js"></script>
    <script src="<?php echo base_url();?>assets/js/main.js"></script>
</body>
</html>
