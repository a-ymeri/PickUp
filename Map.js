function initMap() {
    var thessaloniki = { lat: 40.6401, lng: 22.9444 };

    var options = {
        zoom: 14,
        center: thessaloniki
    }

    var pins = [];
    var marker;
    var map = new google.maps.Map(document.getElementById('map'), options);

    map.addListener('click', function (event) {
        if(marker != null)
            marker.setMap(null);
        marker = new google.maps.Marker({position:event.latLng});
        marker.setMap(map);
        //console.log(event.latLng.lat());
    });

}

function placePin(map, coords) {
    marker = new google.maps.Marker({ position: coords, map: map });
}