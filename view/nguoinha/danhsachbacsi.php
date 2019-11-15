<?php 
	include('view/header.php');
	
 ?>
 <div class="section row" style="height: 500px;">
				<?php 
					include('view/menuleft.php');
				 ?>
				<div class="right col-9">
							<div class="menu-ngang  ">
									<ul class="ngang  row">
										     <li class="col-md-3"><a href="http://localhost/quanlybenhnhan/index.php?controller=index&action=trangchu">TRANG CHỦ</a></li>
										    <li class="col-md-3"><a href="http://localhost/quanlybenhnhan/index.php?controller=index&action=gioithieu">GIỚI THIỆU</a></li>
										    <li class="col-md-3"><a href="http://localhost/quanlybenhnhan/index.php?controller=index&action=tochuc">TỔ CHỨC</a></li>
											<li class="col-md-3"><a href="http://localhost/quanlybenhnhan/index.php?controller=nhanvien&action=dangxuat">ĐĂNG XUẤT</a></li>
									</ul>
							</div>
							<div class="col-12">
								<form class=" row" action="" method="GET" class="" role="form" style="width: auto; margin-top: 10px;">
									<table>
												<tr>
													<input type="hidden" name="controller" value="nguoinha">
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
												</tr>
												
											</thead>
										
											<tbody>
													<?php 
														$stt=1;
															foreach ($data_bacsi as $value) {
													?>
														<tr>
															<td><?php echo $stt?></td>
															<td><a href=""><?php echo $value['name']; ?></a></td>
															<td><?php echo $value['email']; ?></td>
															<td><?php echo $value['address']; ?></td>
															<td><?php echo $value['birtday']; ?></td>
															<td><?php echo $value['sex']; ?></td>
															<td><?php echo $value['sdt']; ?></td>s
														
														</tr>
													
														<?php
															$stt++;
															}
														?>
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

