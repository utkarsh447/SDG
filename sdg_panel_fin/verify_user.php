<?php
include("includes/confi.php");
?>

<?php
$uname=$_POST['u_name'];
$pass=$_POST['pass'];

$qry=mysql_query("SELECT * FROM admin_login WHERE user='$uname'", $con);
if(!$qry)
{
die("Query Failed: ". mysql_error());
}
else
{
$row=mysql_fetch_array($qry);
//echo $row["user"]." ".$row["password"]."<br/>";

if($_POST['u_name']==$row["user"]&&$_POST['pass']==$row["password"])
{
session_start();
$_SESSION['name']=$_POST['u_name'];
$uname=$_POST['u_name'];
header("Location:admin_panel.php");
}
else
{
header("Location:admin_login.php?id=username or password you entered is incorrect");
}
}

?>