<html>

<body>
<?php

$username = $_POST['username'];
$password = md5($_POST['password']);
$password1 = ($_POST['new_password1']);
$password2 = ($_POST['new_password2']);

    include("connection.php");
	
	$con=connect("mess");
    $result = mysqli_query($con, "select * from signupinfo_arya where username='$username' AND passwd='$password' ") or die("couldn't login");
	$numrows = mysqli_num_rows($result);
	
	setcookie("pass_ch_Success",1,time()+300);
	

if ($password1==$password2 && $numrows==1) {
	$password1 = md5($password1)."";
    $result = mysqli_query($con, "update signupinfo_arya set passwd='$password1' where username='$username' AND passwd='$password' ") or die("couldn't login");
}else{
$_COOKIE['pass_ch_Success']=0;}
include("close.php");

header("Location:login.php");

?>
</body>
</html>