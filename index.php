<?php include_once ('conexion.php'); ?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar Sesión - Proyecto de Reciclaje</title>
    <style>
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
        }

        body {
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
    background: url('fondoindex.jpg') no-repeat center center fixed;
    background-size: cover;
    color: #333;
}

        .login-container {
            background-color: #fff;
            padding: 2rem;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            width: 100%;
            max-width: 400px;
            text-align: center;
        }

        h1 {
            font-size: 1.5rem;
            margin-bottom: 1rem;
            color: #2D572C;
        }

        .form-control {
            width: 100%;
            padding: 0.75rem;
            margin: 0.5rem 0;
            border: 1px solid #ddd;
            border-radius: 5px;
        }

        .login-button {
            width: 100%;
            padding: 0.75rem;
            background-color: #4b2e17;
            border: none;
            color: white;
            font-weight: bold;
            cursor: pointer;
            border-radius: 5px;
            transition: background-color 0.3s;
        }

        .login-button:hover {
            background-color: #6f4f1e;
        }

        .footer {
            margin-top: 1rem;
            font-size: 0.9rem;
            color: #555;
        }
    </style>
</head>
<body>

<div class="login-container">
    <h1>Iniciar Sesión</h1>
    <form action="Login.php" method="post">
        <input type="text" name="username" placeholder="Nombre de usuario" class="form-control" required>
        <input type="password" name="password" placeholder="Contraseña" class="form-control" required>
        <button type="submit" class="login-button">Entrar</button>
    </form>
    <div class="footer">
        <p>&copy; 2024 Proyecto de Sublime. Todos los derechos reservados.</p>
    </div>
</div>

</body>
</html>