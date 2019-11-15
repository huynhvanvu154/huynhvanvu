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
 <div class="section row" style="height: 500px;">
				<?php 
					include('view/menuleft.php');
				 ?>
				<div class="right col-9">
							<div class="col-12">
								<form class="row" action="" method="GET" class="searchform cf" role="form" style="width: auto; margin-top: 10px; ">
										<h3 style="text-align: center; color: #0000FF" class="col-12" >
											<strong >DANH SÁCH ĐẶT LỊCH</strong>
										</h3>
										<table class="col-12" border="1px;" style="margin: auto;">
											<thead>
												<tr style="color: #0101DF; text-align: center;">
													<td>STT</td>
													<td>HỌ VÀ TÊN</td>
													<td>EMAIL</td>
													<td>CMT</td>										<td>LIÊN HỆ</td>
													<td>NGÀY ĐẶT</td>
													<td>GIỚI TÍNH</td>
													
													
												</tr>
												
											</thead>
										
											<tbody>
													<?php 
														$stt=1;
															foreach ($data_lichkham as $value) {
													?>
													
														<tr>
															
															<td><?php echo $stt?></td>

															<td><?php echo $value['name']; ?></td>
															<td><?php echo $value['email']; ?></td>
															<td><?php echo $value['cmt']; ?></td>
															<td><?php echo $value['sdt']; ?></td>
															<td><?php echo $value['date']; ?></td>
															<td><?php echo $value['sex']; ?></td>
															
														
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
								<input type="hidden" name="action" value="timbenhnhan">
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
