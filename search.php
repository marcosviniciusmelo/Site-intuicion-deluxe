<?php  
/*
 * Template Name: Clipping
 */
?>

<?php get_header(); ?>

	<main class="campanha">
		
		<div class="breadcrumb">
			<h3><?php the_title(); ?></h3>
			<span>HOME / <?php the_title(); ?></span>
		</div>

		<div class="main">

			<h3>Você pesquisou por: "<?php echo $_GET['s'] ?>"</h3>
			
			<ul class="coll-main">
				<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
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

				<?php _theme_show_pagination('post', $_GET['s']); ?>

				<?php else : ?>
					<p><?php _e('Nenhuma notícia cadastrada!'); ?></p>
				<?php endif; ?>
			</ul>

			<?php get_sidebar('blog'); ?>

			<div class="cb"></div>

		</div>

	</main>

<?php get_footer(); ?>