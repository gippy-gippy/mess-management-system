<html>
	<head>
		<link href="site.css" rel="stylesheet">
		<title>Mess Menu</title>
		<style>
		body{
			font-family:"Calibri";
			color:#000000;
		background-repeat:no-repeat center fixed;
		-webkit-background-size: cover;
		-moz-background-size: cover;
		background-size: cover;
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
			padding: 10px 20px;
			line-height: 2.0em;
			font-size:20px;
		}
		#header{
			text-align: center;
			font-size:50px;
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
		 <p id ="header">Mess Menu</p>
		 <table width = '1330'>
		 	<tr>
		 		<th></td>
		 		<th>Breakfast</th>
		 		<th>Lunch</th>
		 		<th>Snacks</th>
		 		<th>Dinner</th>
		 	</tr>
		 	<tr>
		 		<td>Monday</td>
		 		<td><?php include("finalheader.php"); ?></td>
		 		<td><?php include("finalheader.php"); ?></td>
		 		<td><?php include("finalheader.php"); ?></td>
		 		<td><?php include("finalheader.php"); ?></td>
		 	</tr>
		 	<tr>
		 		<td>Tuesday</td>
		 		<td><?php include("finalheader.php"); ?></td>
		 		<td><?php include("finalheader.php"); ?></td>
		 		<td><?php include("finalheader.php"); ?></td>
		 		<td><?php include("finalheader.php"); ?></td>
		 	</tr>
		 	<tr>
		 		<td>Wednesday</td>
		 		<td><?php include("finalheader.php"); ?></td>
		 		<td><?php include("finalheader.php"); ?></td>
		 		<td><?php include("finalheader.php"); ?></td>
		 		<td><?php include("finalheader.php"); ?></td>
		 	</tr>
		 	<tr>
		 		<td>Thursday</td>
		 		<td><?php include("finalheader.php"); ?></td>
		 		<td><?php include("finalheader.php"); ?></td>
		 		<td><?php include("finalheader.php"); ?></td>
		 		<td><?php include("finalheader.php"); ?></td>
		 	</tr>
		 	<tr>
		 		<td>Friday</td>
		 		<td><?php include("finalheader.php"); ?></td>
		 		<td><?php include("finalheader.php"); ?></td>
		 		<td><?php include("finalheader.php"); ?></td>
		 		<td><?php include("finalheader.php"); ?></td>
		 	</tr>
		 	<tr>
		 		<td>Saturday</td>
		 		<td><?php include("finalheader.php"); ?></td>
		 		<td><?php include("finalheader.php"); ?></td>
		 		<td><?php include("finalheader.php"); ?></td>
		 		<td><?php include("finalheader.php"); ?></td>
		 	</tr>
		 	<tr>
		 		<td>Sunday</td>
		 		<td><?php include("finalheader.php"); ?></td>
		 		<td><?php include("finalheader.php"); ?></td>
		 		<td><?php include("finalheader.php"); ?></td>
		 		<td><?php include("finalheader.php"); ?></td>
		 	</tr>
		 </table>
		 <?php mysqli_close($con); ?>
	</body>
</html>