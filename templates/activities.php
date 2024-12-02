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
    <link rel="stylesheet" href="../static/css/activites.css">
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
                        <a class="nav-link" href="../templates/vocabulary.php">Vocabulary</a>
                    </li>
                </ul>
                <div class="d-flex ms-3">
                    <a class="btn btn-primary me-2" href="../templates/registration/login.php">Login</a>
                    <a class="btn btn-primary" href="../templates/registration/register.php">Register</a>
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


    <div class="container">
        <div class="row justify-content-center" id="cardContainer">
            <!-- Card Example 1 -->
            <div class="col-lg-3 col-md-6 col-sm-12 card album">
                <div class="card shadow-sm">
                    <iframe allowfullscreen width="100%" height="200" src="https://es.educaplay.com/recursos-educativos/549648-los_deportes_en_ingles.html" style="pointer-events: none; border: none;"></iframe>
                    <div class="card-body">
                        <p class="card-text">Los deportes en inglés</p>
                        <div class="d-flex justify-content-between align-items-center">
                            <a href="https://es.educaplay.com/recursos-educativos/549648-los_deportes_en_ingles.html" target="_blank" class="btn btn-sm btn-primary">Start the game</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Card Example 2 -->
            <div class="col-lg-3 col-md-6 col-sm-12 card album">
                <div class="card shadow-sm">
                    <iframe allowfullscreen width="100%" height="200" src="https://es.educaplay.com/recursos-educativos/2558491-sports.html" style="pointer-events: none; border: none;"></iframe>
                    <div class="card-body">
                        <p class="card-text">Sports</p>
                        <div class="d-flex justify-content-between align-items-center">
                            <a href="https://es.educaplay.com/recursos-educativos/2558491-sports.html" target="_blank" class="btn btn-sm btn-primary">Start the game</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Card Example 3 -->
            <div class="col-lg-3 col-md-6 col-sm-12 card album">
                <div class="card shadow-sm">
                    <iframe allowfullscreen width="100%" height="200" src="https://es.educaplay.com/recursos-educativos/12830269-sports_and_hobbies.html" style="pointer-events: none; border: none;"></iframe>
                    <div class="card-body">
                        <p class="card-text">Sports and Hobbies</p>
                        <div class="d-flex justify-content-between align-items-center">
                            <a href="https://es.educaplay.com/recursos-educativos/12830269-sports_and_hobbies.html" target="_blank" class="btn btn-sm btn-primary">Start the game</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Card Example 4 -->
            <div class="col-lg-3 col-md-6 col-sm-12 card album">
                <div class="card shadow-sm">
                    <iframe allowfullscreen width="100%" height="200" src="https://es.educaplay.com/recursos-educativos/3160587-sports.html" style="pointer-events: none; border: none;"></iframe>
                    <div class="card-body">
                        <p class="card-text">Sports</p>
                        <div class="d-flex justify-content-between align-items-center">
                            <a href="https://es.educaplay.com/recursos-educativos/3160587-sports.html" target="_blank" class="btn btn-sm btn-primary">Start the game</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Card Example 5 -->
            <div class="col-lg-3 col-md-6 col-sm-12 card album">
                <div class="card shadow-sm">
                    <iframe allowfullscreen width="100%" height="200" src="https://es.educaplay.com/recursos-educativos/3160587-sports.html" style="pointer-events: none; border: none;"></iframe>
                    <div class="card-body">
                        <p class="card-text">Sports</p>
                        <div class="d-flex justify-content-between align-items-center">
                            <a href="https://es.educaplay.com/recursos-educativos/3160587-sports.html" target="_blank" class="btn btn-sm btn-primary">Start the game</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Card Example 6 -->
            <div class="col-lg-3 col-md-6 col-sm-12 card album">
                <div class="card shadow-sm">
                    <iframe allowfullscreen width="100%" height="200" src="https://es.educaplay.com/recursos-educativos/3160587-sports.html" style="pointer-events: none; border: none;"></iframe>
                    <div class="card-body">
                        <p class="card-text">Sports</p>
                        <div class="d-flex justify-content-between align-items-center">
                            <a href="https://es.educaplay.com/recursos-educativos/3160587-sports.html" target="_blank" class="btn btn-sm btn-primary">Start the game</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Card Example 7 -->
            <div class="col-lg-3 col-md-6 col-sm-12 card album">
                <div class="card shadow-sm">
                    <iframe allowfullscreen width="100%" height="200" src="https://es.educaplay.com/recursos-educativos/3160587-sports.html" style="pointer-events: none; border: none;"></iframe>
                    <div class="card-body">
                        <p class="card-text">Sports</p>
                        <div class="d-flex justify-content-between align-items-center">
                            <a href="https://es.educaplay.com/recursos-educativos/3160587-sports.html" target="_blank" class="btn btn-sm btn-primary">Start the game</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Card Example 8 -->
            <div class="col-lg-3 col-md-6 col-sm-12 card album">
                <div class="card shadow-sm">
                    <iframe allowfullscreen width="100%" height="200" src="https://es.educaplay.com/recursos-educativos/3160587-sports.html" style="pointer-events: none; border: none;"></iframe>
                    <div class="card-body">
                        <p class="card-text">Sports</p>
                        <div class="d-flex justify-content-between align-items-center">
                            <a href="https://es.educaplay.com/recursos-educativos/3160587-sports.html" target="_blank" class="btn btn-sm btn-primary">Start the game</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Card Example 9 -->
            <div class="col-lg-3 col-md-6 col-sm-12 card album">
                <div class="card shadow-sm">
                    <iframe allowfullscreen width="100%" height="200" src="https://es.educaplay.com/recursos-educativos/3160587-sports.html" style="pointer-events: none; border: none;"></iframe>
                    <div class="card-body">
                        <p class="card-text">Sports</p>
                        <div class="d-flex justify-content-between align-items-center">
                            <a href="https://es.educaplay.com/recursos-educativos/3160587-sports.html" target="_blank" class="btn btn-sm btn-primary">Start the game</a>
                        </div>
                    </div>
                </div>
            </div>

    <!-- Add Card Section -->
    <div class="container text-center my-5">
        <h2>Add New Card</h2>
        <input type="text" id="cardTitle" placeholder="Card Title" class="form-control my-2" maxlength="50" required>
        <input type="text" id="cardDescription" placeholder="Description" class="form-control my-2" maxlength="150" required>
        <input type="url" id="cardLink" placeholder="Link" class="form-control my-2" required>
        <button class="btn btn-primary" id="addCardBtn">Add Card</button>
    </div>

    <!-- Footer -->
    <footer class="bg-color1 text-white py-3">
        <div class="container">
            <p>&copy; 2024 SENA Sports Training. All rights reserved.</p>
        </div>
    </footer>

    <!-- JavaScript files -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
