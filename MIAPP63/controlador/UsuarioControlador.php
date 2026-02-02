<?php
require_once __DIR__ . '/../dao/UsuarioDAO.php';

class UsuarioControlador
{
    public static function procesarLogin($usuario, $clave)
    {
        $dao = new UsuarioDAO();
        $usuarioObj = $dao->autenticar($usuario, $clave);

        if ($usuarioObj) {
            session_start();
            $_SESSION['usuario'] = $usuarioObj->usuario;
            header("Location: index.php?accion=menu");
        } else {
            header("Location: index.php?accion=login&error=1");
        }
        exit;
    }

    public static function logout()
    {
        session_start();
        session_unset();
        session_destroy();
        header("Location: index.php?accion=inicio");
        exit;
    }
}
