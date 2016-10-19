<html>
<<<<<<< HEAD
   <head>
      <meta charset="UTF-8">
      <title>Pentest App Main</title>
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <!-- Latest compiled and minified CSS -->
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
      <script   src="http://code.jquery.com/jquery-1.12.4.min.js"></script>
      <!-- Latest compiled and minified JavaScript -->
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
   </head>
   <script>
	  $(document).ready(function(){
    $("#flip").click(function(){
        $("#panel").slideToggle("slow");
    });
});
	   
	   </script>
	<style> 
#panel {
    background-color:  	#808080;
    border: stripped 3px #c3c3c3;
    padding: 100px;
    padding-left: 50px;
    display: none;
	width: 5px;
}

#photo {

	border: solid 3px #c3c3c3;
	width: 80px;
	height : 80px;
	border-radius: 10px;
	text-align: center;	
}
#photo_div {
	padding-left: 40px;
}




</style>
   <body>
				 <?php
		    require('dbHandler.php');
			ini_set('session.cookie_httponly', 1);
			session_start();
			$date = getdate();
			 
			$login = $_SESSION["login"];
			//session_destroy();
			?> 
    <div class="container-fluid">
		<div class="row">
			 <nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">WebSiteName</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="#">Home</a></li>
      <li><a href="#">Page 1</a></li>
      <li><a href="#">Page 2</a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li id="flip"><a href="#" ><span class="glyphicon glyphicon-user"></span> <?php echo $login ?></a></li>
      <li><a href="#" ><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
    
    </ul>
  
  </div>

</nav>
  
		<div class="row">
			<div class="col-md-1" id="photo_div">
				<div id="photo">Add avatar</div>
				</div>
			<div class="col-md-1 col-md-offset-7">
			  <div class="pull-right" id="panel">
			  <div class="row">
			  <div class="col-md-2 col-md-offset-3">Witam</div>
			  <div class="col-md-2">Nara</div>
			  </div></div>
			</div>

		</div>
		
		
   </body>
</html>
=======
<head>

</head>
<body>
<?php
	ini_set('session.cookie_httponly',1);
	
	(isset($_SESSION['counter'])) ? $_SESSION['counter'] +=1 : 	$_SESSION['counter'] =1;
		
		if(!empty($_POST["login"]) && !empty($_POST["password"]))  {
			$login = htmlspecialchars($_POST["login"]);
			$pwd = htmlspecialchars($_POST["password"]);
	 
		  if (preg_match("/[^A-Za-z'-]/",$login )) {
				die ("invalid name and name should be alpha");
		  }

	echo "Welcome ". $login . "<br />";
	echo "Your password is ". $pwd . "<br />";

	setcookie($login, "milion", time()+3600, "/","", 0, TRUE);
	
	if(isset($_COOKIE["name"]))
		echo "Welcome ". $_COOKIE["name"];
	else
		echo("Problejme :< :< :< ". "<br />");

	echo "<h4>You visited this webpage: " . $_SESSION['counter']. "</h4>";
	
	}
   
   else
   
	die("<h>Something wrong with credentials</h>");
?>
	
<?php 
	$date = getdate();
	echo "<p>Today is <i>$date[weekday]</i> </p>";
	echo "<p><i>$date[mday] of $date[month] , $date[year]</i></p>";
	echo "<p>Hour: <i>$date[hours] : $date[minutes] : $date[seconds] </i></p>"
?> <br/>

<form action="uploadFile.php" method="POST">
	<br>
		<input type="file" name="file"></input>
	<br>
		<input type="submit" name ="send"></input>
</form>
<a href = "http://localhost/php/php1/goToDb.php">Go to db </a>
<br/>
<a href = "http://localhost/php/php1/ajaxTest.php">Go to test ajax </a>
</body>
</html>



>>>>>>> 52a98e508a23f329332930ad7b5134e928e07fbf
