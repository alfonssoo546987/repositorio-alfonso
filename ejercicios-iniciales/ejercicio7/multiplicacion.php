<?php
$numero = intval($_POST["numero"]);

    echo "<h1>Tabla de Multiplicar del $numero</h1>";
    for ($i = 1; $i <= 10; $i++) {
        $resultado = $numero * $i;
        echo "$numero x $i = $resultado<br>";
    }
?>