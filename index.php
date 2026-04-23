<?php

require_once("./traits/HasDirector.php");
require_once("./models/Genre.php");
require_once("./models/Movie.php");
require_once("./db.php");

$movies[0]->setDirector("Christopher Nolan");
$movies[1]->setDirector("Christopher Nolan");
$movies[2]->setDirector("Christopher Nolan");
$movies[3]->setDirector("Quentin Tarantino");
$movies[4]->setDirector("Lana & Lilly Wachowski");
$movies[5]->setDirector("Francis Ford Coppola");

//var_dump($movies);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CineBase | Il tuo Database Cinematografico</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body class="bg-light">
    <nav class="navbar navbar-dark bg-dark mb-5 shadow">
        <div class="container">
            <span class="navbar-brand mb-0 h1 text-uppercase">🎬 CineBase</span>
        </div>
    </nav>

    <div class="container pb-5">
        <header class="mb-5 text-center">
            <h1 class="display-4 fw-bold">I nostri Film</h1>
            <p class="lead text-muted">Esplora la nostra selezione esclusiva di capolavori cinematografici.</p>
        </header>

        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4">
            <?php foreach ($movies as $movie) { ?>
            <div class="col">
                <div class="card h-100 border-0 shadow-sm">
                    <div class="ratio" style="--bs-aspect-ratio: 150%;">
                        <img 
                            src="<?php echo $movie->posterUrl ?>" 
                            class="card-img-top object-fit-cover" 
                            alt="<?php echo $movie->title; ?>"
                            onerror="this.src='https://placehold.co/500x750?text=Image+Not+Found'"
                        >
                    </div>
                    <div class="card-header bg-white border-0 pt-4">
                        <h5 class="card-title fw-bold text-primary mb-0">
                            <?php echo $movie->title; ?>
                        </h5>
                        <small class="text-muted">
                            <?php echo $movie->year; ?>
                        </small>
                        <p class=" text-muted small">
                            <?php echo $movie->getDirector() ?? 'N/D'; ?>
                        </p>
                    </div>
                    <div class="card-body">
                        <p class="card-text text-secondary mb-4">
                            <em>
                                <?php echo $movie->description; ?>
                            </em>
                        </p>
                        <div class="mb-3">
                            <?php foreach ($movie->getGenres() as $genre) { ?>
                                <span class="badge rounded-pill bg-info text-dark me-1">
                                    <?php echo $genre->getName(); ?>
                                </span>
                            <?php } ?>
                        </div>
                    </div>
                    <div class="card-footer bg-white border-0 pb-4">
                        <div class="d-flex justify-content-between align-items-center">
                            <span class="fw-bold text-warning">⭐ 
                                <?php echo $movie->rating; ?>/10
                            </span>
                            
                        </div>
                    </div>
                </div>
            </div>
            <?php } ?>

        </div>
    </div>
    
</body>
</html>