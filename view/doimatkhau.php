
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
					<legend style="text-align: center;font-family: inherit; color: blueviolet;"><strong> Đổi mật khẩu</strong></legend> 
			            <form method="post" class="form" role="form" style="width: 350px; margin: auto; margin-bottom: 10px; ">
			            	 <div class="col-12">
				                <div class="form-group">
				                    <input type="password" class="form-control" name="old_pass" placeholder="Mật khẩu cũ">
				                </div>
				                <div class="form-group">
				                    <input type="password" class="form-control" name="new_pass" placeholder="Mật khẩu mới">
				                </div>
				                <div class="form-group">
				                    <input type="password" class="form-control" name="re_new_pass" placeholder="Nhập lại mật khẩu mới">
				                </div>
				                <input type="submit" name="changpass" class="btn btn-primary form-control" value="Thay đổi">
				            </div>
			            </form>
			        </div>
			        <?php 
			            	if(isset($loi_1))
			            		echo '<strong style ="color: red; text-align: center; margin-left:275px; font-size: 20px;">Mật Khẩu Cũ Không Chính Xác! Xin nhập lại!!!</strong>';
			            	elseif (isset($loi_2)) {
			            		echo '<strong style ="color: red; text-align: center; margin-left: 350px; font-size: 20px;">Mật khẩu mới không khớp</strong>';
			            	}
			            	else{
			            		echo '<strong style ="color: red; text-align: center; margin-left:70px; font-size: 20px;"></strong>';
			            	}
			            	
			             ?>
				 </div> 
			</div>
		</div>
 <?php 
 	include('view/footer.php');
  ?>