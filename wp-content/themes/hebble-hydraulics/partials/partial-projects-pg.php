<section class="News">
  <div class="container">
    <div class="row">


      <?php 

        $newsArgs = array(
          'post_type' => 'project',
          'posts_per_page' => 12
        );

        $news = new WP_Query($newsArgs);

        if($news->have_posts()) :
          while ($news->have_posts()) :
            $news->the_post();
      ?>

      <div class="col-sm-6">
        <div class="news-article">
          <div class="news-article__img" style="background: url(<?php the_post_thumbnail_url(); ?>); background-size: cover;"></div>
          <div class="news-article__content">
            <h2><a style="color: white; text-decoration: none;" href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
            <p><?php echo wp_trim_words(get_the_content(), 25, '...'); ?></p>
          </div>
        </div>
      </div>

      <?php
          endwhile;
        endif;
        wp_reset_query();
      ?>

    </div>
  </div>
</section>
<!-- /.News -->