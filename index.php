<?php
header('Content-Type: text/html; charset= utf-8');
?>
<!DOCTYPE html>
<html>
<head></head>
<body>
<form action="<?=$_SERVER['REQUEST_URI']?>" method="post" enctype="multipart/form-data">
<input type="file" name="form_file">
<input type="submit" name="submit" value="Загрузить баннер">
</form>
<?php

if($_SERVER['REQUEST_METHOD'] == 'POST'){
	$temp = $_FILES['form_file']['tmp_name'];
	$form_file = $_FILES['form_file']['name'];
	if($form_file){
		move_uploaded_file($temp, "images/".$form_file);
		$image_name = $_FILES['form_file']['name'];
?>
		<div style="padding-top: 25px;"><a target="_blank" href="showImage.php?id=<?=$image_name?>">http://<?=$_SERVER["HTTP_HOST"]."/".$image_name?></a></div>
<?php
	}
}
?>
</body>
</html>