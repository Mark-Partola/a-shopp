$(document).ready(function(){

	$("#form_reg").validate({

		rules:{

			login:{
				required: true,
				minlength: 4,
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
				maxlength: 16,
			},

			lastname:{
				required: true,
				maxlength: 16,
			},

			patronymic:{
				required: true,
				maxlength: 16,
			},

			email:{
				required: true,
				email: true,
			},
		},

		
		messages:{

			login:{
				required: "* это обязательно!",
				minlength: "Минимум 4 символа",
				maxlength: "Максимум 16 символов",
			},

			password:{
				required: "* это обязательно!",
				minlength: "Пароль должен быть минимум 6 символа",
				maxlength: "Максимум 16 символов",
			},

			firstname:{
				required: "* это обязательно!",
				maxlength: "Максимум 16 символов",
			},

			lastname:{
				required:"* это обязательно!",
				maxlength: "Максимум 16 символов",
			},

			patronymic:{
				required: "* это обязательно!",
				maxlength: "Максимум 16 символов",
			},

			email:{
				required: "* это обязательно!",
				email: "Не похоже на почту :(",
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