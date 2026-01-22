<?php
class Local{
    public string $Name;
    public string $Address;
    private array $Games;

    public function __construct(string $Name, string $Address, array $Games) {
        $this->Name = $Name;
        $this->Address = $Address;
        $this->Games = $Games;
    }

    public function mostrarInfo() {
        return "Local: " . $this->Name . ", Dirección: " . $this->Address . ", Juegos Disponibles: " . count($this->Games);
    }
    public function getName(): string {
        return $this->Name;
    }

    public function getAddress(): string {
        return $this->Address;
    }

    public function addGame($game): void {
        $this->Games[] = $game;
    }

    public function listGames(): void {
        foreach ($this->Games as $game) {
            echo $game->mostrarInfo() . "\n";
        }
    }

    public function SearchGameByComplexity($complexity): array {
        $filteredGames = [];
        //TODO: échale un vistazo a array_filter() ;) --> hecho en función SearchGameByComplexity2
        foreach ($this->Games as $game) {
            if ($game->Complexity === $complexity) {
                $filteredGames[] = $game->getName();
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

    public function SearchGameByComplexity2($complexity): array {
        return array_filter($this->Games, fn($game) => $game->Complexity === $complexity);
    }
}   