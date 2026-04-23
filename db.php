<?php

$crime_genre = new Genre("Crime", "Intrighi e misteri nel mondo del crimine");
$action_genre = new Genre("Action", "Adrenalina pura");
$scifi_genre = new Genre("Sci-Fi", "Esplorazione del futuro e della tecnologia");
$drama_genre = new Genre("Drama", "Storie profonde e coinvolgenti");

$movies = [
    new Movie("Inception", 2010, [$crime_genre, $action_genre], 8.8),
    new Movie("The Dark Knight", 2008, [$action_genre], 9.0),
    new Movie("Interstellar", 2014, [$action_genre, $scifi_genre], 8.6),
    new Movie("Pulp Fiction", 1994, [$crime_genre], 8.9),
    new Movie("The Matrix", 1999, [$action_genre, $scifi_genre], 8.7),
    new Movie("The Godfather", 1972, [$crime_genre, $drama_genre], 9.2)
];

$movies[0]->description = "Un ladro che ruba segreti attraverso i sogni.";
$movies[1]->description = "Batman combatte il Joker a Gotham City.";
$movies[2]->description = "Un viaggio interstellare alla ricerca di una nuova casa.";
$movies[3]->description = "Le vite di due sicari si intrecciano in storie di violenza e redenzione.";
$movies[4]->description = "Un hacker scopre la vera natura della sua realtà e il suo ruolo nella guerra contro i suoi controllori.";
$movies[5]->description = "L'anziano patriarca di una dinastia del crimine organizzato trasferisce il controllo del suo impero al figlio riluttante.";

$movies[0]->posterUrl = "https://image.tmdb.org/t/p/original/5QHWgqaBxZI1eM5e3YhyKzY5o3z.jpg";
$movies[1]->posterUrl = "https://media.themoviedb.org/t/p/original/pyL921P8MtNyuJMDBxE1AkN7V9k.jpg";
$movies[2]->posterUrl = "https://image.tmdb.org/t/p/original/9rSeLJx4k1TaIUlPa4gwZK6tBxl.jpg";
$movies[3]->posterUrl = "https://media.themoviedb.org/t/p/original/50RIf7ekU3fqP4TrvKhzBIKuUq7.jpg";
$movies[4]->posterUrl = "https://media.themoviedb.org/t/p/original/yQZX4scmfYtj4ccKFNGZJlOj1y9.jpg";
$movies[5]->posterUrl = "https://media.themoviedb.org/t/p/original/aQ4yCDBVtCVis7tLNMpUiu1DuLa.jpg";
