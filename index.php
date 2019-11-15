<!DOCTYPE >
<html>
<head>
	<title>quan-ly-benh-nhan-nhi</title>
	<link rel="shortcut icon" type="images/png" href="view/images/favicon.png">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	<link rel="stylesheet" type="text/css" href="style.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">

</head>
<body >

</body>

</html>
 <?php 
 session_start();
	include("model/index.php");
	$db = new Database;
	$db -> connect_db();
	if(isset($_GET['controller'])){
		$controller = $_GET['controller'];
	}
	else{
		$controller='';
	}
	switch ($controller) {
		case 'nguoinha':
			require_once('controller/nguoinha/index.php');
			break;
		case 'nhanvien':
			# code...
			require_once('controller/nhanvien/index.php');
			break;
		case 'admin':
				# code...
		require_once('controller/admin/index.php');
				break;
		case 'index':
			# code...
		require_once('controller/index.php');
			break;
		default:
			# code...
			break;
	}
?>