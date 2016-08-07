$(document).ready(function(){
	var count = $('main.empresa .timeline .main .linha > li').lenght;
	$('main.empresa .timeline .main .linha').width( count * 200 );

	/* SLICK */
    $('.banner-home ul').slick({
        dots: false,
        infinite: true,
        speed: 500,
        slidesToShow: 1,
        slidesToScroll: 1
    });

    $('main.campanha .slider ul').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        speed: 500,
        dots: true
    });

    $('main.campanha .thumbnails li').click(function(){
    	var index = $(this).index();
    	$('main.campanha .slick-dots li').eq(index).trigger('click');
    });

});


//Click expand
$('main.lojas .ctn-lojas li .topo').click(function(){
	var ID = $(this).parent().attr('class');
	if( ID == 'close' ){
		$('main.lojas .ctn-lojas > li').find('.ctn').css({'padding': '0px', 'height': '0px', 'opacity': '0'});
		$('main.lojas .ctn-lojas > li').attr('class', 'close');

		$(this).parent().find('.ctn').css({'padding': '20px', 'height': 'auto', 'opacity': '1'});
		$(this).parent().attr('class', 'open');
	}else{
		$(this).parent().find('.ctn').css({'padding': '0px', 'height': '0px', 'opacity': '0'});
		$(this).parent().attr('class', 'close');
	}
});


//Menu
$('header .content nav .icon-menu').click(function(){
	$('header .content nav ul').toggle();
});