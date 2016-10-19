<!DOCTYPE html>
<head>
   <meta charset="UTF-8">
   <title>Pentest App Main</title>
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <!-- Latest compiled and minified CSS -->
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
   <link rel="stylesheet" type="text/css" href="css/style1.css">
   <script   src="http://code.jquery.com/jquery-1.12.4.min.js"></script>
   <!-- Latest compiled and minified JavaScript -->
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

 <script>
         function myFunction() {
            location.reload();
         }
      </script>
 <style>
         
        
      </style>

</head>
<body>
   <div class="container-fluid">
      <div class="text-center">
		  <div id="animated-example" class="animated lightSpeedIn">
         <h1>I don't know app</h1>
         </div>
      </div>
      <div class="row">
         <div class="col-md-4">
         </div>
         <div class = "col-md-4" >
            <form class = "form-group" action = "<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>"method="POST">
               <p for = "login" style="text-align:center">UserName</p>
               <input type = "login" class = "form-control" id = "login" name="login" placeholder = "Enter user name" >
               </br>
               <p for = "name" style="text-align:center">Password</p>
               <input type = "password" class = "form-control" id = "password" name="password" placeholder = "Enter password">
         </div>
         <div class="col-md-4">
         </div>
      </div>
      </br>  
   </div>
   <div class ="row">
   <div class="col-md-4"> </div>
   <div class="col-md-4">
   <div class="row text-center">	
   <div class="btn-group">
   <div class="col-md-3">
   <button type="submit" class="btn btn-primary btn btn3d ">Log in</button>
   </div>
   <div class="col-md-3">
   <a href = "/php_proj/php1/setUpAccount.php"class="btn btn-primary btn btn3d ">Sign up</button></a>
   </div>
   <div class="col-md-3">
   <button type="button" class="btn btn-primary btn btn3d ">Forgot password?</button>
   </div>
   </div>
   </div>
   </div>
   <div class="col-md-4">
   </div>
   </div>
   </form>
   </br> </br> </br>
   <div class="row">
      <div class="col-md-8">
         <div class="row">
            <p><?php echo ((isset($nameError) && $nameError != '') ? $nameError : ''); ?> </p>
         </div>
      </div>
   </div>
   </div>
</body>
</html>
<?php 
   require('php1/dbHandler.php');

    session_start();
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
   	if (!(empty($_POST["login"]) || empty($_POST["password"]))){
   			$login = test_input($_POST["login"]);
   			$passwd = test_input($_POST["password"]);
   			$password = md5($passwd);
		
   				if (Database_handler::find_user($login,$password)) {
					
					$_SESSION["login"] = $login;
				
   					header('Location: /php_proj/php1/mainPanel.php');	
						
   					}
   					else {
   						echo "Nein";
   						}
   				
   	}
   	 else {
      			echo "You must fulfill all fields!";
      		}
    }
    
     function test_input($data) {
                 $data = trim($data);
                 $data = stripslashes($data);
                 $data = htmlspecialchars($data);
                 return $data;
              }
   
   
   ?>
