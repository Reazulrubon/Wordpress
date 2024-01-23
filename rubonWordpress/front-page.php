<?php get_header(); ?>

<!-- Start Slider  -->
<section id="home" class="home">
    <div class="slider-overlay"></div>
    <div class="flexslider">
        <ul class="slides scroll">
            <?php $slider = new $wp_query(
                [
                    'post_type' => 'slider',
                ]
            );
            $i = 0;
            while ($slider->have_posts()) : $slider->the_post();
            ?>
                <li class="first">
                    <div class="slider-text-wrapper ">
                        <div class="container">
                            <div class="big"><?php the_title() ?> </div>
                            <div class="small"><?php the_content() ?></div>
                            <a href="#works" class="middle btn btn-white">VIEW PORTFOLIO</a>
                        </div>
                    </div>

                    <?php the_post_thumbnail() ?>
                </li>
            <?php endwhile; ?>
        </ul>
    </div>
</section>
<!-- End Slider  -->



<!--Start Features-->
<section id="about" class="section">
    <div class="container">
        <div class="row">
            <?php $two = new $wp_query([
                'post_type' => 'two',
                'orderby' => 'title',
                'order' => 'ASC',
                'posts_per_page' => 6
            ]);
            while ($two->have_posts()) : $two->the_post();
            ?>
                <!-- Features Icon-->
                <div class="col-md-4">
                    <div class="features-icon-box">

                        <div class="features-icon">
                            <i class="fa fa-leaf"></i>
                        </div>

                        <div class="features-info">
                            <h4><?php the_title(); ?></h4>
                            <p><?php the_content(); ?> </p>
                        </div>
                    </div>
                </div>
            <?php endwhile; ?>
            <!-- Features Icon-->

</section>
<!--End Features-->



<!-- Start Facts-->
<section id="facts" class="section parallax" style="background-image:url(<?php echo esc_url(get_theme_mod('logo')); ?>)">
    <div class="overlay"></div>
    <div class="container">
        <div class="row">

            <!-- Start Item-->
            <div class="col-md-3 col-sm-6 facts-box margin-bottom-30">
                <span><i class="icon-happy"></i></span>
                <h3>841</h3>
                <span>Happy Clients</span>
            </div>
            <!-- End Item-->

            <!-- Start Item-->
            <div class="col-md-3 col-sm-6 facts-box margin-bottom-30">
                <span><i class="icon-presentation"></i></span>
                <h3>800</h3>
                <span>Projects</span>
            </div>
            <!-- End Item-->

            <!-- Start Item-->
            <div class="col-md-3 col-sm-6 facts-box margin-bottom-30">
                <span><i class="icon-target"></i></span>
                <h3>1232</h3>
                <span>Lines of Code</span>
            </div>
            <!-- End Item-->

            <!-- Start Item-->
            <div class="col-md-3 col-sm-6 facts-box margin-bottom-30">
                <span><i class="icon-trophy"></i></span>
                <h3>300</h3>
                <span>Awards Won</span>
            </div>
            <!-- End Item-->

        </div> <!-- /.row -->
    </div> <!-- /.container -->
</section>
<!--End Facts-->


<!-- start portfolio-- -->

<section id="works" class="section">
    <div class="container">
        <div class="row">
            <div class="title-box text-center">
                <h2 class="title">Latest Portfolios</h2>
            </div>
        </div>

        <?php
        $query = new WP_Query(array(
            'post_type' => 'portfolio',
            'posts_per-page' => 3
        ));

        // query_posts($query);
        while ($query->have_posts()) : $query->the_post();

        ?>

            <!-- Start Blog item #1-->
            <div class="col-md-4">
                <div class="blog-post">
                    <div class="post-media">
                        <a href="<?php the_permalink() ?>">
                            <?php the_post_thumbnail(); ?>
                        </a>
                    </div>
                    <div class="post-desc">
                        <h4><?php the_title() ?></h4>
                        <h5><?php the_date() ?><?php echo get_comments_number() ?></h5>
                        <p><?php the_excerpt() ?></p>
                        <a href="<?php the_permalink() ?>" class="btn btn-gray-border">Read More</a>
                    </div>
                </div>

            </div>

        <?php
        endwhile;
        wp_reset_query()
        ?>

    </div>
</section>

<!-- End portfolio-- -->


