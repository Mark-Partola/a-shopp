<?
require_once('model/m_include_views.php');
require_once('model/m_personal_data.php');

session_start();

if($_SESSION['authorize'] == false){
	header('Location: login.php');
}

$action = isset($_GET['act']) ? $_GET['act'] : 'profile';

if(isset($_GET['page'])){
	if(intval($_GET['page'])){
		$page = abs((int)$_GET['page']);
	} else {
		$page = $_SESSION['id_home'];
	}
} else {
	$page = $_SESSION['id_home'];
}

$personalData = getUserData($page);

switch($action){
	case 'logout':
		$_SESSION['authorize'] = false;
		header('Location: login.php');
		break;

	case 'return' :
		$page = $_SESSION['id_home'];
		header('Location: ?act=profile&page=' . $page);
		break;

	case 'edit' :
		$js =	'<script type="text/javascript">' . include_views('js/jquery.Jcrop.min.js') . '</script>' . 
				'<script type="text/javascript">' . include_views('js/crop.js') . '</script>' . 
				'<style type="text/css">' . include_views('public/css/jquery.Jcrop.min.css') . '</style>';

		$title   = 'Настройки | shoppinga.net';
		$content =  include_views('templates/v_settings.php');
		break;

	case 'profile' :
		$title   = 'Домашняя страница | shoppinga.net';
		$content =  include_views('templates/v_home.php', array('userData' => $personalData));
		break;
}


$page = include_views('templates/v_main.php', array('content' => $content, 'title' => $title, 'javascript' => $js, 'userData' => $personalData));

echo $page;