<?php
require_once __DIR__ . '/../dao/AlumnoDAO.php';
require_once __DIR__ . '/../modelo/Alumno.php';


class AlumnoControlador
{
    public static function guardar($cedula, $nombre, $correo, $curso)
    {
        $alumno = new Alumno();
        $alumno->cedula = $cedula;
        $alumno->nombre = $nombre;
        $alumno->correo = $correo;
        $alumno->curso = $curso;

        $dao = new AlumnoDAO();
        return $dao->registrar($alumno);
    }


    public static function obtenerTodos()
    {
        $dao = new AlumnoDAO();
        return $dao->listarTodos();
    }
    public static function obtenerPorId($id)
    {
        $dao = new AlumnoDAO();
        return $dao->buscarPorId($id);
    }
}
