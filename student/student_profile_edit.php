<?php
session_start();
include('header.php'); 
include('php_connection.php');
$var = $_SESSION['email']; //get value from faculty profile
$sql = "select * from student where semail='$var'";
$result = mysqli_query($conn,$sql);
if($row = mysqli_fetch_assoc($result))
{
?>

			<section>
				
						
					
	<div class="cotainer">
        <div class="row justify-content-center">
            <div class="col-md-12">
                    <div class="card">
                        <div class="card-header text-center bg-info "><h3 class="text-white">Edit Your Profile</h3></div>
                        <div class="card-body">
                            <form name="my-form" onsubmit="return validform()" action="login.php" method="">
                                <div class="form-group row">
                                    <label class="col-md-4 col-form-label text-md-right font-weight-bolder">Admission Number</label>
                                    <div class="col-md-6 ">
                                        <input type="text" id="full_name" class="form-control box-bg " name="Admissin Number" value="<?php echo $row['saddno']; ?>" readonly>
                                    </div>
                                </div>

                                <div class="form-group row"> 
                                    <label class="col-md-4 col-form-label text-md-right font-weight-bolder">Name</label>
                                    <div class="col-md-6">
                                        <input type="text" id="email_address" class="form-control box-bg" name="Name" value="<?php echo $row['sname']; ?>"
										readonly>
                                    </div>
                                </div>
								
								<div class="form-group row">
                                    <label class="col-md-4 col-form-label text-md-right font-weight-bolder">Roll Number</label>
                                    <div class="col-md-6">
                                        <input type="Number"  class="form-control box-bg" readonly value="<?php echo $row['srollno']; ?>">
                                    </div>
                                </div>
								
								

                                <div class="form-group row">
                                    <label class="col-md-4 col-form-label text-md-right font-weight-bolder">Qualification</label>
                                    <div class="col-md-6">
                                        <input type="text"  class="form-control box-bg" name="Qualification" value="<?php echo $row['squalification']; ?>">
                                    </div>
                                </div>
								
								 <div class="form-group row">
                                    <label class="col-md-4 col-form-label text-md-right font-weight-bolder">Email</label>
                                    <div class="col-md-6">
                                        <input type="text"   class="form-control box-bg" value="<?php echo $row['semail']; ?>">
                                    </div>
                                </div>
								
								<div class="form-group row">
                                    <label class="col-md-4 col-form-label text-md-right font-weight-bolder">Gender</label>
                                    <div class="col-md-6 d-flex form-check">
									<select name="gender">
										<option selected value="<?php echo $row['sgender'];?>" ><?php echo $row['sgender']; ?></option>
										<option value="female">female</option>
										<option value="male">male</option>
										<option value="other">other</option>
									</select>
                                       
                                    </div>
                                </div>


                                <div class="form-group row">
                                    <label class="col-md-4 col-form-label text-md-right font-weight-bolder">Batch</label>
                                    <div class="col-md-6">
                                        <input type="text"  class="form-control box-bg" name="Batch" readonly value="<?php echo $row['sbatch']; ?>">
                                    </div>
                                </div>
								
								<div class="form-group row">
                                    <label class="col-md-4 col-form-label text-md-right font-weight-bolder">DOB</label>
                                    <div class="col-md-6">
                                        <input type="date" class="form-control box-bg" value="<?php echo $row['sdob']; ?>">
                                    </div>
                                </div>
								
								
								<div class="form-group row">
                                    <label class="col-md-4 col-form-label text-md-right font-weight-bolder">Admission Date</label>
                                    <div class="col-md-6">
                                        <input type="date" class="form-control box-bg" readonly value="<?php echo $row['sadd_date']; ?>">
                                    </div>
                                </div>
								
							
								<div class="form-group row">
                                    <label class="col-md-4 col-form-label text-md-right font-weight-bolder">Blood</label>
                                    <div class="col-md-6">
                                        <input type="text"  class="form-control box-bg" name="Blood" value="<?php echo $row['sblood']; ?>">
                                    </div>
                                </div>
								
								
								
								<div class="form-group row">
                                    <label class="col-md-4 col-form-label text-md-right font-weight-bolder">Address</label>
                                    <div class="col-md-6">
                                        <textarea  class="form-control box-bg" ><?php echo $row['saddress']; ?></textarea>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="password" class="col-md-4 col-form-label text-md-right font-weight-bolder">Password</label>
                                    <div class="col-md-6">
                                        <input type="text"  class="form-control box-bg" name="password" value="<?php echo $row['spassword']; ?>">
                                    </div>
                                </div>


								<div class="form-group row">
                                    <label for="password-confirm" class="col-md-4 col-form-label text-md-right font-weight-bolder">Confirm password</label>
                                    <div class="col-md-6">
                                        <input type="text"  class="form-control box-bg" name="password">
                                    </div>
                                </div>
								
								<div class="row"> 
                                    <div class="col-md-6 text-right">
                                        <button type="submit" class="btn btn-primary " onclick="say()">
                                        <a href="student-profile.php" class="text-light text-decoration-none">Save</a>
                                        </button>
                                    </div>
									<div class="col-md-6 ">
                                        <button type="submit" class="btn btn-danger"><a href="student-edit.php" class="text-light text-decoration-none">
                                        Clear</a>
                                        </button>
                                    </div>
                                </div>
								</div>
                            </form>
                        </div>
                    </div>
            </div>
        </div>
    </div>

				</div>
			</section>
            <?php
			}
			?>	
<script>
	function say()
	{
		alert("successfully submitted");
	}
</script>
			
 

<!-- Footer -->
    <?php include('footer.php'); ?>