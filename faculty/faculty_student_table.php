<!----------------------------------------Header Starts--------------------------------------------------->  
<?php
session_start();
include('header.php');
?>
<!----------------------------------------Header End------------------------------------------------------>
<section class="margin_top"> 
	<div class="container margin_top">
		<div class="row">
		
			<div class="col-md-6 text-center bor py-4 t-center">
			  <h2 class="fontcol">Students</h2>
			</div>
			
				<div class="col-md py-3 bor text-right ">
					<p class=""><kbd>Search</kbd>  
					<input class="p-2" id="myInput" type="text" placeholder="Search.."></p>
					
				</div>
				
			<div class="col-md-12">
				<div style="overflow-x:auto;">
				<table class="table table-hover">
				  
				  <thead>
					<tr>
					  <th>Sl.no</th>
					  <th>Student Name</th>
					  <th>Roll no.</th>
					  <th>Mobile</th>
					  <th>Batch</th>
					  <th></th>
					  <th></th>
					  <th></th>
					</tr>
				  </thead>
				  
					  <tbody id="myTable">
					  <?php 
					  require_once  'php_connection.php';
					  $sql = "select * from student";
					  $result = mysqli_query($conn,$sql);
					  while($row = mysqli_fetch_assoc($result))
					  {
						  ?>
						<tr>
						  <td><?php echo $row['sid']; ?></td>
						  <td><?php echo $row['sname']; ?></td>
						  <td><?php echo $row['srollno']; ?></td>
						  <td><?php echo $row['smobile']; ?></td>
						  <td><?php echo $row['sbatch']; ?></td>
						  <td><a href="faculty_student_details.php?id=<?php echo $row['sid']; ?>"><button class="btn btn-primary">more ></button></a></td>
						  <td><a href="faculty_student_attendence.php?id=<?php echo $row['sid']; ?>"><button class="btn btn-primary">attendence +</button></td>
						  <td><a href="faculty_student_assessment.php?id=<?php echo $row['sid']; ?>"><button class="btn btn-primary">assesment +</button></td>
						</tr>
					<?php 
					  }
					  ?>
					</tbody>
				</table>
			</div>
			</div>
		</div>
	</div>
</section>
<div class="col-md-3 ">
	<button type="clear" class="btn btn-danger"><a href="faculty_student_new.php" class="text-light text-decoration-none">Add New+</a></button>
</div>
<!----------------------------------------Footer Starts--------------------------------------------------->  
 
<?php include('footer.php');?>
<!----------------------------------------Footer End--------------------------------------------------->