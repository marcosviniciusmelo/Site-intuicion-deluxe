<!DOCTYPE html>
<html>
	<head>

		<link href='https://fonts.googleapis.com/css?family=Lato:400,300,700' rel='stylesheet' type='text/css'>
		<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js" type="text/javascript"></script>

		<?php wp_head(); ?>

	</head>
		
	<body>

		<header>
			<div class="bar-top">
				<div class="main">
					<a href="">ESPAÇO DA REVENDEDORA</a>
				</div>
			</div>

			<div class="content">
				<div class="main">
					<div class="logo"><a href="index.php"><img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt=""></a></div>
					<nav>
						<?php echo _theme_show_menu('primary'); ?>
					</nav>
				</div>
			</div>
		</header>