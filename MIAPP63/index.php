<?php
require_once 'controlador/UsuarioControlador.php';
require_once 'controlador/AlumnoControlador.php';

session_start();
$accion = $_GET['accion'] ?? 'inicio';

$usuarioCtrl = new UsuarioControlador();

switch($accion) {
    case 'login':
        include 'vista/login.php';
        break;
    case 'procesarLogin':
        $usuarioCtrl->procesarLogin($_POST['usuario'], $_POST['clave']);
        break;
    case 'menu':
        include 'vista/menu.php';
        break;
    case 'consultarAlumnos':
        include 'vista/alumno/consultar.php';
        break;
    case 'editarAlumno':
        $alumno = AlumnoControlador::obtenerPorId($_GET['id']);
        include 'vista/alumno/editar.php';
        break;
    case 'registrarAlumno':
        include 'vista/alumno/registrar.php';
        break;
    default:
        include 'vista/inicio.php';
        break;

}

?>