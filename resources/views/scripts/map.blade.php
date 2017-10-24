<script>
    function initMap() {
        var gdansk = {lat: 54.371616, lng: 18.615194};
        var sopot = {lat: 54.444083, lng: 18.566736};

        var map = new google.maps.Map(document.getElementById('map'), {
            center: gdansk,
            zoom: 12
        });

        var directionsDisplay = new google.maps.DirectionsRenderer({
            map: map
        });

        // Set destination, origin and travel mode.
        var request = {
            destination: sopot,
            origin: gdansk,
            travelMode: 'DRIVING'
        };

        // Pass the directions request to the directions service.
        var directionsService = new google.maps.DirectionsService();
        directionsService.route(request, function(response, status) {
            if (status == 'OK') {
                // Display the route on the map.
                directionsDisplay.setDirections(response);
            }
        });
    }

</script>
<script src="https://maps.googleapis.com/maps/api/js?key={{ $apiKey }}&callback=initMap"
        async defer></script>