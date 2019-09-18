<?php

$servername="localhost";
$username="root";
$password="";
$dbname="flooddb";

$conn=new mysqli($servername,$username,$password,$dbname);

if($conn->connect_error)
{
    die("connection failed: ". $conn->connect_error);
}
$un=$_POST["un"];
$pwd=$_POST["pwd"];

$sql=" SELECT * FROM `admin` WHERE  username='$un' and password='$pwd'";
$result=$conn->query($sql);
 if($result->num_rows>0)
{
  echo "Welcome";
   header ("location:dar.png");
}
else
{
   echo "Invaid user/password";
}
$conn->close();

/*
if($conn)
{
 echo "connection ok";
}
else 
{
die("connection failed coz ".mysqli_connect_error( ));
}
*/
?>