<?php

require_once("./traits/HasDirector.php");
require_once("./models/Genre.php");
require_once("./models/Movie.php");
require_once("./db.php");

$movies[1]->setDirector("Christopher Nolan");

//var_dump($movies);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movieland</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.8/css/bootstrap.min.css" integrity="sha512-2bBQCjcnw658Lho4nlXJcc6WkV/UxpE/sAokbXPxQNGqmNdQrWqtw26Ns9kFF/yG792pKR1Sx8/Y1Lf1XN4GKA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <div class="container">
        <h1>Movie Mania</h1>
        <hr>
        <h2>Movies</h2>
        <div class="row">
            <?php foreach ($movies as $movie) { ?>
            <div class="col-md-4">
                <div class="card mb-4 shadow-sm">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $movie->title; ?></h5>
                        <h6 class="card-subtitle mb-2 text-muted">Regia: <?php echo $movie->getDirector() ?? 'Non disponibile'; ?></h6>
                        <p class="card-text"><strong>Anno:</strong> <?php echo $movie->year; ?></p>
                        <p class="card-text"><strong>Genere:</strong> <?php echo $movie->getGenresString(); ?></p>
                        <p class="card-text"><em><?php echo $movie->description; ?></em></p>
                        <p class="card-text text-warning">Rating: <?php echo $movie->rating; ?>/10</p>
                    </div>
                </div>
            </div>
            <?php } ?>

        </div>
    </div>
    
</body>
</html>