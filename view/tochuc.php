<?php 
	include('view/header.php');
	include('view/menu_ngang.php');
 ?>
 
 <div class="container">
	<div class="row">
		<div class="col-12  menu-left col-lg-3  p-0">
			<?php 
			include('view/menuleft.php');
			?>
		</div>
		<div class="col-12 col-lg-9">
					<div class="row tochuc" >
						<img src="view/images/mohinh.jpg" style="max-width: 100%;" >
					</div>
				</div>
		</div>
</div>
 <?php 
 	include('view/footer.php');
  ?>
  <script type="text/javascript">
	function openNav() {
		document.getElementById("mySidenav").style.width = "250px";
	}

	function closeNav() {
		document.getElementById("mySidenav").style.width = "0";
	}
</script>