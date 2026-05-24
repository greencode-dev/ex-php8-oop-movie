<?php

// Trait che permette di riutilizzare la logica del regista in diverse classi
trait HasDirector {
    // Variabile per memorizzare il nome del regista
    protected string $director;

    // Metodo per impostare il nome del regista
    public function setDirector(string $director): void {
        $this->director = $director;
    }

    // Metodo per recuperare il nome del regista
    public function getDirector(): string {
        return $this->director;
    }
}