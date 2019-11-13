<style type="text/css">
	.section{ height: 50vh; }
</style>
<?php 
	include('view/header.php');
	
 ?>
 <div class="menu-ngang">
	<ul class="ngang col-12 ">
		    <li class="col-2" style="margin-left: -28px"><a href="http://localhost/quanlybenhnhan/index.php?controller=index&action=trangchu">TRANG CHỦ</a></li>
		    <li class="col-2"><a href="http://localhost/quanlybenhnhan/index.php?controller=index&action=gioithieu">GIỚI THIỆU</a></li>
		    <li class="col-2"><a href="http://localhost/quanlybenhnhan/index.php?controller=index&action=tochuc">TỔ CHỨC</a></li>
			<li class="col-2"><a href="http://localhost/quanlybenhnhan/index.php?controller=nguoinha&action=dangky">ĐĂNG KÝ</a></li>
		    <li class="col-2"><a href="http://localhost/quanlybenhnhan/index.php?controller=nguoinha&action=dangxuat"  > ĐĂNG XUẤT</a></li>
		    <li class="col-2"><a href="http://localhost/quanlybenhnhan/index.php?controller=index&action=doimatkhau"  > ĐỔI MẬT KHẨU</a></li>
	</ul>	
</div>
 <div class="section row">
				<?php 
					include('view/menuleft.php');
				 ?>
				<div class="right col-9">
							<div class="menu-left col-12">
								<ul  class="doc row ">
									<li class="col-12">
										<div class="dropdown">
	  								  		 <a href="http://localhost/quanlybenhnhan/index.php?controller=admin&action=themnhanvien" class="btn btn-primary " style="width: 220px; "> Cấp Tài Khoản Nhân Viên</a>
									 	 </div>
									</li>
									<li class="col-12">
											<div class="dropdown">
											   <a href=" http://localhost/quanlybenhnhan/index.php?controller=admin&action=danhsachnhanvien" class="btn btn-primary " style="width: 220px;"> Danh Sách Nhân Viên</a>
										 	 </div>
									</li>
									<li class="col-12">
											<div class="dropdown">
											   <a href="http://localhost/quanlybenhnhan/index.php?controller=admin&action=thembacsi " class="btn btn-primary " style="width: 220px;"> Thêm Bác Sĩ</a>
										 	 </div>
									</li>
									<li class="col-12">
											<div class="dropdown">
											   <a href=" http://localhost/quanlybenhnhan/index.php?controller=admin&action=danhsachbacsi" class="btn btn-primary " style="width: 220px;"> Danh Sách Bác Sĩ</a>
										 	 </div>
									</li>
									<li class="col-12">
											<div class="dropdown">
		  								  		  <a href=" http://localhost/quanlybenhnhan/index.php?controller=index&action=danhsachbenhan" class="btn btn-primary " style="width: 220px;"> Xem Thống Kê</a>
									</li>
									
								</ul>
							</div>
							
				</div>
		</div>
 <?php 
 	include('view/footer.php');
  ?>