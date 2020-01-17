<!----------------------------------------Header Starts--------------------------------------------------->  
<?php
session_start();
 include('header.php');?>
<!----------------------------------------Header End------------------------------------------------------>
<section class="margin_top"> 
	<div class="container margin_top">
		<div class="row">
		
			<div class="col-md-6 text-center bor py-4 t-center">
			  <h2 class="fontcol">Student Assessment Details</h2>
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
					  <th>Subject</th>
                      <th>Assessment no.</th>
                      <th>Faculty name</th>
					  <th>Mark</th>
					  <th>Total</th>
					</tr>
				  </thead>
				  
					  <tbody id="myTable">
					  <?php 
					  require_once  'php_connection.php';
					  $var = $_SESSION['sno'];
					  $sql = "select * from assessment where sadd_no = '".$var."'";
					  $result = mysqli_query($conn,$sql);
					  while($row = mysqli_fetch_assoc($result))
					  {
						  ?>
						<tr>
						  <td><?php echo $row['subject']; ?></td>
						  <td><?php echo $row['a_no']; ?></td>
						  <td><?php echo $row['f_name']; ?></td>
						  <td><?php echo $row['mark']; ?></td>
						  <td><?php echo $row['total']; ?></td>
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