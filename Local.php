<?php
class Local{
    public string $Name;
    public string $Address;
    public array $Games;

    public function __construct($name, $address, $games) {
        $this->Name = $name;
        $this->Address = $address;
        $this->Games = $games;
    }

    public function mostrarInfo() {
        return "Local: " . $this->Name . ", Dirección: " . $this->Address . ", Juegos Disponibles: " . count($this->Games);
    }

    public function addGame($game) {
        $this->Games[] = $game;
    }

    public function listGames() {
        foreach ($this->Games as $game) {
            echo $game->mostrarInfo() . "\n";
        }
    }

    public function SearchGameByComplexity($complexity): array {
        $filteredGames = [];
        foreach ($this->Games as $game) {
            if ($game->Complexity === $complexity) {
                $filteredGames[] = $game;
            }
        }
        return $filteredGames;
    }
    public function SearchGameByPlayers(int $PlayersNumber ): array {
        $filteredGames = [];
        foreach ($this->Games as $game) {
            if ($game->PlayersNumber === $PlayersNumber) {
                $filteredGames[] = $game;
            }
        }
        return $filteredGames;
    }
}   