<?php  
/*
 * Template Name: Seja Revendedora
 */
?>

<?php get_header(); the_post(); ?>

	<main class="empresa">
		
		<div class="breadcrumb">
			<h3><?php the_title(); ?></h3>
			<span>HOME / <?php the_title(); ?></span>
		</div>

		<div class="main">
			<div class="box-01">
				<div class="texto">
					<h3>VANTAGENS</h3>
					<?php the_field('vantagens'); ?>		
				</div>
				<div class="foto-box"><img src="<?php echo the_field('imagem_destaque'); ?>" alt="<?php the_title(); ?>"></div>
			</div>

			<div class="ctn-historico">
				<h3>COMO FUNCIONA?</h3>
				<?php the_field('como_funciona'); ?>
			</div>

			<div class="cb"></div>
		</div>

	</main>

<?php get_footer(); ?>