<?php


class Kamer {
    private $lengte;
    private $breedte;
    private $hoogte;

    // Constructor om de afmetingen in te stellen
    public function __construct($lengte, $breedte, $hoogte) {
        $this->lengte = $lengte;
        $this->breedte = $breedte;
        $this->hoogte = $hoogte;
    }

    // Functie om de lengte van de kamer op te halen
    public function getLengte() {
        return $this->lengte;
    }

    // Functie om de breedte van de kamer op te halen
    public function getBreedte() {
        return $this->breedte;
    }

    // Functie om de hoogte van de kamer op te halen
    public function getHoogte() {
        return $this->hoogte;
    }
}




?>