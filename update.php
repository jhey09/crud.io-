<?php 
    include("conexion.php");
    $connect=connection();

    $id=$_GET['id'];

    $sql= "SELECT * FROM tabla WHERE id='$id'";
    $query=mysqli_query($connect, $sql);

    $row=mysqli_fetch_array($query);
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Editar usuarios</title>
        
    </head>
    <body>
        <div class="users-form">
            <form action="edit.php" method="POST">
            <h3 class="text-center text-secondary">Registro de Personas</h3>

<div class="mb-3">
<input type="hidden"  name="id" class="form-control" value="<?= $row['id'] ?>">
    <label for="nombre" class="form-label">Nombre</label>
    <input type="text" name="nombre" class="form-control" value="<?= $row['nombre'] ?>">
</div>
<div class="mb-3">
    <label for="apellido" class="form-label">Apellido</label>
    <input type="text" name="apellido" class="form-control" value="<?= $row['apellido'] ?>">
</div>
<div class="mb-3"> 
    <label for="edad" class="form-label">Edad</label>
    <input type="number" name="edad" class="form-control" value="<?= $row['edad'] ?>">
 </div>
                
                <input type="submit" value="Actualizar">
            </form>
        </div>
    </body>
</html>