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
							<a class="nav-link" href="http://localhost/quanlybenhnhan/index.php?controller=index&action=dangxuat"  > ĐĂNG XUẤT</a>
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
			<div >

				<form class="section row" action="" method="GET" class="" role="form" style="width: auto; margin-top: 10px;">


					<h3 class="col-12" style="text-align: center; color: #0000FF">
						<strong>DANH SÁCH BỆNH NHÂN</strong>
					</h3>
					<table class="col-12" border="1px;">
						<thead>
							<tr style="color: #0101DF; text-align: center;">
								<td>STT</td>
								<td>HỌ VÀ TÊN</td>
								<td>EMAIL</td>
								<td>GIỚI TÍNH</td>
								<td>NGÀY SINH</td>
								<td>NGHỀ NGHIỆP</td>
								<td>ĐỊA CHỈ</td>
								<td>DÂN TỘC</td>
								<td>Số CMT</td>
								<td>ACTION</td>

							</tr>

						</thead>
						
						<tbody>
							<?php 
							$stt=1;
							foreach ($data as $value) {
								?>
								<tr>
									<td><?php echo $stt?></td>
									<td><?php echo $value['HotenBN']; ?></td>
									<td><?php echo $value['email']; ?></td>
									<td><?php echo $value['Gioitinh']; ?></td>
									<td><?php echo $value['Ngaysinh']; ?></td>
									<td><?php echo $value['Nghenghiep']; ?></td>
									<td><?php echo $value['Diachi']; ?></td>
									<td><?php echo $value['Dantoc']; ?></td>
									<td><?php echo $value['Cmt']; ?></td>
									<td>

										<button><a style="text-decoration: none;" href="index.php?controller=index&action=thembenhan&idBN=<?php echo $value['idBN'];?>&ten=<?php echo  $value['HotenBN']; ?>">Thêm Đơn Thuốc</a></button>

									</td> 

								</tr>

								<?php
								$stt++;
							}
							?>


						</tbody>
					</table>

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