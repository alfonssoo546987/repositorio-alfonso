    <?php
        $array = [];

        $array[] = "Elemento 1";
        $array[] = "Elemento 2";

        if ($accion == "agrega") {
            echo "fhgjhg";
        } elseif ($accion == "finaliza") {
            echo "<h2>Lista de Productos</h2>";
            foreach ($array as $elemento) {
                echo $elemento . "<br>";
            }
        }
    ?>
