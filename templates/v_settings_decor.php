<!-- Центральная часть -->
<div id="content_right">
	<div id="settings">

		<h3 class="header_h3">Настройки</h3>

		<ul class="nav">
			<li><a href="?act=main">Личные данные</a></li>
			<li  class="selected"><a href="?act=decor">Оформление</a></li>
			<li><a href="#">Приватность</a></li>
			<li><a href="#">Оповещения</a></li>
			<li><a href="#">Черный список</a></li>
		</ul>

		<form action="" class="settings_form">
			<div>
				<div class="settings_name">Фотография:</div>
				<div class="settings_action">
					<div class="photo" id="crop_load">
						<img src="public/imgs/avatar.png" alt="">
					</div>
					<div>
						<p>Фотография - лицо в системе shoppinga.net</p>
						<p>Она отображается рядом с Вашими сообщениями</p>
						<div>
							<input type="submit" value="Загрузить">
							<input type="submit" value="Удалить">
						</div>
					</div>
				</div>
			</div>
		</form>

		<form action="" class="settings_form">
			<div>
				<div class="settings_name">Шапка страницы:</div>
				<div class="settings_action">
					<div class="banner" id="crop_load">
						<img src="public/imgs/banner.png" alt="">
					</div>
					<div>
						<p>Шапка страницы - изображение, выводящееся сверху Вашей страницы</p>
						<p>Рекомендованный размер: 1024x300</p>
						<p>Максимальный размер файла 2Мб</p>
						<div>
							<button>Загрузить</button>
							<button>Удалить</button>
						</div>
					</div>
				</div>
			</div>
		</form>

	</div>

	

</div>

<div id="load_and_crop">
	<div id="crop_container">
		<div id="crop_top">
			Размер и положение фотографии<span>Х</span>
		</div>
		<div id="crop_photo">
			<img src="public/imgs/sago.jpg" alt="" id="target">
		</div>
		<div id="crop_action">
			<p></p>
			<div>
				<label>
					<input type="checkbox" id="ar_lock">
				cоблюдать рекомендуемые пропорции</label>
			</div>
			<div id="crop_buttons">
				<button class="cancel">Отмена</button>
				<button id="crop">Применить</button>
			</div>
		</div>
	</div>
</div>

<!-- Конец центральной части -->