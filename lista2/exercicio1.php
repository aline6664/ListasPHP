<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Lista 2 - Exercício 1</title>
</head>
<body>
    <h1>Calcular Retângulo</h1>
    <form method="POST" action="processamento1.php">
        <label>Comprimento: </label>
        <input type="number" name="comprimento" placeholder="Valor do Comprimento" required> <br> <br>
        <label>Altura: </label>
        <input type="number" name="altura" placeholder="Valor da Altura" required> <br> <br>
        <input id="enviar" type="submit" value="Calcular"> <br> <br>

    <?php
            if(isset($_SESSION['comprimento']) && isset($_SESSION['altura']) && isset($_SESSION['area']) && isset($_SESSION['perimetro']) && isset($_SESSION['eQuadrado']))
            {
                echo "<h3> Resultados </h3>";
                echo "Comprimento: " . $_SESSION['comprimento'] . "<br>";
                echo "Altura: " . $_SESSION['altura'] . "<br>";
                echo "Área: " . $_SESSION['area'] . "<br>";
                echo "Perímetro: " . $_SESSION['perimetro'] . "<br>";
                echo "É quadrado? " . $_SESSION['eQuadrado'] . "<br>";
            }
    ?>
    </form>
</body>
</html>