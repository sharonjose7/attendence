<?php
$servername="localhost";
$username="root";
$password="";
$dbname="orisys_attendence_php";
$conn= new mysqli($servername,$username,$password,$dbname);
if($conn->connect_error)
{
	die("connection failed:".$conn->connect_error);
}
//echo "connected successfully";
?>
