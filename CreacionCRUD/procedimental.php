<?php
$servidor = "localhost";
$usuario = "appuser";
$contraseña = "1234";
$base_datos = "gestion_usuarios";
$conexion = mysqli_connect($servidor, $usuario, $contraseña,
$base_datos);
if (!$conexion) {
die("Conexión fallida: " . mysqli_connect_error());
}
echo "Conexión exitosa";

echo "<br>";
//AÑADIR FILA A GESTION_USUARIOS (CREATE)
$crearFila = "INSERT INTO usuarios (id, nombre, email, edad) values (1, 'Alejandro', 'alejandro@gmail.com', '21');";
try {
    if (mysqli_query($conexion, $crearFila)) {
echo "Nuevo registro creado exitosamente";
} else {
echo "Error: " . $crearFila . "<br>" . mysqli_error($conexion);
}
} catch (\Throwable $th) {
    echo "error dup???";
}


echo "<br>";

//Leer FILA A GESTION_USUARIOS (READ)
$leerFila ="SELECT * FROM usuarios";
$resultado = mysqli_query($conexion, $leerFila);

if ($resultado) {
while ($fila = mysqli_fetch_assoc($resultado)) {
echo "ID: " . $fila['id'] . " - Nombre: " . $fila['nombre'] . " - Email: " . $fila['email'] . " - Edad: " . $fila['edad'];
"<br>";
}
} else {
echo "Error en la consulta: " . mysqli_error($conexion);
}





echo "<br>";

//Actualizar FILA A GESTION_USUARIOS (UPDATE)
$actualizarFila ="UPDATE usuarios SET nombre='betanS' WHERE id=1;";
if (mysqli_query($conexion, $actualizarFila)) {
  echo "Actualizacion satisfactoria";
} else {
  echo "Error actualizando: " . mysqli_error($conn);
}

echo "<br>";

$resultado = mysqli_query($conexion, $leerFila);
if ($resultado) {
while ($fila = mysqli_fetch_assoc($resultado)) {
echo "ID: " . $fila['id'] . " - Nombre: " . $fila['nombre'] . " - Email: " . $fila['email'] . " - Edad: " . $fila['edad'];
"<br>";
}
} else {
echo "Error en la consulta: " . mysqli_error($conexion);
}

echo "<br>";

//BORRAR FILA A GESTION_USUARIOS (DELETE)
$borrarFila ="DELETE FROM usuarios where id=1;";
if (mysqli_query($conexion, $borrarFila)) {
  echo "Borrado satisfactorio";
} else {
  echo "Error borrando: " . mysqli_error($conn);
}
?>