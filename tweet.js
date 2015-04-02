$(document).ready(function() {

    var max_id = 0;
    if (navigator.geolocation) {
        navigator.geolocation.getCurrentPosition(showPosition);
    } else {
        console.log("Geolocation is not supported by this browser.");
    }
    function showPosition(position) {
        console.log(position);

        var lat, long;
        lat = position.coords.latitude;
        long = position.coords.longitude;
        
        initialize(lat, long);
        
        function fetchTweets() {
            var request = $.ajax({
                data: {
                    lat: lat,
                    long: long,
                    max_id: max_id
                },
                url: '/dvt/tweetServer/tweets.php',
                type: 'GET'
            });
            request.success(function(data) {
                data = JSON.parse(data);
                console.log(data);
                display(data.statuses);
            });
            setTimeout(fetchTweets, 30000);
        }
        fetchTweets();
    }


    function display(statuses) {
        $.each(statuses, function(ind, status) {
            if(max_id < status.id)
                max_id = status.id;
            var long = status.coordinates.coordinates[0];
            var lat = status.coordinates.coordinates[1];
            console.log(lat, long);
            setPin(lat, long, status.text);
        });
    }

});
