<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

        $distancia = $_POST["distancia"];
        $velocidad = $_POST["velocidad"];
        
        // Calcular el tiempo
            $tiempo = $distancia / $velocidad;
            echo 'El tiempo que tomará el viaje es de ' . round($tiempo, 2) . ' horas.';
        } 
?>