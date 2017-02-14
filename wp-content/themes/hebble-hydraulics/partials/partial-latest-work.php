<section class="Partial-latest-work">
  <div class="container-fluid">
    <div class="row">

      <?php 
        $projArgs = array(
          'post_type' => 'project',
          'posts_per_page' => 1
        );

        $proj = new WP_Query($projArgs);

        if ($proj->have_posts()) :
          while ($proj->have_posts()) :
            $proj->the_post();
      ?>
      <div class="col-sm-4">
        <h2>Latest Projects</h2>
        <p><?php the_excerpt(); ?>
        </p>
        <a href="<?php the_permalink(); ?>"><button class="button button--primary">Read More</button></a>
      </div>
      <div class="col-sm-8">
        <div class="row">
          <div class="col-sm-6">
            <img src="<?php the_field('before_image'); ?>" alt="Before Image, Hebble">
          </div>
          <div class="col-sm-6">
            <img src="<?php the_field('after_image'); ?>" alt="After Image, Hebble">
          </div>
        </div>
      </div>
      <?php
          endwhile;
        endif;
      ?>
  




    </div>
  </div>
</section>
<!-- /.Partial-latest-work -->