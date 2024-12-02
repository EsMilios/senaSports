<?php
// Iniciar sesión
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>English for Sports - SENA</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="static/css/styles.css">
</head>

<body>
    <!-- Header -->
    <nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #001449;">
        <div class="container-fluid">
            <a class="navbar-brand" href="index.php">
                <img src="static/img/logo-sena-blanco.png" alt="Logo" width="30" height="30" class="d-inline-block align-text-top">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#">home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="templates/vocabulary.php">Vocabulary</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="templates/activities.php">Activities</a>
                    </li>
                </ul>

                <!-- Mostrar el nombre del usuario y el menú para cerrar sesión si está logueado -->
                <div class="d-flex ms-3">
                    <?php if (isset($_SESSION['user_id'])) { ?>
                        <!-- Menú desplegable para el usuario logueado -->
                        <div class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <?php echo $_SESSION['name']; ?>
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="templates/logout.php">Cerrar sesión</a></li>
                            </ul>
                        </div>
                    <?php } else { ?>
                        <!-- Mostrar los botones de Login y Register si el usuario no está logueado -->
                        <a class="btn btn-primary me-2" href="templates/login.php">Login</a>
                        <a class="btn btn-primary" href="templates/register.php">Register</a>
                    <?php } ?>
                </div>
            </div>
        </div>
    </nav>

    <!-- Carrusel -->
    <div id="carouselSports" class="carousel slide" data-bs-ride="carousel" data-bs-interval="3000">
        <!-- Indicadores -->
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselSports" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselSports" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselSports" data-bs-slide-to="2" aria-label="Slide 3"></button>
            <button type="button" data-bs-target="#carouselSports" data-bs-slide-to="3" aria-label="Slide 4"></button>
        </div>

        <!-- Contenido del carrusel -->
        <div class="carousel-inner">
            <!-- Slide 1 -->
            <div class="carousel-item active">
                <img src="static/img/inicio.png" class="d-block w-100" alt="Inicio de la presentación">
            </div>

            <!-- Slide 2 -->
            <div class="carousel-item">
                <img src="static/img/FUTBOL.png" class="d-block w-100" alt="Imagen de un campo de fútbol">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Exciting Football</h5>
                    <p>Enjoy the best sport in the world.</p>
                </div>
            </div>

            <!-- Slide 3 -->
            <div class="carousel-item">
                <img src="static/img/VOLEYBALL.png" class="d-block w-100" alt="Imagen de un partido de voleibol">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Competitive Volleyball</h5>
                    <p>Action on every serve.</p>
                </div>
            </div>

            <!-- Slide 4 -->
            <div class="carousel-item">
                <img src="static/img/BASKETBALL.png" class="d-block w-100" alt="Imagen de un partido de baloncesto">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Intense Basketball</h5>
                    <p>Unforgettable jumps and baskets.</p>
                </div>
            </div>
        </div>

        <!-- Controles -->
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselSports" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselSports" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    <!-- Información sobre deportes -->
    <div class="container-fluid my-5">
        <div class="row justify-content-center">
            <div class="col-12 text-center">
                <h2>About Sports</h2>
                <p>
                    Sports play an essential role in promoting physical health, teamwork, and personal development. From individual pursuits like running to team sports like football and basketball, learning sports terminology in English opens up new opportunities to understand and engage in international sports events. Whether you’re playing, coaching, or simply enjoying a game, mastering key terms in sports can enhance your experience and help you communicate effectively in English.
                </p>
                <p>
                    In this section, we introduce you to the basic vocabulary of different sports, along with explanations to guide you in understanding their use in both casual and professional settings.
                </p>
            </div>
        </div>
    </div>



    <!-- Lecciones -->
    <div class="container my-5">
        <div class="row">
            <div class="card">
                <h2>Lessons</h2>
                <p>Structured lessons to learn grammar, sports-specific vocabulary, and common phrases used in sports contexts.</p>
                <ul>
                    <li>Basic Grammar for Sports</li>
                    <li>Vocabulary for Football</li>
                    <li>Common Phrases in Basketball</li>
                    <li>Volleyball Terminology and Usage</li>
                </ul>
            </div>
            <div class="card">
                <h2>Vocabulary</h2>
                <p>A Vocabulary of technical sports terms in English to help students better understand key concepts.</p>
                <ul>
                    <li>Offside (Football) - Fuera de lugar</li>
                    <li>Slam Dunk (Basketball) - Mate</li>
                    <li>Set Point (Volleyball) - Punto de set</li>
                    <li>Relay Race (Athletics) - Carrera de relevos</li>
                </ul>
            </div>
            <div class="card">
                <h2>Interactive Exercises</h2>
                <p>Interactive games and quizzes to practice sports vocabulary and phrases in English.</p>
                <ul>
                    <li><a href="#">Fill in the blanks: Football terms</a></li>
                    <li><a href="#">True or False: Basketball rules</a></li>
                    <li><a href="#">Drag and Drop: Volleyball positions</a></li>
                </ul>
            </div>
        </div>
    </div>

    <!-- Blog Section -->
    <div class="container my-5" id="blog">
        <h2>Student Blog - Ask Your Questions</h2>
        <p>Leave your questions or doubts here, and let your peers or instructors help you.</p>

        <!-- Form to submit a new question -->
        <form id="blogForm">
            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" class="form-control" id="name" placeholder="Your name" required>
            </div>
            <div class="mb-3">
                <label for="ficha" class="form-label">Ficha</label>
                <input type="text" class="form-control" id="ficha" placeholder="Your ficha" required>
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Question or Doubt</label>
                <textarea class="form-control" id="description" rows="3" placeholder="Enter your question here" required></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Post Question</button>
        </form>
    </div>

    <!-- Footer -->
    <footer class="footer py-4" style="background-color: #001449;">
        <div class="container text-center text-white">
            <p>English for Sports - SENA</p>
            <p>&copy; 2024 SENA | All Rights Reserved</p>
        </div>
    </footer>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Custom JS -->
    <script src="static/js/app.js"></script>
</body>

</html>