<!--Start Section-->
<section class="section">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="content-tab-1">
                    <ul class="nav">
                    <?php
        $query = new WP_Query(array(
            'post_type' => 'rakib',
            
        ));

        // query_posts($query);
        while ($query->have_posts()) : $query->the_post();

        ?>
                        <li class="active">
                            <a aria-expanded="true" href="#tab-content-1" data-toggle="tab">
                                <?php the_post_thumbnail(array(100,100)) ?>
                                <h4><?php the_title() ?></h4>
                            </a>
                            <div class="tab-arrow">
                            </div>
                        </li>
                            <?php endwhile ?>
                       

                        

                        

                        

                    </ul>

                    <div class="tab-content-main">
                        <div class="container">
                            <div class="tab-content">
                                <div class="tab-pane active in" id="tab-content-1">

                                    <!-- Features Icon-->
                                    <div class="col-md-6 margin-bottom-30">
                                        <div class="tab1-features">
                                            <div class="icon"> <i class="fa fa-star-o"></i> </div>
                                            <div class="info">
                                                <h4>Dedicated Support & Updates</h4>
                                                <p>Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet. Et netus et malesuada fames ac turpis egestas tristique senectus. </p>
                                            </div>
                                        </div>

                                        <div class="tab1-features">
                                            <div class="icon"> <i class="fa fa-codepen"></i> </div>
                                            <div class="info">
                                                <h4>multipurpose theme</h4>
                                                <p>Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet. Et netus et malesuada fames ac turpis egestas tristique senectus. </p>
                                            </div>
                                        </div>

                                        <div class="tab1-features">
                                            <div class="icon"> <i class="fa fa-heart-o"></i></div>
                                            <div class="info">
                                                <h4>Design With Love</h4>
                                                <p>Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet. Et netus et malesuada fames ac turpis egestas tristique senectus. </p>
                                            </div>
                                        </div>

                                    </div>
                                    <!--End features Icon-->


                                    <!--  Start Carousel-->
                                    <div class="col-md-6">
                                        <div class="tab-carousel">
                                            <div class="item"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/works/img4.jpg" alt=""></div>
                                            <div class="item"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/works/img5.jpg" alt=""></div>
                                            <div class="item"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/works/img6.jpg" alt=""></div>
                                        </div>
                                    </div>
                                    <!-- End Carousel-->

                                </div>
                                <!-- End Tab content 1-->


                                <!-- Start Tab content 2-->
                                <div class="tab-pane" id="tab-content-2">

                                    <div class="col-md-4">
                                        <div class="tab2-services-box">
                                            <div class="media">
                                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/services1.jpg" alt="services" />
                                            </div>

                                            <div class="services-info">
                                                <h4>Our History</h4>
                                                <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal.</p>
                                            </div>

                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <div class="tab2-services-box">
                                            <div class="media">
                                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/services2.jpg" alt="services" />
                                            </div>

                                            <div class="services-info">
                                                <h4>What We Do</h4>
                                                <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal.</p>
                                            </div>

                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <div class="tab2-services-box">
                                            <div class="media">
                                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/services3.jpg" alt="services" />
                                            </div>

                                            <div class="services-info">
                                                <h4>Our Mission</h4>
                                                <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal.</p>
                                            </div>

                                        </div>
                                    </div>

                                </div>


                                <div class="tab-pane" id="tab-content-3">

                                    <div class="features-tab3">

                                        <!--Start Features Left-->
                                        <div class="col-md-4">
                                            <div class="features-left m-bot-30">
                                                <!--Features Item #1-->
                                                <div class="features-item">
                                                    <div class="features-icon"> <i class="fa fa-pagelines"></i> </div>
                                                    <div class="features-info">
                                                        <h4>Multipurpose & Responsive</h4>
                                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry Lorem Ipsum.</p>
                                                    </div>
                                                </div>

                                                <!--Features Item #2-->
                                                <div class="features-item">
                                                    <div class="features-icon"> <i class="fa fa-trophy"></i> </div>
                                                    <div class="features-info">
                                                        <h4>Creative Design</h4>
                                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry Lorem Ipsum.</p>
                                                    </div>
                                                </div>

                                                <!--Features Item #3-->
                                                <div class="features-item">
                                                    <div class="features-icon"> <i class="fa fa-tag"></i> </div>
                                                    <div class="features-info">
                                                        <h4>Awesome Theme</h4>
                                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry Lorem Ipsum.</p>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                        <!--End Features Left-->

                                        <!--Start Features Image-->
                                        <div class="col-md-4 hidden-xs m-bot-30">
                                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/device.png" alt="Features Image" />
                                        </div>
                                        <!--End Features Image-->

                                        <!--Start Features Right-->
                                        <div class="col-md-4">
                                            <div class="features-right m-bot-30">
                                                <!--Features Item #1-->
                                                <div class="features-item">
                                                    <div class="features-icon"> <i class="fa fa-eyedropper"></i> </div>
                                                    <div class="features-info">
                                                        <h4>Strategy Solutions</h4>
                                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry Lorem Ipsum.</p>
                                                    </div>
                                                </div>

                                                <!--Features Item #2-->
                                                <div class="features-item">
                                                    <div class="features-icon"> <i class="fa fa-search-plus"></i> </div>
                                                    <div class="features-info">
                                                        <h4>App Development</h4>
                                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry Lorem Ipsum.</p>
                                                    </div>
                                                </div>

                                                <!--Features Item #3-->
                                                <div class="features-item">
                                                    <div class="features-icon"> <i class="fa fa-send-o"></i> </div>
                                                    <div class="features-info">
                                                        <h4>HTML5 & CSS3</h4>
                                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry Lorem Ipsum.</p>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                        <!--End Features Right -->
                                    </div>

                                </div>

                                <div class="tab-pane" id="tab-content-4">

                                    <div class="tab-content-4">

                                        <div class="col-md-3">
                                            <div class="tab4-services-box">
                                                <div class="icon"><i class="fa fa-bolt"></i> </div>
                                                <div class="info">
                                                    <h4>Simple and Clean Codes</h4>
                                                    <p>Vivamus a placerat ante. Duis vulputate nibh sit amet augue vehicula, mattis
                                                        viverra purus tristique.</p>
                                                </div>
                                            </div>
                                        </div>



                                        <div class="col-md-3">
                                            <div class="tab4-services-box">
                                                <div class="icon"><i class="fa fa-fire"></i> </div>
                                                <div class="info">
                                                    <h4>Responsive Layout Design</h4>
                                                    <p>Vivamus a placerat ante. Duis vulputate nibh sit amet augue vehicula, mattis
                                                        viverra purus tristique.</p>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-3">
                                            <div class="tab4-services-box">
                                                <div class="icon"><i class="fa fa-chain"></i> </div>
                                                <div class="info">
                                                    <h4>Unlimited Support</h4>
                                                    <p>Vivamus a placerat ante. Duis vulputate nibh sit amet augue vehicula, mattis
                                                        viverra purus tristique.</p>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-3">
                                            <div class="tab4-services-box">
                                                <div class="icon"><i class="fa fa-shopping-cart"></i> </div>
                                                <div class="info">
                                                    <h4>multipurpose theme</h4>
                                                    <p>Vivamus a placerat ante. Duis vulputate nibh sit amet augue vehicula, mattis
                                                        viverra purus tristique.</p>
                                                </div>
                                            </div>
                                        </div>

                                    </div>

                                </div>


                                <div class="tab-pane" id="tab-content-5">

                                    <div class="tab-content-5">

                                        <div class="col-md-6">
                                            <div class="core-features">

                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur euismod enim a metus adipiscing aliquam. Vestibulum in vestibulum lorem. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur euismod enim a metus adipiscing aliquam. Vestibulum in vestibulum lorem. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur euismod enim a metus adipiscing.</p>

                                                <ul class="list">
                                                    <li>Font-Awesome Integration</li>
                                                    <li>Multiple unique designs</li>
                                                    <li>Clean coded, responsive and multipurpose</li>
                                                    <li>Pages valid on w3c.</li>
                                                    <li>Well documented.</li>
                                                    <li>Easy to customization.</li>
                                                </ul>

                                            </div>
                                        </div>


                                        <div class="col-md-6">
                                            <div class="devices-image">
                                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/device-desktop.png" alt="" />
                                            </div>
                                        </div>

                                    </div>

                                </div>

                            </div>
                        </div>
                    </div>
                    <!--/.tab-content-main-->
                </div>
            </div>

        </div> <!--/.row-->
    </div> <!--/.container-->
