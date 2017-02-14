<section class="Partial-page-links">
  <div class="container">
    <div class="row">


        <?php

        // check if the repeater field has rows of data
        if( have_rows('page_links', 'option') ):

          // loop through the rows of data
            while ( have_rows('page_links', 'option') ) : the_row();
            $pageObj = get_sub_field('page');
            // print_r($pageObj);
            
        ?>

          <div class="col-xs-3" data-aos="fade-up">
            <div class="site-tab">
              <a style="text-decoration: none !important;" href="<?php the_permalink($pageObj->ID); ?>">
              <span class="site-tab__border-bottom"></span>
              <p><?php echo $pageObj->post_title; ?></p>
              <span style="font-size: 10px;"><?php the_sub_field('excerpt'); ?></span>
              </a>
            </div>
          </div>

        <?php
            endwhile;
        else :
        endif;
        ?>

    </div>
  </div>
</section>
<!-- /.Partial-page-links -->