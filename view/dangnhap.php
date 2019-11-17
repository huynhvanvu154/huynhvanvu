
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
						<div class="row"> 
						   <legend style="text-align: center;font-family: inherit; color: blueviolet;"><strong> Điền Thông Tin Đăng Nhập!</strong></legend> 
						   <form action="" method="post" class="form" role="form" style="width: 350px; margin: auto;"> 
							    <div class="col-12"> 
									<input class="form-control" name="email" placeholder="Email" required="" autofocus="" type="text">
									<input class="form-control" name="password" placeholder="Mật khẩu" type="password"> 
									<button class="btn btn-lg btn-primary btn-block" type="submit" name="dangnhap"> Đăng Nhập</button> 
									<?php 
									if(isset($thatbai)){
									echo '<strong style ="color: red; text-align: center; margin-left:70px; font-size: 20px;">Bạn không đủ quyền!!!</strong>';

									}else{
									echo '<p style ="color: red"; "text-align: center" > </p>';

									}
								?>
								</div>
						   </form> 
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