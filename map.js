var map;
function initialize(lat, long) {
    var mapOptions = {
        center: {lat: lat, lng: long},
        zoom: 15
    };
    map = new google.maps.Map(document.getElementById('map-canvas'),
            mapOptions);
}
//google.maps.event.addDomListener(window, 'load', initialize(28,77));

function setPin(lat, long, text) {
    var myCenter = new google.maps.LatLng(lat, long);

    var marker = new google.maps.Marker({
        position: myCenter,
    });

    marker.setMap(map);

    var infowindow = new google.maps.InfoWindow({
        content: text
    });

    google.maps.event.addListener(marker, 'mouseover', function() {
        infowindow.open(map, this);
    });
    google.maps.event.addListener(marker, 'mouseout', function() {
        infowindow.close(map, this);
    });
}
