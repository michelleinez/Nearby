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
      	<img src="http://fblog.futurebrand.com/wp-content/uploads/2014/12/Superma.jpg"> <!-- random image -->

<!--         <img style="width:100vw; height:25vw" src="/assets/how_it_works_images/first_search_term.png"> <!-- random image --> <!-- <img src="funny-dog.jpg"> -->
 -->
        <div class="caption center-align">
          <h3 style="color:black">Where do you want to go?</h3>
          <h5 class="black-text text-lighten-3">Place that in the first search term.</h5>
        </div>
      </li>
      <li>
        <img src="http://www.fitnessbin.com/wp-content/uploads/2015/08/o-COFFEE-facebook.jpg"> <!-- random image -->
        <div class="caption left-align">
          <h3 style="color:black">What else do you want to do near the first place?  </h3>
          <h5 class="black-text text-lighten-3">Place this in the second search term.</h5>
        </div>
      </li>
      <li>
        <img style="width:125vw; height:40vw" src="/assets/how_it_works_images/safeway_coffee_clusters.png"> <!-- random image -->
        <div class="caption right-align">
          <h3 style="color:black">Click search and get the best results near you.</h3>
          <h5 class="black-text text-lighten-3">Find ratings and directions.</h5>
        </div>
      </li>
      <li>
        <img src="http://images.wisegeek.com/woman-breathing-in.jpg"> <!-- random image -->
        <div class="caption center-align">
          <h3>Enjoy a more relaxing trip.</h3>
          <h5 class="light grey-text text-lighten-3">Have your time back!</h5>
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
