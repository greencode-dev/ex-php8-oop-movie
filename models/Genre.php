<?php

class Genre {
    protected string $name;
    protected string $description;

    //Costruttore della classe Genre
    public function __construct(string $name, string $description) {
        $this->name = $name;
        $this->description = $description;
    }

    //Restituisce il nome del genere
    public function getName(): string {
        return $this->name;
    }
    
    //Restituisce la descrizione del genere
    public function getDescription(): string {
        return $this->description;
    }
}