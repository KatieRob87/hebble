<section class="Partial-clients">
  <div class="container">
    <!-- Swiper -->
    <div class="swiper-container-clients">
      <div class="swiper-wrapper">
        <?php

        // check if the repeater field has rows of data
        if( have_rows('clients', 'option') ):

          // loop through the rows of data
            while ( have_rows('clients', 'option') ) : the_row();
        ?>
              <div class="swiper-slide" data-aos="fade" data-aos-once="true">
                <div class="site-tab">
                  <span class="site-tab__border-bottom"></span>
                  <img src="<?php the_sub_field('client_image'); ?>" alt="">
                </div>
              </div>

        <?php
            endwhile;
        else :
        endif;
        ?>
      </div>
    </div>
  </div>
</section>
<!-- /.Partial-clients -->