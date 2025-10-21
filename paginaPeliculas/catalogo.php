<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Catalogo Películas</title>
</head>
<body>
    <h2></h2>
    <img src="" alt="">
</body>
</html>

<?php
$peliculas = [
    [
        "titulo" => "El Señor de los Anillos: La Comunidad del Anillo",
        "director" => "Peter Jackson",
        "anio" => 2001,
        "genero" => "Fantasía",
        "poster" => "imagenes/lotr1.jpg"
    ],
    [
        "titulo" => "Inception",
        "director" => "Christopher Nolan",
        "anio" => 2010,
        "genero" => "Ciencia Ficción",
        "poster" => "imagenes/inception.jpg"
    ],
    [
        "titulo" => "Gladiator",
        "director" => "Ridley Scott",
        "anio" => 2000,
        "genero" => "Acción / Drama",
        "poster" => "imagenes/gladiator.jpg"
    ],
    [
        "titulo" => "Interstellar",
        "director" => "Christopher Nolan",
        "anio" => 2014,
        "genero" => "Ciencia Ficción",
        "poster" => "imagenes/interstellar.jpg"
    ],
    [
        "titulo" => "Titanic",
        "director" => "James Cameron",
        "anio" => 1997,
        "genero" => "Romance / Drama",
        "poster" => "imagenes/titanic.jpg"
    ],
    [
        "titulo" => "Avatar",
        "director" => "James Cameron",
        "anio" => 2009,
        "genero" => "Ciencia Ficción / Aventura",
        "poster" => "imagenes/avatar.jpg"
    ]
];

for ($i=0; $i <= strlen($peliculas()); $i++) { 
    echo $peliculas[i];
}
?>