<html>
<head>
	<title>Complains</title>
	<link href="site.css" rel="stylesheet">
	<style type="text/css">
		body{
			font-family:"Calibri";
			background: url(complainimage.jpg) no-repeat  center fixed;
			background-position: fixed;
		}
		#header{
			text-indent: 10px;
			color:#520000;
			font-size:40px;
		}
		#msgbox{
			
			font-size:18px;
			color:#000000;
			border-style: solid;
			border-color: #2E2E1F;
			border-radius: 8px 8px 8px 8px;
			margin:10px;
		}
		textarea{
			resize:none;
			border-radius: 15px 15px 15px 15px;
			font-family:"Calibri";
			text-align-left: 20px;
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
<body>
	<div id="min">
		<div align="right">
			<a id="back" href="studhome.php">Go back</a>
		</div>
		<form action="storecomp.php" method="POST">
			<textarea  name="complain" cols="50" rows="10">        </textarea>
			<br />
			<input type="submit" value="Post complain"/>
		</form>
		<p id="header">Posted complains</p>
		<?php
			$con = mysqli_connect('localhost','root','','mess');

			if(!$con)
			{
				echo "Failed to connect: ".mysqli_connect_error();
			}

			$result = mysqli_query($con,"SELECT * FROM studcomplain ORDER BY id DESC LIMIT 20");          //select 20 latest complains
			$user = $_COOKIE["user"];
			while($row = mysqli_fetch_array($result)){
				$date = $row['date'];
				$compuser = $row['user'];
				$id = $row['id'];
				$comp = $row['comp'];
				$votes = $row['votes'];
				$reply = $row['reply'];
				$admin = $row['admin'];
				$compdata = mysqli_query($con, "SELECT * FROM complain_data WHERE complainid = '$id' AND user = '$user'");
				$numrows = mysqli_num_rows($compdata);
		?>

		<div id="msgbox">
			<div id="sender" class="transparent">
			<?php echo "on ".$date." by ".$compuser."<br />"; ?>                                 
			</div>
			<div id="complain" class="transparent">
			<?php echo $comp."<br />";																//show the complain
				 echo $votes." votes     ";															//no. of votes corresponding to that complain
				  ?>
		</div>
			<div id="reply" class="transparent">
			
			<?php
			if($reply){
				 echo "Replied by ".$admin." : ".$reply;
			}
			?>
		</div>
			<?php
			if($numrows == 0){
			?>
		
			<form action="votecomp.php" method="post">
				<input type="hidden" name="id" value="<?php echo $id; ?>" />
				<input type="submit" name="up" value="Upvote" />
			</form>
		
		<?php 
			}
			else{echo "Upvoted";}
			?>
			</div>
			<?php
			}
			mysqli_close($con);
		 ?>
    </div>
</body>
</html>