<?php
require "db.php";

?>
<!DOCTYPE html>
<html>
<head>
<style type="text/css">
	table td{
		border:1px solid black;
		padding:10px;
		width: 70px;
		
	}
	table{
		border-collapse: collapse;
	}
</style>
	<title></title>
</head>
<body>
<a href="create.php"> Sekil elave etmek ucun bura tikla</a>
<form>
<?php
$select = $conn->query("SELECT * FROM ima ");

while ($massiv = $select->fetch_object()) {

	echo "<table><tr><td>$massiv->img_name</td><td>$massiv->img_path</td><td><a href='delete.php?zz=$massiv->id'>DELETE</a></td><td><a href='update.php?zz=$massiv->id'>UPDATE</a></td></tr></table>";
	# code...
}
?>

	<input type="file">
	
</form>
</body>
</html> 