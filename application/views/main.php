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
			<a href="#" data-activates="mobile-nav" class="button-collapse"><i class="material-icons">menu</i></a>
			<ul class="right hide-on-med-and-down">
				<li><a href="how-does-it-work" class="waves-effect waves-light">How does it work?</a></li>
				<?php if ($this->session->userdata('logged_in')){ ?>
						<li><a href="log-out" class="waves-effect waves-light">Log Out</a></li>
				<?php } else { ?>
						<li><a href="#login-modal" class="waves-effect waves-light modal-trigger">Log In</a></li>
				<?php } ?>
			</ul>
			<ul class="side-nav right" id="mobile-nav">
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
	<div class="row">
		<form class="col s12">
			<div class="row">
				<div class='col l1 offset-l1 center'>
					<label class="search-label">Find a</label>
				</div>
				<div class="input-field col l3">
					<input placeholder="movie theater" name="place_1" type="text" class="validate search-text">
				</div>
				<div class='col l1 center'>
					<label class="search-label">with</label>
				</div>
				<div class="input-field col l3">
					<input placeholder="ice cream" name="place_2" type="text" class="validate search-text">
				</div>
				<div class='col l1 center'>
					<label class="search-label">nearby!</label>
				</div>
				<div class='col l1'>
					<a class="btn-floating btn-medium waves-effect waves-light blue search-button"><i class="material-icons">search</i></a>
				</div>
			</div>
		</form>
	</div>

	<!-- temp image -  Map will go here -->
	<img src="assets/temp-map.png" alt="temp-map" style="display:block;margin:auto;"/>

</body>

</html>