</section>
<!--End Section-->


<!--Start History-->
<section id="history" class="section parallax" style="background-image:url(<?php echo esc_url(get_theme_mod('zahid')); ?> ">
    <div class="overlay"></div>
    <div class="container">

        <div class="title-box text-center white">
            <h2 class="title">History</h2>
        </div>

        <!-- History Timeline -->
        <ul class="timeline list-unstyled">

            <li class="year">2020</li>
            <?php $history=new WP_Query([
                'post_type'=>'history',
                'post_per_page'=>2,
            ]);
            while($history->have_posts()):$history->the_post();
            ?>

            <!--History Item -->

            <li class="timeline-item">
                <h4><?php the_title() ?></h4>
                <p><?php the_content() ?></p>
                <span><?php the_excerpt() ?></span>
            </li>
            <!-- End Item -->
<?php endwhile; ?>
          
            

            <!-- History Year -->
            <li class="year">2022</li>
            <?php $historyxx=new WP_Query([
                'post_type'=>'historyxx',
                'post_per_page'=>3,
            ]);
            while($historyxx->have_posts()):$historyxx->the_post();
            ?>

            <!--History Item -->
            <li class="timeline-item">
                <h4><?php the_title() ?></h4>
                <p><?php the_content() ?></p>
                <span><?php the_excerpt() ?> </span>
            </li>
            <!-- End Item -->

            <?php endwhile; ?>

            

            <li class="clear"></li>

            <li class="end-icon fa fa-bookmark"></li>
        </ul>
        <!-- End History Timeline -->

    </div> <!--/.container-->
