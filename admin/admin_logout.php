<?php
session_start();
session_destroy();
if(isset($_COOKIE['username']) and isset($_COOKIE['password'])) 
{
$name=$_COOKIE['username'];
$password=$_COOKIE['password'];
setcookie('username', $name, time()-1);
setcookie('password', $password, time()-1);
}
header("location: index.php");
?>