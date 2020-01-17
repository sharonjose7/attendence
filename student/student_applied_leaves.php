<!----------------------------------------Header Starts--------------------------------------------------->  
<?php
session_start();
 include('header.php');?>
<!----------------------------------------Header End------------------------------------------------------>
<section class="margin_top"> 
	<div class="container margin_top">
		<div class="row">
		
			<div class="col-md-6 text-center bor py-4 t-center">
			  <h2 class="fontcol">Student Leave Details</h2>
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
					  
					  
					  <th>Leave From</th>
					  <th>Leave TO</th>
					  <th>Leave Type</th>
					  <th>Reason</th>
					  <th>Status</th>
					  <th></th>
					</tr>
				  </thead>
				  <?php 
					  require_once  'php_connection.php';
					  $var = $_SESSION['srollno'];
					  $sql = "select * from student_leave where srollno= '".$var."'";
					  $result = mysqli_query($conn,$sql);
					  while($row = mysqli_fetch_assoc($result))
					  {
						  ?>
					  <tbody id="myTable">
					  
						<tr>
						<td><?php echo $row['leave_from']; ?></td>
						<td><?php echo $row['leave_to']; ?></td>
						<td><?php echo $row['leave_type']; ?></td>
						<td><?php echo $row['reason']; ?></td>
						<td><?php echo $row['status']; ?></td>
						  <td><button class="btn btn-primary">Cancel</button></td>
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