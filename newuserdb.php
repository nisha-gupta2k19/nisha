<?php
$servername="localhost";
$username="root";
$password="";
$dbname="flooddb";

$conn=new mysqli($servername,$username,$password,$dbname);

if($conn->connect_error)
{
    die("connection failed:".$conn->connect_error);
}
$name=$_POST["name"];
$pwd=$_POST["pwd"];
$emailid=$_POST["emailid"];
$dob=$_POST["dateofbirth"];
$mobileno=$_POST["mobileno"];
$helptype=$_POST["helptype"];
$member=$_POST["member"];
echo "helptype : $helptype";
echo "member : $member";


$sql="INSERT INTO userdetail VALUE('$name','$pwd','$emailid','$dob','$mobileno','$helptype','$member')";
echo $sql;
if(mysqli_query($conn,$sql))
{
   echo"new record successfully";
}
else
{
  echo "error";
}

mysqli_close($conn);
?>