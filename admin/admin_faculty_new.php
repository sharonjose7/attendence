<!----------------------------------------Header Starts--------------------------------------------------->  
<?php include('header.php');?>
<!----------------------------------------Header End------------------------------------------------------>
<section>
				
						
					
	<div class="cotainer">
        <div class="row justify-content-center">
            <div class="col-md-12">
                    <div class="card">
                        <div class="card-header text-center bg-info "><h3 class="text-white">Create faculty profile</h3></div>
                        <div class="card-body">
                            <form name="my-form" onsubmit="return validform()" action="php_faculty_add.php" method="POST">
                                <div class="form-group row">
                                    <label class="col-md-4 col-form-label text-md-right font-weight-bolder">Full Name</label>
                                    <div class="col-md-6 ">
                                        <input type="text" id="full_name" class="form-control box-bg " name="fname">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-md-4 col-form-label text-md-right font-weight-bolder">Designation</label>
                                    <div class="col-md-6">
                                        <input type="text" id="email_address" class="form-control box-bg" name="fdesignation" 
										>
                                    </div>
                                </div>
								
								<div class="form-group row">
                                    <label class="col-md-4 col-form-label text-md-right font-weight-bolder">Joining Date</label>
                                    <div class="col-md-6">
                                        <input type="date"  class="form-control box-bg" name="fjdate">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-md-4 col-form-label text-md-right font-weight-bolder">Qualification</label>
                                    <div class="col-md-6">
                                        <input type="text"  class="form-control box-bg" name="fqualification">
                                    </div>
                                </div>
								
								<div class="form-group row">
                                    <label class="col-md-4 col-form-label text-md-right font-weight-bolder">Gender</label>
                                    <div class="col-md-6 d-flex form-check">
									<select name="fgender">
										<option selected>Choose..</option>
										<option value="female">Female</option>
										<option value="male">Male</option>
										<option value="other">Other</option>
									</select>
                                       
                                    </div>
                                </div>

								

                                <div class="form-group row">
                                    <label class="col-md-4 col-form-label text-md-right font-weight-bolder">Mobile Number</label>
                                    <div class="col-md-6">
                                        <input type="number"  class="form-control box-bg" name="fmobile">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-md-4 col-form-label text-md-right font-weight-bolder">Email</label>
                                    <div class="col-md-6">
                                        <input type="text"   class="form-control box-bg" name="femail">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-md-4 col-form-label text-md-right font-weight-bolder">Batch</label>
                                    <div class="col-md-6">
                                        <input type="text"  class="form-control box-bg" name="fbatch" >
                                    </div>
                                </div>
								
								<div class="form-group row">
                                    <label class="col-md-4 col-form-label text-md-right font-weight-bolder">Blood</label>
                                    <div class="col-md-6">
                                        <input type="text"  class="form-control box-bg" name="fblood">
                                    </div>
                                </div>
								
								<div class="form-group row">
                                    <label class="col-md-4 col-form-label text-md-right font-weight-bolder">Date-of-birth</label>
                                    <div class="col-md-6">
                                        <input type="date" class="form-control box-bg" name="fdob">
                                    </div>
                                </div>
								
								<div class="form-group row">
                                    <label class="col-md-4 col-form-label text-md-right font-weight-bolder">Address</label>
                                    <div class="col-md-6">
                                        <textarea  class="form-control box-bg" name="faddress"></textarea>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="password" class="col-md-4 col-form-label text-md-right font-weight-bolder">Password</label>
                                    <div class="col-md-6">
                                        <input type="text"  class="form-control box-bg" name="fpassword">
                                    </div>
                                </div>


								<div class="form-group row">
                                    <label for="password-confirm" class="col-md-4 col-form-label text-md-right font-weight-bolder">Confirm-Password</label>
                                    <div class="col-md-6">
                                        <input type="text"  class="form-control box-bg" name="password">
                                    </div>
                                </div>
								<div class="row"> 
                                    <div class="col-md-6 text-right">
                                        <button type="submit" class="btn btn-primary " onclick="say()" name="submit">
                                        <a href="faculty-profile.php" class="text-light text-decoration-none" >Save</a>
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
<!----------------------------------------Footer Starts--------------------------------------------------->  
 
<?php include('footer.php');?>
<!----------------------------------------Footer End--------------------------------------------------->