<?php

// Importazione delle dipendenze necessarie
require_once("./Traits/HasDirector.php");
require_once("./Models/Genre.php");
require_once("./Models/Movie.php");
require_once("./db.php");

?>

<!DOCTYPE html>
<html lang="en" data-bs-theme="dark">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CineBase | Il tuo Database Cinematografico</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body class="bg-dark text-light">
    <nav class="navbar navbar-dark bg-dark mb-5 shadow">
        <div class="container">
            <span class="navbar-brand mb-0 h1 text-uppercase text-info">🎬 CineBase</span>
        </div>
    </nav>

    <div class="container pb-5">
        <header class="mb-5 text-center">
            <h1 class="display-4 fw-bold">I nostri Film</h1>
            <p class="lead text-info opacity-75">Esplora la nostra selezione esclusiva di capolavori cinematografici.</p>
        </header>

        <div class="row row-cols-2 row-cols-md-3 row-cols-lg-4 row-cols-xl-5 g-3">
            <?php foreach ($movies as $movie) { ?>
            <div class="col">
                <div class="card h-100 border-0 shadow-sm bg-body-secondary">
                    <div class="ratio" style="--bs-aspect-ratio: 135%;">
                        <img 
                            src="<?php echo $movie->posterUrl ?>" 
                            class="card-img-top object-fit-cover" 
                            alt="<?php echo $movie->title; ?>"
                            onerror="this.src='https://placehold.co/500x750?text=Image+Not+Found'"
                        >
                    </div>
                    <div class="card-header border-0 pt-3 pb-0">
                        <!-- Titolo ingrandito -->
                        <h4 class="card-title fw-bold text-info mb-0">
                            <?php echo $movie->title; ?>
                        </h4>
                        <!-- Anno e Regista sulla stessa riga -->
                        <p class="text-muted small mt-1">
                            <?php echo $movie->year; ?> - <?php echo $movie->getDirector(); ?>
                        </p>
                    </div>
                    <div class="card-body py-2">
                        <p class="card-text text-secondary mb-0">
                            <em>
                                <?php echo $movie->description; ?>
                            </em>
                        </p>
                    </div>
                    <div class="card-footer border-0 pb-3">
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="flex-grow-1">
                                <?php foreach ($movie->getGenres() as $genre) { ?>
                                    <span class="badge rounded-pill bg-info text-dark me-0.5 mb-0">
                                        <?php echo $genre->getName(); ?>
                                    </span>
                                <?php } ?>
                            </div>
                            <span class="fw-bold text-warning text-nowrap ms-2">⭐ <?php echo $movie->rating; ?>/10</span>
                        </div>
                    </div>
                </div>
            </div>
            <?php } ?>

        </div>
    </div>
    
</body>
</html>