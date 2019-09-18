<html>
<head>
<title>contact us</title>
</head>
<body bgcolor="orange">
<?php
include "menu.php";
?>
<p><br>
<p><br>
<form action="contactusdb.php" method="POST"><center>
<B><font size="50">Contact form</font></B>
<p><br>
<table style="Width:230px"; align="center" border="0">
<tr>
<td><h2>Full name:<input type="text" name="fn" required><br></tr></td>
<tr>
<td align="left"  colspan="1">
<h2>Email id:<input type="email" name="email"  required><pre></pre></h2>
</td>
</tr>
<tr>
<td align="left"  colspan="1">
<h2>Mobile no:<input type="text" name="mn" required><pre></pre></h2>
</td>
</tr>
<tr>
<td>
<h2>
Message:<br><textarea name=msg rows="5" cols="45" placeholder="write something...." required></textarea></h2></tr>
</td>
<tr>
<td><h2> Country:<select name=country size=1>
<option>india
<option>canada
<option>USA
<option>australia
</h2><br></tr>
</td>

<tr>
<td>
<input type="submit" value="submit"></tr>
</td>
</table></center>
</form>
</body>
</html>

