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
			<div class="col-12">
				<div class="row"> 
					<div class="col-12">
						<?php 
						if(isset($thanhcong)&&in_array('add_success', $thanhcong)){
							echo '<p><b style ="color: red; text-align: center; margin-left:280px;" > ĐĂNG KÍ THÀNH CÔNG!!! XIN MỜI BẠN ĐĂNG NHẬP  </b></p>';
						}else{
							echo '<p style ="color: red"; "text-align: center" > </p>';

						}
						?>
						<legend style="text-align: center;font-family: inherit;color: blueviolet;"><strong> Đăng ký thành viên!</strong></legend>
						<form action="" method="post" class="form" role="form" style="width: 350px; margin: auto; margin-bottom: 10px; "> 
							<div class="row"> 
								<input class="form-control" name="hoten" placeholder="họ và tên" required="" autofocus="" type="text">
								<input class="form-control" name="email" placeholder="email" type="email"> 
								<input class="form-control" name="password" placeholder="mật khẩu" type="password">
								<input class="form-control" name="address" placeholder="địa chỉ" type="text">
								<input class="form-control" name="birtday" placeholder="ngày sinh" type="text">
								<input class="form-control" name="sex" placeholder="giới tính" type="text"> 
								<input class="form-control" name="sdt" placeholder="số điện thoại" type="text"> 
								<button class="btn btn-lg btn-primary btn-block" type="submit" name="dangky"> đăng ký</button> 
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