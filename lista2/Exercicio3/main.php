<?php
require_once 'classeCarro.php';

// Objeto carro com um consumo de 10 km/L
$carro = new Carro(10);

// Abastece o carro com 25L de combustível
$carro->setCombustivel(50);
echo "Quantidade de combustível abastecido: " . $carro->getCombustivel() . " litros.\n" ."<br>";

// Percorre uma distancia de 100 km
$carro->andar(100);
echo "Quantidade de combustível após viagem: " . $carro->getCombustivel() . " litros.\n" ."<br>";

// Teste de erro (combustível insuficiente)
$carro->andar(500);
?>