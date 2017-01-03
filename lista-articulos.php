<!DOCTYPE html>
<html dir="ltr" lang="en-US">
    <head>
        <meta http-equiv="content-type" content="text/html; charset=utf-8">
        <link href='http://fonts.googleapis.com/css?family=Dosis:400,500,700' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700' rel='stylesheet' type='text/css'>
        <link rel="icon" type="image/png" href="img/favicon.ico">
        <link rel="stylesheet" href="css\bootstrap.min.css" type="text/css">
        <link rel="stylesheet" href="css\plugin.css" type="text/css">
        <link rel="stylesheet" href="css\style.css" type="text/css">
        <link rel="stylesheet" href="css\responsive.css" type="text/css">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <script type="text/javascript" src="js\jquery.js"></script>
        <title>Colegio Privado, Hans Christian Andersen - Villa El Salvador</title>
        <meta name="author" content="Anthony Nuñez Chileno Francis">
        <meta name="description" content="Nuestro Centro educativo se encarga de cuidar y guiar a los estudiantes con unas buena educación">
        <meta name="keywords" content="Colegio Lima Perú niños guarderia">
    </head>
    <body>
        <div id="main-wrapper" class="clearfix">
            <header id="header" class="site-header clearfix">
                <div class="container">
                    <div class="row">
                        <div class="logo col-md-3">
                            <a href="index.html"><img src="img/logo.png" alt="Kindergarten Logo"></a>
                        </div>
                        <div class="navigation col-md-9 text-right">
                            <div id="sb-search" class="sb-search">
                                <form>
                                    <input class="sb-search-input" placeholder="Enter your search term..." type="search" value="" name="search" id="search">
                                    <input class="sb-search-submit" type="submit" value="">
                                    <span class="sb-icon-search"><i class="fa fa-search"></i></span>
                                </form>
                            </div>
                            <div class="mobile-menu">
                                <button id="slide-buttons" class="icon icon-navicon-round"></button>
                            </div>

                            <nav id="c-menu--slide-right" class="c-menu c-menu--slide-right">
                                <button class="c-menu__close icon icon-remove-delete"></button>
                                <div class="logo-menu-right text-center">
                                    <img src="img\logo-white.png" alt="">
                                </div>
                                <ul class="menus-mobile">
                                    <li><a href="index.html">Inicio</a></li>
                                    <li class="has-child">
                                        <a href="#">Páginas</a>
                                        <ul class="child">
                                           <li><a href="reseña.html">Reseña historica</a></li>
                                           <li><a href="misión.html">Misión y visión</a></li>
                                           <li><a href="admision.html">Admisión</a></li>
                                           <li><a href="galeria.html">Galeria</a></li>
                                           <li><a href="menu.html">Menú escolar</a></li>
                                        </ul>
                                    </li>
                                    <li class="has-child">
                                        <a href="classes.html">Niveles</a>
                                        <ul class="child">
                                           <li><a href="lista-nivel.html">Inicial</a></li>
                                           <li><a href="lista-nivel.html">Primaria</a></li>
                                           <li><a href="lista-nivel.html">Secundaria</a></li>
                                        </ul>
                                    </li>
                                    <li class="has-child">
                                        <a href="classes.html">Anuncios</a>
                                        <ul class="child">
                                           <li><a href="lista-articulos.html">Articulos</a></li>
                                           <li><a href="lista-comunicados.html">Comunicados</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="nosotros.html">Nosotros</a></li>
                                    <li><a href="contacto.html">Contacto</a></li>
                                </ul>
                            </nav>
                            <div id="slide-overlay" class="slide-overlay"></div>
                            <nav id="main-menu" class="menu">
                                <ul id="menu-top-menu" class="menus">
                                    <li class="active"><a href="index.html">Inicio</a></li>
                                    <li class="has-child">
                                        <a href="#">Páginas</a>
                                        <ul class="child">
                                           <li><a href="reseña.html">Reseña Historica</a></li>
                                           <li><a href="misión.html">Misión y visión</a></li>
                                           <li><a href="admision.html">Admisión</a></li>
                                           <li><a href="galeria.html">Galeria</a></li>
                                           <li><a href="menu.html">Menú escolar</a></li>
                                        </ul>
                                    </li>
                                    <li class="has-child">
                                        <a href="classes.html">Niveles</a>
                                        <ul class="child">
                                           <li><a href="lista-nivel.html">Inicial</a></li>
                                           <li><a href="lista-nivel.html">Primaria</a></li>
                                           <li><a href="lista-nivel.html">Secundaria</a></li>
                                        </ul>
                                    </li>
                                    
                                    <li class="has-child">
                                        <a href="blog.html">Anuncios</a>
                                        <ul class="child">
                                           <li><a href="lista-articulos.html">Articulos</a></li>
                                           <li><a href="lista-comunicados.html">Comunicados</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="nosotros.html">Nosotros</a></li>
                                    <li><a href="contacto.html">Contacto</a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </header>
            <!-- HEADER END -->


            <!-- CONTENT START
            ============================================= -->
            <section id="content" class="single-wrapper">
                <!-- Page Title -->
                <div class="grey-background wow fadeIn">
                    <div class="container">
                        <div class="heading-block page-title wow fadeInUp">
                            <h1>Articulos</h1>
                        </div>
                    </div>
                </div>
                <!-- BLOG START
                ============================================= -->
                <div class="blog">
                    <div class="container">
                        <div class="row">

                            <!-- BLOG LOOP START
                            ============================================= -->
                            <div class="blog-post col-md-8 wow fadeIn">
                                <?php $articulos = new WP_Query(array(
                                    'post_type' =>  'post'
                                ));
                                if ($articulos->have_posts()) {
                                    while($articulos->have_posts()) { the_post(); ?>
                                <article class="post-item">
                                    <div class="post-image">
                                        <a href="articulo.html">
                                            <img src="img\blog\blog-img-1.jpg" alt="">
                                            <div class="overlay dark"></div>
                                            <span><i class="fa fa-plus"></i></span>
                                        </a>
                                    </div>
                                    <div class="post-content">
                                        <div class="heading-block">
                                            <a href="articulo.html"><h3>Titulo de articulo 1</h3></a>
                                            <div class="post-meta">
                                                <span class="date">02 August 2015</span>/<span class="author">akmanda</span>/<span class="comments">3 comentarios</span>
                                            </div>
                                        </div>
                                        <div class="excerpt">
                                            <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis prae sentium voluptatum dele niti atque crupti quos dolores et quas. prae sentium voluptatum deleniti atque crupti quos dolores et quas.At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis prae sentium voluptatum dele niti atque crupti quos dolores et quas. prae sentium voluptatum deleniti atque crupti quos dolores et quas...</p>
                                        </div>
                                        <div class="button-normal green">
                                            <a href="articulo.html" class="no-margin-bottom">Leer Más</a>
                                        </div>
                                    </div>
                                </article>
                                <?php 
                                    }
                                } ?>

                            <ul class="pagination">
                                <li><a href="#">1</a></li>
                                <li class="active"><a href="#">2</a></li>
                                <li><a href="#">3</a></li>
                                <li><a href="#">4</a></li>
                                <li><a href="#">5</a></li>
                            </ul>
                            </div>
                            <!-- BLOG LOOP END -->

                            <!-- SIDEBAR START
                            ============================================= -->
                            <div class="sidebar col-md-4 wow fadeIn">
                                <!-- Recent Post Start -->
                                <div class="sidebar-widget recent-post">
                                    <div class="heading-block">
                                        <h4>Articulos</h4>
                                    </div>

                                    <div class="post-item">
                                        <a href="single-post.html">
                                            <div class="post-thumb">
                                                <img src="img\recent-post-thumb1.jpg" alt="">
                                                <div class="overlay dark">
                                                    <span><i class="fa fa-plus"></i></span>
                                                </div>
                                            </div>
                                        </a>
                                        <div class="post-content">
                                            <a href="single-post.html">
                                                <h4>titulo 1</h4>
                                            </a>
                                            <p>Phasellus et nisl tellus. Etiam facilisis eu nisi scelerisque faucibus...</p>
                                            <div class="meta">
                                                <span class="date">02 August, 2015</span>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="post-item">
                                        <a href="single-post.html">
                                            <div class="post-thumb">
                                                <img src="img\recent-post-thumb2.jpg" alt="">
                                                <div class="overlay dark">
                                                    <span><i class="fa fa-plus"></i></span>
                                                </div>
                                            </div>
                                        </a>
                                        <div class="post-content">
                                            <a href="single-post.html">
                                                <h4>titulo 2</h4>
                                            </a>
                                            <p>Phasellus et nisl tellus. Etiam facilisis eu nisi scelerisque faucibus...</p>
                                            <div class="meta">
                                                <span class="date">02 August, 2015</span>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="post-item">
                                        <a href="single-post.html">
                                            <div class="post-thumb">
                                                <img src="img\recent-post-thumb3.jpg" alt="">
                                                <div class="overlay dark">
                                                    <span><i class="fa fa-plus"></i></span>
                                                </div>
                                            </div>
                                        </a>
                                        <div class="post-content">
                                            <a href="single-post.html">
                                                <h4>titulo 3</h4>
                                            </a>
                                            <p>Phasellus et nisl tellus. Etiam facilisis eu nisi scelerisque faucibus...</p>
                                            <div class="meta">
                                                <span class="date">02 August, 2015</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Recent Post End -->
                            </div>
                            <!-- SIDEBAR END -->

                                 <!-- SIDEBAR START
                            ============================================= -->
                            <div class="sidebar col-md-4 wow fadeIn">
                                <!-- Recent Post Start -->
                                <div class="sidebar-widget recent-post">
                                    <div class="heading-block">
                                        <h4>Comunicados</h4>
                                    </div>

                                    <div class="post-item">
                                        <a href="single-post.html">
                                            <div class="post-thumb">
                                                <img src="img\recent-post-thumb1.jpg" alt="">
                                                <div class="overlay dark">
                                                    <span><i class="fa fa-plus"></i></span>
                                                </div>
                                            </div>
                                        </a>
                                        <div class="post-content">
                                            <a href="single-post.html">
                                                <h4>titulo 1</h4>
                                            </a>
                                            <p>Phasellus et nisl tellus. Etiam facilisis eu nisi scelerisque faucibus...</p>
                                            <div class="meta">
                                                <span class="date">02 August, 2015</span>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="post-item">
                                        <a href="single-post.html">
                                            <div class="post-thumb">
                                                <img src="img\recent-post-thumb2.jpg" alt="">
                                                <div class="overlay dark">
                                                    <span><i class="fa fa-plus"></i></span>
                                                </div>
                                            </div>
                                        </a>
                                        <div class="post-content">
                                            <a href="single-post.html">
                                                <h4>titulo 2</h4>
                                            </a>
                                            <p>Phasellus et nisl tellus. Etiam facilisis eu nisi scelerisque faucibus...</p>
                                            <div class="meta">
                                                <span class="date">02 August, 2015</span>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="post-item">
                                        <a href="single-post.html">
                                            <div class="post-thumb">
                                                <img src="img\recent-post-thumb3.jpg" alt="">
                                                <div class="overlay dark">
                                                    <span><i class="fa fa-plus"></i></span>
                                                </div>
                                            </div>
                                        </a>
                                        <div class="post-content">
                                            <a href="single-post.html">
                                                <h4>titulo 3</h4>
                                            </a>
                                            <p>Phasellus et nisl tellus. Etiam facilisis eu nisi scelerisque faucibus...</p>
                                            <div class="meta">
                                                <span class="date">02 August, 2015</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Recent Post End -->
                            </div>
                            <!-- SIDEBAR END -->

                        </div>
                    </div>
                </div>
                <!-- BLOOG END -->

            </section>
            <!-- CONTENT END -->

           <!-- FOOTER START
            ============================================= -->
            <footer id="footer">
                <div class="container">
                    <div class="row">
                        <div class="widget-footer col-md-3 wow fadeIn">
                            <div class="short-desc">
                                <div class="logo-footer">
                                    <img src="img/logo.png">
                                </div>
                                <p class="text-justify">Durante  los 22 años de funcionamiento, el Colegio ha alcanzado muchos logros académicos, cívico-patrióticos y de participación con la Comunidad de Villa El Salvador, así como un Convenio Internacional de Intercambio Cultural, firmado el 14 de Septiembre del 2001, entre el Colegio y la Universidad Estatal “Yaroslav El Sabio” de Novgorod.</p>
                            </div>
                        </div>
                        <div class="widget-footer col-md-3 wow fadeIn">
                            <div class="recent-post">
                                <h4 class="title">Articulos</h4>
                                <div class="footer-content">
                                    <div class="post-item">
                                        <a href="single-post.html">
                                            <div class="post-thumb">
                                                <img src="img\recent-post-thumb1.jpg">
                                                <div class="overlay dark">
                                                    <span><i class="fa fa-plus"></i></span>
                                                </div>
                                            </div>
                                        </a>
                                        <div class="post-content">
                                            <a href="single-post.html">
                                                <h4>titulo 1</h4>
                                            </a>
                                            <p>Phasellus et nisl tellus. Etiam facilisis eu nisi scelerisque faucibus...</p>
                                            <div class="meta">
                                                <span class="date">24 de agosto, 2017</span>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="post-item">
                                        <a href="single-post.html">
                                            <div class="post-thumb">
                                                <img src="img\recent-post-thumb2.jpg">
                                                <div class="overlay dark">
                                                    <span><i class="fa fa-plus"></i></span>
                                                </div>
                                            </div>
                                        </a>
                                        <div class="post-content">
                                            <a href="single-post.html">
                                                <h4>titulo 2</h4>
                                            </a>
                                            <p>Phasellus et nisl tellus. Etiam facilisis eu nisi scelerisque faucibus...</p>
                                            <div class="meta">
                                                <span class="date">23 de setiembre, 2017</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                                                <div class="widget-footer col-md-3 wow fadeIn">
                            <div class="recent-post">
                                <h4 class="title">Comunicados</h4>
                                <div class="footer-content">
                                    <div class="post-item">
                                        <a href="single-post.html">
                                            <div class="post-thumb">
                                                <img src="img\recent-post-thumb1.jpg">
                                                <div class="overlay dark">
                                                    <span><i class="fa fa-plus"></i></span>
                                                </div>
                                            </div>
                                        </a>
                                        <div class="post-content">
                                            <a href="single-post.html">
                                                <h4>titulo 1</h4>
                                            </a>
                                            <p>Phasellus et nisl tellus. Etiam facilisis eu nisi scelerisque faucibus...</p>
                                            <div class="meta">
                                                <span class="date">1 de agosto, 2017</span>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="post-item">
                                        <a href="single-post.html">
                                            <div class="post-thumb">
                                                <img src="img\recent-post-thumb2.jpg">
                                                <div class="overlay dark">
                                                    <span><i class="fa fa-plus"></i></span>
                                                </div>
                                            </div>
                                        </a>
                                        <div class="post-content">
                                            <a href="single-post.html">
                                                <h4>titulo 2</h4>
                                            </a>
                                            <p>Phasellus et nisl tellus. Etiam facilisis eu nisi scelerisque faucibus...</p>
                                            <div class="meta">
                                                <span class="date">25 de agosto, 2015</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="widget-footer col-md-3 wow fadeIn">
                            <div class="contact-footer">
                                <h4 class="title">Contactanos</h4>
                                <div class="footer-content">
                                    <div class="contact-section">
                                        <h4>Nuestras Oficinas</h4>
                                        <p class="no-margin-bottom">dirección: Sector 2, Grupo Residencial 14, Mz. "D", Lotes 2,6 y 24 - Distrito de Villa El Salvador.</p>
                                        <p class="no-margin-bottom">Web: http://www.hca.edu.pe/</p>
                                        <p>Dirección: 7193346</p>
                                        <p class="no-margin-bottom">Secretaría: 7193345</p>
                                        <p class="no-margin-bottom">Portería: 7193349</p>
                                        <p class="no-margin-bottom">Nivel Inicial : 7193348</p>
                                    </div>
                                </div>
                        </div>
                    </div>
                </div>
            </footer>
            <div id="copyright">
                <div class="container">
                    <div class="row">
                        <div class="copyright-text col-md-6">
                            <p>Copyright 2017 |  All Rights Reserved | Powered by Hans Christian</p>
                        </div>
                        <div class="social-links col-md-6">
                            <ul class="no-padding">
                                <li><a href="https://www.facebook.com/institucion.andersen" target="_blank"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="http://twitter.com" target="_blank"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="https://plus.google.com/102027957026324770456/photos" target="_blank"><i class="fa fa-google-plus"></i></a></li>
                                <li><a href="https://www.youtube.com/channel/UCbaTdUGODxk3O5p_8Rf7sGQ/videos" target="_blank"><i class="fa fa-youtube"></i></a></li>
                                <li><a href="http://www.google.com" target="_blank"><i class="fa fa-wordpress"></i></a></li>
                                <li><a href="http://190.12.93.138/hans_cristian_andersen/15_template/index.php" target="_blank"><i class="fa fa-key"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script type="text/javascript" src="js\plugin.js"></script>
        <script type="text/javascript" src="js\main.js"></script>
    </body>
</html>
