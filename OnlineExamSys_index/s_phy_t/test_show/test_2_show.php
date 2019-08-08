<?php
require ('connection.php');
session_start();
$Username=$_SESSION["user"];

/* $flag1 = $flag2 = 0;
for($j=1;$j<=30;$j++){
	if(isset($_POST['question'.$j]) && !empty($_POST['question'.$j]))
		{
			$ques[$j] =  $_POST['question'.$j];
			$flag1 = 1;
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
	if($flag1 == 1 && $flag[$j][1] == 1 && $flag[$j][2] == 1 && $flag[$j][3] == 1 && $flag[$j][4] == 1){
		
		$sql=mysqli_query($conn,"INSERT INTO `m_ques_1`(`ques_nm`, `optn_1`, `optn_2`, `optn_3`, `optn_4`) VALUES ('$ques[$j]','".$option[$j][1]."','".$option[$j][2]."','".$option[$j][3]."','".$option[$j][4]."')");	
	}
}
 */	

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
	<div class="container col-md-12">
	
		<div class="text-center" >
				<strong style="padding:20px">Username:<?php echo " ".$Username?></strong>
		</div>
		<p style="background-color:#F7F7F7;text-align:center;font-size:35px;margin-top:0px;color:green">All Questions & Options</p>
		
		<center style="background-color:#F7F7F7;padding:25px">
			<table border=1 class="table table-striped ">
				<tr>
					<th>ID</th>
					<th>Question</th>
					<th>Option1</th>
					<th>Option2</th>
					<th>Option3</th>
					<th>Option4</th>
					<th>Edit/Update</th>
					<th>Delete</th>
				</tr>
				
				<?php 
					$sqll=mysqli_query($conn,"Select * from p_ques_2");
					//$row1=mysqli_num_rows($sqll);
					while($row=mysqli_fetch_assoc($sqll))
					{
						$ID=$row['id'];
						$Question=$row['ques_nm'];
						$Option1=$row['optn_1'];
						$Option2=$row['optn_2'];
						$Option3=$row['optn_3'];
						$Option4=$row['optn_4'];
						
						//$id=$row['Id'];
						//$_SESSION['id']=$ID;
				?>
				
					<tr>
						<td><?php echo $ID; ?></td> 
						<td><?php echo $Question; ?></td>
						<td><?php echo $Option1; ?></td>
						<td><?php echo $Option2; ?></td>
						<td><?php echo $Option3; ?></td>
						<td><?php echo $Option4; ?></td>
						<td><a href="../test_edit/test_2_edit.php?id=<?php echo $ID; ?>">Edit</a></td>
						<td><a href="../test_delete/test_2_delete.php?id=<?php echo $ID; ?>">Delete</a></td>
					</tr>
				<?php
					}
				?>
				
			</table>
			<a href="../../select_sub_2.php"><button type="button" class="btn btn-primary"><b>Back</b></button></a>
		</center>
		
	</div>
 
 </body>
</html>
	
	
	