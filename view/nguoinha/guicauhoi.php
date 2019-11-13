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
							   <legend style="text-align: center; color: red"> <h3>Nội Dung Câu Hỏi!</h3></legend> 
							   <form action="" method="post" class="form" role="form" style="width: 250px; margin: auto; "> 
									    <div class="row"> 
											<input class="form-control" name="title" placeholder="Nhập Tiêu Đề Câu Hỏi" required="" autofocus="" type="text">
											<textarea class="form-control" rows=”10″ cols=”50″ placeholder="Nội Dung Câu Hỏi" name="noidung" style="height: 100px;"></textarea>	
										</div>
									    <button class="btn btn-lg btn-primary btn-block" name="guicauhoi" type="submit"> <h4>Gửi</h4></button> 
							   </form> 
								<?php 
									if(isset($thanhcong)&&in_array('add_success', $thanhcong)){
									echo '<p style ="color: red; text-align: center" >gửi câu hỏi thành công! chờ nhân viên phản hồi! cảm ơn!</p>';
									}else{
									echo '<p style ="color: red"; "text-align: center" > </p>';

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