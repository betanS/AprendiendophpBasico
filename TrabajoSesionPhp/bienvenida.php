<?php
if($_SESSION['usuario'] == null){ location:login.php;}
if (isset($_COOKIE['idioma'])) {
        echo "Idioma: " . $_COOKIE['idioma'];
    }   
echo $_SESSION['usuario'];
echo "<prem><button type='button' onlcick='location:configuracion_idioma.php'>Cambiar idioma</button><button type='button' onlcick='$_SESSION['usuario'] = ''; location:login.php'>Logout</button>";
