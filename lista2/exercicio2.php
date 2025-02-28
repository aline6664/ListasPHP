<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Lista 2 - Exercício 2</title>
</head>
<body>
    <form method="POST" action="processamento2.php">
        <label>Primeiro número:</label>
        <input type="number" name="inputValor" placeholder="Digite o valor" value="
        <?php
            echo isset($_POST['inputValor']) ? $_POST['inputValor'] : (isset($_SESSION['inputValor']) ? $_SESSION['inputValor'] : '');
        ?>"> <br> <br>
        <select name="selecionarOperacaoArit">
            <option value="adicao">Adição</option>
            <option value="subtracao">Subtração</option>
            <option value="divisao">Divisão</option>
            <option value="multiplicacao">Multiplicação</option>
            <option value="potencia">Potência</option>
            <option value="porcentagem">Porcentagem</option>
            <option value="raizquadrada">Raiz Quadrada</option>
        </select>

        <input type="submit" id="enviar" value="Calcular"> <br> <br>

        <!--Outros botões-->
        <input type="submit" id="zerar" name="zerar" value="Zerar resultado">
        <input type="submit" id="desfazer" name="desfazer" value="Desfazer última operação">
        <input type="submit" id="retornar" name="retornar" value="Retornar resultado">
    </form>
    <h1>
        <?php
            if(isset($_SESSION['resultado']))
            {
                echo $_SESSION['resultado'];
            }
        ?>
    </h1>
</body>
</html>