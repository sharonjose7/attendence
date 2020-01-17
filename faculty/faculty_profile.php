<?php session_start(); 
include('header.php');
?>
		<!--------------Student profile section---------------------->
			<!------------session start---------------->
<section >
				<div class="container">
					<div class="row border ">
						<div class="col-md-6">
							<h3 class="text-primary head"><i class="fas fa-user fa-2x" ></i>MY PROFILE</h3>
							<div class="d-flex">
								<div class="col-md-3">
									<p class="border text-info text-center border-info">Basic Info</p>
								</div>
							</div>
						</div>
						<div class="col-md-6 text-right">
							<button class="bg-white text-info">VIEW PUBLIC PROFILE<i class="fas fa-share"></i></button>
							
						</div>
						<?php
							include('php_connection.php');
							$var = $_SESSION['email'];
							$sql = "select * from faculty where femail='".$var."'";
							$result = mysqli_query($conn,$sql);
							if($row = mysqli_fetch_assoc($result))
							{
						?>
					
					<div class="col-md-12">
						<table class="border table table-striped bg-table">
							<tr>
							<th>Faculty-id: <?php echo $row['fid']; ?></th>
							<th class="text-right"><a href="faculty_profile_edit.php?ba=<?php echo $var ?>"><button   class="btn btn-primary text-white px-4">Edit<i class="fas  fa-edit"></i></button></a>
							</th>
							</tr>
							
							
							<tr>
							<td class="font-weight-bolder">Name</td>
							<td><?php echo $row['fname']; ?></td>
							</tr>
							
							<tr>
							<td class="font-weight-bolder">Designation</td>
							<td><?php echo $row['fdesignation']; ?></td>
							</tr>
							
							<tr>
							<td class="font-weight-bolder">Joining Date</td>
							<td><?php echo $row['fjoin_date']; ?></td>
							</tr>
							
							<tr>
							<td class="font-weight-bolder">Qualification</td>
							<td><?php echo $row['fqualification']; ?></td>
							</tr>
							
							<tr>
							<td class="font-weight-bolder">Gender</td>
							<td><?php echo $row['fgender']; ?></td>
							</tr>
							
							<tr>
							<td class="font-weight-bolder">Mobile</td>
							<td><?php echo $row['fmobile']; ?></td>
							</tr>
							
							<tr>
							<td class="font-weight-bolder">Email</td>
							<td><?php echo $row['femail']; ?></td>
							</tr>
							
							<tr>
							<td class="font-weight-bolder">Batch</td>
							<td><?php echo $_SESSION['fac_batch'] = $row['fbatch']; ?></td>
							</tr>
							
							<tr>
							<td class="font-weight-bolder">Blood</td>
							<td><?php echo $row['fblood']; ?></td>
							</tr>
							
							<tr>
							<td class="font-weight-bolder">DOB</td>
							<td><?php echo $row['fdob']; ?></td>
							</tr>
							
							<tr>
							<td class="font-weight-bolder">Address</td>
							<td><?php echo $row['faddress']; ?></td>
							</tr>
						</table>
						<?php
						}
						?>
					</div>
				</div>
			</section>

		<!--------------Student profile section ends---------------------->
	  <!-- Footer -->
	  
	 <?php
	  include('footer.php'); ?>