var map;

/*
 * Initialize map facing the current location of the user
 */
function initialize(lat, long) {

    var mapOptions = {
        center: {lat: lat, lng: long},
        zoom: 13
    };

    map = new google.maps.Map(document.getElementById('map-canvas'),
            mapOptions);

}
