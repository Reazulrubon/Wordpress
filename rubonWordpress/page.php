<?php get_header() ?>

<!-- start Contact -->
<section id="contact" class="section parallax" style=" background-image: url('https://images.pexels.com/photos/176342/pexels-photo-176342.jpeg?auto=compress&cs=tinysrgb&w=600');" >
    <div class="overplay" ></div>
    <div class="container" >
        <div class="row" >
            <div class="title-box text-center white" >
                
            </div>
        </div>

        <!-- start contact form -->
      
        <div class="col-md-8 col-md-offset-2 contact-form" >
       

        <div class="contact-info text-center" >
        <h1 style="color: black; text-align: center; " > Contact Form </h1>
            <p style="color:black" >123 456 789</p>
            <p style="color:black" >123 lorem ipsum,4th floor lorem,ipsum</p>
            <p style="color:black" >mail@demo.com</p>
        </div>

            <?php echo do_shortcode('[startup_form]') ?>

        </div>
            <!-- End contact Form -->
    </div>
</section>

<?php get_footer() ?>