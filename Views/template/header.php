<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Ogani Template">
    <meta name="keywords" content="Ogani, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="<?php echo BASE_URL; ?>public/img/logo.png">

    <title>ChemiSV</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200;300;400;600;900&display=swap" rel="stylesheet">

    <!-- Css Styles -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <link rel="stylesheet" href="<?php echo BASE_URL; ?>public/css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="<?php echo BASE_URL; ?>public/css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="<?php echo BASE_URL; ?>public/css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="<?php echo BASE_URL; ?>public/css/nice-select.css" type="text/css">
    <link rel="stylesheet" href="<?php echo BASE_URL; ?>public/css/jquery-ui.min.css" type="text/css">
    <link rel="stylesheet" href="<?php echo BASE_URL; ?>public/css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="<?php echo BASE_URL; ?>public/css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" type="text/css" href="<?php echo BASE_URL; ?>public/css/toastify.min.css" />
    <link href="<?php echo BASE_URL . 'public/admin/DataTables/datatables.min.css'; ?>" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="<?php echo BASE_URL; ?>public/css/style.css" type="text/css">
    <link rel="stylesheet" href="<?php echo BASE_URL; ?>public/css/login.css" type="text/css">
    
    <style>
        .carousel-item {
            height: 500px;
        }

        .carousel-item img {
            height: 100%;
            width: 100%;
            object-fit: contain;
        }

        @media (max-width: 768px) {
            .carousel-item {
                height: 300px;
            }
        }

        .carousel-control-prev-icon,
        .carousel-control-next-icon {
            background-color: transparent;
        }

        .carousel-control-prev::before,
        .carousel-control-next::before {
            font-family: "Font Awesome 5 Free";
            font-weight: 900;
            font-size: 30px;
            color: #ff0000;
        }

        .carousel-control-prev::before {
            content: '\f053';
        }

        .carousel-control-next::before {
            content: '\f054';
        }
    </style>
</head>

