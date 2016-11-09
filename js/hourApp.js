var myApp = angular.module('myApp', []);

myApp.controller('myCtrl', function($scope, $interval) {
  $scope.theTime = new Date().toLocaleTimeString();
  $interval(function () {
      $scope.theTime = new Date().toLocaleTimeString();
  }, 1000);
});

myApp.controller('toDoAppController', function($scope) {
	$scope.title = "What to do?";
});


