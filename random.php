<?php
    header("Content-Type: text/html"); // Ajusta el tipo de contenido según sea necesario
    $rango1 = 0;
    $rango2 = 34;
    $num = rand($rango1, $rango2);

    if ($num == $rango1) {
        $resultado = "No hay ni rastro de haber existido tula";
    } elseif ($num == $rango2) {
        $resultado = "Es tan grande que no le cabe en el pantalón";
    } else {
        $resultado = "Le mide: " . $num;
    }

    echo $resultado;
?>
