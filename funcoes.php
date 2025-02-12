<?php
function calculo_circulo($valor1) {
    $result = 3.14 * ($valor ** 2);
    return $result;
}
function calculo_triangulo($valor1,$valor2) {
    $result = $valor1 * $valor2 / 2;
    return $result;
}
function calculo_quadrado($valor1) {
    $result = $valor1 ** 2;
    return $result;
}
function calculo_retangulo($valor1,$valor2) {
    $result = $valor1 * $valor2;
    return $result;
}
?>