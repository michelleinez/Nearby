<!-- <link rel="stylesheet" type="text/css" href="../assets/css/normalize.css">
<link rel="stylesheet" type="text/css" href="../assets/css/index.css"> -->

<!-- jQuery  -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>

<!-- Materialize - Compiled and minified CSS -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.5/css/materialize.min.css">
<!-- Materialize - Compiled and minified JavaScript -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.5/js/materialize.min.js"></script>
<!-- Materialize - buttons -->
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

<!-- main style sheet -->
<link rel="stylesheet" type="text/css" href="assets/main.css">

<!-- favicon -->
<link rel="icon" href="favicon.ico" />

<script>
	$( document ).ready(function(){
		// sideNav handeler
		$(".button-collapse").sideNav();

	})
</script>
<!--
					███    ██  █████  ██    ██       ██████   █████  ██████
					████   ██ ██   ██ ██    ██       ██   ██ ██   ██ ██   ██
					██ ██  ██ ███████ ██    ██ █████ ██████  ███████ ██████
					██  ██ ██ ██   ██  ██  ██        ██   ██ ██   ██ ██   ██
					██   ████ ██   ██   ████         ██████  ██   ██ ██   ██	 				-->

<nav>
	<div class="nav-wrapper">
		<img src="assets/nearby-icon-large.png" class='nearby-icon'>
		<a href="#" class="brand-logo">Nearby</a>
		<a href="#" data-activates="mobile-nav" class="button-collapse right"><i class="material-icons">menu</i></a>
		<ul class="right hide-on-med-and-down">
			<li><a href="how-does-it-work" class="waves-effect waves-light">How does it work?</a></li>
			<li><a href="log-out" class="waves-effect waves-light  modal-trigger">Log Out</a></li>
		</ul>
		<ul class="side-nav right" id="mobile-nav">
			<li><a href="how-does-it-work">How does it work?</a></li>
			<li><a href="log-out">Log Out</a></li>
		</ul>
	</div>
</nav>
