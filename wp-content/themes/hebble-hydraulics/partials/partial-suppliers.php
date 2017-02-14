<section class="Partial-suppliers">
  <div class="container">
    <h2>Suppliers and Partners</h2>
    <!-- Swiper -->
    <div class="swiper-container-suppliers">
      <div class="swiper-wrapper">

        <?php

        // check if the repeater field has rows of data
        if( have_rows('suppliers', 'option') ):

          // loop through the rows of data
            while ( have_rows('suppliers', 'option') ) : the_row();
        ?>
          <div class="swiper-slide">
            <img src="<?php the_sub_field('supplier_image') ?>" alt="">
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
<!-- /.Partial-suppliers -->