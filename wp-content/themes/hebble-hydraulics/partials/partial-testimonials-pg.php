<section class="Testimonials">
  <div class="container">
    <div class="row">

      <?php 

        $testimonialArguments = array(
          'post_type' => 'testimonial',
          'posts_per_page' => 10
        );

        $testimonials = new WP_Query($testimonialArguments);

        if ($testimonials->have_posts()) :
          while ($testimonials->have_posts()) : $testimonials->the_post();
      ?>
            <div class="col-sm-6">
              <div class="testimonial">
                <?php the_content(); ?>
                <h2><?php the_title(); ?></h2>
              </div>
            </div>
      <?php
          endwhile;
        endif;
      ?>




    </div>
  </div>
</section>