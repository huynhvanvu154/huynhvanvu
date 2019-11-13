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
		
		case 'chucnang':
			if(isset($_SESSION['email']))
				require_once('view/nguoinha/chucnang.php');
			else
				header('location: http://localhost/quanlybenhnhan/index.php?controller=nguoinha&action=dangnhap');
			break;
			
		case 'dangky':{
			
				//lấy dữ liệu từ view
			if(isset($_POST['dangky'])){
				$name = $_POST['hoten'];
				$email = $_POST['email'];
				$password = md5($_POST['password']);
				$address = $_POST['address'];
				$birtday = $_POST['birtday'];
				$sex    = $_POST['sex'];
				$role   =  '3';
				$sdt = $_POST['sdt'];

			//truyền dữ liệu vào model để được xử lí
				
				if($db->Insert_db($name,$email,$password,$address,$birtday,$sex,$role,$sdt)){
					$thanhcong[] = 'add_success';
				}
				
				

			}
				require_once('view/dangky.php');
				break;

			}

		case 'dangnhap':{
				if(isset($_SESSION['email']) && isset($_SESSION['role']) && isset($_SESSION['password']) && isset($_SESSION['id']))
					{
						if($_SESSION['role'] == 3){
					header('location: http://localhost/quanlybenhnhan/index.php?controller=nguoinha&action=chucnang');
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
						if($result['role']==3){
							header('location: http://localhost/quanlybenhnhan/index.php?controller=nguoinha&action=chucnang');
						}
						else {
							$thatbai = 'error';
							}
					}
				}
				//var_dump($thanhcong); die();
			require_once('view/dangnhap.php');
			break;
		}
			case 'dangxuat':
					unset($_SESSION['email']);
				header('location: http://localhost/quanlybenhnhan/index.php?controller=nguoinha&action=dangnhap');
				break;
			
			case 'dangkykham':{

					if(isset($_POST['dangkylich'])){
						$name = $_POST['name'];
						$email = $_POST['email'];
						$cmt = 	$_POST['cmt'];
						$sdt = 	$_POST['sdt'];
						$date =	$_POST['date'];
						$sex = 	$_POST['sex'];
						
							if($db->datlichkham($name,$email,$cmt,$sdt,$date,$sex)){
							$thanhcong[] = 'add_success';
							}
					}
				require_once('view/nguoinha/dangkykham.php');
				break;
			}
			case 'danhsachbacsi':
			{
						$tbltable = "bacsi";
						$data_bacsi = $db->get_all_bacsi($tbltable);
			}
					require_once('view/nguoinha/danhsachbacsi.php');
					break;
			case 'timbacsi':{
					if(isset($_GET['name']))
						$key = $_GET['name'];
						$tbltable = "bacsi";
						$search = $db->search_bacsi($key,$tbltable);
				require_once('view/nguoinha/timbacsi.php');
				break;
			}
			case 'timbenhnhan':{

						if(isset($_GET['ten']))
							$key = $_GET['ten'];
							$tbltable = "benhnhan";
							
								$search = $db->search_benhnhan($key,$tbltable);
					//var_dump($search); die();

						require_once('view/nguoinha/timbenhnhan.php');
					break;
			}
			case 'guicauhoi':{
				if(isset($_SESSION['email'])){
					if(isset($_POST['guicauhoi'])){
						//$id_cauhoi = $_POST('$id_cauhoi');
						$tieude = $_POST['title'];
						$noidung = $_POST['noidung'];
						$email  = $_SESSION['email'];
							if ($db->guicauhoi(null,$tieude,$noidung,$email)) {
								$thanhcong[]='add_success';
							}
					}
					require_once('view/nguoinha/guicauhoi.php');
				}
				else
					exit();
				break;
				}
			case 'danhsachbenhnhan':
				$tbltable = "benhnhan";
				$data = $db->get_all_benhnhan($tbltable);
			require_once('view/nguoinha/danhsachbenhnhan.php');

			break;
			

		default:
			
			require_once('view/trangchu.php');
			break;
	}

 ?>