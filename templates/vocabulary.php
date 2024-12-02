<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Educational resources and games about sports in English.">
    <meta name="keywords" content="sports, English, educational games, SENA">
    <title>SENA Sports Training</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="../static/css/vocabulary.css">
</head>

<body>
    <!-- Header -->
    <nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #001449;">
        <div class="container-fluid">
            <a class="navbar-brand" href="../templates/home.php">
                <img src="../static/img/logo-sena-blanco.png" alt="Logo" width="30" height="30" class="d-inline-block align-text-top">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="../index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../templates/activities.php">Activities</a>
                    </li>
                </ul>
                <div class="d-flex ms-3">
                    <a class="btn btn-primary me-2" href="../templates/login.php">Login</a>
                    <a class="btn btn-primary" href="../templates/register.php">Register</a>
                </div>
            </div>
        </div>
    </nav>

    <!-- Carousel -->
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
            <img src="../static/img/inicio.png" class="d-block w-100" alt="Inicio de la presentación">
        </div>

        <!-- Slide 2 -->
        <div class="carousel-item">
            <img src="../static/img/FUTBOL.png" class="d-block w-100" alt="Imagen de un campo de fútbol">
            <div class="carousel-caption d-none d-md-block">
                <h5>Exciting Football</h5>
                <p>Enjoy the best sport in the world.</p>
            </div>
        </div>

        <!-- Slide 3 -->
        <div class="carousel-item">
            <img src="../static/img/VOLEYBALL.png" class="d-block w-100" alt="Imagen de un partido de voleibol">
            <div class="carousel-caption d-none d-md-block">
                <h5>Competitive Volleyball</h5>
                <p>Action on every serve.</p>
            </div>
        </div>

        <!-- Slide 4 -->
        <div class="carousel-item">
            <img src="../static/img/BASKETBALL.png" class="d-block w-100" alt="Imagen de un partido de baloncesto">
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


    <!-- Vocabulary Section -->
    <div class="container my-5">
        <h1>Sports Vocabulary</h1>
    <p>
    Welcome to our Sports Vocabulary section! Here, you will find a carefully curated collection of common terms used in various sports. Each term is presented with its Spanish translation and accompanied by relevant images to enhance your understanding and help you associate the words with their meanings. This section is designed to support both English and Spanish learners interested in sports, providing a fun and visual way to expand your vocabulary.
    </p>


        <!-- Football Terms -->
        <div class="card my-4 shadow-lg">
            <!-- Título -->
            <div class="card-header text-center" style="background-color: #00274D; color: white; font-size: 1.5rem;">
                <i class="fa fa-futbol-o" aria-hidden="true"></i> Football (Soccer) Terms
            </div>
            <!-- Contenido -->
            <div class="card-body">
                <!-- Sección de Imagen -->
                <div class="text-center mb-4">
                    <img src="../static/img/futbol.jpg" alt="Football Image" class="img-fluid rounded shadow">
                </div>
                <!-- Sección de Vocabulario -->
                <div class="row">
                    <div class="col-12 col-md-6">
                        <ul class="list-unstyled">
                            <li class="d-flex align-items-center mb-4 p-2 border rounded shadow-sm">
                                <strong class="flex-shrink-0" style="width: 150px;">Goal:</strong>
                                <audio controls class="flex-grow-1 ms-2">
                                    <source src="../static/audio/goal.mp3" type="audio/mpeg">
                                </audio>
                            </li>
                            <li class="d-flex align-items-center mb-4 p-2 border rounded shadow-sm">
                                <strong class="flex-shrink-0" style="width: 150px;">MVP - Man of the Match:</strong>
                                <audio controls class="flex-grow-1 ms-2">
                                    <source src="../static/audio/mvp.mp3" type="audio/mpeg">
                                </audio>
                            </li>
                            <li class="d-flex align-items-center mb-4 p-2 border rounded shadow-sm">
                                <strong class="flex-shrink-0" style="width: 150px;">Midfielder:</strong>
                                <audio controls class="flex-grow-1 ms-2">
                                    <source src="../static/audio/mid.mp3" type="audio/mpeg">
                                </audio>
                            </li>
                            <li class="d-flex align-items-center mb-4 p-2 border rounded shadow-sm">
                                <strong class="flex-shrink-0" style="width: 150px;">Offside:</strong>
                                <audio controls class="flex-grow-1 ms-2">
                                    <source src="../static/audio/fdlg.mp3" type="audio/mpeg">
                                </audio>
                            </li>
                        </ul>
                    </div>
                    <div class="col-12 col-md-6">
                        <ul class="list-unstyled">
                            <li class="d-flex align-items-center mb-4 p-2 border rounded shadow-sm">
                                <strong class="flex-shrink-0" style="width: 150px;">Penalty Kick:</strong>
                                <audio controls class="flex-grow-1 ms-2">
                                    <source src="../static/audio/penal.mp3" type="audio/mpeg">
                                </audio>
                            </li>
                            <li class="d-flex align-items-center mb-4 p-2 border rounded shadow-sm">
                                <strong class="flex-shrink-0" style="width: 150px;">Corner Kick:</strong>
                                <audio controls class="flex-grow-1 ms-2">
                                    <source src="../static/audio/corner.mp3" type="audio/mpeg">
                                </audio>
                            </li>
                            <li class="d-flex align-items-center mb-4 p-2 border rounded shadow-sm">
                                <strong class="flex-shrink-0" style="width: 150px;">Goalkeeper:</strong>
                                <audio controls class="flex-grow-1 ms-2">
                                    <source src="../static/audio/portero.mp3" type="audio/mpeg">
                                </audio>
                            </li>
                            <li class="d-flex align-items-center mb-4 p-2 border rounded shadow-sm">
                                <strong class="flex-shrink-0" style="width: 150px;">Referee:</strong>
                                <audio controls class="flex-grow-1 ms-2">
                                    <source src="../static/audio/referee.mp3" type="audio/mpeg">
                                </audio>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>


