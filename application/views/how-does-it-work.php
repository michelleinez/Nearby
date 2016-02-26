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

			<img src="assets/nearby-icon-large-virt.png" class='nearby-icon'>
			<a href="/" class="brand-logo">Nearby</a>

			<ul class="right hide-on-med-and-down">
				<li><a href="/" class="waves-effect waves-light">Home</a></li>
				<?php if ($this->session->userdata('logged_in')){ ?>
						<li><a href="log-out" class="waves-effect waves-light">Log Out</a></li>
				<?php } else { ?>
						<li><a href="#login-modal" class="waves-effect waves-light modal-trigger">Log In</a></li>
				<?php } ?>
			</ul>

			<a class='dropdown-button right hide-on-large-only' href='#' data-beloworigin='true' data-activates='dropdown'><i class="material-icons">menu</i></a>
			<ul id='dropdown' class='dropdown-content'>
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
	<div class="slider">

    <ul class="slides">
      <li>
        <img src="http://lorempixel.com/580/250/nature/1"> <!-- random image -->
        <div class="caption center-align">
          <h3>This is our big Tagline!</h3>
          <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
        </div>
      </li>
      <li>
        <img src="http://lorempixel.com/580/250/nature/2"> <!-- random image -->
        <div class="caption left-align">
          <h3>Left Aligned Caption</h3>
          <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
        </div>
      </li>
      <li>
        <img src="http://lorempixel.com/580/250/nature/3"> <!-- random image -->
        <div class="caption right-align">
          <h3>Right Aligned Caption</h3>
          <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
        </div>
      </li>
      <li>
        <img src="http://lorempixel.com/580/250/nature/4"> <!-- random image -->
        <div class="caption center-align">
          <h3>This is our big Tagline!</h3>
          <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
        </div>
      </li>
    </ul>
  </div>


	<!--============================ footer =================================-->
	<footer class="page-footer">
		<div class="footer-copyright">
			<div class="container">
				© 2016 Copyright Team Kickass
			</div>
		</div>
	</footer>
</body>
</html>
