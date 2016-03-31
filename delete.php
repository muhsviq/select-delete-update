<?php

require "db.php";
$d=$_GET["zz"];
$delete = $conn->query("DELETE FROM ima WHERE id=$d");
if ($delete===TRUE) {
	header("Location:index.php");
	# code...
}