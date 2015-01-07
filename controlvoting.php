<?php
	$con = mysqli_connect('localhost','root','','mess');
	if(!$con){
		echo "Failed to connect: ".mysqli_connect_error();
	}
?>
<html>
<head>
	<title>Control Voting</title>
	<style type="text/css">
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
		body
         {
            background: url(cake.jpg) no-repeat  center fixed;
			background-position: fixed;
			
		} 
	</style>
</head>
<body>
	<div align="right">
			<a id="back" href="messvoting.php">Go back</a>
		</div>
	<?php
		$result = mysqli_query($con,"SELECT * FROM admininfo WHERE `votebld`= '1' ");
		$numrows = mysqli_num_rows($result);
		mysqli_close($con);	
		if($numrows == 0){
	?>
	<form action="startvoting.php" method="post">
		<p>Voting lines are closed</p>
		<input type="submit" value = "Start Voting" />
	</form>
	<?php
		}
		else{
	?>
	<form action="stopvoting.php" method="post">
		<p>Voting lines are open</p>
		<input type= "submit" value="Stop Voting" />
		<br />
		<h1>Current Voting Status</h1>
		<?php include("controlheader.php");?>
	</form>
	<?php
		}
	?>	
</body>
</html>