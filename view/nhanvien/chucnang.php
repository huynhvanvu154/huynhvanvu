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
									  		 <a href="http://localhost/quanlybenhnhan/qrcode_vanvu/" class="btn btn-primary " style="width: 250px;"> Thêm Thông Tin Bệnh Nhân</a>
									    
								 	 </div>
								
								</li>
								<li class="col-12">
								
									<div class="dropdown">
									  		  <a href=" http://localhost/quanlybenhnhan/index.php?controller=nhanvien&action=danhsachbenhnhan" class="btn btn-primary " style="width: 250px;"> Danh Sách Bệnh Nhân</a>
									  	</div>    
								</li>
								<li class="col-12">
									<div class="dropdown">
									  		  <a href="http://localhost/quanlybenhnhan/index.php?controller=nhanvien&action=xemlichkham " class="btn btn-primary " style="width: 250px;"> Xem Lịch Đặt Khám</a>
									  	</div>
										    
								</li>
								<li class="col-12">
									<div class="dropdown">
									  		  <a href=" " class="btn btn-primary " style="width: 250px;"> Trả Lời Câu Hỏi</a>
									  	</div>	    
								</li>
						</ul>
					</div>
							
				</div>
				
		</div>
 <?php 
 	include('view/footer.php');
  ?>