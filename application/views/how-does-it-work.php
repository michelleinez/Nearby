<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Nearby - How does it work</title>
	<?php $this->load->view('/partials/header'); ?>
</head>
<body>
	<nav>
		<div class="nav-wrapper">
			<img src="assets/nearby-icon-large.png" class='nearby-icon'>
			<a href="#" class="brand-logo">Nearby</a>
			<a href="#" data-activates="mobile-nav" class="button-collapse"><i class="material-icons">menu</i></a>
			<ul class="right hide-on-med-and-down">
				<li><a href="/" class="waves-effect waves-light">Home</a></li>
				<?php if ($this->session->userdata('logged_in')){ ?>
						<li><a href="log-out" class="waves-effect waves-light">Log Out</a></li>
				<?php } else { ?>
						<li><a href="#login-modal" class="waves-effect waves-light modal-trigger">Log In</a></li>
				<?php } ?>
			</ul>
			<ul class="side-nav right" id="mobile-nav">
				<li><a href="/">Home</a></li>
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
		<h4 class='col s12 center'>How does it work?</h4>
	</div>


</body>
</html>
