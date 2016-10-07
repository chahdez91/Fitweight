function initMap() {
  	var longitud = -103.363057;
	var latitud = 20.7110767;
	var myLatLng = {lat:latitud , lng:longitud };
	
  var map = new google.maps.Map(document.getElementById('map'), {
    zoom: 15,
    center: myLatLng
  });

  var marker = new google.maps.Marker({
    position: myLatLng,
    map: map,
    title: 'FitWeight'
  });
}
  

