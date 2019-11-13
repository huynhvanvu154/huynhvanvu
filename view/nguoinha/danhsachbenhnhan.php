<?php 
	include('view/header.php');
	
 ?>
 <div class="section row" >
				<?php 
					include('view/menuleft.php');
				 ?>
				<div class="right col-9">
							<div class="menu-ngang row ">
								<ul class="ngang col-12 ">
								     <li class="col-3"><a href="http://localhost/quanlybenhnhan/index.php?controller=index&action=trangchu">TRANG CHỦ</a></li>
								    <li class="col-3"><a href="http://localhost/quanlybenhnhan/index.php?controller=index&action=gioithieu">GIỚI THIỆU</a></li>
								    <li class="col-3"><a href="http://localhost/quanlybenhnhan/index.php?controller=index&action=tochuc">TỔ CHỨC</a></li>
									<li class="col-3"><a href="http://localhost/quanlybenhnhan/index.php?controller=nhanvien&action=dangxuat">ĐĂNG XUẤT</a></li>
								</ul>
							</div>
							<div class="col-12">
								<form class=" row" action="" method="GET" class="" role="form" style="width: auto; margin-top: 10px; ">
										<table>
												<tr>
													<input type="hidden" name="controller" value="nguoinha">
													<td><input type="text" name="ten" placeholder="Nhập Tên Bệnh Nhân"></td>
													<td id="timkiem"><input type="submit" value="tìm kiếm"></td>
												</tr>
												
										</table>
										<input type="hidden" name="action" value="timbenhnhan">
								</form>
								<form class="row" action="" method="GET" class="" role="form" style="width: auto; margin-top: 10px; ">
										<h3 class="col-12" style="text-align: center; color: #0000FF">
											<strong>DANH SÁCH BỆNH NHÂN</strong>
										</h3>
										<table class="col-12" border="1px;">
											<thead>
												<tr style="color: #0101DF; text-align: center;">
													<td>STT</td>
													<td>HỌ VÀ TÊN</td>
													<td>EMAIL</td>
													<td>GIỚI TÍNH</td>
													<td>NGÀY SINH</td>
													<td>NGHỀ NGHIỆP</td>
													<td>ĐỊA CHỈ</td>
													<td>DÂN TỘC</td>
													<td>Số CMT</td>
												</tr>
											</thead>
											<tbody>
													<?php 
														$stt=1;
															foreach ($data as $value) {
													?>
														<tr>
															<td><?php echo $stt?></td>

															<td><a href="http://localhost/quanlybenhnhan/index.php?controller=index&action=danhsachdonthuoc&idBN=<?php echo $value['idBN']; ?>&ten=<?php echo $value['HotenBN']; ?>"><?php echo $value['HotenBN']; ?></a></td>
															<td><?php echo $value['email']; ?></td>
															<td><?php echo $value['Gioitinh']; ?></td>
															<td><?php echo $value['Ngaysinh']; ?></td>
															<td><?php echo $value['Nghenghiep']; ?></td>
															<td><?php echo $value['Diachi']; ?></td>
															<td><?php echo $value['Dantoc']; ?></td>
															<td><?php echo $value['Cmt']; ?></td>
														</tr>
													
														<?php
															$stt++;
															}
														?>
													 
													
											</tbody>
										</table>
								</form>
							</div>
				</div>
		</div>
 <?php 
 	include('view/footer.php');
  ?>
