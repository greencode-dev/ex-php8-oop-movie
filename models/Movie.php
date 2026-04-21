<?php

class Movie {
    public $title;
    public $year;
    protected array $genres;
    public $rating;
    public $description;

    use HasDirector;

    public function __construct($title, $year, array $genres, $rating,) {
        $this->title = $title;
        $this->year = $year;
        $this->genres = $genres;
        $this->rating = $rating;
    }

    public function getGenresString() {
        $genreNames = array_map(fn($genre) => $genre->getName(), $this->genres);
        return implode(', ', $genreNames);
    }
}