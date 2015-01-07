<html>
	<head>
		<title>Enter your choice</title>
	</head>
	<style>
		body{
			font-family:"Calibri";
			color:#000000;
		background-repeat:no-repeat center fixed;
		-webkit-background-size: cover;
		-moz-background-size: cover;
		background-size: cover;
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
		a{
			padding: 10px 20px;
			text-decoration: none;
			line-height: 2.8em;
			color: #034af3;
			border-radius: 10px 10px 10px 10px;
		}
		
		td,th{
			font-size:35px;
		}
		#header{
			text-align: center;
			font-size:50px;
		}
		input[type="submit"] {
    font-size:28px;
	font-family:"Calibri";
    width: 150px; /* width of image */
    height: 40px; /* height of image */
    border-radius: 14px;
	background-color: #993333;
}
	input[type="text"]{
		width: 750px;
		font-size:35px;
		font-family:"Calibri";
		border-radius:10px 10px 10px 10px;
		border-color:#000000;
	}
		</style>
	<body background="img/cake.jpg">
		 
		<div align="right">
			<a id="back" href="editmenu.php">Go back</a>
		</div>
		<h1 font-size:40px>Edit Your Choice:</h1>
		 <?php
		 
		 echo "<table width = '1200'>";
		 echo "<tr>";
		 echo "<th>DAY</th><th>TIME</th><th>ITEMS</th>";
		 echo "</tr>";
		 $tempid = $_GET['id'];

		  $con = mysqli_connect("localhost","root","","mess")
		  	or die("Couldn't connect to the server");

		 $query = "SELECT * FROM final_menu WHERE id = '$tempid'";
		 $result  = mysqli_query($con,$query)
		 	or die("Query failed(15): ".mysqli_error($con));
		 	$row = mysqli_fetch_array($result);
			
		 	?>
		 	<form action = "UPDATE_EDITED_ROW.php" method = "post">
		 		<input type="hidden" name="id" value="<?php echo $row['id'] ?>">
		 		<tr><td><?php echo $row['day'] ?></td>
		 			<td><?php echo $row['time'] ?></td>
		 			<td><input type = "text" name = "items" size = "100"
		 				value = "<?php echo $row['items'];?>"></td>
		 			</tr>
		 			<tr>
	         		 <td align="right">
	            	<input type="submit" name="submit value" value="Edit">
	          		</td>
	          </form>
	</body>
</html>