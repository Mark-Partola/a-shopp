<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Регистрация | Shoppinga.net</title>
	<link rel="stylesheet" type="text/css" href="public/css/reg.css">
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
				<img src="public/imgs/step1.png" alt="">
				<span>ШАГ 1</span>
				<p>Зарегистрируйтесь</p>
			</div>
			<div class="step">
				<img src="public/imgs/step1.png" alt="">
				<span>ШАГ 1</span>
				<p>Зарегистрируйтесь</p>
			</div>
		</div>

		<form action="registration.php" method="POST" id="form_reg">
			<label>Фамилия<input type="text" placeholder="Иванов"></label>
			<label>Имя<input type="text" placeholder="Иван"></label>
			<label>Отчество<input type="text" placeholder="Иванович"></label>
			<label>Электронная почта<input type="text" placeholder="e-mail"></label>
			<label>Пароль<input type="password" placeholder="Пароль"></label>
			<label>Повторите пароль<input type="password" placeholder="Еще раз пароль"></label>
			<label>Придумайте себе псевдоним<input type="text" placeholder="Псевдоним"></label>

			<input type="submit" value="Создать учетную запись">

			<p class="info_reg">Вас можно будет найти на сайте по имени, фамилии, псевдониму.</p>
			<p class="info_reg">Адрес электронной почты будет скрыт от других пользователей.</p>
			<p class="info_reg">Вы можете изменить настройки в любое время.</p>
		</form>

		
	</div>
</body>
</html>