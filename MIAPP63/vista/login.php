<?php include __DIR__ . '/layout/header.php'; ?>

<div class="container mt-5 flex-grow-1">

    <h2 class="text-center">Inicio de Sesión</h2>
    <form action="index.php?accion=procesarLogin" method="POST" class="mx-auto" style="max-width: 450px;">

        <div class="mb-3">
            <label for="usuario" class="form-label">Usuario</label>
            <input type="text" class="form-control" name="usuario" required>
        </div>

        <div class="mb-3">
            <label for="password" class="form-label">Clave</label>
            <input type="password" class="form-control" name="clave" required>
        </div>


        <div class="mb-3 d-grid">
            <button type="submit" class="btn btn-success">Ingresar</button>

        </div>
        <div class="text-center mb-3">
            <a href="index.php?accion=inicio" class="btn btn-outline-secondary btn-sm">
                ← Volver al inicio
            </a>
        </div>
    </form>

</div>

<?php include __DIR__ . '/layout/footer.php'; ?>