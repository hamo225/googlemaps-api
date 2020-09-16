<!-- <?php

        // print_r(file_get_contents("https://maps.googleapis.com/maps/api/geocode/json?address=1600+Amphitheatre+Parkway,
        // +Mountain+View,+CA&key=AIzaSyBHMND1BKe-5plW0YkXWaIYljoG6S1h8Kc"));



        ?> -->


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Geocoding an Address</title>
</head>

<body>
    <h1>Geocoding is when you take a written address and convert it to coordinates. Reverse geocoding is when you have the coordinates and you convert them into a name.</h1>
    <h2>The output data is stored in JSON format in the url and when processing the url and decoding JSON with PHP we use json_decode. When we process
        it with JS/Jquery we use AJAX to carry out cross domain rquests for the data in the url</h2>
    <p>Always rememebr to put restrictions on the API keys when using them. Especially if you publish them to sites like GITHUB.</p>



    <!-- Jquery CDN -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <script>
        // calling AJAX to GET the data from the url and print it in the console. 
        $.ajax({

            url: "https://maps.googleapis.com/maps/api/geocode/json?address=1600+Amphitheatre+Parkway, +Mountain+View,+CA&key=AIzaSyBHMND1BKe-5plW0YkXWaIYljoG6S1h8Kc",
            type: "GET",
            success: function(data) {
                console.log(data);

                $.each(data["results"][0]["address_components"], function(key, value) {

                    if (value["types"][0]) {
                        alert(value["short_name"]);
                    }


                })
            }

        })
    </script>

</body>

</html>