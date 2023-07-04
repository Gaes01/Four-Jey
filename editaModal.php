<!-- Modal edita registro -->
<div class="modal fade" id="editaModal" tabindex="-1" aria-labelledby="editaModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="editaModalLabel">Editar registro</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="actualiza.php" method="post" enctype="multipart/form-data">

                    <input type="hidden" id="id" name="id">
                    
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

                    <div class="d-flex justify-content-end pt2">
                        <button type="button" class="btn btn-secondary me-1" data-bs-dismiss="modal">Cerrar</button>
                        <button type="submit" class="btn btn-primary ms-1"><i class="fa-solid fa-floppy-disk"></i> Guardar</button>
                    </div>

                </form>
            </div>

        </div>
    </div>
</div>