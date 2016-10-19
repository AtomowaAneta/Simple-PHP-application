<html>
	<head>
<<<<<<< HEAD
			<meta charset="UTF-8">
			<title>Pentest App Main</title>
			<meta name="viewport" content="width=device-width, initial-scale=1">
			<!-- Latest compiled and minified CSS -->
			<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
			<script   src="http://code.jquery.com/jquery-1.12.4.min.js"></script>
			<!-- Latest compiled and minified JavaScript -->
			<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
		</head>
			<body>		
				<div class="container">				
=======
		</head>
			<body>						
>>>>>>> 52a98e508a23f329332930ad7b5134e928e07fbf
				<h3>Welcome in online database management!</h3>	
					<form action = "<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
						<div class = "field">	
							<div class="dbhostfield">	
								<p2>Database host</p2> <input type="text" id = "host" name="host" placeholder="host">
						</div>
						
						<div class="dbuserfield">
							<p2>Database user</p2> <input type="text" id = "user" name="user" placeholder="user">
						</div>
						<div class="dbpwdfield">
							<p2>Database pwd</p2>  <input type="password" id = "pwd" name="pwd" placeholder="pwd">
						</div>	
							</div>
						<br>
						<div class = "buttons">	
						<button type="submit">Log into database</button>
						</div>
					</form>
<<<<<<< HEAD
					</div>
=======
>>>>>>> 52a98e508a23f329332930ad7b5134e928e07fbf
<?php

		session_start();
		if($_SERVER["REQUEST_METHOD"] == "POST"){
			if(empty($_POST["host"]) && empty($_POST["user"]) && empty($_POST["pwd"])){
				
				echo "<p>You must fulfill all fields</p>";
			}
			
			else
		{
				$_SESSION['host'] = $_POST['host'];
				$_SESSION['user'] = $_POST['user'];
				$_SESSION['pwd'] = $_POST['pwd'];
				
				//$host = htmlspecialchars($_POST["host"]);
				//$user = htmlspecialchars($_POST["user"]);
				//$pwd = htmlspecialchars($_POST["pwd"]);
<<<<<<< HEAD
				header('Location: http://10.30.0.163/php_proj/php1/dbHandler.php');	
=======
				header('Location: http://localhost/php/php1/dbHandler.php');	
>>>>>>> 52a98e508a23f329332930ad7b5134e928e07fbf
		}
}			
?>
			</body>
</html>
