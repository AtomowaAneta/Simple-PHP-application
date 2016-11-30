<?php 
   require('php1/dbHandler.php');

       
    if ($_SERVER["REQUEST_METHOD"] == "POST") {

    if (!(empty($_POST["login"]) && empty($_POST["password"]))){
        $login = test_input($_POST["login"]);
        $password = test_input($_POST["password"]);
        //$password = md5($passwd);
    
          if (Database_handler::find_user($login,$password)) {
         
           session_start();
          $_SESSION["login"] = $login;
          $_SESSION["islogged"] = true;
        
            header('Location: /php_proj/php1/mainPanel.php'); 
            
            }
            else {
              $error_name = "User does not exist";
              }
          
    }
     else {
            $error_name = "You must fulfill all fields!";
          }
        }

   
    
     function test_input($data) {
                 $data = trim($data);
                 $data = stripslashes($data);
                 $data = htmlspecialchars($data);
                 
                 return $data;
              }
   
   
   ?>

<!DOCTYPE html>
<head>
   <meta charset="UTF-8">
   <title>Pentest App Main</title>
   <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
   <!-- Latest compiled and minified CSS -->
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

       <link rel="stylesheet" type="text/css" href="/php_proj/css/loginpage.css">
   <script   src="http://code.jquery.com/jquery-1.12.4.min.js"></script>
   <!-- Latest compiled and minified JavaScript -->
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

 
    <link rel="stylesheet" type="text/css" href="css/style1.css">
<link href="https://fonts.googleapis.com/css?family=Bungee+Inline|Fjalla+One" rel="stylesheet">

   <link rel="stylesheet" type="text/css" href="css/style1.css">
   <script   src="http://code.jquery.com/jquery-1.12.4.min.js"></script>
   <!-- Latest compiled and minified JavaScript -->
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
   <link rel="icon" type="image/png" href="/php_proj/img/question.jpg">


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

   <div class="col-md-12">
   <div class="row text-center">  
   <div class="btn-group" style="text-align: cetner;">
   <div class="col-md-3">
   <button type="submit" class="btn btn-primary btn btn3d ">Log in</button>
   </div>
   <div class="col-md-3">
   <a href = "/php_proj/php1/setUpAccount.php"class="btn btn-primary btn btn3d ">Sign up</button></a>
   </div>
   <div class="col-md-5">
   <button type="button" class="btn btn-primary btn btn3d ">Forgot password?
    
   </div>

   </div>
   

   </div>
   </div>
   </div>
   </form>

         
  

   </br> </br> </br>
    <div class="row" >
      <div class="col-md-12">
         <div class="row" >
              <p id="error_msg" style="text-align: center;"><?php echo ((isset($error_name) && $error_name != '') ? $error_name : ''); ?></p>
         </div>
      </div>
   </div>
  
    
   

</div>
 </div>

  
<footer class="footer navbar-fixed-bottom">Footer!</footer>


</body>
</html>



