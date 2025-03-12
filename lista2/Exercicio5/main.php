<?php
    session_start();
    require_once("classeVoo.php");

    // atribuindo o objeto data do exercicio anterior
    if (isset($_SESSION['data'])) {
        $data = $_SESSION['data'];
    }
    else {
    $data = new Data(23, 5, 2013);
}
    $voo = new Voo(123, $data);

    echo "Próximo assento livre: " . $voo->getProximoAssento() . "<br>";
    echo "Verificar status do assento 1: " . ($voo->verificarAssento(1) ? "Livre" : "Ocupado") . "<br>";
    echo "Ocupar assento 1: " . ($voo->ocuparAssento(1) ? "Sucesso" : "Erro: assento já ocupado") . "<br>";
    echo "Vagas disponíveis: " . $voo->getVagas() . "<br>";
    echo "Número do voo: " . $voo->getVoo() . "<br>";
    echo "Data do voo: " . $voo->getDataVoo() . "<br>";

    echo "<br> <br>";

    // Segundo teste - usando mesmo voo
    echo "Próximo assento livre: " . $voo->getProximoAssento() . "<br>";
    echo "Verificar status do assento 14: " . ($voo->verificarAssento(14) ? "Livre" : "Ocupado") . "<br>";
    echo "Ocupar assento 14: " . ($voo->ocuparAssento(14) ? "Sucesso" : "Erro: assento já ocupado") . "<br>";
    echo "Vagas disponíveis: " . $voo->getVagas() . "<br>";
    echo "Número do voo: " . $voo->getVoo() . "<br>";
    echo "Data do voo: " . $voo->getDataVoo() . "<br>";

    echo "<br> <br>";

    // Terceiro teste - tentando pegar assento ja ocupado
    echo "Verificar status do assento 14: " . ($voo->verificarAssento(14) ? "Livre" : "Ocupado") . "<br>";
    echo "Ocupar assento 14: " . ($voo->ocuparAssento(14) ? "Sucesso" : "Erro: assento já ocupado") . "<br>";
?>