<?php
	$con = mysqli_connect('localhost','root','','mess');

	if(!$con){
		echo "Failed to connect: ".mysqli_connect_error();
	}

	$text = $_POST["notice"];
	if(strlen($text) == 0){
		echo "You have not entered anything.";
		mysqli_close($con);
		goto ex;
	}

	$sql = "INSERT INTO ashokanotice(notice) VALUES('$text')";

	if(!mysqli_query($con,$sql)){
		die('Error: '.mysqli_error($con));
	}

	else{
		echo "Notice issued";
	}

	ex:
	mysqli_close($con);
	header("location:adminhome1.php");
?>
<br>