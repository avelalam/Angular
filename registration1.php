<?php
require('config.php');
$data= json_decode(file_get_contents("php://input"));
$fname=mysql_real_escape_string($data->fname);
$lname=mysql_real_escape_string($data->lname);
$uname=mysql_real_escape_string($data->uname);
$email=mysql_real_escape_string($data->email);
$pass1=mysql_real_escape_string($data->password);
$pass2=mysql_real_escape_string($data->confirmpassword);
$confirmationkey=md5($uname);
	$pass3=md5($pass1);
	if($pass1==$pass2){
	mysql_query("INSERT INTO user (`ID`,`firstname` ,`lastname` , `username` ,`email` ,`password`,`key`,`confirmationkey`) VALUES (NULL,'$fname','$lname','$uname','$email','$pass3','0','$confirmationkey')");
	mail($email,'activation mail','link for activation http://localhost/Angular/activation.php?email='.$email.'&confirmationkey='.$confirmationkey.'','From://emailid');
    echo'{"message": "Your account has been successfully created.please visit your email for verification"}';
	}
?>
