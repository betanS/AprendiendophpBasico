<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Idioma</title>
</head>
<body>
    <form action="" method="post">
        <p>Idioma</p>
        <select name="select">
            <option value="español">Español</option>
            <option value="inglés" selected>Inglés</option>
            <option value="francés">Francés</option>
        </select>
        <input type="submit" onclick = languageSelected();>
    </form>
</body>
</html>

<?php
function languageSelected() {
    setcookie("idioma", $_POST['select'], time() + 3600); 
}
?>