<?php

/** 
 *Template Name:About
 *
 */


get_header() ?>

<div style="background-color: aqua;" >
    <h1 style="text-align:center;">About</h1>
</div>

<hr>

<div class="row">

    <div class="col-md-6">
        <?php dynamic_sidebar('sidebar-two') ?>
    </div>

    <div class="col-md-2"></div>
    <div class="col-md-4">
        <?php dynamic_sidebar('sidebar') ?><br><br>
    
    </div>

</div>

<!-- start Contact -->
<?php get_footer() ?>