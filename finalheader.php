<?php
	$result = mysqli_query($con,"SELECT * FROM final_menu WHERE `id` = '$id' ");
	$row = mysqli_fetch_array($result);
	$id++;
	echo $row['items'];
?>