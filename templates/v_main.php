<!doctype html>
<html>
<head>
	<title><?=$title?></title>
	<meta charset="UTF-8" >
	<link type="text/css" rel="stylesheet" href="public/css/main_page.css">
	<script type="text/javascript" src="js/jquery.js"></script>

	<script type="text/javascript" src="js/home.js"></script>

	<?=$javascript?>

	<script type="text/javascript">
		$(function(){

			$('#crop_load img').click(function(){
				$('#load_and_crop').fadeIn('slow');
			});

			$('.cancel').click(function(){
				$('#load_and_crop').fadeOut('slow');
			});

			$('#crop_top span').click(function(){
				$('#load_and_crop').fadeOut('slow');
			});
		});
	</script>

</head>

<body>
	<div id="home_header">
		<div id="header_wrapper">
			<img src="public/imgs/logo_home.png" id="header_logo">
			<div id="header_info">
				<ul class="nav">
					<li>Главная</li>
					<li>Доска объявлений</li>
					<li>О проекте</li>
					<li>Реклама</li>
				</ul>
				<form id="header_form">
					<select>
						<option selected="selected">Все города</option>
						<option>Запрудня</option>
					</select>
					<input type="text" placeholder="Поиск"><span></span>
				</form>
			</div>
			<div id="header_avatar_and_logout">
				<img src="public/imgs/avatar.png" alt="">
				<span id="header_name"><a href="#"><?=$userData['firstname']?> <?=$userData['lastname']?></a></span>
				<span id="header_logout"><a href="?act=logout">Выход</a></span>
			</div>
		</div>
	</div>
	
	<div class="wrapper">
	
		<div id="home_container">
		
			<div id="home_banner">
				<img src="public/imgs/banner.png" alt="">
			</div>
			
			<div id="home_nav">
				<ul class="nav">
					<li><a href="#">Все организации</a></li>
					<li><a href="#">Вакансии</a><span class="count"></span></li>
					<li><a href="#">Подписки</a></li>
					<li><a href="#">Чат</a></li>
				</ul>
				<div class="settings">
					<a href="c_settings.php">Настройки</a>
				</div>
				<div id="nav_avatar">
					<img src="public/imgs/avatar.png" alt="">
					<form>
						<input id="status" value="<?=$userData['status']?>">
					</form>
					<div id="triangle"></div>
				</div>
			</div>
			
			<div id="home_content">
				
				<div id="side_bar">
					<div id="about_yourself">
						<h3><?=$userData['firstname']?> <?=$userData['lastname']?></h3>
						<span id="login">(<?=$userData['login']?>)</span>
						<span id="hometown"><?=$userData['town']?></span>
					</div>
					<ul>
						<li><a href="mainpage.php">Моя страница</a></li>
						<li><a href="#">Мои друзья<span class="count">+23</span></a></li>
						<li><a href="#">Мои сообщения<span class="count"></span></a></li>
						<li><a href="#">Моя события<span class="count"></span></a></li>
						<li><a href="#">Мое резюме</a></li>
						<li><a href="#">Мой ежедневник</a></li>
					</ul>
				</div>
			
				<!-- Include templates -->
				<?=$content?>
				<!-- Include templates -->
			
			</div>
		</div> <!-- end home_container -->
		
		<div id="home_footer">
			<div class="nav">
				<ul>
					<li>Новости :</li>
					<li>Поиск :</li>
					<li>О проекте :</li>
					<li>Контакты</li>
				</ul>
			</div>
			<div class="copyright">
				<p>2012 - <?=date('Y', time()) ?> &copy; ООО "НБС-ГРУПП". Все права защищены.</p>
				<p>Использование любый материалов, размещенных на сайте, допускается только с разрешения правообладателя и ссылкой на сайт "www.shoppinga.net".</p>
				<p>При полной или частичной перепечатке текстовых материалов в сети Интернет гиперссылка на "shoppinga.net" обязательна.</p>
			</div>
		</div>
		
	</div>
</body>
</html>