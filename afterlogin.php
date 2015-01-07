<html>
<head>
	<title>Mess Management</title>
	<link href="site.css" rel="stylesheet">
</head>
<body>
	<div id="main">
		<h1>IIT Patna Mess</h1>
		<ul id="header" class="nav">
			<li><a href="STUD_MENU.php">Mess Menu</a></li>
			<li><a href="Customers.php">Login</a></li> 
			<li><a href="Register.php">Sign Up</a></li>
			<li><a href="Login.php">Contact</a></li> 
			<li><a href="complain.php">Stud Complain</a></li>
			<li><a href="admincomp.php">Admin Complain</a></li>
			<li><a href="issuenotice.php">Issue Notice</a></li>
			<li><a href="entermenu1.php">Enter Menu</a></li>
			<li><a href="ITEMS.php">Items</a></li>
			<li><a href="STUD_VOTING.php">Vote For Menu</a></li>
			<li><a href="finalizemenu.php">Finalize Menu</a></li>
			<br />
			<li><a href="EDIT_MENU.php">Edit Menu</a></li>
		</ul>	
	</div>
	<br>
	<div id="anotice">
		<h3>Ashoka</h3>
		<?php
			$con = mysqli_connect('localhost','root','','mess');

			if(!$con)
			{
				echo "Failed to connect: ".mysqli_connect_error();
			}
 		
			$result = mysqli_query($con,"SELECT * FROM ashokanotice ORDER BY id DESC LIMIT 10");
		?>
		<ul>
		<?php 
			while($row = mysqli_fetch_array($result)){
				$notice = $row['notice'];
		?>
		<ul><?php echo $notice; ?></ul>		
		<?php 
			}	
			mysqli_close($con);	
		?>
		</ul>
		<a href="http://www.free-iqtest.net" title="Free IQ Test"><img src="http://www.free-iqtest.net/images/badges2/l141.gif" width="200" height="100" alt="Free IQ Test" border="0"></a><br/><a title="Free IQ Test" href="http://www.free-iqtest.net">Free IQ Test</a>
	</div>
</body>
</html>