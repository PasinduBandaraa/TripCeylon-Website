<?php
$host = "localhost";
$user = "root";
$pass =  "";
$dbname = "reservation_system";

//connect mysql start
$conn=mysqli_connect($host,$user,$pass,$dbname);

if($conn->connect_error)
{
   die("connection failed:".$conn->connect_error);
}

?>