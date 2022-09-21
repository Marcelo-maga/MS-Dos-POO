<?php
    class Computer {
        public $estado;

        public function __construct() {
            $this->estado = false;
        }

        public function ligar() {
            $this->estado = true;
            echo "o PC está ligado";   
        }

        public function desligar() {
            $this->estado = true;
            echo "o PC está desligado";
        }

    }

    $pc = new Computer();

    $pc->ligar();

?>

