<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Calculadora de Áreas</h1>
    <form method="GET" action="processamento.php">
        <label>Digite o primeiro valor: </label>
        <input type="text" name="valor1" placeholder="Valor 1"> <br>
        <label>Digite o segundo valor: </label>
        <input type="text" name="valor2" placeholder="Valor 2 (se necessário)"> <br> <br>
        <select name="selecao_calculo">
            <option value="circulo">a. Calcular a área de um Círculo</option>
            <option value="triangulo">b. Calcular a área de um Triângulo</option>
            <option value="quadrado">c. Calcular a área de um Quadrado</option>
            <option value="retangulo">d. Calcular a área de um Retângulo</option>
        </select>
        <input id="enviar" type="submit" value="Calcular">
    </form>
    <?php
        if(isset($_SESSION['resultado'])) {
            echo $_SESSION['resultado'];
        }
    ?>
</body>
</html>