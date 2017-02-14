<section class="Partial-social">
  <div class="container">
    <div class="row">
      <div class="col-sm-4">
        <h2>Connect with Us</h2>
        <div class="social">
          <p>Welcome to our website</p>
        </div>
        <div class="social">
          <p>Hebble Hydraulics is a well-established company based near Huddersfield, providing a range of repairs, remanufacture and replacements of hydraulic and pneumatic cylinders.</p>
        </div>
        <div class="social">
          <p>Bespoke hydraulic cylinders manufactured for special purpose drilling rig</p>
        </div>
      </div>
      <div class="col-sm-8">
        <h2>News</h2>
        <div class="row">

          <?php 

            $newsArgs = array(
              'post_type' => 'post',
              'posts_per_page' => 2
            );

            $news = new WP_Query($newsArgs);

            if($news->have_posts()) :
              while ($news->have_posts()) :
                $news->the_post();
          ?>

          <div class="col-sm-6">
            <?php the_post_thumbnail('medium'); ?>
            <h3><?php the_title(); ?></h3>
            <p><?php echo wp_trim_words( get_the_content(), 20, '...' ); ?></p>
            <a href="<?php the_permalink(); ?>"><button class="button button--primary">Read More</button></a>
          </div>
          <?php
              endwhile;
            endif;
            wp_reset_query();
          ?>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- /.Partial-social -->