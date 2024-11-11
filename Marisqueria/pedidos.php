<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pedidos</title>
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
            <li><a href="pedidos.php" class="active">Pedidos</a></li>
            <li><a href="productos.php">Productos</a></li>
            <li><a href="proveedores.php">Proveedores</a></li>
        </ul>
    </nav>

    <?php
    $con = mysqli_connect("localhost", "root", "", "marisqueria");
    $resultado = mysqli_query($con, "SELECT * FROM pedidos");

    if ($resultado == FALSE) {
        echo "Fallo";
        die(mysqli_error());
    }

    echo "<center><font face='Arial'>";
    echo "<a href='pedidos.php'>Actualizar tabla</a>";
    echo "<table border='1'>
        <tr>
            <th>Id_pedido</th>
            <th>Id_cliente</th>
            <th>Id_producto</th>
            <th>Cantidad</th>
            <th>Fecha</th>
        </tr>";

    while ($row = mysqli_fetch_array($resultado)) {
        echo "<tr>";
        echo "<td align=center>" .$row['id_pedido'] . "</td>";
        echo "<td>" .$row['id_cliente'] . "</td>";
        echo "<td>" .$row['id_producto'] . "</td>";
        echo "<td>" .$row['cantidad'] . "</td>";
        echo "<td align=center>" .$row['fecha'] . "</td>";
        echo "</tr>";
    }
    ?>
</body>
</html>
