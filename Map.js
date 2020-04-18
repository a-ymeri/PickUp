var map;
var array;
function initMap() {
    var thessaloniki = { lat: 40.6401, lng: 22.9444 };

    var options = {
        zoom: 14,
        center: thessaloniki
    }

    var pins = [];
    var marker;
    map = new google.maps.Map(document.getElementById('map'), options);

    for(var i = 0; i<array.length;i++){
        marker = new google.maps.Marker({ position: {lat: Number(array[i].lat), lng: Number(array[i].lng)}, map: map });
    }

    map.addListener('click', function (event) {
        if(marker != null)
            marker.setMap(null);
        marker = new google.maps.Marker({position:event.latLng});
        marker.setMap(map);
        //console.log(event.latLng.lat());
    });

}

function placePin(coords) {
}

function initPins(array){

}