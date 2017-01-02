<?php get_header(); ?> 
 <div class="blog-single">
                    <div class="container">
                        <div class="row">
                            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                            <div class="single-post col-md-8 wow fadeIn">
                                <article class="post-item">
                                    <div class="post-image">
                                            <?php the_post_thumbnail(); ?>
                                    </div>
                                    <div class="post-content">
                                        <div class="heading-block">
                                            <h3><?php the_title(); ?></h3>
                                            <div class="post-meta">
                                                <span class="date"><?php the_time('j F Y'); ?></span>/<span class="author"><?php the_author(); ?></span>
                                            </div>
                                        </div>
                                        <div class="content">
                                            <?php the_content(); ?>
                                        </div>
                                    </div>
                                </article>
                            </div>
<?php endwhile?>
<?php endif; ?>
 <?php get_sidebar(); ?>
                        </div>
                    </div>
                </div>
            </div>
 <?php get_footer(); ?>  