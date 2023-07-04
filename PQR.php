
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Gestion PQR</title>
        <link href="css/styles.css" rel="stylesheet" />
        <script src="https://kit.fontawesome.com/999197fd07.js" crossorigin="anonymous"></script>
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    </head>
    <body>
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <!-- Navbar Brand-->
            <a class="navbar-brand ps-3" href="index.html">Gestion PQR</a>
                
            <!-- Sidebar Toggle-->
            <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
            <!-- Navbar Search-->
            <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
                <div class="input-group">
                    <input class="form-control" type="text" placeholder="Search for..." aria-label="Search for..." aria-describedby="btnNavbarSearch" />
                    <button class="btn btn-primary" id="btnNavbarSearch" type="button"><i class="fas fa-search"></i></button>
                </div>
            </form>
            <!-- Navbar-->
            <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="#!">Settings</a></li>
                        <li><a class="dropdown-item" href="#!">Activity Log</a></li>
                        <li><hr class="dropdown-divider" /></li>
                        <li><a class="dropdown-item" href="#!">Logout</a></li>
                    </ul>
                </li>
            </ul>
        </nav>
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <div class="sb-sidenav-menu-heading">Core</div>
                            <a class="nav-link" href="interfaz.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Regresar 
                            </a>
                            <div class="sb-sidenav-menu-heading">Interface</div>
                           
                            <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="layout-static.html">Crear un PQR</a>
                                    <a class="nav-link" href="layout-sidenav-light.html">Light Sidenav</a>
                                </nav>

                                
                            </div>
                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapsePages" aria-expanded="false" aria-controls="collapsePages">
                                <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                                Mis PQR
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                             <div class="collapse" id="collapsePages" aria-labelledby="headingTwo" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">
                            
                                    </a>
                                    <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#pagesCollapseError" aria-expanded="false" aria-controls="pagesCollapseError">
                                        Buzon PQR
                                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                                     </a>
                                                                                                             
                                     <div class="collapse" id="pagesCollapseError" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordionPages">
                                        <nav class="sb-sidenav-menu-nested nav">
                                            <a class="nav-link" href="401.php">Cerradas</a>
                                            <a class="nav-link" href="500.php">Pendientes</a>
                                            
                                        </nav>
                                    </div>
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
                        <h1 class="mt-4">Crear PQR</h1>
                        <ol class="breadcrumb mb-4">
                            
                           
                        </ol>
                        <div class="card mb-4">
                            <div class="card-body">
                                <p class="mb-0">
                                Señor Residente través del siguiente formulario se puede hacer llegar de manera respetuosa un reconocimiento, sugerencia, petición, solicitud de información, reclamo o queja, dependiendo de su necesidad y respecto a cualquier trámite o servicio. <br>
                                <br>

                               Tenga presente que para garantizar el correcto trámite de su solicitud, el seguimiento de la misma y la entrega de la respuesta deberá usar exclusivamente este formato, en donde será de vital importancia consignar toda la información y sus datos de contacto actualizados.
                            </div>

                            <body>
                                <br>

                            <div class="container-fluid row">
                                <form class="formulario" method="POST">
                                   
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Nombres</label>
    <input type="text" class="form-control" name="nombres">
    
  </div>

  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Apellidos</label>
    <input type="text" class="form-control" name="apellidos">
    
  </div>

  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Torre_Apto </label>
    <input type="text" class="form-control" name="torre_apto">
    
  </div>

  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Correo</label>
    <input type="email" class="form-control" name="correo">
    
  </div>

  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Telefono</label>
    <input type="text" class="form-control" name="telefono">
  
    <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Comentario</label>
    <input type="text" class="form-control" name="comentario">
  <div class="mb-3 form-check">

    
  </div>
  <button type="submit" class="btn btn-primary"name="btnregistrar" value="ok" >Registrar</button>


  <?php

 include "conexion.php";
 include "registro_pqr.php";
 include "Eliminar_pqr.php"

  ?>




 </form>

 <div class="col-9 p-5 "></div>

 <table class="table table-bordered">
  <thead class="table-light">
  <thead class ="bg-info" >
    <tr>
    <th scope="col">ID</th>
      <th scope="col">Nombres</th>
      <th scope="col">Apellidos</th>
      <th scope="col">Torre/Apto</th>
      <th scope="col">correo</th>
      <th scope="col">Telefono</th>
      <th scope="col">Comentario</th>
      <th scope="col"></th>
    </tr>
    
  </thead>
  <tbody>

  <?php
  include "conexion.php";
  $sql = $mysqli->query("select * from gestionpqr");
  while($datos = $sql->fetch_object()) { ?>
  <tr>
      <td><?= $datos->id ?></td> 
      <td><?= $datos->nombres ?></td>
      <td><?= $datos->apellidos ?></td>
      <td><?= $datos->torre_apto ?></td>
      <td><?= $datos->correo ?></td>
      <td><?= $datos->telefono ?></td>
      <td><?= $datos->comentario ?></td>
      <td>

 <a href="modificar_pqr.php?id=<?= $datos->id ?>"><i class="fa-solid fa-pen-to-square"></i></a>
 <a href="PQR.php?id=<?= $datos->id ?>"><i class="fa-solid fa-trash"></i></a>

 </td>
    </tr>
  <?php }
  ?>

    <tr>
  </tbody>
 </table>
 </table>
                                
 </div>
                          
 </body>

 </div>
                        
                </main>
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid px-4">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">conjuntolamesadelrincon_admin@gmail.com</div>
                            <div>
                                
                               
                                
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
    </body>
</html>