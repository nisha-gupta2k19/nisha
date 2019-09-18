<!DOCTYPE html>
<html>
<head>
<title>registration</title>

</head>
<body bgcolor="orange">
<?php
include "menu.php";
?>

<br><p><br><p>
<form action="newuserdb.php" method="POST" align="center" margin="70%">
<b><font size="60">Register for new user</font></b><br><p>
<br><p>
<table style="Width:230px;" align="center" border="0">
<tr>
<td align="left" colspan="1">
<h3>Name:<br><input type="text" name="name" required><pre></pre></h3>
</td>
</tr>
<tr>
<td align="left" colspan="1">
<h3>Password:<br><input type="password" name="pwd" required><pre></pre></h3>
</td>
</tr>
<tr>
<td align="left"  colspan="1">
<h3>Email id:<input type="email" name="emailid" required><pre></pre></h3>
</td>
</tr>
<tr>
<td align="left"  colspan="1">
<h3>Date of birth:<input type="date" name="dateofbirth" required><pre></pre></h3>
</td>
</tr>
<tr>
<td align="left"  colspan="1">
<h3>Mobile no.:<input type="number" name="mobileno"  title="only digits are required and fill only 10 digits" ><pre></pre></h3>
</td>
</tr>
<tr>
<td align="left"  colspan="1">
<h3>Help type:<select name=helptype size=1>
<option value="food">Food</option>
<option value="money">Money</option>
<option value="clothes">Clothes</option>
<option value="medicine">Medicine</option>
<option value="education">Education</option>
</h3>
</select>
</td>
</tr>
<tr>
<td align="left"  colspan="1">
<h3>If you want to a member</h3><pre></pre>
<input type="radio" name=member value="Yes" required>Yes<pre></pre>
<input type="radio" name=member value="No" >No
</td>
</tr>
<tr>
<td align="left"  colspan="1">
<input type="submit" value="submit">
<input type="reset" value="reset" >
</td>
</tr>

</table>
</form>
</html>