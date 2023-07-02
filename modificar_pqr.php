<?php
include "conexion.php";
$id=$_GET["id"];
$sql=$mysqli->query("select * from gestionpqr where id=$id");



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modificar PQR</title>
    <link href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css" rel="stylesheet" />
        <link href="css/styles.css" rel="stylesheet" />
</head>
<body>

 <form class="col-4 p-3 m-auto" method="POST">
  <div class="card mb-5">
    <h5 class="text-center alert-secondary">Actualizar PQR</h5>

    </div>
    
 <?php
 
 

 while($datos = $sql->fetch_object()) {?>

 <input type="hidden"name="id" value="<?= $_GET["id"] ?>">
 <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Nombres</label>
    <input type="text" class="form-control" name="nombres"value=<?= $datos->nombres ?>>
    
  </div>
 
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Apellidos</label>
    <input type="text" class="form-control" name="apellidos"value=<?= $datos->apellidos ?>>
    
  </div>

  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Torre_Apto </label>
    <input type="text" class="form-control" name="torre_apto"value=<?= $datos->torre_apto ?>>
    
  </div>

  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Correo</label>
    <input type="email" class="form-control" name="correo"value=<?= $datos->correo ?>>
    
  </div>

  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Telefono</label>
    <input type="text" class="form-control" name="telefono"value=<?= $datos->telefono ?>>
  
    <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Comentario</label>
    <input type="text" class="form-control" name="comentario"value=<?= $datos->comentario ?>>
  <div class="mb-3 form-check"><br>

  <?php 
 include "modificar__pqr.php";?>

  </div>
<?  ?>
  


<?php }
 
?> 
    
  
  <button type="submit" class="btn btn-primary"name="btnregistrar" value="ok" >Actualizar PQR</button>


 <a href=""><i class="fa-solid fa-pen-to-square"></i></a>
 <a href=""><i class="fa-solid fa-trash"></i></a>

 </td>
    </tr>
  <?php 
  ?>

    <tr>
  </tbody>
 </table>
 </table>
                                
 </div>


    
</body>
</html>