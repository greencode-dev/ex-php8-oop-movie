<?php

class Movie {
    public string $title;
    public int $year;
    protected array $genres;
    public float $rating;
    public string $description = "";
    public string $posterUrl = "";

    use HasDirector;

    //Costruttore della classe Movie
    public function __construct(string $title, int $year, array $genres, float $rating, string $director) {
        $this->title = $title;
        $this->year = $year;
        $this->genres = $genres;
        $this->rating = $rating;
        $this->setDirector($director);
    }

    //Trasforma l'array di oggetti Genre in una stringa leggibile
    //Utilizza array_map per estrarre i nomi e implode per unirli con una virgola
    //Esempio: "Azione, Drammatico"
    public function getGenresString(): string {
        $genreNames = array_map(fn($genre) => $genre->getName(), $this->genres);
        return implode(', ', $genreNames);
    }

    //Restituisce l'array originale di oggetti Genre
    public function getGenres(): array {
        return $this->genres;
    }
}