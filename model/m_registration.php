<?php

function checkFillField($field, $length = 1){
	if(strlen(clearStr($field)) > $length){
		return clearStr($field);
	} else {
		return false;
	}
}

function checkRegForm(){
	global $db, $feedback;
	
	$dataReg = array(); // поля, возвращаемые после проверок

	$firstname = checkFillField($_POST['firstname']);
	$lastname = checkFillField($_POST['lastname']);
	$patronymic = checkFillField($_POST['patronymic']);
	
	if(checkFillField($_POST['password'], 5)){
		$password = md5((checkFillField($_POST['password'], 5)));
	} else 
		$password = false;
	
	if(preg_match("/^[a-zA-Z0-9_]{4,16}$/", checkFillField($_POST['login']))){
		$login = checkFillField($_POST['login'], 4);
	} else {
		$login = false;
	}
	
	
	if(preg_match("/^([a-zA-Z0-9_]|\\-|\\.)+@(([a-z0-9_]|\\-)+\\.)+[a-z]{2,6}\$/", checkFillField($_POST['email']))){
		$email = checkFillField($_POST['email']);
	} else {
		$email = false;
	}
	

	/*обязательные поля*/
	if($login && $password && $firstname && $lastname && $patronymic && $email){

		/*Проверка логина на занятость*/
		$sql = "SELECT user_ID FROM users WHERE login = '$login'";
		$result = $db->query($sql);

		if(!$result) {
			$feedback[] = 'Ошибка базы данных';
			return false;
		}

		$checkLogin = $result->fetch_assoc();
		if(isset($checkLogin['user_ID'])){
			$feedback[] = 'Этот логин уже занят';
			header('Location: registration.php');
		} else {
			$dataReg['login'] = $login;
			$dataReg['password'] = $password;
			$dataReg['firstname'] = $firstname;
			$dataReg['lastname'] = $lastname;
			$dataReg['patronymic'] = $patronymic;
			$dataReg['email'] = $email;
			return $dataReg;
		}

	} else {
		$feedback[] = "Заполните все обязательные поля!";
		return false;
	}
}

function createNewUser($login, $password, $firstname, $lastname, $patronymic, $email){
	global $db;

	if (!empty($login) 			&& !empty($password) && 
		!empty($firstname) 	&& !empty($lastname) && 
		!empty($patronymic)  && !empty($email))	{

		$sql = "INSERT INTO users(login, password, firstname, lastname, patronymic, email) VALUES(?,?,?,?,?,?)";
		$result = $db->prepare($sql);
		$result->bind_param('ssssss', $login, $password, $firstname, $lastname, $patronymic, $email);

		if($result->execute()){
			return true;
		}else
			return false;

	}
}