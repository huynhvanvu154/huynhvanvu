
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
					<legend style="text-align: center;font-family: inherit; color: blueviolet;"><strong> Đổi mật khẩu</strong></legend> 
			            <form method="post" class="form" role="form" style="width: 350px; margin: auto; margin-bottom: 10px; ">
			            	 <div class="col-12">
				                <div class="form-group">
				                    <input type="password" class="form-control" name="old_pass" placeholder="Mật khẩu cũ">
				                </div>
				                <div class="form-group">
				                    <input type="password" class="form-control" name="new_pass" placeholder="Mật khẩu mới">
				                </div>
				                <div class="form-group">
				                    <input type="password" class="form-control" name="re_new_pass" placeholder="Nhập lại mật khẩu mới">
				                </div>
				                <input type="submit" name="changpass" class="btn btn-primary form-control" value="Thay đổi">
				            </div>
			            </form>
			        </div>
			        <div class="col-12" style="text-align: center;">
			        <?php 
			            	if(isset($loi_1))
			            		echo '<strong style ="color: red; text-align: center; margin-left:275px; font-size: 20px;">Mật Khẩu Cũ Không Chính Xác! Xin nhập lại!!!</strong>';
			            	elseif (isset($loi_2)) {
			            		echo '<strong style ="color: red; text-align: center; margin-left: 350px; font-size: 20px;">Mật khẩu mới không khớp</strong>';
			            	}
			            	elseif(isset($result)){
			            		echo '<strong style ="color: red; text-align: center; margin-left:70px; font-size: 20px;"> Đổi mật khẩu thành công</strong>';
			            	}
			            	
			            	
			             ?>
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