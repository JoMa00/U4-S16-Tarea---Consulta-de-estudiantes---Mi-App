<?php
require_once __DIR__ . '/../bd/conexion.php';
require_once __DIR__ . '/../modelo/Alumno.php';

class AlumnoDAO
{
    public function registrar($user)
    {
        $conexion = new Conexion();
        $pdo = $conexion->conectar();

        $sqlInsert = "INSERT INTO alumno (nombre, cedula, correo, curso)
                      VALUES (:nombre, :cedula, :correo, :curso)";

        $stmt = $pdo->prepare($sqlInsert);

        return $stmt->execute([
            ':nombre' => $user->nombre,
            ':cedula' => $user->cedula,
            ':correo' => $user->correo,
            ':curso' => $user->curso
        ]);
    }

    public function listarTodos()
    {
        $conexion = new Conexion();
        $pdo = $conexion->conectar();

        $sql = "SELECT id, cedula, nombre, correo, curso
                FROM alumno
                ORDER BY id";

        $stmt = $pdo->query($sql);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
    public function buscarPorId($id)
    {
        $conexion = new Conexion();
        $pdo = $conexion->conectar();

        $sql = "SELECT id, cedula, nombre, correo, curso
            FROM alumno
            WHERE id = :id";

        $stmt = $pdo->prepare($sql);
        $stmt->execute([':id' => $id]);

        $row = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($row) {
            $alumno = new Alumno();
            $alumno->id = $row['id'];
            $alumno->cedula = $row['cedula'];
            $alumno->nombre = $row['nombre'];
            $alumno->correo = $row['correo'];
            $alumno->curso = $row['curso'];
            return $alumno;
        }

        return null;
    }
}
?>