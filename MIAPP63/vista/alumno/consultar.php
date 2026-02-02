<?php
require_once __DIR__ . '/../../controlador/AlumnoControlador.php';
// Paginación
$registrosPorPagina = 8;
$paginaActual = isset($_GET['pagina']) ? (int)$_GET['pagina'] : 1;
$inicio = ($paginaActual - 1) * $registrosPorPagina;

// Obtener todos los alumnos
$todos = AlumnoControlador::obtenerTodos();
$totalAlumnos = count($todos);

// Cortar el array para esta página
$alumnos = array_slice($todos, $inicio, $registrosPorPagina);

// Calcular número total de páginas
$totalPaginas = ceil($totalAlumnos / $registrosPorPagina);

include __DIR__ . '/../layout/header.php';
?>

<div class="container mt-4 ">

    <div class="d-flex justify-content-between align-items-center mb-4">

        <a href="index.php?accion=menu" class="btn btn-secondary mb-3">← Volver al Menú</a>
    </div>

    <h3 class="text-center">Listado de Alumnos</h3>
    <div class="table-responsive">
        <table class="table table-bordered mt-3 ">
            <thead class="table-light">
                <tr>
                    <th>ID</th>
                    <th>Cédula</th>
                    <th>Nombre</th>
                    <th>Correo</th>
                    <th>Curso</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($alumnos as $a): ?>
                    <tr>
                        <td><?= $a['id'] ?></td>
                        <td><?= $a['cedula'] ?></td>
                        <td><?= $a['nombre'] ?></td>
                        <td><?= $a['correo'] ?></td>
                        <td><?= $a['curso'] ?></td>
                        <td><a href="index.php?accion=editarAlumno&id=<?= $a['id'] ?>" class="btn btn-sm btn-warning me-2">Editar</a>
                            <a onclick="return confirm('¿Está seguro de eliminar este usuario?')" href="index.php?accion=eliminarAlumno&id=<?= $a['id'] ?>" class="btn btn-sm btn-danger">Eliminar</a>
                        </td>

                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <nav>
        <ul class="pagination justify-content-center">
            <?php if ($paginaActual > 1): ?>
                <li class="page-item">
                    <a class="page-link" href="?accion=consultarAlumnos&pagina=<?= $paginaActual - 1 ?>">Anterior</a>
                </li>
            <?php endif; ?>

            <?php for ($i = 1; $i <= $totalPaginas; $i++): ?>
                <li class="page-item <?= ($i == $paginaActual) ? 'active' : '' ?>">
                    <a class="page-link" href="?accion=consultarAlumnos&pagina=<?= $i ?>"><?= $i ?></a>
                </li>
            <?php endfor; ?>

            <?php if ($paginaActual < $totalPaginas): ?>
                <li class="page-item">
                    <a class="page-link" href="?accion=consultarAlumnos&pagina=<?= $paginaActual + 1 ?>">Siguiente</a>
                </li>
            <?php endif; ?>
        </ul>
    </nav>

</div>

<?php include __DIR__ . '/../layout/footer.php'; ?>