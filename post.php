
<?php 
if (isset($_POST['btnPost'])) {
	$img = $_FILES['txt1'];
	$path = $img['name'];
	//$ext = 'jpg';
	$ext = pathinfo($path, PATHINFO_EXTENTION);
	$rand = str_pad(mt_rand(0, 999999), 6, '0' , STR_PAD_LEFT);
	$newName = time().'-'.$rand;
	$newFile = $newName.'.'.$ext;
	move_uploaded_file($img['tmp_name'],'img/'.$newFile);
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Hi Post</title>
</head>
<body>
	<form action="post.php" method="post" enctype="multipart/form-data">
		<input type="file" name="txt1" id="">
		<br><br>
		<input type="submit" value="post" name="btnPost">
	</form>
</body>
</html>