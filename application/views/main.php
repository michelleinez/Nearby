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

	<link rel="stylesheet" type="text/css" href="assets/main.css">

	<script>
		$( document ).ready(function(){
			$(".button-collapse").sideNav();


		})
	</script>
</head>
<body>
	<nav>
		<div class="nav-wrapper">
			<a href="#" class="brand-logo">Nearby</a>
			<a href="#" data-activates="mobile-nav" class="button-collapse"><i class="material-icons">menu</i></a>
			<ul class="right hide-on-med-and-down">
				<li><a href="#">How does it work?</a></li>
				<li><a href="#">Log In</a></li>
			</ul>
			<ul class="side-nav" id="mobile-nav">
				<li><a href="#">How does it work?</a></li>
				<li><a href="#">Log In</a></li>
			</ul>
		</div>
	</nav>

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

		<!-- temp image -->
		<img src="assets/temp-map.png" alt="temp-map" style="display:block;margin:auto;"/>
	</div>


</body>
</html>
