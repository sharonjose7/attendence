
<?php
session_start();
include('php_connection.php');
if(isset($_POST['submit']))	
{	
$name=$_POST['email'];
$password=$_POST['password'];
$sql="select username from admin where username='".$name."' and password='".$password."' ";
$result=mysqli_query ($conn,$sql);

$sql1="select fname from faculty where femail='".$name."' and fpassword='".$password."' ";
$result1=mysqli_query ($conn,$sql1);

$sql2="select sname from student where semail='".$name."' and spassword='".$password."' ";
$result2=mysqli_query ($conn,$sql2);

if(mysqli_num_rows($result)>0)
{	while($row=mysqli_fetch_assoc($result))
	{
		 header("location:admin_home.php");
	}
}
elseif(mysqli_num_rows($result1)>0)
	{	
		if($row=mysqli_fetch_assoc($result1))
		{
			
			$_SESSION['email'] = $name;
			header('location:../faculty/faculty_home.php');
			
			 
		}
	}
elseif(mysqli_num_rows($result2)>0)
	{	
		while($row=mysqli_fetch_assoc($result2))
		{
			$_SESSION['email'] = $name;
			 header('location:../student/student_home.php');
		}
	}
else
	{
		echo "email or password incorrect";
	}
}
mysqli_close($conn);
?>