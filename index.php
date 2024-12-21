<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pintora Pinto</title>
    <link rel="stylesheet" href="styles/style.css">
    <link rel="stylesheet" href="styles/slide.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>


</head>

<body>
    <header class="header">
        <div class="header-top">
            <span></span>
            <div class="social-links">
                <a href="#">Facebook</a>
                <a href="#">Instagram</a>
                <a href="#">WhatsApp</a>
            </div>
        </div>
        <div class="header-main">
            <div class="logo">
                <img src="img/logo.png" alt="Pinceles y más - Desde 1953">
            </div>
            <div class="search-bar">
                <input type="text" placeholder="Buscar">
                <button>
                    <!-- SVG del ícono de lupa -->
                    <svg version="1.1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1024 1024" class="search-icon">
                        <path
                            d="M980.152 934.368l-189.747-189.747c60.293-73.196 90.614-163 90.552-252.58 0.061-101.755-38.953-203.848-116.603-281.498-77.629-77.67-179.732-116.664-281.446-116.603-101.765-0.061-203.848 38.932-281.477 116.603-77.65 77.629-116.664 179.743-116.623 281.467-0.041 101.755 38.973 203.848 116.623 281.436 77.629 77.64 179.722 116.654 281.477 116.593 89.569 0.061 179.395-30.249 252.58-90.501l189.737 189.757 54.927-54.927zM256.358 718.519c-62.669-62.659-93.839-144.394-93.86-226.509 0.020-82.094 31.191-163.85 93.86-226.54 62.669-62.638 144.425-93.809 226.55-93.839 82.084 0.031 163.84 31.201 226.509 93.839 62.638 62.659 93.809 144.445 93.829 226.57-0.020 82.094-31.191 163.84-93.829 226.478-62.669 62.628-144.404 93.798-226.509 93.829-82.125-0.020-163.881-31.191-226.55-93.829z">
                        </path>
                    </svg>
                </button>
            </div>
            <div class="user-options">
                <a href="views/login.php" class="account">
                    <i class="fas fa-user"></i>
                    <span>Mi cuenta</span>
                </a>
                <a href="#" class="cart">
                    <i class="fas fa-shopping-cart"></i>
                    <span>$0.00</span>
                </a>
            </div>
        </div>
        <nav class="menu">
            <a href="#">Pinceles</a>
            <a href="#">Accesorios</a>
            <a href="#">Bastidores</a>
            <a href="#">Caballetes y estuches</a>
            <a href="#">Pinturas</a>
            <a href="#">Dibujo</a>
            <a href="#">Grabado</a>
            <a href="#">Medios</a>
        </nav>
    </header>

    <div id="carouselExample" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="img/s2.jpg" class="d-block w-100" alt="Imagen 1">
            </div>
            <div class="carousel-item">
                <img src="img/s3.jpg" class="d-block w-100" alt="Imagen 2">
            </div>
            <div class="carousel-item">
                <img src="img/s4.jpg" class="d-block w-100" alt="Imagen 3">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Anterior</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Siguiente</span>
        </button>
    </div>

    <div class="button-container">
        <a href="views/productos.php?categoria=accesorios" class="button-item">
            <img src="img/ACCESORIOS.png" alt="Accesorios">
        </a>
        <a href="/productos?categoria=bastidores" class="button-item">
            <img src="img/BASTIDORES.png" alt="Bastidores">
        </a>
        <a href="/productos?categoria=caballetes" class="button-item">
            <img src="img/CABALLETES.png" alt="Caballetes">
        </a>
        <a href="/productos?categoria=dibujo" class="button-item">
            <img src="img/DIBUJO.png" alt="Dibujo">
        </a>
        <a href="/productos?categoria=grabado" class="button-item">
            <img src="img/GRABADO-Y-MODELAJE.png" alt="Grabado">
        </a>
        <a href="/productos?categoria=medios" class="button-item">
            <img src="img/MEDIOS-PARA-PINTAR.png" alt="Medios">
        </a>
        <a href="/productos?categoria=pinceles" class="button-item">
            <img src="img/PINCELES.png" alt="Pinceles">
        </a>
        <a href="/productos?categoria=pinturas" class="button-item">
            <img src="img/PINTURAS.png" alt="Pinturas">
        </a>
    </div>



    <script>
        const slides = document.querySelector('.slides');
        let currentIndex = 0;

        function moveSlide(direction) {
            const totalSlides = slides.children.length;
            currentIndex = (currentIndex + direction + totalSlides) % totalSlides;
            slides.style.transform = `translateX(-${currentIndex * 100}%)`;
        }
    </script>
</body>

</html>