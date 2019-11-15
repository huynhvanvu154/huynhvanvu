<?php 
	include('view/header.php');
	
 ?>
 <div class="menu-ngang " >
		<ul class="ngang row">
		    <li class="col-md-3" style=""><a href="http://localhost/quanlybenhnhan/index.php?controller=index&action=trangchu">TRANG CHỦ</a></li>
		    <li class="col-md-3"><a href="http://localhost/quanlybenhnhan/index.php?controller=index&action=gioithieu">GIỚI THIỆU</a></li>
		    <li class="col-md-3"><a href="http://localhost/quanlybenhnhan/index.php?controller=index&action=tochuc">TỔ CHỨC</a></li>
			<li class="col-md-3"><a href="http://localhost/quanlybenhnhan/index.php?controller=nguoinha&action=dangky">ĐĂNG KÝ</a></li>
		</ul>
</div>
 <div class="section row">
				<?php 
					include('view/menuleft.php');
				 ?>
				<div class="col-9">
					<div class="col-12 " >
						<img src="view/images/mohinh.jpg" width="1000">
					</div>
				</div>
		</div>
 <?php 
 	include('view/footer.php');
  ?>