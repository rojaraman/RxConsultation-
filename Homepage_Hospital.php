<!DOCTYPE HTML>
<html>
    <head>

    </head>

    <body style="background-image: url('images/backgrd.png');background-repeat:no-repeat;background-size:100%;">
        <form>
            <input type="Button" name="Hospital" value="Click to find near by hospital details" onclick="getHospitalInfo();">
        </form>
        <script>
            function getHospitalInfo() {
                var request = {
                    location: point,
                    radius: '1000',
                    types: ['hospital']
                };
                service = new google.maps.places.PlacesService(map);
                service.nearbySearch(request, callback);
                //alert("HI!");
            }

            function callback(results, status) {
                if (status === google.maps.places.PlacesServiceStatus.OK) {
                    for (var i = 0; i < results.length; i++) {
                        var data = JSON.stringify(results[i]);
                        var json = JSON.parse(data);
                        var geometry = json["geometry"];
                        var location = geometry["location"];
                        var k = location["k"];
                        var D = location["D"];
                        var lat = JSON.stringify(k);
                        var lng = JSON.stringify(D);
                        var name = json["name"];
                        var vicinity = json["vicinity"];
                        var nameString = JSON.stringify(name);
                        var vicinityString = JSON.stringify(vicinity);
                        var hName = JSON.parse(nameString);
                        var hVicinity = JSON.parse(vicinityString);
                        displayData(hName, hVicinity);
                    }
                }
            }

        </script>

    </body>
</html>