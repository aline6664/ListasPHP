<?php
    require_once 'funcoes.php';
    session_start();

    if(!empty($_GET['valor1']) && !empty($_get['valor2'])) {
        $numero1 = $_GET['valor1'];
        $numero2 = $_GET['valor2'];
    }
?>