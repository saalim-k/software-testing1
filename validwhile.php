<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>

<?php



if ($_POST["user"]=="dani" && $_POST["pass"]=="123")
{
session_start();
$_SESSION["user"]=$_POST["user"];

header('Location:homewhile.php');
}
else
{
header('Location:failurewhile.php'); 
}
  
?>


</body>
</html>