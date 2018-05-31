
$('.first_name').on('focus', function () {
	$('.validate_first_name').css('visibility', 'visible');
});

$('.first_name').on('focusout', function () {
	$(this).css('border','0px solid transparent');
	setTimeout(function(){$('.validate_first_name').css('visibility', 'hidden')}, 200);
});



$('.last_name').on('focus', function () {
	$('.validate_last_name').css('visibility', 'visible');
});

$('.last_name').on('focusout', function () {
	$(this).css('border','0px solid transparent');
	setTimeout(function(){$('.validate_last_name').css('visibility', 'hidden')}, 200);
});



$('.email').on('focus', function () {
	$('.validate_email').css('visibility', 'visible');
});

$('.email').on('focusout', function () {
	$(this).css('border','0px solid transparent');
	setTimeout(function(){$('.validate_email').css('visibility', 'hidden')}, 200);
});



$('.adress').on('focus', function () {
	$('.validate_adress').css('visibility', 'visible');
});

$('.adress').on('focusout', function () {
	$(this).css('border','0px solid transparent');
	setTimeout(function(){$('.validate_adress').css('visibility', 'hidden')}, 200);
});


$('.adress').on('focus', function () {
	$('.validate_adress').css('visibility', 'visible');
});



$( '.img-account' )
  .mouseenter(function() {
	$(this).css('border','2px solid transparent');
  })
  .mouseleave(function() {
    $( this ).css('border','0px transparent');
  });

$( '.img-account' ).on('click', function(){
	$('#file_photo').click();
	$('.validate_image').css('visibility', 'visible');
});





/*  */