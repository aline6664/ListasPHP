<?php
    class Calculadora {
        private $res; // var. inst. que armazana resultado das operações
        private $mem; // resultado da última operação

        // Construtor - inicializa com 0
        public function __construct() {
            $this-> res = 0;
            $this-> mem = 0;
        }

        // Métodos

        // Operações funcionais
        public function zerar() {
            $this-> res = 0; // zera o resultado atual
        }
        public function desfaz() {
            $this-> res = $this-> mem; // remove o resultado atual e volta para última operação
        }
        public function getRes() {
            return $this-> res;
        }

        // Operações Aritmeticas
        public function soma($valor)
        {
            $this-> mem = $this-> res;
            $this-> res += $valor;
        }
        public function subtrai($valor)
        {
            $this-> mem = $this-> res;
            $this-> res -= $valor;
        }
        public function multiplica($valor)
        {
            $this-> mem = $this-> res;
            $this-> res *= $valor;
        }
        public function divide($valor)
        {
            if ($valor != 0) {
                $this-> mem = $this-> res;
                $this-> res /= $valor;
            }
            else {
                throw new Exception("Não é possível dividir por zero.");
            }
        }
        public function potencia($exp) {
            $this-> mem = $this-> res;
            $this-> res = pow($this-> res, $exp);
        }
        public function porcentagem($porc) {
            $this-> mem = $this-> res;
            $this-> res = ($this-> res * $porc) / 100;
        }
        public function raiz() {
            if ($this-> mem >= 0) {
                $this-> mem = $this-> res;
                $this-> res = sqrt($this-> res);
            }
            else {
                throw new Exception("Não é possível realizar a raíz quadrada de um valor negativo.");
            }
        }
    }
?>