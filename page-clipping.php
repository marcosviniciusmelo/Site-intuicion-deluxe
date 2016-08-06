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
				<li class="post">
					<div class="thumbnail"><img src="<?php echo get_template_directory_uri(); ?>/img/img-fake-2.jpg" alt=""></div>
					<div class="ctn">
						<span class="data">8 de Junho de 2016</span>
						<h2 class="titulo">TITULO DA NOTÍCIA</h2>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
						tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
						quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
						consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
						cillum dolore eu fugiat nulla pariatur.</p>
						<a class="btn-ver">VER NOTÍCIA</a>
					</div>
				</li>

				<li class="post">
					<div class="thumbnail"><img src="<?php echo get_template_directory_uri(); ?>/img/img-fake-2.jpg" alt=""></div>
					<div class="ctn">
						<span class="data">8 de Junho de 2016</span>
						<h2 class="titulo">TITULO DA NOTÍCIA</h2>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
						tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
						quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
						consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
						cillum dolore eu fugiat nulla pariatur.</p>
						<a class="btn-ver">VER NOTÍCIA</a>
					</div>
				</li>

				<li class="post">
					<div class="thumbnail"><img src="<?php echo get_template_directory_uri(); ?>/img/img-fake-2.jpg" alt=""></div>
					<div class="ctn">
						<span class="data">8 de Junho de 2016</span>
						<h2 class="titulo">TITULO DA NOTÍCIA</h2>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
						tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
						quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
						consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
						cillum dolore eu fugiat nulla pariatur.</p>
						<a class="btn-ver">VER NOTÍCIA</a>
					</div>
				</li>
			</ul>

			<div class="sidebar">
				<div class="search">
					<form action="" method="get">
						<input type="text" name="busca" placeholder="Buscar">
						<button type="submit"><img src="<?php echo get_template_directory_uri(); ?>/img/icones/lupa.png" alt=""></button>
					</form>
				</div>

				<ul class="posts-recents">
					<li>
						<div class="foto"><img src="<?php echo get_template_directory_uri(); ?>/img/img-fake-3.jpg" alt=""></div>
						<div class="left">
							<h4>Nome da notícia</h4>
							<span class="data">20 de Junho 2016</span>
						</div>
					</li>

					<li>
						<div class="foto"><img src="<?php echo get_template_directory_uri(); ?>/img/img-fake-3.jpg" alt=""></div>
						<div class="left">
							<h4>Nome da notícia</h4>
							<span class="data">20 de Junho 2016</span>
						</div>
					</li>

					<li>
						<div class="foto"><img src="<?php echo get_template_directory_uri(); ?>/img/img-fake-3.jpg" alt=""></div>
						<div class="left">
							<h4>Nome da notícia</h4>
							<span class="data">20 de Junho 2016</span>
						</div>
					</li>

					<li>
						<div class="foto"><img src="<?php echo get_template_directory_uri(); ?>/img/img-fake-3.jpg" alt=""></div>
						<div class="left">
							<h4>Nome da notícia</h4>
							<span class="data">20 de Junho 2016</span>
						</div>
					</li>
				</ul>
			</div>

			<div class="cb"></div>

		</div>

	</main>

<?php get_footer(); ?>