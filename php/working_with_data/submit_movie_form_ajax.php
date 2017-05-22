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
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
          integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <title>IMDB form - with AJAX</title>

    <style>
        main {
            margin-top: 50px;
        }
    </style>

</head>

<body>

<main>
    <div class="container">
        <form method="post" action="submit_movie_to_db.php" id="submit_form">
            <div class="form-group">
                <label for="name">Movie name</label>
                <input type="text" class="form-control" name="name" id="name" value="the expendables"
                       placeholder="Movie name">
            </div>
            <div class="form-group">
                <label for="year">Year</label>
                <input type="number" class="form-control" name="year" id="year" placeholder="Year" value="2016"
                       min="1900"
                       max="2100">
            </div>
            <button type="submit" class="btn btn-default">Submit</button>
        </form>
    </div>
</main>
</body>
</html>
<script>
    $("#submit_form").on('submit', function (e) {
        e.preventDefault();
        $.ajax({
            url: $(this).attr('action'),
            type: $(this).attr('method'),
            dataType: 'json',
            data: $(this).serialize(),
            success: function (data) {
                console.log('Submitted');
                if (data.response) {
                    console.log('Movie has been submitted successfully');
                } else {
                    console.log('Problem submitting movie');
                }
            },
            error: function (xhr, err) {
                console.log('Error', err);
            }
        });
        return false;
    });
</script>