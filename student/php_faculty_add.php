<?php
include('php_connection.php');
if(isset($_POST['submit']))	
    {	
        $name=$_POST['fname'];
        $designation=$_POST['fdesignation'];
        $jdate=$_POST['fjdate'];
        $qualification=$_POST['fqualification'];
        $gender=$_POST['fgender'];
        $mobile=$_POST['fmobile'];
        $email=$_POST['femail'];
        $batch=$_POST['fbatch'];
        $fblood=$_POST['fblood'];
        $fdob=$_POST['fdob'];
        $faddress=$_POST['faddress'];
        $password=$_POST['fpassword'];

        $sql="INSERT INTO faculty (fname,faddress,fdesignation,fjoin_date,fqualification,fgender,fmobile,femail,fbatch,fdob,fblood,fpassword) VALUES('".$name."','".$faddress."','".$designation."','".$jdate."','".$qualification."','".$gender."','".$mobile."','".$email."','".$batch."','".$fdob."','".$fblood."','".$password."')";
        if (mysqli_query($conn,$sql))
            {
                header("location:admin_faculty_table.php");
            }
    }
mysqli_close($conn);
?>