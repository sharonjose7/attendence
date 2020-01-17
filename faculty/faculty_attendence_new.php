<!----------------------------------------Header Starts--------------------------------------------------->  
<?php
session_start();
 include('header.php');?>
<!----------------------------------------Header End------------------------------------------------------>
<section>
				
						
					
	<div class="cotainer">
        <div class="row justify-content-center">
            <div class="col-md-12">
                    <div class="card">
                        <div class="card-header text-center bg-info "><h3 class="text-white">Create New Batch</h3></div>
                        <div class="card-body">
                            <form name="my-form" onsubmit="return validform()" action="php_attendence_add.php" method="POST">
                            <div class="form-group row">
                                    <label class="col-md-4 col-form-label text-md-right font-weight-bolder">Date</label>
                                    <div class="col-md-6 ">
                                        <input type="date" id="full_name" class="form-control box-bg " name="date">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-md-4 col-form-label text-md-right font-weight-bolder">Batch</label>
                                    <div class="col-md-6 ">
                                        <input type="text" id="full_name" class="form-control box-bg " name="batch" value="<?php echo $_SESSION['fac_batch']; ?>" readonly>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-md-4 col-form-label text-md-right font-weight-bolder">Student Name</label>
                                    <div class="col-md-6 ">
                                        <input type="text" id="full_name" class="form-control box-bg " name="name">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-md-4 col-form-label text-md-right font-weight-bolder">Admission no.</label>
                                    <div class="col-md-6">
                                        <input type="number" id="email_address" class="form-control box-bg" name="addno" 
										>
                                    </div>
                                </div>
								
								<div class="form-group row">
                                    <label class="col-md-4 col-form-label text-md-right font-weight-bolder">Hour 1</label>
                                    <div class="col-md-6">
                                        <input type="text"  class="form-control box-bg" name="h1">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-md-4 col-form-label text-md-right font-weight-bolder">Hour 2</label>
                                    <div class="col-md-6">
                                        <input type="text"  class="form-control box-bg" name="h2">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-md-4 col-form-label text-md-right font-weight-bolder">Hour 3</label>
                                    <div class="col-md-6">
                                        <input type="text"  class="form-control box-bg" name="h3">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-md-4 col-form-label text-md-right font-weight-bolder">Hour 4</label>
                                    <div class="col-md-6">
                                        <input type="text"  class="form-control box-bg" name="h4">
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
			</section>
<!----------------------------------------Footer Starts--------------------------------------------------->  
 
<?php include('footer.php');?>
<!----------------------------------------Footer End--------------------------------------------------->