<?php
$server= "localhost";
$username = "root";
$password = "";
$schema = "img_gal";

$conn = new mysqli($server,$username,$password,$schema);
if ($conn->connect_error) {
	echo "error";
	# code...
}
else{
	echo "databaza qosuldu";
}

