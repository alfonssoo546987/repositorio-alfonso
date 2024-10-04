<?php

        $numero1 = ($_POST["numero1"]);
        $numero2 = ($_POST["numero2"]);
        $numero3 = ($_POST["numero3"]);
        
        // Determinar el mayor
        $mayor = $numero1; // Asumimos que el primero es el mayor inicialmente

        if ($numero2 > $mayor) {
            $mayor = $numero2; // Actualizamos si el segundo es mayor
        }
        
        if ($numero3 > $mayor) {
            $mayor = $numero3; // Actualizamos si el tercero es mayor
        }
        
        echo 'El mayor de los tres números es: ' . $mayor;
    

?>