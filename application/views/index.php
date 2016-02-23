<?php


 ?>


<!DOCTYPE html>
<html>
<head>
	<title></title>
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

	<link rel="stylesheet" type="text/css" href="assets/main.css">
</head>
<body>

	<script>
  // This is called with the results from from FB.getLoginStatus().
  function statusChangeCallback(response) {
    console.log('statusChangeCallback');
    console.log(response);
    // The response object is returned with a status field that lets the
    // app know the current login status of the person.
    // Full docs on the response object can be found in the documentation
    // for FB.getLoginStatus().
    if (response.status === 'connected') {
      // Logged into your app and Facebook.
      var clientID = response.authResponse['userID'];
      var accessToken = response.authResponse['accessToken'];
      var url = 'https://graph.facebook.com/v2.5' + clientID + '/picture?width=350&height=350';
      FB.api('/me?fields=email,first_name, last_name', function(response){
        var email = response.email;
        var first_name = response.first_name;
        var last_name = response.last_name;

      $.ajax({
        method: "POST",
        url: '/main/facebook_login',
        data: {clientID: clientID, accessToken: accessToken, email: email, first_name: first_name, last_name: last_name},
      });

    })
    } else if (response.status === 'not_authorized') {
      // The person is logged into Facebook, but not your app.
      document.getElementById('status').innerHTML = 'Please log ' +
        'into this app.';
    } else {
      // The person is not logged into Facebook, so we're not sure if
      // they are logged into this app or not.
      document.getElementById('status').innerHTML = 'Please log ' +
        'into Facebook.';
    }
  }

  // This function is called when someone finishes with the Login
  // Button.  See the onlogin handler attached to it in the sample
  // code below.
  function checkLoginState() {
    FB.getLoginStatus(function(response) {
      statusChangeCallback(response);
    });
  }

  window.fbAsyncInit = function() {
  FB.init({
    appId      : '934753329943750',
    cookie     : true,  // enable cookies to allow the server to access
                        // the session
    xfbml      : true,  // parse social plugins on this page
    version    : 'v2.5' // use graph api version 2.5
  });

  // Now that we've initialized the JavaScript SDK, we call
  // FB.getLoginStatus().  This function gets the state of the
  // person visiting this page and can return one of three states to
  // the callback you provide.  They can be:
  //
  // 1. Logged into your app ('connected')
  // 2. Logged into Facebook, but not your app ('not_authorized')
  // 3. Not logged into Facebook and can't tell if they are logged into
  //    your app or not.
  //
  // These three cases are handled in the callback function.

  FB.getLoginStatus(function(response) {
    statusChangeCallback(response);
  });

  };

  // Load the SDK asynchronously
  (function(d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s); js.id = id;
    js.src = "//connect.facebook.net/en_US/sdk.js";
    fjs.parentNode.insertBefore(js, fjs);
  }(document, 'script', 'facebook-jssdk'));

  // Here we run a very simple test of the Graph API after login is
  // successful.  See statusChangeCallback() for when this call is made.
  function testAPI() {
    console.log('Welcome!  Fetching your information.... ');
    FB.api('/me', function(response) {
      console.log('Successful login for: ' + response.name);
      document.getElementById('status').innerHTML =
        'Thanks for logging in, ' + response.name + '!';
    });
  }

	</script>




	<nav>
		<div class="nav-wrapper">
			<a href="#" class="brand-logo">Nearby</a>
			<ul id="nav-mobile" class="right hide-on-med-and-down">
				<li><a href="#">How does it work?</a></li>
				<fb:login-button scope="public_profile,email" onlogin="checkLoginState();">
				</fb:login-button>
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
			<div class="row">
				<div class="col s2 offset-s10">
					<a href="#">More Options...</a>
				</div>
			</div>
		</form>
	</div>


</body>
</html>
