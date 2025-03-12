<?php
    require_once 'classeCalculadora.php';

    $teste = new Calculadora();

    $teste->soma(2);
    echo "Resultado (soma): " . $teste->getRes() . "\n" ."<br>";  // 2

    $teste->multiplica(5);
    echo "Resultado (multiplicação): " . $teste->getRes() . "\n" ."<br>";  // 10

    $teste->subtrai(2);
    echo "Resultado (subtração): " . $teste->getRes() . "\n" ."<br>";  // 8

    $teste->divide(2);
    echo "Resultado (divisão): " . $teste->getRes() . "\n" ."<br>";  // 4

    $teste->potencia(2);
    echo "Resultado (potência): " . $teste->getRes() . "\n" ."<br>";  // 16

    $teste->porcentagem(10);
    echo "Resultado (porcentagem): " . $teste->getRes() . "\n" ."<br>";  // 1.6

    $teste->raiz();
    echo "Resultado (raiz quadrada): " . $teste->getRes() . "\n" ."<br>";  // 1.2649110640674

    // Desfazer a última operação (raiz quadrada)
    $teste->desfaz();
    echo "Resultado (desfazer): " . $teste->getRes() . "\n" ."<br>";  // 1.6

    // Zerar o resultado
    $teste->zerar();
    echo "Resultado (zerar): " . $teste->getRes() . "\n" ."<br>";  // 0
?>