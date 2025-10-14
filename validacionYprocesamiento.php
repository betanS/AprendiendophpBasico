<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="validacionYprocesamiento.php" method="post">
        <input type="email" name="email">
        <input type="number" name="numero">
        <input type="text" name="user">
        <input type="submit">
    </form>
</body>
</html>

<?php
$user = $_POST['user'] ?? 'No definido';
$number = $_POST['numero'] ?? 'No definido';
$email = $_POST['email'] ?? 'No definido';

$patron = "/^[\w\-\.]+@([\w\-]+\.)+[a-zA-Z]{2,7}$/";
if (preg_match($patron, $email)) {
echo "Email válido";
} else {
echo "Email inválido";
}

echo $number;
$patron2 = "/[0-9]{9,15}$/";
if(preg_match($patron2, $number, $coincidencia)){
echo "Número válido"; 
echo $coincidencia[0];
} else {
echo "Número inválido";
}

$patron3 = "/^[\w\-\.]{5,20}$/";
if(preg_match($patron3, $user)){
echo "Usuario válido";
} else {
echo "Usuario inválido";
}

if(preg_match($patron, $email) && preg_match($patron2, $number) && preg_match($patron3, $user)){
    $textoMod = preg_replace("[a-z]", "[A-Z]" , $user);
    echo "<br><br>" . "Usuario Confirmado:<br>TextToUpper" . $textoMod . "<br>" . $email . "<br>" . $user . "<br>" . $number;
}
?>


<!-- php -S localhost:25555 validacionYprocesamiento.php -->