$.get("http://ipinfo.io", function (response) {
			    $("#ip").html("IP: " + response.ip);
			    $("#city_name").html("City: " + response.city);
			    $("#province_name").html("Province: " + response.region);
			    $("#country_name").html("Country: " + response.country);
			    $("#coordinates").html("Coordinates: " + response.loc);
			   
			}, "jsonp");
