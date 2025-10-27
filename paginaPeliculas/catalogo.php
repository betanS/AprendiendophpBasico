<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Catalogo Películas</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <form action="" method="post">
        <select name="Genero">
            <option value="Genero" selected>Genero</option>
            <option value="Fantasía">Fantasía</option>
            <option value="Ficción">Ficción</option>
            <option value="Acción">Acción</option>
            <option value="Drama">Drama</option>
            <option value="Romance">Romance</option>
        </select>
        <input type="submit">
    </form>
    
</body>
</html>

<?php
/*
$peliculas = [
    [
        "titulo" => "El Señor de los Anillos: La Comunidad del Anillo",
        "director" => "Peter Jackson",
        "anio" => 2001,
        "genero" => "Fantasía",
        "poster" => "https://es.web.img3.acsta.net/medias/nmedia/18/89/67/45/20061512.jpg"
    ],
    [
        "titulo" => "Inception",
        "director" => "Christopher Nolan",
        "anio" => 2010,
        "genero" => "Ciencia Ficción",
        "poster" => "https://m.media-amazon.com/images/I/912AErFSBHL._AC_UF1000,1000_QL80_.jpg"
    ],
    [
        "titulo" => "Gladiator",
        "director" => "Ridley Scott",
        "anio" => 2000,
        "genero" => "Acción / Drama",
        "poster" => "https://es.web.img3.acsta.net/medias/nmedia/18/70/92/02/20149073.jpg"
    ],
    [
        "titulo" => "Interstellar",
        "director" => "Christopher Nolan",
        "anio" => 2014,
        "genero" => "Ciencia Ficción",
        "poster" => "https://m.media-amazon.com/images/M/MV5BYzdjMDAxZGItMjI2My00ODA1LTlkNzItOWFjMDU5ZDJlYWY3XkEyXkFqcGc@._V1_.jpg"
    ],
    [
        "titulo" => "Titanic",
        "director" => "James Cameron",
        "anio" => 1997,
        "genero" => "Romance / Drama",
        "poster" => "https://pics.filmaffinity.com/Titanic-321994924-large.jpg"
    ],
    [
        "titulo" => "Avatar",
        "director" => "James Cameron",
        "anio" => 2009,
        "genero" => "Ciencia Ficción / Aventura",
        "poster" => "https://pics.filmaffinity.com/Avatar-993297010-large.jpg"
    ]
];
    echo "<prem>";

    //FUNCTION
for ($x=0; $x < count($peliculas); $x++) { 
   if(strpos($peliculas[i]['genero'], $_POST(Genero)) != ""){
        echo "<h2> " . $peliculas[$x]['titulo'] . "</h2> <br>" .
            "<p> " . $peliculas[$x]['director'] . "</p> <br>" . 
            "<p> " . $peliculas[$x]['anio'] . "</p> <br>". 
            "<p> " . $peliculas[$x]['genero'] . "</p> <br>
            <img src= '".$peliculas[$x]['poster']."'></img><br> <br>";
   }
   else{
    return false;
   }
}



//IF FALSE :
for ($i=0; $i < count($peliculas); $i++) { 
    echo "<h2> " . $peliculas[$i]['titulo'] . "</h2> <br>" .
    "<p> " . $peliculas[$i]['director'] . "</p> <br>" . 
    "<p> " . $peliculas[$i]['anio'] . "</p> <br>". 
    "<p> " . $peliculas[$i]['genero'] . "</p> <br>
    <img src= '".$peliculas[$i]['poster']."'></img><br> <br>";
}*/




    class CatalogoCine
    {
        var $contenido;

        function __construct()
        {
            $this->contenido = file_get_contents('https://tastedive.com/api/similar?type=movie&k=1061016-Alejandr-CC24F680&q=el&info=1');
        }



        function mostrar()
        {
            return json_decode($this->contenido, true);
        }

        function __destroy()
        {

        }


    }



    $catalogo_cine = new CatalogoCine();

    echo '<pre>';
    var_dump($catalogo_cine->mostrar());





















?>