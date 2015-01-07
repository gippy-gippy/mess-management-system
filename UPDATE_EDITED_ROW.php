<?php
	 $con = mysqli_connect("localhost","root","","mess")
		  	or die("Couldn't connect to the server");

	 $id = $_POST['id'];
	 $items = $_POST['items'];

	 $query = "UPDATE `final_menu` SET `items` = '$items' WHERE `id` = '$id'";
	 $result=mysqli_query($con,$query)
		or die("Query failed(10): " . mysqli_error($con));

	header("location:editmenu.php");
	?>