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
					
					<form class=" row" action="" method="GET" class="" role="form" style="width: auto; margin-top: 10px;">
									

						<h3 class="col-12" style="text-align: center; color: #0000FF">
							
							<span><strong>Tên Bệnh Nhân:</strong></span> 
							<span style="color: red"><?php echo $tenbenhnhan; ?></span></br>
							<span><strong>Bệnh Án:</strong></span> 
							<span style="color: red">
								<?php
								if($data_benhan==0){
									echo "<h3>Chưa Có Bệnh Án</h3>";

								}else{
									
									foreach ($data_benhan as $value) {
										//var_dump($data_benhan); die();
								?>	
									-<?php echo $value['ten_benh_an']; ?></br>	
								<?php
									}
									}
								?>

							</span></br>
							<strong>ĐƠN THUỐC</strong>
						</h3>
						<table class="col-12" border="1px;">
							<thead>
								<tr style="color: #0101DF; text-align: center;">
									<td>STT</td>
									<td>TÊN THUỐC</td>
									
									<td>XUẤT XỨ</td>
									<td>LỜI DẶN</td>
									
								</tr>
								
							</thead>
						
							<tbody>

									<?php
									if($data_donthuoc>0){
									//var_dump($data_donthuoc); die(); 
										$stt=1;
											foreach ($data_donthuoc as $value) {
									?>
										<tr>
											<td><?php echo $stt?></td>

											<td>
												<?php echo $value['tenthuoc'];?>
											</td>
											<td>
												<?php echo $value['xuatxu']; ?>
											</td>
											<td>
												<?php echo $value['loidan']; ?>
											</td>
										
										</tr>
									
										<?php
											$stt++;
											} 
											}
										else echo "<h3 style='text-align: center; color: red'>Chưa Có Đơn Thuốc</h3>";
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