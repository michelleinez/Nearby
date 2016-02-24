var map;
var infowindow;
var search_terms;


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
    zoom: 15
  });

  //window layer on top of map for tooltips
  infowindow = new google.maps.InfoWindow();

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
      var validated_results = [];
      //for each result from the search create a marker
      for (var i = 0; i < results.length; i++) {
        rating = results[i].rating;
        if(rating < 2){
          //for the future: add in checks for
          //maximum distance between two places

          validated_results.push(results[i]);
          console.log(validated_results);
        }
        createMarker(results[i], 'red');
        rating = results[i].rating;
        latitude = results[i].geometry.location.lat();
        longitude = results[i].geometry.location.lng();

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

  function make_cluster_markers(validated_results, status) {

    if (status === google.maps.places.PlacesServiceStatus.OK) {

      //for each result from the search create a marker
      for (var i = 0; i < validated_results.length; i++) {
        createMarker(validated_results[i], 'blue');
        // console.log(results[i]);
        // console.log(results[i].name);
        // console.log(results[i].geometry.location.lat());
        // console.log(results[i].geometry.location.lng());
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
