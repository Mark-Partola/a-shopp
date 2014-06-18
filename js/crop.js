// x1, y1, x2, y2 - Координаты для обрезки изображения
// crop - Папка для обрезанных изображений
var x1, y1, x2, y2, crop = 'crop/';
var  jcrop_api;

jQuery(function($){
	$('#target').Jcrop({ 
		onChange: showCoords,
		onSelect: showCoords
	},function(){ 
		jcrop_api = this; 
	});

	// Соблюдать пропорции 
	$('#ar_lock').change(function(e) {
		jcrop_api.setOptions(this.checked?
		{ aspectRatio: 1/1 }: {aspectRatio: 0 });
		jcrop_api.focus();
	});

	// Изменение координат 
	function showCoords(c){
		x1 = c.x;
		y1 = c.y;
		x2 = c.x2;
		y2 = c.y2;

		if(c.w > 0  && c.h > 0){
			$('#crop_action').stop().animate({'height' : '150px'});
			$('#crop').stop().fadeIn();
		}else{
			$('#crop_action').animate({'height' : '80px'});
			$('#crop').fadeOut();
		}

	}
});

function  release(){
   jcrop_api.release();
}
// Обрезка изображение и вывод результата
jQuery(function($){
	$('#crop').click(function(e) {
		var img =  $('#target').attr('src');
		$.post('model/crop.php',  {'x1': x1, 'x2': x2, 'y1': y1, 'y2': y2, 'img': img, 'crop': crop},  function(file) {
			$('#crop_action p').stop().css('opacity','1').text('Готово!').animate({'opacity':'0'},3000);
			release();
		}); 
	}); 
});