<?php 
include('view/header.php');

?>
<div class="container">
	<div class="row">
		<div class="col-12 p-0">
			<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
				<!-- <a class="navbar-brand" href="#">BNV</a> -->
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample03" aria-controls="navbarsExample03" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>

				<div class="collapse navbar-collapse" id="navbarsExample03">
					<ul class="navbar-nav mr-auto nav-custom six">
						<li class="nav-item active">
							<a  class="nav-link" href="http://localhost/quanlybenhnhan/index.php?controller=index&action=trangchu">TRANG CHỦ</a>
						</li>
						<li class="nav-item active">
							<a  class="nav-link"  href="http://localhost/quanlybenhnhan/index.php?controller=index&action=gioithieu">GIỚI THIỆU</a>
						</li>
						<li class="nav-item active">

							<a class="nav-link" href="http://localhost/quanlybenhnhan/index.php?controller=index&action=tochuc">TỔ CHỨC</a>
						</li>
						<li class="nav-item active">
							<a  class="nav-link" href="http://localhost/quanlybenhnhan/index.php?controller=nguoinha&action=dangky">ĐĂNG KÝ</a>
						</li>
						<li class="nav-item active">
							<a class="nav-link" href="http://localhost/quanlybenhnhan/index.php?controller=admin&action=dangxuat"  > ĐĂNG XUẤT</a>
						</li>
						<li class="nav-item active">
							<a class="nav-link" href="http://localhost/quanlybenhnhan/index.php?controller=index&action=doimatkhau"  > ĐỔI MẬT KHẨU</a>
						</li>
						<li class="nav-item active  d-block d-sm-block d-md-block d-lg-none" >
							<a  class="nav-link" href="#" onclick="openNav()">VAI TRÒ</a>
						</li>
					</ul>						

				</ul>
			</div>
		</nav>
	</div>
</div>
</div>
<div class="container">
	<div class="row">
		<div class="col-12  menu-left col-lg-3  p-0">
			<?php 
			include('view/menuleft.php');
			?>
		</div>
		<div class="col-12 col-lg-9 menu-right ">
			<ul  class="section row" >
				<div class="col-12">
					<?php 
					if(isset($thanhcong)&&in_array('add_success', $thanhcong)){
						echo '<p><b style ="color: red; text-align: center; margin-left:300px;" > THÊM BỆNH NHÂN THÀNH CÔNG!!!</b></p>';
					}else{
						echo '<p style ="color: red"; "text-align: center" > </p>';

					}
					?>
					<legend style="text-align: center; color: red;"> Cập Nhật Nhân Viên!</legend>
					<form action="" method="post" class="form" role="form" style="width: 250px; margin: auto; "> 
						<div class="row"> 
							<input class="form-control" name="name" placeholder="Họ Và Tên" value="<?php echo $data_nhanvien['name']?>">
							<input class="form-control" name="email" placeholder="Email" value="<?php echo $data_nhanvien['email']?>"> 
							<input class="form-control" name="sex" placeholder="Giới Tính" value="<?php echo $data_nhanvien['sex']?>">
							<input class="form-control" name="birtday" placeholder="Ngày Sinh" value="<?php echo $data_nhanvien['birtday']?>">

							<input class="form-control" name="address" placeholder="Địa Chỉ" value="<?php echo $data_nhanvien['address']?>"> 
							<input class="form-control" name="sdt" placeholder="Số Điện Thoại" value="<?php echo $data_nhanvien['sdt']?>"> 


						</div>
						<button class="btn btn-lg btn-primary btn-block" type="submit" name="update"> Cập Nhật</button> 
					</form> 

				</div> 
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