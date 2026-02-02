<?php include __DIR__ . '/layout/header.php'; ?>

<style>
    .img-carrusel {
        max-height: 300px;
        object-fit: contain;
    }
</style>

<div class="container mt-5 text-center">
    <h2>Bienvenido al Sistema de Gestión Académica</h2>
    <p class="lead">Gestión de alumnos, docentes y cursos de forma eficiente.</p>

    <a href="index.php?accion=login" class="btn btn-primary mt-3 mb-5">Iniciar Sesión</a>

    <!-- Carrusel de información -->
    <div id="infoCarrusel" class="carousel slide" data-bs-ride="carousel" style="max-width: 700px; margin: auto;">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="assets/img/carrusel1.jpg" class="d-block w-100 rounded img-carrusel" alt="Gestión de Alumnos">
                <div class="carousel-caption d-none d-md-block bg-dark bg-opacity-50 rounded">
                    <h5>Gestión de Alumnos</h5>
                    <p>Registra, consulta y organiza la información de los estudiantes.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="assets/img/carrusel2.jpg" class="d-block w-100 rounded img-carrusel" alt="Gestión de Docentes">
                <div class="carousel-caption d-none d-md-block bg-dark bg-opacity-50 rounded">
                    <h5>Control Docente</h5>
                    <p>Administra asignaciones y seguimiento de los profesores.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="assets/img/carrusel3.jpg" class="d-block w-100 rounded img-carrusel" alt="Reportes del Sistema">
                <div class="carousel-caption d-none d-md-block bg-dark bg-opacity-50 rounded">
                    <h5>Reportes y Estadísticas</h5>
                    <p>Consulta indicadores clave para la toma de decisiones académicas.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="assets/img/carrusel4.jpg" class="d-block w-100 rounded img-carrusel" alt="Reportes del Sistema">
                <div class="carousel-caption d-none d-md-block bg-dark bg-opacity-50 rounded">
                    <p>Gestiona fácilmente las matriculas de los alumnos.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="assets/img/carrusel5.jpg" class="d-block w-100 rounded img-carrusel" alt="Reportes del Sistema">
                <div class="carousel-caption d-none d-md-block bg-dark bg-opacity-50 rounded">
                    <p>Asigna los paralelos al docente.</p>
                </div>
            </div>
        </div>

        <!-- Controles -->
        <button class="carousel-control-prev" type="button" data-bs-target="#infoCarrusel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon bg-dark rounded-circle" aria-hidden="true"></span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#infoCarrusel" data-bs-slide="next">
            <span class="carousel-control-next-icon bg-dark rounded-circle" aria-hidden="true"></span>
        </button>
    </div>
</div>

<?php include __DIR__ . '/layout/footer.php'; ?>