<!--------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------->


        <!-- Basketball Terms -->
        <div class="card my-4 shadow-lg">
            <!-- Título -->
            <div class="card-header text-center" style="background-color: var(--color1); color: white; font-size: 1.5rem;">
                Basketball Terms
            </div>
            <!-- Contenido -->
            <div class="card-body">
                <!-- Sección de Imagen -->
                <div class="text-center mb-4">
                    <img src="../static/img/basketball.jpg" alt="Basketball Image" class="img-fluid rounded shadow" style="border: 1px solid #0000009b;">
                </div>
                <!-- Sección de Vocabulario -->
                <div class="row">
                    <div class="col-12 col-md-6">
                        <ul class="list-unstyled">
                            <li class="d-flex align-items-center mb-4 p-2 border rounded shadow-sm">
                                <strong class="flex-shrink-0" style="width: 150px;">Slam Dunk:</strong>
                                <audio controls class="flex-grow-1 ms-2">
                                    <source src="../static/audio/mate.mp3" type="audio/mpeg">
                                </audio>
                            </li>
                            <li class="d-flex align-items-center mb-4 p-2 border rounded shadow-sm">
                                <strong class="flex-shrink-0" style="width: 150px;">Dunk:</strong>
                                <audio controls class="flex-grow-1 ms-2">
                                    <source src="../static/audio/dunk.mp3" type="audio/mpeg">
                                </audio>
                            </li>
                            <li class="d-flex align-items-center mb-4 p-2 border rounded shadow-sm">
                                <strong class="flex-shrink-0" style="width: 150px;">Free Throw:</strong>
                                <audio controls class="flex-grow-1 ms-2">
                                    <source src="../static/audio/freeTrhow.mp3" type="audio/mpeg">
                                </audio>
                            </li>
                            <li class="d-flex align-items-center mb-4 p-2 border rounded shadow-sm">
                                <strong class="flex-shrink-0" style="width: 150px;">Hoop:</strong>
                                <audio controls class="flex-grow-1 ms-2">
                                    <source src="../static/audio/hoop.mp3" type="audio/mpeg">
                                </audio>
                            </li>
                        </ul>
                    </div>
                    <div class="col-12 col-md-6">
                        <ul class="list-unstyled">
                            <li class="d-flex align-items-center mb-4 p-2 border rounded shadow-sm">
                                <strong class="flex-shrink-0" style="width: 150px;">Dribble:</strong>
                                <audio controls class="flex-grow-1 ms-2">
                                    <source src="../static/audio/dribble.mp3" type="audio/mpeg">
                                </audio>
                            </li>
                            <li class="d-flex align-items-center mb-4 p-2 border rounded shadow-sm">
                                <strong class="flex-shrink-0" style="width: 150px;">Three-pointer:</strong>
                                <audio controls class="flex-grow-1 ms-2">
                                    <source src="../static/audio/tiro3.mp3" type="audio/mpeg">
                                </audio>
                            </li>
                            <li class="d-flex align-items-center mb-4 p-2 border rounded shadow-sm">
                                <strong class="flex-shrink-0" style="width: 150px;">Free throw:</strong>
                                <audio controls class="flex-grow-1 ms-2">
                                    <source src="../static/audio/tirolibr.mp3" type="audio/mpeg">
                                </audio>
                            </li>
                            <li class="d-flex align-items-center mb-4 p-2 border rounded shadow-sm">
                                <strong class="flex-shrink-0" style="width: 150px;">Rebound:</strong>
                                <audio controls class="flex-grow-1 ms-2">
                                    <source src="../static/audio/rebote.mp3" type="audio/mpeg">
                                </audio>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>


