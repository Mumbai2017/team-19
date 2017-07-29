<?php include('connection.php');
$sqls="SELECT s_address FROM sakhi";
$results=$conn->query($sqls);
if($results->num_rows>0){
    $source=s_address;
}
$sqlc="SELECT c_address FROM customer";
$resultc=$conn->query($sqlc);
if($resultc->num_rows>0){
    $destination=c_address;
}?>;

console.log(<?php echo $sqlc;  ?>);
var source = <?php echo $sqlc;  ?>;
var destination = <?php echo $sqlc;?>;
var directionsDisplay;
var directionsService = new google.maps.DirectionsService();
google.maps.event.addDomListener(window, 'load', function () {
    new google.maps.places.SearchBox(document.getElementById('txtSource'));
    new google.maps.places.SearchBox(document.getElementById('txtDestination'));
    directionsDisplay = new google.maps.DirectionsRenderer({ 'draggable': true });
});
 
function GetRoute() {
    var mumbai = new google.maps.LatLng(18.9750, 72.8258);
    var mapOptions = {
        zoom: 7,
        center: mumbai
    };
    map = new google.maps.Map(document.getElementById('dvMap'), mapOptions);
    directionsDisplay.setMap(map);
    directionsDisplay.setPanel(document.getElementById('dvPanel'));
 
    //*********DISTANCE AND DURATION**********************//
    var service = new google.maps.DistanceMatrixService();
    service.getDistanceMatrix({
        origins: [source],
        destinations: [destination],
        travelMode: google.maps.TravelMode.DRIVING,
        unitSystem: google.maps.UnitSystem.METRIC,
        avoidHighways: false,
        avoidTolls: false
    }, function (response, status) {
        if (status == google.maps.DistanceMatrixStatus.OK && response.rows[0].elements[0].status != "ZERO_RESULTS") {
            var distance = response.rows[0].elements[0].distance.text;
            var duration = response.rows[0].elements[0].duration.text;
            var dvDistance = document.getElementById("dvDistance");
           dvDistance.innerHTML = "";
            dvDistance.innerHTML += "Distance: " + distance + "<br />";
            dvDistance.innerHTML += "Duration:" + duration;
 
        } else {
            alert("Unable to find the distance via road.");
        }
    });
}