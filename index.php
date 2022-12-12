<?php include ('conexion.php');
   $connect= connection();
    $sql = "SELECT * FROM tabla ";
    $query = mysqli_query($connect, $sql);
?>   
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <div class="container-fluid row">
    <form class="col-4" action="insertar.php" method="POST">
        <h3 class="text-center text-secondary">Registro de Personas</h3>

       <div class="mb-3">
           <label for="nombre" class="form-label">Nombre</label>
           <input type="text" class="form-control" name="nombre">
       </div>
       <div class="mb-3">
           <label for="apellido" class="form-label">Apellido</label>
           <input type="text" class="form-control" name="apellido">
       </div>
       <div class="mb-3">
           <label for="edad" class="form-label">Edad</label>
           <input type="number" class="form-control" name="edad">
        </div>
 
          <button type="submit" class="btn btn-primary" name="btnregistrar" value="OK">Registrar</button>
        
    </form>
    <div class="col-8 p-4">
    <table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Nombre</th>
      <th scope="col">Apellido</th>
      <th scope="col">Edad</th>
      <th scope="col"></th>
      <th scope="col"></th>
    </tr>
  </thead>
  <tbody>
    <?php
    while($row =mysqli_fetch_array($query)): ?>

        <tr>
           <td><?= $row['id']?></td>
           <td><?=$row['nombre'] ?></td>
           <td><?=$row['apellido']?></td>
           <td><?=$row['edad'] ?></td>
           <td> <a href="update.php?id=<?= $row['id']?>" class="btn btn-primary" >editar</a>  
                <a href="delete.php?id=<?= $row['id']?>" class="btn btn-danger">eliminar</a></td>
        </tr>
    
    
    <?php
    endwhile;
    ?>
    
  </tbody>
</table>
    </div>

        
</div>


<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>
*/