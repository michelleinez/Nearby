var map;
var infowindow;

var validated_results = [];
var validated_clusters = [];
var search_terms = "coffee";
var search_terms2 = "groceries";

$("#searchform1").submit(function(event){
  event.preventDefault();

  search_terms = $('#searchbox1').val();
  search_terms2 = $('#searchbox2').val();
  initMap();
});

$(".results1").click(function(event){
  // console.log("validated_results: "+validated_results.length);
  // console.log(validated_results);
  // console.log("validated_clusters: "+validated_clusters.length);
  // console.log(validated_clusters);
});

function initMap() {
  //user's location (center of map when map is initialized)
  //I placed it at the coding dojo by default...
  var center = {lat: 37.377, lng: -121.914};

  //create a new map and set zoom level
  map = new google.maps.Map(document.getElementById('map'), {
    center: center,
    zoom: 15
  });

  //window layer on top of map for tooltips
  infowindow = new google.maps.InfoWindow();
  var pos = {};

  // Try HTML5 geolocation.
  if (navigator.geolocation) {
    navigator.geolocation.getCurrentPosition(function(position) {
      pos = {
        lat: position.coords.latitude,
        lng: position.coords.longitude
      };

      // console.log("pos: ");
      // console.log(pos);

      infowindow.setPosition(pos);
      infowindow.setContent('Location found.');
      map.setCenter(pos);

      // create a marker for the user's Location
      console.log('here');
      console.log("pos pos: ");
      console.log(pos);
      var user = {
        geometry: {
          location: pos
        }
      };
      createMarker(user, 'green');

    }, function() {
      handleLocationError(true, infowindow, map.getCenter());
    });
  } else {
    // Browser doesn't support Geolocation
    handleLocationError(false, infowindow, map.getCenter());
    //ask for current location if geolocation isn't working
  }

  //create a marker for the user's Location
  // console.log("pos pos: ");
  // console.log(pos);
  // var user = {
  //   geometry: {
  //     location: pos
  //   }
  // };
  // createMarker(user, 'green');




  // console.log("pos pos: ");
  // console.log(pos);
  //
  // console.log("user:");
  // console.log(user);

  //the first search request gets sent here
  var service = new google.maps.places.PlacesService(map);
  service.nearbySearch({
    //location = where to search near
    location: center,
    //how far from location to search for things
    radius: 2000,
    //keyword = search term taken from searchbox1
    keyword: search_terms

  }, make_results_markers);
  //creates results and status variables for callback

  //once first results come back
  function make_results_markers(results, status) {

    if (status === google.maps.places.PlacesServiceStatus.OK) {
      //for each result from the search create a marker
      for (var i = 0; i < results.length; i++) {
        rating = results[i].rating;
        if(rating > 2){
          //for the future: add in checks for
          //maximum distance between two places
          validated_results.push(results[i]);
        }
      }
      for (var i = 0; i < validated_results.length; i++){

        createMarker(validated_results[i], 'red');
        rating = validated_results[i].rating;
        latitude = validated_results[i].geometry.location.lat();
        longitude = validated_results[i].geometry.location.lng();

        service.nearbySearch({
          //location = where to search near
          location: {lat: latitude, lng: longitude},
          //how far from location to search for things
          radius: 2000,
          //keyword = search term taken from searchbox1
          keyword: search_terms2

        }, make_cluster_markers);
      }
    }
  }

  function make_cluster_markers(clusters, status) {

    if (status === google.maps.places.PlacesServiceStatus.OK) {

      //for each result from the search create a marker
      for (var i = 0; i < clusters.length; i++) {
        if(rating > 2){
          //for the future: add in checks for
          //maximum distance between two places
          validated_clusters.push(clusters[i]);
        }
        // console.log(results[i]);
        // console.log(results[i].name);
        // console.log(results[i].geometry.location.lat());
        // console.log(results[i].geometry.location.lng());
      }

      for (var i = 0; i < validated_clusters.length; i++){
        createMarker(clusters[i], 'blue');
      }
    }
  }
}





function createMarker(place, color) {
  console.log("made it to createMarker");
  console.log(place);
  console.log(color);
  //takes location from result object and creates a marker/displays it on map
  var placeLoc = place.geometry.location;
  var marker = new google.maps.Marker({
    map: map,
    position: place.geometry.location
  });
  marker.setIcon('http://maps.google.com/mapfiles/ms/icons/'+color+'-dot.png');


  google.maps.event.addListener(marker, 'click', function() {
    infowindow.setContent(place.name);
    infowindow.open(map, this);
  });
}




function handleLocationError(browserHasGeolocation, infoWindow, pos) {
  infoWindow.setPosition(pos);
  infoWindow.setContent(browserHasGeolocation ?
                        'Error: The Geolocation service failed.' :
                        'Error: Your browser doesn\'t support geolocation.');
}
