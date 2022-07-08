<?php

include 'conexion.php';
$id = intval($_REQUEST['id']);
$Color=$_REQUEST["COL_PRE"];
$Tipo=$_REQUEST["TIP_PRE"];
$Precio=$_REQUEST["VAL_PRE"];
$Talla=$_REQUEST["TAL_PRE"];
$Cantidad=$_REQUEST["STOCK_PRE"];
$SqlUpdate="update prendas set COL_PRE='$Color',TIP_PRE='$Tipo',VAL_PRE='$Precio',TAL_PRE='$Talla', STOCK_PRE='$Cantidad' where ID_PRE='$id'";

IF($mysqli->query($SqlUpdate)===TRUE)
{
    echo json_encode("Se guardo correctamente");
}
else
{
    echo json_encode("Error no se guardo".$SqlUpdate.$mysqli->error);
}
$mysqli->close();

?>