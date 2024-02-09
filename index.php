<?php


require_once 'huis.php'; // linkt huis.php

require_once 'kamer.php'; //linkt kamer.php

// Informatie over de kamers
$kamers = [
    new Kamer(5.2, 5.1, 5.5),
    new Kamer(4.8, 4.6, 4.9),
    new Kamer(5.9, 2.5, 3.1)
];

// Prijs van het huis
$prijsHuis = 894000;

// Maak een instantie van de klasse Huis
$huis = new Huis($kamers, $prijsHuis);

// Toon de resultaten
$huis->toonResultaten();

?>
