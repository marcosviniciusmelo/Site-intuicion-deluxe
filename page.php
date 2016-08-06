<?php  
/*
 * Template Name: Nossas Lojas
 */
?>

<?php get_header(); the_post(); ?>

	<main class="campanha">
		
		<div class="breadcrumb">
			<h3><?php the_title(); ?></h3>
			<span>HOME / <?php the_title(); ?></span>
		</div>

		<div class="main">
			
			<?php the_content(); ?>

		</div>

	</main>

<?php get_footer(); ?>