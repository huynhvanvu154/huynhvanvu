	<title>Quick Response (QR) Code Generator</title>
	<link rel="icon" href="QRcode/img/favicon.ico" type="image/png">
	<link rel="stylesheet" href="QRcode/libs/css/bootstrap.min.css">
	<link rel="stylesheet" href="QRcode/libs/style.css">
	<script src="QRcode/libs/navbarclock.js"></script>
<?php 
	include('view/header.php');
	
 ?>
 <div class="section row" >
				<?php 
					include('view/menuleft.php');
				 ?>
				<?php 
					include('view/menu_ngang.php');
				 ?>
							<div class="col-12" onload="startTime()">
								
							</div>
				</div>
		</div>
 <?php 
 	include('view/footer.php');
  ?>