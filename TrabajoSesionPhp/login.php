<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <form action="" method="post">
        <input type="text" name="user">
        <input type="submit" onclick = 'location:bienvenida.php'>
    </form>
</body>
</html>

<?php
session_start();
$_SESSION['usuario'] = $_POST['user'];

?>