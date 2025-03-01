<?php

    require_once "classeCarro.php";
    session_start();

    if(!empty($_POST['consumo']) && !empty($_POST['distancia'])) {

        $carro = new Carro();

        $carro->setCombustivel(($_POST['consumo']));
        $carro->andar($_POST['distancia']);

        $_SESSION['combustivelInicial'] = $_POST['combustivel'];
        $_SESSION['distancia'] = $_POST['distancia'];
        $_SESSION['combustivelRestante'] = $carro->getCombustivel();

        header('location: exercicio3.php');
        exit();
    }
?>