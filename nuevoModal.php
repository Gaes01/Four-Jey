


<div class="modal fade" id="nuevoModal" tabindex="-1" aria-labelledby="nuevoModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="nuevoModalLabel">Agregar registro</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="guarda.php" method="POST" enctype="multipart/form-data">

                

            

                    <div class="mb-3">
                        <label for="nombres" class="form-label">Nombres:</label>
                        <input type="text" name="nombres" id="nombres" class="form-control" required>
                    </div>

                    <div class="mb-3">
                        <label for="apellidos" class="form-label">Apellidos:</label>
                        <input type="text" name="apellidos" id="apellidos" class="form-control"  required></input>
                    </div>

                    <div class="mb-3">
                        <label for="torre_apto" class="form-label">Torre/Apto:</label>
                        <input type="text" name="torre_apto" id="torre_apto" class="form-control" required></input>
                    </div>

                    <div class="mb-3">
                        <label for="correo" class="form-label">Correo:</label>
                        <input type="text" name="correo" id="correo" class="form-control"  required></input>
                    </div>

                    <div class="mb-3">
                        <label for="tipo_vehiculo" class="form-label">Tipo de Vehiculo:</label>
                        <input type="text" name="tipo_vehiculo" id="tipo_vehiculo" class="form-control" required></input>
                    </div>

                    <div class="mb-3">
                        <label for="placa" class="form-label">Placa:</label>
                        <input type="text" name="placa" id="placa" class="form-control"  required></input>
                    </div>

                    <div class="mb-3">
                        <label for="documentacion" class="form-label">Documentacion:</label>
                        <input type="file"name="documentacion" id="documentacion" class="form-control" accept="image/jpeg">
                    </div>

                
                    <div class="">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                        <button type="submit" class="btn btn-primary"><i class="fa-solid fa-floppy-disk"></i> Guardar</button>
                    </div>

                </form>
            </div>

        </div>
    </div>
</div>