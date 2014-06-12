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
			
			
			if(localStorage['lastname'])		$('input[name=lastname]').val(localStorage['lastname']);
			if(localStorage['firstname'])		$('input[name=firstname]').val(localStorage['firstname']);
			if(localStorage['patronymic'])		$('input[name=patronymic]').val(localStorage['patronymic']);
			if(localStorage['login'])			$('input[name=login]').val(localStorage['login']);
			if(localStorage['email'])			$('input[name=email]').val(localStorage['email']);
			
			
			$('#form_reg').submit(function(){
				localStorage['lastname']	=	$('input[name=lastname]').val();
				localStorage['firstname']	=	$('input[name=firstname]').val();
				localStorage['patronymic']	=	$('input[name=patronymic]').val();
				localStorage['login']		=	$('input[name=login]').val();
				localStorage['email']		=	$('input[name=email]').val();
			});
			
		});