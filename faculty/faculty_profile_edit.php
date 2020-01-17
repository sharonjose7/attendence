<?php
session_start();
include('header.php'); 
include('php_connection.php');
    $var = $_SESSION['email'];
    $sql = "select * from faculty where femail='".$var."'";
    $result = mysqli_query($conn,$sql);
    if($row = mysqli_fetch_assoc($result))
    {
?>
		<!--------------Student profile section---------------------->
<section>
	        <div class="cotainer">
                    <div class="row justify-content-center">
                        <div class="col-md-12">
                                <div class="card">
                                    <div class="card-header text-center bg-info "><h3 class="text-white">Edit Your Profile</h3></div>
                                    <div class="card-body">
                                        <form name="my-form" onsubmit="return validform()" action="php_profile_update.php" method="post">
                                            <div class="form-group row">
                                                <label class="col-md-4 col-form-label text-md-right font-weight-bolder">Full Name</label>
                                                <div class="col-md-6 ">
                                                    <input type="text" id="full_name" class="form-control box-bg " name="full-name" value="<?php echo $row['fname']; ?>" readonly>
                                                </div>
                                            </div>
            
                                            <div class="form-group row">
                                                <label class="col-md-4 col-form-label text-md-right font-weight-bolder">Designation</label>
                                                <div class="col-md-6">
                                                    <input type="text" id="email_address" class="form-control box-bg" name="designation" value="<?php echo $row['fdesignation']; ?>" readonly
                                                    >
                                                </div>
                                            </div>
                                            
                                            <div class="form-group row">
                                                <label class="col-md-4 col-form-label text-md-right font-weight-bolder">Joining Date</label>
                                                <div class="col-md-6">
                                                    <input type="date"  class="form-control box-bg" value="<?php echo $row['fjoin_date']; ?>">
                                                </div>
                                            </div>
            
                                            <div class="form-group row">
                                                <label class="col-md-4 col-form-label text-md-right font-weight-bolder">Qualification</label>
                                                <div class="col-md-6">
                                                    <input type="text"  class="form-control box-bg" name="username" value="<?php echo $row['fqualification']; ?>">
                                                </div>
                                            </div>
                                            
                                            <div class="form-group row">
                                                <label class="col-md-4 col-form-label text-md-right font-weight-bolder">Gender</label>
                                                <div class="col-md-6 d-flex form-check">
                                                <select >
                                                    <option selected value="<?php echo $row['fgender']; ?>"><?php echo $row['fgender']; ?></option>
                                                    <option value="1">female</option>
                                                    <option value="2">male</option>
                                                    <option value="3">other</option>
                                                </select>
                                                   
                                                </div>
                                            </div>
            
                                            
            
                                            <div class="form-group row">
                                                <label class="col-md-4 col-form-label text-md-right font-weight-bolder">Phone Number</label>
                                                <div class="col-md-6">
                                                    <input type="number"  class="form-control box-bg" value="<?php echo $row['fmobile']; ?>">
                                                </div>
                                            </div>
            
                                            <div class="form-group row">
                                                <label class="col-md-4 col-form-label text-md-right font-weight-bolder">Email</label>
                                                <div class="col-md-6">
                                                    <input type="text"   class="form-control box-bg" value="<?php echo $row['femail']; ?>">
                                                </div>
                                            </div>
            
                                            <div class="form-group row">
                                                <label class="col-md-4 col-form-label text-md-right font-weight-bolder">Batch</label>
                                                <div class="col-md-6">
                                                    <input type="text"  class="form-control box-bg" name="Batch" value="<?php echo $row['fbatch']; ?>" >
                                                </div>
                                            </div>
                                            
                                            <div class="form-group row">
                                                <label class="col-md-4 col-form-label text-md-right font-weight-bolder">Blood</label>
                                                <div class="col-md-6">
                                                    <input type="text"  class="form-control box-bg" name="permanent-address" value="<?php echo $row['fblood']; ?>">
                                                </div>
                                            </div>
                                            
                                            <div class="form-group row">
                                                <label class="col-md-4 col-form-label text-md-right font-weight-bolder">Date-of-birth</label>
                                                <div class="col-md-6">
                                                    <input type="date" class="form-control box-bg" value="<?php echo $row['fdob']; ?>">
                                                </div>
                                            </div>
                                            
                                            <div class="form-group row">
                                                <label class="col-md-4 col-form-label text-md-right font-weight-bolder">Address</label>
                                                <div class="col-md-6">
                                                    <textarea  class="form-control box-bg" ><?php echo $row['faddress']; ?></textarea>
                                                </div>
                                            </div>
            
                                            <div class="form-group row">
                                                <label for="password" class="col-md-4 col-form-label text-md-right font-weight-bolder">Password</label>
                                                <div class="col-md-6">
                                                    <input type="text"  class="form-control box-bg" name="password" value="<?php echo $row['fpassword']; ?>">
                                                </div>
                                            </div>
                  <?php
						}
				    ?>
            
                                            <div class="form-group row">
                                                <label for="password-confirm" class="col-md-4 col-form-label text-md-right font-weight-bolder">Confirm-Password</label>
                                                <div class="col-md-6">
                                                    <input type="password"  class="form-control box-bg" name="password">
                                                </div>
                                            </div>
                                            <div class="row"> 
                                                <div class="col-md-6 text-right">
                                                    <button type="submit" class="btn btn-primary " onclick="say()">
                                                    <a href="faculty-profile.php" class="text-light text-decoration-none" name="submit">Save</a>
                                                    </button>
                                                </div>
                                                <div class="col-md-6 ">
                                                    <button type="clear" class="btn btn-danger"><a href="faculty-profile-edit.php" class="text-light text-decoration-none">
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
	<!--------------Student profile section ends---------------------->
	  <!-- Footer -->
      <?php include('footer.php'); ?>
            