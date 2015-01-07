<?php 
		$con = mysqli_connect('localhost','root','','mess');

		if(!$con){
		      echo "Failed to connect: ".mysqli_connect_error();
		}

		$id = 1;
	?>
	<h2>Monday</h2>
	<table width="1250" class="ex_table">
		<tr>
			<td><h3>Breakfast</h3></td>
			<td><h3>Lunch</h3></td>
			<td><h3>Snacks</h3></td>
			<td><h3>Dinner</h3></td>
		</tr>
		<tr>
			<td>
			<?php include 'finalizeheader.php'; ?>
            <?php if($row['items'] != " "){?>
			<?php echo $row['items']."\t(".$row['no_of_votes']." votes)\n"; }?>

            <br>
			<?php include 'finalizeheader.php'; ?>
            <?php if($row['items'] != " "){?>
			<?php echo $row['items']."\t(".$row['no_of_votes']." votes)\n"; }?>

            <br>
			<?php include 'finalizeheader.php'; ?>
            <?php if($row['items'] != " "){?>
			<?php echo $row['items']."\t(".$row['no_of_votes']." votes)\n"; }?>

            <br>
			<?php include 'finalizeheader.php'; ?>
            <?php if($row['items'] != " "){?>
			<?php echo $row['items']."\t(".$row['no_of_votes']." votes)\n"; }?>

            <br>
			</td>

			<td>
			<?php include 'finalizeheader.php'; ?>
            <?php if($row['items'] != " "){?>
			<?php echo $row['items']."\t(".$row['no_of_votes']." votes)\n"; }?>

            <br>
			<?php include 'finalizeheader.php'; ?>
            <?php if($row['items'] != " "){?>
			<?php echo $row['items']."\t(".$row['no_of_votes']." votes)\n"; }?>

            <br>
			<?php include 'finalizeheader.php'; ?>
            <?php if($row['items'] != " "){?>
			<?php echo $row['items']."\t(".$row['no_of_votes']." votes)\n"; }?>

            <br>
			<?php include 'finalizeheader.php'; ?>
            <?php if($row['items'] != " "){?>
			<?php echo $row['items']."\t(".$row['no_of_votes']." votes)\n"; }?>

            <br>
			<?php include 'finalizeheader.php'; ?>
            <?php if($row['items'] != " "){?>
			<?php echo $row['items']."\t(".$row['no_of_votes']." votes)\n"; }?>

            <br>
			</td>

			<td>
			<?php include 'finalizeheader.php'; ?>
            <?php if($row['items'] != " "){?>
			<?php echo $row['items']."\t(".$row['no_of_votes']." votes)\n"; }?>

            <br>
			<?php include 'finalizeheader.php'; ?>
            <?php if($row['items'] != " "){?>
			<?php echo $row['items']."\t(".$row['no_of_votes']." votes)\n"; }?>

            <br>
			</td>

			<td>
			<?php include 'finalizeheader.php'; ?>
            <?php if($row['items'] != " "){?>
			<?php echo $row['items']."\t(".$row['no_of_votes']." votes)\n"; }?>

            <br>
			<?php include 'finalizeheader.php'; ?>
            <?php if($row['items'] != " "){?>
			<?php echo $row['items']."\t(".$row['no_of_votes']." votes)\n"; }?>

            <br>
			<?php include 'finalizeheader.php'; ?>
            <?php if($row['items'] != " "){?>
			<?php echo $row['items']."\t(".$row['no_of_votes']." votes)\n"; }?>

            <br>
			<?php include 'finalizeheader.php'; ?>
            <?php if($row['items'] != " "){?>
			<?php echo $row['items']."\t(".$row['no_of_votes']." votes)\n"; }?>

            <br>
			<?php include 'finalizeheader.php'; ?>
            <?php if($row['items'] != " "){?>
			<?php echo $row['items']."\t(".$row['no_of_votes']." votes)\n"; }?>

            <br>
			</td>
		</tr>
	</table>


        <h2>Tuesday</h2>
        <table width="1250" class="ex_table">
                <tr>
                        <td><h3>Breakfast</h3></td>
                        <td><h3>Lunch</h3></td>
                        <td><h3>Snacks</h3></td>
                        <td><h3>Dinner</h3></td>
                </tr>
                <tr>
                        <td>
                        <?php include 'finalizeheader.php'; ?>
                        <?php if($row['items'] != " "){?>

                        <?php echo $row['items']."\t(".$row['no_of_votes']." votes)\n"; }?>
            
                        <br>
                        <?php include 'finalizeheader.php'; ?>
                        <?php if($row['items'] != " "){?>

                        <?php echo $row['items']."\t(".$row['no_of_votes']." votes)\n"; }?>
            
                        <br>
                        <?php include 'finalizeheader.php'; ?>
                        <?php if($row['items'] != " "){?>

                        <?php echo $row['items']."    ".$row['no_of_votes']." votes\n"; }?>
            
                        <br>
                        <?php include 'finalizeheader.php'; ?>
                        <?php if($row['items'] != " "){?>

                        <?php echo $row['items']."\t(".$row['no_of_votes']." votes)\n"; }?>
            
                        <br>
                        </td>

                        <td>
                        <?php include 'finalizeheader.php'; ?>
                        <?php if($row['items'] != " "){?>

                        <?php echo $row['items']."\t(".$row['no_of_votes']." votes)\n"; }?>
            
                        <br>
                        <?php include 'finalizeheader.php'; ?>
                        <?php if($row['items'] != " "){?>

                        <?php echo $row['items']."\t(".$row['no_of_votes']." votes)\n"; }?>
            
                        <br>
                        <?php include 'finalizeheader.php'; ?>
                        <?php if($row['items'] != " "){?>

                        <?php echo $row['items']."\t(".$row['no_of_votes']." votes)\n"; }?>
            
                        <br>
                        <?php include 'finalizeheader.php'; ?>
                        <?php if($row['items'] != " "){?>

                        <?php echo $row['items']."\t(".$row['no_of_votes']." votes)\n"; }?>
            
                        <br>
                        <?php include 'finalizeheader.php'; ?>
                        <?php if($row['items'] != " "){?>

                        <?php echo $row['items']."\t(".$row['no_of_votes']." votes)\n"; }?>
            
                        <br>
                        </td>

                        <td>
                        <?php include 'finalizeheader.php'; ?>
                        <?php if($row['items'] != " "){?>

                        <?php echo $row['items']."\t(".$row['no_of_votes']." votes)\n"; }?>
            
                        <br>
                        <?php include 'finalizeheader.php'; ?>
                        <?php if($row['items'] != " "){?>

                        <?php echo $row['items']."\t(".$row['no_of_votes']." votes)\n"; }?>
            
                        <br>
                        </td>

                        <td>
                        <?php include 'finalizeheader.php'; ?>
                        <?php if($row['items'] != " "){?>

                        <?php echo $row['items']."\t(".$row['no_of_votes']." votes)\n"; }?>
            
                        <br>
                        <?php include 'finalizeheader.php'; ?>
                        <?php if($row['items'] != " "){?>

                        <?php echo $row['items']."\t(".$row['no_of_votes']." votes)\n"; }?>
            
                        <br>
                        <?php include 'finalizeheader.php'; ?>
                        <?php if($row['items'] != " "){?>

                        <?php echo $row['items']."\t(".$row['no_of_votes']." votes)\n"; }?>
            
                        <br>
                        <?php include 'finalizeheader.php'; ?>
                        <?php if($row['items'] != " "){?>

                        <?php echo $row['items']."\t(".$row['no_of_votes']." votes)\n"; }?>
            
                        <br>
                        <?php include 'finalizeheader.php'; ?>
                        <?php if($row['items'] != " "){?>

                        <?php echo $row['items']."\t(".$row['no_of_votes']." votes)\n"; }?>
            
                        <br>
                        </td>
                </tr>
        </table>


        <h2>Wednesday</h2>
        <table width="1250" class="ex_table">
                <tr>
                        <td><h3>Breakfast</h3></td>
                        <td><h3>Lunch</h3></td>
                        <td><h3>Snacks</h3></td>
                        <td><h3>Dinner</h3></td>
                </tr>
                <tr>
                        <td>
                        <?php include 'finalizeheader.php'; ?>
                        <?php if($row['items'] != " "){?>

                        <?php echo $row['items']."\t(".$row['no_of_votes']." votes)\n"; }?>
            
                        <br>
                        <?php include 'finalizeheader.php'; ?>
                        <?php if($row['items'] != " "){?>

                        <?php echo $row['items']."\t(".$row['no_of_votes']." votes)\n"; }?>
            
                        <br>
                        <?php include 'finalizeheader.php'; ?>
                        <?php if($row['items'] != " "){?>

                        <?php echo $row['items']."    ".$row['no_of_votes']." votes\n"; }?>
            
                        <br>
                        <?php include 'finalizeheader.php'; ?>
                        <?php if($row['items'] != " "){?>

                        <?php echo $row['items']."\t(".$row['no_of_votes']." votes)\n"; }?>
            
                        <br>
                        </td>

                        <td>
                        <?php include 'finalizeheader.php'; ?>
                        <?php if($row['items'] != " "){?>

                        <?php echo $row['items']."\t(".$row['no_of_votes']." votes)\n"; }?>
            
                        <br>
                        <?php include 'finalizeheader.php'; ?>
                        <?php if($row['items'] != " "){?>

                        <?php echo $row['items']."\t(".$row['no_of_votes']." votes)\n"; }?>
            
                        <br>
                        <?php include 'finalizeheader.php'; ?>
                        <?php if($row['items'] != " "){?>

                        <?php echo $row['items']."\t(".$row['no_of_votes']." votes)\n"; }?>
            
                        <br>
                        <?php include 'finalizeheader.php'; ?>
                        <?php if($row['items'] != " "){?>

                        <?php echo $row['items']."\t(".$row['no_of_votes']." votes)\n"; }?>
            
                        <br>
                        <?php include 'finalizeheader.php'; ?>
                        <?php if($row['items'] != " "){?>

                        <?php echo $row['items']."\t(".$row['no_of_votes']." votes)\n"; }?>
            
                        <br>
                        </td>

                        <td>
                        <?php include 'finalizeheader.php'; ?>
                        <?php if($row['items'] != " "){?>

                        <?php echo $row['items']."\t(".$row['no_of_votes']." votes)\n"; }?>
            
                        <br>
                        <?php include 'finalizeheader.php'; ?>
                        <?php if($row['items'] != " "){?>

                        <?php echo $row['items']."\t(".$row['no_of_votes']." votes)\n"; }?>
            
                        <br>
                        </td>

                        <td>
                        <?php include 'finalizeheader.php'; ?>
                        <?php if($row['items'] != " "){?>

                        <?php echo $row['items']."\t(".$row['no_of_votes']." votes)\n"; }?>
            
                        <br>
                        <?php include 'finalizeheader.php'; ?>
                        <?php if($row['items'] != " "){?>

                        <?php echo $row['items']."\t(".$row['no_of_votes']." votes)\n"; }?>
            
                        <br>
                        <?php include 'finalizeheader.php'; ?>
                        <?php if($row['items'] != " "){?>

                        <?php echo $row['items']."\t(".$row['no_of_votes']." votes)\n"; }?>
            
                        <br>
                        <?php include 'finalizeheader.php'; ?>
                        <?php if($row['items'] != " "){?>

                        <?php echo $row['items']."\t(".$row['no_of_votes']." votes)\n"; }?>
            
                        <br>
                        <?php include 'finalizeheader.php'; ?>
                        <?php if($row['items'] != " "){?>

                        <?php echo $row['items']."\t(".$row['no_of_votes']." votes)\n"; }?>
            
                        <br>
                        </td>
                </tr>
        </table>    


        <h2>Thursday</h2>
        <table width="1250" class="ex_table">
                <tr>
                        <td><h3>Breakfast</h3></td>
                        <td><h3>Lunch</h3></td>
                        <td><h3>Snacks</h3></td>
                        <td><h3>Dinner</h3></td>
                </tr>
                <tr>
                        <td>
                        <?php include 'finalizeheader.php'; ?>
                        <?php if($row['items'] != " "){?>

                        <?php echo $row['items']."\t(".$row['no_of_votes']." votes)\n"; }?>
            
                        <br>
                        <?php include 'finalizeheader.php'; ?>
                        <?php if($row['items'] != " "){?>

                        <?php echo $row['items']."\t(".$row['no_of_votes']." votes)\n"; }?>
            
                        <br>
                        <?php include 'finalizeheader.php'; ?>
                        <?php if($row['items'] != " "){?>

                        <?php echo $row['items']."    ".$row['no_of_votes']." votes\n"; }?>
            
                        <br>
                        <?php include 'finalizeheader.php'; ?>
                        <?php if($row['items'] != " "){?>

                        <?php echo $row['items']."\t(".$row['no_of_votes']." votes)\n"; }?>
            
                        <br>
                        </td>

                        <td>
                        <?php include 'finalizeheader.php'; ?>
                        <?php if($row['items'] != " "){?>

                        <?php echo $row['items']."\t(".$row['no_of_votes']." votes)\n"; }?>
            
                        <br>
                        <?php include 'finalizeheader.php'; ?>
                        <?php if($row['items'] != " "){?>

                        <?php echo $row['items']."\t(".$row['no_of_votes']." votes)\n"; }?>
            
                        <br>
                        <?php include 'finalizeheader.php'; ?>
                        <?php if($row['items'] != " "){?>

                        <?php echo $row['items']."\t(".$row['no_of_votes']." votes)\n"; }?>
            
                        <br>
                        <?php include 'finalizeheader.php'; ?>
                        <?php if($row['items'] != " "){?>

                        <?php echo $row['items']."\t(".$row['no_of_votes']." votes)\n"; }?>
            
                        <br>
                        <?php include 'finalizeheader.php'; ?>
                        <?php if($row['items'] != " "){?>

                        <?php echo $row['items']."\t(".$row['no_of_votes']." votes)\n"; }?>
            
                        <br>
                        </td>

                        <td>
                        <?php include 'finalizeheader.php'; ?>
                        <?php if($row['items'] != " "){?>

                        <?php echo $row['items']."\t(".$row['no_of_votes']." votes)\n"; }?>
            
                        <br>
                        <?php include 'finalizeheader.php'; ?>
                        <?php if($row['items'] != " "){?>

                        <?php echo $row['items']."\t(".$row['no_of_votes']." votes)\n"; }?>
            
                        <br>
                        </td>

                        <td>
                        <?php include 'finalizeheader.php'; ?>
                        <?php if($row['items'] != " "){?>

                        <?php echo $row['items']."\t(".$row['no_of_votes']." votes)\n"; }?>
            
                        <br>
                        <?php include 'finalizeheader.php'; ?>
                        <?php if($row['items'] != " "){?>

                        <?php echo $row['items']."\t(".$row['no_of_votes']." votes)\n"; }?>
            
                        <br>
                        <?php include 'finalizeheader.php'; ?>
                        <?php if($row['items'] != " "){?>

                        <?php echo $row['items']."\t(".$row['no_of_votes']." votes)\n"; }?>
            
                        <br>
                        <?php include 'finalizeheader.php'; ?>
                        <?php if($row['items'] != " "){?>

                        <?php echo $row['items']."\t(".$row['no_of_votes']." votes)\n"; }?>
            
                        <br>
                        <?php include 'finalizeheader.php'; ?>
                        <?php if($row['items'] != " "){?>

                        <?php echo $row['items']."\t(".$row['no_of_votes']." votes)\n"; }?>
            
                        <br>
                        </td>
                </tr>
        </table>     
 

        <h2>Friday</h2>
        <table width="1250" class="ex_table">
                <tr>
                        <td><h3>Breakfast</h3></td>
                        <td><h3>Lunch</h3></td>
                        <td><h3>Snacks</h3></td>
                        <td><h3>Dinner</h3></td>
                </tr>
                <tr>
                        <td>
                        <?php include 'finalizeheader.php'; ?>
                        <?php if($row['items'] != " "){?>

                        <?php echo $row['items']."\t(".$row['no_of_votes']." votes)\n"; }?>
            
                        <br>
                        <?php include 'finalizeheader.php'; ?>
                        <?php if($row['items'] != " "){?>

                        <?php echo $row['items']."\t(".$row['no_of_votes']." votes)\n"; }?>
            
                        <br>
                        <?php include 'finalizeheader.php'; ?>
                        <?php if($row['items'] != " "){?>

                        <?php echo $row['items']."    ".$row['no_of_votes']." votes\n"; }?>
            
                        <br>
                        <?php include 'finalizeheader.php'; ?>
                        <?php if($row['items'] != " "){?>

                        <?php echo $row['items']."\t(".$row['no_of_votes']." votes)\n"; }?>
            
                        <br>
                        </td>

                        <td>
                        <?php include 'finalizeheader.php'; ?>
                        <?php if($row['items'] != " "){?>

                        <?php echo $row['items']."\t(".$row['no_of_votes']." votes)\n"; }?>
            
                        <br>
                        <?php include 'finalizeheader.php'; ?>
                        <?php if($row['items'] != " "){?>

                        <?php echo $row['items']."\t(".$row['no_of_votes']." votes)\n"; }?>
            
                        <br>
                        <?php include 'finalizeheader.php'; ?>
                        <?php if($row['items'] != " "){?>

                        <?php echo $row['items']."\t(".$row['no_of_votes']." votes)\n"; }?>
            
                        <br>
                        <?php include 'finalizeheader.php'; ?>
                        <?php if($row['items'] != " "){?>

                        <?php echo $row['items']."\t(".$row['no_of_votes']." votes)\n"; }?>
            
                        <br>
                        <?php include 'finalizeheader.php'; ?>
                        <?php if($row['items'] != " "){?>

                        <?php echo $row['items']."\t(".$row['no_of_votes']." votes)\n"; }?>
            
                        <br>
                        </td>

                        <td>
                        <?php include 'finalizeheader.php'; ?>
                        <?php if($row['items'] != " "){?>

                        <?php echo $row['items']."\t(".$row['no_of_votes']." votes)\n"; }?>
            
                        <br>
                        <?php include 'finalizeheader.php'; ?>
                        <?php if($row['items'] != " "){?>

                        <?php echo $row['items']."\t(".$row['no_of_votes']." votes)\n"; }?>
            
                        <br>
                        </td>

                        <td>
                        <?php include 'finalizeheader.php'; ?>
                        <?php if($row['items'] != " "){?>

                        <?php echo $row['items']."\t(".$row['no_of_votes']." votes)\n"; }?>
            
                        <br>
                        <?php include 'finalizeheader.php'; ?>
                        <?php if($row['items'] != " "){?>

                        <?php echo $row['items']."\t(".$row['no_of_votes']." votes)\n"; }?>
            
                        <br>
                        <?php include 'finalizeheader.php'; ?>
                        <?php if($row['items'] != " "){?>

                        <?php echo $row['items']."\t(".$row['no_of_votes']." votes)\n"; }?>
            
                        <br>
                        <?php include 'finalizeheader.php'; ?>
                        <?php if($row['items'] != " "){?>

                        <?php echo $row['items']."\t(".$row['no_of_votes']." votes)\n"; }?>
            
                        <br>
                        <?php include 'finalizeheader.php'; ?>
                        <?php if($row['items'] != " "){?>

                        <?php echo $row['items']."\t(".$row['no_of_votes']." votes)\n"; }?>
            
                        <br>
                        </td>
                </tr>
        </table>


        <h2>Saturday</h2>
        <table width="1250" class="ex_table">
                <tr>
                        <td><h3>Breakfast</h3></td>
                        <td><h3>Lunch</h3></td>
                        <td><h3>Snacks</h3></td>
                        <td><h3>Dinner</h3></td>
                </tr>
                <tr>
                        <td>
                        <?php include 'finalizeheader.php'; ?>
                        <?php if($row['items'] != " "){?>

                        <?php echo $row['items']."\t(".$row['no_of_votes']." votes)\n"; }?>
            
                        <br>
                        <?php include 'finalizeheader.php'; ?>
                        <?php if($row['items'] != " "){?>

                        <?php echo $row['items']."\t(".$row['no_of_votes']." votes)\n"; }?>
            
                        <br>
                        <?php include 'finalizeheader.php'; ?>
                        <?php if($row['items'] != " "){?>

                        <?php echo $row['items']."    ".$row['no_of_votes']." votes\n"; }?>
            
                        <br>
                        <?php include 'finalizeheader.php'; ?>
                        <?php if($row['items'] != " "){?>

                        <?php echo $row['items']."\t(".$row['no_of_votes']." votes)\n"; }?>
            
                        <br>
                        </td>

                        <td>
                        <?php include 'finalizeheader.php'; ?>
                        <?php if($row['items'] != " "){?>

                        <?php echo $row['items']."\t(".$row['no_of_votes']." votes)\n"; }?>
            
                        <br>
                        <?php include 'finalizeheader.php'; ?>
                        <?php if($row['items'] != " "){?>

                        <?php echo $row['items']."\t(".$row['no_of_votes']." votes)\n"; }?>
            
                        <br>
                        <?php include 'finalizeheader.php'; ?>
                        <?php if($row['items'] != " "){?>

                        <?php echo $row['items']."\t(".$row['no_of_votes']." votes)\n"; }?>
            
                        <br>
                        <?php include 'finalizeheader.php'; ?>
                        <?php if($row['items'] != " "){?>

                        <?php echo $row['items']."\t(".$row['no_of_votes']." votes)\n"; }?>
            
                        <br>
                        <?php include 'finalizeheader.php'; ?>
                        <?php if($row['items'] != " "){?>

                        <?php echo $row['items']."\t(".$row['no_of_votes']." votes)\n"; }?>
            
                        <br>
                        </td>

                        <td>
                        <?php include 'finalizeheader.php'; ?>
                        <?php if($row['items'] != " "){?>

                        <?php echo $row['items']."\t(".$row['no_of_votes']." votes)\n"; }?>
            
                        <br>
                        <?php include 'finalizeheader.php'; ?>
                        <?php if($row['items'] != " "){?>

                        <?php echo $row['items']."\t(".$row['no_of_votes']." votes)\n"; }?>
            
                        <br>
                        </td>

                        <td>
                        <?php include 'finalizeheader.php'; ?>
                        <?php if($row['items'] != " "){?>

                        <?php echo $row['items']."\t(".$row['no_of_votes']." votes)\n"; }?>
            
                        <br>
                        <?php include 'finalizeheader.php'; ?>
                        <?php if($row['items'] != " "){?>

                        <?php echo $row['items']."\t(".$row['no_of_votes']." votes)\n"; }?>
            
                        <br>
                        <?php include 'finalizeheader.php'; ?>
                        <?php if($row['items'] != " "){?>

                        <?php echo $row['items']."\t(".$row['no_of_votes']." votes)\n"; }?>
            
                        <br>
                        <?php include 'finalizeheader.php'; ?>
                        <?php if($row['items'] != " "){?>

                        <?php echo $row['items']."\t(".$row['no_of_votes']." votes)\n"; }?>
            
                        <br>
                        <?php include 'finalizeheader.php'; ?>
                        <?php if($row['items'] != " "){?>

                        <?php echo $row['items']."\t(".$row['no_of_votes']." votes)\n"; }?>
            
                        <br>
                        </td>
                </tr>
        </table>


        <h2>Sunday</h2>
        <table width="1250" class="ex_table">
                <tr>
                        <td><h3>Breakfast</h3></td>
                        <td><h3>Lunch</h3></td>
                        <td><h3>Snacks</h3></td>
                        <td><h3>Dinner</h3></td>
                </tr>
                <tr>
                        <td>
                        <?php include 'finalizeheader.php'; ?>
                        <?php if($row['items'] != " "){?>

                        <?php echo $row['items']."\t(".$row['no_of_votes']." votes)\n"; }?>
            
                        <br>
                        <?php include 'finalizeheader.php'; ?>
                        <?php if($row['items'] != " "){?>

                        <?php echo $row['items']."\t(".$row['no_of_votes']." votes)\n"; }?>
            
                        <br>
                        <?php include 'finalizeheader.php'; ?>
                        <?php if($row['items'] != " "){?>

                        <?php echo $row['items']."    ".$row['no_of_votes']." votes\n"; }?>
            
                        <br>
                        <?php include 'finalizeheader.php'; ?>
                        <?php if($row['items'] != " "){?>

                        <?php echo $row['items']."\t(".$row['no_of_votes']." votes)\n"; }?>
            
                        <br>
                        </td>

                        <td>
                        <?php include 'finalizeheader.php'; ?>
                        <?php if($row['items'] != " "){?>

                        <?php echo $row['items']."\t(".$row['no_of_votes']." votes)\n"; }?>
            
                        <br>
                        <?php include 'finalizeheader.php'; ?>
                        <?php if($row['items'] != " "){?>

                        <?php echo $row['items']."\t(".$row['no_of_votes']." votes)\n"; }?>
            
                        <br>
                        <?php include 'finalizeheader.php'; ?>
                        <?php if($row['items'] != " "){?>

                        <?php echo $row['items']."\t(".$row['no_of_votes']." votes)\n"; }?>
            
                        <br>
                        <?php include 'finalizeheader.php'; ?>
                        <?php if($row['items'] != " "){?>

                        <?php echo $row['items']."\t(".$row['no_of_votes']." votes)\n"; }?>
            
                        <br>
                        <?php include 'finalizeheader.php'; ?>
                        <?php if($row['items'] != " "){?>

                        <?php echo $row['items']."\t(".$row['no_of_votes']." votes)\n"; }?>
            
                        <br>
                        </td>

                        <td>
                        <?php include 'finalizeheader.php'; ?>
                        <?php if($row['items'] != " "){?>

                        <?php echo $row['items']."\t(".$row['no_of_votes']." votes)\n"; }?>
            
                        <br>
                        <?php include 'finalizeheader.php'; ?>
                        <?php if($row['items'] != " "){?>

                        <?php echo $row['items']."\t(".$row['no_of_votes']." votes)\n"; }?>
            
                        <br>
                        </td>

                        <td>
                        <?php include 'finalizeheader.php'; ?>
                        <?php if($row['items'] != " "){?>

                        <?php echo $row['items']."\t(".$row['no_of_votes']." votes)\n"; }?>
            
                        <br>
                        <?php include 'finalizeheader.php'; ?>
                        <?php if($row['items'] != " "){?>

                        <?php echo $row['items']."\t(".$row['no_of_votes']." votes)\n"; }?>
            
                        <br>
                        <?php include 'finalizeheader.php'; ?>
                        <?php if($row['items'] != " "){?>

                        <?php echo $row['items']."\t(".$row['no_of_votes']." votes)\n"; }?>
            
                        <br>
                        <?php include 'finalizeheader.php'; ?>
                        <?php if($row['items'] != " "){?>

                        <?php echo $row['items']."\t(".$row['no_of_votes']." votes)\n"; }?>
            
                        <br>
                        <?php include 'finalizeheader.php'; ?>
                        <?php if($row['items'] != " "){?>

                        <?php echo $row['items']."\t(".$row['no_of_votes']." votes)\n"; }?>
            
                        <br>
                        </td>
                </tr>
        </table>
	<?php mysqli_close($con); ?>