<?php


require 'conexion.php';

$sqlparqueadero = "SELECT p.id, p.nombres, p.apellidos, p.torre_apto, p.correo, p.tipo_vehiculo, p.placa  FROM parqueadero AS p";
$parqueadero = $mysqli->query($sqlparqueadero);



?>



<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>R. sorteo parqueadero </title>
        <link href="css/styles.css" rel="stylesheet" />
        <script src="https://kit.fontawesome.com/999197fd07.js" crossorigin="anonymous"></script>
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
        <link href="c../ss/bootstrap.min.css" rel="stylesheet">
        <link href="../css/all.min.css" rel="stylesheet">

    </head>
    <body>
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <!-- Navbar Brand-->
            <a class="navbar-brand ps-3" href="">Gestion Residentes</a>
                
            <!-- Sidebar Toggle-->           
        </nav>
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <div class="sb-sidenav-menu-heading">Interface</div>
                            <a class="nav-link" href="interfaz.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Regresar 
                            </a>
                           
                           
                            <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="layout-static.html">Registro Parqueadero</a>
                                    <a class="nav-link" href="layout-sidenav-light.html">Light Sidenav</a>
                                </nav>

                                
                            </div>
                        </div>
                    </div>
                    <div class="sb-sidenav-footer">
                        <div class="small">Conjunto:</div>
                        La Mesa del Rincon
                    </div>
                </nav>
            </div>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Registrar Vehiculo para Parqueadero</h1>
                        <ol class="breadcrumb mb-4">
                         
                        </ol>
                        <div class="container py-3">

 <div class="row justify-content-end">
 <div class="col-auto">
 <a href="#" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#nuevoModal"><i 
 class="fa-solid fa-circle-plus"></i> Nuevo registro</a>
 
 </div>
 </div>  

    <table class="table table-sm table-striped table-hover mt-4">
            <thead class="table-dark">
                <tr>
                    <th>id</th>
                    <th>Nombres</th>
                    <th>Apellidos</th>
                    <th>Torre/Apto</th>
                    <th>Correo</th>
                    <th>Tipo de Vehiculo</th>
                    <th>Placa</th>
                    <th>Documentos</th>
                    <th>acciones</th>

                </tr>
            </thead>

            <tbody>

            <?php while ($row_parqueadero = $parqueadero->fetch_assoc()) { ?>
                    <tr>
                        <td><?= $row_parqueadero['id']; ?></td>
                        <td><?= $row_parqueadero['nombres']; ?></td>
                        <td><?= $row_parqueadero['apellidos']; ?></td>
                        <td><?= $row_parqueadero['torre_apto']; ?></td>
                        <td><?= $row_parqueadero['correo']; ?></td>
                        <td><?= $row_parqueadero['tipo_vehiculo']; ?></td>
                        <td><?= $row_parqueadero['placa']; ?></td>
                        <td></td>
                        <td>
              
                        <a href="#"  data-bs-toggle="modal" data-bs-target="#editaModal" data-bs-id="<?= $row_parqueadero['id']; ?>"><i class="fa-solid fa-pen-to-square"></i></a>

                        <a href="#"  data-bs-toggle="modal" data-bs-target="#eliminaModal" data-bs-id="<?= $row_parqueadero['id']; ?>"><i class="fa-solid fa-trash"></i></i> </a>
                    
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
     </table>
    
     <?php include 'nuevoModal.php'; ?>
     <?php include 'editaModal.php'; ?>
     <?php include 'eliminaModal.php';?>
     

     <script>
         let editaModal = document.getElementById('editaModal')
         let eliminaModal = document.getElementById('eliminaModal')
 
         editaModal.addEventListener('shown.bs.modal', event => {
            let button = event.relatedTarget
            let id = button.getAttribute('data-bs-id')

            let inputId = editaModal.querySelector('.modal-body #id')
            let inputNombres = editaModal.querySelector('.modal-body #nombres')
            let inputApellidos = editaModal.querySelector('.modal-body #apellidos')
            let inputTorre_apto = editaModal.querySelector('.modal-body #torre_apto')
            let inputCorreo = editaModal.querySelector('.modal-body #correo')
            let inputTipo_vehiculo = editaModal.querySelector('.modal-body #tipo_vehiculo')
            let inputPlaca = editaModal.querySelector('.modal-body #placa')
         //let documentacion = editaModal.querySelector('.modal-body #img_documentacion')



        let url ="getparqueadero.php"
        let formData = new FormData()
        formData.append('id' , id)

        fetch(url, {
                    method: "POST",
                    body: formData 
                }).then(response => response.json())
                .then(data => {

                    inputid.value = data.id
                    inputnombres.value = data.nombres
                    inputapellidos.value = data.apellidos
                    inputtorre_apto.value = data.torre_apto
                    inputcorreo.value = data.correo
                    inputtipo_vehiculo.value = data.tipo_vehiculo
                    inputplaca.value = data.placa
                    //poster.src = '<?= $dir ?>' + data.id + '.jpg'

                }).catch(err => console.log(err))

           })

           eliminaModal.addEventListener('shown.bs.modal', event => {
            let button = event.relatedTarget
            let id = button.getAttribute('data-bs-id')
            eliminaModal.querySelector('.modal-footer #id').value = id
        })
     </script>










                        
                </main>
                
            </div>
        </div>
        
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/bootstrap.bundle.min.js"></script>
        <script src="js/scripts.js"></script>
        
    </body>
</html>