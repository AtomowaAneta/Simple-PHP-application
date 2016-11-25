<?php
require('dbHandler.php');
$users_nick_array = array();
$users_nick = Database_handler::get_all_users();
   foreach ($users_nick as $user_nick ) {
	$users_nick_array[] = $user_nick;
}
echo json_encode(array('userNick' => $users_nick_array));

?>