</section>
<!--End History-->


<!--Start portfolio-->
<section id="works" class="section">
    <!-- Filtering -->
    <div class="title-box text-center">
        <h2 class="title">Our Work</h2>
    </div>


    <div class=" col-md-12 text-center">
        <!-- Filtering -->
        <ul class="filtering">
            <li class="filter" data-filter="all">All</li>
            <li class="filter" data-filter="fashion">Fashion</li>
            <li class="filter" data-filter="event">Events</li>
            <li class="filter" data-filter="wedding">Wedding</li>
            <li class="filter" data-filter="corporate">Corporate</li>
        </ul>
    </div>

    <div class="work-main">
        <!-- Work Grid -->
        <ul class="work-grid">
            <!-- Work Item -->
            <li class="work-item thumnail-img mix corporate">
                <div class="work-image">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/works/img1.jpg" alt="thumbnail">

                    <!--Hover link-->
                    <div class="hover-link">
                        <a href="single-work.html">
                            <i class="fa fa-link"></i>
                        </a>

                        <a href="<?php echo get_template_directory_uri(); ?>/assets/images/works/img1.jpg" class="popup-image">
                            <i class="fa fa-plus"></i>
                        </a>
                    </div>
                    <!--End link-->

                    <!--Hover Caption-->
                    <div class="work-caption">
                        <h4>Project Title</h4>
                        <p>Photography</p>
                    </div>
                    <!--End Caption-->

                </div> <!-- /.work-image-->
            </li>
            <!--End Work Item -->

            <!-- Work Item -->
            <li class="work-item thumnail-img mix fashion wedding">
                <div class="work-image">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/works/img2.jpg" alt="thumbnail">

                    <!--Hover link-->
                    <div class="hover-link">
                        <a href="single-work.html">
                            <i class="fa fa-link"></i>
                        </a>

                        <a href="<?php echo get_template_directory_uri(); ?>/assets/images/works/img2.jpg" class="popup-image">
                            <i class="fa fa-plus"></i>
                        </a>
                    </div>
                    <!--End link-->

                    <!--Hover Caption-->
                    <div class="work-caption">
                        <h4>Project Title</h4>
                        <p>Photography</p>
                    </div>
                    <!--End Caption-->

                </div> <!-- /.work-image-->
            </li>
            <!--End Work Item -->

            <!-- Work Item -->
            <li class="work-item thumnail-img mix corporate">
                <div class="work-image">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/works/img3.jpg" alt="thumbnail">

                    <!--Hover link-->
                    <div class="hover-link">
                        <a href="single-work.html">
                            <i class="fa fa-link"></i>
                        </a>

                        <a href="<?php echo get_template_directory_uri(); ?>/assets/images/works/img3.jpg" class="popup-image">
                            <i class="fa fa-plus"></i>
                        </a>
                    </div>
                    <!--End link-->

                    <!--Hover Caption-->
                    <div class="work-caption">
                        <h4>Project Title</h4>
                        <p>Photography</p>
                    </div>
                    <!--End Caption-->

                </div> <!-- /.work-image-->
            </li>
            <!--End Work Item -->

            <!-- Work Item -->
            <li class="work-item thumnail-img mix corporate">
                <div class="work-image">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/works/img4.jpg" alt="thumbnail">

                    <!--Hover link-->
                    <div class="hover-link">
                        <a href="single-work.html">
                            <i class="fa fa-link"></i>
                        </a>

                        <a href="<?php echo get_template_directory_uri(); ?>/assets/images/works/img4.jpg" class="popup-image">
                            <i class="fa fa-plus"></i>
                        </a>
                    </div>
                    <!--End link-->

                    <!--Hover Caption-->
                    <div class="work-caption">
                        <h4>Project Title</h4>
                        <p>Photography</p>
                    </div>
                    <!--End Caption-->

                </div> <!-- /.work-image-->
            </li>
            <!--End Work Item -->

            <!-- Work Item -->
            <li class="work-item thumnail-img mix fashion wedding">
                <div class="work-image">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/works/img5.jpg" alt="thumbnail">

                    <!--Hover link-->
                    <div class="hover-link">
                        <a href="single-work.html">
                            <i class="fa fa-link"></i>
                        </a>

                        <a href="<?php echo get_template_directory_uri(); ?>/assets/images/works/img5.jpg" class="popup-image">
                            <i class="fa fa-plus"></i>
                        </a>
                    </div>
                    <!--End link-->

                    <!--Hover Caption-->
                    <div class="work-caption">
                        <h4>Project Title</h4>
                        <p>Photography</p>
                    </div>
                    <!--End Caption-->

                </div> <!-- /.work-image-->
            </li>
            <!--End Work Item -->

            <!-- Work Item -->
            <li class="work-item thumnail-img mix event wedding">
                <div class="work-image">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/works/img6.jpg" alt="thumbnail">

                    <!--Hover link-->
                    <div class="hover-link">
                        <a href="single-work.html">
                            <i class="fa fa-link"></i>
                        </a>

                        <a href="<?php echo get_template_directory_uri(); ?>/assets/images/works/img6.jpg" class="popup-image">
                            <i class="fa fa-plus"></i>
                        </a>
                    </div>
                    <!--End link-->

                    <!--Hover Caption-->
                    <div class="work-caption">
                        <h4>Project Title</h4>
                        <p>Photography</p>
                    </div>
                    <!--End Caption-->

                </div> <!-- /.work-image-->
            </li>
            <!--End Work Item -->

            <!-- Work Item -->
            <li class="work-item thumnail-img mix event">
                <div class="work-image">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/works/img7.jpg" alt="thumbnail">

                    <!--Hover link-->
                    <div class="hover-link">
                        <a href="single-work.html">
                            <i class="fa fa-link"></i>
                        </a>

                        <a href="<?php echo get_template_directory_uri(); ?>/assets/images/works/img7.jpg" class="popup-image">
                            <i class="fa fa-plus"></i>
                        </a>
                    </div>
                    <!--End link-->

                    <!--Hover Caption-->
                    <div class="work-caption">
                        <h4>Project Title</h4>
                        <p>Photography</p>
                    </div>
                    <!--End Caption-->

                </div> <!-- /.work-image-->
            </li>
            <!--End Work Item -->

            <!-- Work Item -->
            <li class="work-item thumnail-img mix corporate">
                <div class="work-image">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/works/img8.jpg" alt="thumbnail">

                    <!--Hover link-->
                    <div class="hover-link">
                        <a href="single-work.html">
                            <i class="fa fa-link"></i>
                        </a>

                        <a href="<?php echo get_template_directory_uri(); ?>/assets/images/works/img8.jpg" class="popup-image">
                            <i class="fa fa-plus"></i>
                        </a>
                    </div>
                    <!--End link-->

                    <!--Hover Caption-->
                    <div class="work-caption">
                        <h4>Project Title</h4>
                        <p>Photography</p>
                    </div>
                    <!--End Caption-->

                </div> <!-- /.work-image-->
            </li>
            <!--End Work Item -->

            <!-- Work Item -->
            <li class="work-item thumnail-img mix event">
                <div class="work-image">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/works/img9.jpg" alt="thumbnail">

                    <!--Hover link-->
                    <div class="hover-link">
                        <a href="single-work.html">
                            <i class="fa fa-link"></i>
                        </a>

                        <a href="<?php echo get_template_directory_uri(); ?>/assets/images/works/img9.jpg" class="popup-image">
                            <i class="fa fa-plus"></i>
                        </a>
                    </div>
                    <!--End link-->

                    <!--Hover Caption-->
                    <div class="work-caption">
                        <h4>Project Title</h4>
                        <p>Photography</p>
                    </div>
                    <!--End Caption-->

                </div> <!-- /.work-image-->
            </li>
            <!--End Work Item -->

            <!-- Work Item -->
            <li class="work-item thumnail-img mix wedding">
                <div class="work-image">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/works/img10.jpg" alt="thumbnail">

                    <!--Hover link-->
                    <div class="hover-link">
                        <a href="single-work.html">
                            <i class="fa fa-link"></i>
                        </a>

                        <a href="<?php echo get_template_directory_uri(); ?>/assets/images/works/img10.jpg" class="popup-image">
                            <i class="fa fa-plus"></i>
                        </a>
                    </div>
                    <!--End link-->

                    <!--Hover Caption-->
                    <div class="work-caption">
                        <h4>Project Title</h4>
                        <p>Photography</p>
                    </div>
                    <!--End Caption-->

                </div> <!-- /.work-image-->
            </li>
            <!--End Work Item -->

            <!-- Work Item -->
            <li class="work-item thumnail-img mix fashion">
                <div class="work-image">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/works/img11.jpg" alt="thumbnail">

                    <!--Hover link-->
                    <div class="hover-link">
                        <a href="single-work.html">
                            <i class="fa fa-link"></i>
                        </a>

                        <a href="<?php echo get_template_directory_uri(); ?>/assets/images/works/img11.jpg" class="popup-image">
                            <i class="fa fa-plus"></i>
                        </a>
                    </div>
                    <!--End link-->

                    <!--Hover Caption-->
                    <div class="work-caption">
                        <h4>Project Title</h4>
                        <p>Photography</p>
                    </div>
                    <!--End Caption-->

                </div> <!-- /.work-image-->
            </li>
            <!--End Work Item -->

            <!-- Work Item -->
            <li class="work-item thumnail-img mix corporate">
                <div class="work-image">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/works/img12.jpg" alt="thumbnail">

                    <!--Hover link-->
                    <div class="hover-link">
                        <a href="single-work.html">
                            <i class="fa fa-link"></i>
                        </a>

                        <a href="<?php echo get_template_directory_uri(); ?>/assets/images/works/img12.jpg" class="popup-image">
                            <i class="fa fa-plus"></i>
                        </a>
                    </div>
                    <!--End link-->

                    <!--Hover Caption-->
                    <div class="work-caption">
                        <h4>Project Title</h4>
                        <p>Photography</p>
                    </div>
                    <!--End Caption-->

                </div> <!-- /.work-image-->
            </li>
            <!--End Work Item -->
        </ul>

    </div>
