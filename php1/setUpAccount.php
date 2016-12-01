<?php
require ('dbHandler.php');

if ($_SERVER["REQUEST_METHOD"] == "POST")
{
  if (!(empty($_POST["first_name"]) || empty($_POST["surname"]) || empty($_POST["pwd"]) || empty($_POST["nick"]) || empty($_POST["age"]) || empty($_POST["mail_addr"])))
  {
    $first_name = test_input($_POST["first_name"]);
    $surname = test_input($_POST["surname"]);
    $pwd = test_input($_POST["pwd"]);
    $nick = test_input($_POST["nick"]);
    $age = test_input($_POST["age"]);
    $mail_addr = test_input($_POST["mail_addr"]);
    if (test_length($first_name) && test_length($surname) && test_length($nick))
    {
      if (test_age($age))
      {
        if (test_pwd($pwd))

        {
          if (test_mail($mail_addr))
          {
            $pwd = password_hash($pwd,PASSWORD_BCRYPT);
            $newUser = new Database_handler($first_name, $surname, $pwd, $nick, $age, $mail_addr);
            $newUser->create_user();
            if ($newUser != NULL)
            {
              header('Location: /php_proj/php1/accountCreatedSuccesfuly.php');
            }
            else
            {
              echo "<h>prbleme</h>";
            }
          }
          else
          {
            $error_name = "Invalid email";
          }
        }
        else
        {
          $error_name = "PASSWD: a-z, A-Z , 0-9, min: 10 char";
        }
      }
      else
      {
        $error_name = "Age out of range <10,99>";
      }
    }
    else
    {
      $error_name = "Check your input length";
    }
  }
  else
  {
    $error_name = "You must fulfill all fields!";
  }
}


function test_pwd($data)
{
  if (strlen($data) >= 10 && strlen($data) <= 128)
  {
    if (preg_match('/[A-Za-z]/', $data))
    {
      if (preg_match('/[0-9]/', $data))
      {
        return true;
      }
      else
      {
        return false;
      }
    }
    else
    {
      return false;
    }
  }
  else
  {
    return false;
  }
}

function test_mail($data)
{
  return filter_var($data, FILTER_VALIDATE_EMAIL);
}

function test_age($data)
{
  return (ctype_digit($data) && ($data >= 10 && $data <= 99));
}

function test_length($data)
{
  return strlen($data) >= 5 && strlen($data) <= 30;
}

function test_input($data)
{
  $data = trim($data);
  $data = htmlspecialchars($data);
  return $data;
}

?>

<html>
   <head>
      <meta charset="UTF-8">
      <title>Set up account</title>
      <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
      <!-- Latest compiled and minified CSS -->
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
      <script   src="http://code.jquery.com/jquery-1.12.4.min.js"></script>
      <!-- Latest compiled and minified JavaScript -->
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
      <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.5.8/angular.min.js"></script>
      <link rel="stylesheet" type="text/css" href="/php_proj/css/account.css">
      <link href="https://fonts.googleapis.com/css?family=Bungee+Inline|Fjalla+One|Shrikhand" rel="stylesheet">
      <script src="/php_proj/js/angular/accountCreationApp.js"></script>
   </head>
   <style>
      input.ng-invalid {
      background-color: red;
      }
      input.ng-valid {
      background-color: green;
      }
      input.ng-pristine {
      background-color:#787878;
      }
   </style>
   <body ng-app="clientValidation">
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
         <h2 id="info">To create new account please fulfill all the following fields.</h2>
         <div class="row">
            <div class="col-md-8">
               <p id="error_msg"><?php echo ((isset($error_name) && $error_name != '') ? $error_name : ''); ?></p>
            </div>
         </div>
      </div>
      <div class="col-md-6 forms">
         <form action = "<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST" name="create_user_form">
            <div class="row">
               <div class="col-md-2"> Name 
               </div>
               <div class="col-md-10" >
                  <input name="first_name" ng-model="first_name" required names-validation placeholder="first name" style="text-align: center">
                  <span class="ok_input" ng-show="create_user_form.first_name.$valid">OK!</span> 
                  <span class="wrong_input" ng-show="create_user_form.first_name.$invalid && create_user_form.first_name.$touched ">USERNAME : 5-30 CHARS</span> 
               </div>
            </div>
            <div class="row" >
               <div class="col-md-2"> Surname
               </div>
               <div class="col-md-10">
                  <input type="text" id="surname" name="surname" ng-model="surname" required names-validation placeholder="second name" style="text-align: center"> 
                  <span class="ok_input" ng-show="create_user_form.surname.$valid">OK!</span> 
                  <span class="wrong_input" ng-show="create_user_form.surname.$invalid && create_user_form.surname.$touched ">SURNAME: 5-30 CHARS</span> 
               </div>
            </div>
            <div class="row">
               <div class="col-md-2"> Password 
               </div>
               <div class="col-md-10">
                  <input type="password" id="pwd" name="pwd" ng-model="pwd" required password-validation placeholder="password" style="text-align:center"> 
                  <span class="ok_input" ng-show="create_user_form.pwd.$valid"> OK!</span>
                  <span class="wrong_input" ng-show="create_user_form.pwd.$invalid && create_user_form.pwd.$touched">PASSWD: a-z, A-Z , 0-9, min: 10 char</span>
               </div>
            </div>
            <div class="row">
               <div class="col-md-2"> Nick
               </div>
               <div class="col-md-10">
                  <input type="text" id="nick" ng-model="nick" name="nick" required names-validation placeholder="user nick" style="text-align: center"> 
                  <span class="ok_input" ng-show="create_user_form.nick.$valid">OK!</span> 
                  <span class="wrong_input" ng-show="create_user_form.nick.$invalid && create_user_form.nick.$touched ">NICK: 5-30 CHARS</span> 
               </div>
            </div>
            <div class="row">
               <div class="col-md-2">Age 
               </div>
               <div class="col-md-10">
                  <input type="number" min="10" max="99" id="age" name="age" ng-model="age" required age-validation placeholder="age"  style="text-align: center;"> 
                  <span class="ok_input" ng-show="create_user_form.age.$valid">OK!</span> 
                  <span class="wrong_input" ng-show="create_user_form.age.$invalid && create_user_form.age.$touched ">AGE: 10 - 100</span> 
               </div>
            </div>
            <div class="row">
               <div class="col-md-2">Mail Address</div>
               <div class="col-md-10">
                  <input type="email" id="mail_addr" name="mail_addr" ng-model="mail_addr" placeholder="email"  required style="text-align: center">
                  <span class="wrong_input" ng-show="create_user_form.mail_addr.$touched && create_user_form.mail_addr.$invalid"> IS NOT MAIL! example@mail.op</span>
                  <span class="ok_input" ng-show="create_user_form.mail_addr.$touched && create_user_form.mail_addr.$valid"> OK!</span>
               </div>
            </div>
            <br/> 
            <div class="row-fluid">
               <button class="btn btn-primary btn btn3d" ng-disabled="create_user_form.$invalid" type="submit">Create account</button>
            </div>
         </form>
      </div>
      <body>
</html>

