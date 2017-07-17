<?php
require ('config.php');
//session_start();
if(isset($_SESSION['userid'])){
$uid=$_SESSION['userid'];
$sql1=mysql_query("SELECT `key` FROM `user` WHERE `username`='$uid'");
$result1=mysql_fetch_assoc($sql1);
if($result1['key']==1){
header('Location: admin');
//session_start();
}
else{
 //echo'{"message":"session is set for user"}';
 header('Location: user');
 //session_start();
}
}
?>


<!DOCTYPE html>
<html ng-app="myapp">
<head>
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.2.5/angular.min.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.2.5/angular-route.min.js"></script>
	<script  type="text/javascript" src="js/jscrpt.js"></script>
	<link href="style1.css" rel="stylesheet" type="text/css"> </link>
</head>

<body  background="gray.png" >
<div class="container">
<div class="container2">
<div ng-controller="MyController1" class="wrapper" >
   <h2><i> Login </i></h2>
    <form name="myform" id="form_id" method="POST" >
        <input type="text" name="uname" ng-model="myForm.userName"  placeholder = "User name" required><span ng-show="myform.uname.$error.required" id="error1" class="err">Username Required</span><br/>
        <input type="password" name="password"  ng-model="myForm.password" placeholder="password" required><span ng-show="myform.password.$error.required" id="error2" class="err">Password Required</span><br/> 
		<input type="submit" value="Login" id="submit" name="submit" ng-click="login()">
		<span id="register"> <h4>No account? <a href="Registration"> Signup here </a> </h4> </span>
    </form>
</div>
</div>
</div>
</body>
</html>
