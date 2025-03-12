<?php
    class Carro {
        private $consumoCombustivel; // km/litro
        private $combustivel;

        // Construtor
        public function __construct($consumo) {
            $this->consumoCombustivel = $consumo;
            $this->combustivel = 0;
        }
        // Get e Set
        public function getCombustivel() { // nivel atual do combustivel
            return $this->combustivel;
        }
        public function setCombustivel($quantidade) { // abastecer tanque
            if($quantidade > 0) {
                $this->combustivel += $quantidade;
            }
            else {
                throw new Exception("Informe uma quantidade válida.");
            }
        }
        // Metodos
        public function andar($distancia){
            $combustivelNecessario = $distancia / $this->consumoCombustivel;
            if($combustivelNecessario <= $this->combustivel) {
                $this->combustivel -= $combustivelNecessario;
            }
            else{
                throw new Exception ("Não foi possível andar, combustível insuficiente.");
            }
        }
    }
?>