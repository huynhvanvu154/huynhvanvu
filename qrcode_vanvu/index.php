<?php
$conn = mysqli_connect('localhost', 'root', '', 'quanlybenhnhan') or die ('Không thể kết nối tới database');
	//var_dump($conn); die();
$sql = 'SELECT *FROM benhnhan';
$result = mysqli_query($conn, $sql);
if(!$result)
{
	echo "cau truy van sai";
}
$row = mysqli_fetch_assoc($result);

include('libs/phpqrcode/qrlib.php'); 

function getUsernameFromEmail($email) {
	$find = '@';
	$pos = strpos($email, $find);
	$username = substr($email, 0, $pos);
	return $username;
}


?>
<!DOCTYPE html>
<html lang="en-US">
<head>
	<title></title>
	<link rel="stylesheet" href="libs/style.css">
	<link rel="stylesheet" type="text/css" href="../style.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<link rel="shortcut icon" type="images/png" href="view/images/favicon.png">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	<link rel="stylesheet" type="text/css" href="../style.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">

</head>
<body >
	<div class="container">
	<div class=" header row">
		<div class=" col-12 text-left">
			<a  href="http://localhost/quanlybenhnhan/index.php?controller=nguoinha&action=trangchu">
				<img src="../view/images/header.png"  >
			</a>
		</div>
	</div>
</div>
	<div class="container">
	<div class="row">
		<div class="col-12 p-0">
			<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
				<!-- <a class="navbar-brand" href="#">BNV</a> -->
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample03" aria-controls="navbarsExample03" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>

				<div class="collapse navbar-collapse" id="navbarsExample03">
					<ul class="navbar-nav mr-auto nav-custom six">
						<li class="nav-item active">
							<a  class="nav-link" href="http://localhost/quanlybenhnhan/index.php?controller=index&action=trangchu">TRANG CHỦ</a>
						</li>
						<li class="nav-item active">
							<a  class="nav-link"  href="http://localhost/quanlybenhnhan/index.php?controller=index&action=gioithieu">GIỚI THIỆU</a>
						</li>
						<li class="nav-item active">

							<a class="nav-link" href="http://localhost/quanlybenhnhan/index.php?controller=index&action=tochuc">TỔ CHỨC</a>
						</li>
						<li class="nav-item active">
							<a  class="nav-link" href="http://localhost/quanlybenhnhan/index.php?controller=nguoinha&action=dangky">ĐĂNG KÝ</a>
						</li>
						<li class="nav-item active">
							<a class="nav-link" href="http://localhost/quanlybenhnhan/index.php?controller=nguoinha&action=dangxuat"  > ĐĂNG XUẤT</a>
						</li>
						<li class="nav-item active">
							<a class="nav-link" href="http://localhost/quanlybenhnhan/index.php?controller=index&action=doimatkhau"  > ĐỔI MẬT KHẨU</a>
						</li>
						<li class="nav-item active  d-block d-sm-block d-md-block d-lg-none" >
							<a  class="nav-link" href="#" onclick="openNav()">VAI TRÒ</a>
						</li>
					</ul>						

				</ul>
			</div>
		</nav>
	</div>
