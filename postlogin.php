<!--
To change this template, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        $username = $_POST['username'];
        $password = $_POST['password'];
        $con = mysqli_connect("localhost", "root", "", "mess");
        if (isset($username) && isset($password)) {
            setcookie("new_register", 0, time() + 3600);
            $result = mysqli_query($con, "SELECT * FROM admininfo WHERE admin_name='$username' AND passwd='$password' ") or die("couldn't connect to admininfo table from getresponse database");
            $numrows = mysqli_num_rows($result);
            if ($numrows == 1) {
                setcookie("incorrect_credential", 0, time() + 3600);
                setcookie("admin",$username,time() + 3600);
                header("location:adminhome1.php");
            } else {

                setcookie("incorrect_credential", 1, time() + 3600);
                header("location:adloginlogin.php");
            }
        }
        ?>
    </body>
</html>
