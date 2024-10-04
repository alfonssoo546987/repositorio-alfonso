<?php
session_start(); // Iniciar sesión para mantener el array entre solicitudes

// Inicializar el array en la sesión si no existe
if (!isset($_SESSION['productos'])) {
    $_SESSION['productos'] = []; // Crear un array vacío en la sesión
}

// Verificar si se ha enviado el formulario
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $accion = $_POST['accion']; // Obtener la acción (agregar o finalizar)

    if ($accion == "agrega") {
        // Agregar nuevo producto al array
        if (!empty($_POST['producto'])) {
            $nuevoProducto = htmlspecialchars($_POST['producto']); // Sanitizar la entrada
            $_SESSION['productos'][] = $nuevoProducto; // Agregar al array de la sesión
            echo "<p>Producto '{$nuevoProducto}' agregado.</p>";
        } else {
            echo "<p>No se proporcionó ningún producto para agregar.</p>";
        }
    } elseif ($accion == "finaliza") {
        echo "<h2>Lista de Productos</h2><ul>"; // Encabezado para la lista de productos
        if (empty($_SESSION['productos'])) {
            echo "<li>No hay productos en la lista.</li>"; // Mensaje si no hay productos
        } else {
            foreach ($_SESSION['productos'] as $producto) {
                echo "<li>" . htmlspecialchars($producto) . "</li>"; // Listar cada producto
            }
        }
        echo "</ul>"; // Cerrar la lista desordenada
    }
}
?>