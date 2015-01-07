<?php
setcookie("admin",$username,time() - 3600);
header("location:index.html");
?>