<!--------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------->
        <!-- Volleyball Terms -->
        <div class="card my-4 shadow-lg">
            <!-- Título -->
            <div class="card-header text-center" style="background-color: var(--color1); color: white; font-size: 1.5rem;">
                Volleyball Terms
            </div>
            <!-- Contenido -->
            <div class="card-body">
                <!-- Sección de Imagen -->
                <div class="text-center mb-4">
                    <img src="../static/img/volleyball.jpg" alt="Volleyball Image" class="img-fluid rounded shadow" style="border: 1px solid #0000009b;">
                </div>
                <!-- Sección de Vocabulario -->
                <div class="row">
                    <div class="col-12 col-md-6">
                        <ul class="list-unstyled">
                            <li class="d-flex align-items-center mb-4 p-2 border rounded shadow-sm">
                                <strong class="flex-shrink-0" style="width: 150px;">Set point:</strong>
                                <audio controls class="flex-grow-1 ms-2">
                                    <source src="../static/audio/setpoint.mp3" type="audio/mpeg">
                                </audio>
                            </li>
                            <li class="d-flex align-items-center mb-4 p-2 border rounded shadow-sm">
                                <strong class="flex-shrink-0" style="width: 150px;">Libero:</strong>
                                <audio controls class="flex-grow-1 ms-2">
                                    <source src="../static/audio/libero.mp3" type="audio/mpeg">
                                </audio>
                            </li>
                            <li class="d-flex align-items-center mb-4 p-2 border rounded shadow-sm">
                                <strong class="flex-shrink-0" style="width: 150px;">Block:</strong>
                                <audio controls class="flex-grow-1 ms-2">
                                    <source src="../static/audio/block.mp3" type="audio/mpeg">
                                </audio>
                            </li>
                            <li class="d-flex align-items-center mb-4 p-2 border rounded shadow-sm">
                                <strong class="flex-shrink-0" style="width: 150px;">Serve:</strong>
                                <audio controls class="flex-grow-1 ms-2">
                                    <source src="../static/audio/serve.mp3" type="audio/mpeg">
                                </audio>
                            </li>
                        </ul>
                    </div>
                    <div class="col-12 col-md-6">
                        <ul class="list-unstyled">
                            <li class="d-flex align-items-center mb-4 p-2 border rounded shadow-sm">
                                <strong class="flex-shrink-0" style="width: 150px;">Rotation:</strong>
                                <audio controls class="flex-grow-1 ms-2">
                                    <source src="../static/audio/rotation.mp3" type="audio/mpeg">
                                </audio>
                            </li>
                            <li class="d-flex align-items-center mb-4 p-2 border rounded shadow-sm">
                                <strong class="flex-shrink-0" style="width: 150px;">Spike:</strong>
                                <audio controls class="flex-grow-1 ms-2">
                                    <source src="../static/audio/remate.mp3" type="audio/mpeg">
                                </audio>
                            </li>
                            <li class="d-flex align-items-center mb-4 p-2 border rounded shadow-sm">
                                <strong class="flex-shrink-0" style="width: 150px;">Block:</strong>
                                <audio controls class="flex-grow-1 ms-2">
                                    <source src="../static/audio/bloqueo.mp3" type="audio/mpeg">
                                </audio>
                            </li>
                            <li class="d-flex align-items-center mb-4 p-2 border rounded shadow-sm">
                                <strong class="flex-shrink-0" style="width: 150px;">Referee:</strong>
                                <audio controls class="flex-grow-1 ms-2">
                                    <source src="../static/audio/referee.mp3" type="audio/mpeg">
                                </audio>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>


