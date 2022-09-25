<?php
    class Computer {
        public $estado, $processador, $clock, $memoria, $armazenamento;

        public function __construct() {
            $this->estado = false;
            $this->processador = 'Intel 8086';
            $this->clock = 5;
            $this->memoria = 256;
            $this->armazenamento = 20;
            $this->totalApps = 0;
        }

        public function switchPowerButton() {
            if(!$this->estado){
                $this->estado = true;
                echo ('o PC está ligado <br>');
            } else if($this->estado) {
                $this->estado = false;
                echo ('O PC está desligado <br>');
                return;
            }
        }

        public function ping($url) {
            if(!$this->estado) {
                return;
            }

            for($i = 1; $i<=5; $i++) {
                echo ("Tentativa $i: Acesso concluido a $url <br>");
            }
        }

        public function mem() {
            if(!$this->estado) {
                return;
            }

            $memoriaUso = $this->memoria/2;

            echo("
                Memoria total = $this->memoria KB<br>
                Memoria em uso = $memoriaUso KB<br>
            ");
        }

        public function specs() {
            if(!$this->estado) {
                return;
            }
            
            echo("
                Processador = $this->processador, com Clock de $this->clock Mhz<br>
                Memoria total = $this->memoria KB<br>
                Armazenamento Total = $this->armazenamento MB<br>
            ");
        }

        public function soma($num1, $num2) {
            if(!$this->estado) {
                return;
            }
            
            $resu = $num1+$num2;
            echo("O resultado da soma é $resu <br>");
        }
    }

    $pc = new Computer();
    $pc->switchPowerButton();
    echo('<br>');

    $pc->ping('www.google.com');
    echo('<br>');
    
    $pc->mem();
    echo('<br>');

    $pc->specs();
    echo('<br>');

    $pc->soma(5, 4);
    echo('<br>');

    $pc->switchPowerButton();

    $pc->ping('www.google.com');
    echo('<br>');
    
?>
