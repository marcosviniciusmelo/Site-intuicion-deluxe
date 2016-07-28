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