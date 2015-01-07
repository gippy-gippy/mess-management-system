<?php
    $con=mysqli_connect("localhost", "root", "", "mess");
    if (isset($_POST['master']) ) {
    $master=$_POST['master'];
    $result = mysqli_query($con, "SELECT * FROM masterpassword WHERE master='$master' ") or die("couldn't login");
	$numrows = mysqli_num_rows($result);
	setcookie("already_exist",0, time() + 3600);
        setcookie("fields_valid",1, time() + 3600);
	if($numrows==1){
	# Successfullly Logged in
	#takes the entry data and Welcomes the username;
	
	#Setting the cookie for the login entry
	setcookie("incorrect_master",1,time()+3600);
        
	header("location:adloginlogin.php");
	}
	else{
         setcookie("incorrect_master",0,time()+3600);
	#setting the login entry cookie with the false value
	
	header("location:getmasterinfo.php");
	}
         
}
else
{
   
    header("location:getmasterinfo.php");
}
mysqli_close($con);
?>
