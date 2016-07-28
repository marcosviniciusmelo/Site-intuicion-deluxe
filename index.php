	<?php include('header.php'); ?>

	<div class="banner-home">
		<ul>
			<li><a href=""><img src="img/banner-home.jpg" alt=""></a></li>
			<li><a href=""><img src="img/banner-home.jpg" alt=""></a></li>
			<li><a href=""><img src="img/banner-home.jpg" alt=""></a></li>
		</ul>
	</div>

	<ul class="box-home">
		<li style="background: url('img/box-home.jpg')"><a href=""></a></li>
		<li style="background: url('img/box-home.jpg')"><a href=""></a></li>
		<li style="background: url('img/box-home.jpg')"><a href=""></a></li>
	</ul>

	<div class="box-gray">
		<div class="main">
			<div class="ctn-empresa-home">
				<div class="foto"><img src="img/img-empresa-home.jpg" alt=""></div>
				<div class="texto">
					<h2 class="title"><span>A INTUICION</span></h2>
					<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
					<a href=""><h2 class="btn-saiba">SAIBA MAIS</h2></a>
				</div>
			</div>
		</div>
	</div>

	<div class="box-video-home">
		<div class="ctn">
			<div class="titulo">FILME • <span>Verão 2016</span></div>
			<div class="ctn-iframe"><iframe width="560" height="315" src="https://www.youtube.com/embed/T3LJfZCiwkQ" frameborder="0" allowfullscreen></iframe></div>
		</div>
	</div>

	<div class="ctn-instagram">
		<div class="siga">
			<p>SIGA AS NOSSAS REDES</p>
			<ul class="icones">
				<li><a href=""><img src="img/icones/icon-facebook.png" alt=""></a></li>
				<li><a href=""><img src="img/icones/icon-instagram.png" alt=""></a></li>
				<li><a href=""><img src="img/icones/icon-twitter.png" alt=""></a></li>
				<li><a href=""><img src="img/icones/icon-youtube.png" alt=""></a></li>
			</ul>
		</div>

		<ul id="il" class="il"></ul>
	</div>

<script>
    var feed = new Instafeed({
      get: 'user',
      userId: 27724738,
      accessToken: '27724738.1677ed0.7e08341348ce453a8b29eeff18000e80',
      target: 'il',
      resolution: 'thumbnail',
      limit: 10,
      after: function() {
      
      	setTimeout(function(){
          $('.il a').each(function(){
            
              $(this).attr('target', '_blank');

              if( $(this).find('img').attr('src') != null ){
                  var src = $(this).find('img').attr('src');
                  var src = src.replace('150x150', '480x480');
                  $(this).find('img').attr('src', src);
              }else{
              	console.log('Erro instagram.');
              }
          });
        }, 500);
    
    }
                             });

    window.onload = function() {
      feed.run();
    };

</script>

<?php include('footer.php'); ?>