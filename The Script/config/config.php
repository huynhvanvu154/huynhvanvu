<?php 
$timezone = date_default_timezone_set("Europe/London");

$servername  = "localhost"; // Database host name.
$username = "root"; // Database username.
$password  = "";// Database password.
$database  = "quanlybenhnhan";// Database name.
    

foreach($db as $key=>$value) {
    define(strtoupper($key), $value);
}

$con = mysqli_connect($servername , $username, $password, $database);

if($con) {
    //echo "We are Conneceted";
}
else {
    die("Unable to connect to database" . mysqli_error());
}










?>