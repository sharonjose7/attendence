<!----------------------------------------Header Starts--------------------------------------------------->  
<?php 
session_start();
include('header.php'); ?>
	
<!----------------------------------------Header End------------------------------------------------------>
<section class="margin_top"> 
	<div class="container margin_top">
		<div class="row">
		
			<div class="col-md-6 text-center bor py-4 t-center">
			  <h2 class="fontcol">Student leave applications</h2>
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
					  
					  <th>Student Name</th>
					  <th>Leave From</th>
					  <th>Leave TO</th>
					  <th>Leave Type</th>
					  <th>Reason</th>
					  <th>Status</th>
					  <th></th>
					  <th></th>
					</tr>
				  </thead>
				  
					  <tbody id="myTable">
					  <?php
					 	 require_once  'php_connection.php';
						$sql = "select * from student_leave";
						$result = mysqli_query($conn,$sql);
						while($row = mysqli_fetch_assoc($result))
							{
						?>
					  
						<tr>
						  <td><?php echo $row['sname']; ?></td>
						  <td><?php echo $row['leave_from']; ?></td>
						  <td><?php echo $row['leave_to']; ?></td>
						  <td><?php echo $row['leave_type']; ?></td>
						  <td><?php echo $row['reason']; ?></td>
						  <td><?php echo $row['status']; ?></td>
						  <td><button class="btn btn-primary">Cancel</button></td>
						  <td><button class="btn btn-primary">Approve</button></td>
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
 
<!----------------------------------------Footer Starts--------------------------------------------------->  
 
<?php include('footer.php');?>
<!----------------------------------------Footer End--------------------------------------------------->