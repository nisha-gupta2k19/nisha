<?php
if($_POST["submit"]=="Login")
{
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
$pwd=$_POST["pwd"];

$sql="select * from userdetail  where username='$un' and password='$pwd'";
$result=$conn->query($sql);
 if($result->num_rows>0)
{
  echo "Welcome";
}
else
{
   echo "Invaid user/password";
}
$conn->close();

}

else
{
	header ("location:forget.php");
}

?>