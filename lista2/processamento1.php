<?php

    session_start();

    // Definir classe 
    class Retangulo {
        private $comprimento;
        private $altura;

        // Construtor (valor default 1)
        public function __construct() {
            $this->comprimento = 1;
            $this->altura = 1;
        }

        // Get e Set
        public function getComprimento() {
            return $this->comprimento;
        }
        
        public function setComprimento($comprimento) {
            if ($comprimento > 0) {
                $this->comprimento = $comprimento;
            }
            else {
                throw new Exception("O comprimento deve ser maior que zero.");
            }
        }
        public function getAltura() {
            return $this->altura;
        }
        public function setAltura($altura) {
            if ($altura > 0) {
                $this->altura = $altura;
            }
            else {
                throw new Exception("A altura deve ser maior que zero.");
            }
        }

        // Métodos
        public function CalcularPerimetro() {
            return 2* ($this->comprimento + $this->altura);
        }
        public function CalcularArea() {
            return $this->comprimento * $this->altura;
        }
        public function ehQuadrado() {
            return $this->comprimento === $this->altura;
        }
    }

    // Exemplo de uso
    $retangulo = new Retangulo();

    // Recebendo valores digitados pelo usuário
    if(!empty($_POST['comprimento']) && !empty($_POST['altura'])) {
        $retangulo->setComprimento($_POST['comprimento']);
        $retangulo->setAltura($altura = $_POST['altura']);

        $_SESSION['comprimento'] = $retangulo->getComprimento();
        $_SESSION['altura'] = $retangulo->getAltura();
        $_SESSION['area'] = $retangulo->CalcularArea();
        $_SESSION['perimetro'] = $retangulo->CalcularPerimetro();
        $_SESSION['eQuadrado'] = ($retangulo->ehQuadrado() ? "Sim" : "Não");

        header('location: exercicio1.php');
        exit();
    }
?>