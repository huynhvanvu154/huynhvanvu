<?php 
	include('view/header.php');
	
 ?>
 <div class="section row">
				<?php 
					include('view/menuleft.php');
				 ?>
				<div class="right col-9">
				<div class="menu-ngang row ">
						<ul class="ngang col-12 ">
							    <li class="col-2.4"><a href="http://localhost/quanlybenhnhan/index.php?controller=index&action=trangchu">TRANG CHỦ</a></li>
							    <li class="col-2.4"><a href="http://localhost/quanlybenhnhan/index.php?controller=index&action=gioithieu">GIỚI THIỆU</a></li>
							    <li class="col-2.4"><a href="http://localhost/quanlybenhnhan/index.php?controller=index&action=tochuc">TỔ CHỨC</a></li>
								<li class="col-2.4"><a href="http://localhost/quanlybenhnhan/index.php?controller=nguoinha&action=dangky">ĐĂNG KÝ</a></li>
							    <li class="col-2.4"><a href="http://localhost/quanlybenhnhan/index.php?controller=nguoinha&action=dangxuat"  > ĐĂNG XUẤT</a></li>
						</ul>
				</div>
				<div class="col-12">
					<form class=" row" action="" method="post" class="" role="form" style="">
						<table>
							<tr>
								<td>Từ: <input type="date" name="datefrom" placeholder="Năm/Tháng/Ngày"></td>
								<td>Đến: <input type="date" name="dateto" placeholder="Năm/Tháng/Ngày"></td>
								<td ><input type="submit" name="submit" value="Xem Kết Quả"></td>
							</tr>	
						</table>
					</form>
					<form class=" row" action="" method="GET" class="" role="form" style="width: auto; margin-top: 10px;">
						<h3 class="col-12" style="text-align: center; color: #0000FF">
							<strong>DANH SÁCH BỆNH ÁN</strong>
						</h3>
						<table class="col-12" border="1px;">
							<thead>
								<tr style="color: #0101DF; text-align: center;">
									<td>STT</td>
									<td>TÊN BỆNH ÁN</td>
									<td>NGÀY NHẬP</td>
								</tr>
							</thead>
							<tbody>
									<?php 
									if($data_benhan>0){
										$stt=1;
											foreach ($data_benhan as $value) {
									?>
										<tr>
											<td><?php echo $stt?></td>
											<td><?php echo $value['ten_benh_an']; ?></td>
											<td><?php echo $value['date']; ?>
										</tr>
										<?php
											$stt++;
											}
										}
										else
											echo "danh sách trống";
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