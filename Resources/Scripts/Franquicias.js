
$(document).ready(function(){
	 $('#map').locationpicker({
        location: {
            latitude: 20.7110767,
            longitude: -103.3608683
        },
        locationName: "Fit Weight",
        radius: 0,
    	markerDraggable: false,    
    	markerIcon:'../../Resources/Images/franquicias/franquicias-742.png' ,
    });  	
});

$('#map1').click(function(){
  	$('#map').locationpicker({
        location: {
            latitude: 20.7110767,
            longitude: -103.3608683
        },
        locationName: "Fit Weight",
        radius: 0,
    	markerDraggable: false,
    	markerIcon:'../../Resources/Images/franquicias/franquicias-742.png' ,
    });
  });
  
  $('#map2').click(function(){
  	$('#map').locationpicker({
        location: {
            latitude: 20.6456898,
            longitude: -103.3010055
        },
        locationName: "Fit Weight",
        radius: 0,
    	markerDraggable: false,
    	markerIcon:'../../Resources/Images/franquicias/franquicias-742.png' ,
    });
  });
  
  
  $('#map3').click(function(){
  	$('#map').locationpicker({
        location: {
            latitude: 20.6617769,
            longitude: -103.4264652
        },
        locationName: "Fit Weight",
        radius: 0,
    	markerDraggable: false,
    	markerIcon:'../../Resources/Images/franquicias/franquicias-742.png' ,
    });
  });

  

