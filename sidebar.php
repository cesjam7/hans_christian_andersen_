<div class="sidebar col-md-4 wow fadeIn">
    <!-- Recent Post Start -->
    <div class="sidebar-widget recent-post">
        <div class="heading-block">
            <h4>Articulos</h4>
        </div>
        <?php
                     $posts_slides = new WP_Query(array(
                        'category_name' => 'articulos',
                        'posts_per_page' => 3
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
                <div class="post-content">
                    <a href="<?php the_permalink(); ?>">
                        <h4><?php the_title(); ?></h4>
                    </a>
                    <p>
                        <?php the_excerpt(10); ?>
                    </p>
                    <div class="meta">
                        <span class="date"><?php the_time('j F Y'); ?></span>
                    </div>
                </div>
            </div>
            <?php endwhile; wp_reset_postdata(); ?>

    </div>
</div>
