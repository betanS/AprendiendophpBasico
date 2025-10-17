<?php
if($_POST['user'] == null){ location:login.php;}
$_SESSION['usuario'] = $_POST['user'];
echo $_SESSION['usuario'];
echo "<prem>";