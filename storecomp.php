<html>
<head>
	<link href='site.css' rel="stylesheet">
	<style type = "text/css">
		a{
			color:#034af3;
			padding: 10px 20px;
			text-decoration: none;
			border-radius: 4px 4px 0 0;
			background-color: #e8eef4;
		}

		a:hover{
			background-color: #aec4d9;
		}
	</style>
</head>
<body>
	<div id="main">
	<?php
		$con = mysqli_connect('localhost','root','','mess');

		if(!$con)
		{
			echo "Failed to connect: ".mysqli_connect_error();
		}
		$text = $_REQUEST["complain"];
 		if(strlen($text) == 0){
 			?>
 			<p >You have not entered complain</p>
 		
						
 		<?php goto ex;
 		}
 		$user = $_COOKIE["user"];
 		$date = date("d/m/Y")."";
		$sql = "INSERT INTO studcomplain(comp,votes,date,user) VALUES('$text','0','$date','$user')";
	
		if(!mysqli_query($con,$sql))
		{
			die('Error: '.mysqli_error($con));
		}
		ex:
		mysqli_close($con);
		header("location:complain.php");
	?>
	</div>
</body>
</html>