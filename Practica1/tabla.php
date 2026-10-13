<?php

    $numero = 5;

    if ($numero < 0) {
        echo "Error: el número no puede ser negativo.";
    } elseif ($numero == 0) {
        echo "La tabla del 0 siempre es 0";
    } else {
        for ($i = 1; $i <= 10; $i++) {
            echo $numero . " x " . $i . " = " . ($numero * $i) . " ";
            echo "<br>";
        }
    }

?>