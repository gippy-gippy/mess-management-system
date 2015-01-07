<?php
	$con = mysqli_connect('localhost','root','','mess');
	if(!$con){
		echo "Failed to connect: ".mysqli_connect_error();
	}
	$user = $_COOKIE['user'];

	$result = mysqli_query($con,"SELECT * FROM `mess`.`signupinfo_arya` WHERE `username` = '$user'");
	while($row = mysqli_fetch_array($result)){
	$votebld = $row['votebld'];
	if($votebld == '1'){
		mysqli_close($con); 
		header("location:STUD_VOTING.php");
	}
	else{
		mysqli_close($con);
		echo "you have already vote for the mess menu...";
	}

}
?>