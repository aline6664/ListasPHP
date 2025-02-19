<?php
    require_once 'funcoesCalculo2.php';
    session_start();
    
    if (!empty($_POST['inputNum1']) && !empty($_POST['inputNum2']))
    {
        $numero1 = $_POST['inputNum1'];
        $numero2 = $_POST['inputNum2'];

        // código da parte de seleção do tipo de cálculo
        if($_POST['selecionarOperacaoArit'] == "adicao")
        {
            $resultado = $numero1 . "+" . $numero2 . "=" . adicao($numero1, $numero2);
        }
        else if($_POST['selecionarOperacaoArit'] == "subtracao")
        {
            $resultado = $numero1 . "-" . $numero2 . "=" . subtracao($numero1, $numero2);
        }
        else if($_POST['selecionarOperacaoArit'] == "divisao")
        {
            $resultado = $numero1 . "/" . $numero2 . "=" . divisao($numero1, $numero2);
        }
        else if($_POST['selecionarOperacaoArit'] == "multiplicacao")
        {
            $resultado = $numero1 . "x" . $numero2 . "=" . multiplicacao($numero1, $numero2);
        }
        else if($_POST['selecionarOperacaoArit'] == "potencia")
        {
            $resultado = $numero1 . "^" . $numero2 . "=" . potencia($numero1, $numero2);
        }
        else if($_POST['selecionarOperacaoArit'] == "porcentagem")
        {
            $resultado = $numero1 . "x" . $numero2 . "=" . porcentagem($numero1, $numero2);
        }
        else if($_POST['selecionarOperacaoArit'] == "raizquadrada")
        {
            $resultado = $numero1 . "x" . $numero2 . "=" . raizquadrada($numero1, $numero2);
        }
        $_SESSION['resultado'] = $resultado;
        header('location: ../exercicio2.php');
        die();
    }
?>