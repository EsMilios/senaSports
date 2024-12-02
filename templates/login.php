<?php
// Iniciar sesión
session_start();

// Variables de error
$error_message = "";

// Conexión a la base de datos
$host = 'localhost'; // o el host de tu base de datos
$username = 'u469734594_rootSports';   // tu nombre de usuario
$password = 'Sports2024';       // tu contraseña
$dbname = 'u469734594_sports'; // Cambia a 'sports_blog' en lugar de 'sena_sports'

// Conexión a la base de datos
$conn = mysqli_connect($host, $username, $password, $dbname);

// Verificar si la conexión fue exitosa
if (!$conn) {
    die("Error de conexión: " . mysqli_connect_error());
}

// Verificar si el formulario fue enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Validar campos
    if (empty($email) || empty($password)) {
        $error_message = "Por favor, completa todos los campos.";
    } else {
        // Consultar en la base de datos con consultas preparadas
        $query = "SELECT * FROM users WHERE email = ?";
        $stmt = mysqli_prepare($conn, $query);
        if (!$stmt) {
            die("Error en la preparación de la consulta: " . mysqli_error($conn));
        }

        // Bind de parámetros y ejecución de la consulta
        mysqli_stmt_bind_param($stmt, "s", $email);
        mysqli_stmt_execute($stmt);
        $result = mysqli_stmt_get_result($stmt);

        if (mysqli_num_rows($result) > 0) {
            $user = mysqli_fetch_assoc($result);

            // Verificar la contraseña
            if (password_verify($password, $user['password'])) {
                // Login exitoso, guardar la información del usuario en sesión
                $_SESSION['user_id'] = $user['id'];
                $_SESSION['name'] = $user['name'];
                $_SESSION['role'] = $user['role'];

                // Redirigir al inicio (index.php)
                header("Location: ../index.php");
                exit(); // Asegúrate de llamar a exit para detener la ejecución
            } else {
                // Credenciales incorrectas
                $error_message = "Correo o contraseña incorrectos.";
            }
        } else {
            // No se encontró el usuario
            $error_message = "Correo o contraseña incorrectos.";
        }
    }
}
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - English for Sports - SENA</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="../static/css/styles.css">
    <link rel="stylesheet" href="../static/css/register_login.css">
</head>

<body>
    <!-- Header -->
    <nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #001449;">
        <div class="container-fluid">
            <a class="navbar-brand" href="../index.php">
            <img src="../static/img/logo-sena-blanco.png" alt="Logo" width="30" height="30" class="d-inline-block align-text-top">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="../index.php">home</a>
                    </li>
                </ul>
                <div class="d-flex ms-3">
                    <a class="btn btn-primary" href="../templates/register.php">Register</a>
                </div>
            </div>
        </div>
    </nav>

    <div class="container">
        <div class="back-button">
            <a href="../index.php" class="back-link">
                &larr; Volver
            </a>
        </div>
        <div class="heading">Login</div>

        <!-- Mostrar mensaje de error si lo hay -->
        <?php if (!empty($error_message)) { ?>
            <div class="alert alert-danger" role="alert">
                <?php echo $error_message; ?>
            </div>
        <?php } ?>

        <!-- Formulario de login -->
        <form class="form" action="" method="POST">
            <input placeholder="E-mail" id="email" name="email" type="email" class="input" required />
            <input placeholder="Password" id="password" name="password" type="password" class="input" required />
            <input value="Login" type="submit" class="login-button" />
        </form>
    </div>

    <!-- Footer -->
    <footer class="bg-color1 text-white py-3">
        <h6>&copy; 2024 SENA Sports Training. All rights reserved.</h6>
    </footer>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>
</body>

</html>
