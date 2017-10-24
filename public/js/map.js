function initMap() {
    var points = [
        {
            position: new google.maps.LatLng(54.368111, 18.615194)
        },
        {
            position: new google.maps.LatLng(54.371616, 18.566736)
        }
    ];

    var directionPoints = [
        {
            position: new google.maps.LatLng(54.378111, 18.615194)
        },
        {
            position: new google.maps.LatLng(54.3790111, 18.566736)
        }
    ]

    var iconBase = 'images/station.png';

    var map = new google.maps.Map(document.getElementById('map'), {
        center: points[1].position,
        zoom: 12
    });

    var infowindow = new google.maps.InfoWindow({
       content:
       '<div class="popup">' +
           '<table>' +
               '<tr>' +
                    '<th>Test</th>' +
                    '<th>Test</th>' +
                    '<th>Test</th>' +
               '</tr>' +
               '<tr>' +
                   '<td>I tu też test</td>' +
                   '<td>I tu też test</td>' +
                   '<td>I tu też test</td>' +
               '</tr>' +
           '</table>' +
       '</div>'
    });

    points.forEach(function (point) {
        var marker = new google.maps.Marker({
            position: point.position,
            icon: iconBase,
            map: map
        });
        marker.addListener('click', function () {
            infowindow.open(map, marker);
        });
    });

    var directionsDisplay = new google.maps.DirectionsRenderer({
        map: map
    });

    // Set destination, origin and travel mode.
    var request = {
        destination: directionPoints[0].position,
        origin: directionPoints[1].position,
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