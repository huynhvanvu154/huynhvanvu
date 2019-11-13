<?php 
class Database 
		{
			private $hostname='localhost';
			private $username='root';
			private $password='';
			private $dbname='quanlybenhnhan';
			private $connect = NULL;
			private $result = NULL;
			public function connect_db()
			{
				$this->connect = new mysqli($this->hostname,$this->username,$this->password,$this->dbname);
				if(!$this->connect){
					echo 'ket noi that bai';

					exit();
				}else {

					mysqli_set_charset($this->connect,'utf8');
				}
				return $this->connect;
			}
			//thuc thi cau lenh truy van
			public function execute($sql)
				{
					$this->result = $this->connect ->query($sql);
					return $this->result;
				}
			
			//lay du lieu
			public function get_db()
			{
				if($this->result)
					{
						$data = mysqli_fetch_array($this->result);
					}
				else
					{	
						$data = 0;
					}
				return $data;
			}
			//lay du lieu
			public function get_db_nhanvien()
			{
				if($this->result)
					{
						$data_nhanvien = mysqli_fetch_array($this->result);
					}
				else
					{	
						$data_nhanvien = 0;
					}
				return $data_nhanvien;
			}
		//lay toan bo du lieu benh nhan
			public function get_all_benhnhan()
					{
						$sql = "SELECT * FROM  benhnhan";
						$e = $this ->execute($sql);
						if($this->num_rows()==0)
						{
								$data =0;
								echo '<p style="text-align: center; color: red; font-size: 200%">Danh sách trống</p>';
						}
						else
							{
								while($datas = $this->get_db())
								{
									$data[]=$datas;
								}	

							}
							return $data;
					}
		//phương thức lấy dữ liệu theo ID benh nhan
			public function get_benhnhan_ID($idBN)

			{
				$sql = "SELECT * FROM benhnhan WHERE idBN = $idBN ";
				
				$result = $this->execute($sql);
				if($this->num_rows()!=0)
					{
						$data = mysqli_fetch_assoc($result);
					}
				else
					{
						$data = 0;

					}
				return $data;
			}
			//phuong thuc đếm số bản ghi
			public function num_rows()
			{
				if($this->result)
				{
					$row = mysqli_num_rows($this->result);
        			
				}
				else{

					$row = 0;
				}

				return $row;
			}
			//model dang ky
			public function Insert_db($name,$email,$password,$address,$birtday,$sex,$role, $sdt)
			{
				$sql = "INSERT INTO user(id,name,email,password,address,birtday,sex,role,sdt) VALUES(null,'$name','$email','$password','$address','$birtday','$sex',$role,'$sdt')"; 
				/*var_dump($sql); 
				die()*/;
				
				if($this->execute($sql)){
					return true;
				}
				$result = mysqli_fetch_assoc($sql);
				//var_dump($result); die();
				if($result)
				header("http://localhost/quanlybenhnhan/index.php?controller=nguoinha&action=dangnhap");

				else
				echo "đăng ký thất bại";

			}
			//XỬ LÍ ĐĂNG NHẬP
			public function login($email,$password)
			{

				//ma hoa
				$password = md5($password);
				//kiem tra ten dang nhap co ton tai khong
				$sql = mysqli_query($this->connect,"SELECT * FROM user WHERE email = '$email' 
				AND password  = '$password' ");
				//var_dump($sql);die();
				if(mysqli_num_rows($sql) == 0)
				{
					echo "sai tài khoản mật khẩu";
					exit();
				} 
				else{
					$result = mysqli_fetch_assoc($sql);
					if ($result>0) {
						return $result;
					}
					else{
						echo "looi";
					}	
				}
					
			}
			//model them benh nhan
			public function Insert_benhnhan($HotenBN,$email,$Gioitinh,$Ngaysinh,$Nghenghiep,$diachi,$Dantoc,$Cmt)
			{
				$sql = "INSERT INTO benhnhan(idBN,HotenBN,email,Gioitinh,Ngaysinh,Nghenghiep,diachi,Dantoc,Cmt) VALUES(null,'$HotenBN','$email','$Gioitinh','$Ngaysinh','$Nghenghiep','$diachi','$Dantoc','$Cmt')"; 
				
				/*var_dump($sql); 
				die();*/


				if($this->execute($sql)){
					return true;
				}
				$result = mysqli_fetch_assoc($sql);
				//var_dump($result); die();
				
				if($result)
					header("http://localhost/quanlybenhnhan/index.php?controller=nguoinha&action=dangnhap");

				else
				echo "đăng ký thất bại";

			}
			public function logout()
			{
				unset($_SESSION[$name]);
				session_destroy();

				header("Location: 	http://localhost/quanlybenhnhan/index.php?controller=nguoinha&action=dangnhap");
				return true;
			}
			//sửa dữ liệu
			public function update_benhnhan($idBN,$HotenBN,$email,$Gioitinh,$Ngaysinh,$Nghenghiep,$Diachi,$Dantoc)
			{
				$sql = "UPDATE benhnhan SET HotenBN = '$HotenBN', email='$email', Gioitinh='$Gioitinh', Ngaysinh='$Ngaysinh', Nghenghiep='$Nghenghiep', Diachi='$Diachi', Dantoc='$Dantoc' WHERE (idBN = $idBN)";
				//var_dump($sql); die();
				return  $this->execute($sql);
			}
			//xoa du lieu
			public function delete_benhnhan($idBN)

			{
				$sql = "DELETE FROM benhnhan WHERE benhnhan.idBN = '$idBN'";
				
				//var_dump($sql);die();
				return $this->execute($sql);
				
			}
			public function search_benhnhan($key,$role)
				{
					$sql = "SELECT *FROM benhnhan WHERE HotenBN REGEXP '$key' ORDER BY idBN DESC  ";
					//var_dump($sql);die;
					$e = $this ->execute($sql);


					if($this->num_rows()==0)
					{

							$data =0;
							echo '';
					}

					else
						{
							while($datas = $this->get_db())
							{
								$data[]=$datas;
							}	
							if($data>0){
								return $data;
							} else{echo "";}
						
						
					}

				}
				
				public function datlichkham($name,$email,$cmt,$sdt,$date,$sex)
					{
						$sql = "INSERT INTO lichkham(id_lichkham,name,email,cmt,sdt,date,sex) VALUES (null,'$name','$email','$cmt','$sdt','$date','$sex')";
						//var_dump($sql);die();
						if($this->execute($sql)){
									return true;
								}
							$result = mysqli_fetch_assoc($sql);
								//var_dump($result); die();
								
								if($result)
									echo "đănng ký lịch thành công";

								else
								echo "đăng ký thất bại";

					}
					public function guicauhoi($id_cauhoi,$tieude,$noidung)
					{
					$sql = "INSERT INTO cauhoi(id_cauhoi,tieude,noidung) VALUES (null,'$tieude','$noidung') ";
						if($this->execute($sql)){
							return true;
						}
						//var_dump($sql);die();
						$result = mysqli_fetch_assoc($sql);
							if($result)
								echo '<p style = >gửi câu hỏi thành công! chờ nhân viên phản hồi! cảm ơn!</p>';
							else
								echo "thất bại";
					}
						//model dang ky
				public function Insert_nhanvien($name,$email,$password,$address,$birtday,$sex,$role, $sdt)
				{
					$sql = "INSERT INTO user(id,name,email,password,address,birtday,sex,role,sdt) VALUES(null,'$name','$email','$password','$address','$birtday',$sex,$role,$sdt)"; 
					//var_dump($sql); 
					//die();
					
					if($this->execute($sql)){
						return true;
					}
					$result = mysqli_fetch_assoc($sql);
					//var_dump($result); die();
					if($result)
						header("http://localhost/quanlybenhnhan/index.php?controller=nguoinha&action=dangnhap");

					else
					echo "đăng ký thất bại";

				}
				
				public function get_all_nhanvien()
					{

						$sql = "SELECT * FROM  user WHERE role = '2' ";
						//var_dump($sql);die();
						$e = $this ->execute($sql);

						
						if($this->num_rows()==0)
						{

								$data_nhanvien =0;
								echo '<p style="text-align: center; color: red; font-size: 200%">Danh sách trống</p>';
								//var_dump($data_nhanvien); die();
						}
						
						else
							{
								while($datas = $this->get_db_nhanvien())
								{
									$data_nhanvien[]=$datas;
								}	

							}
							return $data_nhanvien;

					}
					//phương thức lấy dữ liệu theo ID benh nhan
				public function get_nhanvien_ID($id)

				{
					$sql = "SELECT * FROM user WHERE id = '$id' ";
					//var_dump($sql);die();
					$result = $this->execute($sql);
					//var_dump($result);die();
					if($this->num_rows()!=0)
						{
							$data_nhanvien = mysqli_fetch_assoc($result);

							
						}
					else
						{
							$data_nhanvien = 0;

						}
					return $data_nhanvien;
				}
				//sửa dữ liệu
				public function update_nhanvien($id,$name,$email,$sex,$birtday,$address, $sdt)
				{
					$sql = "UPDATE user SET name = '$name', email='$email', sex='$sex', birtday='$birtday', address='$address', sdt = '$sdt'  WHERE (id = $id)";
					//var_dump($sql); die();
					return  $this->execute($sql);
				}
				//xoa du lieu
				public function delete_nhanvien($id)

				{
					$sql = "DELETE FROM user WHERE user.id = '$id'";
					
					//var_dump($sql);die();
					return $this->execute($sql);
					
				}
				public function search_nhanvien($key,$role)
				{
					$sql = "SELECT *FROM user WHERE role='2' AND name REGEXP '$key' ORDER BY id DESC  ";
					//var_dump($sql);die;
					$e = $this ->execute($sql);


					if($this->num_rows()==0)
					{

							$data_nhanvien =0;
							echo '';
					}

					else
						{
							while($datas = $this->get_db())
							{
								$data_nhanvien[]=$datas;
							}	

						}
						return $data_nhanvien;

				}
				
				public function Insert_bacsi($name,$email,$password,$address,$birtday,$sex,$role, $sdt)
				{
					$sql = "INSERT INTO user(id,name,email,password,address,birtday,sex,role,sdt) VALUES(null,'$name','$email','$password','$address','$birtday',$sex,$role,$sdt)"; 
					//var_dump($sql); 
					//die();
					
					if($this->execute($sql)){
						return true;
					}
					$result = mysqli_fetch_assoc($sql);
					//var_dump($result); die();
					if($result)
						header("http://localhost/quanlybenhnhan/index.php?controller=nguoinha&action=dangnhap");

					else
					echo "đăng ký thất bại";

				}
				public function get_all_bacsi($id)
					{
					$sql = "SELECT * FROM  user WHERE role = '4' ";
						//var_dump($sql);die();
						$e = $this ->execute($sql);

						
						if($this->num_rows()==0)
						{

								$data_bacsi =0;
								echo '<p style="text-align: center; color: red; font-size: 200%">Danh sách trống</p>';
								//var_dump($data_nhanvien); die();
						}
						
						else
							{
								while($datas = $this->get_db_nhanvien())
								{
									$data_bacsi[]=$datas;
								}	

							}
							return $data_bacsi;

					}
				public function get_bacsi_ID($id)

				{
					$sql = "SELECT * FROM user WHERE id = '$id' ";
					//var_dump($sql);die();
					$result = $this->execute($sql);
					//var_dump($result);die();
					if($this->num_rows()!=0)
						{
							$data_bacsi = mysqli_fetch_assoc($result);

							
						}
					else
						{
							$data_bacsi = 0;

						}
					return $data_bacsi;
				}
						//sửa dữ liệu
				public function update_bacsi($id,$name,$email,$sex,$birtday,$address, $sdt)
				{
					$sql = "UPDATE user SET name = '$name', email='$email', sex='$sex', birtday='$birtday', address='$address', sdt = '$sdt'  WHERE (id = $id)";
					//var_dump($sql); die();
					return  $this->execute($sql);
				}
				public function delete_bacsi($id)

				{
					$sql = "DELETE FROM user WHERE user.id = '$id'";
					
					//var_dump($sql);die();
					return $this->execute($sql);
					
				}
				public function search_bacsi($key,$role)
				{
					$sql = "SELECT *FROM user WHERE role='4' AND name REGEXP '$key' ORDER BY id DESC  ";
					//var_dump($sql);die;
					$e = $this ->execute($sql);


					if($this->num_rows()==0)
					{

							$data_bacsi =0;
							echo '';
					}

					else
						{
							while($datas = $this->get_db())
							{
								$data_bacsi[]=$datas;
							}	

						}
						return $data_bacsi;

				}
				//lay du lieu
			public function get_db_lichkham()
			{
				if($this->result)
					{
						$data_lichkham = mysqli_fetch_array($this->result);
					}
				else
					{	
						$data_lichkham = 0;
					}
				return $data_lichkham;
			}
				public function get_all_lichkham()
					{

						$sql = "SELECT * FROM  lichkham";
						//var_dump($sql);die();
						$e = $this ->execute($sql);

						
						if($this->num_rows()==0)
						{

								$data_lichkham =0;
								echo '<p style="text-align: center; color: red; font-size: 200%">Danh sách trống</p>';
								//var_dump($data_nhanvien); die();
						}
						
						else
							{
								while($datas = $this->get_db_nhanvien())
								{
									$data_lichkham[]=$datas;
								}	

							}
							return $data_lichkham;

					}
					public function thembenhan($ten_benh_an,$id_benhnhan,$date)
						{
							 
							$sql = "INSERT INTO benh_an(id_benh_an,ten_benh_an,id_benhnhan,date) VALUES(null,'$ten_benh_an','$id_benhnhan','$date')"; 
							
							/*var_dump($sql); 
							die();
*/
							if($this->execute($sql)){
								return true;
							}
							$result = mysqli_fetch_assoc($sql);
							//var_dump($result); die();
							
							if($result)
								header("");
							else
								echo "đăng ký thất bại";

						}
						//lay du lieu
						public function get_db_benhan()
						{
							if($this->result)
								{
									$data_benhan = mysqli_fetch_array($this->result);
								}
							else
								{	
									$data_benhan = 0;
								}
							return $data_benhan;
						}
						public function get_benhan_ID($idBN)

							{
							$sql = "SELECT ten_benh_an FROM benh_an WHERE id_benhnhan = '$idBN'";
								//var_dump($sql);die();
								$result = $this->execute($sql);
								//var_dump($result);die();
								if($this->num_rows()==0)
									{
										echo "";
									}

								else{
									//var_dump($data_benhan);die();
									
										while($datas = $this->get_db_benhan())
											{
												$data_benhan[]=$datas;
											}
										if($data_benhan>0){	
										return $data_benhan;
									}
									else{ echo "";}

								}
									
							}
						public function get_all_benhan()
							{

								$sql = "SELECT * FROM  benh_an";
								//var_dump($sql);die();
								$e = $this ->execute($sql);
								if($this->num_rows()==0)
								{

										$data_benhan =0;
										echo '<p style="text-align: center; color: red; font-size: 200%">Danh sách trống</p>';
										//var_dump($data_nhanvien); die();
								}
								else
									{
										while($datas = $this->get_db_benhan())
										{
											$data_benhan[]=$datas;
										}	

									}
									return $data_benhan;

							}
				public function thongke($datefrom,$dateto)
					{
						$sql = "SELECT *FROM benh_an WHERE date BETWEEN '$datefrom' AND '$dateto'";
						//var_dump($sql); die();
						$e = $this->execute($sql);
						//var_dump($result); die();
						//var_dump($result); die();
						if($this->num_rows()==0)
							{
									$data_benhan =0;
									echo '<p style="text-align: center; color: red; font-size: 200%">Danh sách trống</p>';
									//var_dump($data_nhanvien); die();
							}
							else
								{
									while($datas = $this->get_db_benhan())
									{
										$data_benhan[]=$datas;
									}	
								}
								//var_dump($data_benhan); die();
								return $data_benhan;
							}
				public function themdonthuoc($tenthuoc,$xuatxu,$loidan,$id_benhnhan)
						{
							$sql = "INSERT INTO donthuoc(id_donthuoc,tenthuoc,xuatxu,loidan,id_benhnhan) VALUES(null,'$tenthuoc','$xuatxu','$loidan','$id_benhnhan')";
							//var_dump($sql); die();
							if($this->execute($sql)){
								return true;
							}
							$result = mysqli_fetch_assoc($sql);
							//var_dump($result); die();
							
							if($result)
								header("");
							else
								echo "đăng ký thất bại";
					}
				public function get_db_donthuoc()
				{
							if($this->result)
								{
									$data_donthuoc = mysqli_fetch_array($this->result);
								}
							else
								{	
									$data_donthuoc = 0;
								}
							return $data_donthuoc;
				}
				public function get_donthuoc_id_benhnhan($idBN)

							{
								$sql = "SELECT * FROM donthuoc WHERE id_benhnhan = $idBN ";
								//var_dump($sql);die();
								$result = $this->execute($sql);
								//var_dump($result);die();
								if($this->num_rows()==0)
									{
										echo "";	
									}
								else{
										while($datas = $this->get_db_donthuoc())
										{
											$data_donthuoc[]=$datas;
										}	
										if($data_donthuoc>0){
										return $data_donthuoc;
									}else echo "Chưa Có Đơn Thuốc";
									//var_dump($data_donthuoc);die();
							}	
						}
				public function doimatkhau($new_pass,$id)
				{
					$new_pass = md5($new_pass); // Mã hoá mật khẩu sang MD5
				    // Lệnh SQL đổi mật khẩu
				    $sql = "UPDATE user SET password = '$new_pass' WHERE id = '$id'";
				    // Thực hiện truy vấn
				    if($this->execute($sql)){
				    // Hiển thị thông báo và tải lại trang
				    echo 'Đổi mật khẩu thành công';
				    }
				}
			}
 ?>