</section>
<!--End portfolio-->


<!--Start Call To Action-->
<section id="cta" class="parallax" style="background-image:url(<?php echo esc_url(get_theme_mod('rubon')); ?>)">
    <div class="overlay"></div>
    <div class="container">
        <div class="row text-center">
            <h2>Are you ready to buy this theme</h2>
            <a href="#" class="btn btn-green">GET A FREE QUOTE</a>
        </div>
    </div>
</section>
<!--End Call To Action-->



<!--Start Team-->
<section id="team" class="section">
    <div class="container">
        <div class="row">

            <div class="title-box text-center">
                <h2 class="title">Team</h2>
            </div>

        </div>

        <!-- Team -->
        <div class="team-items team-carousel">
            <?php $team = new wp_query(
                [
                    'post_type' => 'team',
                    'orderby' => 'title',
                    'order' => 'ASC',
                    'posts_per_page' => 4
                ]
            );
            while ($team->have_posts()) : $team->the_post();
            ?>
                <!-- Team Member #1 -->
                <div class="item">
                    <?php the_post_thumbnail() ?>
                    <!-- <img src="<?php  ?>/assets/images/team/team1.jpg" alt="" /> -->
                    <h4><?php the_title() ?></h4>
                    <h5><?php the_excerpt() ?></h5>
                    <p><?php the_content() ?></p>

                    <div class="socials">
                        <ul>
                            <li><a class="facebook" href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a class="linkedin" href="#"><i class="fa fa-linkedin"></i></a></li>
                            <li><a class="google-plus" href="#"><i class="fa fa-google-plus"></i></a></li>
                        </ul>
                    </div>
                </div>
            <?php endwhile; ?>
            <!-- End Member -->

        </div>
        <!-- End Team -->
    </div>
    <!-- End Content -->
