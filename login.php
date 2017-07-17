<?php
require ('config.php');

session_start();

$data= json_decode(file_get_contents("php://input"));

$uname=mysql_real_escape_string($data->uname);

$password1=mysql_real_escape_string($data->password);

$password=md5($password1);

$sql=mysql_query("SELECT * FROM `user` WHERE `username`='$uname' AND `password`='$password'");

if(mysql_num_rows($sql)>0){

$result=mysql_fetch_assoc($sql);

if($result['key']== 2){
	$_SESSION['userid'] = $uname;
	
	echo'{"message":"You are logged in as user"}';
}

else if($result['key']== 1){
	$_SESSION['userid'] = $uname;
	echo '{"message":"You are logged in as admin"}';
}

else if($result['key']== 0){
	echo'{"message":"Your account hasnot been verified.Please visit your email to verify your account"}';
}

else if($result['key']== 3){
	echo'{"message":"Your account is no longer active"}';
}

}

else{
	echo '{"message":" Your username and password donot match"}';
}

?>