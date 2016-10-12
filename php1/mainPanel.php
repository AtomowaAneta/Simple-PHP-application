<html>
   <head>
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
				 <?php
			ini_set('session.cookie_httponly', 1);
			$date = getdate();
			echo "<p>Today is <i>$date[weekday]</i> </p>";
			echo "<p><i>$date[mday] of $date[month] , $date[year]</i></p>";
			echo "<p>Hour: <i>$date[hours] : $date[minutes] : $date[seconds] </i></p>";
			?> 
         <br/>
      <form action="/php_proj/php1/goToDb.php" method="POST">
         <button>Go to db</button>
      </form>
      <br/>
      <form action="/php1/ajaxTest.php"></form>
   </body>
</html>
