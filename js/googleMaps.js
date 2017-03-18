
        google.maps.event.addDomListener(window, 'load', init);

		var map;

		function init() {
    		var mapOptions = {
       			center: new google.maps.LatLng(48.1537405,11.563737899999978),
        		zoom: 12,
            	zoomControl: false,
        		disableDoubleClickZoom: true,
        		mapTypeControl: false,
        		scaleControl: false,
        		scrollwheel: false,
        		streetViewControl: false,
        		draggable : true,
        		overviewMapControl: false,
        		mapTypeId: google.maps.MapTypeId.ROADMAP    			
    	}

    	var mapElement = document.getElementById('map');
    	var map = new google.maps.Map(mapElement, mapOptions);
    	var locations = [
    	    ['München', 48.1537405, 11.563737899999978]
    	];

    	for (i = 0; i < locations.length; i++) {
        marker = new google.maps.Marker({
            icon: '',
            position: new google.maps.LatLng(locations[i][1], locations[i][2]),
            map: map
        });
    	}
		}