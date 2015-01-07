<?php
function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
$username = test_input($_POST["usernamesignup"]);
$password = md5(test_input($_POST['passwordsignup']));
$passwordconfirm = md5(test_input($_POST['passwordsignup_confirm']));
$con = mysqli_connect("localhost", "root", "", "mess");
$name = test_input($_POST["name"]);

if (preg_match("/^[a-zA-Z ]+$/",$name)&& strcmp($password, $passwordconfirm)== 0)
{$result = mysqli_query($con, "SELECT * FROM admininfo WHERE admin_name='$username'") or die("couldn't connect to admininfo");
    setcookie("fields_valid",1, time() + 3600);
if (mysqli_num_rows($result) != 0) {#more than 1 user;
    setcookie("already_exist",1, time() + 3600); 
    header('Location: adlogin.php');
} else {
   
    if (mysqli_connect_errno()) {
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }
    mysqli_query($con,"INSERT INTO `mess`.`admininfo` (`name`, `admin_name`, `passwd`) VALUES ('$name', '$username', '$password')");
    setcookie("new_register",1, time() + 3600); 
    header('Location: adloginlogin.php');
    }

}
 else {
setcookie("fields_valid",0, time() + 3600);   
header('Location: adlogin.php');
}
//  header("Location:adlogin.php#toregister");
?>