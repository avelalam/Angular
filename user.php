<!DOCTYPE html>
<html>
<head>
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.2.5/angular.min.js"></script>
<script type="text/javascript" src="js/angular-file-upload.js"> </script>
<script>
var app = angular.module('myApp', ['angularFileUpload']);
app.controller('MainCtrl', [ '$scope', '$timeout', '$upload' ,function($scope, $timeout, $upload){
	 var head= '<?php echo $_GET['uname']; ?>';	 
	 $scope.uploadResult = [];
	 $scope.onFileSelect = function($files) {
    //$files: an array of files selected, each file has name, size, and type.
    for (var i = 0; i < $files.length; i++) {
      var $file = $files[i];
      $upload.upload({
        url: 'upload.php?uname='+head ,
        file: $file,
        progress: function(e){}
      }).then(function(response) {
        // file is uploaded successfully
		$timeout(function() {
					$scope.uploadResult.push(response.data);
					console.log($scope.uploadResult);
				});
      }); 
    }
  }
}]);
</script>
</head>
<body ng-app="myApp" ng-controller="MainCtrl">
<form>
<div style="text-align: left;font-size: 20px;padding: 10px;color: #487eaa;">
	<font> Upload Image</font>
</div>
<div class="file-upload">
	<input type="file" id="i_file" name="file" ng-file-select="onFileSelect($files)" multiple />
	<div ng-repeat="files in uploadResult">
	<!-- in case of error show error message with file name-->
	<span class='label label-info'>{{files.name}}</span><br/>
	</div>
</div>
</form>
</body>
</html>