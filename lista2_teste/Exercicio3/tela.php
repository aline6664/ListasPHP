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
    <form method="POST" action="processamento3.php">
        <label>Quantidade de consumo de combustível (Em Litros)</label> <br>
        <input type="number" id="consumo" name="consumo" required> <br> <br>
        <label>Distância a percorrer</label> <br>
        <input type="number" id="distancia" name="distancia" required> <br> <br>
        <input type="submit" name="Andar">

    <?php
        if(isset($_SESSION['combustivelInicial']) && isset($_SESSION['distancia']) && isset($_SESSION['combustivelRestante']))
        {
            echo "<h3> Resultados </h3>";
            echo "Quantidade de combustível inicial: " . $_SESSION['combustivelInicial'] . " litros <br>";
            echo "Distância percorrida: " . $_SESSION['distancia'] . "km <br>";
            echo "Quantidade de combustível após andar: " . $_SESSION['combustivelRestante'] . " litros <br>";
        }
    ?>
    </form>
</body>
</html>