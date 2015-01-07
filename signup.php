<html>
<body>
<?php 
function test_input($data)
{
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

$name=test_input($_POST['name']);
$username= test_input($_POST["usernamesignup"]);
$password1=md5(test_input($_POST['passwordsignup']));
$roomnumber=test_input($_POST['roomnumber']);
$contact=test_input($_POST['contact']);


include("connection.php");
$con=connect("mess");
$query = mysqli_query($con,"SELECT username FROM signupinfo_arya WHERE username='$username' ");

  if (mysqli_num_rows($query) != 0)     #more than 1 user;
  {
		setcookie("user_already_exist",1,time()+3600*24);
		header("Location:login.php#toregister");
		exit;
  }

mysqli_query($con,"INSERT INTO `mess`.`signupinfo_arya` (`id`, `votebld`, `name`, `username`, `roomno`, `contactno`, `passwd`) VALUES (NULL, '0', '$name', '$username', '$roomnumber', '$contact', '$password1')");
include("close.php");
setcookie("Just_Entered_the_user",1,time()+3600);
header("Location:login.php#tologin");

?>
</body>
</html>