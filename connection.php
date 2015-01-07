<?php 
function connect($db){
	$con = mysqli_connect("localhost", "root", "", $db) or die("Error connecting with the database");
	return $con;
}	
?>