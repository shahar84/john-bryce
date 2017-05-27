<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script
            src="https://code.jquery.com/jquery-2.2.4.min.js"
            integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44="
            crossorigin="anonymous"></script>


    <title>Ajax search movie</title>
</head>
<style>
    #live-preview ul {
        list-style-type: none;
    }

    #live-preview li {
        line-height: 70px;
        display: block;
    }

    #live-preview img {
        max-width: 45px;
    }
</style>
<body>
<form action="search_movie_ajax.php">
    <label for="search">
        Search movie
    </label>
    <input type="text" id="search">
</form>

<div id="live-preview"></div>
<script>
    var currentRequest = null;

    $(document).ready(function () {
        $("#search").keyup(function () {
            var query = $(this).val();
            if (query.length === 0) {
                showData(null);
                return;
            }

            currentRequest = jQuery.ajax({
                type: 'GET',
                data: {name: query},
                url: 'search_movie_ajax.php',
                dataType: 'json',
                beforeSend: function () {
                    if (currentRequest !== null) {
                        currentRequest.abort();
                    }
                },
                success: function (data) {
                    data.response.length === 0 ? showData(null) : showData(data.response);
                },
                error: function (e) {
                    console.log("Request Failed: " + e);
                }
            });
        });
    });
    /**
     *
     * @param image - the broken html image tag
     */
    function imgError(image) {
        image.onerror = "";
        image.src = "no_image.png";
        return true;
    }
    /**
     *
     * @param list - list of movie objects
     */
    function showData(list) {
        var livePreview = $("#live-preview");
        var output = '';
        if (list !== null) {
            console.log(list);
            for (var i = 0; i <= list.length - 1; i++) {
                var movie = list[i];
                var thumb = movie['image_url'].replace('w640', 'w45_and_h67_bestv2');
                output += "<li><img src='" + thumb + "' onerror='imgError(this);'> " + movie['name'] + " </li>";
            }
            output = "<ul>" + output + "</ul>";
        }
        livePreview.html(output);
    }
</script>
</body>
</html>