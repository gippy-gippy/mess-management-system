<?php
	$con = mysqli_connect('localhost','root','','mess');
	if(!$con){
		echo "Failed to connect: ".mysqli_connect_error();		
	}

	mysqli_query($con,"UPDATE `mess`.`signupinfo_arya` SET `votebld` = '0'");
	mysqli_query($con,"UPDATE `mess`.`admininfo` SET `votebld` = '0'");
	mysqli_close($con);
	header("location:controlvoting.php");	
?>