</section>
<!--End Team-->


<!--Start Skills-->
<section id="skills" class="section parallax" style="background-image:url(<?php echo esc_url(get_theme_mod('skill')); ?>)">
    <div class="overlay"></div>
    <div class="container">
        <div class="row">

            <div class="title-box text-center white">
                <h2 class="title">Technical Skills</h2>
            </div>

            <!--Skill #1-->
            <?Php
            $skill = new wp_query([
                'post_type' => 'skill',
            ]);
            while ($skill->have_posts()) : $skill->the_post();
            ?>
         
            <div class="col-sm-3 col-md-3 col-lg-3 pie-chart-main">
                <span class="pie-chart " data-percent="<?php echo get_post_meta($post->ID,'ListeningToInput',true); ?>">
                    <span class="percent"></span>
                </span>
                <h4><?php the_title() ?></h4>
                <p><?php the_content() ?></p>
            </div>

            
            <?php endwhile ?>

        </div> <!-- /.row-->
    </div> <!-- /.container-->
</section>
<!--End Skills-->




<!--Start Services-->
<section id="services" class="section">

    <div class="container">
        <div class="row">

            <div class="title-box text-center">
                <h2 class="title">Services</h2>
            </div>

            <!--Services Item-->
            <?Php
            $service = new wp_query([
                'post_type' => 'service',
            ]);
            while ($service->have_posts()) : $service->the_post();
            ?>
                <div class="col-md-4">
                    <div class="services-box">
                        <div class="services-icon"> <i class="icon-basket"></i> </div>
                        <div class="services-desc">
                            <h4><?php the_title() ?></h4>
                            <p><?php the_content() ?></p>
                        </div>
                    </div>
                </div>
            <?php endwhile; ?>

            <!--End services Item-->



        </div> <!--/.row-->
    </div> <!--/.container-->
