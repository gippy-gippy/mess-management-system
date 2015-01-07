<?php
	$con = mysqli_connect('localhost','root','','mess');

	if(!$con){
		echo "Failed to connect: ".mysqli_connect_error();
	}
	$admin = $_COOKIE["admin"];
	$id = $_POST["id"];
	echo "$id";
	echo "<br />";
	$reply = $_POST["re"];
	echo "$reply";

	$sql = "UPDATE `mess`.`studcomplain` SET`reply`='$reply',`admin`='$admin' WHERE `id`='$id' ";
	if(!mysqli_query($con,$sql)){ 
		die('Error: '.mysqli_error($con));
	}
	mysqli_close($con);
	header ("location:admincomp.php");
?>
