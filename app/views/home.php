<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FutbolConnect</title>

    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

    <!-- UIkit CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/uikit@3.17.9/dist/css/uikit.min.css" />

    <!-- Tus estilos -->
    <link rel="stylesheet" href="/public/css/style.css">
</head>

<body>

    <!-- UIkit Position Top -->
    <div class="uk-position-top">
        <!-- NAVBAR Bootstrap -->
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark shadow-sm">
            <div class="container">
                <a class="navbar-brand fw-bold" href="#home">
                    <i class="bi bi-trophy-fill"></i> FutbolConnect
                </a>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item"><a class="nav-link" href="#home">Inicio</a></li>
                        <li class="nav-item"><a class="nav-link" href="#about">Sobre nosotros</a></li>
                        <li class="nav-item"><a class="nav-link" href="#torneos">Torneos</a></li>
                        <li class="nav-item"><a class="nav-link" href="#contacto">Contacto</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>

    <!-- EJEMPLO DE SECCIONES (puedes eliminarlas luego) -->
    <section id="home" class="uk-section uk-section-primary uk-light">
        <div class="uk-container">
            <h1 class="text-center">Bienvenido a FutbolConnect</h1>
            <p class="text-center">Tu conexión a todos los torneos locales.</p>
        </div>
    </section>

    <section id="about" class="uk-section">
        <div class="uk-container">
            <h2>Sobre nosotros</h2>
            <p>Esto lo editas después.</p>
        </div>
    </section>

    <section id="torneos" class="uk-section uk-section-muted">
        <div class="uk-container">
            <h2>Torneos</h2>
            <p>Lista de torneos aquí.</p>
        </div>
    </section>

    <section id="contacto" class="uk-section">
        <div class="uk-container">
            <h2>Contacto</h2>
            <p>Formulario o enlaces.</p>
        </div>
    </section>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

    <!-- UIkit JS -->
    <script src="https://cdn.jsdelivr.net/npm/uikit@3.17.9/dist/js/uikit.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/uikit@3.17.9/dist/js/uikit-icons.min.js"></script>

</body>
</html>
