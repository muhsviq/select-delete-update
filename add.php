<?php

require "db.php";
$ad=$_POST["ad"];
$yer=$_POST["yer"];
$insert=$conn->query("INSERT INTO ima (img_name,img_path) VALUES('$ad','$yer')");
if($insert===TRUE){
	header("Location:index.php");
}
else
echo "error";

?>
