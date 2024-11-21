<!DOCTYPE html>
<html>
<head>
    <title>FRAGMENTO</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Venta de ropa Y2K y Vintage">
    <link rel="icon" type="image/png" href="../img/LOGO.png">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <link rel="stylesheet" href="../font-awesome/css/font-awesome.min.css">

    <!-- Vinculación de la hoja de estilos externa -->
    <link rel="stylesheet" href="../css/styles.css">

    <!-- OPEN GRAPH -->
    <meta property="og:title" content="FRAGMENTO">
    <meta property="og:description" content="Tienda de Ropa">

    <script>
        function configurarMenu(opc) {
            if (opc == 1) {
                $(".menu").css("visibility", "visible");
            } else {
                $(".menu").css("visibility", "hidden");
            }
        }
    </script>

</head>

<body>
    <header>
        <!-- Logo -->
        <div class="logo-header">
            <img src="../img/fragmento_header.png" alt="Logotipo de FRAGMENTO" title="Logotipo de FRAGMENTO" class="logo">
        </div>
        <!-- header -->
        <div class="header-container">
            <div class="div-tittle">
                <h1 class="header-tittle">FRAGMENTO</h1>
                <a href="index.php">
                    <img src="../img/LOGO.png" class="logo2">
                </a>
            </div>
            <div class="div-nav">
                <nav class="header-nav">
                    <a href="#follow">FOLLOW</a>
                    <a href="#about">ABOUT</a>
                    <a href="register.html">REGISTER</a>
                </nav>
            </div>
            <!-- Menú -->
            <div class="div-menu">
                <i class="fa fa-bars" aria-hidden="true" onclick="configurarMenu(1)"></i>
                <nav class="menu">
                    <a>NEW</a>
                    <a>SPORTS</a>
                    <a>GOTHIC</a>
                    <a>PUNK</a>
                    <a>STREETWEAR</a>
                    <a>RETRO</a>
                    <i class="fa fa-close" aria-hidden="true" id="close" onclick="configurarMenu(0)"></i>
                </nav>
            </div>
        </div>
        <!-- Filtros -->
        <div>
            <nav class="lista-filtros">
                <a>NEW</a>
                <a><strong>|</strong>
                    <a>SECOND HAND</a>
            </nav>
        </div>
    </header>

    <main>
        <div class="clothing">
            <div class="container-items">
                <div class="item">
                    <figure>
                        <img src="../img/hoddies.png" alt="HODDIE">
                        <div class="info-item">
                            <h2>HODDIE</h2>
                        </div>
                    </figure>
                </div>
                <div class="item">
                    <figure>
                        <img src="../img/polar.jpg" alt="POLAR">
                        <div class="info-item">
                            <h2>POLAR</h2>
                        </div>
                    </figure>
                </div>
                <div class="item">
                    <figure>
                        <img src="../img/jacket.png" alt="JACKET">
                        <div class="info-item">
                            <h2>JACKET</h2>
                        </div>
                    </figure>
                </div>
                <div class="item">
                    <figure>
                        <img src="../img/OVERALL.jpg" alt="OVERALL">
                        <div class="info-item">
                            <h2>OVERALL</h2>
                        </div>
                    </figure>
                </div>
                <div class="item">
                    <figure>
                        <img src="../img/t-shirt.jpg" alt="T-SHIRT">
                        <div class="info-item">
                            <h2>T-SHIRT</h2>
                        </div>
                    </figure>
                </div>
                <div class="item">
                    <figure>
                        <img src="../img/pants.jpg" alt="PANTS">
                        <div class="info-item">
                            <h2>PANTS</h2>
                        </div>
                    </figure>
                </div>
                <div class="item">
                    <figure>
                        <img src="../img/tracksuites.jpg" alt="TRACKSUIT">
                        <div class="info-item">
                            <h2>TRACKSUIT</h2>
                        </div>
                    </figure>
                </div>
                <div class="item">
                    <figure>
                        <img src="../img/accessories.jpg" alt="ACCESSORIES">
                        <div class="info-item">
                            <h2>ACCESSORIES</h2>
                        </div>
                    </figure>
                </div>
            </div>
        </div>
    </main>
    <div class="follow" id="follow">
        <h2 class="follow-title">FOLLOW</h2>
        <div class="follow-links">
            <a href="https://www.instagram.com/fraggmentto/" target="_blank"
                title="Enlace a la página de Instagram de Fragmento">Instagram</a>
            <a href="https://www.facebook.com/profile.php?id=61565014289189&sk=about" target="_blank"
                title="Enlace a la página de Facebook de Fragmento">Facebook</a>
        </div>
    </div>
    <div class="about" id="about">
        <h2 class="about-title">NOSOTROS</h2>
        <p>Somos una empresa de moda y diseño de ropa, que nos ofrece ropa de moda y de moda para que puedas disfrutar
            de tus vestidos de moda y de moda.</p>
    </div>
    <section class="opinions">
        <h2>REGISTRO DE PRENDAS</h2>
        <a href="../crud_clothes.php">REGISTRAR PRENDAS</a>
    </section>
    <footer>
        <h2>Fragmento</h2>
        <p>Fragmento 2024 © </p>
        <p>Todos los derechos reservados</p>
    </footer>
</body>

</html>