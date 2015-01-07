<html>
	<head>
		<link href='site.css' rel="stylesheet">
		<title>ITEMS_DELETE</title>
	</head>

	<body>
<div id="main">		
		<h1>LIST OF ITEMS</h1>

		<?php
			 $con = mysqli_connect("localhost","root","","mess")
			 	or die("Could not connect to the server");

			 $id = $_GET['id'];

			 $query = "DELETE FROM items_for_the_menu WHERE ITEM_NO=$id";

			 $result = mysqli_query($con,$query)
		 		or die ("Query Failed(26): " . mysqli_error($connection));

		 	 header("location:ITEMS.php");

		 	 ?>
</div>
	</body>
	</html>
