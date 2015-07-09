<?php
if(is_file($_GET['file'])){
header('Content-disposition:attachment; filename='.$_GET['file']);
echo file_get_contents($_GET['file']);
}
else{
//404
}
?>