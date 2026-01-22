<?php
class Juego {
    public string $Name;
    public string $Complexity;
    public int $Duration;
    public int $PlayersNumber;
    public bool $Instruccions;

    public function __construct(string $Name, string $Complexity, int $Duration, int $PlayersNumber, bool $Instruccions) {
        $this->Name = $Name;
        $this->Complexity = $Complexity;
        $this->Duration = $Duration;
        $this->PlayersNumber = $PlayersNumber;
        $this->Instruccions = $Instruccions;
    }

    public function mostrarInfo() {
        if ($this->Name == "Catan") {
            return "Quema el Catan ya!!";
        }
        else {
            return "Juego: " . $this->Name . ", Complejidad: " . $this->Complexity . ", Duración: " . $this->Duration . ", Jugadores: " . $this->PlayersNumber . ", Instrucciones: " . ($this->Instruccions ? "Sí" : "No");
        }
    }

    public function hasInstructions(): bool {
        return $this->Instruccions;
    }

    public function getName(): string {
        return $this->Name;
    }
    public function getComplexity(): string {
        return $this->Complexity;
    }

}


?>