<!----------------------------------------Header Starts--------------------------------------------------->  
<?php
session_start();
 include('header.php');
 include('php_connection.php');
	$var = $_GET['id'];
	$sql = "select * from student where sid='".$var."'";
	$result = mysqli_query($conn,$sql);
	if($row = mysqli_fetch_assoc($result))
	{
 ?>?>
<!----------------------------------------Header End------------------------------------------------------>
<section>
				
						
					
	<div class="cotainer">
        <div class="row justify-content-center">
            <div class="col-md-12">
                    <div class="card">
                        <div class="card-header text-center bg-info "><h3 class="text-white">Enter assessment details</h3></div>
                        <div class="card-body">
                            <form name="my-form" onsubmit="return validform()" action="php_student_assessment_add.php" method="POST">
                            <div class="form-group row">
                                    <label class="col-md-4 col-form-label text-md-right font-weight-bolder">Batch</label>
                                    <div class="col-md-6 ">
                                        <input type="text" id="full_name" class="form-control box-bg " name="bname" value="<?php echo $row['sbatch']; ?>" readonly>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-md-4 col-form-label text-md-right font-weight-bolder">Admission no.</label>
                                    <div class="col-md-6 ">
                                        <input type="text" id="full_name" class="form-control box-bg " name="addno" value="<?php echo $row['saddno']; ?>" readonly>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-md-4 col-form-label text-md-right font-weight-bolder">Student Name</label>
                                    <div class="col-md-6 ">
                                        <input type="text" id="full_name" class="form-control box-bg " name="sname" value="<?php echo $row['sname']; ?>" readonly> 
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-md-4 col-form-label text-md-right font-weight-bolder">Subject</label>
                                    <div class="col-md-6 ">
                                        <input type="text" id="full_name" class="form-control box-bg " name="subject">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-md-4 col-form-label text-md-right font-weight-bolder">Assessment no.</label>
                                    <div class="col-md-6 ">
                                        <input type="text" id="full_name" class="form-control box-bg " name="assno">
                                    </div>
                                </div>
								
								<div class="form-group row">
                                    <label class="col-md-4 col-form-label text-md-right font-weight-bolder">Faculty Name</label>
                                    <div class="col-md-6">
                                        <input type="text"  class="form-control box-bg" name="bincharge">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-md-4 col-form-label text-md-right font-weight-bolder">Mark</label>
                                    <div class="col-md-6">
                                        <input type="text"  class="form-control box-bg" name="mark">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-md-4 col-form-label text-md-right font-weight-bolder">Total</label>
                                    <div class="col-md-6">
                                        <input type="text"  class="form-control box-bg" name="total">
                                    </div>
                                </div>

                                
								<div class="row"> 
                                    <div class="col-md-6 text-right">
                                        <button type="submit" class="btn btn-primary " onclick="say()" name="submit">
                                        <a class="text-light text-decoration-none" >Save</a>
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
                <?php
						}
						?>
			</section>
<!----------------------------------------Footer Starts--------------------------------------------------->  
 
<?php include('footer.php');?>
<!----------------------------------------Footer End--------------------------------------------------->