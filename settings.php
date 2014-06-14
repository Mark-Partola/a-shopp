<!doctype html>
<html>
<head>
	<title>Home | shoppinga.net</title>
	<meta charset="UTF-8" >
	<link type="text/css" rel="stylesheet" href="public/css/main_page.css">
	<script type="text/javascript" src="js/jquery.js"></script>
	
	<script>


		$(document).ready(function(){

			/*Limit status length*/
			var statusText = $('#status').val();
			if(statusText.length > 35){
				statusText = statusText.substr(0, 33) + '...';
				$('#status').val(statusText);
			}

			/*Display span.count*/
			$(".count").each(function(){
				if($(this).text().length == 0){
					$(this).css('display', 'none');
				} else {
					$(this).css('display', 'inline');
				}
			});

			/*comments toggle*/

			$(".comment").click(function(){
				$(".add_comment").toggle();
			});

			$('.add_comment textarea').focus(function(){
				$(this).next('input[type=submit]').animate({
					'height' : '30px',
					'opacity' : '1'
				});
			});

			$(document).click(function(event){
				if($(event.target).closest('.add_comment').length){
					return;
				}
				$('.add_comment input[type=submit]').animate({
					'opacity' : '0',
				});
				event.stopPropagation();
			});
/*******************************************/


			$('#new_post textarea').focus(function(){
				$(this).next('input[type=submit]').animate({
					'height' : '30px',
					'opacity' : '1'
				});
				$('#new_post').animate({
					'min-height' : '100px',
				});
			});

			$(document).click(function(event){
				if($(event.target).closest('#new_post').length){
					return;
				}
				$('#new_post input[type=submit]').animate({
					'opacity' : '0',
				});
				$('#new_post').animate({
					'min-height' : '60px',
				});
				event.stopPropagation();
			});

			/* toggle visible comments*/

			//if comments exists
			$('.comments h5').each(function(){
				if(!$(this).nextAll().length){
					$(this).css('display', 'none');
				} else {
					$(this).text('Комментарии ' + $(this).nextAll().length + ' (показать)');
				}
			});

			//onclick
			$('.comments h5').on('click', function(){
				$(this).nextAll().fadeToggle();
			});

			$('.comments h5').click(function(){
				if($(this).next().css('opacity') == '0'){
					$(this).text('Комментарии (скрыть)');
				}else{
					$(this).text('Комментарии ' + $(this).nextAll().length + ' (показать)');
				}
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
				<span id="header_name"><a href="#">Имя Фамилия</a></span>
				<span id="header_logout"><a href="#">Выход</a></span>
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
					<li><a href="#">Вакансии</a><span class="count">+100</span></li>
					<li><a href="#">Подписки</a></li>
					<li><a href="#">Чат</a></li>
				</ul>
				<div class="settings">
					Настройки
				</div>
				<div id="nav_avatar">
					<img src="public/imgs/avatar.png" alt="">
					<form>
						<input id="status" value="Статусasdasd asdasd dasdasd dsadasd sdasda">
					</form>
					<div id="triangle"></div>
				</div>
			</div>
			
			<div id="home_content">
				
				<div id="side_bar">
					<div id="about_yourself">
						<h3>Имя Фамилия</h3>
						<span id="login">(Login)</span>
						<span id="hometown">Талдом</span>
					</div>
					<ul>
						<li><a href="mainpage.html">Моя страница</a></li>
						<li><a href="#">Мои друзья<span class="count">+23</span></a></li>
						<li><a href="#">Мои сообщения<span class="count"></span></a></li>
						<li><a href="#">Моя события<span class="count"></span></a></li>
						<li><a href="#">Мое резюме</a></li>
						<li><a href="#">Мой ежедневник</a></li>
					</ul>
				</div>
			


				<!-- Центральная часть -->
				<div id="content_right">
					<div id="settings">

						<h3 class="header_h3">Настройки</h3>

						<ul class="nav">
							<li class="selected"><a href="#">Личные данные</a></li>
							<li><a href="#">Оформление</a></li>
							<li><a href="#">Приватность</a></li>
							<li><a href="#">Оповещения</a></li>
							<li><a href="#">Черный список</a></li>
						</ul>

						<form action="" class="settings_form">
							<div>
								<div class="settings_name">Фамилия:</div>
								<div class="settings_action"><input type="text" placeholder="Фамилия"></div>
							</div>
							<div>
								<div class="settings_name">Имя:</div>
								<div class="settings_action"><input type="text" placeholder="Имя"></div>
							</div>
							<div>
								<div class="settings_name">Отчество:</div>
								<div class="settings_action"><input type="text" placeholder="Отчество"></div>
							</div>
							<div>
								<div class="settings_name">Дата Рождения:</div>
								<div class="settings_action">
									<select class="settings_select">
										<option>1</option>
										<option>2</option>
									</select>
									<select class="settings_select">
										<option>Январь</option>
										<option>Февраль</option>
									</select>
									<select class="settings_select">
										<option>1920</option>
										<option>1921</option>
									</select>
								</div>
							</div>
							<div>
								<div class="settings_name"></div>
								<div class="settings_action">
									<input type="submit" value="Сохранить">
								</div>
							</div>
						</form>

						<form action="" class="settings_form">
							<div>
								<div class="settings_name">Старый пароль:</div>
								<div class="settings_action"><input type="password" placeholder="Старый пароль"></div>
							</div>
							<div>
								<div class="settings_name">Новый пароль:</div>
								<div class="settings_action"><input type="password" placeholder="Новый пароль"></div>
							</div>
							<div>
								<div class="settings_name">Повторите пароль:</div>
								<div class="settings_action"><input type="password" placeholder="Повторите пароль"></div>
							</div>
							<div>
								<div class="settings_name"></div>
								<div class="settings_action">
									<input type="submit" value="Сохранить">
								</div>
							</div>
						</form>

						<form action="" class="settings_form">
							<div>
								<div class="settings_name">E-mail:</div>
								<div class="settings_action"><input type="password" placeholder="Введите электронную почту"></div>
							</div>
							<div>
								<div class="settings_name"></div>
								<div class="settings_action">
									<input type="submit" value="Сохранить">
								</div>
							</div>
						</form>

						<form action="" class="settings_form">
							<div>
								<div class="settings_name">Телефон:</div>
								<div class="settings_action"><input type="password" placeholder="Введите номер телефона"></div>
							</div>
							<div>
								<div class="settings_name"></div>
								<div class="settings_action">
									<input type="submit" value="Сохранить">
								</div>
							</div>
						</form>

						<form action="" class="settings_form">
							<div>
								<div class="settings_name">Адрес страницы:</div>
								<div class="settings_action"><input type="password" placeholder=""></div>
							</div>
							<div>
								<div class="settings_name"></div>
								<div class="settings_action">
									<input type="submit" value="Сохранить">
								</div>
							</div>
						</form>

					</div>

				</div>

				<!-- Конец центральной части -->

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