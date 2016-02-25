<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Nearby</title>
	<link rel="stylesheet" type="text/css" href="/assets/css/map.css" />
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
</head>
<body>
	<div class="row">
		<form class="col s12" id="searchform1">
			<div class="row">
				<div class='col l1 offset-l1'>
					<label class="search-label">Find a</label>
				</div>
				<div class="input-field col l3">
					<input id="searchbox1" placeholder="movie theater" name="place_1" type="text" class="validate search-text">
				</div>
				<div class='col l1'>
					<label class="search-label">with</label>
				</div>
				<div class="input-field col l3">
					<input id="searchbox2" placeholder="ice cream" name="place_2" type="text" class="validate search-text">
				</div>
				<div class='col l1'>
					<label class="search-label">nearby!</label>
				</div>
				<div class='col l1'>
					<button type = 'submit' id="search-button" class="btn-floating btn-medium waves-effect waves-light blue search-button"><i class="material-icons">search</i></button>
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
