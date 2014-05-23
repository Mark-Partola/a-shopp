$(document).ready(function(){

	$("#regForm").validate({

		rules:{

			login:{
				required: true,
				minlength: 6,
				maxlength: 16,
			},

			password:{
				required: true,
				minlength: 6,
				maxlength: 16,
			},

			checkPassword:{
				equalTo: "input[name=password]",
			},

			firstname:{
				required: true,
				minlength: 3,
				maxlength: 16,
			},

			lastname:{
				required: true,
				minlength: 3,
				maxlength: 16,
			},


			email:{
				required: true,
				minlength: 3,
				maxlength: 16,
				email: true,
			},
		},

		
		messages:{

			login:{
				required: "Это поле обязательно для заполнения",
				minlength: "Логин должен быть минимум 4 символа",
				maxlength: "Максимальное число символо - 16",
			},

			password:{
				required: "Это поле обязательно для заполнения",
				minlength: "Пароль должен быть минимум 6 символа",
				maxlength: "Максимальное число символо - 16",
			},

			firstname:{
				required: "Это поле обязательно для заполнения",
				minlength: "Должно быть минимум 6 символов",
			},

			lastname:{
				required: "Это поле обязательно для заполнения",
				minlength: "Должно быть минимум 6 символов",
			},

			email:{
				required: "Это поле обязательно для заполнения",
				minlength: "Должно быть минимум 6 символов",
				email: "Не похоже на имэйл",
			},

			checkPassword:{
				equalTo: "Повторите пароль",
			},

		},
	});

/*	var pass, checkPass, check;

	$('input[name=password]').blur(function(){
		pass = $(this).val();
	});

	while(check){

		$('input[name=checkPassword]').change(function(){
			checkPass = $(this).val();
			if(pass != checkPass){
				check = true;
				console.log('Неравны');
			} else {
				console.log('OK');
			}
		});

	}*/

});