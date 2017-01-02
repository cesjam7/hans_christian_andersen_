           <footer id="footer">
                <div class="container">
                    <div class="row">
                        <div class="widget-footer col-md-3 wow fadeIn">
                            <div class="short-desc">
                                <div class="logo-footer">
                                    <?php show_easylogo();?>
                                </div>
                                <p class="text-justify">Durante  los 22 años de funcionamiento, el Colegio ha alcanzado muchos logros académicos, cívico-patrióticos y de participación con la Comunidad de Villa El Salvador, así como un Convenio Internacional de Intercambio Cultural, firmado el 14 de Septiembre del 2001, entre el Colegio y la Universidad Estatal “Yaroslav El Sabio” de Novgorod.</p>
                            </div>
                        </div>
 
<div class="widget-footer col-md-3 wow fadeIn">
    <div class="recent-post">
        <h4 class="title">Articulos</h4>
        <div class="footer-content">

            <?php
                     $posts_slides = new WP_Query(array(
                        'category_name' => 'articulos',
                        'posts_per_page' => 2
                        ));

                        while($posts_slides->have_posts()) : $posts_slides->the_post();
                     ?>

                <div class="post-item <?php if($i == 1) echo 'active'; ?>">
                    <a href="<?php the_permalink(); ?>">
                        <div class="post-thumb">
                            <?php the_post_thumbnail('entradas'); ?>
                                <div class="overlay dark">
                                    <span><i class="fa fa-plus"></i></span>
                                </div>
                        </div>
                    </a>

                    <a href="<?php the_permalink(); ?>">
                        <h4><?php the_title(); ?></h4>
                    </a>
                    <p>
                        <?php the_excerpt(10); ?>
                    </p>
                    <div class="meta">
                        <span class="date text-primary"><?php the_time('j F Y'); ?></span>
                    </div>

                </div>
                <?php endwhile; wp_reset_postdata(); ?>
        </div>
    </div>
</div>


<div class="widget-footer col-md-3 wow fadeIn">
    <div class="recent-post">
        <h4 class="title">Comunicados</h4>
        <div class="footer-content">

            <?php
                     $posts_slides = new WP_Query(array(
                        'category_name' => 'comunicados',
                        'posts_per_page' => 2
                        ));

                        while($posts_slides->have_posts()) : $posts_slides->the_post();
                     ?>

                <div class="post-item <?php if($i == 1) echo 'active'; ?>">
                    <a href="<?php the_permalink(); ?>">
                        <div class="post-thumb">
                            <?php the_post_thumbnail('entradas'); ?>
                                <div class="overlay dark">
                                    <span><i class="fa fa-plus"></i></span>
                                </div>
                        </div>
                    </a>
                    
                        <a href="<?php the_permalink(); ?>">
                            <h4><?php the_title(); ?></h4>
                        </a>
                        <p>
                            <?php the_excerpt(10); ?>
                        </p>
                        <div class="meta">
                            <span class="date text-primary"><?php the_time('j F Y'); ?></span>
                        </div>
                    
                </div>
                <?php endwhile; wp_reset_postdata(); ?>
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
        <?php wp_footer(); ?>
    </body>
</html>