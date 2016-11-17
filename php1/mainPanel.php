
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
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
     
      <link rel="stylesheet" type="text/css" href="/php_proj/css/mainpanel.css">
      <link rel="stylesheet" type="text/css" href="/php_proj/css/calendar.css">
      <link href="https://fonts.googleapis.com/css?family=Bungee+Inline|Fjalla+One|Shrikhand" rel="stylesheet">
      <link href="https://code.jquery.com/ui/1.10.4/themes/ui-lightness/jquery-ui.css" rel="stylesheet">
      <link rel="icon" type="image/png" href="/php_proj/img/question.jpg">
    
      
      <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.5.8/angular.min.js"></script>

      <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
      <script src="/php_proj/js/angular/mainPanelApp.js"></script>
      <script src="/php_proj/js/jquery/dragndrop.js"></script>
    
      <script src="/php_proj/js/jquery/localization.js"></script>

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
                  <li class="navbutton"><a href="#">Messages <span class="glyphicon glyphicon-envelope"></span></a></li>
                  <li class="navbutton"><a href="#"><?php echo $nick?> <span class="glyphicon glyphicon-user"></span></a></li>
                  <li class="navbutton"><a href="logOut.php" data-toggle="tooltip" data-placement="bottom" title="Cya!"> Log Out <span class="glyphicon glyphicon-log-out"></span></a></li>
               </ul>
            </div>
         </div>
      </nav>
      <div class="row main_wrapper">
         <div class="col-md-3 left_main">
            <div class="row">
               <div class="app_wrapper droppable"  id="resizable">
                  <div class="well draggable" style="height: 100%; width: 100%;">
                     <div class="app_bar">
                        <a href="#" style="color: black"><span class="glyphicon glyphicon-minus-sign"></span></a>
                        <a href="#" style="color: black"><span class="glyphicon glyphicon-remove-sign"></span></a>
                        <a href="#" style="color: black"><span class="glyphicon glyphicon-plus-sign"></span></a>
                     </div>
                     <div class="app_title" >Location info</div>
                     </br>  
                     <div id="ip" ></div>
                     <div id="city_name" ></div>
                     <div id="province_name"></div>
                     <div id="country_name"></div>
                     <div id="coordinates"></div>
                     <div class="but" style="text-align:center; padding-top: 10px; ">
                     <div class="btn btn-warning" >See on map</div>
                  </div>
                  </div>

               </div>
            </div>
            </br>  
            <div class="row">
              

               <div class="app_wrapper droppable" id="resizable" >
                  <div class="well   draggable" style="height: 100%; width: 100%;" >
                   <div class="app_bar">
                        <a href="#" style="color: black"><span class="glyphicon glyphicon-minus-sign"></span></a>
                        <a href="#" style="color: black"><span class="glyphicon glyphicon-remove-sign"></span></a>
                        <a href="#" style="color: black"><span class="glyphicon glyphicon-plus-sign"></span></a>
                     </div>
                     <div class="month" ng-controller="monthDisplayer">
                    <div class="app_title" style="text-align:center;" >{{calName}}</div>
                
                        <div class="datenyear" style="text-align:center;">
                      <span>{{actualDayN}}</span>  <span>{{actualMonth}}</span>   <span >{{actualYear}}</span>
                        </div>
                        <div class="day" style="text-align:center;"> 
                       <span>{{actualDay}}</span>
                        </div>
                      </div>
                    <div class="daymap"></div>
                  </div>

               </div>
            </div>
                </br> 
             <div class="row">
              

               <div class="app_wrapper droppable" id="resizable">
                  <div class="well  draggable" >
                    
                      <div class="app_bar">
                        <a href="#" style="color: black"><span class="glyphicon glyphicon-minus-sign"></span></a>
                        <a href="#" style="color: black"><span class="glyphicon glyphicon-remove-sign"></span></a>
                        <a href="#" style="color: black"><span class="glyphicon glyphicon-plus-sign"></span></a>
                     </div>
      
                                   
                  </div>
               </div>
            </div>
         </div>
         <div class="col-md-6 post_bg  " id="resizable" >
           <div id="resizable" style="width:100px; height:150px; background-color: green;" >
                    
                     
      
                                   
                  </div> 
           <h1 style="color: red;">{{error}}</h1>
         </div>

        
         <div class="col-md-3 right_main"  style="color:black;">
            <div class="row">
               <div class="app_wrapper droppable" >

                  <div  ng-controller="toDoAppController" >

                     <div class="panel-group" >

                        <div class="panel panel-default draggable" style="height: 100%; width: 100%;" >
                         <div class="app_bar">
                        <a href="#" style="color: black"><span class="glyphicon glyphicon-minus-sign"></span></a>
                        <a href="#" style="color: black"><span class="glyphicon glyphicon-remove-sign"></span></a>
                        <a href="#" style="color: black"><span class="glyphicon glyphicon-plus-sign"></span></a>
                     </div>
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
               <div class="app_wrapper droppable " >
              </div>
            </div>
            </br>
             <div class="row">
               <div class="app_wrapper droppable ">
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
                     <li class="dropdown-toggle">
                        <a href="#">Applications   <span class="glyphicon glyphicon-arrow-right"></span></a>
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
		


$(document).ready(function() {
          $(".well").dblclick( function() {
              $(this).animate({
                    backgroundColor: 'gray',
                    height: '500px',
                    width: '500px',
                    zIndex: '100',
                    marginTop: '0px',
                    position: 'absolute',
                    top:'0',
                    right:'0',
              });
          }); 
           $(".well").click( function() {
              $(this).animate({
                  height: "100%", 
                  width: "100%",
                  backgroundColor: "white",
                  zIndex: '1',
              });
          }); 
       });
  
			
     
      
    

</script>
   </body>


</html>



