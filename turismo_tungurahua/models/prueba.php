<?php
    include "conexion.php";
    $consulta = "select *from estudiantes";
    echo $consulta;
    echo "</br>";
    $resultados = $conn->query($consulta);
    print_r($resultados);
    echo "</br>";
    while($fila=$resultados->fetch_array())
    {
        print_r($fila);
        echo "</br>";
    }
?>