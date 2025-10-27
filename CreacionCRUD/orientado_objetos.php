<?php
$dsn = 'mysql:host=localhost;dbname=gestion_usuarios';
$usuario = "appuser";
$contraseña = "1234";

try {
$conexion = new PDO($dsn, $usuario, $contraseña);
$conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
echo "Conexión exitosa";
} catch (PDOException $e) {
echo "Error en la conexión: " . $e->getMessage();
}



echo "<br>";
//AÑADIR FILA A GESTION_USUARIOS (CREATE)
$insertarFila = 'INSERT INTO usuarios (id, nombre, email, edad) VALUES (:id,:nombre,:email,:edad)';
try {
$stmt = $conexion->prepare($insertarFila);
$datos = [
'id' => 1,
'nombre' => 'Alex',
'email' => 'alex@example.com',
'edad'=> 22

];
if ($stmt->execute($datos)) {
echo "Nuevo registro creado exitosamente";
} else {
echo "Error en la inserción";
}
} catch (\Throwable $th) {
    echo "error duplicado?";
}


echo "<br>";
//Leer FILA A GESTION_USUARIOS (READ)
$leerFila = 'SELECT * FROM usuarios';
foreach ($conexion->query($leerFila) as $fila) {
echo "ID: " . $fila['id'] . " - Nombre: " . $fila['nombre'] . " - Email: " . $fila['email'] . " - Edad: " . $fila['edad'];
}

echo "<br>";
//Actualizar FILA A GESTION_USUARIOS (UPDATE)
$actualizarFila = "UPDATE usuarios SET nombre='betanS' WHERE id=1;";

if ($conexion->query($actualizarFila) == TRUE) {
  echo "Actualizado satisfactoriamente";
} else {
  echo "Error actualizando: " . $conexion->error;
}

echo "<br>";

foreach ($conexion->query($leerFila) as $fila) {
echo "ID: " . $fila['id'] . " - Nombre: " . $fila['nombre'] . " - Email: " . $fila['email'] . " - Edad: " . $fila['edad'];
}



echo "<br>";
//BORRAR FILA A GESTION_USUARIOS (DELETE)
$borrarFila = "DELETE FROM usuarios WHERE id=1;";

if ($conexion->query($borrarFila) == TRUE) {
  echo "Borrado satisfactorio";
} else {
  echo "Error borrando: " . $conexion->error;
}
?>