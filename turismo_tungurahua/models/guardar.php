<?php

include 'conexion.php';
$Codigo=$_POST["ID_PRE"];
$Color=$_POST["COL_PRE"];
$Tipo=$_POST["TIP_PRE"];
$Precio=$_POST["VAL_PRE"];
$Talla=$_POST["TAL_PRE"];
$Cantidad=$_POST["STOCK_PRE"];
$SqlInsert="INSERT INTO prendas(ID_PRE, COL_PRE, TIP_PRE, VAL_PRE, TAL_PRE, STOCK_PRE) VALUES('$Codigo','$Color','$Tipo','$Precio','$Talla','$Cantidad')";
IF($mysqli->query($SqlInsert)===TRUE)
{
    echo json_encode("Se guardo correctamente");
}
else
{
    echo json_encode("Error no se guardo".$SqlInsert.$mysqli->error);
}
$mysqli->close();

?>