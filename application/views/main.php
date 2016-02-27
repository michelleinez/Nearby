<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Nearby</title>
	<?php $this->load->view('/partials/header'); ?>
</head>
<body>
	<nav>
		<div class="nav-wrapper">
			<img src="assets/nearby-icon-large-virt.png" class='nearby-icon'>
			<a class="brand-logo">Nearby</a>

			<ul class="right hide-on-med-and-down">
				<li><a href="how-does-it-work" class="waves-effect waves-light">How does it work?</a></li>
				<li><a href="mailto:nearby.rocks@gmail.com?Subject=Feedback" target="_top" class="waves-effect waves-light">Give Feedback!</a></li>
				<?php if ($this->session->userdata('logged_in')){ ?>
						<li><a href="log-out" onclick='signOut();' class="waves-effect waves-light">Log Out</a></li>
				<?php } else { ?>
						<li>
							<a href="#login-modal" class="waves-effect waves-light modal-trigger">Log In</a></li>
				<?php } ?>
			</ul>

			<a class='dropdown-button right hide-on-large-only' href='#' data-beloworigin='true' data-constrainwidth='false' data-activates='dropdown'><i class="material-icons">menu</i></a>
			<ul id='dropdown' class='dropdown-content'>
				<li><a href="how-does-it-work">How does it work?</a></li>
				<li><a href="mailto:nearby.rocks@gmail.com?Subject=Feedback" target="_top" class="waves-effect waves-light">Give Feedback!</a></li>
				<?php if ($this->session->userdata('logged_in')){ ?>
						<li><a href="log-out">Log Out</a></li>
				<?php } else { ?>
						<li><a href="#login-modal" class="modal-trigger">Log In</a></li>
				<?php } ?>
			</ul>
		</div>
	</nav>

	<?php
		if (!$this->session->userdata('logged_in')){
			$this->load->view('/partials/login_reg');
	 	}
	?>
	<!--============================= Search ==================================-->
	<div class="row small">
		<form class="col s12" id="searchform1">
			<div class="row">
				<div class="col l4 offset-l1 no-padding">
					<div class='col l4 s3 align-right'>
						<label class="search-label">Find a</label>
					</div>
					<div class="col s1">
						<img src="http://maps.google.com/mapfiles/ms/icons/red-dot.png" class='search-marker'/>
					</div>
					<div class="input-field col l7 s8">
						<input id="searchbox1" placeholder="movie theater" type="text" class="search-text">
					</div>
				</div>

				<div class="col l4 no-padding">
					<div class='col s3 center'>
						<label class="search-label">with</label>
					</div>
					<div class="col s1">
						<img src="http://maps.google.com/mapfiles/ms/icons/blue-dot.png" class='search-marker'/>
					</div>
					<div class="input-field col s8">
						<input id="searchbox2" placeholder="ice cream" type="text" class="search-text">
					</div>
				</div>

				<div class="col l2 no-padding">
					<div class='col s7'>
						<label class="search-label">nearby!</label>
					</div>
					<div class='col s2'>
						<button type = 'submit' id="search-button" class="btn-floating btn-medium waves-effect waves-light blue search-button"><i class="material-icons">search</i></button>
					</div>
				</div>
			</div>
		</form>

		<a href="#options" class="col s4 m3 l2 right modal-trigger"><i class="fa fa-cog"></i> Search Options</a>
	</div>

	<!--============================= Options Modal =========================-->
	<div class="row small">
		<div id="options" class="modal col s10 offset-s1 m8 offset-m2 l6 offset-l3">
			<div class="modal-content">
				<form action='options-form' method="post">
					<div class="row small">
						<div class="input-field center">
							<h5 class="login-form-text center">Options</h5>
						</div>
					</div>
					<div class="row small">
						<div class="input-field col s12">
							<i class="location-icon fa fa-location-arrow fa-lg prefix"></i>
							<input type="text" id="start_location" name='start_location'>
							<label for="start_location">Starting Location</label>
						</div>
					</div>
					<!-- <div class="row small">
						<label>Search Radius</label>
					</div> -->
					<div class="row small">
						<div class="input-field col s12">
							<p class="range-field">
								<i class="fa fa-dot-circle-o fa-2x float-left"><span class='radius-label'> Search Radius</span></i>
								<input type="range" id="search_radius" min="1000" max="10000" />
							</p>
						</div>
					</div>

					<div class="row small">
						<div class="input-field col s4 offset-s4 m3 offset-m6 l3 offset-l6 waves-effect waves-light">
							<input type="" class="modal-close btn grey col s12" value="Cancel">
						</div>
						<div class="input-field col s4 m3 l3 waves-effect waves-light">
							<input type="submit" class="btn orange col s12" value="Save">
						</div>
					</div>

					<div class="row small">
						<div class="input-field col s12">
							<?php if (!$this->session->userdata('logged_in')){ ?>
									<p class="login-helper-link margin medium-small">
										<a href="#login-modal" class="modal-trigger modal-close">Log In to save your options!</a>
									</p>
							<?php } ?>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>

	<!--================================ Map ================================-->
	<!-- <script>
		var map_height = $(window).height() - 220;
		console.log(map_height);
		$("#map").replaceWith("<div id='map' style='height: "+map_height+" !important;'></div>");
	</script> -->

	<div id="map"></div>
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB2KaKcKloJYNmCAUJ7K342whmwBfgj_I0&signed_in=true&libraries=places&callback=initMap" async defer></script>
	<script src="/assets/js/map.js"></script>

	<!--============================= footer ================================-->
	<?php $this->load->view('/partials/footer'); ?>
</html>
