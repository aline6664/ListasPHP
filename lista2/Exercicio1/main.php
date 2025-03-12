<?php
    require_once("classeRetangulo.php");

    try {
        $retangulo = new Retangulo();

        // Exibindo valores iniciais
        echo "Valores iniciais:\n";
        echo "Comprimento: " . $retangulo->getComprimento() . "<br>";
        echo "Altura: " . $retangulo->getAltura() . "<br>";
        echo "Área: " . $retangulo->calcularArea() . "<br>";
        echo "Perímetro: " . $retangulo->calcularPerimetro() . "<br>";
        echo "É quadrado? " . ($retangulo->ehQuadrado() ? "Sim" : "Não") . "<br><br>";

        // Modificando os atributos
        $retangulo->setComprimento(5);
        $retangulo->setAltura(5);

        // Exibindo valores após modificação
        echo "Após modificação:<br>";
        echo "Comprimento: " . $retangulo->getComprimento() . "<br>";
        echo "Altura: " . $retangulo->getAltura() . "<br>";
        echo "Área: " . $retangulo->calcularArea() . "<br>";
        echo "Perímetro: " . $retangulo->calcularPerimetro() . "<br>";
        echo "É quadrado? " . ($retangulo->ehQuadrado() ? "Sim" : "Não") . "<br>";

    } catch (Exception $e) {
        echo "Erro: " . $e->getMessage();
    }
?>