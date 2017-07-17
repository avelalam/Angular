<?php
require('config.php');

if(isset($_GET['userid'] , $_GET['key'])==true){
	
	$username=$_GET['userid'];
	$key=$_GET['key'];
 if($key==3){
	 mysql_query("UPDATE `user` SET `key`=2 WHERE `username`='$username'");
	 header('Location: admin.php');
 }
 else{
	 mysql_query("UPDATE `user` SET `key`=3 WHERE `username`='$username'");
	  header('Location: admin.php');
 }
}
else{
	echo "error" ;
}
?>