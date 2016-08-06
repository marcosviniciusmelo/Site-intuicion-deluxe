<?php  
/*
 * Template Name: Clipping
 */
?>

<?php get_header(); the_post(); ?>

	<main class="campanha">
		
		<div class="breadcrumb">
			<h3><?php the_title(); ?></h3>
			<span>HOME / <?php the_title(); ?></span>
		</div>

		<div class="main">
			
			<ul class="coll-main">
				<?php $paged = (get_query_var('paged')) ? get_query_var('paged') : 1; ?>
				<?php $query = new WP_Query(array('post_type' => 'post', 'paged' => $paged)); ?>
				<?php if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>
					<li class="post">
						<div class="thumbnail">
							<?php the_post_thumbnail(); ?>
						</div>
						<div class="ctn">
							<span class="data"><?php the_time('j \d\e F \d\e Y'); ?></span>
							<h2 class="titulo"><?php the_title(); ?></h2>
							<p><?php _theme_resume_post(); ?></p>
							<a class="btn-ver" href="<?php the_permalink(); ?>">VER NOTÍCIA</a>
						</div>
					</li>

				<?php endwhile; ?> 

				<?php _theme_show_pagination('post'); ?>
				
				<?php else : ?>
					<p><?php _e('Nenhuma notícia cadastrada!'); ?></p>
				<?php endif; ?>
			</ul>

			<?php get_sidebar('blog'); ?>

			<div class="cb"></div>

		</div>

	</main>

<?php get_footer(); ?>