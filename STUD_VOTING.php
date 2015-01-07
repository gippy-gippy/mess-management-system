<html>
		<link href="site.css" rel="stylesheet">
	<head>
		<title>Vote for Menu</title>
		<style type="text/css">
		body{
			background: url(studvotingimg.jpg) no-repeat  center fixed;
			background-position: fixed;
		}
		#block{
			background-color: #B8FF70;
			zoom: 1;
	filter: alpha(opacity=50);
	opacity: 0.7;
		}
		#block:hover{
			zoom: 1;
	filter: alpha(opacity=100);
	opacity: 1.0;
		}
		</style>
	</head>
	<body>
		<div id="block">
		<h2>VOTE FOR MONDAY MENU</h1>
		
		<form action="UPDATE_VOTING.php" method="post">
			<?php
			
				$con = mysqli_connect("localhost","root","","mess")
					or die("Couldn't connect to the server");

				$query = "SELECT * FROM voting_menu  ";
				$result = mysqli_query($con,$query)
					or die("Query failed(17): ".mysqli_error($con));

					$a=1;
					
				
				$row = mysqli_fetch_array($result);
				
					if($row['day']== 'monday')
					{

						if($row['time']=="breakfast")
							echo " ".$row['time'];
						echo "<br />";
						while($row['time']=="breakfast")
						{
							
							
							if($row['items']!=" "){
								echo "<br />";
								$tempid = $row['id'];
								?>
								<input type="radio" name="breakfastmon" value  = "<?php echo $tempid?>">
								<?php													//radio buttons for each option of monday breakfast 	
							echo " ".$row['items'];}
							
							$row = mysqli_fetch_array($result);
							

						}
						if($row['time']=="lunch")
						{
							echo "<br />";
							echo "<br />";
							echo " ".$row['time'];
							echo "<br />";
						}
						while($row['time']=="lunch")
						{
							
							
							
								if($row['items']!=" "){
									echo "<br />";
									$tempid = $row['id'];
									?>
								<input type="radio" name="lunchmon" value  = "<?php echo $tempid?>">
								<?php													//radio buttons for each option of monday lunch
								echo " ".$row['items'];}
								
								$row = mysqli_fetch_array($result);
							
							
							
						}
						if($row['time']=="snacks")
						{
							echo "<br />";
							echo "<br />";
							echo " ".$row['time'];
							echo "<br />";
						}
						while($row['time']=="snacks")
						{
							
							
								if($row['items']!=" "){
									echo "<br />";
									$tempid = $row['id'];
									?>
								<input type="radio" name="snacksmon" value  = "<?php echo $tempid?>">
								<?php																	//radio buttons for each option of monday snacks
								echo " ".$row['items']." ";}
							  
								$row = mysqli_fetch_array($result);
							
							
						
						}
						if($row['time']=="dinner")
						{
							echo "<br />";
							echo "<br />";
							echo " ".$row['time'];
							echo "<br />";
						}
						while($row['time']=="dinner")
						{
							
							
							
								if($row['items']!=" "){
											echo "<br />";
										   $tempid = $row['id'];
									?>
								<input type="radio" name="dinnermon" value  = "<?php echo $tempid?>">
								<?php
								echo " ".$row['items']." ";}
						
								$row = mysqli_fetch_array($result);
							
							
							
						}
				
							echo "<br />";
					}

									?>
								</div>
								<br>
								<div id = "block">
				<h2>VOTE FOR TUESDAY MENU</h1>
		
		
						<?php
						
						$a=1;

						if($row['day']=='tuesday')
						{
							if($row['time']=="breakfast")
								echo " ".$row['time'];
							echo "<br />";
							while($row['time']=="breakfast"  && $row['day']=='tuesday')
							{
							
							
								$a=$row['option'];
								while($row['option']==$a && $row['time']=="breakfast")
								{
									if($row['items']!=" "){
										echo "<br />";
										$tempid = $row['id'];
										?><input type="radio" name="breakfasttue" value  = "<?php echo $tempid?>"><?php
									echo " ".$row['items'];}
									
									$row = mysqli_fetch_array($result);
								}
								
							
							}
						
							if($row['time']=="lunch")
							{
								echo "<br />";
								echo "<br />";
								echo " ".$row['time'];
								echo "<br />";
							}
							while($row['time']=="lunch" && $row['day']=='tuesday')
							{
							
							
								$a=$row['option'];
								while($row['option']==$a && $row['time']=="lunch")
								{
									if($row['items']!=" "){
										echo "<br />";
										$tempid = $row['id'];
										?><input type="radio" name="lunchtue" value  = "<?php echo $tempid?>"><?php
									echo " ".$row['items'];}
									
									$row = mysqli_fetch_array($result);
								}
								
						
							}

							if($row['time']=="snacks")
							{
								echo "<br />";
								echo "<br />";
								echo " ".$row['time'];
								echo "<br />";
							}
							while($row['time']=="snacks"  && $row['day']=='tuesday')
							{
							
							
								$a=$row['option'];
								while($row['option']==$a && $row['time']=="snacks")
								{
									if($row['items']!=" "){
											echo "<br />";
										   $tempid = $row['id'];
										   	?>
								<input type="radio" name="snackstue" value  = "<?php echo $tempid?>">
								<?php
									echo " ".$row['items']." ";}
								
									$row = mysqli_fetch_array($result);
								}
							
							
							}

							if($row['time']=="dinner")
							{
								echo "<br />";
								echo "<br />";
								echo " ".$row['time'];
								echo "<br />";
							}
							while($row['time']=="dinner"  && $row['day']=='tuesday')
							{
								
							
								$a=$row['option'];
								while($row['option']==$a && $row['time']=="dinner")
								{
									if($row['items']!=" "){
										echo "<br />";
										$tempid = $row['id'];
												?>
								<input type="radio" name="dinnertue" value  = "<?php echo $tempid?>">
								<?php
									echo " ".$row['items']." ";}
								   
									$row = mysqli_fetch_array($result);
								}
						
						
							}
						}	
				
						echo "<br />";
				
					?>
				</div>
				<br>
				<div id="block">
					<h2>VOTE FOR WEDNESDAY MENU</h1>
		
		
						<?php
						$a=1;

						if($row['day']=='wednesday')
						{

							if($row['time']=="breakfast")
								echo " ".$row['time'];
							echo "<br />";
							while($row['time']=="breakfast"  && $row['day']=='wednesday')
							{

							
							
								$a=$row['option'];
								while($row['option']==$a && $row['time']=="breakfast")
								{
									if($row['items']!=" "){
											echo "<br />";
										$tempid = $row['id'];
										?><input type="radio" name="breakfastwed" value  = "<?php echo $tempid?>"><?php
									echo " ".$row['items'];}
									
									$row = mysqli_fetch_array($result);
								}
								
							
							}
						
							if($row['time']=="lunch")
							{
								echo "<br />";
								echo "<br />";
								echo " ".$row['time'];
								echo "<br />";
							}
							while($row['time']=="lunch" && $row['day']=='wednesday')
							{
						
							
								$a=$row['option'];
								while($row['option']==$a && $row['time']=="lunch")
								{
									if($row['items']!=" "){
										echo "<br />";
										$tempid = $row['id'];
										?><input type="radio" name="lunchwed" value  = "<?php echo $tempid?>"><?php
									echo " ".$row['items'];}
									
									$row = mysqli_fetch_array($result);
								}
								
						
							}
							if($row['time']=="snacks"){
								echo "<br />";
								echo "<br />";
								echo " ".$row['time'];
								echo "<br />";
							}
							while($row['time']=="snacks"  && $row['day']=='wednesday')
							{
							
							
								$a=$row['option'];
								while($row['option']==$a && $row['time']=="snacks")
								{
									if($row['items']!=" "){
										echo "<br />";
										  $tempid = $row['id'];
										?><input type="radio" name="snackswed" value  = "<?php echo $tempid?>"><?php
									echo " ".$row['items']." ";}
								 
									$row = mysqli_fetch_array($result);
								}
								
							
							}
							if($row['time']=="dinner")
							{
								echo "<br />";
								echo "<br />";
								echo " ".$row['time'];
								echo "<br />";
							}
							while($row['time']=="dinner"  && $row['day']=='wednesday')
							{
								
							
								$a=$row['option'];
								while($row['option']==$a && $row['time']=="dinner")
								{
									if($row['items']!=" "){
										echo "<br />";
										$tempid = $row['id'];
											?><input type="radio" name="dinnerwed" value  = "<?php echo $tempid?>"><?php
									echo " ".$row['items']." ";}
								   
									$row = mysqli_fetch_array($result);
								}
							
						
							}
						}	
				
						echo "<br />";
				
					?>
					
				</div>
				<br>
				<div id="block">
					<h2>VOTE FOR THURSDAY MENU</h1>
		
		
						<?php
						$a=1;

						if($row['day']=='thursday')
						{
							if($row['time']=="breakfast")
								echo " ".$row['time'];
								echo "<br />";
							while($row['time']=="breakfast"  && $row['day']=='thursday')
							{
							
							
								$a=$row['option'];
								while($row['option']==$a && $row['time']=="breakfast")
								{
									if($row['items']!=" "){
										echo "<br />";
										$tempid = $row['id'];
										?><input type="radio" name="breakfastthu" value  = "<?php echo $tempid?>"><?php
									echo " ".$row['items'];}
									
									$row = mysqli_fetch_array($result);
								}
								
							
							}
						
							if($row['time']=="lunch")
							{
								echo "<br />";
								echo "<br />";
								echo " ".$row['time'];
								echo "<br />";
							}
							while($row['time']=="lunch" && $row['day']=='thursday')
							{
							
							
								$a=$row['option'];
								while($row['option']==$a && $row['time']=="lunch")
								{
									if($row['items']!=" "){
										echo "<br />";
										$tempid = $row['id'];
										?><input type="radio" name="lunchthu" value  = "<?php echo $tempid?>"><?php
									echo " ".$row['items'];}
									
									$row = mysqli_fetch_array($result);
								}
								
						
							}
							if($row['time']=="snacks")
							{
								echo "<br />";
								echo "<br />";
								echo " ".$row['time'];
								echo "<br />";
							}
							while($row['time']=="snacks"  && $row['day']=='thursday')
							{
								
							
								$a=$row['option'];
								while($row['option']==$a && $row['time']=="snacks")
								{
									if($row['items']!=" "){
										echo "<br />";
										$tempid = $row['id'];
											?><input type="radio" name="snacksthu" value  = "<?php echo $tempid?>"><?php
									echo " ".$row['items']." ";}
								   
									$row = mysqli_fetch_array($result);
								}
							
							
							}
							if($row['time']=="dinner")
							{
								echo "<br />";
								echo "<br />";
								echo " ".$row['time'];
								echo "<br />";
							}
							while($row['time']=="dinner"  && $row['day']=='thursday')
							{
								
							
								$a=$row['option'];
								while($row['option']==$a && $row['time']=="dinner")
								{
									if($row['items']!=" "){
										echo "<br />";
										 $tempid = $row['id'];
										?><input type="radio" name="dinnerthu" value  = "<?php echo $tempid?>"><?php
									echo " ".$row['items']." ";}
								  
									$row = mysqli_fetch_array($result);
								}
								
						
							}
						}	
				
						echo "<br />";
				
					?>
					</div>
					<br>
				<div id="block">
					<h2>VOTE FOR FRIDAY MENU</h1>
		
		
						<?php
						$a=1;

						if($row['day']=='friday')
						{
							if($row['time']=="breakfast")
								echo " ".$row['time'];
							echo "<br />";
							while($row['time']=="breakfast"  && $row['day']=='friday')
							{
							
							
								$a=$row['option'];
								while($row['option']==$a && $row['time']=="breakfast")
								{
									if($row['items']!=" "){
										echo "<br />";
											$tempid = $row['id'];
										?>
								<input type="radio" name="breakfastfri" value  = "<?php echo $tempid?>">
								<?php
									echo " ".$row['items'];}
								
									$row = mysqli_fetch_array($result);
								}
								
							
							}
						
							if($row['time']=="lunch")
							{
								echo "<br />";
								echo "<br />";
								echo " ".$row['time'];
								echo "<br />";
							}
							while($row['time']=="lunch" && $row['day']=='friday')
							{
								
							
								$a=$row['option'];
								while($row['option']==$a && $row['time']=="lunch")
								{
									if($row['items']!=" "){
										echo "<br />";
										$tempid = $row['id'];
											?>
								<input type="radio" name="lunchfri" value  = "<?php echo $tempid?>">
								<?php
									echo " ".$row['items'];}
									
									$row = mysqli_fetch_array($result);
								}
							
						
							}
							if($row['time']=="snacks")
							{
								echo "<br />";
								echo "<br />";
								echo " ".$row['time'];
								echo "<br />";
							}
							while($row['time']=="snacks"  && $row['day']=='friday')
							{
								
							
								$a=$row['option'];
								while($row['option']==$a && $row['time']=="snacks")
								{
									if($row['items']!=" "){
										echo "<br />";
										$tempid = $row['id'];
										?>
								<input type="radio" name="snacksfri" value  = "<?php echo $tempid?>">
								<?php
									echo " ".$row['items']." ";}
								   
									$row = mysqli_fetch_array($result);
								}
								
							
							}
							if($row['time']=="dinner")
							{
								echo "<br />";
								echo "<br />";
								echo " ".$row['time'];
								echo "<br />";
							}
							while($row['time']=="dinner"  && $row['day']=='friday')
							{
								
							
								$a=$row['option'];
								while($row['option']==$a && $row['time']=="dinner")
								{
									if($row['items']!=" "){
										echo "<br />";
										  $tempid = $row['id'];
										?>
								<input type="radio" name="dinnerfri" value  = "<?php echo $tempid?>">
								<?php
									echo " ".$row['items']." ";}
								 
									$row = mysqli_fetch_array($result);
								}
								
						
							}
						}	
				
						echo "<br />";
				
					?>
					</div>
					<br>
				<div id="block">
					<h2>VOTE FOR SATURDAY MENU</h1>
		
		
						<?php
						$a=1;

						if($row['day']=='saturday')
						{
							if($row['time']=="breakfast")
								echo " ".$row['time'];
							echo "<br />";
							while($row['time']=="breakfast"  && $row['day']=='saturday')
							{
								
							
								$a=$row['option'];
								while($row['option']==$a && $row['time']=="breakfast")
								{
									if($row['items']!=" "){
										echo "<br />";
										$tempid = $row['id'];
										?>
								<input type="radio" name="breakfastsat" value  = "<?php echo $tempid?>">
								<?php
									echo " ".$row['items'];}
									
									$row = mysqli_fetch_array($result);
								}
								
							
							}
						
							if($row['time']=="lunch")
							{
								echo "<br />";
								echo "<br />";
								echo " ".$row['time'];
								echo "<br />";
							}
							while($row['time']=="lunch" && $row['day']=='saturday')
							{
								
							
								$a=$row['option'];
								while($row['option']==$a && $row['time']=="lunch")
								{
									if($row['items']!=" "){
										echo "<br />";
										$tempid = $row['id'];
										?>
								<input type="radio" name="lunchsat" value  = "<?php echo $tempid?>">
								<?php
									echo " ".$row['items'];}
									
									$row = mysqli_fetch_array($result);
								}
								
						
							}
							if($row['time']=="snacks")
							{
								echo "<br />";
								echo "<br />";
								echo " ".$row['time'];
								echo "<br />";
							}
							while($row['time']=="snacks"  && $row['day']=='saturday')
							{
								
							
								$a=$row['option'];
								while($row['option']==$a && $row['time']=="snacks")
								{
									if($row['items']!=" "){
										echo "<br />";
										  $tempid = $row['id'];
										?>
								<input type="radio" name="snackssat" value  = "<?php echo $tempid?>">
								<?php
									echo " ".$row['items']." ";}
								 
									$row = mysqli_fetch_array($result);
								}
								
							
							}
							if($row['time']=="dinner")
							{
								echo "<br />";
								echo "<br />";
								echo " ".$row['time'];
								echo "<br />";
							}
							while($row['time']=="dinner"  && $row['day']=='saturday')
							{
								
							
								$a=$row['option'];
								while($row['option']==$a && $row['time']=="dinner")
								{
									if($row['items']!=" "){
										echo "<br />";
										$tempid = $row['id'];
										?>
								<input type="radio" name="dinnersat" value  = "<?php echo $tempid?>">
								<?php
									echo " ".$row['items']." ";}
								   
									$row = mysqli_fetch_array($result);
								}
								
						
							}
						}	
				
						echo "<br />";
				
					?>
					</div>
					<br>
					<div id="block">
						
					
					<h2>VOTE FOR SUNDAY MENU</h1>
		
		
						<?php
						$a=1;

						if($row['day']=='sunday')
						{
							if($row['time']=="breakfast")
								echo " ".$row['time'];
							echo "<br />";
							while($row['time']=="breakfast"  && $row['day']=='sunday')
							{
								
							
								$a=$row['option'];
								while($row['option']==$a && $row['time']=="breakfast")
								{
									if($row['items']!=" "){
										echo "<br />";
										$tempid = $row['id'];
										?>
								<input type="radio" name="breakfastsun" value  = "<?php echo $tempid?>">
								<?php
									echo " ".$row['items'];}
									
									$row = mysqli_fetch_array($result);
								}
								
							
							}
						
							if($row['time']=="lunch")
							{
								echo "<br />";
								echo "<br />";
								echo " ".$row['time'];
								echo "<br />";
							}
							while($row['time']=="lunch" && $row['day']=='sunday')
							{
							
							
								$a=$row['option'];
								while($row['option']==$a && $row['time']=="lunch")
								{
									if($row['items']!=" "){
										echo "<br />";
										$tempid = $row['id'];
										?>
								<input type="radio" name="lunchsun" value  = "<?php echo $tempid?>">
								<?php
									echo " ".$row['items'];}
									
									$row = mysqli_fetch_array($result);
								}
								
						
							}
							if($row['time']=="snacks")
							{
								echo "<br />";
								echo "<br />";
								echo " ".$row['time'];
								echo "<br />";
							}
							while($row['time']=="snacks"  && $row['day']=='sunday')
							{
								
							
								$a=$row['option'];
								while($row['option']==$a && $row['time']=="snacks")
								{
									if($row['items']!=" "){
										echo "<br />";
										 $tempid = $row['id'];
										?>
								<input type="radio" name="snackssun" value  = "<?php echo $tempid?>">
								<?php
									echo " ".$row['items']." ";}
								  
									$row = mysqli_fetch_array($result);
								}
								
							
							}
							if($row['time']=="dinner")
							{
								echo "<br />";
								echo "<br />";
								echo " ".$row['time'];
								echo "<br />";
							}
							while($row['time']=="dinner"  && $row['day']=='sunday')
							{
								
							
								$a=$row['option'];
								while($row['option']==$a && $row['time']=="dinner")
								{
									if($row['items']!=" "){
										echo "<br />";
										$tempid = $row['id'];
										?>
								<input type="radio" name="dinnersun" value  = "<?php echo $tempid?>">
								<?php
									echo " ".$row['items']." ";}
								   
									$row = mysqli_fetch_array($result);
								}
								
						
							}
						}	
				
						echo "<br />";
				
					?>
					</div>					
			<input type = "submit" value = "FINISH" />
		</form>
	</div>
	</body>
</html>
