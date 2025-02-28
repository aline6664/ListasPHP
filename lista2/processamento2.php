<?php
    require_once 'funcoesCalculo2.php';
    session_start();
    
    if (!empty($_POST['inputValor'])) {

        $valor = $_POST['inputValor'];
        $calc = new Calculadora();

        // Armazenando os valores atuais na SESSION
        $_SESSION['inputValor'] = $valor;
        $_SESSION['selecionarOperacaoArit'] = $_POST['selecionarOperacaoArit'];

        // Seleção do tipo de cálculo
        if($_POST['selecionarOperacaoArit'] == "adicao")
        {
            $calc->soma($valor);
            $resultado = "Resultado da soma: " . $calc->getRes() ."<br>";
        }
        else if($_POST['selecionarOperacaoArit'] == "subtracao")
        {
            $calc->subtrai($valor);
            $resultado = "Resultado da subtração: " . $calc->getRes() ."<br>";
        }
        else if($_POST['selecionarOperacaoArit'] == "divisao")
        {
            $calc->divide($valor);
            $resultado = "Resultado da divisão: " .  $calc->getRes() ."<br>";
        }
        else if($_POST['selecionarOperacaoArit'] == "multiplicacao")
        {
            $calc->multiplica($valor);
            $resultado = "Resultado da multiplicação: " . $calc->getRes() ."<br>";
        }
        else if($_POST['selecionarOperacaoArit'] == "potencia")
        {
            $calc->potencia($valor);
            $resultado = "Resultado da potência: " . $calc->getRes() ."<br>";
        }
        else if($_POST['selecionarOperacaoArit'] == "porcentagem")
        {
            $calc->porcentagem($valor);
            $resultado = "Resultado da porcentagem: " . $calc->getRes() ."<br>";
        }
        else if($_POST['selecionarOperacaoArit'] == "raizquadrada")
        {
            $calc->raiz();
            $resultado =  "Resultado da raíz quadrada: " . $calc->getRes() ."<br>";
        }
        
        $_SESSION['resultado'] = $resultado;
        $_SESSION['res'] = $calc->getRes(); // resultado atual
        $_SESSION['mem'] = $calc->getRes(); // ultimo resultado armazenado
        $_SESSION['inputValor'] = '';  // limpar o valor do input
        $_SESSION['selecionarOperacaoArit'] = '';  // limpar a selecao

        header('location: exercicio2.php');
        exit();
    }
    // Zerar
    if (isset($_POST['zerar'])) {
        $_SESSION['resultado'] = "0";
        $_SESSION['res'] = 0;
        $_SESSION['mem'] = 0;
        header('location: exercicio2.php');
        exit();
    }
    // Desfazer
    if (isset($_POST['desfazer'])) {
        if (isset($_SESSION['mem'])) {
            $_SESSION['resultado'] = "Desfez a última operação, resultado: " . $_SESSION['mem'];
            $_SESSION['res'] = $_SESSION['mem'];
        }
        header('location: exercicio2.php');
        exit();
    }
    // Retornar resultado
    if (isset($_POST['retornar'])) {
        if (isset($_SESSION['res'])) {
            $_SESSION['resultado'] = "Último resultado: " . $_SESSION['res'];
        }
        header('location: exercicio2.php');
        exit();
    }
?>