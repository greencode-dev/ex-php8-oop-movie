<?php

class Genre {
    protected $name;
    protected $description;

    //Costruttore della classe Genre
    public function __construct($name, $description) {
        $this->name = $name;
        $this->description = $description;
    }

    //Restituisce il nome del genere
    public function getName() {
        return $this->name;
    }
    
    //Restituisce la descrizione del genere
    public function getDescription() {
        return $this->description;
    }
}