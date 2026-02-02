<?php include __DIR__ . '/../layout/header.php'; ?>

<div class="container mt-4">
    <a href="index.php?accion=consultarAlumnos" class="btn btn-secondary btn-sm mb-3">← Volver</a>

    <div class="row justify-content-center">
        <div class="col-md-6 col-lg-5">
            <h4 class="mb-3 text-center">Editar Alumno</h4>

            <form action="index.php?accion=actualizarAlumno" method="POST">
                <input type="hidden" name="id" value="<?= $alumno->id ?>">

                <div class="mb-2">
                    <label class="form-label">Cédula</label>
                    <input type="text" name="cedula" class="form-control form-control-sm" value="<?= $alumno->cedula ?>" required>
                </div>
                <div class="mb-2">
                    <label class="form-label">Nombre</label>
                    <input type="text" name="nombre" class="form-control form-control-sm" value="<?= $alumno->nombre ?>" required>
                </div>
                <div class="mb-2">
                    <label class="form-label">Curso</label>
                    <input type="text" name="curso" class="form-control form-control-sm" value="<?= $alumno->curso ?>" required>
                </div>
                <div class="mb-2">
                    <label class="form-label">Correo</label>
                    <input type="email" name="correo" class="form-control form-control-sm" value="<?= $alumno->correo ?>" required>
                </div>

                <div class="d-grid">
                    <button type="submit" class="btn btn-primary btn-sm">Actualizar</button>
                </div>
            </form>
        </div>
    </div>
</div>

<?php include __DIR__ . '/../layout/footer.php'; ?>