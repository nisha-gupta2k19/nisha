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
$username=$_POST["un"];
$affectedarea=$_POST["Aa"];
$reason=$_POST["reason"];
$helptype=$_POST["helptype"];
$qty=$_POST["qty"];

$sql=" INSERT INTO donateuser VALUEs('$username' ,'$affectedarea','$reason','$helptype',$qty)";
echo "sql :$sql";

if(mysqli_query($conn,$sql))
{
  header("location: home.php");
}
else
{
   echo "Invaid user/password";
}
$conn->close();
?>