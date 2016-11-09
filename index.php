<html>
<head>
	<title>Tralalal</title>
		<script src = js/first.js></script>
	<link rel="stylesheet" type="text/css" href="">
</head>
<body>
<div class = "header">
	<h1>Welcome in portal for dauns!</h1>
</div>

<form action = "php1/mainPanel.php" method="POST">
<div class = "fields">	
	<div class="loginfield">	
		<input type="login" id = "login" name="login">
	</div>
	
		<div class="passfield">
			<input type="password" id = "password" name="password">
		</div>
</div>	
		<div class = "buttons">	
			<button type="submit" onclick="showTrueJP()">Login</button>
</form>
		
		<button>Forgot Password</button> <br/>
		</div>	
			<form action="php1/setUpAccount.php" method="POST">
				<button>Sing up</button>
			</form>
</body>

</html>
