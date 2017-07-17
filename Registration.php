<!DOCTYPE html>
<html ng-app="myapp">
<head>
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.2.5/angular.min.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.2.5/angular-route.min.js"></script>
	<script  type="text/javascript" src="js/jscrpt.js"></script>
	<link href="style2.css" rel="stylesheet" type="text/css"> </link>
</head>
<body  background="bg3.jpg" >
<div class="container">
<div class="container2">
<div ng-controller="MyController" class="wrapper" >
     <h2> <i> Signup </i></h2>
    <form name="myform" id="form_id" method="POST" >
        <input type="text" name="fname" ng-model="myForm.firstName"  placeholder = "Firstname" required ><span ng-show="myform.fname.$error.required" id="error1" class="err">Firstname Required</span><br/>
        <input type="text" name="lname"  ng-model="myForm.lastName" placeholder="Lastname" required><span ng-show="myform.lname.$error.required" id="error2" class="err">Lastname Required</span><br/> 
		<input type="text" name="uname" ng-model="myForm.userName"  placeholder = "Username" required><span ng-show="myform.uname.$error.required" id="error3" class="err">Username Required</span><br/>
        <input type="email" name="email"  ng-model="myForm.email" placeholder="email" required>
		<span ng-show="myform.email.$error.required" id="error4" class="err">Email Required</span>
		<span ng-show="myform.email.$error.email" id="error4" class="err">Invalid email address</span>
		</span>
		<br/>
		<input type="password" name="password" ng-model="myForm.password" placeholder="password" required><span ng-show="myform.password.$error.required" id="error5" class="err">password Required</span></br>
		<input type="password" name="confirmpassword" ng-model="myForm.confirmpassword" placeholder="confirmpassword" required><span ng-show="myform.confirmpassword.$error.required" id="error6" class="err">Confirm password</span></br>
	    <input type="submit" ng-click="adddata()" value="Signup" id="submit" name="submit">
    </form>
</div>
</div>
</div>
</body>
</html>