<body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

    <!-- Humberger Begin -->
    <div class="humberger__menu__overlay"></div>
    <div class="humberger__menu__wrapper">
        <div class="humberger__menu__logo">
            <a href="#"><img src="<?php echo BASE_URL; ?>public/img/logo.png" alt="" width="50"></a>
        </div>
        <div class="humberger__menu__cart">
            <ul>
                <!-- <li><a href="#"><i class="fa fa-heart"></i> <span>1</span></a></li> -->
                <li><a href="<?php echo BASE_URL . 'principal/carrito'; ?>"><i class="fa fa-shopping-bag"></i> <span id="numerito">0</span></a></li>
            </ul>
            <!-- <div class="header__cart__price">item: <span>$150.00</span></div> -->
        </div>
        <div class="humberger__menu__widget">
            <div class="header__top__right__auth">
                <?php if (empty($_SESSION['id_usuario'])) { ?>
                    <a href="<?php echo BASE_URL . 'principal/login'; ?>"><i class="fa fa-user"></i> Login</a>
                <?php } else {  ?>
                    <a href="<?php echo BASE_URL . 'profile'; ?>"><i class="fa fa-user"></i> Tu cuenta</a>
                <?php } ?>
            </div>
        </div>
        <nav class="humberger__menu__nav mobile-menu">
            <ul>
                <li class="active"><a href="<?php echo BASE_URL; ?>">Inicio</a></li>
                <li><a href="<?php echo BASE_URL . 'principal/productos'; ?>">Productos</a></li>
                <li><a href="<?php echo BASE_URL . 'principal/contactos'; ?>">Contactos</a></li>
            </ul>
        </nav>
        <div id="mobile-menu-wrap"></div>
        <div class="header__top__right__social">
            <a href="#"><i class="fa fa-facebook"></i></a>
            <a href="#"><i class="fa fa-twitter"></i></a>
            
        </div>
        <div class="humberger__menu__contact">
            <ul>
                <li><i class="fa fa-envelope"></i> <?php echo $data['negocio']['correo']; ?></li>
                <li>Tienda online</li>
            </ul>
        </div>
    </div>
    <!-- Humberger End -->

    <!-- Header Section Begin -->
    <header class="header">
        <div class="header__top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <div class="header__top__left">
                            <ul>
                                <li><i class="fa fa-envelope"></i> <?php echo $data['negocio']['correo']; ?></li>
                                <li>ChemiSV</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="header__top__right">
                            <div class="header__top__right__social">
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                
                            </div>
                            <div class="header__top__right__auth">
                                <?php if (empty($_SESSION['id_usuario'])) { ?>
                                    <a href="<?php echo BASE_URL . 'principal/login'; ?>"><i class="fa fa-user"></i> Iniciar sesión</a>
                                <?php } else {  ?>
                                    <a href="<?php echo BASE_URL . 'profile'; ?>"><i class="fa fa-user"></i> Tu cuenta</a>
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="header__logo">
                        <a href="<?php echo BASE_URL; ?>"><img src="<?php echo BASE_URL; ?>public/img/logo.png" alt="LOGO" width="50"></a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <nav class="header__menu">
                        <ul>
                            <li class="active"><a href="<?php echo BASE_URL; ?>">Inicio</a></li>
                            <li><a href="<?php echo BASE_URL . 'principal/productos'; ?>">Productos</a></li>
                            <li><a href="<?php echo BASE_URL . 'principal/contactos'; ?>">Contactos</a></li>
                        </ul>
                    </nav>
                </div>
                <div class="col-lg-3">
                    <div class="header__cart">
                        <ul>
                            <!-- <li><a href="#"><i class="fa fa-heart"></i> <span>1</span></a></li> -->
                            <li><a href="<?php echo BASE_URL . 'principal/carrito'; ?>"><i class="fa fa-shopping-bag"></i> <span id="numerito1">0</span></a></li>
                        </ul>
                        <!-- <div class="header__cart__price">item: <span>$150.00</span></div> -->
                    </div>
                </div>
            </div>
            <div class="humberger__open">
                <i class="fa fa-bars"></i>
            </div>
        </div>
    </header>
    <!-- Header Section End -->
    <!-- Hero Section Begin -->
    <section class="hero <?php echo ($data['title'] == 'Tu carrito') ? 'hero-normal' : ''; ?>">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="hero__categories">
                        <div class="hero__categories__all">
                            <i class="fa fa-bars"></i>
                            <span>Todas las categorias</span>
                        </div>
                        <ul>
                            <?php foreach ($data['categorias'] as $categoria) { ?>
                                <li><a href="<?php echo BASE_URL . 'principal/categoria/' . $categoria['categoria']; ?>"><?php echo $categoria['categoria']; ?></a></li>
                            <?php } ?>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-9">
                    <div class="hero__search">
                        <div class="hero__search__form">
                            <form action="<?php echo BASE_URL . 'principal/productos'; ?>" autocomplete="off">
                                <input type="text" name="search" placeholder="Que estas buscando?">
                                <button type="submit" class="site-btn">BUSCAR</button>
                            </form>
                        </div>
                        <div class="hero__search__phone">
                            <div class="hero__search__phone__icon">
                                <i class="fa fa-phone"></i>
                            </div>
                            <div class="hero__search__phone__text">
                                <h5><?php echo $data['negocio']['telefono']; ?></h5>
                                <span><?php echo $data['negocio']['direccion']; ?></span>
                            </div>
                        </div>
                    </div>
                    <?php if ($data['title'] == 'Pagina Principal') { ?>
                        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                            <div class="carousel-indicators">
                                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                            </div>
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img src="public/img/categorias/Categoria_556.png" class="d-block w-100" alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src="public/img/categorias/Categoria_553.png" class="d-block w-100" alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src="public/img/categorias/Categoria_560.png" class="d-block w-100" alt="...">
                                </div>
                            </div>
                            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                            </button>
                        </div>
            
                        <script>
                            var myCarousel = document.querySelector('#carouselExampleIndicators');
                            var carousel = new bootstrap.Carousel(myCarousel, {
                                interval: 3000, 
                                wrap: true
                            });
                        </script>
                    <?php } ?>
                </div>
            </div>
        </div>
    </section>
    <!-- Hero Section End -->
</body>
</html>
