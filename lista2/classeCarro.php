<?php
    class Carro {
        private $consumoCombustivel; // km/litro
        private $qtdeCombustivel;

        // Construtor
        public function __constructor() {
            $this->consumoCombustivel = 0;
            $this->qtdeCombustivel = 0;
        }
        // Get e Set
        public getCombustivel() { // nivel atual do combustivel
            return $this->qtdeCombustivel;
        }
        public setCombustivel($qtdeCombustivel) { // abastecer tanque
            if($qtdeCombustivel > 0) {
                $this->qtdeCombustivel = $qtdeCombustivel;
            }
            else {
                throw new Exception("Informe uma quantidade válida.")
            }
        }
        // Metodos
        public function andar($distancia) {
            $this->consumoCombustivel = $distancia; // 1 km - 1 L
            $this->qtdeCombustivel -= $this->consumoCombustivel;
            return $this->consumoCombustivel;
        }
    }

    $carro = new Carro();

    if(!empty($_POST['combustivelAtual']) && !empty($_POST['distancia'])) {
        $carro->setCombustivel(($_POST['combustivel']));
        $carro->andar($_POST['distancia']);

        $_SESSION['combustivelAtual'] = $carro->getCombustivel();
        $_SESSION['distancia'] = $carro->andar()

        header('location: exercicio3.php')
    }
?>