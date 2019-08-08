<?php
require ('connection.php');
session_start();
$Username=$_SESSION["user"];

$idedit=$_GET["id"];
//echo $idedit;
$_SESSION['ID']=$idedit;


$sqll=mysqli_query($conn,"Select * from m_ques_1 where Id='$idedit'");
$row=mysqli_fetch_assoc($sqll);
//echo $row['optn_1'];

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

        <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
        <link rel="stylesheet" href="css/bootstrap.css">
        <link rel="stylesheet" href="css/main.css">
        <script src="js/vendor/modernizr-2.8.3.min.js"></script>
    </head>
    <body>
        
        <div class="container">
			
			<div class="text-center" >
				<strong style="padding:20px">Username:<?php echo " ".$Username?></strong>
			</div>
			
                     
			<div>
			<form style="text-align:right;" Method="POST" Action="../test_update/test_1_update.php" >
                
				<table style="margin: 10px auto;">
				
					<tr>
					<td class="ques"><span class="index"></span><input type="text" class="form-control data" name="question" value="<?php echo $row['ques_nm'] ?>"></td>
					</tr>
					<tr class="ans">
						<td>
							<?php 
								for($k=1;$k<=5;$k++){
								if($k==5){
									?>
									<input type="text" name="answer" class="comment"   value="<?php echo $row['answer'] ?>"> 
								<?php }  else{
									?>
							
							  <input type="text" name="option<?php echo $k; ?>" class="comment"   value="<?php echo $row['optn_'.$k.''] ?>"> 
								<?php  } } ?>
						</td>
						
					</tr>
					
					
				</table>
	
				<button type="submit" class="btn btn-primary submit" name="submit" value="submit" >Update</button>
                
			</form>
			</div>

        </div>





        <script src="js/vendor/jquery-3.1.1.min.js"></script>
        <script src="js/main.js"></script>
        <script src="js/bootstrap.min.js"></script>

        <!-- Google Analytics: change UA-XXXXX-X to be your site's ID.
        <script>
            (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
            function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
            e=o.createElement(i);r=o.getElementsByTagName(i)[0];
            e.src='https://www.google-analytics.com/analytics.js';
            r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
            ga('create','UA-XXXXX-X','auto');ga('send','pageview');
        </script>  -->

    </body>
</html>
