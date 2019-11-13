<?php 
	include('view/header.php');
 ?>
 <div class="section row">
				<?php 
					include('view/menuleft.php');
				 ?>
				<?php
					include('view/menu_ngang.php'); 
				 ?>
					<div class="col-12">
						<div class="row"> 
						  <div class="col-12"> 
							   <legend style="text-align: center;"> <h3>Đăng ký Lịch Khám!</h3></legend> 
							   <form action="" method="post" class="form" role="form" style="width: 250px; margin: auto; "> 
									<div class="row"> 
										<input class="form-control" name="name" placeholder="Họ Và Tên" required="" autofocus="" type="text">
										<input class="form-control" name="email" placeholder="Email" type="email"> 
										<input class="form-control" name="cmt" placeholder="Số Chứng Minh Nhân Dân" type="NUMBER-PHONE">
										<input class="form-control" name="sdt" placeholder="Số Điện Thoại" type="NUMBER-PHONE">
										<input class="form-control" placeholder="Ngày Tháng Năm Đăng Ký" name="date" type="date">
										 <input class="form-control" name="sex" placeholder="Giới Tính"  type="text"> </div>   
						    			<input class="btn btn-lg btn-primary btn-block" name="dangkylich" type="submit" value="Đăng Ký Lịch"> 
							   </form> 
								<?php 
									if(isset($thanhcong)&&in_array('add_success', $thanhcong)){
									echo '<p style ="color: red; text-align: center" > ĐĂNG KÍ THÀNH CÔNG!!! CHỜ NHÂN VIÊN PHẢN HỒI</p>';
									}else{
									echo '<p style ="color: red"; "text-align: center" >a </p>';
									}
								?>
						  	</div> 
						 </div>
					</div>
				</div>
		</div>
 <?php 
 	include('view/footer.php');
  ?>