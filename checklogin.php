<?

require('database/connect.php');


$login = strip_tags(trim(($_GET['login'])));

$sql = "SELECT user_ID FROM users WHERE login = '$login'";

$result = $db->query($sql);

if(!$result){
	echo "Ошибка";
	exit;
}

$checkLogin = $result->fetch_assoc();

if(isset($checkLogin['user_ID'])){
	echo 'Этот логин уже занят!';
} else {
	echo 'Логин свободен!';
}

