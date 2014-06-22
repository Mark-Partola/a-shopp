<?
if($_GET['login'] == 'true'){
	session_start();
	$_SESSION['authorize'] = true;
	header('Location: mainpage.php');
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Login</title>
</head>
<body>
	<h1><a href="?login=true">Войти</a></h1>
	<h1><a href="registration.php">Зарегистрироваться</a></h1>
</body>
</html>