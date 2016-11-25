<?php
require('dbHandler.php');
session_start();
Database_handler::become_logged_out($_SESSION["login"]);
$_SESSION["islogged"] = false;

session_destroy();


header('Location: /php_proj/a.php');

?>
