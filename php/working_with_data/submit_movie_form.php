<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
          integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <title>IMDB from</title>
    <style>
        main {
            margin-top: 50px;
        }
    </style>

</head>

<body>

<main>
    <div class="container">
        <form method="post" action="submit_movie_to_db.php" name="submit_form">
            <div class="form-group">
                <label for="name">Movie name</label>
                <input type="text" class="form-control" name="name" id="name" value="the expendables" placeholder="Movie name">
            </div>
            <div class="form-group">
                <label for="year">Year</label>
                <input type="number" class="form-control" name="year" id="year" placeholder="Year" value="2016" min="1900"
                       max="2100">
            </div>
            <button type="submit" class="btn btn-default">Submit</button>
        </form>
    </div>
</main>
</body>
</html>
