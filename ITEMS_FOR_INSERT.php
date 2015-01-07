<html>
	<head>
		
		<title>ITEMS_FOR_INSERT</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<style type="text/css">
	a {
	font-size: 16px;
	color: #00F;
}
body{
	background-repeat: no-repeat;
	background-size: 1370px 750px;}
    #main form tr td {
	color: #0CF;
}
    h1 {
	font-size: 24px;
	color: #0CF;
	padding-left:10px;
}
    </style>
	</head>

	<body bgcolor="#CCCCCC" background="health-background3.jpg">
<div id="main">
		<?php
			 $con = mysqli_connect("localhost","root","","mess")
			 	or die("Could not connect to the server");

			 		$query = "SELECT * FROM items_for_the_menu";

			$result = mysqli_query($con, $query) 
				or die("Query failed(16): " . mysqli_error($con));
			 	$row=mysqli_fetch_array($result)
			 	?>

		<form action="ITEMS_INSERT.php" method="post">
		 <tr>       
	          <td><h1>NEW ITEM</h1></td>
	          <td>
	            <input type="text" name="ITEM" size="40" value="<?php echo $row['ITEM']; ?>">
	          </td>
	     </tr>
	         <tr>
	         	 <td align="right">
	             <input type="submit" name="submit value" value="INSERT">
	             </td>
	        </tr>
	      </form>
	     </div>
	   </body>
</html>