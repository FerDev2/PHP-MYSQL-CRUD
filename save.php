<?php

include('conexionbd.php');

//Preguntamos si recibimos una post de nombre save//
    if(isset($_POST['save'])){
        $comercio = $_POST['comercio'];
        $asunto = $_POST['asunto'];
        $correo = $_POST['correo'];
        $area = $_POST['area'];
        $crm = $_POST['crm'];
        $pi = $_POST['pi'];
        $creacion = $_POST['creacion'];
        $estado = $_POST['estado'];
        

    // Query para insertar datos nuevos//
        $query = "INSERT INTO casos(comercio, asunto, correo, area, crm, pi, creacion, estado) 
        VALUES('$comercio', '$asunto', '$correo', '$area', '$crm', '$pi', '$creacion', '$estado')";

        $result= mysqli_query($conn, $query);
    //Si el resultado falla envia el mensaje y para la ejecucion
        if(!$result ){
            die("Query Failed");
        }
    // capturaramos datos de la session para mostrar mensajes
        $_SESSION['message'] = 'Register saved succesfully';
        $_SESSION['message_type'] = 'success';
    //Redireccionamos a index.php //
        header("location: index.php");
    
    }


// if (isset($_POST['save'])){
//     echo 'saving';
// }else{
//     echo 'dont saving';
// }

?>