<?php
// para descargar archivos xls //
header('Content-Type: application/xls');
header('Content-Disposition: attachment; filename= file.xls')

?>


<?php

include("conexionbd.php");

// Si se recibe un post de nombre descarga//
if (isset($_POST['descarga'])){
    $fdesde = $_POST["fdesde"];
    $fhasta = $_POST["fhasta"];
    //Seleccionamos la tabla de cassos y validamos todos los datos con la fecha enviada //
    $query = "SELECT * FROM casos WHERE creacion >= '$fdesde' AND creacion <= '$fhasta'";
    $_SESSION["message"] = "Task updated Successfully";
    $_SESSION["message_type"] = "warning"; 
    $result_task = mysqli_query($conn, $query);
}
?>

<div class="row mt-3">
            <table class="table table-striped table-hover">
                <tr>
                    <thead>
                        <th>ID</th>
                        <th>COMERCIO</th>
                        <th>ASUNTO</th>
                        <th>CORREO</th>
                        <th>AREA</th>
                        <th>CRM</th>
                        <th>PI</th>
                        <th>FECHA CREACION</th>
                        <th>Estado</th>
                    </thead>
                </tr>

                <tr>
                    <tbody>
                    <?php
                            while($row = mysqli_fetch_array($result_task)) {?>

                                    <tr>
                                        <td><?php echo $row['id'] ?></td>
                                        <td><?php echo $row['comercio'] ?></td>
                                        <td><?php echo $row['asunto'] ?></td>
                                        <td><?php echo $row['correo'] ?></td>
                                        <td><?php echo $row['area'] ?></td>
                                        <td><?php echo $row['crm'] ?></td>
                                        <td><?php echo $row['pi'] ?></td>
                                        <td><?php echo $row['creacion'] ?></td>
                                        <td><?php echo $row['estado'] ?></td>

                                        <td>

                                            <a class="btn btn-warning" href="edit.php?id=<?php echo $row['id']?>">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil" viewBox="0 0 16 16">
                                                    <path d="M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z"/>
                                                </svg>
                                            </a>

                                            <a class="btn btn-danger" href="delete.php?id=<?php echo $row['id']?>">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash3" viewBox="0 0 16 16">
                                                    <path d="M6.5 1h3a.5.5 0 0 1 .5.5v1H6v-1a.5.5 0 0 1 .5-.5ZM11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3A1.5 1.5 0 0 0 5 1.5v1H2.506a.58.58 0 0 0-.01 0H1.5a.5.5 0 0 0 0 1h.538l.853 10.66A2 2 0 0 0 4.885 16h6.23a2 2 0 0 0 1.994-1.84l.853-10.66h.538a.5.5 0 0 0 0-1h-.995a.59.59 0 0 0-.01 0H11Zm1.958 1-.846 10.58a1 1 0 0 1-.997.92h-6.23a1 1 0 0 1-.997-.92L3.042 3.5h9.916Zm-7.487 1a.5.5 0 0 1 .528.47l.5 8.5a.5.5 0 0 1-.998.06L5 5.03a.5.5 0 0 1 .47-.53Zm5.058 0a.5.5 0 0 1 .47.53l-.5 8.5a.5.5 0 1 1-.998-.06l.5-8.5a.5.5 0 0 1 .528-.47ZM8 4.5a.5.5 0 0 1 .5.5v8.5a.5.5 0 0 1-1 0V5a.5.5 0 0 1 .5-.5Z"/>
                                                </svg>
                                            </a>

                                        </td>
                                    </tr>

                            <?php } ?>
                            
                    </tbody>
                </tr>
            </table>
        </div>
    </div>

            

<?php include("includes/footer.php")?>