</section>
<!--End Services-->





<!--Start video-->
<section id="video" class="section parallax" style="background-image:url(<?php echo esc_url(get_theme_mod('vedio')); ?>)">
    <div class="overlay"></div>
    <div class="container">
        <div class="row">

            <div class="title-box text-center white">
                <h2 class="title">Video</h2>
            </div>

            <div class="col-md-6">
                <div class="video-caption-main">
                    <!--Video caption #1-->
                    <div class="video-caption">
                        <div class="video-icon">
                            <i class="fa fa-briefcase"></i>
                        </div>
                        <div class="video-caption-info">
                            <h4>Take a look at this video to see how we work.</h4>
                            <p>Lorem ipsum dolor consectetur adipisicing incididunt eiusmod tempor incididunt laboredolore magna aliqua.</p>
                        </div>
                    </div>

                    <!--Video caption #2-->
                    <div class="video-caption">
                        <div class="video-icon">
                            <i class="fa fa-glass"></i>
                        </div>
                        <div class="video-caption-info">
                            <h4>The programming language of ios apps</h4>
                            <p>Lorem ipsum dolor consectetur adipisicing incididunt eiusmod tempor incididunt laboredolore magna aliqua.</p>
                        </div>
                    </div>

                    <!--Video caption #3-->
                    <div class="video-caption">
                        <div class="video-icon">
                            <i class="fa fa-rocket "></i>
                        </div>
                        <div class="video-caption-info">
                            <h4>Take a look at this video to see how we work.</h4>
                            <p>Lorem ipsum dolor consectetur adipisicing incididunt eiusmod tempor incididunt laboredolore magna aliqua.</p>
                        </div>
                    </div>

                </div>
            </div>
            <!-- End Video caption-->

            <div class="col-md-6">
                <div class="play-video">
                    <iframe src="http://player.vimeo.com/video/115919099?title=0&amp;byline=0&amp;portrait=0&amp;color=fff" allowfullscreen></iframe>
                </div>
            </div>

        </div> <!-- /.row-->
    </div> <!-- /.container-->
</section>
<!--End video-->


<!-- Start blog-->

