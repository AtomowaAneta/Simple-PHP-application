<html>
<head>
	<title>Tralalal</title>
		<script src = js/first.js></script>
	<link rel="stylesheet" type="text/css" href="">
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
