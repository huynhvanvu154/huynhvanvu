
<html>
  <head>
    <title>Quan ly benh nhan</title>
    <link rel="shortcut icon" type="images/png" href="../view/images/favicon.png">
    <link rel="icon" type="image/png" href="favicon.png">
    <link rel="stylesheet" href="style.css">
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/webrtc-adapter/3.3.3/adapter.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/vue/2.1.10/vue.min.js"></script>
    <script type="text/javascript" src="https://rawgit.com/schmich/instascan-builds/master/instascan.min.js"></script>
    <script type="text/javascript" src="https://schmich.github.io/instascan/app.js"></script>
    <link rel="icon" href="img/favicon.ico" type="image/png">
    <link rel="stylesheet" href="libs/css/bootstrap.min.css">
    <link rel="stylesheet" href="libs/style.css">
    <script src="libs/navbarclock.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="style.css">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </head>
    <body>
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
    <legend style="font-size: 40px;color: #01a2df;">QUÉT MÃ QR</legend>
    <video id="preview" style="display: block; margin: auto; margin-bottom: 10px  "></video>
    <script type="text/javascript">
      let scanner = new Instascan.Scanner({ video: document.getElementById('preview') });
      scanner.addListener('scan', function (content) {
        console.log(content);
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
    <footer>
    <div class="footer row" style=" background-image: url('images/bg.png' ); text-align: center; border: 1px solid #e8e8e8; font-size: 15px; color: white">
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
