<html>
	<head>
		
		<title>LIST_OF_ITEMS</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<style type="text/css">
	a {
	font-size: 14px;
	color: #FFF;
	padding-left:20px;
}
h1 {
	font-size: 24px;
	color: #0CF;
padding-left:20px;}
body{
	background-repeat: no-repeat;
	background-size: 1370px 750px;
	color: #00CCFF;}
    a:link {
	color: #00F;
	
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

	<body bgcolor="#CCCCCC" background="health-background3.jpg">
		<div align="right">
			<a id="back" href="adminhome1.php">Go back</a>
		</div>
		<div id="min">
		<hr>
		<h1>LIST OF ITEMS</h1>
		<hr>
		<?php
			 $con = mysqli_connect("localhost","root","","mess")
			 	or die("Could not connect to the server");

			 echo "<table border = '0'>";
			 echo "<tr>";
			 echo "<th>ITEM</th>";
			 echo "</tr>";

			 $query = "SELECT * FROM items_for_the_menu";
			 $result = mysqli_query($con, $query)
			 	or die("Query failed(20): ".mysqli_error($con));

			 while($row = mysqli_fetch_array($result))
			 {
			 	echo "<tr>";
			 	echo "</td><td>",$row['ITEM'],"</td>";
			 	echo '<td><a href = "ITEMS_DELETE.php?id='.$row['ITEM_NO'].'">REMOVE</a></td>';
			 	echo "</tr>";
			 }
			 echo "</table>";
			 echo '<a href = "ITEMS_FOR_INSERT.php?id='.$row['ITEM_NO'].'">INSERT</a>';
			 mysqli_close($con);
			 ?>
		</div>
    </body>
</html>


