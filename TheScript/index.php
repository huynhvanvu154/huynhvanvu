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
    <link rel="shortcut icon" type="images/png" href="view/images/favicon.png">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <link rel="stylesheet" type="text/css" href="../style.css">
  </head>
  <body>
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
                <a class="nav-link" href="http://localhost/quanlybenhnhan/index.php?controller=nhanvien&action=dangxuat"  > ĐĂNG XUẤT</a>
              </li>
              <li class="nav-item active">
                <a class="nav-link" href="http://localhost/quanlybenhnhan/index.php?controller=index&action=doimatkhau"  > ĐỔI MẬT KHẨU</a>
              </li>
              <li class="nav-item active  d-block d-sm-block d-md-block d-lg-none" >
                <a  class="nav-link" href="#" onclick="openNav()">VAI TRÒ</a>
              </li>
            </ul>   
          </div>
        </nav>
      </div>
    </div>
  </div>
  <div class="container">
    <div class="row">
      <div class="col-12  menu-left col-lg-3  p-0">
       <ul  class="doc d-none d-sm-none d-md-none d-lg-block">
        <li class="col-12">
          <div class="dropdown div-li-menu-left">
            <a href="http://localhost/quanlybenhnhan/index.php?controller=nguoinha&action=dangnhap" class="btn btn-primary " > Bệnh Nhân
            </a>
          </div>
        </li>
        <li class="col-12">
          <div class="dropdown div-li-menu-left">
            <a href="http://localhost/quanlybenhnhan/index.php?controller=nhanvien&action=dangnhap" class="btn btn-primary "> Nhân Viên
            </a>
          </div>
        </li>
        <li class="col-12">
          <div class="dropdown div-li-menu-left">
            <a href="http://localhost/quanlybenhnhan/index.php?controller=index&action=dangnhap" class="btn btn-primary ">
              Bác Sĩ
            </a>
          </div>
        </li>
        <li class="col-12">
          <div class="dropdown div-li-menu-left">
            <a href="http://localhost/quanlybenhnhan/index.php?controller=admin&action=dangnhap" class="btn btn-primary ">
            Admin</a>
          </div>  
        </li>
      </ul>
    </div>
    <div class="col-12 col-lg-9 menu-right ">
      <ul  class="section row" >
        <div class="col-12">
        
         <div class="col-lg-9 offset-lg-2 col-12 comment-main rounded" style="margin-top: 10px ">
           <legend>Hãy Điền Thắc Mắc Vào Bên Dưới</legend>
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
<div class="container">
  <div class="footer row">
    <img src="../view/images/footer.png">
  </div>
</div>
</body>
</html>
<?php 
}else{
  header('location: http://localhost/quanlybenhnhan/index.php?controller=nguoinha&action=dangnhap');
}
?>
<script type="text/javascript">
  function openNav() {
    document.getElementById("mySidenav").style.width = "250px";
  }

  function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
  }
</script>