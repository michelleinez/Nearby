<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="../assets/css/normalize.css">
	<link rel="stylesheet" type="text/css" href="../assets/css/index.css">

	<!-- jQuery  -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>

	<!-- Materialize - Compiled and minified CSS -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.5/css/materialize.min.css">

	<!-- Materialize - Compiled and minified JavaScript -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.5/js/materialize.min.js"></script>

	<!-- Materialize - buttons -->
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

	<!-- favicon -->
	<link rel="icon" href="favicon.ico" />

	<!-- main style sheet -->
	<link rel="stylesheet" type="text/css" href="assets/main.css">

	<script>
		$( document ).ready(function(){
			// sideNav handeler
			$(".button-collapse").sideNav();

			// login and register modal handler
			$('.modal-trigger').leanModal();
		})
	</script>
</head>
<body>
	<!--============================= nav-bar ===============================-->
	<nav>
		<div class="nav-wrapper">
			<img src="assets/nearby-icon-large.png" class='nearby-icon'>
			<a href="#" class="brand-logo">Nearby</a>
			<a href="#" data-activates="mobile-nav" class="button-collapse right"><i class="material-icons">menu</i></a>
			<ul class="right hide-on-med-and-down">
				<li><a href="how-does-it-work" class="waves-effect waves-light">How does it work?</a></li>
				<li><a href="#login-modal" class="waves-effect waves-light  modal-trigger">Log In</a></li>
			</ul>
			<ul class="side-nav right" id="mobile-nav">
				<li><a href="how-does-it-work">How does it work?</a></li>
				<li><a href="#login-modal" class="modal-trigger">Log In</a></li>
			</ul>
		</div>
	</nav>

	<!--=========================== login modal =============================-->
	<div class="row">
		<div id="login-modal" class="modal col s10 offset-s1 m6 offset-m3 l4 offset-l4">
			<div class="modal-content">
				<form class="login-form">
					<div class="row">
						<div class="input-field center modal-header">
							<img src="assets/nearby-icon-small.png" alt="nearby-icon" class="responsive-img valign">
							<h5 class="center login-form-text">Log In</h5>
						</div>
					</div>
					<div class="row">
						<div class="input-field col s12">
							<i class="mdi-social-person-outline prefix"></i>
							<input type="text" id="email">
							<label for="email" class="center-align">Email</label>
						</div>
					</div>
					<div class="row">
						<div class="input-field col s12">
							<i class="mdi-action-lock-outline prefix"></i>
							<input type="password" id="password">
							<label for="password">Password</label>
						</div>
					</div>
					<div class="row">
						<div class="input-field col s12 remember">
							<input type="checkbox"  id="remember-me">
							<label for="remember-me">Remember me</label>
						</div>
					</div>
					<div class="row">
						<div class="input-field col s12">
							<a href="/" class="btn waves-effect orange waves-light col s12">Login</a>
						</div>
					</div>
					<div class="row">
						<div class="input-field col s6">
							<p class="login-helper-link medium-small">
								<a href="#register-modal" class="modal-trigger modal-close">Register Now!</a>
							</p>
						</div>
						<div class="input-field col s6">
							<p class="login-helper-link right-align medium-small">
								<a href="#">Forgot password?</a>
							</p>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>

	<!--========================== register modal ===========================-->
	<div class="row">
		<div id="register-modal" class="modal col s10 offset-s1 m6 offset-m3 l4 offset-l4 ">
			<div class="modal-content">
				<form class="login-form">
					<div class="row">
						<div class="input-field modal-header center">
							<h5 class="center login-form-text modal-header">Register</h5>
						</div>
					</div>
					<div class="row">
						<div class="input-field col s12">
							<i class="mdi-social-person-outline prefix"></i>
							<input type="email" id="email">
							<label for="email" class="center-align">Email</label>
						</div>
					</div>
					<div class="row">
						<div class="input-field col s12">
							<i class="mdi-action-lock-outline prefix"></i>
							<input type="password" id="password">
							<label for="password">Password</label>
						</div>
					</div>
					<div class="row">
						<div class="input-field col s12">
							<i class="mdi-action-lock-outline prefix"></i>
							<input type="password" id="password_comfirm">
							<label for="password_comfirm">Confirm Password</label>
						</div>
					</div>
					<div class="row">
						<div class="input-field col s12">
							<a href="/" class="btn waves-effect orange waves-light col s12">Register</a>
						</div>
					</div>
					<div class="row">
						<p class="input-field col s12">Or register with:</p>
					</div>
					<div class="row">
						<div class="input-field login-helper-link col s6">
							<a href="/" class="btn blue waves-effect waves-light col s12">Facebook</a>
						</div>
						<div class="input-field login-helper-link col s6">
							<a href="/" class="btn red waves-effect waves-light col s12">Google</a>
						</div>
					</div>
					<div class="row">
						<div class="input-field col s12">
							<p class="login-helper-link margin medium-small">
								<a href="#login-modal" class="modal-trigger modal-close">Already Registered? Log In!</a>
							</p>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>

	<!--============================ main page ==============================-->
	<div class="row">
		<form class="col s12">
			<div class="row">
				<div class='col l1 offset-l1'>
					<label class="search-label">Find a</label>
				</div>
				<div class="input-field col l3">
					<input placeholder="movie theater" name="place_1" type="text" class="validate search-text">
				</div>
				<div class='col l1'>
					<label class="search-label">with</label>
				</div>
				<div class="input-field col l3">
					<input placeholder="ice cream" name="place_2" type="text" class="validate search-text">
				</div>
				<div class='col l1'>
					<label class="search-label">nearby!</label>
				</div>
				<div class='col l1'>
					<a class="btn-floating btn-medium waves-effect waves-light blue search-button"><i class="material-icons">search</i></a>
				</div>
			</div>

			<!-- <div class="row">
				<div class="col s2 offset-s10">
					<a href="#">More Options...</a>
				</div>
			</div> -->

		</form>
	</div>

	<!-- temp image -  Map will go here -->
	<img src="assets/temp-map.png" alt="temp-map" style="display:block;margin:auto;"/>

</body>
</html>
