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
			$scope.errortext = "";
       	 if (!$scope.addGiven) {return;}
       		 if ($scope.tasks.indexOf($scope.addGiven) == -1) {
            		$scope.tasks.push($scope.addGiven);
        } else {
            $scope.errortext = "The task is on the list!";
        }

		};

		$scope.deleteTask = function (task){
			$scope.tasks.splice(task,1);
		}
});


myApp.controller('monthDisplayer' function($scope) {
	$scope.actualMonth = '';
	$scope.months = [ 'January', 'February', 'March', 'April', 'May', 'June',
            'July', 'August', 'September', 'October', 'November', 'December' ];
    $scope.printMonth = function () {
    	var monthNumber = new Date().getMonth();
    	$scope.actualMonth = months[monthNumber];
    }

});


