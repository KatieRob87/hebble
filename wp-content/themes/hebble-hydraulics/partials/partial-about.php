<section class="Partial-about-specialism">
  <div class="container">
    <div class="row">
      <div class="col-sm-6" data-aos="fade-right" data-aos-once="true">
      <?php 
        $pageArgs = array(
          'post_type' => 'page',
          'page_id' => 7
        );

        $about = new WP_Query($pageArgs);

        if ($about->have_posts()) :
          while ($about->have_posts()) :
            $about->the_post();
      ?>
        <h2>About Us</h2>
        <p><?php the_field('about_us', 'option'); ?></p>
      <?php
          endwhile;
        endif;
      ?>




      </div>
      <div class="col-sm-6" data-aos="fade-left" data-aos-once="true">
        <h2>Sector Specialism</h2>
        <p><?php the_field('introduction','option'); ?></p>
        <ul class="list list--no-pad list--no-bullet list--col-3" style="margin-left: 0px;">
          <?php if( have_rows('sectors', 'option') ): ?>

              <?php while( have_rows('sectors', 'option') ): the_row(); ?>

                  <li><img src="<?php the_sub_field('sector_icon'); ?>" alt=""><?php the_sub_field('sector'); ?></li>

              <?php endwhile; ?>

          <?php endif; ?>
        </ul>
      </div>
    </div>
  </div>
</section>
<!-- /.Partial-about-specialism -->