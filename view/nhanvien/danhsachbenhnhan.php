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
				<div class="col-9">
				<div class="row">
					<form class=" col-12" action="" method="GET" class="" role="form" style="width: auto; margin-top: 10px; ">
									<table>
											<tr>
												<input type="hidden" name="controller" value="nhanvien">
												<td><input style="margin-left: 15px" type="text" name="ten" placeholder="Nhập Tên Bệnh Nhân"></td>
												<td id="timkiem"><input  type="submit" value="Tìm" > </td>
											</tr>
											<button  style="float: left; height: 25px; width: 140px; border: none;">
												<a href="http://localhost/quanlybenhnhan/qrcode_vanvu/" style="text-decoration: none; ">Thêm Bệnh Nhân</a>
											</button>
									</table>
								<input type="hidden" name="action" value="timbenhnhan">
					</form>
					<form class=" row" action="" method="GET" class="" role="form" style="width: auto; margin-top: 10px; margin-left: 15px">
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
												<td>ACTION</td>
											</tr>
										</thead>
										<tbody>
												<?php 
													
													$stt=1;
														foreach ($data as $value) {
												?>
													<tr>
														<td><?php echo $stt?></td>

														<td><?php echo $value['HotenBN']; ?>
														</td>
														<td><?php echo $value['email']; ?></td>
														<td><?php echo $value['Gioitinh']; ?></td>
														<td><?php echo $value['Ngaysinh']; ?></td>
														<td><?php echo $value['Nghenghiep']; ?></td>
														<td><?php echo $value['Diachi']; ?></td>
														<td><?php echo $value['Dantoc']; ?></td>
														<td><?php echo $value['Cmt']; ?></td>
														<td>
														<button><a style="text-decoration: none;"  onclick="return confirm('bạn có chắc muốn sửa không?')"  href="index.php?controller=nhanvien&action=suabenhnhan&idBN=<?php echo	$value['idBN'];?>">Sửa
															</a></button>
														<button><a style="text-decoration: none;" onclick="return confirm('bạn có chắc muốn xóa không?')" href="index.php?controller=nhanvien&action=xoabenhnhan&idBN=<?php echo	$value['idBN'];?>">Xóa
															</a></button>										
														</td> 
													
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