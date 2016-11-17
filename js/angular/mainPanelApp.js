var myApp = angular.module('myApp', []);

myApp.controller('myCtrl', function($scope, $interval) {
  $scope.theTime = new Date().toLocaleTimeString();
  $interval(function () {
      $scope.theTime = new Date().toLocaleTimeString();
  }, 1000);
});

myApp.controller('toDoAppController', function($scope) {
	$scope.toDotitle = "What to do?";
	$scope.tasks = ["Cut the grass", "fuck your wife",];
		$scope.addTask = function (){
			$scope.error = "";
       	 if (!$scope.addGiven) {return;}
       		 if ($scope.tasks.indexOf($scope.addGiven) == -1) {
            		$scope.tasks.push($scope.addGiven);
        } else {
            $scope.error = "The task is on the list!";
        }

		};

		$scope.deleteTask = function (task){
			$scope.tasks.splice(task,1);
		}
});


myApp.controller('monthDisplayer' ,function($scope, $window) {
	$scope.calName = "Calendar";
  $scope.actualYear = '';
  $scope.actualMonth = '';
  $scope.actualDay = '';
  $scope.actualDayN = '';
	$scope.weekDays = ['Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday' , 'Friday' , 'Saturday'];
  $scope.months = [ 'January', 'February', 'March', 'April', 'May', 'June',
            'July', 'August', 'September', 'October', 'November', 'December' ];
    $window.onload = function () {
    	 var monthNumber = new Date().getMonth();
       var dayNumber = new Date().getDay();
       var yearNumber = new Date().getFullYear();
      $scope.actualYear = yearNumber;
    	$scope.actualMonth = $scope.months[monthNumber];
      $scope.actualDayN = dayNumber;
      $scope.actualDay = $scope.weekDays[dayNumber];
    }
});


