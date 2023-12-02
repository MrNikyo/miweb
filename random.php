<?php
    $rango1 = 0;
    $rango2 = 34;
    $num = rand($rango1,$rango2);
    if ($num == $rango1){
        $resultado = "No hay ni rastro de haber existido tula";
    }if ($num == $rango2){
        $resultado = "Es tan grande que no le cabe en el pantalon";
    }else{
        $resultado = "Le mide: ".$num;
    }
    echo $resultado
?>
