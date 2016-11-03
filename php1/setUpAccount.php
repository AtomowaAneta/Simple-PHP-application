 <?php
require('dbHandler.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (!(empty($_POST["first_name"]) || empty($_POST["surname"]) || empty($_POST["pwd"]) || empty($_POST["nick"]) || empty($_POST["age"]) || empty($_POST["mail_addr"]))) {
        if (test_input($_POST["first_name"]) && test_input($_POST["surname"]) && test_input($_POST["surname"]) && test_input($_POST["pwd"]) && test_input($_POST["nick"]) && test_input($_POST["age"]) && test_input($_POST["mail_addr"])) {
            $first_name = $_POST["first_name"];
            $surname    = $_POST["surname"];
            $pwd        = $_POST["pwd"];
            $nick       = $_POST["nick"];
            $age        = $_POST["age"];
            $mail_addr  = $_POST["mail_addr"];
            
            $newUser = new Database_handler($first_name, $surname, $pwd, $nick, $age, $mail_addr);

            $newUser->create_user();
            

            
          
            if ($newUser != NULL) {
                
                header('Location: /php_proj/php1/accountCreatedSuccesfuly.php');
            } else {
                echo "<h>prbleme</h>";
            }
            
             
        } 
       
        else {
            $error_name = "You have inserted forbidden characters";
        }
        
        
    }
    
    else {
        $error_name = "You must fulfill all fields!";
    }
    
}


function test_input($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    
    return true;
}
?> 
<html>
   <body>
      <head>
         <meta charset="UTF-8">
         <title>Set up account</title>
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
         <!-- Latest compiled and minified CSS -->
         <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
         <script   src="http://code.jquery.com/jquery-1.12.4.min.js"></script>

         <!-- Latest compiled and minified JavaScript -->
         <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

          <link rel="stylesheet" type="text/css" href="/php_proj/css/account.css">
      </head>
               <style>

              
      </style>
  
 
      
      <div class="container-fluid">
      <div class="row">
         <div class="col-md-12 text-center">
			  <div id="animated-example" class="animated lightSpeedIn">
            <h1 id="title">Set up your account</h1>
            </div>
         </div>
      </div>
      </br></br>
      <div class="row">
      <div class="col-md-4">
      </div>
      <div class="col-md-2">
         <h2 id="info">To create new account please fulfill all following fields.</h2>
         <div class="row">
            <div class="col-md-8">
               <p id="error_msg"><?php echo ((isset($error_name) && $error_name != '') ? $error_name : ''); ?></p>
            </div>
         </div>
      </div>
      <div class="col-md-6 forms">
         <form action = "<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
            <div class="row">
               <div class="col-md-1"> Name 
               </div>
               <div class="col-md-1" >
                  <input type="text" id="first_name" name="first_name"> <br/>
               </div>
            </div>
            <div class="row" >
               <div class="col-md-1"> Surname
               </div>
               <div class="col-md-1">
                  <input type="text" id="surname" name="surname" style="padding-left: 15px;"> <br/>
               </div>
            </div>
            <div class="row">
               <div class="col-md-1"> Password 
               </div>
               <div class="col-md-1">
                  <input type="password" id="pwd" name="pwd"> <br/>
               </div>
            </div>
            <div class="row">
               <div class="col-md-1"> Nick
               </div>
               <div class="col-md-2">
                  <input type="text" id="nick" name="nick"> <br/>
               </div>
            </div>
            <div class="row">
               <div class="col-md-1">Age 
               </div>
               <div class="col-md-1">
                  <input type="text" id="age" name="age"> <br/>
               </div>
            </div>
            <div class="row">
               <div class="col-md-1"> Mail address 
               </div>
               <div class="col-md-1">
                  <input type="text" id="mail_addr" name="mail_addr">	
               </div>
            </div>
            <br/> 
            <div class="row-fluid">
               <button class="btn btn-primary btn btn3d " type="submit">Create account</button>
            </div>
         </form>
      </div>
      <body>
</html>


