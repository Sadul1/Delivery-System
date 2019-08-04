<?php
	error_reporting("E-NOTICE");
?>
<?php
	session_start();
	if(!$_SESSION['uname'] && (!$_SESSION['pass'])){
		header("location: ../login.php");
	}
?>
<div id="top">
			<h1><a href="#">Delivery Services</a></h1>
			<div id="top-navigation">
				Welcome <a href="#"><strong>Administrator</strong></a>
				<a href="logout.php">Log out</a>
			</div>
		</div>
<div id="navigation">
			<ul>
				<li><a href="client_requests.php"><span>Hire Requests</span></a></li>
			    <li><a href="index.php"><span>Messages</span></a></li>
			    <li><a href="add_vehicles.php"><span>Vehicle Management</span></a></li>
			    
			</ul>
		</div>