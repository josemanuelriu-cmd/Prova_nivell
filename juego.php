<?php
class juego {
    public string $Name;
    public string $Complexity;
    public int $Duration;
    public int $PlayersNumber;
    public bool $Instruccions;

    public function __construct($name, $complexity, $Duration, $PlayersNumber, $Instruccions) {
        $this->Name = $name;
        $this->Complexity = $complexity;
        $this->Duration = $Duration;
        $this->PlayersNumber = $PlayersNumber;
        $this->Instruccions = $Instruccions;
    }

    public function mostrarInfo() {
        return "Juego: " . $this->Name . ", Complejidad: " . $this->Complexity . ", Duración: " . $this->Duration . ", Jugadores: " . $this->PlayersNumber . ", Instrucciones: " . ($this->Instruccions ? "Sí" : "No");
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