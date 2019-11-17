
<?php
	if(isset($_GET['action']))
	{
		$action = $_GET['action'];
	}
	else{
		$action = '';
	}
	
	switch ($action) {

		case 'chucnang':
			if(isset($_SESSION['email']))
				require_once('view/nhanvien/chucnang.php');
			else
				header('location: http://localhost/quanlybenhnhan/index.php?controller=nhanvien&action=dangnhap');
			break;
		case 'dangnhap':
		//$_SESSION['email'] = $email;
		//var_dump($_SESSION['email']); die();
		if(isset($_SESSION['email']) && isset($_SESSION['role']) && isset($_SESSION['password']) && isset($_SESSION['id']))
					{
						if($_SESSION['role']==2){
					header('location: http://localhost/quanlybenhnhan/index.php?controller=nhanvien&action=chucnang');
					}
					else
						$thatbai = 'error';

					}
			if(isset($_POST['dangnhap'])){
					$email = $_POST['email'];
					$password =md5($_POST['password']);
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
						if($result['role']==2){
							header('location: http://localhost/quanlybenhnhan/index.php?controller=nhanvien&action=chucnang');

						}

						else if($result['role']==4)
							header('location: http://localhost/quanlybenhnhan/index.php?controller=index&action=danhsachbenhnhan');
						elseif ($result['role']<>4&&$result['role']<>2) {
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
		case 'dangxuat':
				unset($_SESSION['email']);
				header('location: http://localhost/quanlybenhnhan/index.php?controller=nhanvien&action=dangnhap');
			break;
		case 'thembenhnhan':
			if(isset($_POST['themmoi'])){
				$HotenBN= $_POST['name'];
				$email=   $_POST['email'];
				$Gioitinh=$_POST['sex'];
				$Ngaysinh=$_POST['date'];
				$Nghenghiep=$_POST['nghengiep'];
				$Diachi=   $_POST['address'];
				$Dantoc=   $_POST['dantoc'];
				$Cmt=   $_POST['cmt'];
				if($db->Insert_benhnhan($HotenBN,$email,$Gioitinh,$Ngaysinh,$Nghenghiep,$Diachi,$Dantoc,$Cmt))
				{
					$thanhcong[]='add_success';
				}

			}
			require_once('view/nhanvien/thembenhnhan.php');
			break;
		case 'timbenhnhan':{

					if(isset($_GET['ten']))
					$key = $_GET['ten'];
					$tbltable = "benhnhan";
					
						$search = $db->search_benhnhan($key,$tbltable);
					//var_dump($search); die();

				}
			require_once("view/nhanvien/timbenhnhan.php");
			break;
		case 'danhsachbenhnhan':
				$tbltable = "benhnhan";
				$data = $db->get_all_benhnhan($tbltable);
			require_once('view/nhanvien/danhsachbenhnhan.php');

			break;
		case 'suabenhnhan':
					//lấy trên thanh địa chỉ ID
					if(isset($_GET['idBN']))
					{
						$idBN = $_GET['idBN'];
						//thực thi funtion lấy dữ liệu
						
						$data = $db->get_benhnhan_ID($idBN);
						//var_dump($data);die();
						//lay du liệu từ form
						if(isset($_POST['update'])){
							$HotenBN = $_POST['name'];
							$email = $_POST['email'];
							$Gioitinh = $_POST['sex'];
							$Ngaysinh = $_POST['date'];
							$Nghenghiep = $_POST['nghengiep'];
							$Diachi = $_POST['address'];
							$Dantoc = $_POST['dantoc'];
							//truyền model vào xử lí
							$result=$db->update_benhnhan($idBN,$HotenBN,$email,$Gioitinh,$Ngaysinh,$Nghenghiep,$Diachi,$Dantoc);
							//var_dump($result);die();
							if($result){
								header("location: http://localhost/quanlybenhnhan/index.php?controller=nhanvien&action=danhsachbenhnhan");
								}
							else 
								echo 'lỗi';
						}	
					}

			require_once('view/nhanvien/update.php');

			break;
		case 'xoabenhnhan':{
			
				if(isset($_GET['idBN']))
				{
					$idBN=$_GET['idBN'];
					//var_dump($idBN); die();
					if($db->delete_benhnhan($idBN)){
						header("location: http://localhost/quanlybenhnhan/index.php?controller=nhanvien&action=danhsachbenhnhan");
					}
					else echo'loi';
					}
				}	
			break;
		case 'xemlichkham':{
				$tbltable = "lichkham";
				$data_lichkham = $db->get_all_lichkham($tbltable);
			}
			require_once('view/nhanvien/xemlichkham.php');

			break;
		
		case 'capmaQR':
					
			require_once('view/nhanvien/capmaqr.php');
		break;			
			
		case 'xemcauhoi':
			# code...
			require_once('view/nhanvien/xemcauhoi.php');

			break;
		case 'xemthongtinbenhnhan':
			# code...
			require_once('view/nhanvien/list.php');

			break;
		
		default:
			# code...
			break;
	}

?>