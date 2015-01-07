<?php include 'enterfinalmenu.php'; ?>
<html>
<head>
	<title>Confirm Menu</title>
	<link href="site.css" rel="stylesheet">
</head>
<body>
	<div id="main">
	<h1>Confirm The Menu</h1>
	<form action="adminhome1.php" method="post">

	<table width="1330">
		<tr>
			<td></td>
			<td><h3>Breakfast</h3></td>
			<td><h3>Lunch</h3></td>
			<td><h3>Snacks</h3></td>
			<td><h3>Dinner</h3></td>
		</tr>
		<tr>
			<td>Monday</td>
			<td>
				<?php echo $_REQUEST['monb']; ?>
			</td>

			<td>
				<?php echo $_REQUEST['monl']; ?>
			</td>

			<td>
				<?php echo $_REQUEST['mons']; ?>
			</td>

			<td>
				<?php echo $_REQUEST['mond']; ?>
			</td>
		</tr>
	
		<tr>
			<td>Tuesday</td>
			<td>
				<?php echo $_REQUEST['tueb']; ?>
			</td>

			<td>
				<?php echo $_REQUEST['tuel']; ?>
			</td>

			<td>
				<?php echo $_REQUEST['tues']; ?>
			</td>

			<td>
				<?php echo $_REQUEST['tued']; ?>
			</td>
		</tr>


		<tr>
			<td>Wednesday</td>
			<td>
				<?php echo $_REQUEST['wedb']; ?>
			</td>

			<td>
				<?php echo $_REQUEST['wedl']; ?>
			</td>

			<td>
				<?php echo $_REQUEST['weds']; ?>
			</td>

			<td>
				<?php echo $_REQUEST['wedd']; ?>
			</td>
		</tr>
		<tr>
			<td>Thursday</td>
			<td>
				<?php echo $_REQUEST['thub']; ?>
			</td>

			<td>
				<?php echo $_REQUEST['thul']; ?>
			</td>

			<td>
				<?php echo $_REQUEST['thus']; ?>
			</td>

			<td>
				<?php echo $_REQUEST['thud']; ?>
			</td>
		</tr>
		<tr>
			<td>Friday</td>
			<td>
				<?php echo $_REQUEST['frib']; ?>
			</td>

			<td>
				<?php echo $_REQUEST['fril']; ?>
			</td>

			<td>
				<?php echo $_REQUEST['fris']; ?>
			</td>

			<td>
				<?php echo $_REQUEST['frid']; ?>
			</td>
		</tr>
		<tr>
			<td>Saturday</td>
			<td>
				<?php echo $_REQUEST['satb']; ?>
			</td>

			<td>
				<?php echo $_REQUEST['satl']; ?>
			</td>

			<td>
				<?php echo $_REQUEST['sats']; ?>
			</td>

			<td>
				<?php echo $_REQUEST['satd']; ?>
			</td>
		</tr>
		<tr>
			<td>Sunday</td>
			<td>
				<?php echo $_REQUEST['sunb']; ?>
			</td>

			<td>
				<?php echo $_REQUEST['sunl']; ?>
			</td>

			<td>
				<?php echo $_REQUEST['suns']; ?>
			</td>

			<td>
				<?php echo $_REQUEST['sund']; ?>
			</td>
		</tr>
	</table>
<input type="submit" value="confirm" />
</form>
</div>
</body>
</html>