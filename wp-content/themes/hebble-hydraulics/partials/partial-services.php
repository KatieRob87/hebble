<section class="Partial-services">
  <div class="container">
    <div class="row">

      <?php
      $args = array(
          'post_parent' => 9,
          'post_type' => 'page',
          'orderby' => 'menu_order'
      );

      $child_query = new WP_Query( $args );
      ?>

      <?php while ( $child_query->have_posts() ) : $child_query->the_post(); ?>
          <div class="col-xs-3">
              <div class="site-tab site-tab--top">
                <span class="site-tab__border-top"></span>
                <p><a style="color: inherit; text-decoration: none;" href="<?php the_permalink(); ?>"><?php the_title(); ?></a></p>
              </div>
            </div>
      <?php endwhile; ?>

    </div>
  </div>
</section>
<!-- /.Partial-services -->