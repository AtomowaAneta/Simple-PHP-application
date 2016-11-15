
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
      <title>I dont know app</title>
      <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
      <!-- Latest compiled and minified CSS -->
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
      <script   src="http://code.jquery.com/jquery-1.12.4.min.js"></script>
      <!-- Latest compiled and minified JavaScript -->
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
      <link rel="stylesheet" type="text/css" href="/php_proj/css/mainpanel.css">
      <link rel="stylesheet" type="text/css" href="/php_proj/css/calendar.css">
      <link href="https://fonts.googleapis.com/css?family=Bungee+Inline|Fjalla+One" rel="stylesheet">
      <link href="https://fonts.googleapis.com/css?family=Shrikhand" rel="stylesheet">
      <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.5.8/angular.min.js"></script>
      <script src="/php_proj/js/hourApp.js"></script>
      <script src="/php_proj/js/calendar.js"></script>
      <link rel="icon" type="image/png" href="/php_proj/img/question.jpg">

     
   </head>
   <style> 
   .main_wrapper {
   	padding-top: 70px;
   }
   </style>
   <body ng-app="myApp">
      <nav class="navbar navbar-inverse navbar-fixed-top">
         <div class="container-fluid">
            <div class="navbar-header">
               <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
               <span class="icon-bar"></span>
               <span class="icon-bar"></span>
               <span class="icon-bar"></span> 
               </button>
            </div>
            <div class="collapse navbar-collapse" id="myNavbar" style="text-align:center;">
               <ul class="nav navbar-nav" >
                  <li class="navbutton"><a href="mainPanel.php">I don't know app</a> </li>
               </ul>
               <ul class="nav navbar-nav navbar-right">
                  <li class="navbutton"><a href="#"><?php echo $nick?> <span class="glyphicon glyphicon-user"></span></a></li>
                  <li class="navbutton"><a href="logOut.php" data-toggle="tooltip" data-placement="bottom" title="Cya!"> Log Out <span class="glyphicon glyphicon-log-out"></span></a></li>
               </ul>
            </div>
         </div>
      </nav>
      <div class="row main_wrapper">
         <div class="col-md-3 left_main">
            <div class="row">
         		<div class="location_info" data-toggle="tooltip" title="aa here you are!">
         			<div class="well">
         			<div class="location_head" >Location info</div>
	         		<div id="ip"></div>
	         		<div id="city_name"></div>
	         		<div id="province_name"></div>
	         		<div id="country_name"></div>
	         		<div id="coordinates"></div>
	         		<div style="margin-top: 10px; margin-left: 55px;" class="location_head btn" >See on map</div>
	         		</div>
         	</div>
            </div>
            </br> </br> </br> </br> </br> </br> 
            <div class="row">
       
               <div class="calendar_bg">
                    <div class="panel panel-default">
                    	<div class="panel-heading" style="text-align:center; font-family : 'Shrikhand', cursive">Calendar</div>
                    	<div class="panel-body">
                    		<p id="month">
                    			
                    		</p>
                    	</div>
                    	<div class="panel-footer"></div>
                  
               </div>
               </div>
            </div>
         </div>
         <div class="col-md-6 post_bg"> Tu posty bedo
         <h1 style="color: red;">{{errortext}}</h1> </div>
         <div class="col-md-3 right_main"  style="color:black;">
            <div class="row">
               <div class="todo_bg">
   			<div  ng-controller="toDoAppController">
   			<div class="panel-group">
   				<div class="panel panel-default">
   				<div class="panel-heading toDo_title" style="text-align: center; color:" data-toggle="tooltip" title="Plan your tasks">{{toDotitle}}</div>
				  
				    <div style="text-align:center;" id="panel_body" class="panel-body " ng-repeat="x in tasks">{{x}}
						<span class="glyphicon glyphicon-remove" ng-click="deleteTask()"> </span>
				    </div>
				    
				<div class="panel-footer">  
				  <input  ng-model="addGiven" id="toDo_input">
				  <button class="btn btn-success" ng-click="addTask()">Add</button>

				</div>
				</div>
				</div>
   				</div>
   			</div>
               </div>
                </br> 
            <div class="row">
               <div class="news_bg">
                 
               </div>
            </div>
            </div>
           
         </div>
      </div>
      </div>
      </div>
      </div>
      <footer class="footer navbar-fixed-bottom"> 
      <div class="row-fluid">
      <div class="col-md-4" style="padding-top: 3px; font-family: 'Shrikhand', cursive ">
     
 <div class="dropup">
    <button type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown" >Begin
      <span class="caret"></span> </button>
    <ul class="dropdown-menu">
	<li style="text-align:center;"><a href="#"><?php echo $nick?> <span class="glyphicon glyphicon-user"></span></a></li>
		<li class="divider"></li>
      
      <li class="dropdown-toggle"><a href="#">Applications   <span class="glyphicon glyphicon-arrow-right"></span></a>

      <ul class="dropdown-menu">
      <li><a href="#">Customize</a></li>
       <li><a href="#">Customize</a></li>
      </ul>

      </li>
      <li><a href="#">Customize</a></li>
      
      <li class="divider"></li>
      <li style="text-align:center;"><a href="logOut.php">Log out <span class="glyphicon glyphicon-off"></span></a></li>
    </ul>
  </div>

      </div>
           <div class="col-md-8">
      <div id="time"  ng-controller="myCtrl">
               <p>{{theTime}}</p>
            </div>
            </div>
            </div>
       </footer>
       <script>
			$(document).ready(function(){
			    $('[data-toggle="tooltip"]').tooltip();
			});

			$.get("http://ipinfo.io", function (response) {
			    $("#ip").html("IP: " + response.ip);
			    $("#city_name").html("City: " + response.city);
			    $("#province_name").html("Province: " + response.region);
			    $("#country_name").html("Country: " + response.country);
			    $("#coordinates").html("Coordinates: " + response.loc);
			   
			}, "jsonp");


</script>
   </body>


</html>



