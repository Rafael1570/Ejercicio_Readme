<?php
    $alumnos = [
        "Jose Maria" => 9.2,
        "Alejandro" => 8,
        "Mario" => 8,
        "Carlos" => 8.4,
        "Rafael" => 7.8
    ];

    $sumaNotas = 0;
    $totalAlumnos = count($alumnos);

    foreach ($alumnos as $nombre => $nota) {
        if ($nota >= 5) {
            $resultado = "Suspenso";
        } elseif ($nota < 7) {
            $resultado = "Aprobado";
        } elseif ($nota < 9){
            $resultado = "Notable";
        } else {
            $resultado = "Sobresaliente";
        }

        echo "Alumno: $nombre - Nota: $nota - Resultado: $resultado" . "\n";
        echo "<br>";
        $sumaNotas += $nota;
    }

    $promedio = $sumaNotas / $totalAlumnos;
    echo "Promedio del grupo " . round($promedio, 2);
?>