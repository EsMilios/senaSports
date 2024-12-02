<?php
// Iniciar sesión
session_start();

// Variables de error y éxito
$error_message = "";
$success_message = "";

// Verificar si el formulario fue enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm-password'];

    // Validar campos
    if (empty($name) || empty($email) || empty($password) || empty($confirm_password)) {
        $error_message = "Por favor, completa todos los campos.";
    } elseif ($password != $confirm_password) {
        $error_message = "Las contraseñas no coinciden.";
    } else {
        // Conexión a la base de datos
        $conn = mysqli_connect("localhost", "root", "", "sports_blog");

        if (!$conn) {
            die("Error de conexión: " . mysqli_connect_error());
        }

        // Comprobar si el correo ya está registrado
        $query = "SELECT * FROM users WHERE email = ?";
        $stmt = mysqli_prepare($conn, $query);
        mysqli_stmt_bind_param($stmt, "s", $email);
        mysqli_stmt_execute($stmt);
        $result = mysqli_stmt_get_result($stmt);

        if (mysqli_num_rows($result) > 0) {
            // El correo ya está registrado
            $error_message = "Este correo ya está registrado.";
        } else {
            // Insertar el nuevo usuario en la base de datos
            $hashed_password = password_hash($password, PASSWORD_DEFAULT); // Encriptar la contraseña
            $insert_query = "INSERT INTO users (name, email, password) VALUES (?, ?, ?)";
            $stmt_insert = mysqli_prepare($conn, $insert_query);
            mysqli_stmt_bind_param($stmt_insert, "sss", $name, $email, $hashed_password);

            if (mysqli_stmt_execute($stmt_insert)) {
                // Registro exitoso
                $success_message = "¡Te has registrado exitosamente! Ahora puedes iniciar sesión.";
            } else {
                // Error al registrar el usuario
                $error_message = "Error al registrar el usuario. Intenta nuevamente.";
            }
        }

        mysqli_stmt_close($stmt); // Cerrar la consulta de selección
        mysqli_stmt_close($stmt_insert); // Cerrar la consulta de inserción
        mysqli_close($conn); // Cerrar la conexión a la base de datos
    }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register - English for Sports - SENA</title>
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
            <a class="navbar-brand" href="/templates/index.php">
            <img src="../static/img/logo-sena-blanco.png" alt="Logo" width="30" height="30" class="d-inline-block align-text-top">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="../index.php">Home</a>
                    </li>
                </ul>
                <div class="d-flex ms-3">
                    <a class="btn btn-primary" href="../templates/login.php">Login</a>
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
        <div class="heading">Register</div>

        <!-- Mostrar mensaje de error si lo hay -->
        <?php if (!empty($error_message)) { ?>
            <div class="alert alert-danger" role="alert">
                <?php echo $error_message; ?>
            </div>
        <?php } ?>

        <!-- Mostrar mensaje de éxito si lo hay -->
        <?php if (!empty($success_message)) { ?>
            <div class="alert alert-success" role="alert">
                <?php echo $success_message; ?>
            </div>
        <?php } ?>

        <!-- Formulario de registro -->
        <form class="form" action="" method="POST">
            <input placeholder="Full Name" id="name" name="name" type="text" class="input" required />
            <input placeholder="E-mail" id="email" name="email" type="email" class="input" required />
            <input placeholder="Password" id="password" name="password" type="password" class="input" required />
            <input placeholder="Confirm Password" id="confirm-password" name="confirm-password" type="password" class="input" required />
            <input value="Register" type="submit" class="login-button" />
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
