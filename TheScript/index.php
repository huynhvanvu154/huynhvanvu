<?php 
session_start();
/*var_dump($_SESSION['email']);
die();*/
if($_SESSION['email']){
require('config/config.php');

if(isset($_POST['submit'])) {
  $name = $_SESSION['email'];
  $avater = $_POST['avater'];
  $comment = $_POST['comment'];

  $query = "INSERT INTO comments (cmt_name, cmt_avater, cmt_body, cmt_date) ";
  $query .= "VALUES ('$name' , '$avater', '$comment', NOW())";

  $go = mysqli_query($con, $query);
  if(!$go) {
    die("Error connection" . mysqli_error($con));
  }
}

 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Commenting System</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="cool/animate.css">
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="custom.css">
</head>
<body>
   
      <div class=" header row">
          <div class="BVN col-4"><a  href="http://localhost/quanlybenhnhan/index.php?controller=nguoinha&action=trangchu"><img src="image/BVN.PNG" width="300" height="100"></a></div>
          <div class="QL col-8"><img src="image/ql.png" width="500" height="100px"></div>
          <div class="logo col-4">
            <div class="row">
              <div class="icon col-4"><img src="image/icon2.png" height="60px;"></div>
              <div class="hospital col-8"><img src="image/HPT.png"></div>
            </div>
          </div>
          <div class="name col-8">
            <div class="BN"><img src="image/BN.png"></div>
          </div>
      </div>
      <div class="menu-ngang  ">
                  <ul class="ngang row ">
                         <li class="col-md-3"><a href="http://localhost/quanlybenhnhan/index.php?controller=index&action=trangchu">TRANG CHỦ</a></li>
                        <li class="col-md-3"><a href="http://localhost/quanlybenhnhan/index.php?controller=index&action=gioithieu">GIỚI THIỆU</a></li>
                        <li class="col-md-3"><a href="http://localhost/quanlybenhnhan/index.php?controller=index&action=tochuc">TỔ CHỨC</a></li>
                      <li class="col-md-3"><a href="http://localhost/quanlybenhnhan/index.php?controller=nguoinha&action=dangky">ĐĂNG KÝ</a></li>
                  </ul>
      </div>
      <div class="row">
        <div class="menu-left col-3">
            <ul  class="doc row ">
              <li class="col-12">
                <div class="dropdown">
                       <a href="index.php?controller=nguoinha&action=dangnhap" class="btn btn-primary " style="width: 200px"> Bệnh Nhân</a>
                 </div>
              </li>
              <li class="col-12">
                <div class="dropdown">
                   <a href="index.php?controller=nhanvien&action=dangnhap" class="btn btn-primary "style="width: 200px"> Nhân Viên</a>
                 </div>
              </li>
              <li class="col-12">
                <div class="dropdown">
                   <a href="index.php?controller=index&action=dangnhap" class="btn btn-primary "style="width: 200px"> Bác Sĩ</a>
                 </div>
              </li>
              <li class="col-12">
                <div class="dropdown">
                        <a href="index.php?controller=admin&action=dangnhap" class="btn btn-primary "style="width: 200px"> Admin</a>
                    </div>  
              </li>
            </ul>
</div>

      <div class="right col-9">
       <legend>Hãy Điền Thắc Mắc Vào Bên Dưới</legend>
      <div class="col-lg-9 offset-lg-2 col-12 comment-main rounded">
        <form ation="" method="post">
        <div class="form-gtoup">
          <label>Giới Tính</label>
        <table width="100%" align="center">
          <tr>
          <td width="10%"><input type="radio" name="avater" value="boy.png" required><img src="image/boy.png" width="40"></td>
         <td width="10%"><input type="radio" name="avater" value="girl.png" required><img src="image/girl.png" width="40"></td>
        </tr>
        </table>
        </div>

        <div class="form-gtoup">
          <label>Nội Dung Thắc Mắc:</label>
        <textarea name="comment" class="form-control" rows="4"> </textarea>
        </div>
        <br>

        <button name="submit" type="submit" class="btn btn-primary btn-block"><b>Submit Comment</b></button>
        <br>
        </form>
      </div>
      <hr>
      <?php 
      $comments = mysqli_query($con, "SELECT * FROM comments ORDER BY cmt_id DESC");
      while($row = mysqli_fetch_assoc($comments)) {
        $name = $row['cmt_name'];
        $avater = $row['cmt_avater'];
        $body = $row['cmt_body'];
        $date = $row['cmt_date'];
        ?>        
    
      <div class="row">
        <div class="col-lg-9 offset-lg-2 col-12 comment-main rounded">
          <ul class="p-0">
            <li class="wow fadeInUp">
                <div class="row comment-box p-2 pt-4 pr-5">
                  <div class="col-lg-2 col-3 user-img text-center">
                    <img src="image/<?php echo $avater; ?>" class="main-cmt-img">
                  </div>
                  <div class="col-lg-10 col-9 user-comment bg-light rounded pb-1">
                       <div class="row">
                             <div class="col-lg-8 col-6 border-bottom pr-0">
                                <?php echo $body; ?></b></font></p>
                             </div>
                             <div class="col-lg-4 col-6 border-bottom">
                                <p class="w-100 p-2 m-0"><span class="float-right"><i class="fa fa-clock-o mr-1" aria-hidden="true"></i><?php echo $date; ?></span></p>
                             </div>
                       </div> 
                      <div class="user-comment-desc p-1 pl-2">
                          <p class="m-0 mr-2"><?php echo $name; ?></p>                  
                      </div>    
                  </div>
                </div>
            </li>
          </ul>
      </div>
    </div>
  

    <?php } ; ?>

<script src="cool/wow.min.js"></script>
              <script>
              new WOW().init();
              </script>
</div>
</div>

<div class="footer row">
            <div class="anhleft col-4">
              <a href=""><img src="image/banquyen.png" width="150px" height="100px"></a>
            </div>
            <div class="footer col-4">
              <p>
                NAME        : HUỲNH VĂN VŨ</br>
                CLASS       : DHHTTT10B</br>
                ID          : 14090071</br>
                NUMBER-PHONE: 0708070404</br>
              </p> 
            </div>
            <div class="anhright col-4">
              <a href=""><img src="image/banquyen.png" width="150px" height="100px"></a>
            </div>
</div>
</body>
</html>
<?php 
  }else{
    header('location: http://localhost/quanlybenhnhan/index.php?controller=nguoinha&action=dangnhap');
  }
 ?>