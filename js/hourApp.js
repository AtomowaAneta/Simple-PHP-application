var myApp = angular.module('myApp', []);

myApp.controller('myCtrl', function($scope, $interval) {
  $scope.theTime = new Date().toLocaleTimeString();
  $interval(function () {
      $scope.theTime = new Date().toLocaleTimeString();
  }, 1000);
});

myApp.controller('toDoAppController', function($scope) {
	$scope.toDotitle = "What to do?";
	$scope.tasks = ["Cut the grass", "fuck your wife", "awd", "a" ,"sefesf"];
		$scope.addTask = function (){
			$scope.tasks.push($scope.addGiven);
		};
		$scope.deleteTask = function (task){
			$scope.tasks.splice(task,1);
		}
});



