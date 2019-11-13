<?php 
	include('view/header.php');
	
 ?>
 <div class="section row">
				<?php 
					include('view/menuleft.php');
				 ?>
			<div class="right col-9">
							<div class="menu-ngang row ">
 
									<ul class="ngang  ">

										       <li class="col-2.4"><a href="http://localhost/quanlybenhnhan/index.php?controller=index&action=trangchu">TRANG CHỦ</a></li>
										    <li class="col-2.4"><a href="http://localhost/quanlybenhnhan/index.php?controller=index&action=gioithieu">GIỚI THIỆU</a></li>
										    <li class="col-2.4"><a href="http://localhost/quanlybenhnhan/index.php?controller=index&action=tochuc">TỔ CHỨC</a></li>
										    <li class="col-2.4"><a name="dangxuat" href="http://localhost/quanlybenhnhan/index.php?controller=nguoinha&action=dangxuat " > ĐĂNG XUẤT</a></li>
									</ul>
							</div>
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
									 <legend style="text-align: center;"> Cấp Tài Khoản Cho Nhân Viên!</legend><a href="http://localhost/quanlybenhnhan/index.php?controller=admin&action=danhsachnhanvien" style="text-decoration: none; margin-top: -35px; margin-right: 165px; float: right;"> Danh Sách Nhân Viên </a>
									  <form action="" method="post" class="form" role="form" style="width: 250px; margin: auto; margin-bottom: 10px; "> 
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