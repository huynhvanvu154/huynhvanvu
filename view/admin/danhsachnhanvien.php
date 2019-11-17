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
							<div class="col-12">
								<form class=" row" action="" method="GET" class="" role="form" style="width: auto; margin-top: 10px;">
									<table>
										<tr>
											<input type="hidden" name="controller" value="admin">
											<td><input type="text" name="name" placeholder="Nhập Tên Nhân Viên"></td>
											<td id="timkiem"><input type="submit"  value="tìm kiếm"></td>
										</tr>	
									</table>
									<input type="hidden" name="action" value="timnhanvien">
								</form>
								<form class=" row" action="" method="GET" class="" role="form" style="width: auto; margin-top: 10px;">
										<h3 class="col-12" style="text-align: center; color: #0000FF">
											<strong>DANH SÁCH NHÂN VIÊN</strong>
										</h3>
										<table class="col-12" border="1px;">
											<thead>
												<tr style="color: #0101DF; text-align: center;">
													<td>STT</td>
													<td>HỌ VÀ TÊN</td>
													<td>EMAIL</td>
													<td>ĐỊA CHỈ</td>
													<td>NGÀY SINH</td>
													<td>GIỚI TÍNH</td>
													<td>LIÊN HỆ</td>
													<td>ACTION</td>
												</tr>
											</thead>
											<tbody>
											<?php 
												$stt=1;
													foreach ($data_nhanvien as $value) {
											?>
											
												<tr>
													<td><?php echo $stt?></td>
													<td><?php echo $value['name']; ?></a></td>
													<td><?php echo $value['email']; ?></td>
													<td><?php echo $value['address']; ?></td>
													<td><?php echo $value['birtday']; ?></td>
													<td><?php echo $value['sex']; ?></td>
													<td><?php echo $value['sdt']; ?></td>
													<td>
														<button><a onclick="return confirm('bạn có chắc muốn sửa không?')"href="index.php?controller=admin&action=suanhanvien&id=<?php echo	$value['id'];?>">Sửa
														</a></button>
														<button><a onclick="return confirm('bạn có chắc muốn xóa không?')" href="index.php?controller=admin&action=xoanhanvien&id=<?php echo $value['id'];?>">Xóa
														</a>
														</button>
																									
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
							<div  class="col-12">
								<div class="row">
										
										
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