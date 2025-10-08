<?php
    if ($_POST['nombre'] == '' ||  strlen($_POST['nombre']) < 5)
    {
        $mensaje = "
                <div class=\"alert alert-danger\" role=\"alert\">
                    El número de caracteres \"{$_POST['nombre']}\" debe ser superior o igual a 5.
                </div>
            ";
    }else if (is_nan($_POST['edad']) || ($_POST['edad']) == '')
    {
        $mensaje = "
                <div class=\"alert alert-danger\" role=\"alert\">
                    El campo Edad \"{$_POST['edad']}\" debe ser numérico.
                </div>
            ";
    }else if ($_POST['email'] == '' ||  strlen($_POST['email']) < 5)
    {
         $mensaje = "
                <div class=\"alert alert-danger\" role=\"alert\">
                    El número de caracteres \"{$_POST['email']}\" debe ser superior o igual a 5.
                </div>
            ";   
    }else{
    $mensaje = "\"¡Hola, [nombre]! Tienes [edad] años y tu correo electrónico es [correo].\"";
}
echo $mensaje;
?>