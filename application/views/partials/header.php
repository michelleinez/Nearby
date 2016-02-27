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

<!--Let browser know website is optimized for mobile-->
<meta name="viewport" content="width=device-width, initial-scale=1.0"/>

<!-- FontAwesome -->
<link href="/assets/libraries/font-awesome/css/font-awesome.min.css" rel="stylesheet">

<!-- main style sheet -->
<link rel="stylesheet" type="text/css" href="/assets/css/main.css">

<!-- favicon -->
<link rel="icon" href="favicon.ico" />

<script>
	$( document ).ready(function(){
		// sideNav handeler
		$(".button-collapse").sideNav();

		// login and register modal handler
		$('.modal-trigger').leanModal();

		// slider
		$('.slider').slider({full_width: true});
	})
</script>
