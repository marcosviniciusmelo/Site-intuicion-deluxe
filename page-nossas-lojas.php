<?php include('header.php'); ?>

	<main class="lojas">
		
		<div class="breadcrumb">
			<h3>NOSSAS LOJAS</h3>
			<span>HOME / NOSSAS LOJAS</span>
		</div>

		<div class="main">
			
			<ul class="ctn-lojas">
				<li class="close">
					<div class="topo">FLECHEIRINHA - CE</div>
					<div class="ctn">
						<div class="endereco">
							<p>Av. Brig. Faria Lima, 2.232 LJ. D2 e D3-Pinheiros São Paulo-SP</p>
							<p>Telefone: 11 3097-9898</p>
						</div>
						<input type="hidden" class="lat1" value="-3.7420252">
						<input type="hidden" class="long1" value="-38.4858885">
						<div class="mapa" id="map_content1"></div>
					</div>
				</li>
				<li class="close">
					<div class="topo">FLECHEIRINHA - CE</div>
					<div class="ctn">
						<div class="endereco">
							<p>Av. Brig. Faria Lima, 2.232 LJ. D2 e D3-Pinheiros São Paulo-SP</p>
							<p>Telefone: 11 3097-9898</p>
						</div>
						<input type="hidden" class="lat2" value="-3.7420252">
						<input type="hidden" class="long2" value="-38.4858885">
						<div class="mapa" id="map_content2"></div>
					</div>
				</li>
				<li class="close">
					<div class="topo">FLECHEIRINHA - CE</div>
					<div class="ctn">
						<div class="endereco">
							<p>Av. Brig. Faria Lima, 2.232 LJ. D2 e D3-Pinheiros São Paulo-SP</p>
							<p>Telefone: 11 3097-9898</p>
						</div>
						<input type="hidden" class="lat3" value="-3.7420252">
						<input type="hidden" class="long3" value="-38.4858885">
						<div class="mapa" id="map_content3"></div>
					</div>
				</li>
				<li class="close">
					<div class="topo">FLECHEIRINHA - CE</div>
					<div class="ctn">
						<div class="endereco">
							<p>Av. Brig. Faria Lima, 2.232 LJ. D2 e D3-Pinheiros São Paulo-SP</p>
							<p>Telefone: 11 3097-9898</p>
						</div>
						<input type="hidden" class="lat4" value="-3.7420252">
						<input type="hidden" class="long4" value="-38.4858885">
						<div class="mapa" id="map_content4"></div>
					</div>
				</li>
			</ul>

		</div>

	</main>

	<script>
		function initMap() {

			<?php for ($i = 1; $i < 5; $i++) { ?>
			var myLatLng<?php echo $i; ?> = {lat: -25.363, lng: 131.044};
			var map<?php echo $i; ?> = new google.maps.Map(document.getElementById('map_content<?php echo $i; ?>'), {
				zoom: 12,
				center: myLatLng<?php echo $i; ?>
			});

			var marker<?php echo $i; ?> = new google.maps.Marker({
				position: myLatLng<?php echo $i; ?>,
				map: map<?php echo $i; ?>,
				title: ''
			});

			<?php } ?>
		}
	</script>

<?php include('footer.php'); ?>