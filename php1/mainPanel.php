<html>
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



