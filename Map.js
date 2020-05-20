var eventArray = {};
var marker;
function initMap() {
    //TODO: add a search bar for map focus
    var map;

    var thessaloniki = { lat: 40.6401, lng: 22.9444 };

    var options = {
        zoom: 14,
        center: thessaloniki
    }

    var pins = [];
    map = new google.maps.Map(document.getElementById('map'), options);

    for (var i = 0; i < eventArray.length; i++) {
        console.log("test1");
        pins[i] = new google.maps.Marker({ position: { lat: Number(eventArray[i].lat), lng: Number(eventArray[i].lng) }, map: map });
    }

    map.addListener('click', function (event) {
        console.log("test2");
        if (marker != null)
            marker.setMap(null);
        marker = new google.maps.Marker({
            position: event.latLng,
            map:map,
            icon:'images/bluemarker1.png'
         });
        var value = document.getElementById("budget-4");
        console.log(marker.position.lat()); 
        value.setAttribute("value",marker.position.lat()+","+marker.position.lng());
    });

}

function getMarker(){
    console.log(marker.position.latLng.lat);
}