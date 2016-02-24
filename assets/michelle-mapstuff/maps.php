<!DOCTYPE html>
<html>
  <head>
    <meta name="viewport" content="initial-scale=1.0, user-scalable=no">
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="/css/map.css" />
    <script src="https://code.jquery.com/jquery-2.2.1.min.js"></script>
  </head>
  <body>
    <button class="results1"></button>
    <form id="searchform1">
      Find
      <input type="text" id="searchbox1" style="display: inline-block"/>
      with
      <input type="text" id="searchbox2" style="display: inline-block"/>
      nearby...
      <input type="submit" value="Go!"/>
    </form>

    <div id="map"></div>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB2KaKcKloJYNmCAUJ7K342whmwBfgj_I0&signed_in=true&libraries=places&callback=initMap" async defer></script>
    <script src="/js/map.js"></script>
  </body>
</html>
