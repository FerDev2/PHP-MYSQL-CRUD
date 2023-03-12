<?php

include("conexionbd.php");

if (isset($_POST['busqueda'])){
    $comercio = $_POST["resultado"];
    //Seleecionamos la tabla casos e idetificamo los datos que coincidad con el comercio
    $query = "SELECT * FROM casos WHERE comercio LIKE '%$comercio%'";

    $_SESSION["message"] = "Task updated Successfully";
    $_SESSION["message_type"] = "warning"; 

    $result_task = mysqli_query($conn, $query);
}
?>

<?php include("includes/header.php")?>




<div class="container p-4">

        <div class="row ">
            <div class="col-2">
                <a href="add.php">
                    <button type="button" class="btn btn-success">+ add new</button>
                </a>
            </div>
        </div>

    <div class="row">
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
                                    </tr>

                            <?php } ?>
                            
                    </tbody>
                </tr>
            </table>
        </div>

    </div>


</div>



<?php include("includes/footer.php")?>