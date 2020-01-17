<?php
include('php_connection.php');
if(isset($_POST['submit']))	
    {	
        $fid=$_POST['fid'];
        $fname=$_POST['fname'];
        $ltype=$_POST['ltype'];
        $lfrom=$_POST['lfrom'];
        $lto=$_POST['lto'];
        $reason=$_POST['reason'];

        $sql="INSERT INTO faculty_leave (fid,fname,leave_from,leave_to,leave_type,reason) VALUES('".$fid."','".$fname."','".$lfrom."','".$lto."','".$ltype."','".$reason."')";
        if (mysqli_query($conn,$sql))
            {
                header("location:faculty_home.php");
            }
    }
mysqli_close($conn);
?>