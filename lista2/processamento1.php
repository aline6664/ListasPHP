<?php  
    if(!empty($_POST['comprimento']) && !empty($_POST['altura'])) {
        $comprimento = $_POST['comprimento'];
        $altura = $_POST['altura'];
        
        // definir classe 
        class Retangulo {
            private $comprimento;
            private $altura;
        
            // construtor (valor default 1)
            function __construct() {
                $this->comprimento = 1;
                $this->altura = 1;
            }
            // get e set
            function setComprimento($comprimento) {
                $this->comprimento = $comprimento;
            }
            function getComprimento() {
                return $this->comprimento;
            }
            function setAltura($altura) {
                $this->altura = $altura;
            }
            function getAltura() {
                return $this->altura;
            }
            // métodos
            function CalcularPerimetro() {
                $perimetro = ($this->comprimento * 2) + ($this->altura * 2);
                return $perimetro;
            }
            function CalcularArea() {
                $area = $this->comprimento * $this->altura;
                return $area;
            }
            function ehQuadrado() {
                if($this->comprimento == $this->altura) {
                    return true;
                }
            }
        }
        
        // main
        $retangulo = new Retangulo();
        $retangulo->setComprimento(5);
        $retangulo->setAltura(5);
        echo 'Comprimento: ' . $retangulo->getComprimento() . '<br> Altura: ' . $retangulo->getAltura() . '<br>';
        echo 'Perimêtro: ' . $retangulo->CalcularPerimetro() . '<br>';
        echo 'Area: ' . $retangulo->CalcularArea() . '<br>';
        echo 'É quadrado? ' . ($retangulo->ehQuadrado() ? 'Sim' : 'Não'); // if ternário
    }
?>