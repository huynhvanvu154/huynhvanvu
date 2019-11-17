
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
							<a class="nav-link" href="http://localhost/quanlybenhnhan/index.php?controller=nguoinha&action=dangxuat"  > ĐĂNG XUẤT</a>
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
					<li class="col-12 col-lg-12" >
						<div class="dropdown ">
							<a href="http://localhost/quanlybenhnhan/index.php?controller=nguoinha&action=dangkykham" class="btn btn-primary " style="width: 250px;"> Đăng Ký Khám</a>
						</div>
					</li>
					<li class="col-12 col-lg-12">
						<div class="dropdown  ">
							<a href="http://localhost/quanlybenhnhan/TheScript" class="btn btn-primary " style="width: 250px;"> Gửi Câu Hỏi</a>
						</div>
					</li>
					<li class="col-12 col-lg-12">
						<div class="dropdown  ">
							<a href=" http://localhost/quanlybenhnhan/index.php?controller=nguoinha&action=danhsachbacsi" class="btn btn-primary " style="width: 250px;"> Tìm Bác Sĩ</a>
						</div>
					</li>
					<li class="col-12 col-lg-12">
						<div class="dropdown ">
							<a href="http://localhost/quanlybenhnhan/index.php?controller=nguoinha&action=danhsachbenhnhan " class="btn btn-primary " style="width: 250px;"> Tìm Bệnh Nhân</a>
						</div>
					</li>
				</ul>
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