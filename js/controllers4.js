 var app= angular.module("myapp",['ngRoute']);
   

          app.controller("MyController", function($scope,$http) {
                $scope.myForm = {};
				$scope.adddata= function(){
				$http.post("registration.php",{'fname': $scope.myForm.firstName,'lname': $scope.myForm.lastName,'uname': $scope.myForm.userName,'email': $scope.myForm.email,'password': $scope.myForm.password,'confirmpassword': $scope.myForm.confirmpassword})
				.success(function(data,status,headers,config){
				console.log(data.message);
				});
			 }
            }
		);
 
 app.controller("MyController1", function($scope,$http,$window) {
                $scope.myForm = {};
				$scope.login=function(){
			 $http.post("login.php",{'uname':$scope.myForm.userName,'password': $scope.myForm.password})
			  .success(function(data,status,headers,config){
				  if(data.message=="You are logged in as admin"){
				  $window.location.href='admin.php';
				  }
				 else if(data.message=="You are logged in as user"){
					 $window.location.href='user.php';
				 }
				 else if(data.message=="Your account hasnot been verified.Please visit your email to verify your account"){
					 alert(data.message);
				 }
				 else if(data.message="Your account is no longer active"){
					 alert(data.message);
				 }
				  else{
					 alert(data.message);
				 }
			}
		); 
		}
	});
		