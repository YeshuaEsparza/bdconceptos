<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - RIAN Soluciones</title>
    <link href="../css/estilos.css" rel="stylesheet">
</head>
<body class="container">
    <header>
        <h1 class="mt-5">Base de Datos de CONCEPTOS. RIAN Soluciones</h1>
    </header>
    <section class="justify-content-center align-items-center position-absolute top-50 start-50 translate-middle border rounded  p-5 shadow-lg p-3 mb-5 bg-white rounded">
        <form action="../controller/validar_usuario.php" method="POST" class="mt-4">
            <div class="mb-3 justify ">
                <label for="username"  class="form-label">Nombre de Usuario</label>
                <input type="text" class="form-control" id="username" name="username" required>
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Contraseña</label>
                <input type="password" class="form-control" id="password" name="password" required>
            </div>
            <button type="submit" class="btn btn-primary">Iniciar Sesión</button>
        </form>
    </section>
    <footer class="mx-auto mt-5">
        <p>&copy;2025, RIAN Soluciones. Todos los derechos reservados.</p>
    </footer>
</body>
</html>