<?php
include "menu.php";
?>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "flooddb";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT * FROM floodarea";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
echo "<center>";
echo "<b>";
echo "<font size=300 >Flood Affected Area";
echo "</b>";
echo "</center>";
echo "</font>";
echo "<body bgcolor=orange>";
echo "<table border=2 align=center height=200 width=400><tr><td>Affected Area</td><td>Reason</td><td>Help type</td><td>Requirement(in Lacs)</td></tr>";  
  while($row = $result->fetch_assoc())
 {
   echo "<tr>";
 
   echo "<th>". $row["affectedarea"]."</th>";
   echo "<th>". $row["reason"]."</th>";
   echo "<th>". $row["helptype"]."</th>";
   echo "<th>". $row["requirement"]."</th>";
 
   echo "</tr>";
    }
echo "</table>";
echo "</body>";
} else {
    echo "0 results";
}
$conn->close();
?>

<br><p>
<br><p>
<br><p>
<br><p>
<form action=donatenowdb.php method="POST">
<table style="Width:230px;" align="center" border="0">
<td align="left"  colspan="1">
<h2>User name:<input type="text" name="un" >
</h2>
</td>
</tr>
<tr>
<td align="left"  colspan="1">
<h2>Affected area:<input type="text" name="Aa" >
</h2>
</td>
</tr>
<td align="left"  colspan="1">
<h2>Reason:<select name=reason size=1>
<option value="heavyrainfall">Heavy rainfall</option>
<option value="flood">Flood</option>
<option value="earthquake">EarthQuake</option>
</h2>
</select>
</td>
</tr>
<td align="left"  colspan="1">
<h2>Help type:<select name=helptype size=1>
<option value="food">Food</option>
<option value="money">Money</option>
<option value="clothes">Clothes</option>
<option value="medicine">Medicine</option>
<option value="education">Education</option>
</h2>
</select>
</td>
</tr>
<tr>
<td align="left"  colspan="1">
<h2>Quantity:<input type="text" name="qty" >
</h2>
</td>
</tr>
<tr>
<td align="left"  colspan="1">
<input type="submit" value="submit">

</td>
</tr>


</table>
</form>