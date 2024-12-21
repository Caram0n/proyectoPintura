<?php
include '../BDD/conexion.php';

$categoria = $_GET['categoria'];

// Prevenir inyecciones de SQL
$categoria = $conn->real_escape_string($categoria); // Escapamos caracteres especiales para evitar inyecciones SQL

// Realizar la consulta a la base de datos
$sql = "SELECT * FROM productos WHERE categoria = '$categoria'";
$result = $conn->query($sql);

// Mostrar los productos si se encuentran en la base de datos
if ($result->num_rows > 0) {
    // Mostrar productos
    while ($row = $result->fetch_assoc()) {
        echo "<div class='producto'>";
        echo "<img src='" . $row['imagen'] . "' alt='" . $row['nombre'] . "'>";
        echo "<p>" . $row['nombre'] . "</p>";
        echo "<p>Precio: $" . $row['precio'] . "</p>";
        echo "</div>";
    }
} else {
    echo "No se encontraron productos en esta categoría.";
}

// Cerrar la conexión
$conn->close();

?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Productos</title>
    <link rel="stylesheet" href="estilos.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css">
    <script type="text/javascript" charset="utf8" src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script type="text/javascript" charset="utf8"
        src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>

</head>

<body>
    <header>
        <h1>Productos de la Categoría: <?php echo htmlspecialchars($categoria); ?></h1>
    </header>

    <div class="productos-container">
        <table id="productos" class="display">
            <thead>
                <tr>
                    <th>Imagen</th>
                    <th>Nombre</th>
                    <th>Precio</th>
                </tr>
            </thead>
            <tbody>
                <?php
                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        echo "<tr>";
                        echo "<td><img src='" . $row['imagen'] . "' alt='" . $row['nombre'] . "' width='100'></td>";
                        echo "<td>" . $row['nombre'] . "</td>";
                        echo "<td>$" . $row['precio'] . "</td>";
                        echo "</tr>";
                    }
                }
                ?>
            </tbody>
        </table>
    </div>

    <footer>
        <p>© 2024 - Todos los derechos reservados</p>
    </footer>


    <script>
        $(document).ready(function () {
            $('#productos').DataTable();
        });
    </script>
</body>

</html>