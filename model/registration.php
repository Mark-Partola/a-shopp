<?php

function checkFillField($field, $length = 3){
	global $feedback;
	if(strlen(clearStr($field)) > $length){
		return clearStr($field);
	} else {
		$feedback[] = "должно  быть длиннее $length символов!";
		return false;
	}
}

function checkRegForm(){
	global $db, $feedback;
	$dataReg = array(); // поля, возвращаемые после проверок
	define("MIN_LEN_FIELD", 6);

	$firstname = checkFillField($_POST['firstname']);
	$lastname = checkFillField($_POST['lastname']);
	$login = checkFillField($_POST['login'], MIN_LEN_FIELD);
	$password = md5(checkFillField($_POST['password'], MIN_LEN_FIELD));	
	$email = checkFillField($_POST['email']); /********************доделать!!!**RegExp*******************/

	/*обязательные поля*/
	if($login && $password && $firstname && $lastname && $email){

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
			$dataReg['email'] = $email;
			return $dataReg;
		}

	} else {
		$feedback[] = "Заполните все обязательные поля!";
		return false;
	}
}

function createNewUser($login, $password, $firstname, $lastname, $email){
	global $db;

	if (!empty($login) && !empty($password) && !empty($firstname) && !empty($lastname) && !empty($email)){
		$sql = "INSERT INTO users(login, password, firstname, lastname, email) VALUES(?,?,?,?,?)";
		$result = $db->prepare($sql);
		$result->bind_param('sssss', $login, $password, $firstname, $lastname, $email);

		if($result->execute()){
			echo "New user created!";
			return true;
		}else
			echo "New user don't created!";
			return false;

	}
}