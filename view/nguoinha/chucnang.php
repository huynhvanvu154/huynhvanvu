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
	 		<div class="col-9">
				<div class="menu-left col-12">
				<ul  class="doc row " >
					<li class="col-12" >
						<div class="dropdown">
					  		 <a href="http://localhost/quanlybenhnhan/index.php?controller=nguoinha&action=dangkykham" class="btn btn-primary " style="width: 220px;"> Đăng Ký Khám</a>
					 	 </div>
					</li>
					<li class="col-12">
						<div class="dropdown">
						   <a href="http://localhost/quanlybenhnhan/index.php?controller=nguoinha&action=guicauhoi " class="btn btn-primary " style="width: 220px;"> Gửi Câu Hỏi</a>
					 	 </div>
					</li>
					<li class="col-12">
						<div class="dropdown">
					  		  <a href=" http://localhost/quanlybenhnhan/index.php?controller=nguoinha&action=danhsachbacsi" class="btn btn-primary " style="width: 220px;"> Tìm Bác Sĩ</a>
						 </div>
					</li>
					<li class="col-12">
						<div class="dropdown">
					  		  <a href="http://localhost/quanlybenhnhan/index.php?controller=nguoinha&action=danhsachbenhnhan " class="btn btn-primary " style="width: 220px;"> Tìm Bệnh Nhân</a>
						 </div>
					</li>

				</ul>
			</div>			
		</div>
	</div>
 <?php 
 	include('view/footer.php');
  ?>