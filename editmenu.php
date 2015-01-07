<html>
	<head>
		<link href="site.css" rel="stylesheet">
		<title>Edit Menu</title>
		<style>
		body{
			font-family:"Calibri";
			color:#000000;
		background-repeat:no-repeat center fixed;
		-webkit-background-size: cover;
		-moz-background-size: cover;
		background-size: cover;
		}
		a{
			padding: 10px 20px;
			text-decoration: none;
			line-height: 2.8em;
			color: #034af3;
			border-radius: 10px 10px 10px 10px;
		}
		td:hover
		{
			border-radius:10px 10px 10px 10px;
			background-color: #000000;
			color:#8080FF;
			zoom: 1;
	filter: alpha(opacity=50);
	opacity: 0.5;
		}
		td,th{
			font-size:20px;
		}
		#header{
			text-align: center;
			font-size:50px;
		}
		#back{
			text-decoration: none;
			font-size:25px;
			background-color: #FFFF99;
			zoom: 1;
			filter: alpha(opacity=50);
			opacity: 0.4;
			padding:5px 5px 5px 5px;
		}
		#back:hover{
			opacity: 1.0;
		}
		</style>
	</head>
	<?php 
		$con = mysqli_connect('localhost','root','','mess');
		if(!$con){
			echo "Failed to connect".mysqli_connect_error();
		}
		$id = 1;
	?>
	<body background="img/cake.jpg">
		<div align="right">
			<a id="back" href="adminhome1.php">Go back</a>
		</div>
		 <p id ="header">Edit Mess Menu</p>
		 <table width = '1330'>
		 	<tr>
		 		<th>Day/Time</th>
		 		<th>Breakfast</th>
		 		<th>Lunch</th>
		 		<th>Snacks</th>
		 		<th>Dinner</th>
		 	</tr>
		 	<tr>
		 		<td>Monday</td>
		 		<td width:><a href="EDIT_THE_ROW.php?id=<?php echo $id; ?>"><?php include("finalheader.php"); ?></a></td>
		 		<td><a href="EDIT_THE_ROW.php?id=<?php echo $id; ?>"><?php include("finalheader.php"); ?></a></td>
		 		<td><a href="EDIT_THE_ROW.php?id=<?php echo $id; ?>"><?php include("finalheader.php"); ?></a></td>
		 		<td><a href="EDIT_THE_ROW.php?id=<?php echo $id; ?>"><?php include("finalheader.php"); ?></a></td>
		 	</tr>
		 	<tr>
		 		<td>Tuesday</td>
		 		<td><a href="EDIT_THE_ROW.php?id=<?php echo $id; ?>"><?php include("finalheader.php"); ?></a></td>
		 		<td><a href="EDIT_THE_ROW.php?id=<?php echo $id; ?>"><?php include("finalheader.php"); ?></a></td>
		 		<td><a href="EDIT_THE_ROW.php?id=<?php echo $id; ?>"><?php include("finalheader.php"); ?></a></td>
		 		<td><a href="EDIT_THE_ROW.php?id=<?php echo $id; ?>"><?php include("finalheader.php"); ?></a></td>
		 	</tr>
		 	<tr>
		 		<td>Wednesday</td>
		 		<td><a href="EDIT_THE_ROW.php?id=<?php echo $id; ?>"><?php include("finalheader.php"); ?></a></td>
		 		<td><a href="EDIT_THE_ROW.php?id=<?php echo $id; ?>"><?php include("finalheader.php"); ?></a></td>
		 		<td><a href="EDIT_THE_ROW.php?id=<?php echo $id; ?>"><?php include("finalheader.php"); ?></a></td>
		 		<td><a href="EDIT_THE_ROW.php?id=<?php echo $id; ?>"><?php include("finalheader.php"); ?></a></td>
		 	</tr>
		 	<tr>
		 		<td>Thursday</td>
		 		<td><a href="EDIT_THE_ROW.php?id=<?php echo $id; ?>"><?php include("finalheader.php"); ?></a></td>
		 		<td><a href="EDIT_THE_ROW.php?id=<?php echo $id; ?>"><?php include("finalheader.php"); ?></a></td>
		 		<td><a href="EDIT_THE_ROW.php?id=<?php echo $id; ?>"><?php include("finalheader.php"); ?></a></td>
		 		<td><a href="EDIT_THE_ROW.php?id=<?php echo $id; ?>"><?php include("finalheader.php"); ?></a></td>
		 	</tr>
		 	<tr>
		 		<td>Friday</td>
		 		<td><a href="EDIT_THE_ROW.php?id=<?php echo $id; ?>"><?php include("finalheader.php"); ?></a></td>
		 		<td><a href="EDIT_THE_ROW.php?id=<?php echo $id; ?>"><?php include("finalheader.php"); ?></a></td>
		 		<td><a href="EDIT_THE_ROW.php?id=<?php echo $id; ?>"><?php include("finalheader.php"); ?></a></td>
		 		<td><a href="EDIT_THE_ROW.php?id=<?php echo $id; ?>"><?php include("finalheader.php"); ?></a></td>
		 	</tr>
		 	<tr>
		 		<td>Saturday</td>
		 		<td><a href="EDIT_THE_ROW.php?id=<?php echo $id; ?>"><?php include("finalheader.php"); ?></a></td>
		 		<td><a href="EDIT_THE_ROW.php?id=<?php echo $id; ?>"><?php include("finalheader.php"); ?></a></td>
		 		<td><a href="EDIT_THE_ROW.php?id=<?php echo $id; ?>"><?php include("finalheader.php"); ?></a></td>
		 		<td><a href="EDIT_THE_ROW.php?id=<?php echo $id; ?>"><?php include("finalheader.php"); ?></a></td>
		 	</tr>
		 	<tr>
		 		<td>Sunday</td>
		 		<td><a href="EDIT_THE_ROW.php?id=<?php echo $id; ?>"><?php include("finalheader.php"); ?></a></td>
		 		<td><a href="EDIT_THE_ROW.php?id=<?php echo $id; ?>"><?php include("finalheader.php"); ?></a></td>
		 		<td><a href="EDIT_THE_ROW.php?id=<?php echo $id; ?>"><?php include("finalheader.php"); ?></a></td>
		 		<td><a href="EDIT_THE_ROW.php?id=<?php echo $id; ?>"><?php include("finalheader.php"); ?></a></td>
		 	</tr>
		 </table>
		 <?php mysqli_close($con); ?>
	</body>
</html>