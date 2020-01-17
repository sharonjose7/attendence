<?php
include('php_connection.php');

if(isset($_POST['submit']))	
    {	
        $addno=$_POST['addno'];
        $name=$_POST['name'];
        $rollno=$_POST['rollno'];
        $qualification=$_POST['qualification'];
        $email=$_POST['email'];
        $gender=$_POST['gender'];
        $batch=$_POST['batch'];
        $dob=$_POST['dob'];
        $adddate=$_POST['adddate'];
        $blood=$_POST['blood'];
        $mobile=$_POST['mobile'];
        $address=$_POST['address'];
        $password=$_POST['password'];

        $sql="INSERT INTO student (sname,saddress,saddno,srollno,squalification,sgender,sbatch,sdob,sadd_date,sblood,smobile,semail,spassword) VALUES('".$name."','".$address."','".$addno."','".$rollno."','".$qualification."','".$gender."','".$batch."','".$dob."','".$adddate."','".$blood."','".$mobile."','".$email."','".$password."')";
        if (mysqli_query($conn,$sql))
            {
                header("location:admin_student_table.php");
            }
    }
mysqli_close($conn);
?>