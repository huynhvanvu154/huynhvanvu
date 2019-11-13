<head>
    <title>Commenting System</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="The Script/cool/animate.css">
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="The Script/custom.css">
</head>
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

<div class="col-12">
	<?php 
		require('The Script/config/config.php');

		if(isset($_POST['submit'])) {
		  $name = $_POST['name'];
		  $avater = $_POST['avater'];
		  $comment = $_POST['comment'];

		  $sql = "INSERT INTO comments (cmt_name, cmt_avater, cmt_body, cmt_date)VALUES ('$name' , '$avater', '$comment', NOW())";
		 // var_dump($sql); die();
		  $go = mysqli_query($con, $sql);
		 // var_dump($go); die();
		  if(!$go) {
		    die("Error connection" . mysqli_error($con));
		  }
		}
		 ?>
      <div class="col-lg-9 offset-lg-2 col-12 comment-main rounded">
        <form ation="" method="post">
        <div class="form-gtoup">
          <label>Email</label>
        <input placeholder="Email" name="name" class="form-control" type="text" required>
        </div>

        <div class="form-gtoup">
          <label>Giới Tính</label>
        <table width="100%" align="center">
          <tr>
            <td width="10%">
              <input type="radio" name="avater" value="boy.png" required><img src="The Script/image/boy.png" width="40">
              <input type="radio" name="avater" value="girl.png" required><img src="The Script/image/girl.png" width="40">
            </td>
        </tr>
        </table>
        </div>

        <div class="form-gtoup">
          <label>Nội Dung:</label>
        <textarea style="height: 40px" name="comment" class="form-control" rows="8"> </textarea>
        </div>
        <br>

        <button name="submit" type="submit" class="btn btn-primary btn-block"><b>Submit Comment</b></button>
        <br>
        </form>
      </div>
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
                  <div class="col-12">
                       <div class="row">
                                <p class=""><font><b><?php echo $body; ?></b></font></p>
                       </div> 
                      <div class="row">
                      	<img src="The Script/image/<?php echo $avater; ?>" class="main-cmt-img" >
                          <p class="m-0 mr-2" style=""><?php echo $name; ?></p>
                      </div>    
                  </div>
                </div>
            </li>
          </ul>
      </div>
    </div>
     <?php } ; ?>
<script src="The Script/cool/wow.min.js"></script>
              <script>
              new WOW().init();
              </script>
</div>
</div>
   
