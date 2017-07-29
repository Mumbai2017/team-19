<?php
include('connection.php');
$sqls="SELECT s_address FROM sakhi";
$results=$conn->query($sqls);
$rows=$results->fetch_assoc();
if($rows->num_rows>0){
    $source=$rows['s_address'];
}
$sqlc="SELECT c_address FROM customer";
$resultc=$conn->query($sqlc);
if($resultc->num_rows>0){
    $destination=c_address;
}

echo "source is :".$source."<br>destination :".$destination;

function get_coordinates($address)
{
    $url = "http://maps.google.com/maps/api/geocode/json?address=$address&sensor=false&region=Mumbai";
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_PROXYPORT, 3128);
    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
    $response = curl_exec($ch);
    curl_close($ch);
    $response_a = json_decode($response);
    $return = array('lat' => $response_a->results[0]->geometry->location->lat, 'long' => $long = $response_a->results[0]->geometry->location->lng);

    return $return;
}

function getDistanceBetweenPoints($lat1, $lon1, $lat2, $lon2) {
    $theta = $lon1 - $lon2;
    $miles = (sin(deg2rad($lat1)) * sin(deg2rad($lat2))) + (cos(deg2rad($lat1)) * cos(deg2rad($lat2)) * cos(deg2rad($theta)));
    $miles = acos($miles);
    $miles = rad2deg($miles);
    $miles = $miles * 60 * 1.1515;
    $kilometers = $miles * 1.609344;
    return $kilometers;
}

function get_distance($lat1, $lat2, $long1, $long2)
{
    /* These are two points in New York City */
    $point1 = array('lat' => $lat1, 'long' => $long1);
    $point2 = array('lat' => $lat2, 'long' => $long2);

    $distance = getDistanceBetweenPoints($point1['lat'], $point1['long'], $point2['lat'], $point2['long']);
    return $distance;
}

$coordinates1 = get_coordinates($sqls);
$coordinates2 = get_coordinates($sqlc);

echo 'Distance: <b>'.round(get_distance($coordinates1['lat'], $coordinates2['lat'], $coordinates1['long'], $coordinates2['long']), 1).'</b> km';