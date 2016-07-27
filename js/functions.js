$(document).ready(function(){
	var count = $('main.empresa .timeline .main .linha > li').lengh();
	$('main.empresa .timeline .main .linha').width( count * 200 );
});