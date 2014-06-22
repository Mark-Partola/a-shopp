<?php

require('core.php');

function getUserData($idUser){
	global $db;

	$sql = "SELECT * FROM users WHERE user_ID = $idUser";
	$result = $db->query($sql) or die('Error db');
	if($result)
		return $result->fetch_assoc();
	else{
		return false;
	}
}