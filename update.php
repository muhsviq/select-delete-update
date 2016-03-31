<?php
require "db.php"
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
	input{
		padding:10px;
	}
</style>
</head>
<body>
<form method="POST" action="change.php">
	
	<input type="text" placeholder=" $massiv->img_name" name="ad">
	<input type="text" placeholder="seklin yerlesdiyi yer" name="yer">
	<input type="submit">
</form>
</body>
</html>