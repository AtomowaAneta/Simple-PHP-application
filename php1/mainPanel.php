
	 <?php
		    require('dbHandler.php');
			ini_set('session.cookie_httponly', 1);
			session_start();
			$date = getdate();
			 
			$login = $_SESSION["login"];
			$nick = Database_handler::display_user("$login");
			?> 

<html>

   <head>
      <meta charset="UTF-8">
      <title>Pentest App Main</title>
      <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
      <!-- Latest compiled and minified CSS -->
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
      <script   src="http://code.jquery.com/jquery-1.12.4.min.js"></script>
      <!-- Latest compiled and minified JavaScript -->
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
      <link rel="stylesheet" type="text/css" href="/php_proj/css/mainpanel.css">
      <link href="https://fonts.googleapis.com/css?family=Bungee+Inline|Fjalla+One" rel="stylesheet">
      <link href="https://fonts.googleapis.com/css?family=Shrikhand" rel="stylesheet">
      <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.5.8/angular.min.js"></script>
      <script src="/php_proj/js/hourApp.js"></script>
   </head>


	<style> 

</style>
   <body>


	<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span> 
      </button>
    
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="navbutton"><a href="mainPanel.php">I don't know app</a> </li>
      
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li class="navbutton"><a href="#"><?php echo $nick?> <span class="glyphicon glyphicon-user"></span></a></li>
        <li class="navbutton"><a href="logOut.php"> Log Out <span class="glyphicon glyphicon-log-out"></span></a></li>
      </ul>
    </div>
  </div>
</nav>


	<div class="row main_wrapper"> 
	<div class="col-md-3 left_main">
	<div class="row">
		<div class="photo"></div>
	</div>


</br> </br> 
	<div class="row">

		<div class="calendar_bg">
		Tu calendar
		</div>
	</div>
	</div>


	
	<div class="col-md-6 post_bg"> Tu posty bedo </div>
	


	<div class="col-md-3 right_main"  >
		<div ng-app="myApp" ng-controller="myCtrl" id="time" style="text-align: right;">

	<p>{{theTime}}</p>
</div>
			<div class="row">

		<div class="todo_bg">
		Tu zadania do zrobienia
		</div>
	</div>	
</br> 
		<div class="row">

		<div class="news_bg">
		Tu news
		</div>
	</div>


	
	

		</div>
		
	
	
	</div>


		</div>


	</div>

	</div>

   </body>
</html>



