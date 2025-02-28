<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Lista 2 - Exercício 3</title>
</head>
<body>
    <h1>Simulação de um carro</h1>
    <form>
        <label>Quantidade do Combustível (Em Litros)</label> <br>
        <input type="number" id="combustivelAtual" required> <br> <br>
        <label>Distância a percorrer</label> <br>
        <input type="number" id="distancia" required> <br> <br>
        <input type="submit" name="Enviar">
    </form>

    <?php
        if(isset($_SESSION['combustivel'])) && (isset($_SESSION['distancia'])){
            echo "Quantidade do consumo de combustível: ";
            echo "Quantidade de combustível no tanque: ";
            echo "Distância percorrida: ";
        }
    ?>
</body>
</html>