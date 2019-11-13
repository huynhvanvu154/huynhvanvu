<?php
    
	if(isset($_GET['action']))
	{
		$action = $_GET['action'];
	}
	else{
		$action = '';
	}
	$thanhcong=array();
	switch ($action) {
		case 'gioithieu':{

			require_once('view/gioithieu.php');
			break;
		}
		case 'tochuc':{
			
			require_once('view/tochuc.php');
			break;
		}
		case 'trangchu':
			require_once('view/trangchu.php');
			break;
		case 'danhsachbenhnhan':
		if(isset($_SESSION['email'])){
				$tbltable = "benhnhan";
				$data = $db->get_all_benhnhan($tbltable);
			require_once('view/bacsi/danhsachbenhnhan.php');
		}else
		header('location: http://localhost/quanlybenhnhan/index.php?controller=index&action=dangnhap');
			break;
		case 'thembenhan':
				if(isset($_GET['idBN'])&isset($_GET['ten']))
					{
						$id_benhnhan = $_GET['idBN'];
						$HotenBN =$_GET['ten'];
						///var_dump($sql); die();
						//echo "$id_benhnhan "; die(); 
						//var_dump($idBN); die();
						if(isset($_POST['themmoi']))
						{  
							$date = date("Y/m/d");
							/*$ngay_bat_dau = "1986-02-14";
							$hieu_so = abs(strtotime($date) - strtotime($ngay_bat_dau)); 
							$nam = floor($hieu_so / (365*60*60*24));  
							$thang = floor(($hieu_so - $nam * 365*60*60*24) / (30*60*60*24));  
							$ngay = floor(($hieu_so - $nam * 365*60*60*24 - $thang*30*60*60*24)/ (60*60*24));  
							  
							printf("%d năm, %d tháng, %d ngày", $nam, $thang, $ngay);*/
							//die();
							//var_dump($hieu_so); die();
							$ten_benh_an = $_POST['benhan'];
							//var_dump($ten_benh_an); die();
							$id_benhnhan = $id_benhnhan;
							//var_dump($id_benhnhan); die();
							if($db->thembenhan($ten_benh_an,$id_benhnhan,$date))
							{
								$thanhcong[]='add_success';
							}		
						}
					}
				require_once('view/bacsi/thembenhan.php');
				break;
		case 'danhsachbenhan':
			if(isset($_SESSION['email'])){
				$tbltable = "benhan";
				$data_benhan = $db->get_all_benhan($tbltable);
				if(isset($_POST['submit']))
				{
					$datefrom = $_POST['datefrom'];
					$dateto = $_POST['dateto'];
					// var_dump($dateto); die();
					if(!$datefrom||!$dateto)
						echo "điền đầy đủ thông tin";
					else{
						$resuft = $db->thongke($datefrom,$dateto);
						$tbltable = "benhan";
						$data_benhan = $db->thongke($datefrom,$dateto);
						//var_dump($resuft); die();
					}
				}
			require_once('view/bacsi/danhsachbenhan.php');
		}else
		header('location: http://localhost/quanlybenhnhan/index.php?controller=index&action=dangnhap');
			break;
		case 'themdonthuoc':
				
					
			//lấy trên thanh địa chỉ ID
				if(isset($_GET['ten'])&&isset($_GET['idBN']))
					{
						$tenbenhnhan = $_GET['ten'];
						$idBN = $_GET['idBN'];
						if(isset($_POST['themmoi']))
						{
							$tenthuoc = $_POST['tenthuoc'];
							$xuatxu =   $_POST['xuatxu'];
							$loidan =     $_POST['loidan'];
							$id_benhnhan = $idBN;
							//var_dump($id_benhnhan); die();
							if($db->themdonthuoc($tenthuoc,$xuatxu,$loidan,$id_benhnhan))
							{
								$thanhcong[]='add_success';
							}			
						}
					}
			require_once('view/bacsi/themdonthuoc.php');
			break;
		case 'danhsachdonthuoc':
			if(isset($_GET['ten'])&&isset($_GET['idBN']))
						
					{
						$tenbenhnhan = $_GET['ten'];
						$idBN = $_GET['idBN'];
						//var_dump($idBN); die();
						//var_dump($tenbenhnhan); die();
					$data_benhan = $db->get_benhan_ID($idBN);
					//var_dump($data_benhan); die();
					$data_donthuoc = $db->get_donthuoc_id_benhnhan($idBN);
					//var_dump($data_donthuoc); die();
				}
			require_once('view/bacsi/danhsachdonthuoc.php');
			break;
		case 'dangnhap':
		//$_SESSION['email'] = $email;
		//var_dump($_SESSION['email']); die();
		if(isset($_SESSION['email']) && isset($_SESSION['role']) && isset($_SESSION['password']) && isset($_SESSION['id']))
					{
						if($_SESSION['role']==4){
					header('location: http://localhost/quanlybenhnhan/index.php?controller=index&action=danhsachbenhnhan');
					}
					else
						$thatbai = 'error';
					}
			if(isset($_POST['dangnhap'])){
					$email = $_POST['email'];
					$password = $_POST['password'];
					if(!$email||!$password){
						echo 'vui long dien day du ten dang nhap va password';
						exit();
					}
					$result = $db->login($email,$password);
					//var_dump($result); die();
					if($db->login($email,$password))
					{
						//$_SESSION['email'] = $result['email'];
    					/*echo "Xin chào " . $_SESSION['email'].". Bạn đã đăng nhập thành công. <a href='/'>Về trang chủ</a>";
  						die();*/
  						$_SESSION['password'] = $result['password'];
  						$_SESSION['id'] = $result['id'];
  						$_SESSION['role']  = $result['role'];
  						$_SESSION['email'] = $result['email'];
						$thanhcong[]="add_success";
						if($result['role']==4){
							header('location: http://localhost/quanlybenhnhan/index.php?controller=index&action=danhsachbenhnhan');

						}
						else {
							$thatbai = 'error';
						}
						
					}
					 
					/*if($result){
							$_SESSION['login'] = $result;
							var_dump($_SESSION['login'] );die;
							header('location: http://localhost/quanlybenhnhan/index.php?controller=nhanvien&action=chucnang');
						}*/
				}
			require_once('view/dangnhap.php');
			break;
		case 'doimatkhau':
			//if(isset($_SESSION['password']))
			//var_dump($_SESSION['id']);
			//var_dump($_SESSION['role']);
			//var_dump($_SESSION['password']);
			//die();
		if(isset($_POST['changpass']))
		{	
			$id = $_SESSION['id'];	
			$pass_cu = md5($_POST['old_pass']);
			$new_pass = md5($_POST['new_pass']);
			$pass_re = md5($_POST['re_new_pass']);
			if($_SESSION['password']<>$pass_cu)
				$loi_1 = 'error';
				//echo "Mật Khẩu Cũ Không Chính Xác! Xin nhập lại!!!";
			elseif ($new_pass<>$pass_re) {
				$loi_2='error';
				//echo "Mật khẩu mới không khớp";
			}
			else{
				$result =$db->doimatkhau($new_pass,$id);
				//var_dump($result); die();
			}
		}
			require_once('view/doimatkhau.php');
			break;
		default:
			
			require_once('view/trangchu.php');
			break;
	}

 ?>