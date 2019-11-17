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
										<?php 
												if(isset($thanhcong)&&in_array('add_success', $thanhcong)){
												echo '<p><b style ="color: red; text-align: center; margin-left:300px;" > THÊM BỆNH NHÂN THÀNH CÔNG!!!</b></p>';

												}else{
												echo '<p style ="color: red"; "text-align: center" > </p>';

												}
										?>
									 <legend style="text-align: center; color: red; text-decoration: none;"> Thêm Bệnh Nhân!<a href="http://localhost/quanlybenhnhan/index.php?controller=nhanvien&action=danhsachbenhnhan">Danh Sách</a></legend>
									  <form action="" method="post" class="form" role="form" style="width: 250px; margin: auto; "> 
									  	<div class="row"> 
									  		<input class="form-control" name="name" placeholder="Họ Và Tên" required="" autofocus="" type="text">
									  		 <input class="form-control" name="email" placeholder="Email" type="email"> 
									  		 <input class="form-control" name="sex" placeholder="Giới Tính" type="text">
									  		  <input class="form-control" name="date" placeholder="Ngày Sinh" type="text">
									  		   <input class="form-control" name="nghengiep" placeholder="Nghề Nghiệp" type="text">
									  		  <input class="form-control" name="address" placeholder="Địa Chỉ" type="text">

									  		   <input class="form-control" name="dantoc" placeholder="Dân Tộc" type="text">
									  		    <input class="form-control" name="cmt" placeholder="Số CMT" type="text">
									  	</div>
									  	<button  class="btn btn-lg btn-primary btn-block" type="submit" name="themmoi"> Thêm Mới</button> 
									  	
									  </form> 
									  		 
									  		</div> 
									  	</div>
							    </div>
							</div>
</div>
 <?php 
 	include('view/footer.php');
  ?>
 <script type="text/javascript">
	function openNav() {
		document.getElementById("mySidenav").style.width = "250px";
	}

	function closeNav() {
		document.getElementById("mySidenav").style.width = "0";
	}
</script>