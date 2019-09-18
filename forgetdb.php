<?php
include "menu.php";
$servername="localhost";
$username="root";
$password="";
$dbname="flooddb";

$conn=new mysqli($servername,$username,$password,$dbname);

if($conn->connect_error)
{
    die("connection failed:".$conn->connect_error);
}
$un=$_POST["un"];
$email=$_POST["email"];
//echo "$un";

$sql="select * from userdetail  where username='$un' and emailid='$email'";

$result=$conn->query($sql);
 if($result->num_rows>0)
{
  if($row=$result->fetch_assoc())
	echo "<h1>your password is :'".$row["password"]."'</h1>";
}
else
{
   echo "Invaid user/password";
}
$conn->close();
?>