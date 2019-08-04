<!DOCTYPE html>
<html lang="en">
<head>
	<title>Delivery Services</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0" />
	
	<link rel="stylesheet" type="text/css" href="css/reset.css">
	<link rel="stylesheet" type="text/css" href="css/responsive.css">

	<script type="text/javascript" src="js/main.js"></script>
</head>
<body>

	<section class="">
		<?php
			include 'header.php';
		?>

			<section class="caption">
				<h2 class="caption" style="text-align: center">You Want... We Deliver...</h2>
			</section>
	</section>


	<section class="listings">
		<div class="wrapper">
			<ul class="properties_list">
				<h3 style="text-decoration: underline">Make Payments Here</h3>
				<h5>Paybill Number: 00000</h5>
				<h6>Business Number: ID Number Registered with.</h6>
				<form method="post">
					<table>
						<tr>
							<td>Transaction ID:</td>
							<td><input type="text" name="mpesa" required></td>
						</tr>
						<tr>
							<td>National ID Number:</td>
							<td><input type="text" name="id_no" required></td>
						</tr>
						
						<tr>
							<td colspan="2" style="text-align:right"><input type="submit" name="pay" value="Submit Details"></td>
						</tr>
					</table>
				</form>
				<?php
						if(isset($_POST['pay'])){
							include 'includes/config.php';
							$mpesa = $_POST['mpesa'];
							$id_no = $_POST['id_no'];
							
							$qry = "UPDATE client SET mpesa = '$mpesa' WHERE id_no = '$id_no'";
							$result = $conn->query($qry);
							if($result == TRUE){
								echo "<script type = \"text/javascript\">
											alert(\"Payment Successfully Done. Wait for Admin Approval\");
											window.location = (\"wait.php\")
											</script>";
							} else{
								echo "<script type = \"text/javascript\">
											alert(\"Registration Failed. Try Again\");
											window.location = (\"pay.php\")
											</script>";
							}
						}
						
					  ?>
			</ul>
		</div>
	</section>

	<footer>
		<div class="wrapper footer">
			<ul>
				<li class="links">
					<ul>
						<li>OUR COMPANY</li>
						<li><a href="#">About Us</a></li>
						<li><a href="#">Terms</a></li>
						<li><a href="#">Policy</a></li>
						<li><a href="#">Contact</a></li>
					</ul>
				</li>

				<li class="links">
					<ul>
						<li>OTHERS</li>
						<li><a href="#">...</a></li>
						<li><a href="#">...</a></li>
						<li><a href="#">...</a></li>
						<li><a href="#">...</a></li>
					</ul>
				</li>

				<li class="links">
					<ul>
						<li>OUR VEHICLE TYPES</li>
						<li><a href="#">Lorries</a></li>
						<li><a href="#">Vans</a></li>
						<li><a href="#">Cars</a></li>
						<li><a href="#">Motor Bykes</a></li>
					</ul>
				</li>

				<li class="about">
				<p>Our company rents cars and other vehicles to clients at lower costs.</p>
				<ul>
						<li><a href="http://facebook.com/" class="facebook" target="_blank"></a></li>
						<li><a href="http://twitter.com/" class="twitter" target="_blank"></a></li>
						<li><a href="http://google.com/" class="google" target="_blank"></a></li>
						<li><a href="#" class="skype"></a></li>
					</ul>
				</li>
			</ul>
		</div>

		<div class="copyrights wrapper">
		Copyright &copy; <?php echo date("Y")?> Delivery System
		</div>
	</footer>
	
</body>
</html>