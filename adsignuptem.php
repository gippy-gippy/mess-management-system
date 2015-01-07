<?php
function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

$username = test_input($_POST["usernamesignup"]);
$password = md5(test_input($_POST['passwordsignup']));
$passwordconfirm =md5(test_input($_POST['passwordsignup_confirm']));
$name = test_input($_POST["name"]);
$contact = test_input($_POST["contact"]);

include("connection.php");
$con=connect("mess");

if (preg_match("/^[a-zA-Z ]+$/",$name)&& preg_match("/^[0-9]{10}$/",$contact) && strcmp($password, $passwordconfirm)== 0)
{
    $result = mysqli_query($con, "SELECT * FROM admininfo WHERE admin_name='$username'") or die("couldn't connect to admininfo");
    setcookie("fields_valid",1, time() + 3600);

    if (mysqli_num_rows($result) != 0) {#more than 1 user;
        setcookie("already_exist",1, time() + 3600); 
        header('Location: adlogin.php');
    } 

        else {
   
    if (mysqli_connect_errno()) {
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }

    mysqli_query($con,"INSERT INTO `mess`.`admininfo` (`voting`,`name`, `admin_name`, `passwd`,`contact`) VALUES ('0','$name', '$username', '$password', 'contact')");
    setcookie("new_register",1, time() + 3600); 
    header('Location: adloginlogin.php');
    }

    include("close.php");
}
 else {
setcookie("fields_valid",0, time() + 3600);   
header('Location: adlogin.php');
}

?>