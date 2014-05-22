<?

if(!$_SESSION['authorization']){
	header('Location: registration.php');
	exit;
}

if(isset($_GET['exit'])){
	$_SESSION['authorization'] = false;
	header('Location: registration.php');
	exit;
}

?>

<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Home</title>
</head>
<body>
	<h1>Начальная страница юзера</h1>
	<form action="" method="GET">
		<input type="submit" name="exit" value="LOGOUT">
	</form>
</body>
</html>