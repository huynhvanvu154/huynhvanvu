
<html>
<head>
  <title>Quan ly benh nhan</title>
  <link rel="shortcut icon" type="images/png" href="../view/images/favicon.png">
  <link rel="icon" type="image/png" href="favicon.png">
  <link rel="stylesheet" href="../style.css">
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/webrtc-adapter/3.3.3/adapter.min.js"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/vue/2.1.10/vue.min.js"></script>
  <script type="text/javascript" src="https://rawgit.com/schmich/instascan-builds/master/instascan.min.js"></script>
  <script type="text/javascript" src="https://schmich.github.io/instascan/app.js"></script>
  <link rel="icon" href="img/favicon.ico" type="image/png">
  <script src="libs/navbarclock.js"></script>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>


</head>
<body>
  <div class="container">
  <div class=" header row">
    <div class="BVN col-12 text-left">
      <a  href="http://localhost/quanlybenhnhan/index.php?controller=nguoinha&action=trangchu">
        <img src="images/icon2.png" height="60px;">
        <img src="images/BVN.PNG" width="200" height="80">
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
 <legend  style="font-size: 40px;color: #01a2df;">QUÉT MÃ QR</legend>
 <div class="row">
     <video id="preview" style="display: block; margin: auto; margin-bottom: 10px; max-width: 70% " class="col-12 "></video>
 </div>
 <script type="text/javascript">
  let scanner = new Instascan.Scanner({ video: document.getElementById('preview') });
  scanner.addListener('scan', function (content) {
        // console.log(content);
        location.href = content

      });
  Instascan.Camera.getCameras().then(function (cameras) {
    if (cameras.length > 0) {
      scanner.start(cameras[0]);
    } else {
      console.error('No cameras found.');
    }
  }).catch(function (e) {
    console.error(e);
  });
</script>


  </div>

</div>
<div class="container">
  <div class="footer row">
    <div class="anhleft anh col-12 col-lg-4">
      <a href="">
        <img src="images/banquyen.png" width="150px" height="100px">
      </a>
    </div>
    <div class="footer col-12 col-lg-4 p-0">
      <div class="row ">
        <div class="col-6 text-left">NAME        :</div>
        <div class="col-6 text-left">HUỲNH VĂN VŨ</div>
        <div class="col-6 text-left">CLASS        :</div>
        <div class="col-6 text-left">DHHTTT10B</div>
        <div class="col-6 text-left">ID        :</div>
        <div class="col-6 text-left">14090071</div>
        <div class="col-6 text-left">NUMBER-PHONE        :</div>
        <div class="col-6 text-left">0708070404</div>
      </div>
    </div>
    <div class="anhright anh col-12 col-lg-4">
      <a href="">
        <img src="images/banquyen.png" width="150px" height="100px">
      </a>
    </div>
</body>

</html>
