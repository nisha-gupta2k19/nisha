<html>
<head>
<title>admin</title>
</head>
<body bgcolor="orange">
<?php
include "menu.php";
?>
<br><p>
<form action=signindb.php method="POST">
<center><b><font size="100">Sign in to start your work</font></b><br><p>
<br><p>
<table  style="Width:230px"; align="center">
<tr>
<td colspan="2" border="1">
<h2>User name:<input type="text" name="un" required><br></h2>
</td>
</tr>
<tr>
<td colspan="2">
<h2>Password:<input type="password" name="pwd" required><br></h2>
</td>
</tr>
<tr>
<td colspan="2">
<input type="submit" value="Login" name=submit></td>
</tr>
<tr>
<td colspan="2"><a href="forget.php"><input type="button" value="Forget password" name=submit></a></td>
</tr>
</table>
</form>
</body>
</html>