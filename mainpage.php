<?
require_once('model/m_include_views.php');
require_once('model/m_personal_data.php');

session_start();

if($_SESSION['authorize'] == false){
	header('Location: login.php');
}

switch($_GET['act']){
	case 'logout':
		$_SESSION['authorize'] = false;
		header('Location: login.php');
		break;
}


$personalData = getUserData(1);

$title   = 'Домашняя страница | shoppinga.net';
$content =  include_views('templates/v_home.php', array('userData' => $personalData));
$page    =  include_views('templates/v_main.php', array('content' => $content, 'title' => $title, 'userData' => $personalData));

echo $page;