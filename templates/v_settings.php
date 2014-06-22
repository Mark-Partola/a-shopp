
<script type="text/javascript">
(function($) {
	$(function() {

		$('ul.tabs').on('click', 'li:not(.current)', function() {
			$(this).addClass('current').siblings().removeClass('current')
				.parents('div#settings').find('div.box').eq($(this).index()).fadeIn(150).siblings('div.box').hide();
		});

	});
})(jQuery)
</script>



<!-- Центральная часть -->
<div id="content_right">

	<h3 class="header_h3">Настройки</h3>
	<div id="settings">

		<ul class="tabs nav">
			<li class="current">Личные данные</li>
			<li>Оформление</li>
			<li>Приватность</li>
			<li>Оповещения</li>
			<li>Черный список</li>
		</ul>

		<!-- ОСНОВНЫЕ НАСТРОЙКИ -->
		<div class="box visible">
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


		<!-- ОФОРМЛЕНИЕ -->
		<div class="box">
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

		<div class="box">
			Страница Приватности
		</div>
		<div class="box">
			Страница Оповещений
		</div>
		<div class="box">
			Страница Черного списка
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

</div>