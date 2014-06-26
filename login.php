<?
if($_GET['login'] == 'true'){
	session_start();
	$_SESSION['authorize'] = true;
	$_SESSION['id_home'] = 2;
	header('Location: mainpage.php?act=profile&page=' . 2);
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