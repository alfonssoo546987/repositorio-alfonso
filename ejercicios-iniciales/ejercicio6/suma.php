<?php
$numero = intval($_POST["numero"]);
$suma = 0;

for ($i = 1; $i <= $numero; $i++) {
    $suma += $i;  // Sumar todos los números desde 1 hasta N
}

echo "La suma de todos los números desde 1 hasta $numero es: $suma";
?>