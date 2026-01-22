<?php

require_once 'juego.php';
require_once 'Local.php';

enum Complexity:string {
    case EASY = 'Baja';
    case MEDIUM = 'Media';
    case HARD = 'Alta';
}

$Local1Games = new Local("Juegos y Diversión", "Calle Falsa 123", []);


$Juego1 = new juego("Aventuras en el Bosque", Complexity::EASY->value, 30, 4, true);
$Juego2 = new juego("Misión Espacial", Complexity::HARD->value, 60, 6, false);
$Juego3 = new juego("Desafío Matemático", Complexity::MEDIUM->value, 45, 2, true);
$Juego4 = new juego("Carrera de Autos", Complexity::EASY->value, 20, 8, false);
$Local1Games->addGame($Juego1);
$Local1Games->addGame($Juego2); 
$Local1Games->addGame($Juego3);
$Local1Games->addGame($Juego4);

echo "Buscamos juegos por complejidad 'Baja':\n";
$ListadoJuegos1 = $Local1Games->SearchGameByComplexity(Complexity::EASY->value);
foreach ($ListadoJuegos1 as $juego) {
    echo $juego->getName() . "\n";
}

echo "\nBuscamos juegos para 4 jugadores:\n";
$ListadoJuegos2 = $Local1Games->SearchGameByPlayers(4);
foreach ($ListadoJuegos2 as $juego) {
    echo $juego->getName() . "\n";
}



?>