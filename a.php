<!DOCTYPE html>
<head>
   <meta charset="UTF-8">
   <title>Pentest App Main</title>
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <!-- Latest compiled and minified CSS -->
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
       <link rel="stylesheet" type="text/css" href="/php_proj/css/loginpage.css">
   <script   src="http://code.jquery.com/jquery-1.12.4.min.js"></script>
   <!-- Latest compiled and minified JavaScript -->
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
  <link rel="stylesheet" type="text/css" href="css/setnewaccount.css">
 
    <link rel="stylesheet" type="text/css" href="css/style1.css">
<link href="https://fonts.googleapis.com/css?family=Bungee+Inline|Fjalla+One" rel="stylesheet">
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
     
      <div class="title-and-forms-back">
     
        <div class="text-center title">
         
          <div id="animated-example" class="animated lightSpeedIn ">
             <h1 id="page-title">I don't know app</h1>
             </div>
          </div>
      
      <div class="row">
         <div class="col-md-4">
         </div>
         
         <div class = "col-md-4 forms">
            <form class = "form-group"  method="POST" action ="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
               <p class = "labels" for = "login" style="text-align:center">User Name</p>
               <input type = "login" class = "form-control" id = "login" name="login" placeholder = "Enter user name" >
               </br>
               <p class = "labels" for = "name" style="text-align:center">Password</p>
               <input type = "password" class = "form-control" id = "password" name="password" placeholder = "Enter password">
            
         <div class="col-md-4">
         </div>
      </div>
      </br>  
   </div>
   </br> </br> 
   <div class ="row">
   <div class="col-md-4"> </div>
   <div class="col-md-4">
   <div class="row text-center">  
   <div class="btn-group" style="margin: auto">
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
   </div>
   </form>
         
   

   </br> </br> </br>
    <div style="clear: both;" />
   <div class="row">
    <div class="site-footer">
     <p> JP</p>
     </div>
     <div class="jajebie" style="color:red; padding-bottom: 50px; "> chuj</div>
   </div>
  
   <div class="row">
      <div class="col-md-1">
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
        $password = test_input($_POST["password"]);
        //$password = md5($passwd);
    
          if (Database_handler::find_user($login,$password)) {
          
          $_SESSION["login"] = $login;
        
            header('Location: /php_proj/php1/mainPanel.php'); 
            
            }
            else {
             // echo "Nein";
              }
          
    }
     else {
           // echo "You must fulfill all fields!";
          }
    }
    
     function test_input($data) {
                 $data = trim($data);
                 $data = stripslashes($data);
                 $data = htmlspecialchars($data);
                 return $data;
              }
   
   
   ?>
