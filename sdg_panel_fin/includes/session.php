<?php
session_start();
if(isset($_SESSION['name']))
{
if(!$_SESSION['name']=='admin')
{
header("Location:admin_login.php?id=You are not authorised to access this page unless you are administrator of this website");
}
}
else
{
header("Location:admin_login.php?id=You are not authorised to access this page unless you are administrator of this website");
}
?>
