<section class="Partial-timeline">
  <div class="container">
    <div class="timeline">
      <header>
        <ul class="list list--inline">
        <?php

        // check if the repeater field has rows of data
        if( have_rows('history_timeline') ):

          // loop through the rows of data
            while ( have_rows('history_timeline') ) : the_row();
        ?>
          <li><?php the_sub_field('year'); ?></li>
        <?php
            endwhile;
        else :
        endif;
        ?>
        </ul>
      </header>
      <div class="timeline__content">
        <!-- Swiper -->
        <div class="swiper-container-timeline">
          <div class="swiper-wrapper">

          <?php

          // check if the repeater field has rows of data
          if( have_rows('history_timeline') ):

            // loop through the rows of data
              while ( have_rows('history_timeline') ) : the_row();
          ?>

                      <div class="swiper-slide">
                        <div class="row">
                          <div class="col-sm-4">
                            <img src="<?php the_sub_field('image') ?>" alt="">
                          </div>
                          <div class="col-sm-8">
                            <p><?php the_sub_field('content') ?></p>
                          </div>
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
    </div>
  </div>
</section>
<!-- /.Partial-timeline -->