<?php
    require_once 'funcoes1.php';
    session_start();

    if(!empty($_POST['valor1']) && !empty($_POST['valor2'])) {
        $numero1 = $_POST['valor1'];
        $numero2 = $_POST['valor2'];
        
        if($_POST['selecao_calculo'] == "circulo") {
            $resultado = "3,14 x " . $valor2 . "=" . calculo_circulo($valor1);
        }
        if($_POST['selecao_calculo'] == "triangulo") {
            $resultado = "(" . $valor1 . "x". $valor2 . ") / 2 =" . calculo_triangulo($valor1,$valor2);
        }
        if($_POST['selecao_calculo'] == "quadrado") {
            $resultado = $valor1 . "x" . $valor1 . "=" . calculo_quadrado($valor1);
        }
        if($_POST['selecao_calculo'] == "retangulo") {
            $resultado = $valor1 . "x" . $valor2 . "=" . calculo_retangulo($valor1,$valor2);
        }
    }
?>