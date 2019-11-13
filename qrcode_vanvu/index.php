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
		<link rel="icon" href="img/favicon.ico" type="image/png">
		<link rel="stylesheet" href="libs/css/bootstrap.min.css">
		<link rel="stylesheet" href="libs/style.css">
		<script src="libs/navbarclock.js"></script>
		<title>quan-ly-benh-nhan-nhi</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
		<link rel="stylesheet" type="text/css" href="style.css">
		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
		
	</head>
	<body  style="font-family: inherit;  font-size: 13px">
		<div class="header row" style="height: 180px; background-image: url('images/bg.png' ); text-align: center; border: 1px solid #e8e8e8;">
			<div class="BVN col-4"><a  href="http://localhost/quanlybenhnhan/index.php?controller=nguoinha&action=trangchu"><img src="images/BVN.PNG" width="300" height="100"></a></div>
			<div class="QL col-8"><img src="images/ql.png" width="500" height="100px"></div>
			<div class="logo col-4">
				<div class="row">
					<div class="icon col-4"><img src="images/icon2.png" height="60px;"></div>
					<div class="hospital col-8">hospital</div>
				</div>
			</div>
			<div class="name col-8">
				<div class="BN"><h3 style="font-size: 35px">BỆNH NHÂN NHI TRONG BỆNH VIỆN</h3></div>
			</div>	
		</div>
		<div class="myoutput" style="height: auto; margin-bottom: 10px;margin-top: 10px">
			<h3 style="    font-size: 23px; margin-left: 63px;"><strong style="color: #0000FF">QRCODE THÔNG TIN BỆNH NHÂN</strong><a class="btn btn-primary submitBtn"  href="http://localhost/quanlybenhnhan/qrcode_vanvu/readqr.php" class="no-print" style="float: right;">Đọc mã QR</a> </h3>

			<div class="input-field" style="">
				<div class="form-group" >
						<a class="btn btn-primary submitBtn" name="danhsach" style="width: 20em" href="http://localhost/quanlybenhnhan/index.php?controller=nhanvien&action=danhsachbenhnhan">DANH SÁCH BỆNH NHÂN</a>
					</div>
				<h3 style="margin-right: 11px;">THÔNG TIN BỆNH NHÂN</h3>

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
		//$idBN = $value['idBN'];
		//var_dump($idBN);
		//die();
		//var_dump($sql); die(); 

		$codeContents = 'mailto:'.$email.'?HotenBN='.$HotenBN.'&Cmt='.$Cmt.'&Gioitinh='.$Gioitinh.'&Ngaysinh='.$Ngaysinh.'&Nghenghiep='.$Nghenghiep.'&Diachi='.$Diachi.'&Dantoc='.$Dantoc; 
		//var_dump($codeContents); die();
		QRcode::png($codeContents, $tempDir.''.$filename.'.png', QR_ECLEVEL_L, 5);
	    if ($conn->query($sql) === TRUE) {
	        
					$thanhcong[]='add_success';
				
	    } else {
	        echo "Error: " . $sql . "<br>" . $conn->error;
	    }
		}
		if(isset($thanhcong)&&in_array('add_success', $thanhcong)){
		echo '<p style="margin-top: 30px;"><b style ="color: red; text-align: center; ">Thêm nhân viên thành công</b></p>';
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
			<div class="qr-field">
				<h2 style="text-align:center">QR Code Result: </h2>
				<center>
					<div class="qrframe" style="border:2px solid black; ">
						<div><?php echo '<img src="temp/'. @$filename.'.png"><br>'; ?></div>
					</div>
					<div class="form-group" style="padding-top: 10px">
						<a class="btn btn-primary submitBtn" style="" href="download.php?file=<?php echo $filename; ?>.png ">Download QR Code</a>
					</div>
				</center>
			</div>
		</div>
		<footer>
		<div class="footer row" style=" background-image: url('images/bg.png' ); text-align: center; border: 1px solid #e8e8e8;">
				<div class="anhleft col-4">
					<a href=""><img src="images/banquyen.png" width="150px" height="100px"></a>
				</div>
				<div class="footer col-4" style="margin-top: 10px;">
					<p>
						NAME        : HUỲNH VĂN VŨ</br>
						CLASS       : DHHTTT10B</br>
						ID          : 14090071</br>
						NUMBER-PHONE: 0708070404</br>
					</p> 
				</div>
				<div class="anhright col-4">
					<a href=""><img src="images/banquyen.png" width="150px" height="100px"></a>
				</div>
			</div>
		</footer>
	</body>
	
</html>