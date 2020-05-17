var array = {};
var marker;
function initMap() {
    var map;

    var thessaloniki = { lat: 40.6401, lng: 22.9444 };

    var options = {
        zoom: 14,
        center: thessaloniki
    }

    var pins = [];
    map = new google.maps.Map(document.getElementById('map'), options);

    for (var i = 0; i < array.length; i++) {
        console.log("test1");
        pins[i] = new google.maps.Marker({ position: { lat: Number(array[i].lat), lng: Number(array[i].lng) }, map: map });
    }

    map.addListener('click', function (event) {
        console.log("test2");
        if (marker != null)
            marker.setMap(null);
        marker = new google.maps.Marker({ position: event.latLng });
        marker.setMap(map);
        var value = document.getElementById("budget-4");
        console.log(marker.position.lat());
        value.setAttribute("value",marker.position.lat()+","+marker.position.lng());
    });

}

function getMarker(){
    console.log(marker.position.latLng.lat);
}

