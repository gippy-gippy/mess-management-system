<?php

$username = $_POST['username'];
$password = $_POST['password'];
echo $username."  ".$password;
$password=md5($password)."";


if ($username && $password) {

    include("connection.php");
	$con=connect("mess");
    $result = mysqli_query($con, "SELECT * FROM signupinfo_arya WHERE username='$username' AND passwd='$password' ") or die("couldn't login");
	$numrows = mysqli_num_rows($result);
	include("close.php");

	if($numrows==1){	
	# Successfullly Logged in
	setcookie("user",$username,time()+3600*24);
	
	#Setting the cookie for the login entry
	setcookie("login_entry",1,time()+3600*24);
	
	session_start();
	$_SESSION['username'] = $username;
	header("location:studhome.php");
} 
    else
	{
        echo "Wrong Username or Password";
		#setting the login entry cookie with the false value
		setcookie("login_entry",0,time()+3600);
		//if(sess is not set or 0){"user is not logged" in but when "set and the value is 1 user is logged in"}
		header("location:login.php");
}
}
?>