<?php

require_once('model/m_include_views.php');


$act = isset($_GET['act']) ? $_GET['act'] : 'main';

switch($act){
	case 'main':

		$content =  include_views('templates/v_settings_main.php');
		$page    =  include_views('templates/v_main.php', array('content' => $content, 'title' => $title));

		echo $page;
		break;

	case 'decor':

		//Кропирование
		$javascript =
						'<script type="text/javascript">' . include_views('js/jquery.Jcrop.min.js') . '</script>' . 
						'<script type="text/javascript">' . include_views('js/crop.js') . '</script>' . 
						'<style type="text/css">' . include_views('public/css/jquery.Jcrop.min.css') . '</style>';

		$title   = 'Настройки | shoppinga.net';
		$content =  include_views('templates/v_settings_decor.php');
		$page    =  include_views('templates/v_main.php', array('content' => $content, 'title' => $title, 'javascript' => $javascript));

		echo $page;
		break;

	default:
		header('Location: ?act=main'); //404 error
}