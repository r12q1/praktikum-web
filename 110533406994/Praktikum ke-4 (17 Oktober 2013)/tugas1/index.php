<!DOCTYPE html
PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
<title>Halaman Administrator</title>
</head>

<body>

<?php
session_start();
if (isset($_SESSION['user'])) // karena nama session buat login kita buat namanya adalah 'user' maka if isset($_SESSION['user']) ===> varibel penentu
{
$user = $_SESSION['user'];
echo '<p align="left">'.
'<b>Tulisan ini nampak kalo udah login</b>'.
'<br/><br/>'.
'<a href="login.php">Logout</a>'.
'</p>';
echo $user;
} else {
header('location: login.php');
exit;
}
?>
</body>

</html>