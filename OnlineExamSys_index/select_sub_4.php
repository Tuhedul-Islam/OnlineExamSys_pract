<?php
session_start();

?>	

<!doctype html>
<html class="no-js" lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="apple-touch-icon" href="apple-touch-icon.png">
        <!-- Place favicon.ico in the root directory -->
		
		<link href="login.css" rel="stylesheet" type="text/css" />
		
        <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="css/bootstrap.css">
        <link rel="stylesheet" href="fontawesome/css/font-awesome.min.css">
        <link rel="stylesheet" href="css/main1.css">
        <script src="js/vendor/modernizr-2.8.3.min.js"></script>
    </head>
    <body>
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
        <!-- Add your site or application content here -->
       
	   
	<div class = "container"> 
		<nav class="navbar navbar-default navcol">
			<div class="container-fluid">
				<!-- Brand and toggle get grouped for better mobile display -->
				
				<div class="navbar-header">
				  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				  </button>
				  
				  <a class="navbar-brand" href="index.php" style="color:white">
				  Home</a>
				</div>

				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				  
				 
				  <ul class="nav navbar-nav navbar-right">
					<li class="dropdown">
			          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Insert Ict Test <span class="caret"></span></a>
			          <ul class="dropdown-menu">
			          	<?php
			          		for ($i=1; $i<=4; $i++) {
			          		
			          	?>
			            <li><a href="s_ict_t/test_insert/test_<?php echo $i;?>_insert.php">Test<?php echo $i;?></a></li>
			            <?php } ?>
			          </ul>
        			</li>

        			<li class="dropdown">
			          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Show Ict Test <span class="caret"></span></a>
			          <ul class="dropdown-menu">
			            <?php
			          		for ($i=1; $i<=4; $i++) {
			          		
			          	?>
			            <li><a href="s_ict_t/test_show/test_<?php echo $i;?>_show.php">Test<?php echo $i;?></a></li>
			            <?php } ?>
			          </ul>
        			</li>

					<li><a href="logout.php" style="color:white">Logout</a></li>
				  </ul>
				</div><!-- /.navbar-collapse -->
			</div><!-- /.container-fluid -->
		</nav>
	</div>
	
	<div class="container">
		<div class="col-md-12 col-sm-12 content_part text-center" >
			<p>
				<strong>Username:<?php echo " ".$Username?></strong>
			</p>
			
			<h1 style="margin-top:105px;color:#3f8d16">EASY SCHOOL</h1>

			<h2>
				<strong>Select the subject to Insert,Edit,Update</strong>
			</h2>	
		</div>
		
		<div class="col-md-12 col-sm-12 footer_part text-center" >
			<p style="" >
				Copyright Â© 2016 khrbd.com, Mobile: 01552-344430, 
				All Rights Reserved | Designed by khrbd.com
			</p>
		</div>
	</div>
		
		
		
		

        <script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.12.0.min.js"><\/script>')</script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/plugins.js"></script>
        <script src="js/main.js"></script>

        <!-- Google Analytics: change UA-XXXXX-X to be your site's ID.
        <script>
            (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
            function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
            e=o.createElement(i);r=o.getElementsByTagName(i)[0];
            e.src='https://www.google-analytics.com/analytics.js';
            r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
            ga('create','UA-XXXXX-X','auto');ga('send','pageview');
        </script> -->
		
    </body>
</html>
	




