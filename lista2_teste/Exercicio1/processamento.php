<?php

    require_once "classeRetangulo.php";
    session_start();
    
    // Exemplo de uso

    // Recebendo valores digitados pelo usuário
    if(!empty($_POST['comprimento']) && !empty($_POST['altura'])) {

        $retangulo = new Retangulo();
        
        $retangulo->setComprimento($_POST['comprimento']);
        $retangulo->setAltura($_POST['altura']);

        $_SESSION['comprimento'] = $retangulo->getComprimento();
        $_SESSION['altura'] = $retangulo->getAltura();
        $_SESSION['area'] = $retangulo->CalcularArea();
        $_SESSION['perimetro'] = $retangulo->CalcularPerimetro();
        $_SESSION['eQuadrado'] = ($retangulo->ehQuadrado() ? "Sim" : "Não");

        header('location: exercicio1.php');
        exit();
    }
?>