<?php
include('php_connection.php');
if(isset($_POST['submit']))	
    {	
        $bname=$_POST['bname'];
        $b_nos=$_POST['b_nos'];
        $bincharge=$_POST['bincharge'];

        $sql="INSERT INTO batch (bname,bno_students,bin_charge) VALUES('".$bname."','".$b_nos."','".$bincharge."')";
        if (mysqli_query($conn,$sql))
            {
                header("location:admin_batch_table.php");
            }
    }
mysqli_close($conn);
?>