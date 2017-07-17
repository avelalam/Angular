<?php
//echo nl2br(print_r($_FILES,1));
//$target_dir = "upload/";
//$target_file = $target_dir . basename($_FILES["file"]["name"]);
//move_uploaded_file($_FILES["file"]["tmp_name"], $target_file);
require('config.php');
$uname=$_GET['uname'];
$image=addslashes($_FILES["file"]["name"]);
$name=addslashes($_FILES["file"]["tmp_name"]);
//$image=file_get_contents($name);
mysql_query("INSERT into `user`(`image`,`username`) VALUES ('$image','$uname')");
//echo json_encode($_FILES["file"]);
?>
