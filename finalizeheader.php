<?php
	$result = mysqli_query($con,"SELECT id,items,no_of_votes FROM voting_menu WHERE id = '$id'");
	$id++;
	$row = mysqli_fetch_array($result);
?>