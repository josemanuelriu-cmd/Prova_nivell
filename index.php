<?php

require_once 'Juego.php';
require_once 'Local.php';

enum Complexity:string {
    case EASY = 'Baja';
    case MEDIUM = 'Media';
    case HARD = 'Alta';
}

$Local1Games = new Local("Juegos y Diversión", "Calle Falsa 123", []);

$Juego1 = new Juego("Aventuras en el Bosque", Complexity::EASY->value, 30, 4, false);
$Juego2 = new Juego("Ark nova", Complexity::HARD->value, 180, 4, true);
$Juego3 = new Juego("Desafío Matemático", Complexity::MEDIUM->value, 45, 2, true);
$Juego4 = new Juego("Carrera de Autos", Complexity::EASY->value, 20, 8, false);
$Juego5 = new Juego("Catan", Complexity::EASY->value, 60, 4, true);

$Local1Games->addGame($Juego1);
$Local1Games->addGame($Juego2); 
$Local1Games->addGame($Juego3);
$Local1Games->addGame($Juego4);
$Local1Games->addGame($Juego5);

echo "Buscamos juegos por complejidad 'Baja':\n";
$ListadoJuegos1 = $Local1Games->SearchGameByComplexity(Complexity::EASY->value);
/*foreach ($ListadoJuegos1 as $juego) {
    echo $juego->getName() . "\n";
}*/
echo implode(",",$ListadoJuegos1). PHP_EOL;

echo "\nBuscamos juegos para 5 jugadores:\n";
$ListadoJuegos2 = $Local1Games->SearchGameByPlayers(5);
foreach ($ListadoJuegos2 as $juego) {
    echo $juego->getName() . "\n";
}

echo "\nBuscamos juegos por complejidad 'Media' usando array_filter:\n";
$ListadoJuegos3 = $Local1Games->SearchGameByComplexity2(Complexity::MEDIUM->value);
foreach ($ListadoJuegos3 as $juego) {
    echo $juego->getName() . "\n";
}

$Local1Games->listGames();
?>