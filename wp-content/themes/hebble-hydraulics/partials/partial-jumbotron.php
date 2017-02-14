<section class="Partial-jumbotron">
  <!-- Swiper -->
  <div class="swiper-container-jumbotron">
    <div class="swiper-wrapper">
<?php

// check if the repeater field has rows of data
if( have_rows('banners') ):

  // loop through the rows of data
    while ( have_rows('banners') ) : the_row();
?>
      <div class="swiper-slide">
        <img src="<?php the_sub_field('banner_image'); ?>" alt="">
        
      </div>
<?php

    endwhile;

else :

    if( have_rows('banners', 'option') ):
      while ( have_rows('banners', 'option') ) : the_row();
?>
      <div class="swiper-slide">
        <img src="<?php the_sub_field('image'); ?>" alt="">
      </div>
<?php
      endwhile;
    endif;

endif;

?>

  


    </div>
    <!-- Add Pagination -->
    <!-- <div class="swiper-pagination"></div> -->
  </div>
</section>
<!-- /.Partial-jumbotron -->