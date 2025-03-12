<?php
    session_start();
    require_once("classeData.php");

    $data1 = new Data(23, 5, 2013);
    $outraData = new Data(21, 7, 2020);

    echo "Data: " . $data1->mostrarData() . "<br>";
    // Incrementar dia
    $data1->incrementarDia();
    echo "Data incrementada por 1 dia: " . $data1->mostrarData() . "<br>";
    // Decrementar dia
    $data1->decrementarDia();
    echo "Data decrementada por 1 dia: " . $data1->mostrarData() . "<br>";
    // Verificar ano bissexto
    echo "É ano bissexto? " . ($data1->ehAnoBissexto() ? "Sim" : "Não") . "<br>";
    // Subtrair datas
    echo "Diferença de dias entre " . $outraData->mostrarData() . " e " . $data1->mostrarData() . " : " . $data1->subtrairData($outraData) . " dias <br>";
    // Comparar datas
    $resultadoComp = $data1->compararData($outraData);
    echo "Comparação entre " . $outraData->mostrarData() . " e " . $data1->mostrarData() . " : " . $resultadoComp . " ";
    if ($resultadoComp === 0) {
        echo "(datas iguais)";
    }
    else if ($resultadoComp === 1) {
        echo "(data corrente maior)";
    }
    else if ($resultadoComp === -1) {
        echo "(data corrente menor)";
    }

    echo "<br> <br>";

    // Segundo teste
    $data2 = new Data(31, 12, 2024);

    echo "Data: " . $data2->mostrarData() . "<br>";
    // Incrementar dia
    $data2->incrementarDia();
    echo "Data incrementada por 1 dia: " . $data2->mostrarData() . "<br>";
    // Decrementar dia
    $data2->decrementarDia();
    echo "Data decrementada por 1 dia: " . $data2->mostrarData() . "<br>";
    // Verificar ano bissexto
    echo "É ano bissexto? " . ($data2->ehAnoBissexto() ? "Sim" : "Não") . "<br>";
    // Subtrair datas
    echo "Diferença de dias entre " . $outraData->mostrarData() . " e " . $data2->mostrarData() . " : " . $data2->subtrairData($outraData) . " dias <br>";
    // Comparar datas
    $resultadoComp = $data2->compararData($outraData);
    echo "Comparação entre " . $outraData->mostrarData() . " e " . $data2->mostrarData() . " : " . $resultadoComp . " ";
    if ($resultadoComp === 0) {
        echo "(datas iguais)";
    }
    else if ($resultadoComp === 1) {
        echo "(data corrente maior)";
    }
    else if ($resultadoComp === -1) {
        echo "(data corrente menor)";
    }
    $_SESSION['data'] = $data1;
?>