<?php include('header.php'); ?>

<section>
	<div class="cotainer">
        <div class="row justify-content-center">
            <div class="col-md-12">
                    <div class="card">
                        <div class="card-header text-center bg-info "><h3 class="text-white">Add student details</h3></div>
                        <div class="card-body">
                            <form name="my-form" onsubmit="return validform()" action="php_student_add.php" method="POST">
                                <div class="form-group row">
                                    <label class="col-md-4 col-form-label text-md-right font-weight-bolder">Admission Number</label>
                                    <div class="col-md-6 ">
                                        <input type="number" id="full_name" class="form-control box-bg " name="addno">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-md-4 col-form-label text-md-right font-weight-bolder">Name</label>
                                    <div class="col-md-6">
                                        <input type="text" id="email_address" class="form-control box-bg" name="name" 
										>
                                    </div>
                                </div>
								
								<div class="form-group row">
                                    <label class="col-md-4 col-form-label text-md-right font-weight-bolder">Roll Number</label>
                                    <div class="col-md-6">
                                        <input type="Number"  class="form-control box-bg" name="rollno">
                                    </div>
                                </div>
								
								

                                <div class="form-group row">
                                    <label class="col-md-4 col-form-label text-md-right font-weight-bolder">Qualification</label>
                                    <div class="col-md-6">
                                        <input type="text"  class="form-control box-bg" name="qualification">
                                    </div>
                                </div>
								
								 <div class="form-group row">
                                    <label class="col-md-4 col-form-label text-md-right font-weight-bolder">Email</label>
                                    <div class="col-md-6">
                                        <input type="text"   class="form-control box-bg" name="email">
                                    </div>
                                </div>
								
								<div class="form-group row">
                                    <label class="col-md-4 col-form-label text-md-right font-weight-bolder">Gender</label>
                                    <div class="col-md-6 d-flex form-check">
									<select name="gender">
										<option selected>Choose..</option>
										<option value="female">Female</option>
										<option value="male">Male</option>
										<option value="other">Other</option>
									</select>
                                       
                                    </div>
                                </div>
                               

                                <div class="form-group row">
                                    <label class="col-md-4 col-form-label text-md-right font-weight-bolder">Batch</label>
                                    <div class="col-md-6">
                                        <input type="text"  class="form-control box-bg" name="batch" >
                                    </div>
                                </div>
								
								<div class="form-group row">
                                    <label class="col-md-4 col-form-label text-md-right font-weight-bolder">DOB</label>
                                    <div class="col-md-6">
                                        <input type="date" class="form-control box-bg" name="dob">
                                    </div>
                                </div>
								
								
								<div class="form-group row">
                                    <label class="col-md-4 col-form-label text-md-right font-weight-bolder">Admission Date</label>
                                    <div class="col-md-6">
                                        <input type="date" class="form-control box-bg" name="adddate">
                                    </div>
                                </div>
								
								<div class="form-group row">
                                    <label class="col-md-4 col-form-label text-md-right font-weight-bolder">Blood</label>
                                    <div class="col-md-6">
                                        <input type="text"  class="form-control box-bg" name="blood">
                                    </div>
                                </div>
								
								<div class="form-group row">
                                    <label class="col-md-4 col-form-label text-md-right font-weight-bolder">Mobile Number</label>
                                    <div class="col-md-6">
                                        <input type="number"  class="form-control box-bg" name="mobile">
                                    </div>
                                </div>
								
								<div class="form-group row">
                                    <label class="col-md-4 col-form-label text-md-right font-weight-bolder">Address</label>
                                    <div class="col-md-6">
                                        <textarea  class="form-control box-bg" name="address"></textarea>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="password" class="col-md-4 col-form-label text-md-right font-weight-bolder">Password</label>
                                    <div class="col-md-6">
                                        <input type="text"  class="form-control box-bg" name="password">
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
                                        <button type="submit" class="btn btn-primary" name="submit">
                                        <a class="text-light text-decoration-none">Save</a>
                                        </button>
                                    </div>
									<div class="col-md-6 ">
                                        <button type="submit" class="btn btn-danger"><a href="#" class="text-light text-decoration-none">
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
		
<script>
	function say()
	{
		alert("successfully submitted");
	}
</script>
			
 

<!-- Footer -->
    <?php include('footer.php'); ?>