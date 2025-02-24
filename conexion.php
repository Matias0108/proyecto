<?php

$server = "localhost";
$user = "root";
$pass = "";
$db = "proyecto";

$conexion = mysqli_connect ($server, $user, $pass, $db);

if ($conexion->connect_error) {
    die("conexion fallida" . $conexion->connect_error);
}

$sql = "SELECT ID, nombre, DNI FROM personas";
$resultado = $conexion->query($sql);

if ($resultado->num_rows > 0) {
    echo "<table border='1'>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>DNI</th>
            </tr>";
    while($row = $resultado->fetch_assoc()) {
        echo "<tr>
                <td>".$row["ID"]."</td>
                <td>".$row["nombre"]."</td>
                <td>".$row["DNI"]."</td>
              </tr>";
    }
    echo "</table>";
} else {
    echo "0 resultados";
}

?>