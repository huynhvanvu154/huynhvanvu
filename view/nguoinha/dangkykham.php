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
		<div class="col-12 col-lg-9">
			<div class=" section row"> 
				  <div class="col-12"> 
					<legend style="text-align: center;"> <h3>Đăng ký Lịch Khám!</h3></legend> 
					   <form action="" method="post" class="form" role="form" style="width: 250px; margin: auto; "> 
						<div class="row"> 
							<input class="form-control" name="name" placeholder="Họ Và Tên" required="" autofocus="" type="text">
							<input class="form-control" name="email" placeholder="Email" type="email"> 
							<input class="form-control" name="cmt" placeholder="Số Chứng Minh Nhân Dân" type="NUMBER-PHONE">
							<input class="form-control" name="sdt" placeholder="Số Điện Thoại" type="NUMBER-PHONE">
							<input class="form-control" placeholder="Ngày Tháng Năm Đăng Ký" name="date" type="date">
							<input class="form-control" name="sex" placeholder="Giới Tính"  type="text"> </div>   
							    			<input class="btn btn-lg btn-primary btn-block" name="dangkylich" type="submit" value="Đăng Ký Lịch"> 
						   </form> 
						<?php 
						if(isset($thanhcong)&&in_array('add_success', $thanhcong)){
							echo '<p style ="color: red; text-align: center" > ĐĂNG KÍ THÀNH CÔNG!!! CHỜ NHÂN VIÊN PHẢN HỒI</p>';
						}else{
							echo '<p style ="color: red"; "text-align: center" ></p>';
						}
						?>
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