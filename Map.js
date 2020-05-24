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

    var infoWindowArray = {};

    var pins = [];
    map = new google.maps.Map(document.getElementById('map'), options);
    if(eventArray!=null){
    for (let  i = 0; i < eventArray.length; i++) {
        //console.log("test1");
        infoWindowArray[i]= new google.maps.InfoWindow({
            content: "<a href='event.php?str="+eventArray[i].event_id +"'>"+eventArray[i].title+"</a><br>"+eventArray[i].date+"<br>"
        });
        pins[i] = new google.maps.Marker({ position: { lat: Number(eventArray[i].lat), lng: Number(eventArray[i].lng) }, map: map });
        

        pins[i].addListener('click',function(){
             infoWindowArray[i].open(map,pins[i]);
             console.log("boom");
         });
         console.log(eventArray[i]);
    }}
    
    map.addListener('click', function (event) {
        //console.log("test2");
        if (marker != null)
            marker.setMap(null);
        marker = new google.maps.Marker({
            position: event.latLng,
            map:map,
            icon:'images/bluemarker1.png'
         });

         //Used by landing.php to extract the coordinates for the post-event form
         if(document.getElementById("budget-4")!=null){
            var value = document.getElementById("budget-4");
            console.log(marker.position.lat()); 
            value.setAttribute("value",marker.position.lat()+","+marker.position.lng());
         }

    });

}

function getMarker(){
    console.log(marker.position.latLng.lat);
}