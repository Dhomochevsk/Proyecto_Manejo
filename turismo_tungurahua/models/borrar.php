<?php

include 'conexion.php';
$id = intval($_REQUEST['id']);
$SqlInsert="delete from prendas where ID_PRE ='$id'";
IF($mysqli->query($SqlInsert)===TRUE)
{
    echo json_encode("Se borro correctamente");
}
else
{
    echo json_encode("Error no se borro".$SqlInsert.$mysqli->error);
}

$mysqli->close();


?>