<!--------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------->

        <!-- Athletics Terms -->
        <div class="card my-4 shadow-lg">
            <!-- Título -->
            <div class="card-header text-center" style="background-color: var(--color1); color: white; font-size: 1.5rem;">
                Athletics Terms
            </div>
            <!-- Contenido -->
            <div class="card-body">
                <!-- Sección de Imagen -->
                <div class="text-center mb-4">
                    <img src="../static/img/atletismo.jpg" alt="Athletics Image" class="img-fluid rounded shadow" style="border: 1px solid #0000009b;">
                </div>
                <!-- Sección de Vocabulario -->
                <div class="row">
                    <div class="col-12 col-md-6">
                        <ul class="list-unstyled">
                            <li class="d-flex align-items-center mb-4 p-2 border rounded shadow-sm">
                                <strong class="flex-shrink-0" style="width: 150px;">100 meters:</strong>
                                <audio controls class="flex-grow-1 ms-2">
                                    <source src="../static/audio/cienmetros.mp3" type="audio/mpeg">
                                </audio>
                            </li>
                            <li class="d-flex align-items-center mb-4 p-2 border rounded shadow-sm">
                                <strong class="flex-shrink-0" style="width: 150px;">Long jump:</strong>
                                <audio controls class="flex-grow-1 ms-2">
                                    <source src="../static/audio/longjump.mp3" type="audio/mpeg">
                                </audio>
                            </li>
                            <li class="d-flex align-items-center mb-4 p-2 border rounded shadow-sm">
                                <strong class="flex-shrink-0" style="width: 150px;">Shot put:</strong>
                                <audio controls class="flex-grow-1 ms-2">
                                    <source src="../static/audio/shotPut.mp3" type="audio/mpeg">
                                </audio>
                            </li>
                            <li class="d-flex align-items-center mb-4 p-2 border rounded shadow-sm">
                                <strong class="flex-shrink-0" style="width: 150px;">Relay race:</strong>
                                <audio controls class="flex-grow-1 ms-2">
                                    <source src="../static/audio/relay.mp3" type="audio/mpeg">
                                </audio>
                            </li>
                        </ul>
                    </div>
                    <div class="col-12 col-md-6">
                        <ul class="list-unstyled">
                            <li class="d-flex align-items-center mb-4 p-2 border rounded shadow-sm">
                                <strong class="flex-shrink-0" style="width: 150px;">Referee:</strong>
                                <audio controls class="flex-grow-1 ms-2">
                                    <source src="../static/audio/referee.mp3" type="audio/mpeg">
                                </audio>
                            </li>
                            <li class="d-flex align-items-center mb-4 p-2 border rounded shadow-sm">
                                <strong class="flex-shrink-0" style="width: 150px;">Sprint:</strong>
                                <audio controls class="flex-grow-1 ms-2">
                                    <source src="../static/audio/sprint.mp3" type="audio/mpeg">
                                </audio>
                            </li>
                            <li class="d-flex align-items-center mb-4 p-2 border rounded shadow-sm">
                                <strong class="flex-shrink-0" style="width: 150px;">Track:</strong>
                                <audio controls class="flex-grow-1 ms-2">
                                    <source src="../static/audio/truck.mp3" type="audio/mpeg">
                                </audio>
                            </li>
                            <li class="d-flex align-items-center mb-4 p-2 border rounded shadow-sm">
                                <strong class="flex-shrink-0" style="width: 150px;">Marathon:</strong>
                                <audio controls class="flex-grow-1 ms-2">
                                    <source src="../static/audio/marathon.mp3" type="audio/mpeg">
                                </audio>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

