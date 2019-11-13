<?php 
	include('view/header.php');
	
 ?>
 <div class="section row">
				<?php 
					include('view/menuleft.php');
				 ?>
				<div class="right col-9">
							<div class="menu-ngang  row">
									<ul class="ngang " >
									       <li class="col-2.4"><a href="http://localhost/quanlybenhnhan/index.php?controller=index&action=trangchu">TRANG CHỦ</a></li>
										    <li class="col-2.4"><a href="http://localhost/quanlybenhnhan/index.php?controller=index&action=gioithieu">GIỚI THIỆU</a></li>
										    <li class="col-2.4"><a href="http://localhost/quanlybenhnhan/index.php?controller=index&action=tochuc">TỔ CHỨC</a></li>
											<li class="col-2.4"><a href="http://localhost/quanlybenhnhan/index.php?controller=nguoinha&action=dangky">ĐĂNG KÝ</a></li>
										    <li class="col-2.4"><a name="dangxuat" href="http://localhost/quanlybenhnhan/index.php?controller=nguoinha&action=dangxuat " > ĐĂNG XUẤT</a></li>
									</ul>
							</div>
							
							<div class="menu-left col-12">
								<div class="row"> 
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