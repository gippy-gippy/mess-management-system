<html>
<head>
	<title>Complains</title>
	<link href="site.css" rel="stylesheet">
	<style type="text/css">
	body{
			font-family: "Calibri";
			font-size: 18px;
			color: #000000;
			background: url(complainimage.jpg) no-repeat  center fixed;
			background-position: fixed;
		}
		#header{
			text-indent: 10px;
			color:#520000;
			font-size:40px;
		}
		#msgbox{
			border-style: solid;
			border-color: #2E2E1F;
			border-radius: 12px 12px 12px 12px;
			margin:10px;
			
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
		textarea{
			resize:none;
			border-radius: 10px 10px 10px 10px;
		}
	</style>
</head>
<body>
	<div id="min">
		<div align="right">
			<a id="back" href="adminhome1.php">Go back</a>
		</div>
		<p id="header">Posted complains</p>
		<?php
			$con = mysqli_connect('localhost','root','','mess');

			if(!$con)
			{
				echo "Failed to connect: ".mysqli_connect_error();
			}

			$result = mysqli_query($con,"SELECT * FROM studcomplain ORDER BY id DESC LIMIT 20");
			 
			while($row = mysqli_fetch_array($result)){
				$date = $row['date'];
				$user = $row['user'];
				$id = $row['id'];
				$comp = $row['comp'];
				$votes = $row['votes'];
				$reply = $row['reply'];
				$admin = $row['admin'];
		?>
		<div id="msgbox" class="transparent">
			<div id="sender"><?php echo "on ".$date." by ".$user."<br />"; ?>
			</div>
			<div id ="complain" class="transparent">
			<?php echo $comp; ?>
			
			<br />
			<?php echo $votes." votes "; ?>
		</div>
		<div id="reply" class="transparent">
			<?php if(!$reply){ ?>
			<form action="adminseen.php" method="post">
				<input type="hidden" name="id" value="<?php echo $id; ?>" />
				<textarea name="re" rows="2" cols="100">   </textarea>
				<br />
				<input type="submit" name="reply" value="Reply" />
			</form>

			
			<?php 
			}
			else{
				echo "Replied by ".$admin." : $reply";
			} ?>
			</div>
		</div>
		<?php } ?>

</body>
</html>