<section id="blog" class="section">
    <div class="container">
        <div class="row">

            <div class="title-box text-center">
                <h2 class="title">Latest Blog</h2>
            </div>

            <?php
            $blogs_args = array(
                'post_type' => 'post',
                'post_per_page' => 3
            );

            $blog_posts = new WP_Query($blogs_args);
            while ($blog_posts->have_posts()) {
                $blog_posts->the_post();

            ?>

                <!-- Start Blog item #1-->
                <div class="col-md-4">
                    <div class="blog-post">
                        <div class="post-media">
                            <a href="<?php the_permalink() ?>">
                                <?php the_post_thumbnail(); ?>
                            </a>
                        </div>
                        <div class="post-desc">
                            <h4><?php the_title() ?></h4>
                            <h5><?php the_date() ?><?php echo get_comments_number() ?></h5>
                            <p><?php the_excerpt() ?></p>
                            <a href="<?php the_permalink() ?>" class="btn btn-gray-border">Read More</a>
                        </div>
                    </div>
                </div>
            <?php } ?>

        </div> <!--/.row-->
    </div> <!--/.container-->
</section>
<!-- End blog-->

<!--Start Testimonial-->  
<section id="testimonials" class="section parallax" style="background-image:url(<?php echo esc_url(get_theme_mod('logo')); ?>)"  >
     <div class="overlay"></div>
        <div class="container">
              <div class="row">
              
                  	<div class="title-box text-center white">
                        <h2 class="title">What clients say.</h2>
                     </div>

              
                    <div class="col-md-10 col-md-offset-1">
                        

                        <div class="testimonials-carousel">
                    <?php $client = new $wp_query(
                    [
                        'post_type' => 'client',
                    ]
                    );
                    
                        $i = 0;
                     while ($client->have_posts()) : $client->the_post();
                    ?>
                            <!--Start Testimonial item #1-->
                            <div class="items">
                                <div class="desc"><?php the_content() ?></div>
                                <!-- <img src="images/testimonial/testimonial-img1.jpg" class="testimonial-pic" alt="testimonials" /> -->
                                <?php the_post_thumbnail() ?>
                                <div class="name"><?php the_excerpt() ?></div>
                            </div>
                            
                              <!--Start Testimonial item #2-->
                        
                            
                              <!--Start Testimonial item #3-->
                           <?php endwhile ?>
                        </div>
                    </div>
                </div> <!--/.row-->
            </div> <!--/.container-->
          </section>
        <!--Start Testimonial-->


<!--Start clients-->
<section id="clients" class="section">
    <div class="container">
        <div class="row">

            <div class="title-box text-center">
                <h2 class="title">Our Clients</h2>
            </div>

            <div class="clients-carousel">

                <!-- Clients Logo Item-->
                <?php $our_client = new $wp_query(
                [
                    'post_type' => 'our_client',
                ]
            );
            $i = 0;
            while ($our_client->have_posts()) : $our_client->the_post();
            ?>
                <div class="item">
                    <a href="#">
                        <figure>
                          <?php the_post_thumbnail() ?>
                        </figure>
                    </a>
                </div>
                <?php endwhile ?>
                
            </div>
        </div> <!--/.row-->
    </div> <!--/.container-->
</section>
<!--End clients-->


<!--Start Contact-->
<section id="contact" class="section parallax" style="background-image:url(<?php echo esc_url(get_theme_mod('contact')); ?>)">
    <div class="overlay"></div>
    <div class="container">
        <div class="row">

            <div class="title-box text-center white">
                <h2 class="title">Contact</h2>
            </div>
        </div>

        <!--Start contact form-->
        <div class="col-md-8 col-md-offset-2 contact-form">

            <div class="contact-info text-center">
                <p>123 4567 890</p>
                <p>123 lorem ipsum, 4th floor, lorem, ipsum </p>
                <p>mail@demo.com </p>
            </div>

            <form method="post">
                <div class="row">
                    <div class="col-md-4">
                        <input class="form-control" id="name" placeholder="Full Name" type="text">
                    </div>
                    <div class="col-md-4">
                        <input class="form-control" id="email" placeholder="Your Email" type="email">
                    </div>
                    <div class="col-md-4">
                        <input class="form-control" id="subject" placeholder="Subject" type="text">
                    </div>
                    <div class="col-md-12">
                        <textarea class="form-control" id="message" rows="7" placeholder="Your Message"></textarea>
                    </div>
                    <div class="col-md-12 text-right">
                        <button type="submit" class="btn btn-green">SEND MESSAGE</button>
                    </div>
                </div>
            </form>
        </div>
        <!--End contact form-->

    </div> <!-- /.container-->
</section>
<!--End Contact-->

<?php get_footer(); ?>