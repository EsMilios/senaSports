<?php
// Iniciar sesión
session_start();

// Destruir la sesión
session_unset();
session_destroy();

// Redirigir al usuario a la página de login
header("Location: /templates/login.php");
exit();
?>