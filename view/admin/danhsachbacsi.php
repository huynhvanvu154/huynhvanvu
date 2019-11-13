<?php 
	include('view/header.php');
	
 ?>
 <div class="section row" style="height: 500px;">
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
								<form class=" row" action="" method="GET" class="" role="form" style="width: auto; margin-top: 10px;">
									<table>
												<tr>
													<input type="hidden" name="controller" value="admin">
													<td><input type="text" name="name" placeholder="Nhập Tên Bác Sĩ"></td>
													<td id="timkiem"><input type="submit"  value="tìm kiếm"></td>
												</tr>
												
												
									</table>
									<input type="hidden" name="action" value="timbacsi">
								</form>
								<form class=" row" action="" method="GET" class="" role="form" style="width: auto; margin-top: 10px; 	 ">
										

										<h3 class="col-12" style="text-align: center; color: #0000FF">
											<strong>DANH SÁCH BÁC SĨ</strong>
										</h3>
										<table class="col-12" border="1px;">
											<thead>
												<tr style="color: #0101DF; text-align: center;">
													<td>STT</td>
													<td>HỌ VÀ TÊN</td>
													<td>EMAIL</td>
													
													<td>ĐỊA CHỈ</td>
													<td>NGÀY SINH</td>
													<td>GIỚI TÍNH</td>
													<td>LIÊN HỆ</td>
													<td>ACTION</td>
													
													
												</tr>
												
											</thead>
										
											<tbody>
													<?php 
														$stt=1;
															foreach ($data_bacsi as $value) {
													?>
													
														<tr>
															
															<td><?php echo $stt?></td>

															<td><?php echo $value['name']; ?></a></td>
															<td><?php echo $value['email']; ?></td>
														
															<td><?php echo $value['address']; ?></td>
															<td><?php echo $value['birtday']; ?></td>
															<td><?php echo $value['sex']; ?></td>
															<td><?php echo $value['sdt']; ?></td>
															<td>
																<button><a onclick="return confirm('bạn có chắc muốn sửa không?')"href="index.php?controller=admin&action=suabacsi&id=<?php echo	$value['id'];?>">Sửa
																</a></button>
																<button><a onclick="return confirm('bạn có chắc muốn xóa không?')" href="index.php?controller=admin&action=xoabacsi&id=<?php echo $value['id'];?>">Xóa
																</a>
																</button>
																											
															</td> 
															
														
														</tr>
													
														<?php
															$stt++;
															}
														?>
													 
													<tr>
														<td></td>
													</tr>
											</tbody>
										</table>
								
								</form>
							</div>
							<div  class="col-12">
								<div class="row">
										
										
									</div>
							</div>
				</div>
		</div>
 <?php 
 	include('view/footer.php');
  ?>
<!-- <div class="timkiem">
	<form action="" method="GET">
		<table>
			<tr>
				<input type="hidden" name="controller" value="thanhvien">
				<td><input type="text-align" name="tukhoa" placeholder="Nhập từ khóa"></td>
				<td><input type="submit" value="Tìm Kiếm"></td>
			</tr>
		</table>
		<input type="hidden" name="action" value="timkiem">
	</form>
	
</div>
<div class="danhsach">
	<h3>DANH SÁCH THÀNH VIÊN</h3>
	<table border="1px; ">
		<thead>
			<tr style="color: #0101DF; text-align: center;">
				<td>STT</td>
				<td>NAME</td>
				<td>DATE</td>
				<td>ACTION</td>
			</tr>
			
		</thead> -->
		<!-- <tbody>
			<?php 
				$stt=1;
					foreach ($data as $value) {
			?>
			<tr>
				
				<td><?php echo $stt?></td>
				<td><?php echo $value['Name_user']; ?></td>
				<td><?php echo $value['Date_user']; ?></td>
				<td>
					<a onclick="return confirm('bạn có chắc muốn sửa không?')"href="index.php?controller=thanhvien&action=update&id=<?php echo	$value['Id_user'];?>">Update
					</a>
					<a onclick="return confirm('bạn có chắc muốn xóa không?')" href="index.php?controller=thanhvien&action=delete&id=<?php echo	$value['Id_user'];?>">Delete
					</a>
		
				</td>
			
			</tr>
				<?php
					$stt++;
					}
				?>
			 
			<tr>
				<td></td>
			</tr>
		</tbody> -->
	<!-- </table>
	
	</div> -->
