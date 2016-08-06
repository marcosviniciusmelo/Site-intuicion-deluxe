<?php get_header(); ?>

	<!-- Main Banners -->
	<div class="banner-home">
		<ul>
			<?php $query = new WP_Query( array( 'post_type' => 'post_banner', 'posts_per_page' => -1, 'meta_key' => 'category_banner', 'meta_value' => 1)); ?>
            <?php while($query->have_posts()) : $query->the_post(); ?>
             	<li>
             		<a href="<?php the_field('link'); ?>">
                        <img src="<?php the_field('banner'); ?>" alt="<?php the_title(); ?>">
             		</a>
             	</li>
            <?php endwhile; ?>
            <?php wp_reset_postdata(); ?>
		</ul>
	</div>

	<!-- Box Banners -->
	<ul class="box-home">
		<?php $query = new WP_Query( array( 'post_type' => 'post_banner', 'posts_per_page' => -1, 'meta_key' => 'category_banner', 'meta_value' => 2)); ?>
        <?php while($query->have_posts()) : $query->the_post(); ?>
	        <li style="background: url('<?php echo _theme_resize_img(get_field('banner'), 640, 430); ?>')">
	        	<a href="<?php the_field('link'); ?>"></a>
	        </li>
        <?php endwhile; ?>
        <?php wp_reset_postdata(); ?>
	</ul>

	<div class="box-gray">
		<div class="main">
			<div class="ctn-empresa-home">
				<div class="foto"><img src="<?php the_field('img', 'option'); ?>" alt="A Intuicion"></div>
				<div class="texto">
					<h2 class="title"><span>A INTUICION</span></h2>
					<?php the_field('about', 'option'); ?>
					<a href="<?php the_field('read_more', 'option'); ?>"><h2 class="btn-saiba">SAIBA MAIS</h2></a>
				</div>
			</div>
		</div>
	</div>

	<div class="box-video-home">
		<div class="ctn">
			<div class="titulo">FILME • <span><?php the_field('title_video', 'option'); ?></span></div>
			<div class="ctn-iframe"><iframe width="560" height="315" src="<?php the_field('link_video', 'option'); ?>" frameborder="0" allowfullscreen></iframe></div>
		</div>
	</div>

	<div class="ctn-instagram">
		<div class="siga">
			<p>SIGA AS NOSSAS REDES</p>
			<ul class="icones">
				<li><a href=""><img src="<?php echo get_template_directory_uri(); ?>/img/icones/icon-facebook.png" alt=""></a></li>
				<li><a href=""><img src="<?php echo get_template_directory_uri(); ?>/img/icones/icon-instagram.png" alt=""></a></li>
				<li><a href=""><img src="<?php echo get_template_directory_uri(); ?>/img/icones/icon-twitter.png" alt=""></a></li>
				<li><a href=""><img src="<?php echo get_template_directory_uri(); ?>/img/icones/icon-youtube.png" alt=""></a></li>
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

<?php get_footer(); ?>