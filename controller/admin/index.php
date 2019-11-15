
<?php


	if(isset($_GET['action']))
	{
		$action = $_GET['action'];
	}
	else{
		$action = '';
	}
	switch ($action) {
		case 'dangnhap':
		if(isset($_SESSION['email']) && isset($_SESSION['role']) && isset($_SESSION['password']) && isset($_SESSION['id']))
					{
						//var_dump($_SESSION['role']); die();
					if($_SESSION['role'] == 1){
					header('location: http://localhost/quanlybenhnhan/index.php?controller=admin&action=chucnang');
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
					if($db->login($email,$password))
					{
						$_SESSION['password'] = $result['password'];
  						$_SESSION['id'] = $result['id'];
  						$_SESSION['role']  = $result['role'];
  						$_SESSION['email'] = $result['email'];
						$thanhcong[]='add_success';
						if($result['role']==1){
							header('location: http://localhost/quanlybenhnhan/index.php?controller=admin&action=chucnang');
							}
						else if ($result['role']<>1) {
							$thatbai = 'error';
							}
					}
				}
			require_once('view/dangnhap.php');
			break;
		case 'dangxuat':{
				unset($_SESSION['email']);
				header('location: http://localhost/quanlybenhnhan/index.php?controller=admin&action=dangnhap');
					}
			break;
		case 'chucnang':{
			if(isset($_SESSION['email']))
				require_once('view/admin/chucnang.php');
				
			else
				header("Location: http://localhost/quanlybenhnhan/index.php?controller=admin&action=dangnhap");
			}
			break;
				
		
			case 'themnhanvien':{
			
				//lấy dữ liệu từ view
				if(isset($_POST['dangky'])){
					$name = $_POST['hoten'];
					$email = $_POST['email'];
					$password = md5($_POST['password']);
					$address = $_POST['address'];
					$birtday = $_POST['birtday'];
					$sex    = $_POST['sex'];
					$role   =  '2';
					$sdt = $_POST['sdt'];

				//truyền dữ liệu vào model để được xử lí
				
					if($db->Insert_db($name,$email,$password,$address,$birtday,$sex,$role, $sdt)){
						$thanhcong[] = 'add_success';
					}
				}
					require_once('view/admin/themnhanvien.php');
					break;
			}
			require_once('view/admin/themnhanvien.php');
			break;
			case 'danhsachnhanvien':{
						$tbltable = "user";
						$data_nhanvien = $db->get_all_nhanvien($tbltable);
				}
				require_once('view/admin/danhsachnhanvien.php');
				break;
			case 'xoanhanvien':
				
				if(isset($_GET['id']))
				{
					$id=$_GET['id'];
					//var_dump($idBN); die();
					if($db->delete_nhanvien($id)){
						header("location: http://localhost/quanlybenhnhan/index.php?controller=admin&action=danhsachnhanvien");
					}
					else echo'loi';
					}
			
				
			break;

			
			case 'suanhanvien':
			
			
					//lấy trên thanh địa chỉ ID
					if(isset($_GET['id']))
					{
						$id = $_GET['id'];
						//thực thi funtion lấy dữ liệu
						
						$data_nhanvien = $db->get_nhanvien_ID($id);
						//var_dump($data);die();
						//lay du liệu từ form
						if(isset($_POST['update'])){
							$name = $_POST['name'];
							$email = $_POST['email'];
							$sex = $_POST['sex'];
							$birtday = $_POST['birtday'];
						
							$address = $_POST['address'];
							$sdt = $_POST['sdt'];
							//truyền model vào xử lí
							$result=$db->update_nhanvien($id,$name,$email,$sex,$birtday,$address, $sdt);
							//var_dump($result);die();


							if($result){

								

								header("location: http://localhost/quanlybenhnhan/index.php?controller=admin&action=danhsachnhanvien");

								}
							else 
								echo 'lỗi';
						}	

						
						require_once('view/admin/suanhanvien.php');
						break;
					
						
					}
				case 'timnhanvien':
					if(isset($_GET['name']))
							$key = $_GET['name'];
							$tbltable = "user";
							
								$search = $db->search_nhanvien($key,$tbltable);
						require_once('view/admin/timnhanvien.php');
						break;
				case 'thembacsi':
						//lấy dữ liệu từ view
							if(isset($_POST['dangky'])){
							$name = $_POST['hoten'];
							$email = $_POST['email'];
							$password = md5($_POST['password']);
							$address = $_POST['address'];
							$birtday = $_POST['birtday'];
							$sex    = $_POST['sex'];
							$role   =  '4';
							$sdt = $_POST['sdt'];

						//truyền dữ liệu vào model để được xử lí
						
							if($db->Insert_db($name,$email,$password,$address,$birtday,$sex,$role, $sdt)){
								$thanhcong[] = 'add_success';
								}
							}
						require_once('view/admin/thembacsi.php');
						break;

				case 'danhsachbacsi':
				{
						$tbltable = "user";
						$data_bacsi = $db->get_all_bacsi($tbltable);
				}
							require_once('view/admin/danhsachbacsi.php');
							break;
				case 'suabacsi':
								
					
					//lấy trên thanh địa chỉ ID
					if(isset($_GET['id']))
					{
						$id = $_GET['id'];
						//thực thi funtion lấy dữ liệu
						
						$data_bacsi = $db->get_bacsi_ID($id);
						//var_dump($data);die();
						//lay du liệu từ form
						if(isset($_POST['update'])){
							$name = $_POST['name'];
							$email = $_POST['email'];
							$sex = $_POST['sex'];
							$birtday = $_POST['birtday'];
						
							$address = $_POST['address'];
							$sdt = $_POST['sdt'];
							
							//truyền model vào xử lí
							$result=$db->update_bacsi($id,$name,$email,$sex,$birtday,$address,$sdt);
							//var_dump($result);die();


							if($result){

								

								header("location: http://localhost/quanlybenhnhan/index.php?controller=admin&action=danhsachbacsi");

								}
							else 
								echo 'lỗi';
						}	

						
						require_once('view/admin/suabacsi.php');
						break;
					
						
					}
									
		case 'xoabacsi':
				
				if(isset($_GET['id']))
				{
					$id=$_GET['id'];
					//var_dump($idBN); die();
					if($db->delete_bacsi($id)){
						header("location: http://localhost/quanlybenhnhan/index.php?controller=admin&action=danhsachbacsi");
					}
					else echo'loi';
					}
			
				
			break;
		case 'timbacsi':
						if(isset($_GET['name']))
							$key = $_GET['name'];
							$tbltable = "user";
							
							$search = $db->search_bacsi($key,$tbltable);
						require_once('view/admin/timbacsi.php');
						break;

				case 'thongkebenhan':
				
			require_once('view/admin/thongkebenhan.php');
			break;
				
		default:
			# code...
			break;
	}

?>