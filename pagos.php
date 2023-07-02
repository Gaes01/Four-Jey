<?php





?>




<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Cartera - SB Admin</title>
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css" rel="stylesheet" />
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
        <link href="css/styles.css" rel="stylesheet" />
        <script src="https://kit.fontawesome.com/999197fd07.js" crossorigin="anonymous"></script>
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    </head>
    <body class="sb-nav-fixed">
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <!-- Navbar Brand-->
            <a class="navbar-brand ps-3" href="index.html">Gestion de Cartera</a>
            <!-- Sidebar Toggle-->
            <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
            <!-- Navbar Search-->
            <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
                <div class="input-group">
                    <input class="form-control" type="text" placeholder="Search for..." aria-label="Search for..." aria-describedby="btnNavbarSearch" />
                    <button class="btn btn-primary" id="btnNavbarSearch" type="button"><i class="fas fa-search"></i></button>
                </div>
            </form>
           
        </nav>
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <div class="sb-sidenav-menu-heading"></div>
                            <a class="nav-link" href="interfaz.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Regresar
                            </a>
                            
                            <div class="sb-sidenav-menu-heading"></div>

                          
                         
                           
                            
                            <a class="nav-link" href="tables.html">
                                <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                                Pagos
                            </a>
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
                        <h1 class="mt-4">Gestion de Pagos</h1>
                        <ol class="breadcrumb mb-4">
                       
                        
                        </ol>
                        <div class="card mb-4">
                            <div class="card-body"><br>
                              

     <body>
     
                        

     <div class="col-md-50 ">

     <div class="card">
        <div class="card-header">
            Datos de Pago
        </div>

        <div class="card-body">

                                           
     <from method="POST" enctype="multipart/form-data" >


            
    <div class="from-group">
    <label for="txtID">ID:</label>
    <input type="text" class="form-control" name="txtID"id="txtID" placeholder="ID">
    </div>
 
  <div class = "from-group"><br>
    <label for="txtnombre">nombre:</label>
    <input type="text" class="form-control" name="txtnombre"id="txtnombre" placeholder="nombre">
  </div>

  <div class = "from-group"><br>
    <label for="txtvalor">valor: </label>
    <input type="text" class="form-control" name="txtvalor"id="txtvalor" placeholder="valor">
  </div>

 

  <div class = "from-group"><br>
    <label for="txtcomentario">comentario:</label>
    <input type="text" class="form-control" name="txtcomentario"id="txtcomentario" placeholder="comentario">
  </div>

    <div class = "from-group"><br>
    <label for="txtimagen">imagen:</label>
    <input type="file" class="form-control" name="txtimagen"id="txtimagen" placeholder="imagen">
  </div>
 
    
  
    <br><div class="btn-group" role="group" aria-label=""><br>
  <button type="submit" name="accion" value="Agregar" class="btn btn-success">Agregar</button>
  <button type="submit" name="accion" value="Modificar" class="btn btn-warning">Modificar</button>
  <button type="submit" name="accion" value="Cancelar" class="btn btn-info">Cancelar</button>
    </div> 
 </from>



     <div class="col-md-100"><br>
    
    <thead class ="bg-info" >
     </body>               
        </div>
        
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                
                             
                                  <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Nombres</th>
                                            <th>Valor</th>
                                            <th>Comentario</th>
                                            <th>Imagen</th>
                                            
                             </div>            </tr>

    </thead>
    <tbody>

                                            <td>3</td>
                                            <td>carlos lopez</td>
                                            <td>70.000</td>
                                            <td>el pago del mes de julio</td>
                                            <td>imagen.jpg</td>
                                            
                                           
                                           <td>

                                            <a href=""><i class="fa-solid fa-pen-to-square"></i></a>
                                            <a href=""><i class="fa-solid fa-trash"></i></a>

                                            </td>

    

                                    </tbody>
                                   
                                        
                                    
                                 </table>
                            </div>
                        </div>
                    </div>
                </main>
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid px-4">
                        <div class="d-flex align-items-center justify-content-between small">
                           
                            <div>
                                
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/umd/simple-datatables.min.js" crossorigin="anonymous"></script>
        <script src="js/datatables-simple-demo.js"></script>
    </body>
</html>
