<html>
	<head>
		<link href='site.css' rel="stylesheet">
		</title></title>
	</head>

	<body>
<div id="main">
		<?php
			 $con = mysqli_connect("localhost","root","","mess")
			 	or die("Could not connect to the server");

			 $ITEM = $_POST['ITEM'];

 	 		 $query = "INSERT  INTO items_for_the_menu (ITEM) VALUES('$ITEM')";
 	 		 $result=mysqli_query($con,$query)
				or die("Query failed(18): " . mysqli_error($con));

 	 		 header("location:ITEMS.php");

 	 		 ?>
 	 		</div>
 	 </body>
</html>