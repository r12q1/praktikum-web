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
if(isset($_SESSION['user']))
{
session_destroy();
}
?>
<form action="ceklogin.php" method="post">
<div>
Username:
<br/>
<input type="text" name="username" size="14" />
<br/>
Password:
<br/>
<input type="password" name="password" size="14" />
<br/><br/>
<button name="login" type="submit">Login</button>
</div>
</form>
</body>
</html>