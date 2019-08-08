<?php 
	require('connection.php');
	session_start();
	
	$idedit = $_SESSION['ID']; 
	$ques = $_POST['question'];
	$answer=$_POST['answer'];
	for($i=1;$i<=4;$i++)
	{
		if(isset($_POST['option'.$i]) && !empty($_POST['option'.$i]))
		{
			$option[$i]=$_POST['option'.$i];
			$flag[$i] = 1;
		} else{
			$flag[$i] = 0;
		}
	}
	$sql=mysqli_query($conn,"UPDATE `i_ques_3` SET `ques_nm` = '$ques', `optn_1` = '".$option[1]."' , `optn_2` = '".$option[2]."', `optn_3` = '".$option[3]."', `optn_4` = '".$option[4]."', answer='$answer'  WHERE id = '$idedit' ");
	if($sql){
		echo "<p style = 'color : green'> Update SuccessFul</p>"; 
	} else echo "<p style = 'color : red'> Update was not Successfull</p>";
?>
<?php include "header.php";?>
<a class="btn btn-primary" style = "color: #ffffff; text-decoration: none;" href="../test_show/test_3_show.php"> Go to View Page </a>





<?php include "footer.php"?>