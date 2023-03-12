<?php

include("conexionbd.php");

$list_area = array('KEVIN','MONITOR','COMERCIO','MDS');
$list_estado = array('PENDIENTE','PENDIENTE COMERCIO','CERRADO');

//Recibimos el id por el url con el metodo get y buscamos si existe dicho id//
if(isset($_GET["id"])){
    $id = $_GET["id"];
    $query = "SELECT * FROM casos WHERE id=$id";
    $result = mysqli_query($conn, $query);
    if(mysqli_num_rows($result) == 1){
        $row = mysqli_fetch_array($result);
        $comercio = $row['comercio'];
        $asunto = $row['asunto'];
        $correo = $row['correo'];
        $area = $row['area'];
        $crm = $row['crm'];
        $pi = $row['pi'];
        $estado = $row['estado'];
    }

}

// Si se recibi un post con el nombre update se reciben los datos y se actualizan en la tabla//
if(isset($_POST['update'])){
    $id = $_GET["id"];
        $comercio = $_POST['comercio'];
        $asunto = $_POST['asunto'];
        $correo = $_POST['correo'];
        $area = $_POST['area'];
        $crm = $_POST['crm'];
        $pi = $_POST['pi'];
        $estado = $_POST['estado'];
    $query = "UPDATE casos SET 
    comercio='$comercio', 
    asunto='$asunto',
    correo='$correo',
    area='$area',
    crm='$crm',
    pi='$pi',
    estado='$estado' WHERE id=$id";

    mysqli_query($conn, $query);

    //Se envia mensaje de actualizacion correcta
    $_SESSION["message"] = "Task updated Successfully";
    $_SESSION["message_type"] = "warning";
    header("Location: index.php");
}

?>

<?php include("includes/header.php")?>

<div class="container p-4">
    <div class="row">
        <div class="col-md-4 mx-auto">
            <div class="card card-body">

                <form action="edit.php?id=<?php echo $_GET['id']?>" method="POST">

                    <div class="form-group">
                        <input type="text" name="comercio" value="<?php echo $comercio; ?>"
                        class="form-control" placeholder="Update comercio">
                    </div>

                    <div class="form-group">
                        <textarea name="asunto" rows="3" class="form-control" placeholder="Update
                        Description"><?php echo $asunto; ?></textarea>
                    </div>

                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1">@</span>
                        <input type="email" id="correo" name="correo" class="form-control" value="<?php echo $correo; ?>"
                        placeholder="ingrese correo" required autofocus>
                    </div>

                    <select name="area" required class="form-select" aria-label="Default select example">
                        <option disabled="" >Seleciona una opcion</option>
                        <!-- Seleccionamos el datos que ya a sido seleccionado para editarlos-->
                        <option selected value="<?php echo $area; ?>"><?php echo $area; ?></option>
                        
                        <!-- Listamos el array de area y validamos si una de las opciones 
                        ya esta siendo usada para no repetirla-->
                        <?php foreach ($list_area as $options_Area): ?>
                            
                            <?php if($area !== $options_Area): ?>
                                
                                <option value="<?php echo $options_Area ?>"><?php echo $options_Area ?></option>

                            <?php endif; ?>

                        <?php endforeach; ?>
                    </select>

                    <div class="mb-3">
                        <label for="crm" class="form-label">Ticket CRM:</label>
                        <input type="text" id="crm" name="crm" class="form-control" value="<?php echo $crm; ?>"
                        placeholder="Ingrese ticket crm" required pattern="[0-9]+" maxlength="9" >
                    </div>

                    <div class="mb-3">
                        <label for="pi" class="form-label">Ticket pi:</label>
                        <input type="text" id="pi" name="pi" class="form-control" value="<?php echo $pi; ?>"
                        placeholder="Ingrese ticket pi" required pattern="[0-9]+" maxlength="9">
                    </div>

                    <select name="estado" required class="form-select" aria-label="Default select example">
                        <option disabled="">Seleciona una opcion</option>
                        <!-- Seleccionamos el datos que ya a sido seleccionado para editarlos-->
                        <option selected value="<?php echo $estado; ?>"><?php echo $estado; ?></option>

                        <!-- Listamos el array de estado y validamos si una de las opciones 
                        ya esta siendo usada para no repetirla-->
                        <?php foreach ($list_estado as $options_Estado): ?>
                            
                            <?php if($estado !== $options_Estado): ?>
                                
                                <option value="<?php echo $options_Estado ?>"><?php echo $options_Estado ?></option>
                                
                            <?php endif; ?>

                        <?php endforeach; ?>

                    </select>
                    <div>
                        <button class="btn btn-success mt-3" type="submit" name="update">Update</button>

                        <button type="button" class="btn btn-danger mt-3"> <a href="index.php" style="color:white; text-decoration: none">Cancelar</a></button>
                    </div>

                </form>

            </div>

        </div>

    </div>


</div>



<?php include("includes/footer.php")?>