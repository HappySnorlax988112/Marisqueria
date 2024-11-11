<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Productos</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #5daeb4;
        }

        nav {
            background-color: #333;
        }

        nav ul {
            list-style-type: none;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
        }

        nav ul li {
            margin: 0 15px;
        }

        nav ul li a {
            color: white;
            text-decoration: none;
            padding: 15px 20px;
            display: block;
            font-size: 18px;
        }

        nav ul li a:hover {
            background-color: #555;
            border-radius: 5px;
        }

        nav ul li a.active {
            background-color: #4CAF50;
            border-radius: 5px;
        }

        table {
            width: 80%;
            border-collapse: collapse;
            margin-top: 20px;
            background-color: #fff;
            border: 1px solid #ddd;
            margin: 30px auto;
        }

        th, td {
            padding: 12px;
            text-align: center;
            border-bottom: 1px solid #ddd;
        }

        th {
            background-color: #4CAF50;
            color: white;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        tr:hover {
            background-color: #ddd;
        }

        a {
            font-size: 18px;
            color: #4CAF50;
            text-decoration: none;
            margin-top: 20px;
            display: inline-block;
        }

        a:hover {
            color: #45a049;
        }
    </style>
</head>
<body>
    <nav>
        <ul>
            <li><a href="index.html">Inicio</a></li>
            <li><a href="clientes.php">Clientes</a></li>
            <li><a href="pedidos.php">Pedidos</a></li>
            <li><a href="productos.php" class="active">Productos</a></li>
            <li><a href="proveedores.php">Proveedores</a></li>
        </ul>
    </nav>

    <?php
    $con = mysqli_connect("localhost", "root", "", "marisqueria");
    $resultado = mysqli_query($con, "SELECT * FROM productos");

    if ($resultado == FALSE) {
        echo "Fallo";
        die(mysqli_error());
    }

    echo "<center><font face='Arial'>";
    echo "<a href='productos.php'>Actualizar tabla</a>";
    echo "<table border='1'>
        <tr>
            <th>Id_Producto</th>
            <th>Nombre</th>
            <th>Tipo</th>
            <th>Precio</th>
            <th>Stock</th>
        </tr>";

    while ($row = mysqli_fetch_array($resultado)) {
        echo "<tr>";
        echo "<td align=center>" . $row['id_producto'] . "</td>";
        echo "<td>" . $row['nombre'] . "</td>";
        echo "<td>" . $row['tipo'] . "</td>";
        echo "<td>" . $row['precio'] . "</td>";
        echo "<td>" . $row['stock'] . "</td>";
        echo "</tr>";
    }
    ?>
</body>
</html>
