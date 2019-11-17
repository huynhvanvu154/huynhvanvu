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
			<div class="section row"> 
				<div class="col-12">
					<?php 
										//var_dump($idBN);die();
					if(isset($thanhcong)&&in_array('add_success', $thanhcong)){
						echo '<p><b style ="color: red; text-align: center; margin-left:280px;" >THÊM ĐƠN THUỐC THÀNH CÔNG!!!</b></p>';
					}else{
						echo '<p style ="color: red"; "text-align: center" > </p>';
					}
					?>
					<legend style="text-align: center; color:red "> Thêm Đơn Thuốc <legend>
						<form action="" method="post" class="form" role="form" style="width: 250px; margin: auto; "> 
							<div class="row"> 
								<textarea class="form-control" name="tenthuoc" placeholder="Tên Thuốc(xuất xứ)" required="" autofocus="" type="text" ></textarea>
								<input class="form-control" name="xuatxu" placeholder="Xuất Xứ" required="" autofocus="" type="text">
								<input class="form-control" name="solanuong" placeholder="Số Lần Uống Trong Ngày" type="text">
								<input class="form-control" name="loidan" placeholder="Lời Dặn" type="text">  
								<button class="btn btn-lg btn-primary btn-block" type="submit" name="themmoi"> Thêm</button> 
								<a class="btn btn-lg btn-primary btn-block" href="index.php?controller=index&action=danhsachdonthuoc&idBN=<?php echo $idBN?>&ten=<?php echo $tenbenhnhan?>"> Đơn Thuốc</a> 
							</div> 
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