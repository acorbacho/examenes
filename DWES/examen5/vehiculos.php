<?php
class Vehiculo {
    public $matr;
    public $edad;

    function __construct($matr, $edad) {
        $this->matr = $matr;
        $this->edad = $edad;
    }

    function ver() {
        echo "El vehículo con matrícula $this->matr tiene una antigüedad de $this->edad años";
    }

    function actualizar_matricula($nueva_matr) {
        $this->matr = $nueva_matr;
    }

    function ver_completo() {
        echo "Matrícula: $this->matr, Antigüedad: $this->edad años.";
    }
}
