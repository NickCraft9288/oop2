<?php

class Huis {
    private $kamers;
    private $totaalVolume;
    private $prijs;

    // Constructor om de kamers en prijs in te stellen
    public function __construct($kamers, $prijs) {
        $this->kamers = $kamers;
        $this->berekenTotaalVolume();
        $this->prijs = $prijs;
    }

    // Functie om het totale volume van het huis te berekenen
    private function berekenTotaalVolume() {
        $this->totaalVolume = 0;
        foreach ($this->kamers as $kamer) {
            $this->totaalVolume += $kamer->getLengte() * $kamer->getBreedte() * $kamer->getHoogte();
        }
    }

    // Functie om de resultaten weer te geven
    public function toonResultaten() {
        foreach ($this->kamers as $index => $kamer) {
            echo "Kamer " . ($index + 1) . ":<br>";
            echo "Lengte: " . $kamer->getLengte() . "m<br>";
            echo "Breedte: " . $kamer->getBreedte() . "m<br>";
            echo "Hoogte: " . $kamer->getHoogte() . "m<br><br>";
        }
        echo "Totaal Volume: " . $this->totaalVolume . "m³<br>";
        echo "Prijs van het huis: " . $this->prijs . " Euro<br>";
    }
}
?>