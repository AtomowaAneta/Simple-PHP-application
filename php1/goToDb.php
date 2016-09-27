<html>
	<head>
		</head>
			<body>						
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
				header('Location: http://localhost/php/php1/dbHandler.php');	
		}
}			
?>
			</body>
</html>
