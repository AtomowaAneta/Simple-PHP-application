var myApp = angular.module('myApp', []);

myApp.controller('myCtrl', function($scope, $interval) {
  $scope.theTime = new Date().toLocaleTimeString();
  $interval(function () {
      $scope.theTime = new Date().toLocaleTimeString();
  }, 1000);
});

myApp.controller('toDoAppController', function($scope) {
	$scope.toDotitle = "Task Planner";
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
       var dayNumberN = new Date().getUTCDate();
       var yearNumber = new Date().getFullYear();
      $scope.weekDaysSh = ['Sun', 'Mon', 'Tue', 'Wed', 'Thu' , 'Fri' , 'Sat'];
      $scope.actualYear = yearNumber;
    	$scope.actualMonth = $scope.months[monthNumber];
      $scope.actualDayN = dayNumberN;
      $scope.actualDay = $scope.weekDays[dayNumber];
    }

});

myApp.controller('newsCtrl', function($scope,$http, $interval) {
  $scope.newsTitle = "NEWSer";

    $http.get("newsParser.php").then(function(response) {
      
      $scope.news = response.data.newsTitles;
 
 
  });
  });

myApp.controller('mailerCtrl', function($scope, $http, $interval) {
  $scope.mailerTitle = "Mailer";
   $interval(function () {
  $http.get('dbMailerAgent.php').then(function(response){
      $scope.users = response.data.userNick;
  });
  }, 1000);
  });




