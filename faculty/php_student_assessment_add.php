<?php
include('php_connection.php');
if(isset($_POST['submit']))	
    {	
        $batch=$_POST['bname'];
        $addno=$_POST['addno'];
        $sname=$_POST['sname'];
        $subject=$_POST['subject'];
        $assno=$_POST['assno'];
        $bincharge=$_POST['bincharge'];
        $mark=$_POST['mark'];
        $total=$_POST['total'];

        $sql="INSERT INTO assessment (s_batch,subject,a_no,f_name,mark,total,sname,sadd_no) VALUES('".$bname."','".$subject."','".$assno."','".$bincharge."','".$mark."','".$total."','".$sname."','".$addno."')";
        if (mysqli_query($conn,$sql))
            {
                header("location:faculty_assessment_table.php");
            }
    }
mysqli_close($conn);
?>