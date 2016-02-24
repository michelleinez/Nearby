<!DOCTYPE html>
<html>
  <head>
    <meta name="viewport" content="initial-scale=1.0, user-scalable=no">
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="/css/map.css" />
    <script src="https://code.jquery.com/jquery-2.2.1.min.js"></script>
  </head>
  <body>
    <form id="searchform1">
      <input type="text" id="searchbox1" />
      <input type="submit" />
    </form>

    <form id="searchform2">
      <input type="text" id="searchbox2" />
      <input type="submit" />
    </form>

    <div id="map"></div>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCLXNzw4zstgAtHYCIUXHH9pl4HNQGgIUs&signed_in=true&libraries=places&callback=initMap" async defer></script>
    <script src="/js/map.js"></script>
  </body>
</html>
