<?php
	$con = mysqli_connect('localhost','root','','mess');
	if(!$con){
		echo "Failed to connect: ".mysqli_connect_error();
	}
		$result = mysqli_query($con,"SELECT * FROM items_for_the_menu ORDER BY ITEM");

	while($row = mysqli_fetch_array($result)){
		$item = $row['ITEM'];
		//$result = mysqli_query($con,"SELECT * FROM items_for_the_menu ORDER BY ITEM");
?>
<option value="<?php echo $item; ?>"><?php echo $item; ?></option>
<?php
	}
	mysqli_close($con);
?>
