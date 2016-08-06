<?php get_header(); the_post(); ?>

	<main class="campanha">
		
		<div class="breadcrumb">
			<h3><?php the_title(); ?></h3>
			<span>HOME / <?php the_title(); ?></span>
		</div>

		<div class="main">
			
			<div class="slider">

             	<?php $gallery = get_field('gallery'); ?>
				<ul>
					<?php if (is_array($gallery)): foreach ($gallery as $_img): ?>
						<li style="background: url(<?php echo $_img['url']; ?>);"><a class="fancybox" href="<?php echo $_img['url']; ?>"></a></li>
					<?php endforeach; endif; ?>
				</ul>
				
			</div>

			<div class="thumbnails">
             	<ul>
             		<?php if (is_array($gallery)): foreach ($gallery as $_img): ?>
						<li style="background: url(<?php echo $_img['url']; ?>);"></li>
					<?php endforeach; endif; ?>
				</ul>
			</div>

			<div class="title-line"><span>CAMPANHAS ANTERIORES</span></div>

			<ul class="grid-anteriores">
				<?php $query = new WP_Query( array( 'post_type' => 'post_campanha', 'post__not_in' => array(get_the_ID()))); ?>
	            <?php while($query->have_posts()) : $query->the_post(); ?>
	            	<?php $url = wp_get_attachment_url( get_post_thumbnail_id(get_the_ID()) ); ?>
					<li style="background: url(<?php echo $url; ?>);"><a href="<?php the_permalink(); ?>"></a><span class="titulo"><?php the_title(); ?></span></li>
	            <?php endwhile; ?>
	            <?php wp_reset_postdata(); ?>
			</ul>
		</div>
	</main>

<?php get_footer(); ?>