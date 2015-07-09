<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<link rel="stylesheet" href="style.css" />
<link rel="stylesheet" href="media.css" />
</head>
<body>
<?php
header('Content-Type: text/html; charset= utf-8');
$image = $_GET['id'];
$type = end(explode(".", $image));
if($type == "jpg" || $type == "gif" || $type == "png"){
	echo "<img class='imgT' src='images/$image'>"."<br>";
?>
	<a href="download.php?file=images/<?=$image?>">Скачать</a>
<?php
}
elseif($type == "swf"){
	$foo = getimagesize("images/".$image);
	echo "<object classid='clsid:d27cdb6e-ae6d-11cf-96b8-444553540000' codebase='http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=9,0,0,0' $foo[3]  id='banner'>";
	echo "<param name='allowScriptAccess' value='sameDomain' />";
	echo "<param name='allowFullScreen' value='false' />";
	echo "<param name='movie' value='images/$image' />";
	echo "<param name='wmode' value='opaque' />";
	echo "<param name='quality' value='high' />";
	echo "<param name='bgcolor' value='#ffffff' />";
	echo "<param name='flashvars' value='status=' />";
	echo "<embed src='images/$image' wmode='opaque' quality='high' bgcolor='#ffffff' $foo[3] name='banner' allowScriptAccess='sameDomain' allowFullScreen='true' type='application/x-shockwave-flash' pluginspage='http://www.macromedia.com/go/getflashplayer' />";
	echo "</object><br>";
?>
	<a style="margin-top: 25px;" href="download.php?file=images/<?=$image?>">Скачать файл</a>
<?php
}
elseif($type == "docx" || $type == "doc" || $type == "xlsx" || $type == "xlsm" || $type == "xls" || $type == "pdf" || $type == "txt"){
?>
	<a href="download.php?file=images/<?=$image?>">Скачать файл <?=$image?></a>
<?php
}else{
?>
	<a href="download.php?file=images/<?=$image?>">Скачать файл <?=$image?></a>
<?php
}
?>
</body>
</html>