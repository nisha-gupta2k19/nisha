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
$fullname=$_POST["fn"];
$message=$_POST["msg"];
$country=$_POST["country"];
$emailid=$_POST["email"];
$mobileno=$_POST["mn"];

$sql=" INSERT INTO contactus VALUEs('$fullname' ,'$message','$country','$emailid',$mobileno)";
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