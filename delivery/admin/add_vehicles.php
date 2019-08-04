<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
	<title>Admin Home</title>
	<link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
	<script type="text/javascript">
		function sureToApprove(id){
			if(confirm("Are you sure you want to delete this car?")){
				window.location.href ='delete_car.php?id='+id;
			}
		}
	</script>
</head>
<body>
<div id="header">
	<div class="shell">
		
		<?php
			include 'menu.php';
		?>
		</div>
		
	</div>
</div>

<div id="container">
	<div class="shell">
		
		<div class="small-nav">
			<a href="index.php">Dashboard</a>
			<span>&gt;</span>
			Vehicle Management
		</div>
		
		<br />
		
		<div id="main">
			<div class="cl">&nbsp;</div>
			
			<div id="content">
				
				<div class="box">
					<div class="box-head">
						<h2 class="left">Our Vehicles</h2>	
					</div>
					
					<div class="table">
						<table width="100%" border="0" cellspacing="0" cellpadding="0">
							<tr>
								<th width="13"><input type="checkbox" class="checkbox" /></th>
								<th>Vehicle Type</th>
								<th>Owner Name</th>
								<th>Hire Price</th>
								<th width="110" class="ac">Content Control</th>
							</tr>
							<?php
								include '../includes/config.php';
								$select = "SELECT * FROM cars WHERE status = 'Available'";
								$result = $conn->query($select);
								while($row = $result->fetch_assoc()){
							?>
							<tr>
								<td><input type="checkbox" class="checkbox" /></td>
								<td><h3><a href="#"><?php echo $row['car_type'] ?></a></h3></td>
								<td><?php echo $row['owner_name'] ?></td>
								<td><a href="#"><?php echo $row['hire_cost'] ?></a></td>
								<td><a href="javascript:sureToApprove(<?php echo $row['car_id'];?>)" class="ico del">Delete</a><a href="#" class="ico edit">Edit</a></td>
							</tr>
							<?php
								}
							?>
						</table>
						
						
						<div class="pagging">
							<div class="left">Showing 1-12 of 44</div>
							<div class="right">
								<a href="#">Previous</a>
								<a href="#">1</a>
								<a href="#">2</a>
								<a href="#">3</a>
								<a href="#">4</a>
								<a href="#">245</a>
								<span>...</span>
								<a href="#">Next</a>
								<a href="#">View all</a>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div id="sidebar">
				<div class="box">
					<div class="box-head">
						<h2>Management</h2>
					</div>					
					<div class="box-content">
						<a href="add_cars.php" class="add-button"><span>Add new Vehicles</span></a>
						<div class="cl">&nbsp;</div>
					</div>
				</div>
				
			</div>
			
			
			<div class="cl">&nbsp;</div>			
		</div>
		
	</div>
</div>



<div id="footer">
	<div class="shell">
	<span class="left">&copy; <?php echo date("Y");?> Delivery System</span>
	<span class="right">
			</a>
		</span>
	</div>
</div>

	
</body>
</html>