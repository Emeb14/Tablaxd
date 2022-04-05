<?php

echo "Tablas de multriplicar";
echo "<br>";
echo "<br>";
$tablaInicial = 1;
$tablaFinal = 12;

for ($tabla=$tablaInicial; $tabla<=$tablaFinal ; $tabla++)
{
    echo "<div class='tabla'>";
        echo "<table border='3'>";
        echo "<tr><th>tabla del " . $tabla . "</th></tr>";
    for ($i=1; $i <=10; $i++)
    {
        $total = $i * $tabla;
        echo "<tr>";
        echo "<td>" . $tabla. " x ". $i. " = ". $total . "</td>";
    }
    
}
echo "</div>";
echo "<br>";
?>
