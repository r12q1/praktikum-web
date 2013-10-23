<!DOCTYPE html
PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
<title>Halaman Administrator</title>
</head>
<body>
<?php
$acc_user = 'admin';
$acc_pas = 'admin';
if (isset($_POST['login']))

$username = $_POST['username']; // diambil dari nama input di form login
$password = $_POST['password']; // diambil dari nama input di form login
$username = strip_tags($username);
$password = strip_tags($password);

if (($username==$acc_user) && ($password==$acc_pas))
{
session_start();
$_SESSION['user'] = $username;
echo 'Login berhasil, silahkan lanjutkan......'.
'<br/>'.
'<a href="index.php">Lanjutkan</a>'.
'<br/>';
} else {
echo 'Username dan password salah'.
'<br/>'.
'<a href="login.php">Coba lagi</a>'.
'<br/>';
}
?>
</body>
</html>