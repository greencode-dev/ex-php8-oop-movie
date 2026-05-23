<?php

class Movie {
    public $title;
    public $year;
    protected array $genres;
    public $rating;
    public $description;
    public $posterUrl;

    use HasDirector;

    //Costruttore della classe Movie
    public function __construct($title, $year, array $genres, $rating,) {
        $this->title = $title;
        $this->year = $year;
        $this->genres = $genres;
        $this->rating = $rating;
    }

    //Trasforma l'array di oggetti Genre in una stringa leggibile
    //Utilizza array_map per estrarre i nomi e implode per unirli con una virgola
    //Esempio: "Azione, Drammatico"
    public function getGenresString(): string {
        $genreNames = array_map(fn($genre) => $genre->getName(), $this->genres);
        return implode(', ', $genreNames);
    }

    //Restituisce l'array originale di oggetti Genre
    public function getGenres() {
        return $this->genres;
    }
}