<?php
include('php_connection.php');
if(isset($_POST['submit']))	
    {	
        $date=$_POST['date'];
        $batch=$_POST['batch'];
        $name=$_POST['name'];
        $addno=$_POST['addno'];
        $h1=$_POST['h1'];
        $h2=$_POST['h2'];
        $h3=$_POST['h3'];
        $h4=$_POST['h4'];

        $sql="INSERT INTO attendence (saddno,adate,sname,s_batch,h1,h2,h3,h4) VALUES('".$addno."','".$date."','".$name."','".$batch."','".$h1."','".$h2."','".$h3."','".$h4."')";
        if (mysqli_query($conn,$sql))
            {
                header('location:faculty_attendence_table.php');
            }
        else{
            echo "hello";
        }
    }
mysqli_close($conn);
?>