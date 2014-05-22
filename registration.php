<?php
/************перетащить php в контроллер***************/

if($_SESSION['authorization']){
	header('Location: homepage.php');
	exit;
}

require_once("model/core.php");

// if($_SERVER['REQUEST_METHOD'] == 'POST'){
if(isset($_POST['send'])){
	if($dataReg = checkRegForm()){
		echo "ок ";
		$createUser = createNewUser($dataReg['login'],
									$dataReg['password'],
									$dataReg['firstname'],
									$dataReg['lastname'],
									$dataReg['email']
								);

		if($createUser){
			$_SESSION['authorization'] = true; //doit
			header('Location: homepage.php');
			exit;
		}

	} else {
		echo "Errors: <pre>";
			print_r($feedback);
		echo "</pre>";
	}
}

?>


<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Registration</title>
	<link rel="stylesheet" href="reg.css">
</head>
<body>

	<form action="" method="POST">
		<label>Firstname: <input type="text" name="firstname" placeholder="firstname"></label>
		<label>Lastname: <input type="text" name="lastname" placeholder="lastname"></label>
		<label>Login: <input type="text" name="login" placeholder="login"></label>
		<label>Email: <input type="text" name="email" placeholder="email"></label>
		<label>Password: <input type="password" name="password" placeholder="password"></label>
		<label>Repeat the password: <input type="password" name="checkPassword"  placeholder="repeat the password">
		<input type="submit" value="Send" name="send">
	</form>

</body>
</html>