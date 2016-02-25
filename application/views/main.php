<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Nearby</title>
	<link rel="stylesheet" type="text/css" href="/assets/css/map.css" />
	<?php $this->load->view('/partials/header'); ?>
</head>
<body>
	<nav>
		<div class="nav-wrapper">
			<img src="assets/nearby-icon-large-virt.png" class='nearby-icon'>
			<a class="brand-logo">Nearby</a>
			<a href="#" data-activates="mobile-nav" class="button-collapse right"><i class="material-icons">menu</i></a>
			<ul class="right hide-on-med-and-down">
				<li><a href="how-does-it-work" class="waves-effect waves-light">How does it work?</a></li>
				<?php if ($this->session->userdata('logged_in')){ ?>
						<li><a href="log-out" class="waves-effect waves-light">Log Out</a></li>
				<?php } else { ?>
						<li><a href="#login-modal" class="waves-effect waves-light modal-trigger">Log In</a></li>
				<?php } ?>
			</ul>
			<ul class="side-nav" id="mobile-nav">
				<li><a href="how-does-it-work">How does it work?</a></li>
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
	<!--============================= body ==================================-->
	<div class="row small">
		<form class="col s12" id="searchform1">
			<div class="row">
				<div class="col l4 offset-l1">
					<div class='col s4 center'>
						<label class="search-label">Find a</label>
					</div>
					<div class="input-field col s8">
						<input id="searchbox1" placeholder="movie theater" type="text" class="search-text">
					</div>
				</div>

				<div class="col l4">
					<div class='col s3 center'>
						<label class="search-label">with</label>
					</div>
					<div class="input-field col s9">
						<input id="searchbox2" placeholder="ice cream" type="text" class="search-text">
					</div>
				</div>

				<div class="col l3">
					<div class='col s'>
						<label class="search-label">nearby!</label>
					</div>
					<div class='col s2'>
						<button type = 'submit' id="search-button" class="btn-floating btn-medium waves-effect waves-light blue search-button"><i class="material-icons">search</i></button>
					</div>
				</div>
			</div>
		</form>
	</div>

	<!-- temp image -  Map will go here -->
	<div id="map" style="height: 65%;"></div>
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB2KaKcKloJYNmCAUJ7K342whmwBfgj_I0&signed_in=true&libraries=places&callback=initMap" async defer></script>
	<script src="/assets/js/map.js"></script>
</body>

</html>
