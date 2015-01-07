<html>
	<head>
		<title></title>
	</head>
	<body>
		 <?php
		 echo "<table border = '5' width = '1200'>";
		 echo "<tr>";
		 echo "<th>DAY</th><th>TIME</th><th>ITEMS</th>";
		 echo "</tr>";


		  $con = mysqli_connect("localhost","root","","mess")
		  	or die("Couldn't connect to the server");

		 $query = "SELECT * FROM final_menu";
		 $result  = mysqli_query($con,$query)
		 	or die("Query failed(18): ".mysqli_error($con));

		 	while ($row = mysqli_fetch_array($result))
			{
				echo "<tr>";
				echo "<td>",$row['day'],"</td><td>",$row['time'],"</td><td>",$row['items'],"</td>";
				 echo '<td><a href="EDIT_THE_ROW.php?id=".$row['id'].'">Edit</a></td></tr>';
				echo "</tr>";
			}
			echo "</table";
		 	?>
	</body>
</html>
