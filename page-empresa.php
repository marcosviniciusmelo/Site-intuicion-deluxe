<?php
/**
 * Template Name: A Empresa
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
					<?php the_content(); ?>	
				</div>
				<div class="foto-box"><img src="<?php echo get_template_directory_uri(); ?>/img/foto-marca-01.jpg" alt=""></div>
			</div>

			<?php if (get_field('link_video')): ?>
				<div class="ctn-video">
					<iframe width="560" height="315" src="<?php the_field('link_video'); ?>" frameborder="0" allowfullscreen></iframe>
				</div>
			<?php endif; ?>

			<div class="ctn-historico">
				<h3>HISTÓRICO</h3>
				<?php the_field('historico'); ?>	
			</div>

			<div class="cb"></div>
		</div>

		<div class="main">
			<h2>NOSSA LINHA DO TEMPO</h2>
		</div>

		<div class="timeline">
			<div class="main">
				<ul class="linha">
					<?php $timeline = get_field('time_line'); ?>
					<?php if (is_array($timeline)): foreach ($timeline as $moment): ?>
						<li>
							<div class="ano"><?php echo $moment['year']; ?></div>
							<div class="texto">
								<?php echo $moment['description']; ?>	
							</div>
						</li>
					<?php endforeach; endif; ?>
				</ul>
			</div>				
		</div>

	</main>

<?php get_footer(); ?>