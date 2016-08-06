<?php  
/*
 * Template Name: Clipping
 */
?>

<?php get_header(); the_post(); ?>

	<main class="campanha">
		
		<div class="breadcrumb">
			<h3>Clipping</h3>
			<span>HOME / Clipping</span>
		</div>

		<div class="main">

			<h3>Categoria: <?php single_cat_title( '', true ) ?></h3>

			<?php
				$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
				$posts = new WP_Query(array(
					'post_type' => 'post',
					'paged'     => $paged,
					'cat'       => $cat
				));
			?>
			
			<ul class="coll-main">
				<?php if ($posts->have_posts() ) : while ($posts->have_posts() ) : $posts->the_post(); ?>
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

				<?php _theme_show_pagination('post', NULL, $cat); ?>

			<?php else : ?>
					<p><?php _e('Nenhuma notícia cadastrada!'); ?></p>
				<?php endif; ?>
			</ul>

			<?php get_sidebar('blog'); ?>

			<div class="cb"></div>

		</div>

	</main>

<?php get_footer(); ?>