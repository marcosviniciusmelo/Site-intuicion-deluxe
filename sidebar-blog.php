<div class="sidebar">
	<div class="search">
		<form action="<?php echo home_url('/'); ?>" method="get">
			<input type="text" name="s" placeholder="Buscar">
			<button type="submit"><img src="<?php echo get_template_directory_uri(); ?>/img/icones/lupa.png" alt="Pesquisar"></button>
		</form>
	</div>

	<?php  
		$categories = get_categories( array(
		    'orderby' => 'name',
		    'parent'  => 0
		) );
	?>
	<ul class="posts-recents">
		<?php if (is_array($categories)): foreach ($categories as $_category): ?>
			<li><a href="<?php echo get_category_link($_category->term_id); ?>"><?php echo $_category->name; ?></a></li>
		<?php endforeach; endif; ?>
	</ul>
</div>