<?php 
	include('view/header.php');
	
 ?>
 <div class="menu-ngang  ">
	<ul class="ngang row ">
		   <li class="col-2" style=""><a href="http://localhost/quanlybenhnhan/index.php?controller=index&action=trangchu">TRANG CHỦ</a></li>
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
							<div class="col-12">
								<div class="row"> 
									<div class="col-12">
										<?php 
												if(isset($thanhcong)&&in_array('add_success', $thanhcong)){
												echo '<p><b style ="color: red; text-align: center; margin-left:280px;" >CẤP TÀI KHOẢN NHÂN VIÊN THÀNH CÔNG THÀNH CÔNG!!!</b></p>';
												}else{
												echo '<p style ="color: red"; "text-align: center" > </p>';

												}
											 ?>
									 <h3 style="color: #0000FF"> Cấp Tài Khoản Cho Nhân Viên!</h3>
									 
									 <div style="max-width: 17%; border: 1px solid red; max-height: 20%; background: antiquewhite;list-style: none;"><a href="http://localhost/quanlybenhnhan/index.php?controller=admin&action=danhsachnhanvien"> Danh Sách Nhân Viên </a></div> <form action="" method="post" class="form" role="form" style="width: 250px; margin: auto; margin-bottom: 10px; ">
									  	<div class="row"> 
									  		<input class="form-control" name="hoten" placeholder="Họ Và Tên" required="" autofocus="" type="text">
									  		 <input class="form-control" name="email" placeholder="Email" type="email"> 
									  		 <input class="form-control" name="password" placeholder="Mật khẩu" type="password">
									  		  <input class="form-control" name="address" placeholder="Địa Chỉ" type="text">
									  		   <input class="form-control" name="birtday" placeholder="Ngày Sinh" type="text">
									  		    <input class="form-control" name="sex" placeholder="Giới Tính" type="text">
												 <input class="form-control" name="sdt" placeholder="Số Điện Thoại" type="text">
									  		     </div>
									  		     <button class="btn btn-lg btn-primary btn-block" type="submit" name="dangky"> Thêm</button> 
									  		 </form> 
									  		 
									  		</div> 
									  	</div>
							</div>
				</div>
		</div>
 <?php 
 	include('view/footer.php');
  ?>