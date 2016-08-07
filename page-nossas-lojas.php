<?php  
/*
 * Template Name: Nossas Lojas
 */
?>

<?php get_header(); the_post(); ?>

<main class="lojas">
		
		<div class="breadcrumb">
			<h3><?php the_title(); ?></h3>
			<span>HOME / <?php the_title(); ?></span>
		</div>

		<div class="main">
			
			<ul class="ctn-lojas">

				<?php $query = new WP_Query( array( 'post_type' => 'post_loja', 'posts_per_page' => -1)); ?>
				<?php $i = 1; ?>
	            <?php while($query->have_posts()) : $query->the_post(); ?>
	            	<?php $endereco = get_field('endereco'); ?>
	             	<li class="close maps">
						<div class="topo"><?php the_field('cidade'); ?></div>
						<div class="ctn"> 
							<div class="endereco">
								<p><?php echo $endereco['address']; ?></p>
								<p>Telefone: <?php the_field('telefone'); ?></p>
							</div>
							<div class="mapa" id="map_<?php echo get_the_ID(); ?>" style="width:100%; height:300px;" data-lat="<?php echo $endereco['lat']; ?>" data-lng="<?php echo $endereco['lng']; ?>"></div>
						</div>
					</li>
	            <?php $i++; endwhile; ?>
	            <?php wp_reset_postdata(); ?>
				
			</ul>

		</div>

	</main>

	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBnqxaud76LltauPZpxnXiLOHB_G3adfcc&callback=initMap" async defer></script>


	<script type="text/javascript">

		function load_maps(lat, lng, id_map)
		{
			var options = {
		        zoom: 14,
		        center: new google.maps.LatLng(lat, lng),
		        mapTypeId: google.maps.MapTypeId.ROADMAP
		    }

		    map = new google.maps.Map(document.getElementById(id_map), options);

		    var latLng = new google.maps.LatLng(lat, lng);
		    
		    var marker = new google.maps.Marker({
			    position: latLng,
			    map: map,
			    // icon: url
		  	});

		}

		function initMap() {

			$('.maps').each(function(){
				load_maps($(this).find('.mapa').attr('data-lat'), $(this).find('.mapa').attr('data-lng'), $(this).find('.mapa').attr('id'));
			});
		}

	</script>

<?php get_footer(); ?>