<?php

require_once('model/m_include_views.php');


$cropping =	'<script type="text/javascript">' . include_views('js/jquery.Jcrop.min.js') . '</script>' . 
				'<script type="text/javascript">' . include_views('js/crop.js') . '</script>' . 
				'<style type="text/css">' . include_views('public/css/jquery.Jcrop.min.css') . '</style>';

$title   = 'Настройки | shoppinga.net';
$content =  include_views('templates/v_settings.php');
$page    =  include_views('templates/v_main.php', array('content' => $content, 'title' => $title, 'javascript' => $cropping));

echo $page;