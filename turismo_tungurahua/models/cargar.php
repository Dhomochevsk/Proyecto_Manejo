<?php
    include 'conexion.php';
    $sqlSelect='select *from prendas';
    $repuesta= $conn->query($sqlSelect);
    $result = array();
    if($repuesta->num_rows>0){
    while($filasprendas=$repuesta->fetch_array())
    {
        array_push($result,$filasprendas);
    }
    }
    else
    {
        $result ="no hay prendas";
    }
    echo json_encode($result);
?>