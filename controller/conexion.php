<?php
// Datos de la base de datos
$host = "162.241.2.36"; // Dirección IP o nombre de dominio del servidor MySQL
$db= "bucubcom_mano_obra"; // Nombre de la base de datos
$user = "bucubcom_bd"; // Usuario de la base de datos
$pwd = "heRvERbilARy";

// Crear una conexión a la base de datos

$conn = new mysqli($host, $user, $pwd, $db);

// Verificar la conexión

if ($conn->connect_error) {
  die("Connection failed: ". $conn->connect_error);
  
}

// Ejecutar una consulta SQL
$sql = "SELECT * FROM mano_de_obra";

$result = $conn->query($sql);

// Mostrar los resultados

if ($result->num_rows > 0) {
  while($row = $result->fetch_assoc()) {
    echo "Código: ". $row["codigo"]. " Categoria: ". $row["categoria_codigo"]. " - Concepto: ". $row["concepto"]. " - Precio: ". $row["precio"]. "-Unidad: ". $row["unidad"]. "<br>";
  }
} else {
  echo "0 results";
}

$conn->close(); // Cerrar la conexión a la base de datos
?>