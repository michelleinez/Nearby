var map;
var infowindow;

var validated_results = [];
var validated_clusters = [];
var search_terms = "movie theater";
var search_terms2 = "ice cream";

$("#searchform1").submit(function(event){
  event.preventDefault();
  search_terms = $('#searchbox1').val();
  search_terms2 = $('#searchbox2').val();
  initMap();
});


function initMap() {
  //user's location (center of map when map is initialized)
  //I placed it at the coding dojo by default...
  var center = {lat: 37.377, lng: -121.914};

  //create a new map and set zoom level
  map = new google.maps.Map(document.getElementById('map'), {
    center: center,
    zoom: 13
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

      infowindow.setPosition(pos);
      infowindow.setContent('Location found.');
      map.setCenter(pos);

      // create a marker for the user's Location
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


  //the first search request gets sent here
  var service = new google.maps.places.PlacesService(map);
  service.nearbySearch({
    //location = where to search near
    location: center,
    //how far from location to search for things
    radius: 4000,
    //keyword = search term taken from searchbox1
    keyword: search_terms

  }, validate_results);
  //creates results and status variables for callback

  //once first results come back
  function validate_results(results, status) {

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
          radius: 500,
          //keyword = search term taken from searchbox1
          keyword: search_terms2

        }, validate_clusters.bind(null, i));
        //find out more about why this works
      }
    }
  }

  function validate_clusters(i, clusters, status) {
    console.log("iii");
    console.log(i);
    if (status === google.maps.places.PlacesServiceStatus.OK) {

      //for each result from the search create a marker
      for (var i = 0; i < clusters.length; i++) {
        var place = clusters[i];
        if(rating > 2 && place.geometry.location){
          //for the future: add in checks for
          //maximum distance between two places
          validated_clusters.push(clusters[i]);
        }
      }
      console.log("validated_results");
      console.log(validated_results);
      console.log(validated_results.length);
      console.log("validated_clusters");
      console.log(validated_clusters);
      console.log(validated_clusters.length);

      for (var i = 0; i < validated_clusters.length; i++){
        createMarker(validated_clusters[i], 'blue');
        latitude = validated_clusters[i].geometry.location.lat();
        longitude = validated_clusters[i].geometry.location.lng();
        var coords = { lat: latitude,
          lng: longitude }
        createCircle(coords);
      }
    }
  }




}


function createMarker(place, color) {
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

function createCircle(location){
  var circle = new google.maps.Circle({
    strokeColor: '#6699ff',
    strokeOpacity: 0.2,
    strokeWeight: 2,
    fillColor: '#6699ff',
    fillOpacity: 0.1,
    map: map,
    center: location,
    radius: 500
  });
}




function handleLocationError(browserHasGeolocation, infoWindow, pos) {
  infoWindow.setPosition(pos);
  infoWindow.setContent(browserHasGeolocation ?
                        'Error: The Geolocation service failed.' :
                        'Error: Your browser doesn\'t support geolocation.');
}