<?php
include("includes/session.php");
?>

<?php
include("includes/confi.php");
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Blog delete</title>
<style type="text/css">
</style>
<link href="admin_style.css" rel="stylesheet" type="text/css" />
</head>

<body>
<div id="hold">
<div id="top">
<h2 align="center">CONTENT MANAGEMENT SYSTEM ADMINISTRATION PANEL</h2>
</div>
<div id="log"></div>
<div id="work_area">
<?php
if(isset($_GET['id']))
{
$id=$_GET['id'];
$qry=mysql_query("DELETE FROM blog WHERE id='$id'", $con);
if(!$qry)
{
die("Query Failed: ". mysql_error());
}
else
{
echo "<br/>";
echo "Blog ".$id." DELETED Successfully";
echo "<br/>";
}
}
?>
<a href=admin_panel.php>Go back to Admin Panel</a>
</div>
</div>
</body>
</html>