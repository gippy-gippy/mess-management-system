<?
session_start();
if($_SESSION['username']!="")
{
header("Location:index.html");
exit;
} 
?>