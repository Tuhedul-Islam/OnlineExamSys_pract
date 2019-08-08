<?php
require ('connection.php');
session_start();
$Username=$_SESSION["user"];

$flag1 = $flag2 = 0;
for($j=1;$j<=30;$j++){
	if(isset($_POST['question'.$j]) && !empty($_POST['question'.$j]))
		{
			$ques[$j] =  $_POST['question'.$j];
			$flag1 = 1;
		} else $flag1 = 0;
		if(isset($_POST['answer'.$j]) && !empty($_POST['answer'.$j]))
		{
			$answer[$j] =  $_POST['answer'.$j];
			$flag2 = 1;
		} else $flag1 = 0;
	for($i=1;$i<=4;$i++)
	{
		if(isset($_POST['option'.$j.$i]) && !empty($_POST['option'.$j.$i]))
		{
			$option[$j][$i]=$_POST['option'.$j.$i];
			$flag[$j][$i] = 1;
		} else{
			$flag[$j][$i] = 0;
		}
	}
	if($flag2 == 1 && $flag1 == 1 && $flag[$j][1] == 1 && $flag[$j][2] == 1 && $flag[$j][3] == 1 && $flag[$j][4] == 1){
		
		$sql=mysqli_query($conn,"INSERT INTO `m_ques_3`(`ques_nm`, `optn_1`, `optn_2`, `optn_3`, `optn_4`,`answer`) VALUES ('$ques[$j]','".$option[$j][1]."','".$option[$j][2]."','".$option[$j][3]."','".$option[$j][4]."','$answer[$j]')");	
	}
}
	

//$sql=mysqli_query($conn,"INSERT INTO `m_ques_1`(`ques_nm`, `optn_1`, `optn_2`, `optn_3`, `optn_4`) VALUES ()");
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
			
			<div class="text-center" >
				<strong style="padding:20px">Please fill out all the fields</strong>
			</div>
			
                     
			<div>
			<form style="text-align:right;" Method="POST" Action="<?php echo $_SERVER['PHP_SELF']; ?>" >
                
				<table style="margin: 10px auto;">
				<?php 
					for($j=1;$j<=30;$j++){
						
				?>
					<tr >
					<td class="ques"><span class="index"><?php (($j<=9) ? $k = "0".$j : $k = $j); echo $k; ?>.</span><input type="text" class="form-control data" name="question<?php echo $j?>" placeholder="write question" ></td>
					</tr>
					<tr class="ans">
						<td>
							<?php 
								for($k=1;$k<=5;$k++){
									if($k==5){
										?>
										<input type="text" name="answer<?php echo $j; ?>" class="comment"   placeholder="write answer"> 
							<?php
									}else{
										
									
							?>
							  <input type="text" name="option<?php echo $j.$k; ?>" class="comment"   placeholder="write option"> 
							<?php }
								} 
							?>
						</td>
					</tr>
					<?php } ?>
					
				</table>
	
				<button type="submit" class="btn btn-primary submit" name="submit" value="submit" >Submit</button>
                
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
