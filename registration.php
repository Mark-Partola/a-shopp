<?php

if($_SESSION['authorization']){
	header('Location: homepage.php');
	exit;
}

require_once("model/core.php");

if(isset($_POST['send'])){
	if($dataReg = checkRegForm()){
		$createUser = createNewUser($dataReg['login'],
									$dataReg['password'],
									$dataReg['firstname'],
									$dataReg['lastname'],
									$dataReg['patronymic'],
									$dataReg['email']
								);

		if($createUser){
			$_SESSION['authorization'] = true;
			header('Location: homepage.php');
			exit;
		}

	} else {
		echo "<div id='server_error'>Пожалуйста, заполните форму правильно!</div>";
	}
}

?>


<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Регистрация | shoppinga.net</title>
	<link rel="stylesheet" type="text/css" href="public/css/reg.css">
	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/jquery.validate.min.js"></script>
	<!-- // <script type="text/javascript" src="js/validateForm.js"></script> -->

	<script type="text/javascript">

		/*только новые браузеры*/
		function getXMLHttpRequest(){
			if(document.XMLHttpRequest)
				return new XMLHttpRequest();
			else
				return false;
		}

		function checkLogin(login){
			var request = new XMLHttpRequest();

			request.onreadystatechange = function(){
				if(request.readyState == 4){
					var checkLogin = $('#checkLogin');
					checkLogin.text(request.responseText);
				}
			};

			request.open("GET", "checklogin.php?login=" + login, true);
			request.send(null);
		}

		function checkFieldLength(selector, length){
			$(selector).focus(function(){
				$(this).keyup(function(){
					// alert($(this).val());

					if($(this).val().length > length){
						var lastname = $(selector + ' + label');
						lastname.text('Превосходно!');
						lastname.css('color', '#292');
					}
				});
			});
		}

		$(document).ready(function(){

			$('input[name=login]').focus(function(){

				$(this).keyup(function(){

					var login = $('input[name=login]').val();
					console.log(login);

					if(login.length >= 6)
						checkLogin(login);
				});
			});

			if($('#server_error:visible')){
				$('#server_error').animate({'' : ''},5000).fadeOut(5000);
			}

			checkFieldLength('input[name=firstname]', 1);
			checkFieldLength('input[name=lastname]', 1);
			checkFieldLength('input[name=patronymic]', 1);
			checkFieldLength('input[name=password]', 5);
		});

	</script>

</head>
<body>

	<div id="header_reg">
		<img src="public/imgs/logo.png" alt="">
	</div>
	<div id="content_reg">
		<h1>Присоединяйтесь к shoppinga.net прямо сейчас!</h1>
		<div id="steps">
			<div class="step">
				<img src="public/imgs/step1.png" alt="">
				<span>ШАГ 1</span>
				<p>Зарегистрируйтесь</p>
			</div>
			<div class="step">
				<img src="public/imgs/step2.png" alt="">
				<span>ШАГ 2</span>
				<p>Настройте оформление</p>
			</div>
			<div class="step">
				<img src="public/imgs/step3.png" alt="">
				<span>ШАГ 3</span>
				<p>Используйте новые возможности</p>
			</div>
		</div>

	<form action="" method="POST" id="form_reg">
		<label for="lastname">Фамилия</label>
		<div>
			<input type="text" name="lastname" placeholder="Иванов" id="lastname">
			<label class="error" style="color: #888; font-size: 0.8em">Введите вашу фамилию</label>
		</div>

		<label for="firstname">Имя</label>
		<div>
			<input type="text" name="firstname" placeholder="Иван" id="firstname">
			<label class="error" style="color: #888 !important; font-size: 0.8em">Введите ваше имя</label>
		</div>
		<label for="patronymic">Отчество</label>
		<div>
			<input type="text" name="patronymic" placeholder="Иванович" id="patronymic">
			<label class="error" style="color: #888 !important; font-size: 0.8em">Введите ваше отчество</label>
		</div>
		<label for="email">Электронная почта</label>
		<div>
			<input type="text" name="email" placeholder="email" id="email">
			<label class="error" style="color: #888 !important; font-size: 0.8em">Адрес электронной почты</label>
		</div>
		<label for="login">Придумайте себе псевдоним</label>
		<div>
			<input type="text" name="login" placeholder="Псевдоним" id="login">
			<label class="error" style="color: #888 !important; font-size: 0.8em" id="checkLogin">Вы можете изменить его позже</label>
		</div>
		<label for="password">Пароль</label>
		<div>
			<input type="password" name="password" placeholder="Пароль" id="password">
			<label class="error" style="color: #888 !important; font-size: 0.8em">6 знаков или больше</label>
		</div>

		<label for="check">Повторите пароль</label>
		<div><input type="password" name="checkPassword" placeholder="Повторите пароль" id="check"></div>
		
		<input type="submit" value="Создать учетную запись" name="send">

		<p class="info_reg">
			Вас можно будет найти на сайте по имени, фамилии, псевдониму.<br>
			Адрес электронной почты будет скрыт от других пользователей.<br>
			Вы можете изменить настройки в любое время.<br>
		</p>
	</form>

</body>
</html>
