<?php

include("conexionbd.php");

if(isset($_GET['id'])){
    $id = $_GET['id'];
    $query = "DELETE FROM casos WHERE id = $id ";
    $result = mysqli_query($conn, $query);
    if(!$result){
        die("Query failed");
    }

    $_SESSION['message'] = 'Task deleted successfully';
    $_SESSION['message_type'] = 'danger';
    header('Location: index.php');


}




?>