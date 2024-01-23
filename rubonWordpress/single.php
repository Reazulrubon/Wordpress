<?php get_header(); ?>

<section class="section">
    <div class="container">
        <div class="row">

            <?php

            if (have_posts()) {
                while (have_posts()) {
                    the_post();



            ?>


                    <div class="col-md-8 col-sm-8">
                        <div class="post-content">
                            <div class="post-img">
                                <?php the_post_thumbnail('single-img'); ?>
                            </div>
                            <div class="post-meta">
                                <ul class="list-inline">
                                    <li><a href="#"><i class="fa fa-calendar"></i><?php the_date() ?></a></li>
                                    <li><a href="#"><i class="fa fa-user"></i>by Admin</a></li>
                                    <li><a href="#"><i class="fa fa-comments"></i><?php echo get_comments_number() ?></a></li>
                                </ul>
                            </div>

                            <div class="post-description">
                                <h3><?php the_title() ?></h3>
                                <p><?php the_content() ?></p>
                                <blockquote><?php the_content() ?></blockquote>
                            </div>

                        </div>
                    </div>
            <?php }
            } ?>
            <?php get_sidebar() ?>
        </div>
    </div>
</section>




<?php get_footer(); ?>