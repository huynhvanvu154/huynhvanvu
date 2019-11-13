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
										     <li class="col-3"><a href="http://localhost/quanlybenhnhan/index.php?controller=index&action=trangchu">TRANG CHỦ</a></li>
										    <li class="col-3"><a href="http://localhost/quanlybenhnhan/index.php?controller=index&action=gioithieu">GIỚI THIỆU</a></li>
										    <li class="col-3"><a href="http://localhost/quanlybenhnhan/index.php?controller=index&action=tochuc">TỔ CHỨC</a></li>
											<li class="col-3"><a href="http://localhost/quanlybenhnhan/index.php?controller=nhanvien&action=dangxuat">ĐĂNG XUẤT</a></li>
										    
									</ul>
				

							</div>
							<div class="col-12">
								<div class="row"> 
									<div class="col-12">
										<?php 
												if(isset($thanhcong)&&in_array('add_success', $thanhcong)){
												echo '<p><b style ="color: red; text-align: center; margin-left:300px;" > THÊM BỆNH NHÂN THÀNH CÔNG!!!</b></p>';
												}else{
												echo '<p style ="color: red"; "text-align: center" > </p>';

												}
											 ?>
									 <legend style="text-align: center; color: red;"> Cập Nhật Bệnh Nhân!</legend>
									  <form action="" method="post" class="form" role="form" style="width: 250px; margin: auto; "> 
									  	<div class="row"> 
									  		<input class="form-control" name="name" placeholder="Họ Và Tên" value="<?php echo $data['HotenBN']?>">
									  		 <input class="form-control" name="email" placeholder="Email" value="<?php echo $data['email']?>"> 
									  		 <input class="form-control" name="sex" placeholder="Giới Tính" value="<?php echo $data['Gioitinh']?>">
									  		  <input class="form-control" name="date" placeholder="Ngày Sinh" value="<?php echo $data['Ngaysinh']?>">
									  		   <input class="form-control" name="nghengiep" placeholder="Nghề Nghiệp" value="<?php echo $data['Nghenghiep']?>">
									  		  <input class="form-control" name="address" placeholder="Địa Chỉ" value="<?php echo $data['Diachi']?>"> 
									  		   <input class="form-control" name="dantoc" placeholder="Dân Tộc" value="<?php echo $data['Dantoc']?>">

									  	</div>
									  		     <button class="btn btn-lg btn-primary btn-block" type="submit" name="update"> Cập Nhật</button> 
									  		 </form> 
									  		 
									  		</div> 
									  	</div>
							</div>
				</div>
		</div>
 <?php 
 	include('view/footer.php');
  ?>