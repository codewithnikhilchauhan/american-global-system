
var google;

function init() {
    // Basic options for a simple Google Map
    // Coordinates for 250 Georgia Avenue E, Fayetteville, Georgia, 30214, USA
    var myLatlng = new google.maps.LatLng(33.453869, -84.451241);

    var mapOptions = {
        // How zoomed in you want the map to start at
        zoom: 15,

        // The latitude and longitude to center the map
        center: myLatlng,

        // How you would like to style the map. 
        scrollwheel: false,
        styles: [
            {
                "featureType": "administrative.country",
                "elementType": "geometry",
                "stylers": [
                    {
                        "visibility": "simplified"
                    },
                    {
                        "hue": "#ff0000"
                    }
                ]
            }
        ]
    };

    // Get the HTML DOM element that will contain your map 
    var mapElement = document.getElementById('map');

    // Create the Google Map using our element and options defined above
    var map = new google.maps.Map(mapElement, mapOptions);

    // Add a marker for our specific location
    new google.maps.Marker({
        position: myLatlng,
        map: map,
        title: 'American Global System Inc',
        icon: 'images/loc.png'
    });
}
google.maps.event.addDomListener(window, 'load', init);