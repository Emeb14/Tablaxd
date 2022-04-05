<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="dice.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet"> 
    <title>Tabla de multiplicar</title>
</head>
<body>
    
</body>
</html>


<?php

echo "<h1>Tablas de multriplicar</h1>";
echo "<br>";
echo "<br>";
$tablaInicial = 1;
$tablaFinal = 12;

for ($tabla=$tablaInicial; $tabla<=$tablaFinal ; $tabla++)
{
    echo "<div class='tabla'>";
        echo "<table border='3'>";
        echo "<tr><th><h4>tabla del </h4>" . $tabla . "</th></tr>";
    for ($i=1; $i <=12; $i++)
    {
        $total = $i * $tabla;
        echo "<tr>";
        echo "<td>" . $tabla. " x ". $i. " = ". $total . "</td>";
    }
    
}
echo "</div>";
echo "<br>";
?>
