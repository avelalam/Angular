<?php
require('config.php');
if(isset($_GET['email'] , $_GET['confirmationkey'])==true){
	$email=mysql_real_escape_string($_GET['email']);
	$confirmationkey=mysql_real_escape_string($_GET['confirmationkey']);
	$sql=mysql_query("SELECT * FROM `user` WHERE `email`= '$email' AND `confirmationkey`='$confirmationkey' AND `key`=0");
	//echo($sql["key"]);
	 if(mysql_num_rows($sql)!=FALSE){
		mysql_query("UPDATE `user` SET `key`= 2 WHERE `email`='$email' AND `confirmationkey`='$confirmationkey'");
		echo "Your account has been verified.Please Login" ;
	}
   else{
	   echo "error" ;
   }	
}
else{
	header('location:index.php');
}
?>