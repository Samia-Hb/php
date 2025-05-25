<?php
class Guerrier {
    public $id, $nom, $degats;

    public function __construct($nom, $degats = 0) {
        $this->nom = $nom;
        $this->degats = $degats;
    }

    public function frapper($autre) {
        $autre->recevoirDegats();
    }

    public function recevoirDegats() {
        $this->degats += 5;
    }
}
?>
