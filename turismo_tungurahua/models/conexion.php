<?php
    $servername="localhost";
    $username="root";
    $password="";
    $dbname="tiendaropa";
    $conn=mysqli_connect($servername,$username,$password,$dbname);
    $mysqli= new mysqli($servername,$username,$password,$dbname);
    if(!$mysqli){
        die("ERROR en la conexion".mysqli_connect_error());
    }
?>