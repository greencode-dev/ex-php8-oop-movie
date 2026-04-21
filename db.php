<?php

$crime_genre = new Genre("Crime","",) ;
$action_genre = new Genre("Action", "Adrenalina pura");

$movies = [
    new Movie("Inception", 2010, [$crime_genre, $action_genre], 8.8),
    new Movie("The Dark Knight", 2008, [$action_genre], 9.0),
    new Movie("Interstellar", 2014, [$action_genre], 8.6)
];

$movies[0]->description = "Un ladro che ruba segreti attraverso i sogni.";
$movies[1]->description = "Batman combatte il Joker a Gotham City.";
$movies[2]->description = "Un viaggio interstellare alla ricerca di una nuova casa.";
