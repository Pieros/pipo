function initMap() {
  // Try HTML5 geolocation.
  navigator.geolocation.getCurrentPosition(function(position) {
    var pos = {
      lat: position.coords.latitude,
      lng: position.coords.longitude
    };
    var str = pos.lat+","+pos.lng;
    $('#position').text(str);
    $.ajax({
      url: "http://maps.googleapis.com/maps/api/geocode/json", 
      data:{latlng:str,
            sensor:false},
      success: function(result){
        var loc = result.results[0].formatted_address;
        $.get("recieve.php", {lat:pos.lat,lng:pos.lng,loc:loc});
        }
        });
    });
  }
