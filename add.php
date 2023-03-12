<?php include("conexionbd.php");

//Fijar fecha actual con zona horaria en Lima-Peru //
date_default_timezone_set("America/Lima");
$fecha = date("Y-m-d");
?>

<?php include("includes/header.php") ?>

    <div class="container">

        <div class="row justify-content-center">

        <div class="col-md-6">

            <form action="save.php" method="POST">
                
                <div class="mb-3">
                    <label for="comercio" class="form-label">Codigo Comercio:</label>
                    <input type="text" id="comercio" name="comercio" class="form-control"
                    placeholder="ingrese codigo" required maxlength="9" autofocus>
                </div>
                
                <div class="mb-3">
                    <label for="asunto" class="form-label">Asunto:</label>
                    <textarea name="asunto" id="asunto" rows="2" class="form-control"
                    placeholder="ingrese asunto" required></textarea>
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text" id="basic-addon1">@</span>
                    <input type="email" id="correo" name="correo" class="form-control"
                    placeholder="ingrese correo" required autofocus>
                </div>
                <select name="area" required class="form-select" aria-label="Default select example">
                    <option disabled="" selected>Seleciona una opcion</option>
                    <option value="MDS">MDS</option>
                    <option value="KEVIN">KEVIN</option>
                    <option value="MONITOR">MONITOR</option>
                    <option value="COMERCIO">COMERCIO</option>
                </select>
                <div class="mb-3">
                    <label for="crm" class="form-label">Ticket CRM:</label>
                    <input type="text" id="crm" name="crm" class="form-control"
                    placeholder="Ingrese ticket crm" required pattern="[0-9]+" maxlength="9">
                </div>
                <div class="mb-3">
                    <label for="pi" class="form-label">Ticket pi:</label>
                    <input type="text" id="pi" name="pi" class="form-control"
                    placeholder="Ingrese ticket pi" required pattern="[0-9]+" maxlength="9">
                </div>

                <div class="mb-3">
                    <label for="pi" class="form-label">Ingrese Fecha:</label>
                    <input type="date" name="creacion" min="<?= $fecha?>" value="<?= $fecha ?>">
                </div>

                <select name="estado" required class="form-select" aria-label="Default select example">
                    <option disabled="" selected>Seleciona una opcion</option>
                    <option value="pendiente">Pendiente</option>
                    <option value="comercio">Comercio</option>
                    <option value="cerrado">Cerrado</option>
                </select>
            
                <br></br>
                
                <div>
                    
                    <input type="submit" class="btn btn-success btn-block"
                    name="save" value="Save Ticket"></input>

                    <button type="button" class="btn btn-danger"> <a href="index.php" style="color:white; text-decoration: none">Cancelar</a></button>
                </div>
                
            
            </form>
            
                
            </div>
        </div>
    </div>

            

<?php include("includes/footer.php")?>