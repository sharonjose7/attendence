<!----------------------------------------Header Starts--------------------------------------------------->  
<?php
session_start(); 
include('header.php');?>
<!----------------------------------------Header End------------------------------------------------------>
<section class="margin_top"> 
	<div class="container margin_top">
		<div class="row">
		
			<div class="col-md-6 text-center bor py-4 t-center">
			  <h2 class="fontcol">Student Attendence Details</h2>
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
					  <th>Date</th>
					  <th>Hour 1 </th>
					  <th>Hour 2 </th>
					  <th>Hour 3 </th>
					  <th>Hour 4 </th>
					</tr>
				  </thead>
				  
					  <tbody id="myTable">
					  <?php 
					  require_once  'php_connection.php';
					  $var = $_SESSION['sno'];
					  echo $var;
					  $sql = "select * from attendence where saddno= '".$var."'";
					  $result = mysqli_query($conn,$sql);
					  while($row = mysqli_fetch_assoc($result))
					  {
						  ?>
						<tr>
						  <td><?php echo $row['adate']; ?></td>
						  <td><?php echo $row['h1']; ?></td>
						  <td><?php echo $row['h2']; ?></td>
						  <td><?php echo $row['h3']; ?></td>
						  <td><?php echo $row['h4']; ?></td>
						  
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