<?php 
      $conn = new mysqli('localhost','root','','sanisa_team19');
      $sql = "SELECT * FROM customer WHERE c_id=1";
      $result = $conn->query($sql);
      if($result->num_rows >0){
          while($row = $result->fetch_assoc()){
              $c_address=$row['c_address'];
              echo $c_address;
          }
      }

    $column = array();
    
    $sql = "SELECT * FROM sakhi";
      $result = $conn->query($sql);
      if($result->num_rows >0){
          
          while($row = $result->fetch_assoc()){
              //echo var_dump($row);
              //echo '==========================';
              $column[]=$row['s_address'];
              //var_dump($column);
              //echo "+++++++++++++";
              
          }
          
          $column = implode('","',$column);
        
          
          
          
            
        
      }
      
      ?>

<!DOCTYPE html>
<html>
<!--refer https://developers.google.com/maps/documentation/javascript/examples/distance-matrix -->
<head>
  <title>Distance Matrix service</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>

<body>
  <div id="right-panel">
    <input type="text" id="txtGeo" />
    <button id="distance">Calculate Distance</button>
    <div>
      <strong>Results</strong>
    </div>
    <div id="output"></div>
  </div>
  <script>
      
    //created as Global just to debug in console
    var source = "<?php echo $c_address?>";
    //var destination= 
    var results;
    $("#distance").click(function () {
      //getting Geolocation from browser
      if (navigator.geolocation) {
        navigator.geolocation.getCurrentPosition(function (position) {
          var geocoder = new google.maps.Geocoder;
          var service = new google.maps.DistanceMatrixService;
          //getting distance from Google
          service.getDistanceMatrix({
            origins: [source],
            destinations: ["<?php echo $column?>"],
            travelMode: 'DRIVING',
            unitSystem: google.maps.UnitSystem.METRIC,
            avoidHighways: false,
            avoidTolls: false
          }, function (response, status) {
            if (status !== 'OK') {
              alert('Error was: ' + status);
            } else {
              var originList = response.originAddresses;
              var destinationList = response.destinationAddresses;
              var outputDiv = document.getElementById('output');
                var min=999,index=0;
              outputDiv.innerHTML = '';
                var results;
              for (var i = 0; i < originList.length; i++) {
                results = response.rows[i].elements;
                for (var j = 0; j < results.length; j++) {
                  outputDiv.innerHTML += results[j].distance.text;
                    if(min>parseInt(results[j].distance.text)){
                        min=results[j].distance.text;
                        index=j;
                    }
                    
                }
              }
        console.log("Distance : "+min+", index : "+index);
            }
          });
        }, function () {
          console.log("error getting location"); //incase of connection failure
        });
      }
        
    });
  </script>
  <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAMxdGmGa60mA7EV-iPYauPrj9XB35qA6Q">
  </script>
</body>

</html>