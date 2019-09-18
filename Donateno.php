<!DOCTYPE html>
<html>
<head>
<title>registration</title>

</head>
<body bgcolor="orange">
<?php
include "menu.php";
?>
<br><p>
<br><p><center>
<b><font size="60">DONATE & MAKE A DIFFERENCE</font></b><br>
<h1>Your Donation Changes Lives! 
Your support brings hope to the lives of those most in need. 
Please make a donation today.</h1><br>
<form action="donatedb.php" method="POST" align="center" margin="70%">

<table style="Width:230px;" align="center" border="0">
<tr>
<td align="left" colspan="1">
<h3> Full Name:<br><input type="text" name="name" required><pre></pre></h3>
</td>
</tr>
<tr>
<td align="left"  colspan="1">
<h3>Email id:<input type="email" name="emailid" required><pre></pre></h3>
</td>
</tr>
<tr>
<td align="left"  colspan="1">
<h3>Mobile no:<input type="number" name="mobileno"><pre></pre></h3>
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
<td align="left" colspan="1">
<h3> Address:<br><input type="address" name="address" required><pre></pre></h3>
</td>
</tr>
<tr>
<td align="left"  colspan="1">
<input type="button" value="Donate">
</td>
</tr>
</body>
</html>