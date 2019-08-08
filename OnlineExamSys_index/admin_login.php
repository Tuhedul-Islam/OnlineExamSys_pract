<?php
require ('connection.php');
session_start();


$errmsg="";
if($_SERVER["REQUEST_METHOD"]=="POST")
{
	$Username=validate($_POST['username']);
	$Password=validate($_POST['password']);
	
	
	$sqll=mysqli_query($conn,"Select * from admin_info where username='$Username' && password='$Password'");
	if(mysqli_num_rows($sqll)>0)
	{
		$row=mysqli_fetch_assoc($sqll);
		$_SESSION["user"] =$row['name'];
		$_SESSION['permission']=true;
		header('location:index.php');
	}
	else
	{
		$errmsg="<span style='color:red'>Your username or password is wrong</span>";
	}
}

function validate($data)
	{
		$data=trim($data);
		$data=stripcslashes($data);
		$data=htmlspecialchars($data);
		return $data;
	}


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
        
        <link href="css/login.css" rel="stylesheet" type="text/css" />
        
        <script src="js/vendor/modernizr-2.8.3.min.js"></script>
    </head>
    <body>
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
        <!-- Add your site or application content here -->
       
	   
	
	
	<div class="container">
		<div class="col-md-12 col-sm-12 content_part text-center" >
			 <div class="contn">
				<div id="contentt">
					<div class="registration">
						<h5 style="color:#0b0050;font-size:25px;font-family: Arial, Helvetica, sans-serif;margin-top:15px">
							<?php echo $errmsg; ?>
						</h5>
					</div>
					
					<div class="form">
						<p style="text-align:center; padding-top:0px; color:green; font-size:36px; font-weight:bold; ">
								Welcome to Login
						</p>
								
						<form style="padding-top:0px" method="post" action="">
							
							<ul class="form-style-1">
								<li style="">	
								<strong>Username 
								:</strong>
								&nbsp<input type="text" name="username" placeholder="Username" class="field-long" Style="height:30px;max-width:290px;" />
								</li>
								
								<li>
								<strong>Password : </strong>
								&nbsp&nbsp<input type="password" name="password" placeholder="Password" class="field-long" Style="height:30px;max-width:290px;" />
								</li>

								<li>
									&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
									&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
									<input style="margin-left:0px" type="submit" value="Submit" name="submit" />
								</li>
							</ul>
						</form>
					</div>
				</div>
			</div>
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
	




