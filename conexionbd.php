<?php

session_Start();


/* Conection to BD */
$conn = mysqli_connect(
    'localhost',
    'root',
    'root',
    'tickets'
);

    $servidor="localhost";
    $baseDeDatos="comercios";
    $usuario="root";
    $contrasenia="root";
    
    try{
        $conexion = new PDO("mysql:host=$servidor;dbname=$baseDeDatos",$usuario,$contrasenia);
    }catch(PDOException $ex){
        echo $ex->getMessage();
    }


?>