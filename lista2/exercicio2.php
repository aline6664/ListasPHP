<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista 2 - Exercício 2</title>
</head>
<body>
    <form method="POST" action="processamento2.php">
        <!--O método GET mostra os inputs na URL, diferente do método POST-->
        <label>Primeiro número:</label>
        <input type="text" name="inputNum1" placeholder="Digite o 1º número"><br><br>
        <label>Segundo número:</label>
        <input type="text" name="inputNum2" placeholder="Digite o 2º número"><br><br>
        <select name="selecionarOperacaoArit">
            <option value="adicao">Adição</option>
            <option value="subtracao">Subtração</option>
            <option value="divisao">Divisão</option>
            <option value="multiplicacao">Multiplicação</option>
            <option value="potencia">Potência</option>
            <option value="porcentagem">Porcentagem</option>
            <option value="raizquadrada">Raiz Quadrada</option>
        </select>
        <input id="enviar" type="submit" value="Calcular">
        <br> <br>
        <input id="zerar" type="button" value="Zerar resultado">
        <input id="desfazer" type="button" value="Desfazer última operação">
        <input id="retornar" type="button" value="Retornar resultado">
    </form>
    <!--<select name="selecionarOperacaoFunc">
            <option value="zerar">Zerar resultado</option>
            <option value="desfazer">Desfazer última operação</option>
            <option value="retornar">Retornar resultado</option>
    </select>-->
    <h1>
        <?php
            if(isset($_SESSION['resultado']))
            {
                echo $_SESSION['resultado'];
            }
        ?>
</body>
</html>