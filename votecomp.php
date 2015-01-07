<?php
		$con = mysqli_connect('localhost','root','','mess');

		if(!$con)
		{
			echo "Failed to connect: ".mysqli_connect_error();
		}
		
		$id = $_POST["id"];
		$user = $_COOKIE["user"];
		$sql = "UPDATE studcomplain SET votes=votes+1 WHERE id=$id";
		$sql1 = "INSERT INTO complain_data(`complainid`,`user`) VALUES('$id','$user')";
		if(!mysqli_query($con,$sql) || !mysqli_query($con,$sql1))
		{
			die('Error: '.mysqli_error($con));
		}
		else
		{
			echo 'You have successfully voted complain';
		}
		
		mysqli_close($con);
		header("location:complain.php");
	?>