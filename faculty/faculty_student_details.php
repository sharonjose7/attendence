<?php
session_start(); 
include('header.php');
include('php_connection.php');
	$var = $_GET['id'];
	$sql = "select * from student where sid='".$var."'";
	$result = mysqli_query($conn,$sql);
	if($row = mysqli_fetch_assoc($result))
	{
 ?>
		<!--------------Student profile section---------------------->
			<section>
				<div class="container">
						<div class="row border ">
							<div class="col-md-6">
								<h3 class="text-primary head"><i class="fas fa-user fa-2x" ></i>Student Profile</h3>
								<div class="d-flex">
									<div class="col-md-3">
										
									</div>
								</div>
							</div>

							
						
						<div class="col-md-12">
							<table class="border table table-striped bg-table">
								<tr>
								<th class="text-info">Basic Information</th>
								<th class="text-right"><a href="faculty_student_profile_edit.php"><button   class="btn btn-primary text-white px-4">Edit<i class="fas  fa-edit"></i></button></a>
								</th>
								</tr>
								
								
								<tr>
								<td class="font-weight-bolder">Admission Number</td>
								<td><?php echo $row['saddno']; ?></td>
								</tr>
								
								<tr>
								<td class="font-weight-bolder">Name</td>
								<td><?php echo $row['sname']; ?></td>
								</tr>
								
								<tr>
								<td class="font-weight-bolder">Roll Number</td>
								<td><?php echo $row['srollno']; ?></td>
								</tr>
								
								<tr>
								<td class="font-weight-bolder">Qualification</td>
								<td><?php echo $row['squalification']; ?></td>
								</tr>
								
								<tr>
								<td class="font-weight-bolder">Gender</td>
								<td><?php echo $row['sgender']; ?></td>
								</tr>
								
								
								<tr>
								<td class="font-weight-bolder">Batch</td>
								<td><?php echo $row['sbatch']; ?></td>
								</tr>
								
								<tr>
								<td class="font-weight-bolder">DOB</td>
								<td><?php echo $row['sdob']; ?></td>
								</tr>
								
								<tr>
								<td class="font-weight-bolder">Admission Date</td>
								<td><?php echo $row['sadd_date']; ?></td>
								</tr>
								
								<tr>
								<td class="font-weight-bolder">Blood</td>
								<td><?php echo $row['sblood']; ?></td>
								</tr>
								
								<tr>
								<td class="font-weight-bolder">Mobile</td>
								<td><?php echo $row['smobile']; ?></td>
								</tr>
								
								<tr>
								<td class="font-weight-bolder">Email</td>
								<td><?php echo $row['semail']; ?></td>
								</tr>						
								
								<tr>
								<td class="font-weight-bolder">Address</td>
								<td><?php echo $row['saddress']; ?></td>
								</tr>
								
								<tr>
								<td class="font-weight-bolder">Password</td>
								<td><?php echo $row['spassword']; ?></td>
								</tr>
								
								
							</table>
						</div>
					</div>
				</div>
			</section>
			<?php
						}
						?>
		<!--------------Student profile section ends---------------------->
	  <!-- Footer -->
     <?php include('footer.php'); ?>