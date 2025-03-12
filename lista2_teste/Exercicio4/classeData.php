<?php
    class Data {
        private $dia;
        private $mes;
        private $ano;

        // Construtor
        public function __construct($dia = null, $mes = null, $ano = null) {
            if ($dia && $mes && $ano) {
                $this->dia = $dia;
                $this->mes = $mes;
                $this->ano = $ano;
            }
            else {
                $this->dia = 0;
                $this->mes = 0;
                $this->ano = 0;
            }
        }
        // Gets e Sets
        // Dia
        public function getDia() {
            return $this->dia;
        }
        public function setDia($dia) {
            if ($dia >= 1 && $dia <= 31) {
                $this->dia = $dia;
            }
            else {
                throw new Exception("Informe um dia válido.");
            }
        }
        // Mês
        public function getMes() {
            return $this->mes;
        }
        public function setMes($mes) {
            if ($mes >= 1 && $mes <= 12) {
                $this->mes = $mes;
            }
            else {
                throw new Exception("Informe um mês válido.");
            }
        }
        // Ano
        public function getAno() {
            return $this->ano;
        }
        public function setAno($ano) {
            if ($ano > 0) {
                $this->ano = $ano;
            }
            else {
                throw new Exception("Informe um ano válido.");
            }
        }
        // Métodos

        // Método para ajudar a contar dias
        public function contadorDias($mes,$ano) {
            // array de dias pra cada mês
            $diasMes = [31, 28, 31, 30, 31, 30, 31, 31, 30, 31, 30, 31];
                    // [0 , 1 , 2 , 3 , 4 , 5 , 6 , 7 , 8 , 9 , 10, 11] - indices
                    // [1 , 2 , 3 , 4 , 5 , 6 , 7 , 8 , 9 , 10, 11, 12] - mês correspondente

            // se for ano Bissexto
            if ($mes == 2 && $this->ehAnoBissexto()) {
                return 29;
            }

            return $diasMes[$mes - 1]; // subtrai 1 para seguir o indice baseado em 0 da array
            // ex: $mes = 5 (Maio), return $diasMes[4] (31 dias, correspondente ao mês)
        }
        // Incrementar dia
        public function incrementarDia() {
            $this->dia++;

            // checar se a incrementação passa o número de dias ou de meses
            // caso sim, resetar o dia/mês e mudar o mês/ano
            $diasMes = $this->contadorDias($this->mes, $this->ano); // retorna os dias do mês

            if ($this->dia > $diasMes) {
                $this->dia = 1;
                $this->mes++;

                if ($this->mes > 12) {
                    $this->mes = 1;
                    $this->ano++;
                }
            }
        }
        // Decrementar dia
        public function decrementarDia() {
            $this->dia--;

            // checar se a decrementação passa o número de dias ou de meses
            $diasMes = $this->contadorDias($this->mes, $this->ano);

            if ($this->dia < 1) {
                $this->dia = $this->contadorDias($this->mes--, $this->ano); // retorna os dias do mêS anterior

                if ($this->mes < 1) {
                    $this->mes = 12;
                    $this->ano--;
                }
            }
        }
        // Retornar data como string (dd/mm/aaaa)
        public function mostrarData() {
            return sprintf("%02d/%02d/%04d", $this->dia, $this->mes, $this->ano);
        }
        // Verificar se é ano bissexto
        public function ehAnoBissexto() {
            return $this->ano % 4 === 0 && $this->ano % 100 !== 0 || $this->ano % 400 === 0;
        }
        // Subtrair data do objeto de outra data recebida, retornar diferenca de dias
        public function subtrairData($dataRecebida) {
            $dataCorrente = strtotime("{$this->ano}-{$this->mes}-{$this->dia}");
            $dataRecebida = strtotime("{$dataRecebida->ano}-{$dataRecebida->mes}-{$dataRecebida->dia}");
            return abs(round(($dataCorrente - $dataRecebida) / 86400)); // segundos por dia
            // abs() retorna o valor absoluto, caso resultado seja negativo
            // round() arredonda o valor para a casa mais proxima
        }
        // Comparar data do objeto com outra data recebida
        public function compararData($dataRecebida) {
            $dataCorrente = strtotime("{$this->ano}-{$this->mes}-{$this->dia}");
            $dataRecebida = strtotime("{$dataRecebida->ano}-{$dataRecebida->mes}-{$dataRecebida->dia}");
            // 0 - datas iguais
            if ($dataCorrente === $dataRecebida) {
                return 0;
            }
            // 1 - data > data recebida
            else if ($dataCorrente > $dataRecebida) {
                return 1;
            }
             // -1 - data < data recebida
            else if ($dataCorrente < $dataRecebida) {
                return -1;
            }
        }
    }
?>