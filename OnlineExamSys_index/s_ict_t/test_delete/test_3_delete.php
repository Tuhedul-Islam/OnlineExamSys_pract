<?php 
	require('connection.php');
	session_start();
	 
	$adminid=$_GET['id'];
	$sql=mysqli_query($conn,"DELETE from i_ques_3 WHERE id='$adminid'");
	
	if($sql)
	{
		echo "Information deleted of the selected Id";
		header('location:../test_show/test_3_show.php');
	}
	else
	{
		echo mysqli_error($conn);
	}

?>