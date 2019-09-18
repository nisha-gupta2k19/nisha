
<html>
<head>
<title>admin</title>
</head>
<body bgcolor="orange">
<?php include "menu.php";
?>
<br><p>
<form action=forgetdb.php method="POST">

<table align="center">
<tr>
<td colspan="2" border="1">
<h2>User name:<input type="text" name="un" required><br></h2>
</td>
</tr>
<tr>
<td colspan="2">
<h2>Email id:<input type="email" name="email" required><br></h2>
</td>
</tr>
<tr>
<td colspan="2">
<input type="submit" value="submit" name=submit></td>
</tr>
</table>
</form>
</body>
</html>