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
											<li class="col-2.4"><a href="http://localhost/quanlybenhnhan/index.php?controller=nguoinha&action=dangky">ĐĂNG KÝ</a></li>
										    
										    <li class="col-2.4"><a name="dangxuat" href="http://localhost/quanlybenhnhan/index.php?controller=nguoinha&action=dangxuat " > ĐĂNG XUẤT</a></li>
									</ul>
							</div>
							
							<div class="menu-left col-12">
								<div class="row"> 
									<div class="col-12">
										<?php 
											if(isset($thanhcong)&&in_array('add_success', $thanhcong)){
												header("location: index.php?controller=index&action=themdonthuoc&idBN=$id_benhnhan&ten=$HotenBN");
											}else{
												echo '<p style ="color: red"; "text-align: center" > </p>';
											}
										 ?>
									 <legend style="text-align: center; color:red ">Bệnh Nhân: <?php echo $HotenBN ?> <legend>
									  <form action="" method="post" class="form" role="form" style="width: 250px; margin: auto; "> 
										  <div class="row"> 
									  		<input class="form-control" name="benhan" placeholder="Chẩn Đoán" required="" autofocus="" type="text">
									  		<button type="submit" name="themmoi"  class="btn btn-lg btn-primary btn-block" > Nhập Đơn Thuốc</button>
									  		  
										  		 
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