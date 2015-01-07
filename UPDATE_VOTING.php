<?php
	$con = mysqli_connect("localhost","root","","mess")
		or die("Couldn't connect to the server");
	$user = $_COOKIE['user'];
	$res = mysqli_query($con,"SELECT * FROM `mess`.`signupinfo_arya` WHERE `username` = '$user'");
	$r = mysqli_fetch_array($res);	
	if($r['votebld'] == '1'){
		if(isset($_REQUEST["breakfastmon"]))
		{
			$a = $_REQUEST["breakfastmon"];
			
			$query = "SELECT * FROM `mess`.`voting_menu` WHERE `id` = '$a'";
			$result = mysqli_query($con,$query)
				or die("Query failed(17): ".mysqli_error($con));

			$row = mysqli_fetch_array($result);
			$b = $row['no_of_votes'];
			$b = $b + 1;
			
			$query = "UPDATE `mess`.`voting_menu` SET `no_of_votes` = '$b' WHERE `id` = '$a' ";
			$result = mysqli_query($con,$query)
				or die("Query failed(17): ".mysqli_error($con));
		}

		if(isset($_REQUEST["lunchmon"]))
		{
			$a = $_REQUEST["lunchmon"];
			
			$query = "SELECT * FROM `mess`.`voting_menu` WHERE `id` = '$a'";
			$result = mysqli_query($con,$query)
				or die("Query failed(17): ".mysqli_error($con));

			$row = mysqli_fetch_array($result);
			$b = $row['no_of_votes'];
			$b = $b + 1;
			
			$query = "UPDATE `mess`.`voting_menu` SET `no_of_votes` = '$b' WHERE `id` = '$a' ";
			$result = mysqli_query($con,$query)
				or die("Query failed(17): ".mysqli_error($con));
		}

		if(isset($_REQUEST["snacksmon"]))
		{
			$a = $_REQUEST["snacksmon"];
			
			$query = "SELECT * FROM `mess`.`voting_menu` WHERE `id` = '$a'";
			$result = mysqli_query($con,$query)
				or die("Query failed(17): ".mysqli_error($con));

			$row = mysqli_fetch_array($result);
			$b = $row['no_of_votes'];
			$b = $b + 1;
			
			$query = "UPDATE `mess`.`voting_menu` SET `no_of_votes` = '$b' WHERE `id` = '$a' ";
			$result = mysqli_query($con,$query)
				or die("Query failed(17): ".mysqli_error($con));
		}

		if(isset($_REQUEST["dinnermon"]))
		{
			$a = $_REQUEST["dinnermon"];
			
			$query = "SELECT * FROM `mess`.`voting_menu` WHERE `id` = '$a'";
			$result = mysqli_query($con,$query)
				or die("Query failed(17): ".mysqli_error($con));

			$row = mysqli_fetch_array($result);
			$b = $row['no_of_votes'];
			$b = $b + 1;
			
			$query = "UPDATE `mess`.`voting_menu` SET `no_of_votes` = '$b' WHERE `id` = '$a' ";
			$result = mysqli_query($con,$query)
				or die("Query failed(17): ".mysqli_error($con));
		}



		if(isset($_REQUEST["breakfasttue"]))
		{
			$a = $_REQUEST["breakfasttue"];
			
			$query = "SELECT * FROM `mess`.`voting_menu` WHERE `id` = '$a'";
			$result = mysqli_query($con,$query)
				or die("Query failed(17): ".mysqli_error($con));

			$row = mysqli_fetch_array($result);
			$b = $row['no_of_votes'];
			$b = $b + 1;
			
			$query = "UPDATE `mess`.`voting_menu` SET `no_of_votes` = '$b' WHERE `id` = '$a' ";
			$result = mysqli_query($con,$query)
				or die("Query failed(17): ".mysqli_error($con));
		}

		if(isset($_REQUEST["lunchtue"]))
		{
			$a = $_REQUEST["lunchtue"];
			
			$query = "SELECT * FROM `mess`.`voting_menu` WHERE `id` = '$a'";
			$result = mysqli_query($con,$query)
				or die("Query failed(17): ".mysqli_error($con));

			$row = mysqli_fetch_array($result);
			$b = $row['no_of_votes'];
			$b = $b + 1;
			
			$query = "UPDATE `mess`.`voting_menu` SET `no_of_votes` = '$b' WHERE `id` = '$a' ";
			$result = mysqli_query($con,$query)
				or die("Query failed(17): ".mysqli_error($con));
		}

		if(isset($_REQUEST["snackstue"]))
		{
			$a = $_REQUEST["snackstue"];
			
			$query = "SELECT * FROM `mess`.`voting_menu` WHERE `id` = '$a'";
			$result = mysqli_query($con,$query)
				or die("Query failed(17): ".mysqli_error($con));

			$row = mysqli_fetch_array($result);
			$b = $row['no_of_votes'];
			$b = $b + 1;
			
			$query = "UPDATE `mess`.`voting_menu` SET `no_of_votes` = '$b' WHERE `id` = '$a' ";
			$result = mysqli_query($con,$query)
				or die("Query failed(17): ".mysqli_error($con));
		}

		if(isset($_REQUEST["dinnertue"]))
		{
			$a = $_REQUEST["dinnertue"];
			
			$query = "SELECT * FROM `mess`.`voting_menu` WHERE `id` = '$a'";
			$result = mysqli_query($con,$query)
				or die("Query failed(17): ".mysqli_error($con));

			$row = mysqli_fetch_array($result);
			$b = $row['no_of_votes'];
			$b = $b + 1;
			
			$query = "UPDATE `mess`.`voting_menu` SET `no_of_votes` = '$b' WHERE `id` = '$a' ";
			$result = mysqli_query($con,$query)
				or die("Query failed(17): ".mysqli_error($con));
		}


		if(isset($_REQUEST["breakfastwed"]))
		{
			$a = $_REQUEST["breakfastwed"];
			
			$query = "SELECT * FROM `mess`.`voting_menu` WHERE `id` = '$a'";
			$result = mysqli_query($con,$query)
				or die("Query failed(17): ".mysqli_error($con));

			$row = mysqli_fetch_array($result);
			$b = $row['no_of_votes'];
			$b = $b + 1;
			
			$query = "UPDATE `mess`.`voting_menu` SET `no_of_votes` = '$b' WHERE `id` = '$a' ";
			$result = mysqli_query($con,$query)
				or die("Query failed(17): ".mysqli_error($con));
		}

		if(isset($_REQUEST["lunchwed"]))
		{
			$a = $_REQUEST["lunchwed"];
			
			$query = "SELECT * FROM `mess`.`voting_menu` WHERE `id` = '$a'";
			$result = mysqli_query($con,$query)
				or die("Query failed(17): ".mysqli_error($con));

			$row = mysqli_fetch_array($result);
			$b = $row['no_of_votes'];
			$b = $b + 1;
			
			$query = "UPDATE `mess`.`voting_menu` SET `no_of_votes` = '$b' WHERE `id` = '$a' ";
			$result = mysqli_query($con,$query)
				or die("Query failed(17): ".mysqli_error($con));
		}

		if(isset($_REQUEST["snackswed"]))
		{
			$a = $_REQUEST["snackswed"];
			
			$query = "SELECT * FROM `mess`.`voting_menu` WHERE `id` = '$a'";
			$result = mysqli_query($con,$query)
				or die("Query failed(17): ".mysqli_error($con));

			$row = mysqli_fetch_array($result);
			$b = $row['no_of_votes'];
			$b = $b + 1;
			
			$query = "UPDATE `mess`.`voting_menu` SET `no_of_votes` = '$b' WHERE `id` = '$a' ";
			$result = mysqli_query($con,$query)
				or die("Query failed(17): ".mysqli_error($con));
		}

		if(isset($_REQUEST["dinnerwed"]))
		{
			$a = $_REQUEST["dinnerwed"];
			
			$query = "SELECT * FROM `mess`.`voting_menu` WHERE `id` = '$a'";
			$result = mysqli_query($con,$query)
				or die("Query failed(17): ".mysqli_error($con));

			$row = mysqli_fetch_array($result);
			$b = $row['no_of_votes'];
			$b = $b + 1;
			
			$query = "UPDATE `mess`.`voting_menu` SET `no_of_votes` = '$b' WHERE `id` = '$a' ";
			$result = mysqli_query($con,$query)
				or die("Query failed(17): ".mysqli_error($con));
		}


		if(isset($_REQUEST["breakfastthu"]))
		{
			$a = $_REQUEST["breakfastthu"];
			
			$query = "SELECT * FROM `mess`.`voting_menu` WHERE `id` = '$a'";
			$result = mysqli_query($con,$query)
				or die("Query failed(17): ".mysqli_error($con));

			$row = mysqli_fetch_array($result);
			$b = $row['no_of_votes'];
			$b = $b + 1;
			
			$query = "UPDATE `mess`.`voting_menu` SET `no_of_votes` = '$b' WHERE `id` = '$a' ";
			$result = mysqli_query($con,$query)
				or die("Query failed(17): ".mysqli_error($con));
		}

		if(isset($_REQUEST["lunchthu"]))
		{
			$a = $_REQUEST["lunchthu"];
			
			$query = "SELECT * FROM `mess`.`voting_menu` WHERE `id` = '$a'";
			$result = mysqli_query($con,$query)
				or die("Query failed(17): ".mysqli_error($con));

			$row = mysqli_fetch_array($result);
			$b = $row['no_of_votes'];
			$b = $b + 1;
			
			$query = "UPDATE `mess`.`voting_menu` SET `no_of_votes` = '$b' WHERE `id` = '$a' ";
			$result = mysqli_query($con,$query)
				or die("Query failed(17): ".mysqli_error($con));
		}

		if(isset($_REQUEST["snacksthu"]))
		{
			$a = $_REQUEST["snacksthu"];
			
			$query = "SELECT * FROM `mess`.`voting_menu` WHERE `id` = '$a'";
			$result = mysqli_query($con,$query)
				or die("Query failed(17): ".mysqli_error($con));

			$row = mysqli_fetch_array($result);
			$b = $row['no_of_votes'];
			$b = $b + 1;
			
			$query = "UPDATE `mess`.`voting_menu` SET `no_of_votes` = '$b' WHERE `id` = '$a' ";
			$result = mysqli_query($con,$query)
				or die("Query failed(17): ".mysqli_error($con));
		}

		if(isset($_REQUEST["dinnerthu"]))
		{
			$a = $_REQUEST["dinnerthu"];
			
			$query = "SELECT * FROM `mess`.`voting_menu` WHERE `id` = '$a'";
			$result = mysqli_query($con,$query)
				or die("Query failed(17): ".mysqli_error($con));

			$row = mysqli_fetch_array($result);
			$b = $row['no_of_votes'];
			$b = $b + 1;
			
			$query = "UPDATE `mess`.`voting_menu` SET `no_of_votes` = '$b' WHERE `id` = '$a' ";
			$result = mysqli_query($con,$query)
				or die("Query failed(17): ".mysqli_error($con));
		}



		if(isset($_REQUEST["breakfastfri"]))
		{
			$a = $_REQUEST["breakfastfri"];
			
			$query = "SELECT * FROM `mess`.`voting_menu` WHERE `id` = '$a'";
			$result = mysqli_query($con,$query)
				or die("Query failed(17): ".mysqli_error($con));

			$row = mysqli_fetch_array($result);
			$b = $row['no_of_votes'];
			$b = $b + 1;
			
			$query = "UPDATE `mess`.`voting_menu` SET `no_of_votes` = '$b' WHERE `id` = '$a' ";
			$result = mysqli_query($con,$query)
				or die("Query failed(17): ".mysqli_error($con));
		}

		if(isset($_REQUEST["lunchfri"]))
		{
			$a = $_REQUEST["lunchfri"];
			
			$query = "SELECT * FROM `mess`.`voting_menu` WHERE `id` = '$a'";
			$result = mysqli_query($con,$query)
				or die("Query failed(17): ".mysqli_error($con));

			$row = mysqli_fetch_array($result);
			$b = $row['no_of_votes'];
			$b = $b + 1;
			
			$query = "UPDATE `mess`.`voting_menu` SET `no_of_votes` = '$b' WHERE `id` = '$a' ";
			$result = mysqli_query($con,$query)
				or die("Query failed(17): ".mysqli_error($con));
		}

		if(isset($_REQUEST["snacksfri"]))
		{
			$a = $_REQUEST["snacksfri"];
			
			$query = "SELECT * FROM `mess`.`voting_menu` WHERE `id` = '$a'";
			$result = mysqli_query($con,$query)
				or die("Query failed(17): ".mysqli_error($con));

			$row = mysqli_fetch_array($result);
			$b = $row['no_of_votes'];
			$b = $b + 1;
			
			$query = "UPDATE `mess`.`voting_menu` SET `no_of_votes` = '$b' WHERE `id` = '$a' ";
			$result = mysqli_query($con,$query)
				or die("Query failed(17): ".mysqli_error($con));
		}

		if(isset($_REQUEST["dinnerfri"]))
		{
			$a = $_REQUEST["dinnerfri"];
			
			$query = "SELECT * FROM `mess`.`voting_menu` WHERE `id` = '$a'";
			$result = mysqli_query($con,$query)
				or die("Query failed(17): ".mysqli_error($con));

			$row = mysqli_fetch_array($result);
			$b = $row['no_of_votes'];
			$b = $b + 1;
			
			$query = "UPDATE `mess`.`voting_menu` SET `no_of_votes` = '$b' WHERE `id` = '$a' ";
			$result = mysqli_query($con,$query)
				or die("Query failed(17): ".mysqli_error($con));
		}


		if(isset($_REQUEST["breakfastsat"]))
		{
			$a = $_REQUEST["breakfastsat"];
			
			$query = "SELECT * FROM `mess`.`voting_menu` WHERE `id` = '$a'";
			$result = mysqli_query($con,$query)
				or die("Query failed(17): ".mysqli_error($con));

			$row = mysqli_fetch_array($result);
			$b = $row['no_of_votes'];
			$b = $b + 1;
			
			$query = "UPDATE `mess`.`voting_menu` SET `no_of_votes` = '$b' WHERE `id` = '$a' ";
			$result = mysqli_query($con,$query)
				or die("Query failed(17): ".mysqli_error($con));
		}

		if(isset($_REQUEST["lunchsat"]))
		{
			$a = $_REQUEST["lunchsat"];
			
			$query = "SELECT * FROM `mess`.`voting_menu` WHERE `id` = '$a'";
			$result = mysqli_query($con,$query)
				or die("Query failed(17): ".mysqli_error($con));

			$row = mysqli_fetch_array($result);
			$b = $row['no_of_votes'];
			$b = $b + 1;
			
			$query = "UPDATE `mess`.`voting_menu` SET `no_of_votes` = '$b' WHERE `id` = '$a' ";
			$result = mysqli_query($con,$query)
				or die("Query failed(17): ".mysqli_error($con));
		}

		if(isset($_REQUEST["snackssat"]))
		{
			$a = $_REQUEST["snackssat"];
			
			$query = "SELECT * FROM `mess`.`voting_menu` WHERE `id` = '$a'";
			$result = mysqli_query($con,$query)
				or die("Query failed(17): ".mysqli_error($con));

			$row = mysqli_fetch_array($result);
			$b = $row['no_of_votes'];
			$b = $b + 1;
			
			$query = "UPDATE `mess`.`voting_menu` SET `no_of_votes` = '$b' WHERE `id` = '$a' ";
			$result = mysqli_query($con,$query)
				or die("Query failed(17): ".mysqli_error($con));
		}

		if(isset($_REQUEST["dinnersat"]))
		{
			$a = $_REQUEST["dinnersat"];
			
			$query = "SELECT * FROM `mess`.`voting_menu` WHERE `id` = '$a'";
			$result = mysqli_query($con,$query)
				or die("Query failed(17): ".mysqli_error($con));

			$row = mysqli_fetch_array($result);
			$b = $row['no_of_votes'];
			$b = $b + 1;
			
			$query = "UPDATE `mess`.`voting_menu` SET `no_of_votes` = '$b' WHERE `id` = '$a' ";
			$result = mysqli_query($con,$query)
				or die("Query failed(17): ".mysqli_error($con));
		}


		if(isset($_REQUEST["breakfastsun"]))
		{
			$a = $_REQUEST["breakfastsun"];
			
			$query = "SELECT * FROM `mess`.`voting_menu` WHERE `id` = '$a'";
			$result = mysqli_query($con,$query)
				or die("Query failed(17): ".mysqli_error($con));

			$row = mysqli_fetch_array($result);
			$b = $row['no_of_votes'];
			$b = $b + 1;
			
			$query = "UPDATE `mess`.`voting_menu` SET `no_of_votes` = '$b' WHERE `id` = '$a' ";
			$result = mysqli_query($con,$query)
				or die("Query failed(17): ".mysqli_error($con));
		}

		if(isset($_REQUEST["lunchsun"]))
		{
			$a = $_REQUEST["lunchsun"];
			
			$query = "SELECT * FROM `mess`.`voting_menu` WHERE `id` = '$a'";
			$result = mysqli_query($con,$query)
				or die("Query failed(17): ".mysqli_error($con));

			$row = mysqli_fetch_array($result);
			$b = $row['no_of_votes'];
			$b = $b + 1;
			
			$query = "UPDATE `mess`.`voting_menu` SET `no_of_votes` = '$b' WHERE `id` = '$a' ";
			$result = mysqli_query($con,$query)
				or die("Query failed(17): ".mysqli_error($con));
		}

		if(isset($_REQUEST["snackssun"]))
		{
			$a = $_REQUEST["snackssun"];
			
			$query = "SELECT * FROM `mess`.`voting_menu` WHERE `id` = '$a'";
			$result = mysqli_query($con,$query)
				or die("Query failed(17): ".mysqli_error($con));

			$row = mysqli_fetch_array($result);
			$b = $row['no_of_votes'];
			$b = $b + 1;
			
			$query = "UPDATE `mess`.`voting_menu` SET `no_of_votes` = '$b' WHERE `id` = '$a' ";
			$result = mysqli_query($con,$query)
				or die("Query failed(17): ".mysqli_error($con));
		}

		if(isset($_REQUEST["dinnersun"]))
		{
			$a = $_REQUEST["dinnersun"];
			
			$query = "SELECT * FROM `mess`.`voting_menu` WHERE `id` = '$a'";
			$result = mysqli_query($con,$query)
				or die("Query failed(17): ".mysqli_error($con));

			$row = mysqli_fetch_array($result);
			$b = $row['no_of_votes'];
			$b = $b + 1;
			
			$query = "UPDATE `mess`.`voting_menu` SET `no_of_votes` = '$b' WHERE `id` = '$a' ";
			$result = mysqli_query($con,$query)
				or die("Query failed(17): ".mysqli_error($con));
		}
		$user = $_COOKIE['user'];
		mysqli_query($con, "UPDATE `signupinfo_arya` SET `votebld`='0' WHERE `username`='$user'");
		mysqli_close($con); 
		header("location:studhome.php");
	}
	else
	{
		echo "you have already voted<br>";
		mysqli_close($con); 
	}
?>
<a href ="studhome.php">Go to homepage</a>	