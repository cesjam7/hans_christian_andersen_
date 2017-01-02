<!DOCTYPE html>
<html dir="ltr" lang="en-US">
    <head>
        <meta http-equiv="content-type" content="text/html; charset=utf-8">
        <link href='http://fonts.googleapis.com/css?family=Dosis:400,500,700' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700' rel='stylesheet' type='text/css'>
        <link href="<?php bloginfo('stylesheet_url');?>" rel="stylesheet">
        <?php wp_head(); ?>
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <title><?php bloginfo('name');?></title>
    </head>
    <body>
<div id="main-wrapper" class="clearfix">
            <header id="header" class="site-header clearfix">
                <div class="container">
                    <div class="row">
                        <div class="logo col-md-3">
                            <?php show_easylogo();?>
                        </div>
                        <div class="navigation col-md-9 text-right">
                            <div id="sb-search" class="sb-search">
                                <form>
                                    <input class="sb-search-input" placeholder="Buscar..." type="search" value="" name="search" id="search">
                                    <input class="sb-search-submit" type="submit" value="">
                                    <span class="sb-icon-search"><i class="fa fa-search"></i></span>
                                </form>
                            </div>
                            <div class="mobile-menu">
                                <button id="slide-buttons" class="icon icon-navicon-round"></button>
                            </div>
                        <nav id="c-menu--slide-right" class="c-menu c-menu--slide-right">
                                <button class="c-menu__close icon icon-remove-delete"></button>
                                <ul class="menus-mobile">
                                    <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>">Inicio</a></li>
                                    <li class="has-child">
                                        <a href="#">Páginas</a>
                                        <ul class="child">
                                           <li><a href="<?php echo get_permalink(64); ?>">Reseña historica</a></li>
                                           <li><a href="<?php echo get_permalink(67); ?>">Misión y visión</a></li>
                                           <li><a href="<?php echo get_permalink(72); ?>">Admisión</a></li>
                                           <li><a href="<?php bloginfo('home'); ?>/gallery/">Galeria</a></li>
                                           <li><a href="<?php echo get_permalink(69); ?>">Menú escolar</a></li>
                                        </ul>
                                    </li>
                                    <li class="has-child">
                                        <a href="#">Niveles</a>
                                        <ul class="child">
                                           <li><a href="<?php bloginfo('home'); ?>/inicial/">Inicial</a></li>
                                           <li><a href="<?php bloginfo('home'); ?>/primaria/">Primaria</a></li>
                                           <li><a href="<?php bloginfo('home'); ?>/secundaria/">Secundaria</a></li>
                                        </ul>
                                    </li>
                                    <li class="has-child">
                                        <a href="#">Anuncios</a>
                                        <ul class="child">
                                           <li><a href="<?php echo get_permalink(2); ?>">Articulos</a></li>
                                           <li><a href="<?php bloginfo('home'); ?>/release/">Comunicados</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="<?php echo get_permalink(59); ?>">Nosotros</a></li>
                                    <li><a href="<?php echo get_permalink(56); ?>">Contacto</a></li>
                                </ul>
                            </nav>
                            <div id="slide-overlay" class="slide-overlay"></div>
                            <nav id="main-menu" class="menu">
                                <ul id="menu-top-menu" class="menus">
                                    <li class="active"><a href="<?php echo esc_url( home_url( '/' ) ); ?>">Inicio</a></li>
                                    <li class="has-child">
                                        <a href="#">Páginas</a>
                                        <ul class="child">
                                           <li><a href="<?php echo get_permalink(64); ?>">Reseña Historica</a></li>
                                           <li><a href="<?php echo get_permalink(67); ?>">Misión y visión</a></li>
                                           <li><a href="<?php echo get_permalink(72); ?>">Admisión</a></li>
                                           <li><a href="<?php bloginfo('home'); ?>/gallery/">Galeria</a></li>
                                           <li><a href="<?php echo get_permalink(69); ?>">Menú escolar</a></li>
                                        </ul>
                                    </li>
                                    <li class="has-child">
                                        <a href="#">Niveles</a>
                                        <ul class="child">
                                           <li><a href="<?php bloginfo('home'); ?>/inicial/">Inicial</a></li>
                                           <li><a href="<?php bloginfo('home'); ?>/primaria/">Primaria</a></li>
                                           <li><a href="<?php bloginfo('home'); ?>/secundaria/">Secundaria</a></li>
                                        </ul>
                                    </li>
                                    <li class="has-child">
                                        <a href="#">Anuncios</a>
                                        <ul class="child">
                                           <li><a href="<?php echo get_permalink(2); ?>">Articulos</a></li>
                                           <li><a href="<?php bloginfo('home'); ?>/release/">Comunicados</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="<?php echo get_permalink(59); ?>">Nosotros</a></li>
                                    <li><a href="<?php echo get_permalink(56); ?>">Contacto</a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </header>