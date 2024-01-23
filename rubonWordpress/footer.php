<?php echo get_stylesheet_directory_uri() ?>/assets/<!--Start Footer-->
<footer>
       <div class="container">
           <div class="row">
               <!--Start copyright-->
               <div class="col-md-6 col-sm-6 col-xs-6">
               <?php echo dynamic_sidebar('footer-1') ?>
               </div>
               <!--End copyright-->
               
               <!--start social icons-->
               <div class="col-md-6 col-sm-6 col-xs-6">
               <?php echo dynamic_sidebar('footer-2') ?> 
               </div>
               <!--End social icons-->
           </div> <!-- /.row-->
       </div> <!-- /.container-->
   </footer>
   <!--End Footer-->

   <a href="#" class="scrollup"> <i class="fa fa-chevron-up"> </i> </a>

    <!--Plugins-->
	<script type="text/javascript" src="<?php echo get_stylesheet_directory_uri() ?>/assets/js/jquery-1.11.1.min.js"></script>
    <script type="text/javascript" src="<?php echo get_stylesheet_directory_uri() ?>/assets/js/bootstrap.min.js"></script> 
    <script type="text/javascript" src="<?php echo get_stylesheet_directory_uri() ?>/assets/js/owl-carousel/owl.carousel.js"></script>
    <script type="text/javascript" src="<?php echo get_stylesheet_directory_uri() ?>/assets/js/jquery.flexslider-min.js"></script>
    <script type="text/javascript" src="<?php echo get_stylesheet_directory_uri() ?>/assets/js/jquery.magnific-popup.min.js"></script>
    <script type="text/javascript" src="<?php echo get_stylesheet_directory_uri() ?>/assets/js/easing.js"></script>
    <script type="text/javascript" src="<?php echo get_stylesheet_directory_uri() ?>/assets/js/jquery.easypiechart.js"></script>
    <script type="text/javascript" src="<?php echo get_stylesheet_directory_uri() ?>/assets/js/jquery.appear.js"></script>
    <script type="text/javascript" src="<?php echo get_stylesheet_directory_uri() ?>/assets/js/jquery.parallax-1.1.3.js"></script>
    <script type="text/javascript" src="<?php echo get_stylesheet_directory_uri() ?>/assets/js/jquery.mixitup.min.js"></script>
    <script type="text/javascript" src="<?php echo get_stylesheet_directory_uri() ?>/assets/js/custom.js"></script>

    <?php wp_footer(); ?>
    
 </body>
</html>