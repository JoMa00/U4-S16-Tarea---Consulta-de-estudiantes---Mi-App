<?php
require_once __DIR__ . '/../bd/Conexion.php';
require_once __DIR__ . '/../modelo/Usuario.php';


class UsuarioDao{
    public function autenticar($nombre, $clave){
        $conexion = new Conexion();
        $pdo = $conexion->conectar();

        $stmt = $pdo->prepare("SELECT * FROM usuario WHERE nombre = :nombre AND clave = :clave");
        $stmt->execute(['nombre' => $nombre,
                                'clave' => $clave]);

        $fila = $stmt->fetch(PDO::FETCH_ASSOC);

        if($fila){
            $user = new Usuario();
            $user->id = $fila['id'];
            $user->usuario = $fila['usuario'];
            return $user;
        }
        return null;
    }
    
}
?>