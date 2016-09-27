<?php
	session_start();
	if ($_SERVER["REQUEST_METHOD"] == "POST") {
           
		}
	
	 function test_input($data) {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
         }
?>
<html>
	<body>
		<h1>Set up your account</h1>
		<form action = "<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
		Name <input type="text" id="first_name" name="first_name"> <br/>
		Surname  <input type="text" id="surname" name="surname"> <br/>
		Password <input type="password" id="pwd" name="pwd"> <br/>
		Nick <input type="text" id="nick" name="nick"> <br/>
		Age <input type="text" id="age" name="age"> <br/>
		Mail address <input type="text" id="mail_addr" name="mail_addr">	
		
		 <br/> <br/>
		<button type="submit">Create account</button>
		</form>
		<body>
	</html>
