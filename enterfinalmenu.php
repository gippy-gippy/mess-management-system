<?php
	$con = mysqli_connect("localhost","root","","mess")
		or die("Couldn't connect to the server");

	$id = 1;


	$item = $_REQUEST['monb'];
	$query = "UPDATE `final_menu` SET `items` = '$item' WHERE `id` = '$id'";
	$result = mysqli_query($con,$query)
		or die("query failed: ".mysqli_error($con));
	$id++;

	$item = $_REQUEST['monl'];
	$query = "UPDATE `final_menu` SET `items` = '$item' WHERE `id` = '$id'";
	$result = mysqli_query($con,$query)
		or die("query failed: ".mysqli_error($con));
	$id++;

	$item = $_REQUEST['mons'];
	$query = "UPDATE `final_menu` SET `items` = '$item' WHERE `id` = '$id'";
	$result = mysqli_query($con,$query)
		or die("query failed: ".mysqli_error($con));
	$id++;

	$item = $_REQUEST['mond'];
	$query = "UPDATE `final_menu` SET `items` = '$item' WHERE `id` = '$id'";
	$result = mysqli_query($con,$query)
		or die("query failed: ".mysqli_error($con));
	$id++;

	$item = $_REQUEST['tueb'];
	$query = "UPDATE `final_menu` SET `items` = '$item' WHERE `id` = '$id'";
	$result = mysqli_query($con,$query)
		or die("query failed: ".mysqli_error($con));
	$id++;

	$item = $_REQUEST['tuel'];
	$query = "UPDATE `final_menu` SET `items` = '$item' WHERE `id` = '$id'";
	$result = mysqli_query($con,$query)
		or die("query failed: ".mysqli_error($con));
	$id++;

	$item = $_REQUEST['tues'];
	$query = "UPDATE `final_menu` SET `items` = '$item' WHERE `id` = '$id'";
	$result = mysqli_query($con,$query)
		or die("query failed: ".mysqli_error($con));
	$id++;

	$item = $_REQUEST['tued'];
	$query = "UPDATE `final_menu` SET `items` = '$item' WHERE `id` = '$id'";
	$result = mysqli_query($con,$query)
		or die("query failed: ".mysqli_error($con));
	$id++;

	$item = $_REQUEST['wedb'];
	$query = "UPDATE `final_menu` SET `items` = '$item' WHERE `id` = '$id'";
	$result = mysqli_query($con,$query)
		or die("query failed: ".mysqli_error($con));
	$id++;

	$item = $_REQUEST['wedl'];
	$query = "UPDATE `final_menu` SET `items` = '$item' WHERE `id` = '$id'";
	$result = mysqli_query($con,$query)
		or die("query failed: ".mysqli_error($con));
	$id++;

	$item = $_REQUEST['weds'];
	$query = "UPDATE `final_menu` SET `items` = '$item' WHERE `id` = '$id'";
	$result = mysqli_query($con,$query)
		or die("query failed: ".mysqli_error($con));
	$id++;

	$item = $_REQUEST['wedd'];
	$query = "UPDATE `final_menu` SET `items` = '$item' WHERE `id` = '$id'";
	$result = mysqli_query($con,$query)
		or die("query failed: ".mysqli_error($con));
	$id++;

	$item = $_REQUEST['thub'];
	$query = "UPDATE `final_menu` SET `items` = '$item' WHERE `id` = '$id'";
	$result = mysqli_query($con,$query)
		or die("query failed: ".mysqli_error($con));
	$id++;

	$item = $_REQUEST['thul'];
	$query = "UPDATE `final_menu` SET `items` = '$item' WHERE `id` = '$id'";
	$result = mysqli_query($con,$query)
		or die("query failed: ".mysqli_error($con));
	$id++;

	$item = $_REQUEST['thus'];
	$query = "UPDATE `final_menu` SET `items` = '$item' WHERE `id` = '$id'";
	$result = mysqli_query($con,$query)
		or die("query failed: ".mysqli_error($con));
	$id++;

	$item = $_REQUEST['thud'];
	$query = "UPDATE `final_menu` SET `items` = '$item' WHERE `id` = '$id'";
	$result = mysqli_query($con,$query)
		or die("query failed: ".mysqli_error($con));
	$id++;

	$item = $_REQUEST['frib'];
	$query = "UPDATE `final_menu` SET `items` = '$item' WHERE `id` = '$id'";
	$result = mysqli_query($con,$query)
		or die("query failed: ".mysqli_error($con));
	$id++;

	$item = $_REQUEST['fril'];
	$query = "UPDATE `final_menu` SET `items` = '$item' WHERE `id` = '$id'";
	$result = mysqli_query($con,$query)
		or die("query failed: ".mysqli_error($con));
	$id++;

	$item = $_REQUEST['fris'];
	$query = "UPDATE `final_menu` SET `items` = '$item' WHERE `id` = '$id'";
	$result = mysqli_query($con,$query)
		or die("query failed: ".mysqli_error($con));
	$id++;

	$item = $_REQUEST['frid'];
	$query = "UPDATE `final_menu` SET `items` = '$item' WHERE `id` = '$id'";
	$result = mysqli_query($con,$query)
		or die("query failed: ".mysqli_error($con));
	$id++;

	$item = $_REQUEST['satb'];
	$query = "UPDATE `final_menu` SET `items` = '$item' WHERE `id` = '$id'";
	$result = mysqli_query($con,$query)
		or die("query failed: ".mysqli_error($con));
	$id++;

	$item = $_REQUEST['satl'];
	$query = "UPDATE `final_menu` SET `items` = '$item' WHERE `id` = '$id'";
	$result = mysqli_query($con,$query)
		or die("query failed: ".mysqli_error($con));
	$id++;

	$item = $_REQUEST['sats'];
	$query = "UPDATE `final_menu` SET `items` = '$item' WHERE `id` = '$id'";
	$result = mysqli_query($con,$query)
		or die("query failed: ".mysqli_error($con));
	$id++;

	$item = $_REQUEST['satd'];
	$query = "UPDATE `final_menu` SET `items` = '$item' WHERE `id` = '$id'";
	$result = mysqli_query($con,$query)
		or die("query failed: ".mysqli_error($con));
	$id++;

	$item = $_REQUEST['sunb'];
	$query = "UPDATE `final_menu` SET `items` = '$item' WHERE `id` = '$id'";
	$result = mysqli_query($con,$query)
		or die("query failed: ".mysqli_error($con));
	$id++;

	$item = $_REQUEST['sunl'];
	$query = "UPDATE `final_menu` SET `items` = '$item' WHERE `id` = '$id'";
	$result = mysqli_query($con,$query)
		or die("query failed: ".mysqli_error($con));
	$id++;

	$item = $_REQUEST['suns'];
	$query = "UPDATE `final_menu` SET `items` = '$item' WHERE `id` = '$id'";
	$result = mysqli_query($con,$query)
		or die("query failed: ".mysqli_error($con));
	$id++;

	$item = $_REQUEST['sund'];
	$query = "UPDATE `final_menu` SET `items` = '$item' WHERE `id` = '$id'";
	$result = mysqli_query($con,$query)
		or die("query failed: ".mysqli_error($con));
	$id++;

	mysqli_close($con);	
?>