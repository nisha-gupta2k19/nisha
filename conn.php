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
echo "<b>";
echo "<center>";
echo "<font size=300 align=center>Flood Affected Area";
echo "</center>";
echo "</b>";
echo "</font>";
echo "<br><p>";
echo "<br>";
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
