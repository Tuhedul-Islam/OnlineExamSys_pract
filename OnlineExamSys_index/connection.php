<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname="hrs";
$conn=mysqli_connect($servername,$username,$password,$dbname);

	if(!$conn)
	{
		echo "database not connected ".mysqli_connect_error();
	}
	else
	{
		echo "";
	}

?>