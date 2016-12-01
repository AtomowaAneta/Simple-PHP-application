<?php
$pwd = "jebacpolicjea";
$options = [
	'cost' => 11,
];

$pwd = password_hash($pwd,PASSWORD_BCRYPT, $options) + md5($pwd);
echo $pwd. "\n";



?>