/*--------------------------------------------------------------------------------------------------------------------------------------------*/


$('._auth_block__input').keyup(function(){
	input = $(this).val();
	console.log(input);
	$(this).attr('value', input);
});

$('._auth_block__button').click(function(){
	name = $('._auth_block__input').val();
	$.post('/engine/chat.php', {name : name}, function(data){
		$(location).attr('href','/');
	});

});

$('._ajax_block__input').keyup(function(){
	input = $(this).val();
	console.log(input);
	$(this).attr('value', input);
});

$('._ajax_block__button').click(function(){
	city = $('._ajax_block__input').val();
	$.post('/engine/ck.php', {city : city}, function(data){
		$('.area-weth').html(data);
	});

});


/*--------------------------------------------------------------------------------------------------------------------------------------------*/
