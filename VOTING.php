<?php

	$con = mysqli_connect( "localhost", "root", "", "mess" )
		or die("Couldn't connect to the server") ; 

	$query = "SELECT * FROM `enter_menu` " ;
	$result = mysqli_query( $con, $query) 
		or die( "Query failed(8) :".mysqli_error($con) );
		$row = mysqli_fetch_array($result);
	
				while(1)
				{
						
						while($row['time']=="breakfast")
						{
							$tempString  = " ";
							$a=$row['option'];
							while($row['option']==$a)
							{
								if($row['item']!="none")
								$tempString .= " ".$row['item'];
							    	$d=$row['day'];
									$t=$row['time'];
							
								$row = mysqli_fetch_array($result);
							}
						
							
							$order = "UPDATE `mess`.`voting_menu` SET `items` = '$tempString' WHERE `day` = '$d' AND `time` = '$t' AND `option` = '$a'";
							$output = mysqli_query( $con, $order)
								or die( "Query failed(29): ".mysqli_error($con) );
								
							if($row['time']=="breakfast")
							{	
							continue;
							}
						}

						
						
							while($row['time']=="lunch")
						{
							$tempString  = " ";
							$a=$row['option'];
							while($row['option']==$a)
							{
								if($row['item']!="none")
								$tempString .=" " . $row['item'];
								$d=$row['day'];
								$t=$row['time'];
								$row = mysqli_fetch_array($result);
							}

							
							$order = "UPDATE `voting_menu` SET `items` = '$tempString' WHERE `day` = '$d' AND `time` = '$t' AND `option` = '$a'";
							$output = mysqli_query( $con, $order)
								or die( "Query failed(46) :".mysqli_error($con) );

							if($row['time']=="lunch")
							{	
							continue;
							}
						}

						

							while($row['time']=="snacks")
						{
							$tempString  = " ";
							$a=$row['option'];
							while($row['option']==$a)
							{
								if($row['item']!="none")
								$tempString .= " ". $row['item'];
								$d=$row['day'];
								$t=$row['time'];
								$row = mysqli_fetch_array($result);
							}

							
							//$o=$row['option']-1;
							$order = "UPDATE `voting_menu` SET `items` = '$tempString' WHERE `day` = '$d' AND `time` = '$t' AND `option` = '$a'";
							$output = mysqli_query( $con, $order)
								or die( "Query failed(65) :".mysqli_error($con) );

							if($row['time']=="snacks")
							{	
							continue;
							}
						}

						

							while($row['time']=="dinner")
						{
							$tempString  = " ";
							$a=$row['option'];
							while($row['option']==$a)
							{
								if($row['item']!="none")
								$tempString .= " ". $row['item'];
								$d=$row['day'];
								$t=$row['time'];

								$row = mysqli_fetch_array($result);
							}

							//$d=$row['day'];
							//$t=$row['time'];

							$order = "UPDATE `voting_menu` SET `items` = '$tempString' WHERE `day` = '$d' AND `time` = '$t' AND `option` = '$a'";
							$output = mysqli_query( $con, $order)
								or die( "Query failed(85) :".mysqli_error($con) );

							if($row['time']=="dinner")
							{	
								continue;
							}
							
						}
						if($d=="sunday" && $a==5 && $t = "dinner")
							break;
						
				}
				l:echo "";
?>