<!--------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------->

        <!-- Tennis Terms -->
        <div class="card my-4 shadow-lg">
            <!-- Título -->
            <div class="card-header text-center" style="background-color: var(--color1); color: white; font-size: 1.5rem;">
                Tennis Terms
            </div>
            <!-- Contenido -->
            <div class="card-body">
                <!-- Sección de Imagen -->
                <div class="text-center mb-4">
                    <img src="../static/img/tenniss.jpg" alt="Tennis Image" class="img-fluid rounded shadow" style="border: 1px solid #0000009b;">
                </div>
                <!-- Sección de Vocabulario -->
                <div class="row">
                    <div class="col-12 col-md-6">
                        <ul class="list-unstyled">
                            <li class="d-flex align-items-center mb-4 p-2 border rounded shadow-sm">
                                <strong class="flex-shrink-0" style="width: 150px;">Volley:</strong>
                                <audio controls class="flex-grow-1 ms-2">
                                    <source src="../static/audio/voley.mp3" type="audio/mpeg">
                                </audio>
                            </li>
                            <li class="d-flex align-items-center mb-4 p-2 border rounded shadow-sm">
                                <strong class="flex-shrink-0" style="width: 150px;">Media volley:</strong>
                                <audio controls class="flex-grow-1 ms-2">
                                    <source src="../static/audio/medVolley.mp3" type="audio/mpeg">
                                </audio>
                            </li>
                            <li class="d-flex align-items-center mb-4 p-2 border rounded shadow-sm">
                                <strong class="flex-shrink-0" style="width: 150px;">Smash:</strong>
                                <audio controls class="flex-grow-1 ms-2">
                                    <source src="../static/audio/smash.mp3" type="audio/mpeg">
                                </audio>
                            </li>
                            <li class="d-flex align-items-center mb-4 p-2 border rounded shadow-sm">
                                <strong class="flex-shrink-0" style="width: 150px;">Lob:</strong>
                                <audio controls class="flex-grow-1 ms-2">
                                    <source src="../static/audio/lob.mp3" type="audio/mpeg">
                                </audio>
                            </li>
                        </ul>
                    </div>
                    <div class="col-12 col-md-6">
                        <ul class="list-unstyled">
                            <li class="d-flex align-items-center mb-4 p-2 border rounded shadow-sm">
                                <strong class="flex-shrink-0" style="width: 150px;">Referee:</strong>
                                <audio controls class="flex-grow-1 ms-2">
                                    <source src="../static/audio/referee.mp3" type="audio/mpeg">
                                </audio>
                            </li>
                            <li class="d-flex align-items-center mb-4 p-2 border rounded shadow-sm">
                                <strong class="flex-shrink-0" style="width: 150px;">Deuce:</strong>
                                <audio controls class="flex-grow-1 ms-2">
                                    <source src="../static/audio/deuce.mp3" type="audio/mpeg">
                                </audio>
                            </li>
                            <li class="d-flex align-items-center mb-4 p-2 border rounded shadow-sm">
                                <strong class="flex-shrink-0" style="width: 150px;">Tie-break:</strong>
                                <audio controls class="flex-grow-1 ms-2">
                                    <source src="../static/audio/tieBreak.mp3" type="audio/mpeg">
                                </audio>
                            </li>
                            <li class="d-flex align-items-center mb-4 p-2 border rounded shadow-sm">
                                <strong class="flex-shrink-0" style="width: 150px;">Ace:</strong>
                                <audio controls class="flex-grow-1 ms-2">
                                    <source src="../static/audio/ace.mp3" type="audio/mpeg">
                                </audio>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>


    <!-- Footer -->
    <footer class="text-center py-4" style="background-color: var(--color1);">
        <p class="text-white m-0">© 2024 Sports Vocabulary - SENA</p>
    </footer>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>
</body>

</html>
