<?php
    require_once("../Exercicio4/classeData.php");

    class Voo {
        private int $numVoo;
        private Data $data; // usando a classe Data
        private int $qtdVagas;
        private array $numAssentos;

        // Construtor
        public function __construct($numVoo,$data) {
            $this->numVoo = $numVoo;
            $this->data = $data;
            $this->qtdVagas = 100;
            $this->numAssentos = array_fill(1,100,true); // true - livre, false - ocupado
        }
        // Gets
        public function getVagas() {
            return $this->qtdVagas;
        }
        public function getVoo() {
            return $this->numVoo;
        }
        public function getDataVoo() {
            return $this->data->mostrarData(); // formatar data
        }

        // Retornar proximo assento livre
        public function getProximoAssento() {
            for($i = 1; $i < 100; $i++) {
                if ($this->numAssentos[$i] === true) {
                    return $i;
                }
            }
            return -1; // caso todos assentos estejam ocupados
        }
        // Verificar se o assento esta ocupado por parametro
        public function verificarAssento($assento) {
            return $this->numAssentos[$assento];
        }
        // Ocupar assento por parametro, retorna true (sucesso) e false (falha)
        public function ocuparAssento($assento) {
            if (!$this->verificarAssento($assento)) {
                return false; // assento ocupado     
            }
            $this->numAssentos[$assento] = false; // ocupando a vaga
            $this->qtdVagas--; // diminui a quantidade de vagas disponiveis
            return true;
        }
    }
?>