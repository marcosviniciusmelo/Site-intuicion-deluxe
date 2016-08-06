<?php  
/**
 * Template Name: Filme
 **/
?>

<?php get_header(); ?>

	<main class="campanha">
		
		<div class="breadcrumb">
			<h3><?php the_title(); ?></h3>
			<span>HOME / <?php the_title(); ?></span>
		</div>

		<div class="main">

			<?php $query = new WP_Query( array( 'post_type' => 'post_filme', 'posts_per_page' => 1)); ?>
            <?php while($query->have_posts()) : $query->the_post(); ?>
				<div class="filme">
					<iframe width="560" height="315" id="main-iframe" src="<?php the_field('link_video'); ?>" frameborder="0" allowfullscreen></iframe>
				</div>
            <?php endwhile; ?>
            <?php wp_reset_postdata(); ?>
			
			
			<div class="title-line"><span>FILMES ANTERIORES</span></div>

			<ul class="filme-anteriores">
				<?php $query = new WP_Query( array( 'post_type' => 'post_filme', 'posts_per_page' => -1)); ?>
	            <?php while($query->have_posts()) : $query->the_post(); ?>
            		<?php $url = wp_get_attachment_url( get_post_thumbnail_id(get_the_ID()) ); ?>
					<li style="background: url(<?php echo $url; ?>);" data-link="<?php the_field('link_video'); ?>" class="list-videos"><span class="titulo"><?php the_title(); ?></span></li>
	            <?php endwhile; ?>
	            <?php wp_reset_postdata(); ?>
			</ul>

		</div>

	</main>

	<script type="text/javascript">
		(function($){
			$('.list-videos').click(function(){
				var link_video = $(this).attr('data-link');
				$('.filme-active').removeClass('filme-active');
				$(this).addClass('filme-active');
				$('#main-iframe').attr('src', link_video);
			});
		})(jQuery);
	</script>

<?php get_footer(); ?>