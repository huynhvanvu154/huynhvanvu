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
			<ul  class="section row" >
				<div class="col-12">
					<form class=" row" action="" method="post" class="" role="form" style="">
						<table>
							<tr>
								<td>Từ: <input type="date" name="datefrom" placeholder="Năm/Tháng/Ngày"></td>
								<td>Đến: <input type="date" name="dateto" placeholder="Năm/Tháng/Ngày"></td>
								<td ><input type="submit" name="submit" value="Xem Kết Quả"></td>
							</tr>	
						</table>
					</form>
					<form class=" row" action="" method="GET" class="" role="form" style="width: auto; margin-top: 10px;">
						<h3 class="col-12" style="text-align: center; color: #0000FF">
							<strong>DANH SÁCH BỆNH ÁN</strong>
						</h3>
						<table class="col-12" border="1px;">
							<thead>
								<tr style="color: #0101DF; text-align: center;">
									<td>STT</td>
									<td>TÊN BỆNH ÁN</td>
									<td>NGÀY NHẬP</td>
								</tr>
							</thead>
							<tbody>
									<?php 
									if($data_benhan>0){
										$stt=1;
											foreach ($data_benhan as $value) {
									?>
										<tr>
											<td><?php echo $stt?></td>
											<td><?php echo $value['ten_benh_an']; ?></td>
											<td><?php echo $value['date']; ?>
										</tr>
										<?php
											$stt++;
											}
										}
										else
											echo '<p style="text-align: center; color: red; font-size: 200%">Danh sách trống</p>';
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