</div>
</div>
<div class="container">
	<div class="row">
		<div class="col-12  menu-left col-lg-3  p-0">
			<?php 
			include('../view/menuleft.php');
			?>
		</div>
		<div class="col-12 section col-lg-9">
		<div class="">
			<h3 style="    font-size: 23px; text-align: center;"><strong style="color: #0000FF">QRCODE THÔNG TIN BỆNH NHÂN</strong></h3>
			<div class="row">
				<div class="col-12 col-md-6">
					<div class=" col-md-12">
						<div class="form-group" >
							<a class="btn btn-primary submitBtn" name="danhsach" style="width: 20em" href="http://localhost/quanlybenhnhan/index.php?controller=nhanvien&action=danhsachbenhnhan">DANH SÁCH BỆNH NHÂN</a>
						</div>
						<h3 style="text-align: left;">THÔNG TIN BỆNH NHÂN</h3>

						<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" >
							<div class="form-group">

								<input type="text" class="form-control" name="name" style="width:20em;" placeholder="Tên Bệnh Nhân" />
							</div>
							<div class="form-group">

								<input type="email" class="form-control" name="email" style="width:20em;" placeholder="Email Bệnh Nhân"  />
							</div>
							<div class="form-group">

								<input type="text" class="form-control" name="sex" style="width:20em;"  placeholder= "Nhập Giới Tính" >
							</div>
							<div class="form-group">

								<input type="text" class="form-control" name="date" style="width:20em;"  placeholder= "Ngày Tháng Năm Sinh" >
							</div>
							<div class="form-group">

								<input type="text" class="form-control" name="nghenghiep" style="width:20em;"  placeholder= "Nghề Nghiệp" >
							</div>
							<div class="form-group">

								<input type="text" class="form-control" name="address" style="width:20em;"  placeholder= "Địa Chỉ" >
							</div>
							<div class="form-group">

								<input type="text" class="form-control" name="dantoc" style="width:20em;"  placeholder= "Dân Tộc" >
							</div>
							<div class="form-group">

								<input type="text" class="form-control" name="cmt" style="width:20em;"  placeholder= "Chứng Minh Nhân Dân" >
							</div>
							<div class="form-group">
								<input type="submit" name="submit" value="Lưu" class="btn btn-primary submitBtn" style="width:20em; margin:0;" />
							</div>

						</form>
					</div>

					<?php 
					if(isset($_POST['submit']) )
					{
						$tempDir = 'temp/';
						$HotenBN= $_POST['name'];
						$email=   $_POST['email'];
						$Gioitinh=$_POST['sex'];
						$Ngaysinh=$_POST['date'];
						$Nghenghiep=$_POST['nghenghiep'];
						$Diachi=   $_POST['address'];
						$Dantoc=   $_POST['dantoc'];
						$Cmt=   $_POST['cmt']; 
						$filename = getUsernameFromEmail($email);
						$body =  $_POST['cmt'];
						$sql = "INSERT INTO benhnhan(idBN,HotenBN,email,Gioitinh,Ngaysinh,Nghenghiep,Diachi,Dantoc,Cmt) VALUES(null,'$HotenBN','$email','$Gioitinh','$Ngaysinh','$Nghenghiep','$Diachi','$Dantoc','$Cmt')";

					//	var_dump($sql); die();
						$codeContents = 'mailto:'.$email.'?HotenBN='.$HotenBN.'&Cmt='.$Cmt.'&Gioitinh='.$Gioitinh.'&Ngaysinh='.$Ngaysinh.'&Nghenghiep='.$Nghenghiep.'&Diachi='.$Diachi.'&Dantoc='.$Dantoc;
						//var_dump($codeContents); die();
						if ($conn->query($sql) == TRUE) {
							$thanhcong[]='add_success';
							$id = mysqli_insert_id($conn);
							$codeContents = "http://localhost/quanlybenhnhan/index.php?controller=index&action=danhsachdonthuoc&idBN=".$id."&ten=".$HotenBN;
							QRcode::png($codeContents, $tempDir.''.$filename.'.png', QR_ECLEVEL_L, 5); 
						} else {
							echo "Error: " . $sql . "<br>" . $conn->error;
						}
					}
					if(isset($thanhcong)&&in_array('add_success', $thanhcong)){
						echo '<p><b style ="color: red; margin-left:45px; " class="col-12">Thêm nhân viên thành công</b></p>';
					}else{
						echo '<p style ="color: red"; "text-align: center" > </p>';
					}								
					?>

				</div>
				<?php
				if(!isset($filename)){
					$filename = "author";
				}
				?>
				<div class="col-12 col-md-6">
					<div class=" col-md-12">
						<h2 style="text-align:center">QR Code Result: </h2>
						<center>
							<div class="qrframe" style="border:2px solid black; ">
								<div><?php echo '<img src="temp/'. @$filename.'.png"><br>'; ?></div>
							</div>
							<div class="form-group" style="padding-top: 10px">
								<a class="btn btn-primary submitBtn" style="" href="download.php?file=<?php echo $filename; ?>.png ">Download QR Code</a>
								<a class="btn btn-primary submitBtn"  href="http://localhost/quanlybenhnhan/qrcode_vanvu/readqr.php" class="no-print" >Đọc mã QR</a> 
							</div>
						</center>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
</div>
<div class="container">
	<div class="footer row">
		<img src="../view/images/footer.png">
	</div>
</div>
<script type="text/javascript">
	function openNav() {
		document.getElementById("mySidenav").style.width = "250px";
	}

	function closeNav() {
		document.getElementById("mySidenav").style.width = "0";
	}
</script>
</body>

</html>