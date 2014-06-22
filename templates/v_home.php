<div id="content_right">
	<div id="profile_info">
		<h3 class="header_h3">Моя страница</h3>
		<table>
			<tr>
				<td></td>
				<td>День рождения:</td>
				<td><?=$userData['birthday']?></td>
			</tr>
			<tr>
				<td></td>
				<td>Город:</td>
				<td><?=$userData['town']?></td>
			</tr>
			<tr>
				<td></td>
				<td>Телефон:</td>
				<td><?=$userData['phone']?></td>
			</tr>
			<tr>
				<td></td>
				<td>E-mail:</td>
				<td><?=$userData['email']?></td>
			</tr>
			<tr>
				<td></td>
				<td>Работа:</td>
				<td><?=$userData['work']?></td>
			</tr>
			<tr>
				<td></td>
				<td>Должность:</td>
				<td>Руководитель</td>
			</tr>
			<tr>
				<td></td>
				<td>Образование:</td>
				<td><?=$userData['education']?></td>
			</tr>
			<tr>
				<td></td>
				<td>Специальность:</td>
				<td>Инженер</td>
			</tr>
			<tr>
				<td></td>
				<td>Резюме:</td>
				<td>Показать</td>
			</tr>
		</table>
	</div>

	<div id="wall">
		<div id="new_post">
			<form action="">
				<textarea id="" placeholder="Написать новость"></textarea>
				<input type="submit" value="Опубликовать">
			</form>
		</div>

		<div class="entry">
			<div class="avatar">
				<img src="public/imgs/avatar.png" alt="">
			</div>
			<div class="post">
				<h4><?=$userData['firstname']?> <?=$userData['lastname']?></h4>
				<p class="date">30 мар в 20:53</p>
				<p class="entry_text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas imperdiet aliquet odio eget posuere. Donec in velit molestie erat sodales convallis. Suspendisse id diam vitae augue blandit rhoncus. Nullam nisl mauris, mollis id lorem in, viverra mattis lorem. Aliquam feugiat in purus ut blandit. Aliquam varius ac elit sed faucibus. Pellentesque porta accumsan ipsum, eu sodales sapien interdum et. Quisque eu leo sed tortor lacinia lobortis a sit amet tortor. Praesent ornare ullamcorper purus, sit amet scelerisque diam placerat non. Pellentesque aliquet consectetur augue varius aliquam. Mauris leo orci, interdum id accumsan et, suscipit eget tellus. Morbi posuere dignissim lectus ac interdum. Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p>

				<div class="actions_post">
					<span class="action_post_comment">Комментировать</span>
					<div>
						<span>Добавить к себе</span>
						<span class="like">Нравится</span>
						<span class="likes">20</span>
					</div>
				</div>

				<div class="comments">
					<h5>Комментарии (показать)</h5>
					<div class="body_comment">
						<div class="avatar">
							<img src="public/imgs/avatar.png" alt="">
						</div>
						<div class="comment post">
							<h4>Имя Фамилия</h4>
							<p class="date">30 мар в 20:53</p>
							<p class="entry_text">Lorem ipsumpsumpsumpsumpsumpsumpsumpsumpsumpsumpsumpsumpsumpsumpsumpsumpsumpsumpsumpsumpsumpsumpsumpsumpsumpsumpsumpsumpsumpsumpsumpsumpsumpsumpsumpsumpsumpsumpsumpsumpsumpsumpsumpsumpsumpsumpsumpsumpsumpsumpsumpsumpsumpsumpsumpsumpsumpsumpsumpsumpsumpsumpsumpsumpsumpsumpsumpsumpsumpsumpsumpsumpsumpsumpsumpsumpsumpsumpsumpsumpsumpsumpsumpsumpsumpsumpsumpsumpsumpsumpsum</p>
						</div>
						<div class="actions_comment">
							<span class="like"></span>
							<span class="likes">23</span>
						</div>
					</div>

					<div class="body_comment">
						<div class="avatar">
							<img src="public/imgs/avatar.png" alt="">
						</div>
						<div class="comment post">
							<h4>Имя Фамилия</h4>
							<p class="date">30 мар в 20:53</p>
							<p class="entry_text">Lorem ipsumLorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas imperdiet aliquet odio eget posuere. Donec in velit molestie erat sodales convallis. Suspendisse id diam vitae augue blandit rhoncus. Nullam nisl mauris, mollis id lorem in, viverra mattis lorem. Aliquam feugiat in purus ut blandit. Aliquam varius ac elit sed faucibus. Pellentesque porta accumsan ipsum, eu sodales sapien interdum et. Quisque eu leo sed tortor lacinia lobortis a sit amet tortor. Praesent ornare ullamcorper purus, sit amet scelerisque diam placerat non. Pellentesque aliquet consectetur augue varius aliquam. Mauris leo orci, interdum id accumsan</p>
						</div>

						<div class="actions_comment">
							<span class="like"></span>
							<span class="likes">23</span>
						</div>
					</div>

					<div class="body_comment">
						<div class="avatar">
							<img src="public/imgs/avatar.png" alt="">
						</div>
						<div class="comment post">
							<h4>Имя Фамилия</h4>
							<p class="date">30 мар в 20:53</p>
							<p class="entry_text">Lorem ipsum</p>
						</div>

						<div class="actions_comment">
							<span class="like"></span>
							<span class="likes">23</span>
						</div>
					</div>

				</div>

				<div class="add_comment">
					<form action="">
						<textarea id="" placeholder="Ваш комментарий"></textarea>
						<input type="submit" value="Отправить">
					</form>
				</div>
			</div>
		</div>


		


		<div class="entry">
			<div class="avatar">
				<img src="public/imgs/avatar.png" alt="">
			</div>
			<div class="post">
				<h4><?=$userData['firstname']?> <?=$userData['lastname']?></h4>
				<p class="date">30 мар в 20:53</p>
				<p class="entry_text">Lorem ipsum</p>

				<div class="actions_post">
					<span class="action_post_comment">Комментировать</span>
					<div>
						<span>Добавить к себе</span>
						<span class="like">Нравится</span>
						<span class="likes">20</span>
					</div>
				</div>

				<div class="comments">
					<h5>Комментарии (показать)</h5>
				</div>

				<div class="add_comment">
					<form action="">
						<textarea id="" placeholder="Ваш комментарий"></textarea>
						<input type="submit" value="Отправить">
					</form>
				</div>
			</div>
		</div>


		<div class="entry">
			<div class="avatar">
				<img src="public/imgs/avatar.png" alt="">
			</div>

			<div class="post">
				<h4><?=$userData['firstname']?> <?=$userData['lastname']?></h4>
				<div class="entry repost_entry">
					<div class="avatar">
						<img src="public/imgs/repost_avatar.png" alt="">
					</div>
					<img src="public/imgs/repost_separator.png" alt="" class="repost_separator">

					<div class="repost">
						<h4>Имя Фамилия</h4>
						<p class="date">30 мар в 20:53</p>
						<p class="entry_text">Lorem ipsum doltor. Praesent ornare ullamcorper purus, sit amet scelerisque diam placerat non. Pellentesque aliquet consectetur augue varius aliquam. Maurr sit amet </p>

						<div class="actions_post">
							<span class="action_post_comment">Комментировать</span>
							<div>
								<span>Добавить к себе</span>
								<span class="like">Нравится</span>
								<span class="likes">20</span>
							</div>
						</div>

					</div>

				</div>
				
				<div class="comments">
					<h5>Комментарии (показать)</h5>
					<div class="body_comment">
						<div class="avatar">
							<img src="public/imgs/avatar.png" alt="">
						</div>
						<div class="comment post">
							<h4>Имя Фамилия</h4>
							<p class="date">30 мар в 20:53</p>
							<p class="entry_text">Lorem ipsumLorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas imperdiet aliquet odio eget posuere. Donec in velit molestie erat sodales convallis. Suspendisse id di varius aliquam. Mauris leo orci, interdum id accumsan</p>
						</div>

						<div class="actions_comment">
							<span class="like"></span>
							<span class="likes">23</span>
						</div>
					</div>
				</div>

				<div class="add_comment">
					<form action="">
						<textarea id="" placeholder="Ваш комментарий"></textarea>
						<input type="submit" value="Отправить">
					</form>
				</div>

			</div>
		</div>



	</div>
</div>