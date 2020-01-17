<?php
include('php_connection.php');
if(isset($_POST['submit']))	
    {	
        $batch=$_POST['batch'];
        $rollno=$_POST['rollno'];
        $ltype=$_POST['ltype'];
        $lfrom=$_POST['lfrom'];
        $lto=$_POST['lto'];
        $reason=$_POST['reason'];

        $sql="INSERT INTO student_leave (sbatch,srollno,leave_from,leave_to,leave_type,reason) VALUES('".$batch."','".$rollno."','".$lfrom."','".$lto."','".$ltype."','".$reason."')";
        if (mysqli_query($conn,$sql))
            {
                header("location:student_home.php");
            }
    }
mysqli_close($conn);
?>