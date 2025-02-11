<?php

    $usuario = $_POST['username'];
    $contrasena = $_POST['password'];

    if($usuario == 'root' && $contrasena == '123'){
        echo 'Bienvenido';
        // Iniciar sesión en el sistema
        session_start();
        $_SESSION['usuario'] = $usuario;
        // Redireccionar al index del sistema
        header('Location: http://localhost/bdconceptos/view/index.php');
    }else{
        echo 'Usuario o contraseña incorrectos';
    }
    
?>